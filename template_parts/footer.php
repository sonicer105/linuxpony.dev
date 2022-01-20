<?php if (!defined('LP_VER')) die; ?>
<footer>
    &copy; LinuxPony <?php echo date('Y') ?>
</footer>
<?php require_once 'confirm_age.php'; ?>
<a href="#" id="return-to-top" title="Go to top" aria-hidden="true"><span class="fas fa-chevron-up"></span></a>
<div class="main-nav-close click-guard">
    <div class="click-guard-load">Loading, Please Wait...</div>
</div>
<div id="popup-3d">
    <model-viewer id="model-viewer"
                  camera-controls
                  shadow-intensity="1"
                  exposure="10"
                  src=""
                  alt="A 3D model viewer for Swift Dawn and Mythic Dawn"
                  environment-image="neutral" auto-rotate>
        <img id="swift-poster" class="poster" src="/img/swift-render.<?php echo ($webp)? 'webp' : 'png' ?>" alt="Preview of the 3D Render of Swift Dawn" slot="poster">
        <img id="mythic-poster" class="poster" src="/img/mythic-poster.<?php echo ($webp)? 'webp' : 'jpg' ?>" alt="Preview of the 3D Render of Mythic Dawn" slot="poster">
    </model-viewer>
    <a href="javascript:void(0)" class="close-model main-nav-close">
        <span class="sr-only">Close</span>
        <span class="fas fa-times fa-fw" aria-hidden="true"></span>
    </a>
</div>
</body>
</html>