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

*  {	margin: 0;	padding: 0; }

body  {
	color:#333333;
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
margin-top:30px;
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
padding-top:36px;
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
padding-bottom:11px;
padding-left:13px;
padding-right:13px;
padding-top:12px;
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