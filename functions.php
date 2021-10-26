<?php

define('LP_VER', '1.0.4');

function lp_append_url_with_ver($url) {
    echo $url . '?v=' . LP_VER;
}
