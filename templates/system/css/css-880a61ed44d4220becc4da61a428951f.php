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

/*** system.css ***/

/**
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

/* Import project-level system CSS */
@import url(../../../media/system/css/system.css);

/* Unpublished */
.system-unpublished, tr.system-unpublished {
	background: #e8edf1;
	border-top: 4px solid #c4d3df;
	border-bottom: 4px solid #c4d3df;
}

span.highlight {
	background-color:#FFFFCC;
	font-weight:bold;
	padding:1px 4px;
}

.img-fulltext-float-right {
	float: right;
	margin-left: 10px;
	margin-bottom: 10px;
}

.img-fulltext-float-left {
	float: left;
	margin-right: 10px;
	margin-bottom: 10px;
}

.img-fulltext-float-none {
}

.img-intro-float-right {
	float: right;
	margin-left: 5px;
	margin-bottom: 5px;
}

.img-intro-float-left {
	float: left;
	margin-right: 5px;
	margin-bottom: 5px;
}

.img-intro-float-none {
}