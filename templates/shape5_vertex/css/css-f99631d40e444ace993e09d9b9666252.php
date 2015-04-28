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

/*** template_default.css ***/

/* LEFT AND RIGHT FIXED TABS */
.s5_lr_tab {
	background:url(../images/s5_lrtab.png) repeat-y scroll 5px 2px;
	cursor:pointer;
	position:fixed;
	padding-top:16px;
	padding-bottom:16px;
	width:35px;
	line-height:35px;
	z-index:3;}

.s5_lr_tab:hover {
	background:url(../images/s5_lrtab.png) repeat-y scroll -30px 2px;}

.s5_lr_tab_inner {
	font-size:12pt;
	font-weight:normal;
	width:35px;
	float:right;}

/* IE6 WARNING */
#s5_iepopouter {
	position:absolute;
	top:0px;
	z-index:998;
	background:#000000;
	width:100%;
	height:1200px;}

#s5_iepopinner {
	padding-top:34px;
	border:1px solid #ffffff;
	position:absolute;
	z-index:999;
	background:url(../vertex/iewarning/images/gradient.jpg) bottom repeat-x;
	width:345px;
	height:300px;
	left:50%;
	margin-left:-172px;
	top:200px;}
	
#s5_iepopwrap {
	cursor:pointer;margin-right:5px;margin-top:-19px;margin-bottom:0px;float:right;
	background:url(../vertex/iewarning/images/close.jpg) no-repeat;width:24px;height:24px;}

#s5_iepopwrap2 {
	margin-left:5px;margin-top:3px;
	margin-bottom:15px;float:left;
	background:url(../vertex/iewarning/images/ie.jpg) no-repeat;
	width:59px;height:57px;}
	
#s5_iepop_bigtitle {
	margin-top:6px;margin-bottom:15px;float:left;padding-left:5px;font-size:18px;color:#000000;}
	
#s5_iepop_upgrade {
	cursor:pointer;
	background: url(../vertex/iewarning/images/button.jpg) no-repeat;
	width:142px;height:34px;line-height:30px;}
	
#s5_iepop_maintext {
	margin-top:-10px;margin-left:20px;width:87%;color:#000000;margin-bottom:33px;}	


/* MAIN COLUMN WRAPS AND MODULE FLOAT */
#s5_columns_wrap {
	overflow:hidden;
	position:relative;
	width:100%;}

#s5_columns_wrap_inner {
	width:200%;}

#s5_center_column_wrap {
	float:left;
	left:50%;
	position:relative;
	width:50%;}

#s5_center_column_wrap_inner {
	left:-100%;
	overflow:hidden;
	min-height:1px;
	position:relative;}

#s5_left_column_wrap {
	float:left;
	left:-50%;
	position:relative;}

#s5_below_body_wrap {
	margin-top:14px;}

#s5_main_body_wrap {
	min-height:100%;
	width:100%;}

#s5_width_wrap {
	position:relative;
	margin-left:auto;
	margin-right:auto;}

.s5_wrap {
	margin:0 auto;}

.s5_float_left {
	float:left;}

/* FRONTEND ERROR MESSAGE */
.s5_frontenderrormsg {
	float: left;
    height: 48px;
    margin-top: -7px;
    width: 61px;
	background: url(../images/vertex/error.png) no-repeat;}
	
/* FOUR DIVS MODULES */
	
#s5_above_body .s5_fourdivs_1 {
margin-bottom:12px;
padding-right:12px;
}

#s5_below_body .s5_fourdivs_1 {
margin-top:12px;
padding-right:12px;
}

#s5_above_body, #s5_below_body {
margin-right:-12px;
}

.s5_fourdivs_title {
margin-bottom:8px;
}

/* DROP DOWN */

#s5_drop_down_container_inner {
padding-bottom:0px;
padding-right:10px;
padding-left:10px;
padding-top:30px;
}

#s5_drop_down_container {
display:none
}

#s5_drop_down_button {
cursor:pointer;
}

#s5_drop_down_inner .s5_fourdivs_1 {
padding-left:24px;
margin-bottom:40px;
}

#s5_drop_down_inner .s5_fourdivs_title {
margin-bottom:14px;
}

#s5_drop_down_container_inner {
z-index:1;
position:relative;
}

#s5_drop_down_button {
position:relative;
z-index:1;
}

/*** template.css ***/

*  {	margin: 0;	padding: 0; }

body  {
font-family: Tahoma,Microsoft Yahei,Simsun;	color:#333333;
	font-size:1em;
	line-height:140%;}

body.contentpane, body.mceContentBody {	background:#FFFFFF;}

a  {	text-decoration: none;}
a:hover  { text-decoration:underline; }
a:active { outline: none;}
a:focus {-moz-outline-style: none;}	

fieldset a  {font-weight: bold; }

h1 {	font-size:1.7em;font-weight: normal;}

h2 {	font-size:1.4em;font-weight: normal;margin-bottom:18px;}

h3 {	font-size:1.2em;font-weight:normal;}

h4 {	font-size:1.1em;font-weight: normal;}

h5 {	font-size:0.9em;font-weight: normal;}


/* IMAGES
----------------------------------------------------------- */

a img, fieldset, img  {	border: none; }

.mosimage  {
	padding: 0;
	border:1px solid #333333;
	margin:6px;	}

.mosimage img  {
	padding: 0;
	margin: 0!important; }

.mosimage_caption {
	background:#333333;
	border-top:1px solid #333333;
	color:#FFFFFF;
	font-size:8pt;
	margin-top:2px;
	padding:1px 2px;}


#s5_component_wrap ul {	list-style:disc;margin-left:20px;}

/* FORM
----------------------------------------------------------- */
fieldset  {
	border-bottom:1px solid #EDEDED;
	padding-top:7px;
	padding-bottom:7px;}

#form-login fieldset {
	border:none;
	padding-top:0px;}

#form-login p {
	padding-top:0px;}

#login br {
	display:none;}

#login .button {
	margin-top:8px;
	margin-bottom:8px;}

#login ul, #form-login ul {
	padding-top:8px;
	padding-bottom:8px;}
	
#login-form p {
padding:0px;
}

#modlgn_username, #modlgn_passwd, #username_vmlogin, #password_vmlogin {
	width:92%;}

.inputbox, .registration input, .login input, .contact-form input, #jform_contact_message {
	border:1px solid #D8D8D8;
	margin-top: 4px;
	margin-bottom:4px;
	padding:4px;
	background:#F7F7F7;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.07) inset; /* FF3.5+ */
	-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.07) inset; /* Saf3.0+, Chrome */
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.07) inset; /* Opera 10.5, IE9, Chrome 10+ */}
	

#login-form fieldset {
border:none;
}

#login-form input {
width:93%;
}

#login-form #modlgn-remember {
width:auto;
margin-bottom:14px;
}

#login-form .button {
width:auto;
}

.inputbox:hover, .registration input:hover, .login input:hover, .contact-form input:hover, #jform_contact_message:hover {
	border:solid 1px #BDBCBC;}
	
select.inputbox {
behavior:none;}

label.invalid {
	color:#FF0000;}

label.invalid {
	color:red;}
	
.login label {
display:block;
}

.invalid {
	border-color:#FF0000;}

.invalid {
	border-color:red !important;}

.tool-tip {
	float: left;
	background: #CCCCCC;
	border: 1px solid #333333;
	padding: 5px;
	color:#000000;
	max-width: 200px;}

.tool-title {
	padding: 0;
	margin: 0;
	font-weight: bold;
	margin-top: -15px;
	padding-top: 15px;
	padding-bottom: 5px;
	color:#000000;}

.tool-text {
	color:#000000;
	margin: 0;}

/* BUTTONS
----------------------------------------------------------- */

.button, a.readon, div.catItemReadMore, .userItemReadMore, div.catItemCommentsLink, .userItemCommentsLink, a.readmore-link, a.comments-link, div.itemCommentsForm form input#submitCommentButton, .validate {
	padding:6px;
	padding-top:5px;
	margin-top:14px;
	margin-bottom:0px;
	font-weight: bold;
	border:none;
	color:#FFFFFF;
	text-decoration: none; 
	font-size:0.9em;}
	
.login .button {
margin-top:14px;
margin-bottom:14px;
}

.button {
	margin:0px;
	margin-top:0px;
	margin-right:8px;
	color:#ffffff;}
	
.button:hover, .validate:hover {
background:#666666;
}
	
#submitCommentButton, #contact-form .button {
	margin-bottom:14px;
	margin-top:14px;}

a.readon, div.catItemReadMore, .userItemReadMore, div.catItemCommentsLink, .userItemCommentsLink, a.readmore-link, a.comments-link {
	padding-left:10px;
	padding-right:10px;}


/* FONT CONTROLS
----------------------------------------------------------- */
#fontControls {
	float:right;}

#fontControls a {
	color:#151515;}

.decreaseSize {
	font-size:12px;}

.increaseSize {
	font-size:19px;}

.resetSize {
	font-size:16px;
	margin-left:5px;
	margin-right:5px;}	
	
/* SCROLL TO TOP
----------------------------------------------------------- */

#s5_scrolltotop {
	height: 0;
	visibility:hidden;}


.s5_scrolltotop  {	
	width:30px;
	height:30px;
	cursor:pointer;
	float: right;
	margin-right:5px;
	margin-top:6px;
	background:transparent url(../images/s5_scroll_arrow.png) no-repeat;}	


	
	
/* BOTTOM MENU
----------------------------------------------------------- */

#s5_bottom_menu_wrap ul.menu a:hover {
text-decoration:underline;}

#s5_bottom_menu_wrap ul.menu li {
padding-left:10px;
font-size:1em;
float:right;}

#s5_bottom_menu_wrap {
float:right;
}


/* COLUMN MENU
----------------------------------------------------------- */

.module_round_box ul.menu a {
padding:24px;
padding-bottom:6px;
padding-top:6px;
display:block;
background:url(../images/system/arrow.png) no-repeat left center;
color:#333333;
border-bottom:1px dotted #D3D3D3;}

.module_round_box ul.menu a:hover {
text-decoration:underline;}

.module_round_box ul.menu ul a:hover {
text-decoration:underline;}

.module_round_box ul.menu ul a {
background:none;
padding:6px;
padding-left:10px;
border-bottom: none;
display:block;}

.module_round_box ul.menu ul ul a {
font-size:0.9em;
padding:3px;
padding-left:20px;
border-bottom: none;
display:block;
font-weight:normal;}

.module_round_box ul.menu #current ul span {
font-weight:normal;}

.module_round_box ul.menu li {
padding:0px;}

.module_round_box ul.menu li ul li {
margin-left:24px;}

.module_round_box ul.menu img {
display:none;
}

	
/* BODY ELEMENTS
----------------------------------------------------------- */

#s5_header_area_inner2, #s5_component_wrap, #s5_footer_area_inner2 {
-moz-border-radius:6px;
-webkit-border-radius:6px;
border-radius:6px;
background:#FFFFFF;
border:solid 1px #C5C5C5;
margin-bottom:14px;
margin-left:7px;
margin-right:7px;
}

#s5_header_area_inner {
padding-top:10px;
}

#s5_component_wrap {
padding:16px;
}

#s5_footer_area_inner2 {
padding:20px;
padding-bottom:14px;
padding-top:17px;
font-size:0.9em;
}

#s5_footer {
float:left;
}

#s5_shape5_logo {
width:82px;
height:25px;
margin-left:125px;
margin-right:125px;
margin-top:10px;
margin-bottom:40px;
background:url();
cursor:pointer;
display:block;
}

#s5_header_wrap {
background:#1A1A1A;
-moz-border-radius:6px 6px 0px 0px;
-webkit-border-radius:6px 6px 0px 0px;
border-radius:6px 6px 0px 0px;
}

#s5_logo {
float: left;padding-leftt:127px;
cursor: pointer;
background:url(../images/s5_logo.png) no-repeat top left;
}

#s5_logo_module {
float: left;
}

#s5_banner {
padding-top:10px;
padding-right:32px;
color:#CCCCCC;
}

#s5_banner a {
color:#999999;
}

#s5_banner .banneritem img {
float:right;
}

#s5_banner .module_round_box_outer {
float:right;
}

#s5_breadcrumb_fonts_wrap {
padding-bottom:5px;
padding-top:5px;
padding-left:20px;
padding-right:20px;
}

#s5_breadcrumb_wrap {
float:left;
}

#s5_breadcrumb_wrap img {
display:none;
}

#s5_breadcrumb_wrap .pathway {
margin-left:2px;
margin-right:2px;
}

#fontControls, #s5_social_wrap1 {
float:right;
}

#fontControls {
margin-right:15px;
}

#s5_loginreg { 
float:right;
margin-right:5px;
}

#s5_register {
margin-left:7px;
}

#s5_facebook {
background:url(../images/facebook.png) no-repeat top left;
height:18px;
width:20px;
cursor:pointer;
margin-left:7px;
float:right;
} 

#s5_google {
background:url(../images/google.png) no-repeat top left;
height:18px;
width:20px;
cursor:pointer;
margin-left:7px;
float:right;
} 

#s5_twitter {
background:url(../images/twitter.png) no-repeat top left;
height:18px;
width:20px;
cursor:pointer;
margin-left:7px;
float:right;
} 

#s5_linked_in {
background:url(../images/linked_in.png) no-repeat top left;
height:18px;
width:20px;
cursor:pointer;
margin-left:7px;
float:right;
} 

#s5_rss {
background:url(../images/rss.png) no-repeat top left;
height:18px;
width:20px;
cursor:pointer;
margin-left:7px;
float:right;
} 

#s5_menu_wrap {
background:#151515;
border-top:solid 1px #222222;
}

#s5_search label, #s5_search br, #s5_search button {
display:none;
}

#s5_search {
float:right;
}

#s5_search input {
color:#FFFFFF;
background:#151515;
-webkit-box-shadow: 0 0 18px 2px rgba(0, 0, 0, 0.5) inset;
-moz-box-shadow: 0 0 18px 2px rgba(0, 0, 0, 0.5) inset;
box-shadow: 0 0 18px 2px rgba(0, 0, 0, 0.5) inset; 
-moz-border-radius:8px;
-webkit-border-radius:8px;
border-radius:8px;
border:none;
padding:11px;
padding-left:14px;
padding-right:14px;
margin-top:12px;
margin-right:22px;
font-size:0.8em;
width:140px;
}

/* MODULE STYLES
----------------------------------------------------------- */

.module_round_box_outer {
margin-left:7px;
margin-right:7px;
margin-bottom:14px;
}

.module_round_box1_outer {
margin-left:1px;
margin-right:1px;
margin-bottom:15px;
margin-top:3px;
}


.s5_mod_h3 {
font-size:1em;
}

.module_round_box {
background:#FFFFFF;
-moz-border-radius:6px;
-webkit-border-radius:6px;
border-radius:6px;
border:solid 1px #C5C5C5;
padding-top:12px;
padding-bottom:12px;
padding-left:20px;
padding-right:20px
}

.module_round_box .s5_mod_h3 {
border-bottom:solid 1px #C5C5C5;
background:#FAFAFA;
background: -moz-linear-gradient(top, #FFFFFF 0%, #F9F9F9 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#FFFFFF), color-stop(100%,#F9F9F9)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, #FFFFFF 0%,#F9F9F9 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, #FFFFFF 0%,#F9F9F9 100%); /* Opera11.10+ */
background: -ms-linear-gradient(top, #FFFFFF 0%,#F9F9F9 100%); /* IE10+ */
background: linear-gradient(top, #FFFFFF 0%,#F9F9F9 100%); /* W3C */
-moz-border-radius:6px 6px 0px 0px;
-webkit-border-radius:6px 6px 0px 0px;
border-radius:6px 6px 0px 0px;
padding-bottom:4px;
padding-left:13px;
padding-right:13px;
padding-top:8px;
margin-left:-20px;
margin-top:-12px;
margin-right:-20px;
margin-bottom:12px;
}

.module_round_box-dark {
background:#1A1A1A;
-moz-border-radius:6px;
-webkit-border-radius:6px;
border-radius:6px;
border:solid 1px #C5C5C5;
padding:20px;
padding-bottom:16px;
color:#FFFFFF;
}

.module_round_box-dark a {
color:#999999;
}

.module_round_box-dark .s5_h3_first {
color:#999999;
}

.module_round_box-dark .s5_mod_h3 {
color:#FFFFFF;
border-bottom:solid 1px #0B0B0B;
background:#141414;
background: -moz-linear-gradient(top, #1A1A1A 0%, #121212 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#1A1A1A), color-stop(100%,#121212)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, #1A1A1A 0%,#121212 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, #1A1A1A 0%,#121212 100%); /* Opera11.10+ */
background: -ms-linear-gradient(top, #1A1A1A 0%,#121212 100%); /* IE10+ */
background: linear-gradient(top, #1A1A1A 0%,#121212 100%); /* W3C */
-moz-border-radius:6px 6px 0px 0px;
-webkit-border-radius:6px 6px 0px 0px;
border-radius:6px 6px 0px 0px;
padding-bottom:11px;
padding-left:13px;
padding-right:13px;
padding-top:12px;
margin-left:-20px;
margin-top:-20px;
margin-right:-20px;
margin-bottom:12px;
}


.module_round_box-none {
background:none;
}

.module_round_box-none .s5_mod_h3 {
margin-bottom:12px;
}


#s5_drop_down_inner .module_round_box_outer {
margin-left:10px;
margin-right:10px;
margin-bottom:30px;
}

#s5_header_wrap .module_round_box_outer {
margin-left:0px;
margin-right:0px;
margin-bottom:1px;
}

/*** com_content.css ***/

/* JOOMLA STYLE
--------------------------------------------------------- */

iframe {
border:none;
}

.article-info {
margin-bottom:18px;
}

.article_column {
float:left;}

.article_separator {
	display: block;
	border-bottom:dotted 1px #BABABA;
	margin-bottom:10px;
	height: 15px; }

.article_column .contentpaneopen {
	padding-right:15px;}

.buttonheading {
	float:right;
	padding-right:5px;}

.contentpane ul li {
	text-align:left;}

.sectiontableheader  {
	text-align:left;
	font-weight:bold;
	padding:5px; }
legend.sectiontableheader {
	background:none;
	}
	
.sectiontableheader  th {
	padding-left:8px;
	padding-right:8px;
	}
	
.sectiontableentry1, .sectiontableentry2 {
	padding-bottom:5px;}	

.artnumber {
	float:left;
	text-align:left;
	width:25px;}
	
.arttitle {
	float:left;}

.artauthor {
	float:right;}
	
.arthits {	
	float:right;
	padding-left:10px;}
	
.artcreated {
	float:right;}	
	
.contentheading {
	padding-left: 0px;
    padding-bottom: 12px;}
	
.createdate  {
    padding-bottom:11px;
	font-size:0.9em;
	padding-top:0px;
	line-height: 10px;
	font-weight: bold; }	
	
.componentheading  {
	font-size:1.5em;
	line-height:23px;
	padding-bottom: 17px;
	padding-top:14px;
	font-weight:normal; }

.contentheading  {
	font-size:1.5em;
	float:left;
	font-weight:normal;
	line-height:normal; }

a.contentpagetitle  {
	text-decoration: none!important;
	font-size:1.2em;
}

.modifydate {
	margin-top:20px;
	font-size:0.9em;
	clear:both;
	}

.mosimage  {
	padding: 0;
	border:1px solid #CCCCCC;
	background:#ffffff;
	margin:6px;	}

.mosimage img  {
	padding: 0;
	margin: 0!important; }

	
.mosimage_caption {
	background:#EFEFEF none repeat scroll 0%;
	border-top:1px solid #CCCCCC;
	color:#666666;
	margin-top:2px;
	padding:1px 2px;}

.pagenav,
.pagenav_prev,
.pagenav_next,
.pagenavbar  {
	padding:7px 2px; }

a.pagenav,
.pagenav_prev a,
.pagenav_next a,
.pagenavbar a  {
	text-decoration: none; }

a.pagenav:hover, a.pagenav:active, a.pagenav:focus,
.pagenav_prev a:hover, .pagenav_prev a:active, .pagenav_prev a:focus,
.pagenav_next a:hover, .pagenav_next a:active, .pagenav_next a:focus,
.pagenavbar a:hover, .pagenavbar a:active, .pagenavbar a:focus  {
	text-decoration: none; }

.pagenavbar  {
	padding-left: 14px; }

.pagenavcounter  {
	padding: 8px 14px 0 14px; }

.pagination a, .pagination span {
padding-left:3px;
padding-right:3px;
}


.small  {
	font-size:0.9em; }

.smalldark  {
	text-align: left; }

div.syndicate div  {
	text-align: center; }

.pollstableborder tr.sectiontableentry1 td,
.pollstableborder tr.sectiontableentry2 td  {
	background: none; }	
	

/* Poll Styling */

.poll label {
margin-bottom:5px;
display:block;
text-align:left;
}

table.poll  {
padding: 0;
width: 100%;
border-collapse: collapse; }

table.pollstableborder  {
padding: 0;
width: 100%;
border: none;
}

table.pollstableborder .sectiontableentry2, table.pollstableborder .sectiontableentry1 {
float:left;
}

table.pollstableborder img  {
vertical-align: baseline; }

table.pollstableborder td  {
padding: 2px!important; }

.pollstableborder {
margin-top:10px;
margin-bottom:10px;
}

table.pollstableborder td {
background:none;
}

/* Joomla Style */

td {
padding-bottom:0px;
padding-top:0px;
}

table.searchintro  {
padding: 10px 0;
width: 80%; }

tr.sectiontableentry1 td  {
padding: 2px; }

tr.sectiontableentry2 td  {
padding: 2px; }

div.syndicate div  {
text-align: center; }

a.readon:hover, a.readon:active, a.readon:focus  {	
text-decoration:underline; }

.back_button {
height:37px;
padding-top:26px; }

div.back_button a,
div.back_button a:hover,
div.back_button a:active  {
margin: -2px 0;
display: block;
font-weight:bold;
height:37px;
text-decoration: none!important; }

.sectiontableheader {
line-height:29px;
padding:0pt 10px;
}

.sectiontableentry1 {
font-size:9pt;
padding:7px;
background:#ECECEC;
}

.sectiontableentry2 {
font-size:9pt;
padding:7px;
}

.latestnews li, .mostread li, .sections li{
padding:24px;
padding-bottom:6px;
padding-top:6px;
border-bottom:1px dotted #D3D3D3;
background:url(../images/system/arrow.png) no-repeat center left;
}


	
/* END JOOMLA STYLE
--------------------------------------------------------- */	


/* System Messages */

/* System Standard Messages */
#system-message { margin-bottom: 20px; }

#system-message dd.message ul { background: #C3D2E5 url(../../system/images/notice-info.png) 4px center no-repeat;margin-left: 4px;
    margin-top: 13px;}

/* System Error Messages */
#system-message dd.error ul { color: #c00; background: #E6C0C0 url(../../system/images/notice-alert.png) 4px center no-repeat; border-top: 3px solid #DE7A7B; border-bottom: 3px solid #DE7A7B;}

/* System Notice Messages */
#system-message dd.notice ul { color: #c00; background: #EFE7B8 url(../../system/images/notice-note.png) 4px center no-repeat; border-top: 3px solid #F0DC7E; border-bottom: 3px solid #F0DC7E;}

		
		
		
		
.blog-featured h1, .item-page h1 {
	color: #000000;
    font-size: 1.9em;
    font-weight: normal;
    line-height: 23px;
    padding-bottom: 25px;
    padding-top: 0;
    text-transform: uppercase;}
.subheading-category{
	font-size:.9em;text-transform:uppercase; }

.contact h3{ margin-bottom: 20px;    margin-top: 15px;;}
.jicons-icons {float:left;padding-right: 7px;}

address {padding-top:4px;padding-bottom:4px;}

div.category-desc {padding-bottom: 20px; padding-top: 13px;}

th{
    font-weight: bold;
    padding: 5px 0;
    text-align: left;
}

td.num {
    text-align: left;
    vertical-align: top;
}
td.hits {
    text-align: center;
    vertical-align: top;
}
td p {
    line-height: 1.7em;
    margin: 0;
}
.filter {
    margin: 10px 0;
}
.display-limit, .filter {
    margin-right: 7px;
    text-align: right;
}
table, table td,table td1{
    border-collapse: collapse;
}
table.weblinks, table.category {
    margin: 10px 0 20px 0;
    width: 100%;
}
table.weblinks th, table.category th{
    border: 1px solid #444444;
    font-size: 1em;
    font-weight: normal;
}
table.weblinks th:first-child, table.category th:first-child {
    border-left: medium none;
}
table th{
    background: none repeat scroll 0 0 #222222;
    color: #FFFFFF;
    padding: 6px 10px;
}
table th a {
    color: #FFFFFF !important;
}
table tb a {
    color: #000000 !important;
}
table td, .cat-list-row0 td, .cat-list-row1 td {
    border-bottom: 0px solid #EEEEEE
    border-right: 0px solid #EEEEEE;
	border-left: 0px solid #EEEEEE;
	padding: 4px 4px 4px 10px;
}

fieldset.filters {
    margin-top: 10px;}
	
	
/* tooltips */
.tip-wrap { z-index:1000003; }
.tip { background:#fff; padding:5px; border:1px solid #eee; max-width: 300px; }
.tip-title {  background: none repeat scroll 0 0 #101010;    color: #FFFFFF;    font-size: 1.0em;    margin-bottom: 4px;    padding: 5px 8px 5px;    text-shadow: 0 1px 0 #000000;}
.tip-text { padding: 3px; font-size: 11px; line-height: 16px; }	



/* ++++++++++++++  blog  ++++++++++++++ */

.cols-1{
        display: block;
        float: none !important;
        margin: 0 !important;}

.cols-2 .column-1{
        width:46%;
        float:left;}

.cols-2 .column-2{
        width:46%;
        float:right;
        margin:0}

.cols-3 .column-1{
        float:left;
        width:29%;
        padding:0px 5px;
        margin-right:4%
}
.cols-3 .column-2{
        float:left;
        width:29%;
        margin-left:0;
        padding:0px 5px}
.cols-3 .column-3{
        float:right;
        width:29%;
        padding:0px 5px}

.items-row, .items-leading {
        overflow:hidden;
        margin-bottom:20px !important;}

.column-2{
        width:55%;
        margin-left:40%;
}

.column-3{
        width:30%}

.blog-more{
        padding:10px 5px}


 
ul.actions li {
float:right;
padding-left:8px;
list-style:none;} 

li.pagenav-next {
float:right;
list-style:none;
margin-bottom: 19px;
margin-left: 6px;
margin-top: 8px;
padding: 5px 10px 5px 8px;
}

li.pagenav-prev {
float:left;
list-style:none;
margin-bottom: 19px;
margin-left: -23px;
margin-top: 8px;
padding: 5px 10px 5px 8px;
}

li.pagenav-prev a, li.pagenav-next a {color:#ffffff;}

li.pagenav-prev:hover, li.pagenav-next:hover {
background:#666666;
}

.pagenav {
    margin-bottom: 19px;
    margin-left: 6px;
    margin-top: 8px;
    padding: 5px;
text-align:center;	}

.pagination ul li {
list-style:none;
float:left;}

.pagination ul {
margin-left: -47px;}

.pathway_first {
padding-right:8px;
float:left;}

.pathway_middle {padding-right:8px;float:left;}

.contact-form label {display:block;}
	
.items-more ol { margin-left:5px; margin-top: 20px;}
		
.pagination {text-align:center;height: 60px;}

p.counter {margin-bottom: 7px;}


.row-separator {
display:none;
}

.blog-featured .row-separator {
display:block;
margin-top:14px;
border-bottom:solid 1px #EDEDED;
}


/*** editor.css ***/

/* TYPOGRAPHY
----------------------------------------------------------- */


p  {
    padding:5px;
	padding-left:0px;
	padding-right:0px;
	}

ul  {
	list-style: none; }
	
.contentpaneopen ul {
	list-style:disc;
	margin-left:10px;
	margin-right:10px;
	}

ul li  {
	padding: 2px; }

ol  {
	margin-top: 5px;
	margin-bottom: 5px; }

ol li  {
	padding:2px;
	margin-right:15px;
	margin-left: 15px; }

blockquote {
	background:transparent url(../images/typography/s5_left_quote.png) no-repeat top left;
	font-weight:bold;
	font-style:italic;
	line-height:150%;
	margin:15px 0pt;
	padding:0px 0px 5px 65px;
	width:auto;
}

blockquote p {
	background:transparent url(../images/typography/s5_right_quote.png) no-repeat bottom right;
	margin-top:0pt;
	padding:0pt 65px 10px 0pt;
}

.code {
	background:#EBEAEA;
	border-left:solid 5px #666666;
	color:#666666;
	font-family:monospace;
	font-style:normal;
	font-variant:normal;
	font-weight:normal;
	line-height:1.5;
	margin-top:15px;
	margin-bottom:15px;
	padding:10px 20px;
	padding-top:20px;
	padding-bottom:20px;
	font-size:1.4em;
}

ul.ul_arrow li {
	background:transparent url(../images/typography/s5_ul_arrow.png) no-repeat top left;
	padding:3px;
	padding-left:18px;
	padding-right:18px;
	list-style:none;
}

	#s5_component_wrap ul.ul_arrow {
		padding-left:0px;
		margin-left:0px;
		margin-right:0px;
		list-style-type:none;}
		

ul.ul_star li {
	background:transparent url(../images/typography/s5_ul_star.png) no-repeat top left;
    line-height: 17px;
    list-style: none outside none;
    margin-top: 12px;
    padding: 0 16px 0 24px;
}


	#s5_component_wrap ul.ul_star {
    line-height: 21px;
    list-style-type: none;
    margin-left: 0;
    margin-right: 0;
    padding-left: 0;}

ul.ul_bullet li {
	background:transparent url(../images/typography/s5_ul_bullet.png) no-repeat top left;
	padding:3px;
	padding-left:23px;
	padding-right:18px;
	list-style:none;
}

	#s5_component_wrap ul.ul_bullet {
		padding-left:0px;
		margin-left:0px;
		margin-right:0px;
		list-style-type:none;}


#s5_component_wrap ul.ul_numbers {
	padding-left:0px;
	margin-left:0px;
	margin-right:0px;
	list-style-type:none;}	

ul.ul_numbers li {
	padding-top:6px;
	padding-left:36px;}		
		
li.li_number1  {
	background:transparent url(../images/typography/s5_li_number1.png) no-repeat top left;
	padding-top:8px;
	padding-bottom:22px;
	list-style-type:none;
	padding-right:18px;
	padding-left:40px;
}

li.li_number2  {
	background:transparent url(../images/typography/s5_li_number2.png) no-repeat top left;
	padding-top:8px;
	padding-bottom:22px;
	list-style-type:none;
	padding-right:18px;
	padding-left:40px;
}

li.li_number3  {
	background:transparent url(../images/typography/s5_li_number3.png) no-repeat top left;
	padding-top:8px;
	padding-bottom:22px;
	list-style-type:none;
	padding-right:18px;
	padding-left:40px;
}

li.li_number4  {
	background:transparent url(../images/typography/s5_li_number4.png) no-repeat top left;
	padding-top:8px;
	padding-bottom:22px;
	list-style-type:none;
	padding-right:18px;
	padding-left:40px;
}

li.li_number5  {
	background:transparent url(../images/typography/s5_li_number5.png) no-repeat top left;
	padding-top:8px;
	padding-bottom:22px;
	list-style-type:none;
	padding-right:18px;
	padding-left:40px;
}

li.li_number6  {
	background:transparent url(../images/typography/s5_li_number6.png) no-repeat top left;
	padding-top:8px;
	padding-bottom:22px;
	list-style-type:none;
	padding-right:18px;
	padding-left:40px;
}

li.li_number7  {
	background:transparent url(../images/typography/s5_li_number7.png) no-repeat top left;
	padding-top:8px;
	padding-bottom:22px;
	list-style-type:none;
	padding-right:18px;
	padding-left:40px;
}

li.li_number8  {
	background:transparent url(../images/typography/s5_li_number8.png) no-repeat top left;
	padding-top:8px;
	padding-bottom:22px;
	list-style-type:none;
	padding-right:18px;
	padding-left:40px;
}

li.li_number9  {
	background:transparent url(../images/typography/s5_li_number9.png) no-repeat top left;
	padding-top:8px;
	padding-bottom:22px;
	list-style-type:none;
	padding-right:18px;
	padding-left:40px;
}

.red_box {

	background:#FFD6D6;
	border:solid 1px #EF706F;
	color:#CC0000;
	padding:6px 6px 6px 15px;
}

.red_box a, #s5_component_wrap_inner .red_box a {
	color:#CC0000;
	font-weight:bold;
	text-decoration:underline;
}

.blue_box {

	background:#D0DCEC;
	border:solid 1px #5B95DA;
	color:#1B6FC2;
	padding:6px 6px 6px 15px;
}

.blue_box a, #s5_component_wrap_inner .blue_box a {
	color:#1B6FC2;
	font-weight:bold;
	text-decoration:none;
}

.green_box {

	background:#EEF7DD;
	border:solid 1px #40AB38;
	color:#40AB38;
	padding:6px 6px 6px 15px;
}

.green_box a, #s5_component_wrap_inner .green_box a {
	color:#40AB38;
	font-weight:bold;
	text-decoration:underline;
}

.orange_box {

	background:#FEF6D8;
	border:solid 1px #755102;
	color:#755102;
	padding:6px 6px 6px 15px;
}

.orange_box a, #s5_component_wrap_inner .orange_box a {
	color:#755102;
	font-weight:bold;
	text-decoration:underline;
}

.yellow_box {

	background:#F4F5B9;
	border:solid 1px #757402;
	color:#757402;
	padding:6px 6px 6px 15px;
}

.yellow_box a, #s5_component_wrap_inner .yellow_box a {
	color:#757402;
	font-weight:bold;
	text-decoration:underline;
}

.gray_box {

	background:#FFFFFF;
	border:solid 1px #9D9D9D;
	color:#4B4B4B;
	padding:6px 6px 6px 15px;
}

.gray_box a, #s5_component_wrap_inner .gray_box a {
	color:#4B4B4B;
	font-weight:bold;
	text-decoration:underline;
}

.black_box {

	background:#333333;
	border:solid 1px #4D4D4D;
	color:#FFFFFF;
	padding:6px 6px 6px 15px;
}

.black_box a, #s5_component_wrap_inner .black_box a {
	color:#FFFFFF;
	font-weight:bold;
	text-decoration:underline;
}

.boxed {
    background: none repeat scroll 0 0 #D9D9D9;
    border: 1px solid #BFBEBE;
    margin-right: 0;
    padding: 5px;
	float:left;
	margin:0px;
	margin-bottom:14px;
}

.boxed_black {
	background:#040404;
	padding:3px;
	margin-right:10px;
	margin-bottom:8px;
	-webkit-transition: background 200ms ease-out;
	-moz-transition: background 200ms ease-out;
	-o-transition: background 200ms ease-out;
	transition: background 200ms ease-out;
}

.boxed_black:hover {
	background:#7A7A7A;
	-webkit-transition: background 200ms ease-in;
	-moz-transition: background 200ms ease-in;
	-o-transition: background 200ms ease-in;
	transition: background 200ms ease-in;
}

.padded {
	border:4px solid #ffffff;
	margin-right:10px;
	margin-bottom:7px;
	padding:0px;
	-webkit-box-shadow: 0 0px 3px #949393;
	-moz-box-shadow: 0 0px 3px #949393;
	box-shadow: 0 0px 3px #949393; 
	margin-bottom:8px;
	margin-top:2px;
	position:relative;
	-webkit-transition: all 300ms ease-out;
	-moz-transition: all 300ms ease-out;
	-o-transition: all 300ms ease-out;
	transition: all 300ms ease-out;
}

.padded:hover {
	border:4px solid #D4D3D3;
	-webkit-box-shadow: 0 0px 3px #595959;
	-moz-box-shadow: 0 0px 3px #595959;
	box-shadow: 0 0px 3px #595959; 
}

.point {
	min-height:28px;
}

.s5_greenbox {

	position:relative;
	padding:12px;
	-moz-box-shadow: 0 0px 3px rgba(0, 0, 0, 0.3) inset; /* FF3.5+ */
	-webkit-box-shadow: 0 0px 3px rgba(0, 0, 0, 0.3) inset; /* Saf3.0+, Chrome */
	box-shadow: 0 0px 3px rgba(0, 0, 0, 0.3) inset; /* Opera 10.5, IE9, Chrome 10+ */
	color:#ffffff;
	background:#185564;}
	.s5_greenbox a {color:#ffffff;}

.s5_greenbox .point {
	padding-left:42px;
	background:transparent url(../images/typography/s5_alert.png) no-repeat center left;}	
	

	
.s5_graybox {

	position:relative;
	padding:12px;
	color:#313131;
	-moz-box-shadow: 0 0px 3px rgba(0, 0, 0, 0.3) inset; /* FF3.5+ */
	-webkit-box-shadow: 0 0px 3px rgba(0, 0, 0, 0.3) inset; /* Saf3.0+, Chrome */
	box-shadow: 0 0px 3px rgba(0, 0, 0, 0.3) inset; /* Opera 10.5, IE9, Chrome 10+ */
	background:#e6e6e6;}
	.s5_graybox a {color:#313131;}

.s5_graybox .point {
	padding-left:42px;
	background:transparent url(../images/typography/s5_alert.png) no-repeat center left;}	
	
	

	
	
.s5_bluebox {

	position:relative;
	padding:12px;
	-moz-box-shadow: 0 0px 3px rgba(0, 0, 0, 0.3) inset; /* FF3.5+ */
	-webkit-box-shadow: 0 0px 3px rgba(0, 0, 0, 0.3) inset; /* Saf3.0+, Chrome */
	box-shadow: 0 0px 3px rgba(0, 0, 0, 0.3) inset; /* Opera 10.5, IE9, Chrome 10+ */
	color:#ffffff;
	background:#22ace5;}
	.s5_bluebox a {color:#ffffff;}

.s5_bluebox .point {
	padding-left:42px;
	background:transparent url(../images/typography/s5_alert.png) no-repeat center left;}		
	

	
.s5_redbox {

	position:relative;
	padding:12px;
	-moz-box-shadow: 0 0px 3px rgba(0, 0, 0, 0.3) inset; /* FF3.5+ */
	-webkit-box-shadow: 0 0px 3px rgba(0, 0, 0, 0.3) inset; /* Saf3.0+, Chrome */
	box-shadow: 0 0px 3px rgba(0, 0, 0, 0.3) inset; /* Opera 10.5, IE9, Chrome 10+ */
	color:#ffffff;
	background:#ff5858;}
	.s5_bluebox a {color:#ffffff;}

.s5_redbox .point {
	padding-left:42px;
	background:transparent url(../images/typography/s5_alert.png) no-repeat center left;}	
	
	
.s5_features_list li {
background:url(../images/typography/s5_features_list.png) no-repeat top left;
padding:0px;
padding-left:32px;
font-size:0.85em;
margin-bottom:10px;
list-style:none;
min-height:20px;
}

#s5_component_wrap ul.s5_features_list {
margin:0px;
}

.s5_tweet li {
background:url(../images/typography/s5_tweet.png) no-repeat top left;
padding:0px;
padding-left:48px;
margin-bottom:10px;
font-size:1em;
line-height:149%;
}