<?php
// Central data source for repeated components across the site.
return [

    // per-page SEO meta, keyed by script filename. head.php reads this
    // automatically for the current page (falls back to 'index.php').
    'pages' => [
        'index.php' => [
            'title'       => 'Master Surgeon | Expert Laparoscopic &amp; General Surgery Clinic',
            'description' => 'Master Surgeon offers advanced laparoscopic and open surgery for hernia, piles, fistula, fissure, gallstones, appendicitis, hydrocele, thyroid, breast and stomach & intestine cancers, along with orthopedic, diabetes and pain management care. Book a free appointment with our expert surgeons today.',
            'keywords'    => 'laparoscopic surgery, general surgeon, hernia surgery, piles treatment, fistula surgery, fissure surgery, gallbladder surgery, cholecystectomy, appendicectomy, hydrocele treatment, endoscopy, colonoscopy, hysterectomy, breast surgery, thyroid surgery, stomach cancer surgery, intestine cancer surgery, orthopedic care, diabetes management, pain management, best surgeon near me, master surgeon',
            'canonical'   => 'https://www.mastersurgeon.com/',
        ],
        'about.php' => [
            'title'       => 'About Us | Master Surgeon &mdash; Dr. S. Ravi Kumar, Laparoscopic &amp; General Surgeon',
            'description' => 'Learn about Master Surgeon, led by Dr. S. Ravi Kumar &mdash; a trusted Laparoscopic &amp; Laser Surgeon offering advanced, minimally invasive treatment for hernia, piles, gallbladder, hydrocele and other general surgical conditions with a patient-first approach.',
            'keywords'    => 'about master surgeon, dr s ravi kumar, laparoscopic surgeon, laser surgeon, general surgery clinic, best surgeon near me, hernia specialist, piles specialist, minimally invasive surgery, why choose master surgeon',
            'canonical'   => 'https://www.mastersurgeon.com/about.php',
        ],
        'doctors.php' => [
            'title'       => 'Our Doctors | Master Surgeon &mdash; Laparoscopic &amp; Orthopedic Specialists',
            'description' => 'Meet the doctors at Master Surgeon: Dr. S. Ravi Kumar, Laparoscopic &amp; Laser Surgeon, and Dr. Sunkara Rajesh, Orthopedic Surgeon &mdash; experienced specialists offering personalized, minimally invasive surgical and orthopedic care.',
            'keywords'    => 'master surgeon doctors, dr s ravi kumar, dr sunkara rajesh, laparoscopic surgeon, orthopedic surgeon, laser surgeon, best surgeon near me, orthopedic specialist',
            'canonical'   => 'https://www.mastersurgeon.com/doctors.php',
        ],
    ],

    'nav_links' => [
        ['label' => "Home", 'href' => 'index.php'],
        ['label' => "FAQ's", 'href' => '#'],
        ['label' => 'Blogs', 'href' => '#'],
        ['label' => 'Ask a question', 'href' => '#'],
        ['label' => 'Contact us', 'href' => '#'],
    ],

    'company_dropdown' => [
        ['label' => 'About us', 'href' => 'about.php'],
        ['label' => 'Doctors', 'href' => 'doctors.php'],
    ],

    'services_dropdown' => [
        ['label' => 'Appendicectomy Open / Laparoscopy', 'href' => '#'],
        ['label' => 'Stomach &amp; Intestine Cancers', 'href' => '#'],
        ['label' => 'Hydrocele', 'href' => '#'],
        ['label' => 'Cholecystectomy Open / Laparoscopy', 'href' => '#'],
        ['label' => 'Hernia Surgery Open / Laparoscopy', 'href' => '#'],
        ['label' => 'Endoscopy / Colonoscopy', 'href' => '#'],
        ['label' => 'Hysterectomy Open / Laparoscopy', 'href' => '#'],
        ['label' => 'Piles, Fistula and Fissure Surgery', 'href' => '#'],
        ['label' => 'Breast and Thyroid Disorders', 'href' => '#'],
        ['label' => 'Orthopedic Care', 'href' => '#'],
        ['label' => 'Diabetes Management', 'href' => '#'],
        ['label' => 'Pain Management', 'href' => '#'],
    ],

    'treatment_options' => [
        'Hernia Surgery',
        'Piles, Fistula &amp; Fissure',
        'Gallbladder (Cholecystectomy)',
        'Appendicectomy',
        'Hydrocele',
        'Hysterectomy',
        'Endoscopy / Colonoscopy',
        'Breast &amp; Thyroid Disorders',
        'Orthopedic Care',
        'Diabetes Management',
        'Pain Management',
    ],

    'hero_strip' => [
        ['icon' => 'fi-rs-scalpel', 'title' => 'Minimal Incisions', 'text' => 'Less Pain, Faster Recovery'],
        ['icon' => 'fi-rs-microchip', 'title' => 'Advanced Technology', 'text' => 'Safety &amp; Precision'],
        ['icon' => 'fi-rs-hand-holding-heart', 'title' => 'Compassionate Care', 'text' => 'Patient First Approach'],
        ['icon' => 'fi-rs-user-md', 'title' => 'Experienced Surgeon', 'text' => 'Expertise You Can Trust'],
    ],

    'services' => [
        ['icon' => 'fi-rs-abdomen', 'label' => 'Appendicectomy<br>Open / Laparoscopy', 'delay' => 0],
        ['icon' => 'fi-rs-stomach', 'label' => 'Stomach &amp; Intestine<br>Cancers', 'delay' => 60],
        ['icon' => 'fi-rs-urology', 'label' => 'Hydrocele', 'delay' => 120],
        ['icon' => 'fi-rs-operation', 'label' => 'Cholecystectomy<br>Open / Laparoscopy', 'delay' => 180],
        ['icon' => 'fi-rs-muscle', 'label' => 'Hernia Surgery<br>Open / Laparoscopy', 'delay' => 240],
        ['icon' => 'fi-rs-microscope', 'label' => 'Endoscopy /<br>Colonoscopy', 'delay' => 300],
        ['icon' => 'fi-rs-gynecology', 'label' => 'Hysterectomy<br>Open / Laparoscopy', 'delay' => 0],
        ['icon' => 'fi-rs-bandage-wound', 'label' => 'Piles, Fistula and<br>Fissure Surgery', 'delay' => 60],
        ['icon' => 'fi-rs-ribbon', 'label' => 'Breast and Thyroid<br>Disorders', 'delay' => 120],
        ['icon' => 'fi-rs-bone', 'label' => 'Orthopedic<br>Care', 'delay' => 180],
        ['icon' => 'fi-rs-glucose', 'label' => 'Diabetes<br>Management', 'delay' => 240],
        ['icon' => 'fi-rs-person-back-pain', 'label' => 'Pain<br>Management', 'delay' => 300],
    ],

    'journey_steps' => [
        [
            'number' => '01',
            'title' => 'Pre Surgery',
            'bg' => 'img/slider01.jpg',
            'delay' => 0,
            'points' => [
                'Detailed consultation &amp; diagnosis',
                'Pre-anaesthesia fitness check',
                'Procedure explained in clear terms',
                'Insurance &amp; paperwork assistance',
            ],
        ],
        [
            'number' => '02',
            'title' => 'During Surgery',
            'bg' => 'img/slider02.jpg',
            'delay' => 150,
            'points' => [
                'Advanced laparoscopic technology',
                'Experienced surgical team',
                'Continuous vital monitoring',
                'Minimal incisions, maximum precision',
            ],
        ],
        [
            'number' => '03',
            'title' => 'Recovery',
            'bg' => 'img/slider03.jpg',
            'delay' => 300,
            'points' => [
                'Dedicated post-op care coordinator',
                'Pain management &amp; wound care',
                'Scheduled follow-up visits',
                '24x7 support for any concerns',
            ],
        ],
    ],

    'recovery_steps' => [
        ['number' => '01', 'icon' => 'fi-rs-stethoscope', 'title' => 'Consultation &amp; Diagnosis', 'text' => 'A detailed consultation with your procedure explained in clear, simple terms.', 'tag' => 'Expert Consultation', 'delay' => 0],
        ['number' => '02', 'icon' => 'fi-rs-clipboard-check', 'title' => 'Pre-Surgery Preparation', 'text' => 'Fitness checks and complete paperwork assistance ahead of your procedure.', 'tag' => 'Hassle-free Prep', 'delay' => 60],
        ['number' => '03', 'icon' => 'fi-rs-scalpel', 'title' => 'Advanced Surgical Care', 'text' => 'Minimally invasive laparoscopic technique from an experienced surgical team.', 'tag' => 'Laparoscopic Precision', 'delay' => 120],
        ['number' => '04', 'icon' => 'fi-rs-heart-rate', 'title' => 'Continuous Monitoring', 'text' => 'Vitals monitored throughout the procedure for your safety and comfort.', 'tag' => '24x7 Safety', 'delay' => 0],
        ['number' => '05', 'icon' => 'fi-rs-bed', 'title' => 'Smooth Discharge', 'text' => 'Pain management and wound-care guidance before a hassle-free discharge.', 'tag' => 'Quick Recovery', 'delay' => 60],
        ['number' => '06', 'icon' => 'fi-rs-calendar-check', 'title' => 'Recovery &amp; Follow-Up', 'text' => "Scheduled follow-ups and round-the-clock support once you're back home.", 'tag' => 'Ongoing Support', 'delay' => 120],
    ],

    'testimonials' => [
        ['avatar' => 'RK', 'name' => 'Rajesh K.', 'role' => 'Hernia Surgery Patient', 'text' => 'The laparoscopic hernia surgery was quick and almost painless. I was back to work within a week!'],
        ['avatar' => 'SM', 'name' => 'Sunita M.', 'role' => 'Gallbladder Surgery Patient', 'text' => 'Dr. Ravi Kumar explained every step clearly. The surgery went smoothly and recovery was faster than I expected.'],
        ['avatar' => 'AP', 'name' => 'Arun P.', 'role' => 'Piles Treatment Patient', 'text' => 'Years of discomfort ended with a simple day-care procedure. Highly recommend the whole team.'],
        ['avatar' => 'MR', 'name' => 'Meena R.', 'role' => 'Hysterectomy Patient', 'text' => 'Compassionate care throughout. Minimal scarring and I recovered much quicker than I expected.'],
        ['avatar' => 'VS', 'name' => 'Vikram S.', 'role' => 'Appendix Surgery Patient', 'text' => 'It was an emergency, but the team handled everything calmly and professionally from start to finish.'],
        ['avatar' => 'KN', 'name' => 'Kavitha N.', 'role' => 'Hydrocele Treatment Patient', 'text' => 'Simple, effective treatment with no complications at all. Very satisfied with the results.'],
        ['avatar' => 'PT', 'name' => 'Prakash T.', 'role' => 'Colonoscopy Patient', 'text' => 'The procedure was quick and the staff made sure I was comfortable the entire time.'],
        ['avatar' => 'LD', 'name' => 'Lakshmi D.', 'role' => 'Thyroid Care Patient', 'text' => 'Thorough diagnosis and a treatment plan that was easy to understand. Thank you for the care.'],
        ['avatar' => 'SB', 'name' => 'Suresh B.', 'role' => 'Stomach Care Patient', 'text' => "Grateful for the advanced treatment I received. The team's expertise gave my family real confidence."],
        ['avatar' => 'AV', 'name' => 'Anitha V.', 'role' => 'Hernia Surgery Patient', 'text' => 'Painless recovery and the follow-up support afterward was genuinely excellent.'],
        ['avatar' => 'RG', 'name' => 'Ramesh G.', 'role' => 'Gallstone Surgery Patient', 'text' => 'Professional, caring and efficient. My surgery was handled with real skill and attention.'],
        ['avatar' => 'DJ', 'name' => 'Deepa J.', 'role' => 'Fissure Surgery Patient', 'text' => 'Finally pain-free after my treatment. The entire experience, start to finish, was reassuring.'],
    ],

    'blogs' => [
        ['img' => 'img/slider01.jpg', 'tag' => 'Hernia Care', 'title' => '5 Signs You Might Need Hernia Surgery', 'excerpt' => "Know the early warning signs and when it's the right time to consult a surgeon.", 'read_time' => '4 min read', 'delay' => 0],
        ['img' => 'img/slider02.jpg', 'tag' => 'Laparoscopy', 'title' => "Laparoscopic vs. Open Surgery: What's the Difference?", 'excerpt' => 'A simple breakdown of both techniques and how they affect recovery time.', 'read_time' => '5 min read', 'delay' => 80],
        ['img' => 'img/slider03.jpg', 'tag' => 'Piles Care', 'title' => 'Piles, Fistula &amp; Fissure: Myths vs. Facts', 'excerpt' => 'Separating common misconceptions from what modern treatment actually involves.', 'read_time' => '3 min read', 'delay' => 160],
        ['img' => 'img/slider01.jpg', 'tag' => 'Recovery', 'title' => 'Life After Gallbladder Surgery: What to Expect', 'excerpt' => 'Diet, activity and recovery timelines to help you plan your first few weeks.', 'read_time' => '4 min read', 'delay' => 240],
    ],

    'footer_quick_links' => [
        ['label' => 'Home', 'href' => 'index.php'],
        ['label' => 'About us', 'href' => 'about.php'],
        ['label' => 'Doctors', 'href' => 'doctors.php'],
        ['label' => "FAQ's", 'href' => '#'],
        ['label' => 'Blogs', 'href' => '#'],
        ['label' => 'Ask a question', 'href' => '#'],
        ['label' => 'Contact us', 'href' => '#'],
    ],

    'footer_services' => [
        ['label' => 'Hernia Surgery', 'href' => '#'],
        ['label' => 'Gallbladder Surgery', 'href' => '#'],
        ['label' => 'Piles, Fistula &amp; Fissure', 'href' => '#'],
        ['label' => 'Hysterectomy', 'href' => '#'],
        ['label' => 'Endoscopy / Colonoscopy', 'href' => '#'],
        ['label' => 'Breast &amp; Thyroid Disorders', 'href' => '#'],
    ],

    'footer_contact' => [
        ['icon' => 'fi-rs-phone-call', 'type' => 'tel', 'href' => 'tel:+919676717852', 'text' => '+91 96767 17852'],
        ['icon' => 'fi-rs-envelope', 'type' => 'mailto', 'href' => 'mailto:info@mastersurgeon.com', 'text' => 'info@mastersurgeon.com'],
        ['icon' => 'fi-rs-clock', 'type' => 'text', 'text' => 'Mon - Sat: 9:00 AM - 8:00 PM'],
    ],

    'social_links' => [
        [
            'label' => 'Facebook',
            'href' => '#',
            'path' => 'M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z',
        ],
        [
            'label' => 'Instagram',
            'href' => '#',
            'path' => 'M12 2.16c3.2 0 3.58.012 4.85.07 1.17.054 1.8.249 2.23.415.56.217.96.477 1.38.896.42.42.68.819.9 1.381.16.422.36 1.057.41 2.227.06 1.266.07 1.646.07 4.85s-.01 3.585-.07 4.85c-.06 1.17-.26 1.805-.42 2.227-.22.562-.48.96-.9 1.382-.42.419-.82.679-1.38.896-.42.164-1.06.36-2.23.413-1.27.057-1.65.07-4.86.07-3.21 0-3.58-.015-4.86-.074-1.17-.061-1.81-.256-2.23-.421-.57-.224-.96-.479-1.38-.897-.42-.419-.69-.824-.9-1.38-.16-.42-.36-1.065-.42-2.235-.045-1.26-.06-1.649-.06-4.844 0-3.196.015-3.586.06-4.861.06-1.17.26-1.814.42-2.234.21-.57.48-.96.9-1.381.42-.419.81-.689 1.38-.898.42-.166 1.05-.361 2.22-.421 1.28-.045 1.65-.06 4.86-.06zM12 0C8.74 0 8.33.014 7.05.072 5.78.132 4.9.333 4.14.63c-.79.306-1.46.717-2.13 1.384S.94 3.35.63 4.14C.33 4.905.13 5.775.07 7.053.01 8.333 0 8.74 0 12s.01 3.667.07 4.947c.06 1.277.26 2.148.56 2.913.3.788.71 1.459 1.38 2.126.67.666 1.34 1.079 2.13 1.384.76.296 1.63.499 2.91.558 1.28.06 1.69.072 4.95.072s3.67-.014 4.95-.072c1.28-.06 2.15-.262 2.91-.558.79-.306 1.46-.718 2.13-1.384.67-.667 1.08-1.335 1.38-2.126.3-.765.5-1.636.56-2.913.06-1.28.07-1.687.07-4.947s-.01-3.667-.07-4.947c-.06-1.277-.26-2.149-.56-2.913-.3-.789-.71-1.459-1.38-2.126C21.32 1.347 20.65.935 19.86.63c-.76-.297-1.63-.499-2.91-.558C15.67.014 15.26 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm7.85-10.405a1.44 1.44 0 1 1-2.88 0 1.44 1.44 0 0 1 2.88 0z',
        ],
        [
            'label' => 'LinkedIn',
            'href' => '#',
            'path' => 'M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z',
        ],
        [
            'label' => 'YouTube',
            'href' => '#',
            'path' => 'M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z',
        ],
    ],

    // used on about.php
    'why_choose' => [
        ['icon' => 'fi-rs-user-md', 'title' => 'Expert Surgical Team', 'text' => 'Led by Dr. S. Ravi Kumar, a Laparoscopic &amp; Laser Surgeon with years of hands-on surgical experience.'],
        ['icon' => 'fi-rs-microchip', 'title' => 'Advanced Technology', 'text' => 'Modern laparoscopic and laser equipment for safer, more precise and minimally invasive procedures.'],
        ['icon' => 'fi-rs-scalpel', 'title' => 'Minimally Invasive Techniques', 'text' => 'Smaller incisions mean less pain, minimal scarring and a noticeably faster recovery.'],
        ['icon' => 'fi-rs-hand-holding-heart', 'title' => 'Patient-First Approach', 'text' => 'Personalized care plans built around your comfort, your questions and your concerns.'],
        ['icon' => 'fi-rs-check-circle', 'title' => 'Transparent Consultations', 'text' => 'Clear, honest explanations of your diagnosis, procedure and costs before you decide anything.'],
        ['icon' => 'fi-rs-bed', 'title' => 'Supported Recovery', 'text' => 'Dedicated post-op care coordination and follow-up visits until you are fully healed.'],
        ['icon' => 'fi-rs-clock', 'title' => '24x7 Availability', 'text' => 'Round-the-clock support for emergencies, queries and post-surgery concerns.'],
        ['icon' => 'fi-rs-star', 'title' => 'Trusted by 50,000+ Patients', 'text' => 'A proven track record of successful surgeries and a 4.9/5 patient rating.'],
    ],

    'special_features' => [
        ['icon' => 'fi-rs-microscope', 'label' => 'Advanced<br>Diagnostic Facilities'],
        ['icon' => 'fi-rs-operation', 'label' => 'Laparoscopic<br>&amp; Laser Surgery'],
        ['icon' => 'fi-rs-stethoscope', 'label' => 'Free Initial<br>Consultation'],
        ['icon' => 'fi-rs-clipboard-check', 'label' => 'Personalized<br>Treatment Plans'],
        ['icon' => 'fi-rs-heart-rate', 'label' => 'Continuous<br>Post-Op Monitoring'],
        ['icon' => 'fi-rs-calendar-check', 'label' => 'Easy Appointment<br>Scheduling'],
        ['icon' => 'fi-rs-lock', 'label' => 'Secure &amp;<br>Confidential Care'],
        ['icon' => 'fi-rs-phone-call', 'label' => '24x7 Emergency<br>Helpline'],
    ],

    // used on doctors.php
    'doctors' => [
        [
            'img' => 'img/doctor-ravi-kumar.svg',
            'icon' => 'fi-rs-scalpel',
            'name' => 'Dr. S. Ravi Kumar',
            'specialty' => 'Laparoscopic &amp; Laser Surgeon',
            'bio' => 'Dr. S. Ravi Kumar leads the surgical team at Master Surgeon, specializing in advanced laparoscopic and laser techniques for hernia, gallbladder, piles, fistula, fissure and other general surgical conditions. Known for his precise, minimally invasive approach, he focuses on smaller incisions, less pain and faster recovery &mdash; helping patients get back to their daily lives with confidence.',
            'tags' => ['Laparoscopic Surgery', 'Laser Surgery', 'General Surgery'],
        ],
        [
            'img' => 'img/doctor-sunkara-rajesh.svg',
            'icon' => 'fi-rs-bone',
            'name' => 'Dr. Sunkara Rajesh',
            'specialty' => 'Orthopedic Surgeon',
            'bio' => 'Dr. Sunkara Rajesh is an experienced Orthopedic Surgeon at Master Surgeon, specializing in the diagnosis and treatment of bone, joint and muscle conditions. From fractures and joint pain to sports injuries and mobility issues, he offers personalized, evidence-based orthopedic care aimed at restoring movement and improving quality of life.',
            'tags' => ['Orthopedic Care', 'Joint Pain', 'Fracture Care'],
        ],
    ],

];
