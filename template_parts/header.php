<?php
    if (!defined('LP_VER')) die;
    $title = ($title ?? 'Home') . ' | linuxpony.dev';
?>
<!DOCTYPE html>
<html lang="en-CA">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="preload" href="<?php lp_append_url_with_ver('/css/main.css') ?>" as="style">
    <!-- Favicon/App -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php lp_append_url_with_ver('/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php lp_append_url_with_ver('/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php lp_append_url_with_ver('/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?php lp_append_url_with_ver('/site.webmanifest') ?>">
    <link rel="mask-icon" href="<?php lp_append_url_with_ver('/safari-pinned-tab.svg') ?>" color="#2b5797">
    <meta name="apple-mobile-web-app-title" content="linuxpony.dev">
    <meta name="application-name" content="linuxpony.dev">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#2b5797">
    <!-- Stylesheets/Scripts -->
    <link rel="stylesheet" href="<?php lp_append_url_with_ver('/css/main.css') ?>">
    <style>
        /* Temporary style until the style sheet loads in */
        .click-guard {
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 1;
            background-color: #fff;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: 9999;
        }
        .click-guard-load {
            font-size: 2rem;
            font-family: sans-serif;
        }
    </style>
    <script async src="<?php lp_append_url_with_ver('/js/jquery-3.5.1.min.js') ?>"></script>
<!--    <script async src="<?php lp_append_url_with_ver('/js/modernizr-custom.min.js') ?>"></script>-->
    <script async src="<?php lp_append_url_with_ver('/js/slick.min.js') ?>"></script>
    <script async src="<?php lp_append_url_with_ver('/js/main.js') ?>"></script>
    <script async type="module" src="<?php lp_append_url_with_ver('/js/model-viewer.min.js') ?>"></script>
</head>
<body id="lp-root">
<header>
    <a href="#" class="main-nav-open">
        <span class="fas fa-bars fa-fw" aria-hidden="true"></span>
        <span class="sr-only">Jump to Main Navigation</span>
    </a>
    <span class="header-text">
        linuxpony.dev
    </span>
</header>