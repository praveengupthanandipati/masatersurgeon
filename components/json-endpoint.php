<?php
// Shared wrapper for the AJAX mail endpoints (consultation-mail.php, contact-mail.php).
// Guarantees a JSON reply, even on a PHP warning or fatal error, so the page never shows
// "Network error". Problems are written to <endpoint>.log next to the endpoint file.

function json_endpoint_respond(array $payload, int $code = 200)
{
    $GLOBALS['json_endpoint_done'] = true;
    while (ob_get_level() > 0) {
        $stray = ob_get_clean();
        if (trim((string) $stray) !== '') {
            // e.g. a warning printed by the host's display_errors setting
            error_log('Discarded output: ' . substr(strip_tags($stray), 0, 1000));
        }
    }
    if (!headers_sent()) {
        http_response_code($code);
        header('Content-Type: application/json; charset=UTF-8');
        header('Cache-Control: no-store');
    }
    echo json_encode($payload);
    exit;
}

// $logFile: where errors go. $handler: returns ['status', 'message', 'errors'] for a POST.
function json_endpoint_run(string $logFile, callable $handler)
{
    ini_set('display_errors', '0');
    ini_set('log_errors', '1');
    ini_set('error_log', $logFile);
    error_reporting(E_ALL);
    ob_start();

    $serverError = ['status' => 'error', 'message' => 'Server error. Please call us or message us on WhatsApp.', 'errors' => []];

    // Runs however the script ends. If it ended without json_endpoint_respond() (fatal error,
    // exit() inside a library, ...), log why and still answer with JSON.
    register_shutdown_function(function () use ($serverError) {
        if (!empty($GLOBALS['json_endpoint_done'])) {
            return;
        }
        $error = error_get_last();
        if ($error) {
            error_log('Ended early: ' . $error['message'] . ' in ' . $error['file'] . ':' . $error['line']);
        } else {
            error_log('Ended early without a reply.');
        }
        json_endpoint_respond($serverError, 500);
    });

    try {
        if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
            json_endpoint_respond(['status' => 'error', 'message' => 'Method not allowed.', 'errors' => []], 405);
        }
        if (session_status() !== PHP_SESSION_ACTIVE) { @session_start(); }

        $result = $handler();
        json_endpoint_respond(['status' => $result['status'], 'message' => $result['message'], 'errors' => $result['errors']]);
    } catch (Throwable $e) {
        error_log('Exception: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine());
        json_endpoint_respond($serverError, 500);
    }
}
