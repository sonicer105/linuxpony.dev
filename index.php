<?php
//ini_set('display_errors', '1');
//ini_set('display_startup_errors', '1');
//error_reporting(E_ALL);

ini_set('session.gc_maxlifetime', 86400);
session_set_cookie_params(86400);
session_start();

require_once 'functions.php';

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

    $url = '/';

    if(isset($_GET['anchor'])){
        $url .= '#' . preg_replace('/[^a-z\d-]/i','', $_GET['anchor']);
    }

    header('Location: ' . $url);
    die();
}

$nsfw = isset($_SESSION['nsfw']) && $_SESSION['nsfw'] == 'yes' ?? false;
$webp = strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false;

require_once 'template_parts/header.php';
require_once 'template_parts/nav.php';

?>
<main>
<?php

require_once 'template_parts/splash.php';
require_once 'template_parts/about_me.php';
require_once 'template_parts/swift_dawn.php';
require_once 'template_parts/mythic_dawn.php';
require_once 'template_parts/sugar_dawn.php';
require_once 'template_parts/rinne.php';

?>
</main>
<?php

require_once 'template_parts/footer.php';