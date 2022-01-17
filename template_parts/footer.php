<?php if (!defined('LP_VER')) die; ?>
<footer>
    &copy; LinuxPony <?php echo date('Y') ?>
</footer>
<?php require_once 'confirm_age.php'; ?>
<a href="#" id="return-to-top" title="Go to top" aria-hidden="true"><span class="fas fa-chevron-up"></span></a>
<div class="main-nav-close click-guard">
    <div class="click-guard-load">Loading, Please Wait...</div>
</div>
<div id="swift-3d-popup">
    <model-viewer id="swift-model-viewer"
                  camera-controls
                  shadow-intensity="1"
                  src=""
                  alt="A 3D model of the Changeling named Swift Dawn"
                  environment-image="neutral" auto-rotate>
        <img class="poster" src="/img/render.<?php echo ($webp)? 'webp' : 'jpg' ?>" alt="Preview of the 3D Render of the Changeling Swift Dawn" slot="poster">
    </model-viewer>
    <a href="javascript:void(0)" class="swift-close-model main-nav-close">
        <span class="sr-only">Close</span>
        <span class="fas fa-times fa-fw" aria-hidden="true"></span>
    </a>
</div>
</body>
</html>