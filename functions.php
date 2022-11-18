<?php

define('LP_VER', '1.1.5');

//ini_set('display_errors', '1');
//ini_set('display_startup_errors', '1');
//error_reporting(E_ALL);

ini_set('session.gc_maxlifetime', 86400);
session_set_cookie_params(86400);
session_start();

if(isset($_GET['nsfw'])) {
    switch ($_GET['nsfw']){
        case 'yes':
            $_SESSION['nsfw'] = 'yes';
            break;
        default:
            session_unset();
            session_destroy();
            break;
    }

    $url = $_SERVER['PHP_SELF'];

    if(isset($_GET['anchor'])){
        $url .= '#' . preg_replace('/[^a-z\d-]/i','', $_GET['anchor']);
    }

    header('Location: ' . $url);
    die();
}

$nsfw = isset($_SESSION['nsfw']) && $_SESSION['nsfw'] == 'yes' ?? false;
$webp = strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false;
$fully_qualified = $fully_qualified ?? false;
$include_3d_model = $include_3d_model ?? true;

function lp_append_url_with_ver($url) {
    echo $url . '?v=' . LP_VER;
}

function echo_anchor_link($link, $should_qualify=null){
    global $fully_qualified;
    $should_qualify = (!is_null($should_qualify)) ? $should_qualify : $fully_qualified;

    echo ($should_qualify) ? 'index.php' . $link : $link;
}
