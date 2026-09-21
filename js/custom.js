// Header nav (mobile off-canvas + mega menu accordion)
$(function () {
  var $toggle = $('#mhToggle');
  var $nav = $('#mhNav');
  var $backdrop = $('#mhBackdrop');
  if (!$toggle.length || !$nav.length) return;

  function closeNav() {
    $toggle.removeClass('is-active').attr('aria-expanded', 'false');
    $nav.removeClass('is-active');
    $backdrop.removeClass('is-active');
    $('body').removeClass('mh-nav-open');
    $nav.find('.mh-nav__item--mega').removeClass('is-open');
  }

  function openNav() {
    $toggle.addClass('is-active').attr('aria-expanded', 'true');
    $nav.addClass('is-active');
    $backdrop.addClass('is-active');
    $('body').addClass('mh-nav-open');
  }

  $toggle.on('click', function () {
    if ($nav.hasClass('is-active')) {
      closeNav();
    } else {
      openNav();
    }
  });

  $backdrop.on('click', closeNav);

  $(document).on('keyup', function (e) {
    if (e.key === 'Escape') closeNav();
  });

  // Mega menu: accordion on mobile, hover-intent on desktop
  $nav.on('click', '.mh-mega-trigger', function (e) {
    if (window.innerWidth > 991) return;
    e.preventDefault();
    var $item = $(this).closest('.mh-nav__item--mega');
    var isOpen = $item.hasClass('is-open');
    $item.siblings('.mh-nav__item--mega').removeClass('is-open');
    $item.toggleClass('is-open', !isOpen);
  });

  // Desktop hover-intent: a short close delay bridges the gap between the
  // nav link and the mega panel so the menu doesn't flicker closed while
  // the pointer is travelling between them.
  var closeTimer = null;
  $nav.on('mouseenter', '.mh-nav__item--mega', function () {
    if (window.innerWidth <= 991) return;
    clearTimeout(closeTimer);
    var $item = $(this);
    $item.siblings('.mh-nav__item--mega').removeClass('is-open');
    $item.addClass('is-open');
  });

  $nav.on('mouseleave', '.mh-nav__item--mega', function () {
    if (window.innerWidth <= 991) return;
    var $item = $(this);
    closeTimer = setTimeout(function () {
      $item.removeClass('is-open');
    }, 250);
  });

  $(window).on('resize', function () {
    if (window.innerWidth > 991) {
      closeNav();
    } else {
      $nav.find('.mh-nav__item--mega').removeClass('is-open');
    }
  });
});

// Home hero carousel
var heroSwiper = new Swiper('.heroSwiper', {
  loop: true,
  effect: 'fade',
  fadeEffect: {
    crossFade: true,
  },
  speed: 1000,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
    pauseOnMouseEnter: true,
  },
  pagination: {
    el: '.hero-carousel .swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.hero-carousel .swiper-button-next',
    prevEl: '.hero-carousel .swiper-button-prev',
  },
  keyboard: {
    enabled: true,
  },
});

// Categories carousel
var categoriesSwiper = new Swiper('.categoriesSwiper', {
  slidesPerView: 2,
  spaceBetween: 14,
  loop: true,
  speed: 700,
  autoplay: {
    delay: 2800,
    disableOnInteraction: false,
    pauseOnMouseEnter: true,
  },
  pagination: {
    el: '.categories-section .swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.category-swiper-next',
    prevEl: '.category-swiper-prev',
  },
  breakpoints: {
    480: {
      slidesPerView: 2,
      spaceBetween: 16,
    },
    640: {
      slidesPerView: 3,
      spaceBetween: 18,
    },
    900: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
    1200: {
      slidesPerView: 5,
      spaceBetween: 22,
    },
    1400: {
      slidesPerView: 6,
      spaceBetween: 24,
    },
  },
});

var swiper = new Swiper('.swiper-testimonials-home', {
      slidesPerView: 1,
      spaceBetween: 10,
	   autoplay: {
        delay: 5000,
        disableOnInteraction: true,
      },
      // init: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 2,
          spaceBetween: 10,
        },
      }
    });
// Custom Marquee JS for immediate repeat and pause on hover
document.addEventListener('DOMContentLoaded', function() {
  var marquee = document.querySelector('.custom-marquee');
  if (marquee) {
    // Duplicate content for seamless loop
    marquee.innerHTML += marquee.innerHTML;
  }
});

     var swiper = new Swiper(".mySwiper-hero", {
      slidesPerView: 1,
      spaceBetween: 2,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".hero-swiper-next",
        prevEl: ".hero-swiper-prev",
      },
      loop: true,
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 10,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 15,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
      },
    });


    var swiper = new Swiper(".mySwiper-hero-right", {
      spaceBetween: 30,
       autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      effect: "fade",
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });



// Header: collapse the top info bar once the page is scrolled, leaving
// just the compact nav sticky at the top.
// Collapsing shrinks the sticky header's own height, which shifts the
// page content and scroll position right at the same threshold that
// triggers the collapse - a single trigger point flickers on/off in a
// loop. A gap between the collapse/expand thresholds (hysteresis) stops
// that: once collapsed, only scrolling back up past a lower point
// re-expands it, so the shrink itself can never retrigger the toggle.
$(function () {
  const $header = $(".site-header");
  let isScrolled = false;
  function toggleHeaderClass() {
    const scrollTop = $(window).scrollTop();
    if (!isScrolled && scrollTop > 80) {
      isScrolled = true;
      $header.addClass("is-scrolled");
    } else if (isScrolled && scrollTop < 40) {
      isScrolled = false;
      $header.removeClass("is-scrolled");
    }
  }
  $(window).on('scroll', toggleHeaderClass);
  toggleHeaderClass(); // Run on page load
  
  // Initialize AOS with premium settings
  if (typeof AOS !== 'undefined') {
    var prefersReducedMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    AOS.init({
      duration: 800,
      once: true,
      offset: 60,
      easing: 'ease-out-cubic',
      anchorPlacement: 'top-bottom',
      disable: prefersReducedMotion
    });
    // images/fonts finishing late shift the layout, so re-measure once everything has loaded
    $(window).on('load', function () { AOS.refresh(); });
  }

  // Scroll progress bar (one rAF-throttled listener)
  var progressBar = document.getElementById('scrollProgress');
  if (progressBar) {
    var progressTicking = false;
    var updateProgress = function () {
      var doc = document.documentElement;
      var max = (doc.scrollHeight - window.innerHeight) || 1;
      var ratio = Math.min(1, Math.max(0, (window.pageYOffset || doc.scrollTop) / max));
      progressBar.style.webkitTransform = 'scaleX(' + ratio + ')';
      progressBar.style.transform = 'scaleX(' + ratio + ')';
      progressTicking = false;
    };
    var raf = window.requestAnimationFrame || function (cb) { return setTimeout(cb, 16); };
    $(window).on('scroll resize', function () {
      if (!progressTicking) {
        progressTicking = true;
        raf(updateProgress);
      }
    });
    updateProgress();
  }

  // Scroll-triggered number counter animation
  function animateCounters() {
    var counters = document.querySelectorAll('.safety-col .number');
    var observer = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          var el = entry.target;
          var target = parseInt(el.textContent);
          var count = 0;
          var increment = 1;
          var timer = setInterval(function() {
            count += increment;
            el.textContent = count < 10 ? '0' + count : count;
            if (count >= target) {
              clearInterval(timer);
              el.textContent = target < 10 ? '0' + target : target;
            }
          }, 150);
          observer.unobserve(el);
        }
      });
    }, { threshold: 0.5 });
    counters.forEach(function(counter) {
      observer.observe(counter);
    });
  }
  animateCounters();

  // Subtle parallax for decorative icons on scroll
  $(window).on('scroll', function() {
    var scrollTop = $(window).scrollTop();
    $('.whovr01icon').css('transform', 'translateY(' + (scrollTop * 0.04) + 'px)');
    $('.whovr02icon').css('transform', 'translateY(' + (scrollTop * -0.03) + 'px)');
    $('.reachicon01').css('transform', 'translateY(' + (scrollTop * 0.05) + 'px) rotate(' + (scrollTop * 0.02) + 'deg)');
    $('.reachicon02').css('transform', 'translateY(' + (scrollTop * -0.04) + 'px) rotate(' + (scrollTop * -0.015) + 'deg)');
    $('.zoneicon01').css('transform', 'translateY(' + (scrollTop * 0.03) + 'px)');
  });
});
// Only handle mobile: remove styles on resize to mobile
$(function () {
  function handleDropdownMobile() {
    if (window.innerWidth <= 991) {
      $(".navbar-nav .dropdown").off('mouseenter mouseleave');
      $(".navbar-nav .dropdown-menu").removeAttr('style');
    }
  }
  handleDropdownMobile();
  $(window).on('resize', handleDropdownMobile);
});


//on click move to browser top
$(document).ready(function () {
  var $movetop = $("#movetop");

  $(window).scroll(function () {
    $movetop.toggleClass("is-visible", $(this).scrollTop() > 400);
  });

  //click event to smooth-scroll to top
  $movetop.click(function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
});

//swiper home banmner
var swiper = new Swiper(".homeSwiper", {
  slidesPerView: 1,
  spaceBetween: 0,
  speed: 1200,
  // effect: "cube",
  // cubeEffect: {
  //   slideShadows: false,
  // },
  // effect: "flip",
  // flipEffect: {
  //   slideShadows: false,
  // },
  // Boolean: true,
  parallax: true,
  autoplay: {
    delay: 8000,
    disableOnInteraction: true,
  },
  loop: true,
  keyboard: {
    enabled: true,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// Testimonials carousel (12 slides, smooth continuous loop)
var testimonialsSwiper = new Swiper(".testimonials-swiper", {
  slidesPerView: 1,
  spaceBetween: 24,
  loop: true,
  speed: 700,
  grabCursor: true,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
    pauseOnMouseEnter: true,
  },
  pagination: {
    el: ".testimonials-section .swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".testimonials-section .swiper-button-next",
    prevEl: ".testimonials-section .swiper-button-prev",
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 24,
    },
    1200: {
      slidesPerView: 3,
      spaceBetween: 28,
    },
  },
});

//speakers
var swiper = new Swiper(".swiper-speakers", {
  slidesPerView: 1,
  spaceBetween: 10,
  // loop: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: true,
  },
  // init: false,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 6,
      spaceBetween: 10,
    },
    1500: {
      slidesPerView: 7,
      spaceBetween: 10,
    },
  },
});

(function () {
  function hidePageLoader() {
    setTimeout(function () {
      var loader = document.getElementById("load");
      if (loader) loader.classList.add("is-hidden");
    }, 500);
  }
  // If the document already finished loading by the time this script runs
  // (common on fast/cached loads), "complete" has already fired and
  // onreadystatechange would never trigger — hide the loader right away.
  if (document.readyState === "complete") {
    hidePageLoader();
  } else {
    document.onreadystatechange = function () {
      if (document.readyState === "complete") {
        hidePageLoader();
      }
    };
  }
})();


// Mobile category drawer (off-canvas)
$(function () {
  var $toggle = $('#menuToggle');
  var $drawer = $('#mobileCategoryDrawer');
  var $backdrop = $('#mobileDrawerBackdrop');
  var $closeBtn = $('#mobileDrawerClose');
  if (!$toggle.length || !$drawer.length) return;

  function openDrawer() {
    $drawer.addClass('is-active').attr('aria-hidden', 'false');
    $backdrop.addClass('is-active');
    $toggle.addClass('is-active').attr('aria-expanded', 'true');
    $('body').addClass('drawer-open');
  }

  function closeDrawer() {
    $drawer.removeClass('is-active').attr('aria-hidden', 'true');
    $backdrop.removeClass('is-active');
    $toggle.removeClass('is-active').attr('aria-expanded', 'false');
    $('body').removeClass('drawer-open');
  }

  $toggle.on('click', function () {
    if ($drawer.hasClass('is-active')) {
      closeDrawer();
    } else {
      openDrawer();
    }
  });

  $closeBtn.on('click', closeDrawer);
  $backdrop.on('click', closeDrawer);

  $(document).on('keyup', function (e) {
    if (e.key === 'Escape') closeDrawer();
  });
});

// Tab Products - desktop tabs / mobile accordion
$(function () {
  var $tabProducts = $('.tab-products');
  if (!$tabProducts.length) return;

  function setActiveTab(target) {
    $tabProducts.attr('data-active', target);
    $tabProducts.find('.tab-group').removeClass('is-current');
    $tabProducts.find('.tab-group[data-category="' + target + '"]').addClass('is-current');
  }

  // Desktop tabs
  setActiveTab($tabProducts.attr('data-active') || 'all');

  $tabProducts.on('click', '.tab-btn', function () {
    var target = $(this).data('target');
    $(this).addClass('is-active').siblings('.tab-btn').removeClass('is-active');
    setActiveTab(target);
  });

  // Mobile accordion (single-open)
  $tabProducts.on('click', '.accordion-header', function () {
    var $group = $(this).closest('.tab-group');
    var isOpen = $group.hasClass('is-open');
    $group.siblings('.tab-group').removeClass('is-open');
    $group.toggleClass('is-open', !isOpen);
  });
});

// Header search modal - autocomplete with product catalog, auto-populated on open
$(function () {
  var products = [
    { name: "Floral Party Wear Dress", category: "Dresses" },
    { name: "Emerald Green Casual Dress", category: "Dresses" },
    { name: "Designer Anarkali Dress", category: "Dresses" },
    { name: "Indo-Western Fusion Dress", category: "Dresses" },
    { name: "Ivory Wedding Gown", category: "Dresses" },
    { name: "Chiffon A-Line Dress", category: "Dresses" },
    { name: "Sequin Evening Gown", category: "Dresses" },
    { name: "Cotton Summer Dress", category: "Dresses" },
    { name: "Georgette Office Wear Dress", category: "Dresses" },
    { name: "Kanjivaram Silk Saree", category: "Sarees" },
    { name: "Banarasi Wedding Saree", category: "Sarees" },
    { name: "Chanderi Cotton Saree", category: "Sarees" },
    { name: "Bandhani Printed Saree", category: "Sarees" },
    { name: "Designer Georgette Saree", category: "Sarees" },
    { name: "Bridal Red Silk Saree", category: "Sarees" },
    { name: "Pastel Chiffon Saree", category: "Sarees" },
    { name: "Handloom Cotton Saree", category: "Sarees" },
    { name: "Festive Printed Saree", category: "Sarees" },
    { name: "Kundan Bridal Necklace Set", category: "Jewelleries" },
    { name: "Temple Gold Earrings", category: "Jewelleries" },
    { name: "Antique Silver Bangles", category: "Jewelleries" },
    { name: "Fashion Statement Rings", category: "Jewelleries" },
    { name: "Pearl Drop Earrings", category: "Jewelleries" },
    { name: "Polki Choker Necklace", category: "Jewelleries" },
    { name: "Meenakari Jhumka Earrings", category: "Jewelleries" }
  ];

  var $input = $('#headerSearchInput');
  var $box = $('#searchSuggestions');
  var $modal = $('#searchModal');
  var activeIndex = -1;

  if (!$input.length || !$box.length) return;

  function escapeRegExp(str) {
    return str.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
  }

  function renderList(list, query) {
    $box.empty();
    activeIndex = -1;

    if (!list.length) {
      $box.append('<div class="no-results">No products found</div>');
      $box.addClass('active');
      return;
    }

    if (!query) {
      $box.append('<div class="suggestion-label">All Products (' + list.length + ')</div>');
    } else {
      $box.append('<div class="suggestion-label">' + list.length + ' result' + (list.length === 1 ? '' : 's') + '</div>');
    }

    list.forEach(function (p) {
      var label = p.name;
      if (query) {
        var re = new RegExp('(' + escapeRegExp(query) + ')', 'ig');
        label = p.name.replace(re, '<strong>$1</strong>');
      }
      var $item = $(
        '<div class="suggestion-item">' +
          '<svg class="suggestion-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="1.8"/><path d="M21 21L16.65 16.65" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>' +
          '<span class="item-name">' + label + '</span>' +
          '<span class="item-category">' + p.category + '</span>' +
        '</div>'
      );
      $item.attr('data-name', p.name);
      $box.append($item);
    });

    $box.addClass('active');
  }

  function filterProducts(val) {
    var q = val.toLowerCase();
    return products.filter(function (p) {
      return p.name.toLowerCase().indexOf(q) !== -1 || p.category.toLowerCase().indexOf(q) !== -1;
    });
  }

  function refresh() {
    var val = $input.val().trim();
    if (!val) {
      renderList(products, '');
    } else {
      renderList(filterProducts(val), val);
    }
  }

  $input.on('focus input', refresh);

  $box.on('click', '.suggestion-item', function () {
    $input.val($(this).attr('data-name'));
    refresh();
  });

  $input.on('keydown', function (e) {
    var $items = $box.find('.suggestion-item');
    if (!$items.length) return;

    if (e.key === 'ArrowDown') {
      e.preventDefault();
      activeIndex = (activeIndex + 1) % $items.length;
      $items.removeClass('active-item').eq(activeIndex).addClass('active-item');
    } else if (e.key === 'ArrowUp') {
      e.preventDefault();
      activeIndex = (activeIndex - 1 + $items.length) % $items.length;
      $items.removeClass('active-item').eq(activeIndex).addClass('active-item');
    } else if (e.key === 'Enter') {
      if (activeIndex > -1) {
        e.preventDefault();
        $items.eq(activeIndex).trigger('click');
      }
    }
  });

  // Reset on open/close: the product list stays hidden until the user
  // clicks into the field or starts typing (see the 'focus input' handler above).
  if ($modal.length) {
    $modal.on('shown.bs.modal', function () {
      $input.val('');
      $box.empty().removeClass('active');
    });
    $modal.on('hidden.bs.modal', function () {
      $input.val('');
      $box.empty().removeClass('active');
    });
  }
});

// Load download links only when user scrolls near them
document.addEventListener('DOMContentLoaded', function() {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const link = entry.target;
        link.href = link.dataset.src;
        observer.unobserve(link);
      }
    });
  });

  document.querySelectorAll('[data-src]').forEach(el => {
    observer.observe(el);
  });
});

// Footer copyright year
document.addEventListener('DOMContentLoaded', function () {
  var yearEl = document.getElementById('footerYear');
  if (yearEl) yearEl.textContent = new Date().getFullYear();
});

// Contact form: client-side validation + AJAX submit (the server re-validates everything)
document.addEventListener('DOMContentLoaded', function () {
  var form = document.getElementById('contactForm');
  if (!form) return;

  var alertBox = document.getElementById('contactAlert');
  var submitBtn = document.getElementById('contactSubmit');

  var rules = {
    name: function (v) {
      if (!v) return 'Please enter your name.';
      if (v.length < 2 || v.length > 80 || !/^[A-Za-zÀ-ɏऀ-෿][A-Za-zÀ-ɏऀ-෿\s.'-]*$/.test(v)) return 'Please enter a valid name (letters only, 2-80 characters).';
    },
    phone: function (v) {
      if (!v) return 'Please enter your phone number.';
      if (!/^\+?\d{10,15}$/.test(v.replace(/[\s().-]/g, ''))) return 'Please enter a valid phone number (10-15 digits).';
    },
    email: function (v) {
      if (!v) return 'Please enter your email address.';
      if (v.length > 120 || !/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(v)) return 'Please enter a valid email address.';
    },
    subject: function (v) {
      if (!v) return 'Please enter a subject.';
      if (v.length < 3 || v.length > 120) return 'Subject must be between 3 and 120 characters.';
    },
    message: function (v) {
      if (!v) return 'Please enter your message.';
      if (v.length < 10 || v.length > 2000) return 'Message must be between 10 and 2000 characters.';
    }
  };

  function showError(name, message) {
    var input = form.elements[name];
    var out = form.querySelector('[data-error-for="' + name + '"]');
    if (input) input.classList.toggle('is-invalid', !!message);
    if (out) out.textContent = message || '';
  }

  function validateField(name) {
    var message = rules[name](form.elements[name].value.trim()) || '';
    showError(name, message);
    return !message;
  }

  function showAlert(type, message) {
    alertBox.className = 'contact-alert contact-alert-' + type;
    alertBox.textContent = message;
    alertBox.hidden = false;
  }

  Object.keys(rules).forEach(function (name) {
    var input = form.elements[name];
    input.addEventListener('blur', function () { validateField(name); });
    input.addEventListener('input', function () {
      if (input.classList.contains('is-invalid')) validateField(name);
    });
  });

  form.addEventListener('submit', function (e) {
    e.preventDefault();
    alertBox.hidden = true;

    var firstInvalid = null;
    Object.keys(rules).forEach(function (name) {
      if (!validateField(name) && !firstInvalid) firstInvalid = form.elements[name];
    });
    if (firstInvalid) {
      firstInvalid.focus();
      return;
    }

    submitBtn.disabled = true;
    fetch(form.action, {
      method: 'POST',
      body: new FormData(form),
      headers: { 'X-Requested-With': 'XMLHttpRequest' }
    })
      .then(function (res) { return res.json(); })
      .then(function (data) {
        if (data.status === 'success') {
          form.reset();
          Object.keys(rules).forEach(function (name) { showError(name, ''); });
        } else if (data.errors) {
          Object.keys(data.errors).forEach(function (name) { showError(name, data.errors[name]); });
        }
        showAlert(data.status === 'success' ? 'success' : 'error', data.message || 'Something went wrong. Please try again.');
      })
      .catch(function () {
        showAlert('error', 'Network error. Please check your connection and try again.');
      })
      .finally(function () { submitBtn.disabled = false; });
  });
});

// Free consultation form: client-side validation + AJAX submit (the server re-validates everything)
document.addEventListener('DOMContentLoaded', function () {
  var form = document.getElementById('apptForm');
  if (!form) return;

  var alertBox = document.getElementById('apptAlert');
  var submitBtn = document.getElementById('apptSubmit');

  var rules = {
    name: function (v) {
      if (!v) return 'Please enter the patient name.';
      if (v.length < 2 || v.length > 80 || !/^[A-Za-zÀ-ɏऀ-෿][A-Za-zÀ-ɏऀ-෿\s.'-]*$/.test(v)) return 'Please enter a valid name (letters only, 2-80 characters).';
    },
    phone: function (v) {
      if (!v) return 'Please enter your mobile number.';
      var digits = v.replace(/[\s().-]/g, '').replace(/^(?:\+?91|0)(?=\d{10}$)/, '');
      if (!/^[6-9]\d{9}$/.test(digits)) return 'Please enter a valid 10 digit mobile number.';
    },
    city: function (v) {
      if (!v) return 'Please select your city.';
    },
    treatment: function (v) {
      if (!v) return 'Please select a disease or treatment.';
    }
  };

  function showError(name, message) {
    var input = form.elements[name];
    var out = form.querySelector('[data-error-for="' + name + '"]');
    if (input) input.classList.toggle('is-invalid', !!message);
    if (out) out.textContent = message || '';
  }

  function validateField(name) {
    var message = rules[name](form.elements[name].value.trim()) || '';
    showError(name, message);
    return !message;
  }

  function showAlert(type, message) {
    alertBox.className = 'contact-alert contact-alert-' + type;
    alertBox.textContent = message;
    alertBox.hidden = false;
  }

  Object.keys(rules).forEach(function (name) {
    var input = form.elements[name];
    input.addEventListener('blur', function () { validateField(name); });
    input.addEventListener('input', function () {
      if (input.classList.contains('is-invalid')) validateField(name);
    });
    input.addEventListener('change', function () { validateField(name); });
  });

  // keep only digits and common separators in the mobile field
  form.elements.phone.addEventListener('input', function () {
    this.value = this.value.replace(/[^\d+\s-]/g, '');
  });

  form.addEventListener('submit', function (e) {
    e.preventDefault();
    alertBox.hidden = true;

    var firstInvalid = null;
    Object.keys(rules).forEach(function (name) {
      if (!validateField(name) && !firstInvalid) firstInvalid = form.elements[name];
    });
    if (firstInvalid) {
      firstInvalid.focus();
      return;
    }

    submitBtn.disabled = true;
    fetch(form.action, {
      method: 'POST',
      body: new FormData(form),
      headers: { 'X-Requested-With': 'XMLHttpRequest' }
    })
      .then(function (res) { return res.json(); })
      .then(function (data) {
        if (data.status === 'success') {
          form.reset();
          Object.keys(rules).forEach(function (name) { showError(name, ''); });
        } else if (data.errors) {
          Object.keys(data.errors).forEach(function (name) { showError(name, data.errors[name]); });
        }
        showAlert(data.status === 'success' ? 'success' : 'error', data.message || 'Something went wrong. Please try again.');
        alertBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
      })
      .catch(function () {
        showAlert('error', 'Network error. Please check your connection and try again.');
      })
      .finally(function () { submitBtn.disabled = false; });
  });
});
