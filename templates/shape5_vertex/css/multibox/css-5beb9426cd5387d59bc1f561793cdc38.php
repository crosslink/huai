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

/*** multibox.css ***/


/**************************************************************

	MultiBox
	v1.3

**************************************************************/

.MultiBoxContainer {
	position: absolute;
	/*border: 1px solid #000;*/
	border: 10px solid #FFFFFF;
	background-color: #FFFFFF;
	display: none;
	z-index: 2;
	text-align: left;
}

.MultiBoxContent {
	position: relative;
	width: 100%;
	height: 100%;
	overflow: hidden;
}

.MultiBoxClose {
	position: absolute;
	/*top: -12px;
	right: -12px;*/
	top: -26px;
	right:-26px;
	background: url(../../images/multibox/close.png) no-repeat;
	width:31px;
	height:30px;
	cursor: pointer;
}


.MultiBoxControlsContainer {
	overflow: hidden;
	height: 0px;
	position: relative;
}

.MultiBoxControls {
	width: 100%;
	height: auto;
	position: relative;
	background-color: #FFFFFF;
}


.MultiBoxPrevious {
	position: absolute;
	background: url(../../images/multibox/left.png) no-repeat;
	width: 24px;
	height: 24px;
	left: 0px;
	margin-top: 5px;
	cursor: pointer;
}

.MultiBoxNext {
	position: absolute;
	background: url(../../images/multibox/right.png) no-repeat;
	width: 24px;
	height: 24px;
	right: 0px;
	margin-top: 5px;
	cursor: pointer;
}

.MultiBoxNextDisabled {
	cursor: default;
	background: url(../../images/multibox/rightDisabled.png) no-repeat;
}

.MultiBoxPreviousDisabled {
	cursor: default;
	background: url(../../images/multibox/leftDisabled.png) no-repeat;
}

.MultiBoxTitle {
	position: relative;
	margin: 7px 0 0 35px;
	float: left;
	font-family: Helvetica, arial, sans-serif, Verdana;
	font-size: 12px;
	color: #000000;
	font-weight: bold;
	text-align: left;
}

.MultiBoxNumber {
	position: relative;
	width: 50px;
	margin: 10px 35px 0 0;
	float: right;
	font-family: Helvetica, arial, sans-serif, Verdana;
	font-size: 11px;
	color: #000000;
	text-align: right;
}

.MultiBoxDescription {
	clear: left;
	position: relative;
	margin: 0 35px 0 35px;
	padding-top: 5px;
	font-family: Helvetica, arial, sans-serif, Verdana;
	font-size: 11px;
	color: #000000;
	text-align: left;
}
#OverlayContainer {
	height:0px;}
/*************************************************************/



/*** ajax.css ***/


/**************************************************************

	MultiBox
	v1.3

**************************************************************/

p.ajaxContent {
	color: #000;
	font-family: "Lucida Sans Unicode", "Lucida Grande", Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
	padding: 10px;
}

/*************************************************************/

