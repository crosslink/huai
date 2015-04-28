<?php 
ob_start ("ob_gzhandler");
header("Content-type: text/css; charset= UTF-8");
header("Cache-Control: must-revalidate");
$expires_time = 1440;
$offset = 60 * $expires_time ;
$ExpStr = "Expires: " . 
gmdate("D, d M Y H:i:s",
time() + $offset) . " GMT";
header($ExpStr);
                ?>

/*** modal.css ***/

#sbox-overlay {position: absolute;background-color: #000;left: 0px;top: 0px;}#sbox-window {position: absolute;background-color: #fff;text-align: left;overflow: visible;padding: 10px;-moz-border-radius: 3px;-webkit-border-radius: 3px;border-radius: 3px;}#sbox-window[aria-hidden=true],#sbox-overlay[aria-hidden=true] {display: none;}#sbox-btn-close {position: absolute;width: 30px;height: 30px;right: -15px;top: -15px;background: url(../images/modal/closebox.png) no-repeat center;border: none;}.sbox-loading #sbox-content {background-image: url(../images/modal/spinner.gif);background-repeat: no-repeat;background-position: center;}#sbox-content {clear: both;overflow: auto;background-color: #fff;height: 100%;width: 100%;}.sbox-content-image#sbox-content {overflow: visible;}#sbox-image {display: block;}.sbox-content-image img {display: block;width: 100%;height: 100%;}.sbox-content-iframe#sbox-content {overflow: visible;}.body-overlayed {overflow: hidden;}.body-overlayed embed, .body-overlayed object, .body-overlayed select {visibility: hidden;}#sbox-window embed, #sbox-window object, #sbox-window select {visibility: visible;}#sbox-window.shadow {-webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);-moz-box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);}.sbox-bg {position: absolute;width: 33px;height: 40px;}.sbox-bg-n {left: 0;top: -40px;width: 100%;background: url(../images/modal/bg_n.png) repeat-x;}.sbox-bg-ne {right: -33px;top: -40px;background: url(../images/modal/bg_ne.png) no-repeat;}.sbox-bg-e {right: -33px;top: 0;height: 100%;background: url(../images/modal/bg_e.png) repeat-y;}.sbox-bg-se {right: -33px;bottom: -40px;background: url(../images/modal/bg_se.png) no-repeat;}.sbox-bg-s {left: 0;bottom: -40px;width: 100%;background: url(../images/modal/bg_s.png) repeat-x;}.sbox-bg-sw {left: -33px;bottom: -40px;background: url(../images/modal/bg_sw.png) no-repeat;}.sbox-bg-w {left: -33px;top: 0;height: 100%;background: url(../images/modal/bg_w.png) repeat-y;}.sbox-bg-nw {left: -33px;top: -40px;background: url(../images/modal/bg_nw.png) no-repeat;}