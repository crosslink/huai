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

/*** template.css ***/

@charset "UTF-8";

/* A variation on Eric Meyer's CSS Reset:
   This is disabled because the Blueprint framework already has it.
   You should enable it if you aren't using Blueprint.

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td {
	margin: 0;
	padding: 0;
	border: 0;
	outline: 0;
	font-weight: inherit;
	font-style: inherit;
	font-size: 100%;
	font-family: inherit;
	vertical-align: baseline;
}
body {
	line-height: 1;
	color: black;
	background: white;
}
ol, ul {
	list-style: none;
}
table {
	border-collapse:collapse;
	border-spacing: 0;
}
caption, th, td {
	text-align: left;
	font-weight: normal;
}
blockquote:before,
blockquote:after,
q:before,
q:after {
	content: "";
}
blockquote, q {
	quotes: "" "";
}
abbr,acronym {
	border:0;
}
*/

/* Below are the CSS styles that aren't included with Blueprint. It's a good idea to keep them whether or not you use it unless you know what you're doing. */

/* Text styles */
.blog-featured h2 {
	font-size: 1.5em;
	margin-bottom:0em;
}
p.readmore {
	text-indent:0;
	font-size: .9em;
}
.joomla-footer {
	font-size: .9em;
	margin-bottom: 30px;
}

/* Article functions */
ul.actions {
	clear:both;
	margin-top: -50px;
	float:right;
}
ul.actions li {
	list-style-type: none;
	float:right;
	margin-left: 10px;
}

/* Login styles */
p#form-login-username label,
p#form-login-password label {
	width: 160px;
	display:block;
}
p#form-login-remember label {
	font-size: .9em;
	font-weight: normal;
	line-height: 25px;
}
p#form-login-remember input {
	float:left;
	margin-right: 5px;
}
form#form-login ul {
	margin: 0;
	padding: 0;
}
form#form-login ul li {
	list-style-type: none;
	margin-left: 20px;
	font-size: .9em;
}

/* Image float styles */
.img-fulltext-left {
	float:left;
	margin-right: 20px;
	margin-bottom: 20px;
}

.img-intro-left {
	float: left;
	margin-right: 10px;
	margin-bottom: 10px;
}

.img-fulltext-right {
	float: right;
	margin-left: 20px;
	margin-bottom: 20px;
}

.img-intro-right {
	float: right;
	margin-left: 10px;
	margin-bottom: 10px;
}

