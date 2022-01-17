<?php
    if (!defined('LP_VER')) die;
    $current_page = $current_page ?? 'home';
?>
<nav id="main-nav">
    <ul>
        <li class="title"><span aria-hidden="true">#</span> Menu</li>
        <li>
            <a href="#home" class="main-nav-close-and-navigate">
                <span class="fas fa-home fa-fw" aria-hidden="true"></span> Home
            </a>
        </li>
        <li>
            <a href="#about" class="main-nav-close-and-navigate">
                <span class="fas fa-user-circle fa-fw" aria-hidden="true"></span> About Me
            </a>
        </li>
        <li>
            <?php if(!$nsfw) { ?>
            <a href="javascript:void(0)" class="open-nsfw-confirmation" data-type="share">
                <span class="fas fa-share-alt fa-fw" aria-hidden="true"></span> Public Files
            </a>
            <?php } else { ?>
            <a href="/share">
                <span class="fas fa-share-alt fa-fw" aria-hidden="true"></span> Public Files
            </a>
            <?php } ?>
        </li>
        <li class="title"><span aria-hidden="true">#</span> Character Refs</li>
        <li>
            <a href="#swift" class="main-nav-close-and-navigate">
                <span class="fas fa-alicorn fa-fw" aria-hidden="true"></span> Swift Dawn
            </a>
        </li>
        <li>
            <a href="#mythic" class="main-nav-close-and-navigate">
                <span class="fas fa-pegasus fa-fw" aria-hidden="true"></span> Mythic Dawn
            </a>
        </li>
        <li>
            <a href="#sugar" class="main-nav-close-and-navigate">
                <span class="fas fa-horse fa-fw" aria-hidden="true"></span> Sugar Dawn
            </a>
        </li>
        <li>
            <a href="#rinne" class="main-nav-close-and-navigate">
                <span class="fas fa-feather-alt fa-fw" aria-hidden="true"></span> Rinne
            </a>
        </li>
        <li class="title"><span aria-hidden="true">#</span> Controls</li>
        <li>
            <?php if(!$nsfw) { ?>
            <a href="javascript:void(0)" class="open-nsfw-confirmation" data-type="enable">
                <span class="fas fa-exclamation-triangle fa-fw" aria-hidden="true"></span> Enable NSFW
            </a>
            <?php } else { ?>
            <a href="/?nsfw=no">
                <span class="fas fa-exclamation-triangle fa-fw" aria-hidden="true"></span> Disable NSFW
            </a>
            <?php } ?>
        </li>
        <li aria-hidden="true">
            <a href="javascript:void(0)" class="main-nav-close">
                <span class="fas fa-chevron-left fa-fw" aria-hidden="true"></span> Close
            </a>
        </li>
    </ul>
</nav>
