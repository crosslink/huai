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

/*** kunenasearch.css ***/

@charset "UTF-8";

form#ksearch-form { white-space: nowrap; }

fieldset.ksearch-fieldset { 
	border:0 none !important;
	margin:0 !important;
	padding:0 !important;
	background-color: transparent !important;
}

legend.ksearch-legend, 
fieldset.ksearch-fieldset .ksearch-label { 
	display:none;
	text-indent: -9999em;
	margin:0 !important;
	padding:0 !important;
}
