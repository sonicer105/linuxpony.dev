<?php if (!defined('LP_VER')) die; ?>
<div class="confirm-age">
    <div class="container">
        <div class="header">
            <picture>
                <source srcset="/img/derpy.webp" type="image/webp">
                <img src="/img/derpy.png" type="image/png" alt="Derpy Hooves holding a stop sign">
            </picture>
            <small><a href="https://derpibooru.org/images/888888" target="_blank" rel="noopener noreferrer">Art by yanoda</a></small>
        </div>
        <div class="content">
            <h1>Hold up!</h1>
            <p class="option-enable">
                Turning on this setting will show you adult material not suitable for minors! By clicking "Confirm", you
                agree that you are at least 18 years of age <i>and</i> the age of majority in your country.
            </p>
            <p class="option-share">
                Accessing the share folder may expose you to adult material not suitable for minors! By clicking
                "Confirm", you agree that you are at least 18 years of age <i>and</i> the age of majority in your
                country.
            </p>
        </div>
        <div class="footer">
            <a href="javascript:void(0)" class="button large main-nav-close">Cancel</a>
            <a href="/?nsfw=yes" class="button large option-enable">Confirm</a>
            <a href="/share" class="button large option-share">Confirm</a>
        </div>
    </div>
</div>