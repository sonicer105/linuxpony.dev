<?php
    if (!defined('LP_VER')) die;
    $title = ($title ?? 'Home') . ' | linuxpony.dev';
    $description = 'A homepage for LinuxPony and his characters references.';
?>
<!DOCTYPE html>
<html lang="en-CA" prefix="og: https://ogp.me/ns#">
<head>
    <!-- Encoding, Preload, and Viewport -->
    <meta charset="UTF-8">
    <link rel="preload" href="<?php lp_append_url_with_ver('/css/main.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!-- SEO -->
    <link rel="canonical" href="https://linuxpony.dev/">
    <meta name="robots" content="index, follow">
    <title><?php echo $title ?></title>
    <meta property="og:title" content="<?php echo $title ?>" />
    <meta property="og:description" content="<?php echo $description ?>" />
    <meta property="og:locale" content="en_CA" />
    <meta property="og:site_name" content="linuxpony.dev" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://linuxpony.dev/" />
    <meta property="og:image" content="https://linuxpony.dev/android-chrome-192x192.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:height" content="192" />
    <meta property="og:image:width" content="192" />
    <meta property="og:image:alt" content="A portrait of Swift Dawn the Changeling" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:creator" content="@LinuxPony" />
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Person",
            "name": "LinuxPony",
            "url": "https://linuxpony.dev/",
            "image": "https://linuxpony.dev/android-chrome-512x512.png",
            "sameAs": [
                "https://twitter.com/LinuxPonyAD",
                "https://twitter.com/LinuxPony",
                "https://derpibooru.org/profiles/LinuxPony",
                "https://discordapp.com/users/174641580878069760",
                "https://linuxpony.dev/"
            ]
        }
    </script>
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
    <noscript><link rel="stylesheet" href="<?php lp_append_url_with_ver('/css/main.css') ?>"></noscript>
    <style>
        /* Temporary style until the style sheet loads in */
        .click-guard {
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 1;
            background-color: #000;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: 9999;
        }
        .click-guard-load {
            color: #fff;
            font-size: 2rem;
            font-family: sans-serif;
        }
    </style>
    <script async src="<?php lp_append_url_with_ver('/js/jquery-3.5.1.min.js') ?>"></script>
<!--    <script async src="<?php lp_append_url_with_ver('/js/modernizr-custom.min.js') ?>"></script>-->
    <script async src="<?php lp_append_url_with_ver('/js/slick.min.js') ?>"></script>
    <script async src="<?php lp_append_url_with_ver('/js/main.js') ?>"></script>
<!--    <script async type="module" src="<?php lp_append_url_with_ver('/js/model-viewer.min.js') ?>"></script>-->
</head>
<body id="lp-root" class="<?php echo ($webp) ? 'webp' : 'no-webp' ?>">
<header>
    <a href="javascript:void(0)" class="main-nav-open" aria-hidden="true" tabindex="-1">
        <span class="fas fa-bars fa-fw"></span>
    </a>
    <span class="header-text">
        linuxpony.dev
    </span>
    <div class="skip-to-content-wrapper">
        <a id="skip-to-content" href="#home">Skip to Content</a>
    </div>
</header>
<div class="header-spacer"></div>