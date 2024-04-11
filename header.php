<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package open-sky-mental-health
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'open-sky-mental-health'); ?></a>

        <header>
            <div class="header-container">
                <div class="header-flex">
                    <div class="flex-item">
                        <h1>Nest Eatery</h1>
                        <a href="https://naitsa-a.web.dmitcapstone.ca/open-sky-mental-health/">
                            <img src="https://naitsa-a.web.dmitcapstone.ca/open-sky-mental-health/wp-content/uploads/2024/03/cropped-logo_horizontal_transparentpng.webp" alt="Open Sky Mental Health Logo" class="logo">
                        </a>

                    </div>
                    <div class="flex-item">
                        <button class="toggle-btn" aria-label="toggle button">
                            <svg viewBox='0 0 10 8' width='40'>
                                <path d='M1 1h8M1 4h 8M1 7h8' stroke='#000' stroke-width='1' stroke-linecap='round' />
                            </svg>

                        </button>
                        <nav>
                            <ul class="nav-menu">
                                <li><a href="https://naitsa-a.web.dmitcapstone.ca/open-sky-mental-health/">Home</a></li>
                                <li><a href="https://naitsa-a.web.dmitcapstone.ca/open-sky-mental-health/about">About</a></li>
                                <li><a href="https://naitsa-a.web.dmitcapstone.ca/open-sky-mental-health/services">Services</a></li>
                                <li><a href="https://naitsa-a.web.dmitcapstone.ca/open-sky-mental-health/faq">FAQ</a></li>
                                <li><a href="https://naitsa-a.web.dmitcapstone.ca/open-sky-mental-health/contact">Contact</a></li>
                                <li><a href="https://naitsa-a.web.dmitcapstone.ca/open-sky-mental-health/resources">Resources</a>
                                <li><a href="https://naitsa-a.web.dmitcapstone.ca/open-sky-mental-health/workshops">Workshops</a>
                                </li>
                                </li>
                                <li><a href="https://naitsa-a.web.dmitcapstone.ca/open-sky-mental-health/" class="special-btn">Login</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <script>
            const btn = document.querySelector('.toggle-btn');

            btn.addEventListener('click', function() {
                document.querySelector('nav').classList.toggle('show-nav');
            });
        </script>