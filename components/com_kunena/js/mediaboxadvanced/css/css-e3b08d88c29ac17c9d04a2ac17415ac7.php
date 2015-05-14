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

/*** mediaboxAdv.css ***/

		/*	mediaboxAdvanced White theme	*/
		/*	version 2.1 - August 2010		*/
		/*	for mediaboxAdvanced v.1.3.1	*/

		/*	Overlay background styling	*/

#mbOverlay {
	position: fixed;
	z-index: 9998;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-color: #fff;
	cursor: pointer;
}

		/*	Legacy fix for older browsers	*/

#mbOverlay.mbOverlayFF {
	background: transparent url(/images/80.png) repeat;
}

#mbOverlay.mbOverlayIE {
	position: absolute;
}

		/*	Overlay panel styling	*/

#mbCenter {
	position: absolute;
	z-index: 9999;
	left: 50%;
	overflow: hidden;
	background-color: #fff;
	-webkit-border-radius: 10px;
	-khtml-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	-webkit-box-shadow: 0px 5px 20px rgba(0,0,0,0.50);
	-khtml-box-shadow: 0px 5px 20px rgba(0,0,0,0.50);
	-moz-box-shadow: 0px 5px 20px rgba(0,0,0,0.50);
	box-shadow: 0px 5px 20px rgba(0,0,0,0.50);
	/* For IE 8 */
	-ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=5, Direction=180, Color='#000000')";
	/* For IE 5.5 - 7 */
	filter: progid:DXImageTransform.Microsoft.Shadow(Strength=5, Direction=180, Color='#000000');
}

#mbCenter.mbLoading {
	background: #fff url(/images/loading.gif) no-repeat center;
		/*	This style is applied only during animation.	*/
		/*	For example, the next lines turn off shadows	*/
		/*	improving browser performance on slow systems.	*/
		/*	To leave shadows on, just remove the following:	*/
	-webkit-box-shadow: none;
	-khtml-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}

#mbImage {
	position: relative;
	left: 0;
	top: 0;

		/*	Inline content styling	*/

	font-family: Myriad, Verdana, Arial, Helvetica, sans-serif;
	line-height: 20px;
	font-size: 12px;
	color: #fff;
	text-align: left;
	background-position: center center;
	background-repeat: no-repeat;
	padding: 10px;
}

		/*	Title, Caption and Button styling	*/

#mbBottom {
	min-height: 20px;
	font-family: Myriad, Verdana, Arial, Helvetica, sans-serif;
	line-height: 20px;
	font-size: 12px;
	color: #999;
	text-align: left;
	padding: 0 10px 10px;
}

#mbTitle, #mbPrevLink, #mbNextLink, #mbCloseLink {
	display: inline;
	color: #000;
	font-weight: bold;
	line-height: 20px;
	font-size: 12px;
}

#mbNumber {
	display: inline;
	color: #999;
	line-height: 14px;
	font-size: 10px;
	margin: auto 10px;
}

#mbCaption {
	display: block;
	color: #999;
	line-height: 14px;
	font-size: 10px;
}

#mbPrevLink, #mbNextLink, #mbCloseLink {
	float: right;
	outline: none;
	margin: 0 0 0 10px;
	font-weight: normal;
}

#mbPrevLink b, #mbNextLink b, #mbCloseLink b {
	color: #000;
	font-weight: bold;
	text-decoration: underline;
}

#mbPrevLink big, #mbNextLink big, #mbCloseLink big {
	color: #000;
	font-size: 16px;
	line-height: 14px;
	font-weight: bold;
}

#mbBottom a, #mbBottom a:link, #mbBottom a:visited {	/* Thanks to Danny Jung for feedback and corrections */
	text-decoration: none;
	color: #ddd;
}

#mbBottom a:hover, #mbBottom a:active {
	text-decoration: underline;
	color: #fff;
}


		/*	Error message styling	*/

#mbError {
	position: relative;
	font-family: Myriad, Verdana, Arial, Helvetica, sans-serif;
	line-height: 20px;
	font-size: 12px;
	color: #fff;
	text-align: center;
	border: 10px solid #700;
	padding: 10px 10px 10px;
	margin: 20px;
	-webkit-border-radius: 5px;
	-khtml-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}

#mbError a, #mbError a:link, #mbError a:visited, #mbError a:hover, #mbError a:active {
	color: #d00;
	font-weight: bold;
	text-decoration: underline;
}