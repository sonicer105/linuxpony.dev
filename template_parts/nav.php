<?php
    if (!defined('LP_VER')) die;
    $current_page = $current_page ?? 'home';
?>
<nav id="main-nav">
    <ul>
        <li>
            <a href="#home" class="main-nav-close-and-navigate">
                <span class="fas fa-home fa-fw" aria-hidden="true"></span> Home
            </a>
        </li>
        <?php if(!$nsfw) { ?>
        <li>
            <a href="#" class="open-nsfw-confirmation" data-type="share">
                <span class="fas fa-share-alt fa-fw" aria-hidden="true"></span> Public Files
            </a>
        </li>
        <li>
            <a href="#" class="open-nsfw-confirmation" data-type="enable">
                <span class="fas fa-exclamation-triangle fa-fw" aria-hidden="true"></span> Enable NSFW
            </a>
        </li>
        <?php } else { ?>
        <li>
            <a href="/share">
                <span class="fas fa-share-alt fa-fw" aria-hidden="true"></span> Public Files
            </a>
        </li>
        <li>
            <a href="/?nsfw=no">
                <span class="fas fa-exclamation-triangle fa-fw" aria-hidden="true"></span> Disable NSFW
            </a>
        </li>
        <?php } ?>
        <li>
            <a href="#" class="main-nav-close">
                <span class="fas fa-chevron-left fa-fw" aria-hidden="true"></span> Close
            </a>
        </li>
    </ul>
</nav>
