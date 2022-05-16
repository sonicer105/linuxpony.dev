<?php if (!defined('LP_VER')) die; ?>
<section id="boop">
    <div class="sr-only">
        This page contains an interactive SVG image you can click with your mouse to cause a short animation of the
        changeling Swift Dawn getting booped on the nose with a hoof. It's very cute but can't really be interacted with
        screen readers so I have hidden it from view.
    </div>
    <div id="svg-wrapper" aria-hidden="true">
        <?php echo file_get_contents('img/favitwink-commission-1-clean-dynamic.svg'); ?>
    </div>
    <a href="https://derpibooru.org/profiles/Favitwink" rel="noopener nofollow" target="_blank">Art by Favitwink</a>
</section>