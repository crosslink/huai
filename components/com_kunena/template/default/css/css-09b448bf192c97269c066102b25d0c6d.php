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

/*** kunena.forum.css ***/

@charset "utf-8";



/* ------------------------- FONT SIZES FOR BLUE EAGLE

PX		EM			PCT			PT
6px		.5em		50%			5pt
7px		.583em		58.3%		5pt
8px		.667em		66.7%		6pt
9px		.75em		75%			7pt
10px	.833em		83.3%		8pt
11px	.917em		91.7%		8pt
12px	1em			100%		9pt	(Base size)
13px	1.083em		108.3%		10pt
14px	1.167em		116.7%		11pt
15px	1.25em		125%		11pt
16px	1.333em		133.3%		12pt
17px	1.417em		141.7%		13pt
18px	1.5em		150%		14pt
19px	1.583em		158.3%		14pt
20px	1.667em		166.7%		15pt
21px	1.75em		175%		16pt
22px	1.833em		183.3%		17pt
23px	1.917em		191.7%		17pt
24px	2em			200%		18pt

----------------------------------------------------------*/

/* 
----------------------------------------------------------------------------------------------- */

/* MAIN STYLES
----------------------------------------------------------------------------------------------- */
#Kunena {
	padding: 0;
	margin: 0;
	line-height: 1.333em;
	min-width:200px;
}

#Kunena table tr th,
#Kunena table tr td,
#Kunena div,
#Kunena p,
#Kunena span,
#Kunena ul li,
#Kunena ul li a {
	font-size: 1em;
	line-height: auto;
}
#Kunena sup {
	vertical-align: super;
}
#Kunena sub {
	vertical-align: sub;
}
#Kunena ul li,
#Kunena ul li a {
	background: none;
	margin: 0;
	padding: 0;
}

#Kunena .clr { clear:both; height:1px; overflow:hidden;}
#Kunena .fltlft {float:left;}
#Kunena .fltrt {float:right;}
#Kunena .kright {text-align:right;}
#Kunena .kleft {text-align:left;}
#Kunena .kcenter {text-align:center;}
#Kunena .nowrap {white-space:nowrap;}
#Kunena .divider {margin:0 3px;}
#Kunena .hidden {overflow:hidden;}

#Kunena a {
	text-decoration: none;
	font-weight: normal;
}
#Kunena a:link,
#Kunena a:visited,
#Kunena a:active {}
#Kunena a:focus {outline: none;}
#Kunena a:hover {}

#Kunena .overflow {
	display: table;
	table-layout:fixed;
	width: 100%;
}

#Kunena .kxs {
	/* 9px */
	font-size: .75em;
}
#Kunena .kms {
	/* 10px */
	font-size: .833em; 
}
#Kunena .ks {
	/* 11px */
	font-size: .917em; 
}
#Kunena .km {
	/* 12px */
	font-size: 1em;
}
#Kunena .kl {
	/* 16px */
	font-size: 1.333em;
}
#Kunena .kxl {
	/* 17px */
	font-size: 1.417em;
}
#Kunena .kxxl {
	/* 20px */
	font-size: 1.667em;
}
#Kunena input.ksmall {
	width: 25%;
}
#Kunena input.kmedium {
	width: 45%;
}
#Kunena input.klarge {
	width: 95%;
}
#Kunena textarea,
#Kunena textarea.kmedium {
	font-size: 1em;
	width: 95%;
	height: 10em;
}
#Kunena textarea.ksmall {
	height: 5em;
}
#Kunena textarea.klarge {
	height: 20em;
}

#Kunena .knewchar {
	font-weight: bold;
	margin-left: 3px;
	font-size: .75em;
	vertical-align:top;
	white-space:nowrap;
}

#Kunena table {
	width :100%;
	border-collapse:collapse;
	padding:0;
	margin:0;
}

/* Block styling
----------------------------------------------------------------------------------------------- */

#Kunena div.kblock {
	display: table;
	table-layout:fixed;
	width: 100%;
	border: none;
	margin: 5px 0 0 0;
	clear: both;
	border-bottom:4px solid;
}
#Kunena .kblock div.kheader {
	border-bottom:2px solid;
	padding:0 10px 0 10px;
	background:  url(images/cat_title_bg.gif) repeat-x top left;	height: 30px;
}
#Kunena .kheader h2,
#Kunena .kheader h2 a {
    font-weight: bold;
    margin-bottom: 0;
    padding: 0;
}

#Kunena div.kblock div.ktitle {
	text-align: left;
	display: table-row;
	width:100%;
	margin: 0;
	word-wrap: break-word;
	overflow: hidden;
}
#Kunena div.kblock div.ktitle h1,
#Kunena div.kblock div.ktitle h2 {
	border: none;
	display: block;
	line-height: 1.9em;
	font-size:1.333em;
	text-indent: 0px;
	padding-top: 2px;
	margin: 0 10px;
	padding: 2px 0;
	width: auto;
}
#Kunena div.kblock span.ktoggler {
	float: right;
	top: 1px;
	right: -10px;
	height: 1px;
	position: relative;
}
#Kunena .ktoggler.close a:hover {
	color:#ff0000;
	background: url("../images/expand.gif") no-repeat scroll 0 0 transparent;
}
#Kunena .ktoggler.open a:hover {
	color:#ff0000;
	background: url("../images/shrink.gif") no-repeat scroll 0 0 transparent;
}
#Kunena div.kblock span.select-toggle {
	float: right;
	top: 5px;
	right: 13px;
	height: 1px;
	position: relative;
}
#Kunena div.kblock div.kcontainer {
	display: table-row;
}
#Kunena div.kblock div.kbody {
	border-style:solid;
	border-width:0px 1px;
	overflow: hidden;
	word-wrap: break-word;
}
#Kunena div.kblock label {
	clear: both;
	/*display: block;*/
}
#Kunena div.kblock div.khelprulescontent,
#Kunena div.kblock div.kfheadercontent {
	vertical-align: top;
	padding: 15px;
	/*border: 1px solid;*/
}
#Kunena div.kblock div.khelprulesjump {	
	border: 1px solid;
}
#Kunena div.kblock div.kactions {
	padding: 5px 10px;
	line-height: 13px;
}
#Kunena div.kblock div.kactions a {
	color: #FFF !important; 
    background-color:transparent !important 
}
#Kunena table.kblock {
	width: 100%;
	margin: 5px 0 0 0;
	clear: both;
	border-spacing: 0;
}

#Kunena tr.krow1 td {
	padding: 4px 8px;
}
#Kunena tr.krow2 td {
	padding: 4px 8px;
}

#Kunena table.kblock .kcol {
	padding: 4px 8px;
}
#Kunena .kcol-annid {
	text-align: center;
	width: 5%;
}
#Kunena .kcol-anndate {
	width: 15%;
}
#Kunena .kcol-anntitle {
	width: 50%;
}
#Kunena .kcol-annpublish {
	text-align: center;
	width: 10%;
}
#Kunena .kcol-annedit {
	text-align: center;
	width: 10%;
}
#Kunena .kcol-anndelete {
	text-align: center;
	width: 10%;
}
#Kunena table.kblocktable .knewchar {
	font-size: .583em;
}

#Kunena tr.ksth {
	font-size: 1em;
}
#Kunena tr.ksth th{
	padding: 3px 5px;
	text-align: center;
}

#Kunena td#kpost-buttons {
	text-align:center;
}

#Kunena tr.krow1 td.kcc-row1,
#Kunena tr.krow2 td.kcc-row1 {
	background: none;
}

#Kunena td.kcol-ktopicreplies {
	text-align: center;
	width:1%;
}

#Kunena td.kcol-ktopicreplies strong {
	display: block;
	font-size: 2.091em;
	font-weight: normal;
	margin: 4px 0;
}

#Kunena span.kcat-topics,
#Kunena span.kcat-replies {
	text-align:center;
	font-size: 1em;
}

#Kunena span.kcat-topics-number,
#Kunena span.kcat-replies-number {
	display:block;
	font-size: 1.417em;
	margin:5px 0;
}

#Kunena .ktopic-latest-post,
#Kunena .ktopic-date {
	font-size: .917em;
}

#Kunena a.ktopic-title {
	font-weight: bold;
	font-size: 1.25em;
}

#Kunena div.ktopic-title-cover {
	text-align:left;
}

#Kunena div.ktopic-details {
	clear:left;
	font-size: .977em;
}
	
#Kunena .klatest-avatar,
#Kunena .ktopic-latest-post-avatar {
	display: block;
	height: auto;
	width: 36px;
	padding: 1px;
	margin: 4px 6px 2px 0;
	border: 1px solid;
	float: left;
}


#Kunena img.klist-avatar,
#Kunena .klist-avatar {
	height: auto;
	width: 36px;
	border: 0px
}

#Kunena .klatest-post-info {
	display:block;
}
	
#Kunena .kcredits {
	height: 31px;
	line-height: 26px;
	/*font-size: .833em;*/
}
#Kunena td.kcredits-kintro {
	vertical-align: middle;
	padding: 0 15px;
}

#Kunena .kfooter {
	font-size: .833em;
}

#Kunena .kfooter-time {
}

#Kunena .kalert {
}
#Kunena td.kcol-first {
	border-left: none;
	border-bottom: 1px solid;
	padding: 4px 8px;
	vertical-align: middle;
	white-space:nowrap;
}
#Kunena td.kcol-mid {
	border-left: 1px solid;
	border-bottom: 1px solid;
	padding: 4px 8px;
	vertical-align: middle;
}
#Kunena td.kcol-last {
	border-left: 1px solid;
	border-bottom: 1px solid;
	padding: 4px 8px;
	vertical-align: middle;
}
#Kunena td.ktopicmodule {
	padding: 0;
}
#Kunena td.ktopicmoderation {
	width: 1%;
	vertical-align: middle;
}
#Kunena td.kcol-ktopiclastpost {
	font-size: .917em;
	width: 25%;
	vertical-align: middle;
}


/* COLOR ADMINISTRATOR AND MODERATOR
----------------------------------------------------------------------------------------------- */

#Kunena .kwho-admin {
}

#Kunena .kwho-globalmoderator {
}

#Kunena .kwho-moderator {
}

#Kunena .kwho-user {
}

#Kunena .kwho-guest {
}

#Kunena .kwho-banned {
}

#Kunena .kwho-blocked {
}

/* MENU
----------------------------------------------------------------------------------------------- */

#Kunena #ktop {
	margin: 0;
	border-style: solid;
	border-top-width: 0;
	border-right-width: 0;
	border-bottom-width: 3px;
	border-left-width: 0;
	vertical-align: bottom;
	line-height: 0;
}

#Kunena #ktop span.ktoggler {
	margin:-16px 0;
	padding:1px 1px 0;
}

#Kunena #ktopmenu {
	margin:0.33em 0;
	display: inline;
}

#Kunena #ktab {
	margin:0 20px 0 0;
	top: 0;
}

#Kunena #ktab ul {
	margin: 0;
	padding: 0;
	list-style: none;
	display: inline-block;
}

#Kunena #ktab ul ul {
	margin: -2px 2px;
	padding: 0;
	list-style: none;
	float: left;
}

#Kunena #ktab li,
#Kunena #ktab div.moduletable ul.menu li	{
	display: inline;
	float: left;
	margin: 2px 2px 0 0!important;
	padding: 0;
	border: 0;
}

#ktab div.moduletable {
	background: none;
	margin-bottom: 0;
}

#ktab div.moduletable ul.menu,
#ktab div.moduletable ul.menu li a,
#ktab div.moduletable ul.menu li a span {
	background-image:none!important;
	font-size: 1em;
	line-height: 2em;
}

#Kunena #ktab a {
	margin: 0;
	padding: 0 10px;
	text-decoration: none;
	border: 0;
	display: block;
	float: left;
	border-radius: 5px 5px 0 0;
	-moz-border-radius: 5px 5px 0 0;
	-webkit-border-radius: 5px 5px 0 0;
	color: #fff !important;
	font-size: 1em;
	line-height: 2.3em;
	text-indent: 0;
}

#Kunena #ktab a span {
	display: block;
	font-size: 1em; 
	line-height: 2.3em;
	text-indent: 0;
	padding: 0;
}

#Kunena #ktab a:hover,
#Kunena #ktab li.Kunena-item-active a	{
	background-position: right bottom;
}

#Kunena #ktab a:hover span,
#Kunena #ktab li.Kunena-item-active a span	{
	background-position: left bottom;
	font-style: normal;
	text-decoration: none;
}

#Kunena select#searchlist {
	margin-bottom: 10px;
	float:left;
}

#Kunena select,
#Kunena select:focus,
#Kunena select:hover {
	/* background: none repeat scroll 0 0; */
	/*font-size: .917em;*/
	border: 1px solid;
	padding: 0px;
}

#Kunena td.td-1  {
	vertical-align:top;
}


/* Using a Joomla menu module */

#Kunena div.moduletable {
	margin: 0;
	padding: 0;
	border:none;
}
#Kunena #ktab ul.menu li.active a {
	/* Do not specify background color: template parameter */
}
	
#Kunena option {
	background: none repeat scroll 0 0;
	font-size: .917em;
	padding: 0px 10px 0px 2px;
}

#Kunena .button,
#Kunena .kbutton {
	background: none repeat scroll 0 0;
	font-size: .917em;
	border: 1px solid;
	padding: 0px 4px;
	margin-right: 10px;
}

#Kunena .kbutton-back {
}
#Kunena .kbutton-container {
	margin-top: 20px;
	text-align:center;
}
#Kunena .kbutton-container input.kbutton,
#Kunena .kbutton-container .kbutton,
#Kunena .kbutton-container .kbutton:hover,
#Kunena .kbutton-container .kbutton:focus {
	font-size:1em;
	font-weight:bold;
	padding:4px;
}
#Kunena input.kinput {
	border: 1px solid;
}

#Kunena table.klist-bottom td {
 	padding: 0 5px; 
	height: 20px; 
	line-height: 20px;
	text-align:center;
 }
#Kunena table.klist-bottom td.klist-moderators {
	text-align:left;
 }
 
 
#Kunena .kbutton:hover,
#Kunena .kbutton:focus {
	background: none repeat scroll 0 0;
	font-size: .917em;
	border: 1px solid;
	padding: 0px 4px;
}

#Kunena .klist-actions {
	border: 1px solid;
	margin-top: -1px;
}

#Kunena .klist-actions td {
	vertical-align:middle;
	padding: 0 10px;
	white-space:nowrap;
}

#Kunena .klist-actions-bottom {
	border: 1px solid;
	margin-bottom: -1px;
}

#Kunena .klist-actions-info {
	float: left;
	font-weight: bold;
	height: 28px;
	line-height: 28px;
	padding-left: 15px;
	padding-right: 10px;
}

#Kunena .klist-actions-info a {
	text-decoration: underline;
}

#Kunena .klist-pages {
	border-left: 1px solid;
	float: right;
	font-size: 1.333em;
	font-weight: bold;
	height: 28px;
	line-height: 28px;
	padding-left: 10px;
	padding-right: 5px;
}

#Kunena .klist-times {
	border-left: 1px solid;
	height: 28px;
	line-height: 28px;
	padding-left: 5px;
	padding-right: 10px;
}

#Kunena a.klist-pages-link:link,
#Kunena a.klist-pages-link:visited {
	text-decoration: underline;
}

#Kunena .klist-pages-link {
	padding: 0pt 5px;
}

#Kunena .klist-actions-info-all {
	font-weight: bold;
	height: 28px;
	line-height: 28px;
	padding-left: 15px;
	padding-right: 10px;
}

#Kunena .klist-actions-goto {
	height: 28px;
	padding: 0px 2px 0px 2px;
	width: 1%;
	vertical-align: middle;
}

#Kunena .klist-actions-forum {
	border-left: 1px solid;
	height: 28px;
	padding: 1px 4px 1px 4px;
	white-space: nowrap;
	vertical-align: middle;
	width: 10%;
}

#Kunena .klist-pages-all {
	border-left: 1px solid;
	font-size: 1.333em;
	font-weight: bold;
	height: 28px;
	line-height: 28px;
	padding-left: 5px;
	padding-right: 3px;
	vertical-align: middle;
	text-align: right;
}

#Kunena .klist-times-all {
	width: 1%;
	border-left: 1px solid;
	height: 28px;
	line-height: 28px;
	padding-left: 5px;
	padding-right: 5px;
}

#Kunena .klist-jump-all {
	width: 1%;
	border-left: 1px solid;
	height: 20px;
	line-height: 20px;
	padding-left: 5px;
	padding-right: 5px;
	white-space: nowrap;
}

#Kunena .klist-jump-all form {
	display: table;
}

#Kunena .klist-times-all .inputboxusl {
	/*font-size: .833em;*/
	margin: 0pt;
	padding: 0pt;
	width: 100px;
}

#Kunena .klist-jump-all form .inputbox {
	/*font-size: .833em;*/
	margin: 0pt;
	padding: 0pt;
	width: 150px;
}

#Kunena .klist-pages-all table tr td {
	height: 28px;
	line-height: 28px;
	white-space: nowrap;
}

#Kunena td.klist-jump-all input.kjumpgo {
	display: none;
}

#Kunena .klist-top {
	background: none;
	border: 1px solid;
	margin: -1px 0px 0px;
	width: 100%;
}

#Kunena .klist-bottom {
	background:none;
	border:1px solid;
	margin:0 0 5px;
	min-height:2.33em;
	padding:1px 5px;
	padding-bottom:10px !important; 
}

#Kunena .klist-moderators {
	clear: left;
}

#Kunena .klist-markallcatsread {
	min-height: 27px;
	padding: 0px;
	overflow: hidden;
	border: 1px solid;
}
#Kunena .klist-markallcatsread input.kbutton {
	margin: 8px;
}

#Kunena .klist-categories {
	border-left: 1px solid;
	/*  height: 28px;
	line-height: 28px; */
	padding: 0 5px 0 10px;
	white-space: nowrap;
	margin: 0;
}

#Kunena div.bannergroup {
	text-align:center;
}

/*---------- Pagination ------------- */

#Kunena ul.kpagination{ 
	border:0; 
	margin:0; 
	padding:0 5px 0 0;
}
#Kunena .kpagination li{
	border:0; 
	margin:0; 
	padding:0;
	font-size: .667em;
	list-style-type:none;
	line-height: .667em;
	display:inline-block;
}

#Kunena #kflattable ul.kpagination { 
	width: auto;
	font-size: 1.167em;
	line-height: 1.167em;
}

#Kunena .kpagination a {
	border:solid 1px;
}
#Kunena .kpagination li.page {
	margin-right:2px;
} 
#Kunena .kpagination li.more {
	padding:4px 2px;
	font-weight:bold;
} 
#Kunena .kpagination .active {
	border:solid 1px;
	font-weight:bold;
	padding:3px 5px;
	margin: 2px;
}
#Kunena .kpagination a:link,
#Kunena .kpagination a:visited {
	padding:0px 5px;
	margin: 2px;
	text-decoration:none;
}
#Kunena #kflattable .kpagination a:link,
#Kunena #kflattable .kpagination a:visited { 
	margin: 0;
}
#Kunena .kpagination a:hover{
	border:solid 1px;
}

/* Inline pagination in topics */
#Kunena div.ktopic-title-cover ul.kpagination { 
	padding-top: 2px;
	text-align:left;
	/* display:inline; */
}
#Kunena div.ktopic-title-cover ul.kpagination li{
	font-size:.833em;
}
#Kunena div.ktopic-title-cover ul.kpagination li.page {
	float:left;
	padding:4px 3px 0 0; 
} 
#Kunena div.ktopic-title-cover ul.kpagination a {
	border:solid 1px;
}
#Kunena div.ktopic-title-cover ul.kpagination a:hover{
	border:solid 1px;
}
#Kunena #kflattable ul.kpagination li {
	margin-right: 5px;
}

#Kunena span.ktopic-posted-time {
	display: block;
	float:left;
	font-size: .917em;
}
#Kunena span.ktopic-category {
	float:left; 
	clear:left;
	font-size: .917em;
}
#Kunena span.ktopic-views {
	text-align:center;
}

#Kunena span.ktopic-views-number {
	display: block;
	font-size: 1.455em;
	margin:5px 0;
	text-align:center;
}
	
#Kunena span.ktopic-by { 
	float:left;
}

#Kunena span.ktopic-locked { 
	margin-left: 3px;
	text-align: left;
}

/* HEADER
----------------------------------------------------------------------------------------------- */

#Kunena td.kprofileboxcnt {
	text-align:left;
	width: 95%;
	vertical-align:middle;
	padding:5px;
}

#Kunena td.kprofileboxcnt ul {
	margin: 5px 0 5px 5px;
	padding-left: 0;
}
#Kunena td.kprofileboxcnt ul.kprofilebox-link {
	margin: 5px 0;
}
#Kunena td.kprofileboxcnt ul.kprofilebox-link li {
	height: 10px;
	line-height: 10px;
	font-size: .917em;
	margin-top: 5px;
	padding-left:10px !important;
}
#Kunena td.kprofileboxcnt ul li {
	list-style-type:none;
	display: block;
	background: 0 none;
}

#Kunena td.kprofileboxcnt ul.kprofilebox-welcome li {
	padding: 2px;
}

#Kunena td.kprofileboxcnt ul.kprofilebox-welc

/*** kunena.default.css ***/

@charset "utf-8";



/* ------------------------- COLOR PALETTE FOR BLUE EAGLE

Dark blue color: 			#5388B4			RGB: 83/136/180
Medium blue color: 			#609FBF			RGB: 96/159/191
Light grey color:			#F2F1EE 		RGB: 242/241/238
Medium grey color:			#999999 		RGB: 153/153/153
Dark grey color:			#737373 		RGB: 115/115/115
Border grey color:			#BFC3C6 		RGB: 191/195/198
Yellow highlight:			#FFFFCC 		RGB: 255/255/204
Grey text color:			#999999 		RGB: 153/153/153
Red hover color:			#FF0000 		RGB: 255/0/0

Forum highlight/dark colors
Green forum highlight:		#d2f8db 		RGB: 210/248/219
Green forum dark:			#bfe5c7 		RGB: 191/229/199
Orange forum highlight:		#ffeb8c 		RGB: 255/235/140
Orange forum dark:			#ffd475 		RGB: 255/212/117
Blue forum highlight:		#c3f0ff 		RGB: 195/240/255
Blue forum dark:			#b1e3ff 		RGB: 177/227/255
Grey forum highlight:		#e5e5e5 		RGB: 229/229/229
Grey forum dark:			#d5d5d5 		RGB: 213/213/213
Pink forum highlight:		#ffddff 		RGB: 255/221/255
Pink forum dark:			#ffd0ff 		RGB: 255/208/255

----------------------------------------------------------*/

/* 
----------------------------------------------------------------------------------------------- */

/* MAIN STYLES
----------------------------------------------------------------------------------------------- */
#Kunena td,
#Kunena table,
#Kunena th,
#Kunena div,
#Kunena p,
#Kunena span {
	font-family: Arial, Microsoft Yahei, sans-serif;
}
#Kunena ul li {
	background: none;
}
#Kunena .divider {color:#999999;}

#Kunena a:link,
#Kunena a:visited,
#Kunena a:active,
#Kunena a:focus { color: #c4c4c4 !important; background-color:transparent !important;}

#Kunena a:hover { color: #FF0000 !important; background-color:transparent !important; }

#Kunena .knewchar {
	color: #009900;
	font-family: Arial, Microsoft Yahei, sans-serif;
}

/* Block styling
----------------------------------------------------------------------------------------------- */

#Kunena div.kblock {
	border-bottom-color:#BFC3C6;
	background-color: #FFFFFF;
}
#Kunena .kblock div.kheader {
	border-bottom-color:#D9D9D9;
	color: #FFFFFF;
}
#Kunena .kheader h2,
#Kunena .kheader h2 a {
	color: #fff !important;
}

#Kunena div.kblock div.ktitle {
	background: #3B3B3B url(images/cat_title_bg.gif) repeat-x top left;	height: 30px;
	color: #FFFFFF;
}
#Kunena div.kblock div.ktitle h1,
#Kunena div.kblock div.ktitle h2 {
	color: #FFFFFF;
}
#Kunena div.kblock div.kbody {
	border-color:#BFC3C6;
}
#Kunena div.kblock div.khelprulescontent,
#Kunena div.kblock div.kfheadercontent {
	background-color: #FFFFFF;
	color: #000000;
}
#Kunena div.kblock div.khelprulesjump {	
	border-color: #BFC3C6;
	background-color: #FFFFFF;
	color: #000000;
}
#Kunena div.kblock div.kactions {
	background-color: #737373;
	color:#FFFFFF ;
}
#Kunena div.kblock div.kactions a {
	color:#FFFFFF !important;
}
#Kunena tr.krow1 td {
	background-color: #F2F1EE;
}
#Kunena tr.krow2 td {
	background-color: #FFFFFF;
}
#Kunena tr.ksth {
	background-color: #737373;
	color: #fff;
	font-family: Arial, Microsoft Yahei, sans-serif;
}
#Kunena td.kcol-ktopicreplies {
	color: #999999;
}
#Kunena td.kcol-ktopicreplies strong {
	color: #999999;
}
#Kunena span.kcat-topics,
#Kunena span.kcat-replies {
	color:#999999;
}
#Kunena span.kcat-topics-number,
#Kunena span.kcat-replies-number {
	color: #999999;
}
#Kunena .klatest-avatar,
#Kunena .ktopic-latest-post-avatar {
	border-color: #BFC3C6;
}
#Kunena .kfooter-time {
	color: #999999;
}
#Kunena .kalert {
	color: #FF0000;
}
#Kunena td.kcol-first {
	border-bottom-color: #BFC3C6;
}
#Kunena td.kcol-mid {
	border-left-color: #BFC3C6;
	border-bottom-color: #BFC3C6;
}
#Kunena td.kcol-last {
	border-left-color: #BFC3C6;
	border-bottom-color: #BFC3C6;
}
#Kunena td.ktopicmodule {
	border-bottom-color: #BFC3C6;
}

/* COLOR ADMINISTRATOR AND MODERATOR
----------------------------------------------------------------------------------------------- */

#Kunena .kwho-admin,
#Kunena a.kwho-admin {
	color: #FF0000 !important;
}

#Kunena .kwho-globalmoderator,
#Kunena a.kwho-globalmoderator {
	color: #800000 !important;
}

#Kunena .kwho-moderator,
#Kunena a.kwho-moderator {
	color: #0000FF !important;
}

#Kunena .kwho-user,
#Kunena a.kwho-user {
	color: #5388B4 !important;
}

#Kunena .kwho-guest,
#Kunena a.kwho-guest {
	color: #666666 !important;
}

#Kunena .kwho-banned ,
#Kunena a.kwho-banned {
	color: #A39D49 !important;
}

#Kunena .kwho-blocked,
#Kunena a.kwho-blocked {
	color: #ff0000 !important;
}

/* MENU
----------------------------------------------------------------------------------------------- */

#Kunena #ktop {
	background-color: transparent;
	color: #000000;
}
#ktab div.moduletable ul.menu,
#ktab div.moduletable ul.menu li a,
#ktab div.moduletable ul.menu li a span {
	background-image:none!important;
}

#Kunena #ktab a {
	background-color: #737373;
}

#Kunena #ktab a span {
	font-family: Arial, Microsoft Yahei, sans-serif;
	color: #FFFFFF;
}
#Kunena #ktab a:hover span,
#Kunena #ktab li.Kunena-item-active a span	{
	color: #FFFFFF;
}
#Kunena select,
#Kunena select:focus,
#Kunena select:hover {
	border-color: #999999;
	color: #000000;
}

/* Using a Joomla menu module */

#Kunena option {
	background-color: #FFFFFF;
	color: #000000;
}

#Kunena .button,
#Kunena .kbutton {
	background-color: #F2F1EE;
	border-color: #999999;
	color: #000000;
}

#Kunena .kbutton-back {
	color: #000000;
}
#Kunena input.kinput {
	border-color: #999999;
}
#Kunena .kbutton:hover,
#Kunena .kbutton:focus {
	background-color: #609FBF;
	border-color: #5388B4;
	color: #FFFFFF;
}

#Kunena .klist-actions {
	background-color: #FFFFFF;
	color: #000000;
	border-color: #BFC3C6;
}
#Kunena .klist-actions-bottom {
	background-color: #FFFFFF;
	color: #000000;
	border-color: #BFC3C6;
}
#Kunena .klist-actions-info a {
	color: #009933;
}

#Kunena .klist-pages {
	border-left-color: #BFC3C6;
	color: #666666;
	font-family: Arial, Microsoft Yahei, sans-serif;
}

#Kunena .klist-times {
	border-left-color: #BFC3C6;
	color: #666666;
}
#Kunena .klist-actions-info-all {
	color: #999999;
}

#Kunena .klist-actions-forum {
	border-left-color: #BFC3C6;
}

#Kunena .klist-pages-all {
	border-left-color: #BFC3C6;
	color: #666666;
	font-family: Arial, Microsoft Yahei, sans-serif;
}

#Kunena .klist-times-all {
	border-left-color: #BFC3C6;
	color: #666666;
}

#Kunena .klist-jump-all {
	border-left-color: #BFC3C6;
	color: #666666;
}
#Kunena .klist-top {
	background-color: #FFFFFF;
	border-color: #BFC3C6;
}

#Kunena .klist-bottom {
	background-color:#FFFFFF;
	border-color:#BFC3C6;
}
#Kunena .klist-markallcatsread {
	border-color: #BFC3C6;
	background-color: #FFFFFF;
}
#Kunena .klist-categories {
	border-left-color: #BFC3C6;
	color: #666666;
}

/*---------- Pagination ------------- */

#Kunena .kpagination a {
	border-color:#5388B4;
	background-color: #ffffff !important;
}
#Kunena .kpagination .active {
	border-color:#5388B4;
	background-color:#5388B4;
	color:#FFFFFF;
}
#Kunena .kpagination a:link,
#Kunena .kpagination a:visited {
	color:#5388B4;
}
#Kunena .kpagination a:hover{
	border-color:#5388B4;
	color: #ffffff;
	background-color: #609FBF;
}
#Kunena div.ktopic-title-cover ul.kpagination li.page {
	color:#999;
} 
#Kunena div.ktopic-title-cover ul.kpagination a {
	border-color:#bcbcbc;
	background-color: #ffffff;
}
#Kunena div.ktopic-title-cover ul.kpagination a:hover{
	border-color:#5388B4;
	color: #ffffff;
	background-color: #609FBF;
}
#Kunena span.ktopic-views {
	color:#999999;
}

#Kunena span.ktopic-views-number {
	color: #999999;
}

/* HEADER
----------------------------------------------------------------------------------------------- */

#Kunena td.kprofileboxcnt ul.kprofilebox-welcome li input.kbutton {
	background-color: #fff;
}
#Kunena td.kprofileboxcnt ul.kprofilebox-welcome li input.kbutton:hover {
	background-color: #609FBF;
}
#Kunena div#kforum-head {
	border-left-color: #BFC3C6;
	border-right-color: #BFC3C6;
	border-bottom-color: #BFC3C6;
}
#Kunena div#kmoderatorslist div.kbody {
	border-color:#CCCCCC;
	background-color: #FFFFFF;
}

/* SEARCH
----------------------------------------------------------------------------------------------- */
#Kunena fieldset {
	background-color: #fff;
	border-color:#CCCCCC;
}
#Kunena div#ksearchresult div.kresult-title {
	border-bottom-color: #DDDDDD;
}
#Kunena div#ksearchresult div.resultcat {
	border-top-color: #BFC3C6;
}

/* PROFILEBOX AND LOGINBOX
----------------------------------------------------------------------------------------------- */

#Kunena .kprofilebox-left {
	border-right-color: #BFC3C6;
	background-color: #EEEEEE;
}

#Kunena .kprofilebox-right {
	border-left-color: #BFC3C6;
}
#Kunena div.kpbox {
	border-bottom-color: #BFC3C6;
}

/* CATEGORY LIST
----------------------------------------------------------------------------------------------- */

#Kunena table.kblocktable {
	border-color: #BFC3C6;
}

#Kunena h1,
#Kunena h2 {
	color: #FFFFFF;
}
#Kunena h2 a {
	color: #FFFFFF !important;
}
#Kunena h1 a:link,
#Kunena h1 a:active,
#Kunena h1 a:visited {
	color: #FFFFFF;
}
#Kunena h2 span.kheadbtn a {
	border-color: #FFF;
	background-color: #609FBF;
}
#Kunena h2 span.kheadbtn:hover a {
	border-color: #FFF;
}
#Kunena .ktitle,
#Kunena a.ktitle {
	color: #FFFFFF;
}

#Kunena .ktitle a {
	font-family: Arial, Microsoft Yahei, sans-serif;
	color: #FFFFFF;
}

#Kunena div.kthead-title a {
	font-family: Lucida Grande, Lucida, Arial, Microsoft Yahei, sans-serif;
}
#Kunena div.kthead-moderators  {
	color: #666;
}

#Kunena div.kthead-child {
	border-top-color: #DDD5BF;
}

#Kunena table.kcc-table tr td {
	border-color: #FFFFFF;
}

#Kunena div.kcc-childcat-title {
	color: #666666;
}

#Kunena span.kchildcount {
	color: #999999;
}

/* SHOW CATEGORY 
----------------------------------------------------------------------------------------------- */

#Kunena img.catavatar {
	border-color: #BFC3C6;
}

#Kunena .kcontenttablespacer {
	border-bottom-color: #BFC3C6;
}

#Kunena .krow1-stickymsg {
	background-color: #FFFFCC;
}

#Kunena .krow2-stickymsg {
	background-color: #FFFFCC;
}

/* VIEW PAGE
-------------------------------------------------------------------- */

#Kunena div.kmsg-header {
	border-bottom-color:#D9D9D9;
	background-color: #5388B4;
	color: #FFFFFF;
}
#Kunena div.kmsg-header h2 {
	background-color: #737373;
}

#Kunena .kpost-profile span.kavatar img,
#Kunena .kprofilebox .kavatar {
	border-color: #BFC3C6;
}

#Kunena span.kmsgdate {
	font-family: Arial, Microsoft Yahei, sans-serif;
	color: #FFFFFF;
}

#Kunena div.kmsgattach {
	background-color:#F8F7EF;
	border-color:#BFC3C6;
}
#Kunena div.kmsgtext pre,
#Kunena div.kmsgtext code {
	border-left-color: #F4A94F;
	border-right-color: #BFC3C6;
	border-top-color: #BFC3C6;
	border-bottom-color: #BFC3C6;
	font-family: "Courier News", Courier, monospace;
}

#Kunena table.kmsg th a {
	color: #FFFFFF;
}

#Kunena div.kmessage-editmarkup-cover {
	border-bottom-color: #BFC3C6;
}

#Kunena span.kmessage-editmarkup {
	background-color: #F2F1EE no-repeat left center;
	border-left-color: #BFC3C6;
	border-right-color: #BFC3C6;
	border-top-color: #BFC3C6;
	color: #666666;
}

#Kunena span.kmessage-informmarkup {
	background-color: #F2F1EE;
	border-left-color: #BFC3C6;
	border-right-color: #BFC3C6;
	border-top-color: #BFC3C6;
	color: #666666;
}

#Kunena div.kmsgsignature {
	border-top-color:#BFC3C6;
	color:#999999;
}
#Kunena div.kmessage-thankyou{
	border-top-color: #BFC3C6;
}
#Kunena .kreply-form {
	border-color: #BFC3C6;
}

#Kunena .kreply-form .inputbox {
	border-color: #999999;
	background-color: #FFFFFF;
	color: #000000;
}

#Kunena div.kmsgtext-article,
#Kunena div.kmsgtext-quote,
#Kunena div.kmsgtext-hide,
#Kunena div.kmsgtext-confidential {
	border-color: #BFC3C6;
	font-family: Arial, Microsoft Yahei, sans-serif;
	background-color: #F2F1EE;
}

#Kunena div.kmsgtext-article {
	background-color: #FFFFFF;
}

#Kunena div.kmsgtext-hide {
	background-color: #FFFFCC;
}

#Kunena div.kmsgtext-confidential {
	background-color: #FAE0F8;
}

#Kunena div.khide {
	background-color: #F2F1EE;
	border-color: #F2CAB7;
}

#Kunena .kmsgtitle,
#Kunena .kmsgtitle-new {
	color: #FFF;
}
#Kunena div.kmsg-header-top span.kmsg-id-top a,
#Kunena div.kmsg-header-bottom span.kmsg-id-bottom a,
#Kunena div.kmsg-header-left span.kmsg-id-left a,
#Kunena div.kmsg-header-right span.kmsg-id-right a {
	color: #FFF !important;
}

/* AVATAR POSITION
----------------------------------------------------------------------- */


/* right
----------------------------------------*/

#Kunena td.kprofile-right {
	background-color: #EFF0F4;
	border-bottom-color: #BFC3C6;
	border-left-color: #DDDDDD;
}

#Kunena td.kbuttonbar-right {
	border-bottom-color: #BFC3C6;
}

/* left
----------------------------------------*/

#Kunena td.kprofile-left {
	background-color: #EFF0F4;
	border-bottom-color: #BFC3C6;
	border-right-color: #DDDDDD;
}

#Kunena td.kbuttonbar-left {
	border-bottom-color: #BFC3C6;
}

#Kunena .kunapproved td {
	background-color: #DDDDDD !important;
}

#Kunena .kdeleted td {
	background-color: #CCCCCC !important;
}


/* User info on posts
----------------------------------------*/

#Kunena td.kprofile-top {
	background-color: #EFF0F4;
	border-bottom-color: #DDDDDD;
}

#Kunena td.kbuttonbar-top {
	border-bottom-color: #BFC3C6;
}

/* bottom
----------------------------------------*/

#Kunena td.kprofile-bottom {
	background-color: #EFF0F4;
	border-bottom-color: #BFC3C6;
	border-top-color: #DDDDDD;
}

/*
POST PAGE
-------------------------------------------------------------------- */

#Kunena #kpost-message .postinput {
	background-color: #FFFFFF; 
	color: #000000;
	border-color: #BFC3C6;
}

#Kunena #kpost-message .postinput:hover,
#Kunena #kpost-message .postinput:focus	{
	background-color: #FFFFFF;
	color: #000000;
	border-color: #BFC3C6;
}

#Kunena #kpostmessage tr.krow2 td.kcol-ktopicicons td {
	background-color: #FFFFFF;
	color: #000000;
	border-color: #BFC3C6;
}

#Kunena #kpostmessage tr.krow1 .kpostbuttonset td.kposthint	{
	background-color: #FFFFCC;
	border-color: #DDD5BF;
}

#Kunena table#kpostmessage .kposthint .kinputbox {
	background-color: #FFFFCC;
	border-color: #FFFFCC;
}

#Kunena .kpostbuttonset {
	border-color: #BFC3C6
}

#Kunena tr.krow1 .kpostbuttons {
	border-color: #BFC3C6;
}

#Kunena table#kpostmessage .ktxtarea {
	border-color: #BFC3C6;
}
#Kunena div#khistory tr.ksth a {
	color: #ffffff;
}

/* ---- Post Previews ---- */

#Kunena #kbbcode-preview {
	border-color: #BFC3C6;
	background-color: #F2F1EE;
}
#Kunena #kpostmessage tr.krow1 .kpostbuttonset td,
#Kunena #kpostmessage tr.krow2 .kpostbuttonset td	{
	border-bottom-color: #BFC3C6;
}
#Kunena #kpost-result div {
	border-color: #999;
}
#Kunena div#kcolor-palette,
#Kunena div#link,
#Kunena div#image,
#Kunena div#video {
	border-bottom-color: #BFC3C6;
}
	
/* FORUM ICON BUTTONS
----------------------------------------------------------------------------------------------- */

#Kunena .kicon-button {
	color: #FFF;
}
#Kunena .kicon-button span span {
	color: #ffffff;
}
#Kunena form.kform-report input,
#Kunena form.kform-report textarea {
	border-color:#BFC3C6;
}

/*
BBCODE BUTTONS
-------------------------------------------------------------------- */
#Kunena img.kbbcode:hover {
	background-color: #e4e4e4;
}
#Kunena div#kbbcode-size-options span:hover {
	background-color: #e4e4e4;
}
#Kunena #kbbcode-toolbar li a:hover {
	background-color: #e4e4e4;
}
#Kunena ul#kbbcode-toolbar li a#kbbcode-separator1,
#Kunena ul#kbbcode-toolbar li a#kbbcode-separator2,
#Kunena ul#kbbcode-toolbar li a#kbbcode-separator3,
#Kunena ul#kbbcode-toolbar li a#kbbcode-separator4,
#Kunena ul#kbbcode-toolbar li a#kbbcode-separator5,
#Kunena ul#kbbcode-toolbar li a#kbbcode-separator6,
#Kunena ul#kbbcode-toolbar li a#kbbcode-separator7,
#Kunena ul#kbbcode-toolbar li a#kbbcode-separator8 {
	background-color: #eeeeee;
}
#Kunena .kattachment .kbutton {
	color: #000000;
}

/*
Multi file upload for bbcode editor
-------------------------------------------------------------------- */

#Kunena .kfile-input-button,
#Kunena .kfile-input-button:hover,
#Kunena .kfile-input-button:focus {
	background-color: #F2F1EE;
	border-color: #999999;
	color: #000000;
}
#Kunena .kfile-input-button:hover,
#Kunena .kfile-input-button:focus {
	background-color: #609FBF;
	border-color: #5388B4;
	color: #FFFFFF;
}
#Kunena .kattachment-remove,
#Kunena .kattachment-insert {
	background-color: #F2F1EE;
	border-color: #999999;
	color: #000000;
}
#Kunena .kattachment-remove:hover,
#Kunena .kattachment-insert:hover {
	color: #FFFFFF;
}
#Kunena #kbbcode-filelist .file-invalid {
	color: #514721;
}
#Kunena #kbbcode-filelist .file-invalid span {
	background-color: #fff6bf;
}
#Kunena #kbbcode-filelist .file .file-size {
	color: #666;
}
 
#Kunena #kbbcode-filelist .file .file-error {
	color: #8a1f11;
}

/*
POLLS
-------------------------------------------------------------------- */

#kpoll-text-help {
	background-color: #ff8f4f;
}
#kpoll-form-vote fieldset {
	background-color:#FFFFFF;
}

/* PATHWAY 
----------------------------------------------------------------------------------------------- */
#Kunena .kforum-pathway {
	border-left-color: #BFC3C6;
	border-right-color: #BFC3C6;
	color: #000000;
	background-color: #F2F1EE;
}
#Kunena .kforum-pathway-bottom {
	border-color: #BFC3C6;
	color: #000000;
	background-color: #F2F1EE;
}

/*
FORUM HEADER DESCRIPTION
-------------------------------------------------------------------- */
#Kunena .kforum-headerdesc {
	border-color: #BFC3C6;
	color: #000000;
	background-color: #FFF;
}

/*
HELP, RULES, UPLOAD AVATAR, ANNOUNCEMENT
-------------------------------------------------------------------- */
#Kunena td.kuadesc,
#Kunena td.kcreditsdesc	{
	/*border-color: #BFC3C6;*/
	background-color: #FFFFFF;
	color: #000000;
}
#Kunena .kcredits-intro {
	border-color: #BFC3C6;
}
#Kunena .kcredits-more {
	background-color: #F2F1EE;
	border-color: #BFC3C6;
}

#Kunena .kcredits-language {
	border-color: #BFC3C6;
}
#Kunena tr.userlist th a {
	color: #FFFFFF;
}

/* 		WHO IS ONLINE
------------------------------------------------------------------- */

#Kunena .kwholegend {
	border-top-color: #CCCCCC;
}

#Kunena .kwhoonline {
	border-bottom-color: #CCCCCC;
}

/*     MODERATOR PAGE
-------------------------------------------------------------------- */

#Kunena div#kmod-container {
	/*border-color: #BFC3C6;*/ 
}
#Kunena div.kmoderate-message {
	border-color:#CCCCCC;
}
}
/*       PROFILE
-------------------------------------------------------------------- */

#Kunena div.kavatar-lg { 
	background-color: #FFF; 
	border-color: #999999; 
}
#Kunena div#kprofile-stats ul li span.konline-status-yes {
	color: #fff;
}
#Kunena div#kprofile-stats ul li span.konline-status-no {
	color:#fff;
}	
#Kunena div.clrline {
	border-top-color: #BFC3C6; 
}
#Kunena div.kprofile-rightcol1 h4 { color: #333333;}

/* Tabs
----------------------------------*/

#Kunena dl.tabs dt {
	border-left-color: #BFC3C6;
	border-right-color: #BFC3C6;
	border-top-color: #BFC3C6;
	background-color: #f0f0f0;
	color: #666;
}
#Kunena dl.tabs dt.open {
	background-color: #F9F9F9;
	border-bottom-color: #F9F9F9;
	color: #000;
}
#Kunena div.current {
	border-color: #BFC3C6;
}
#Kunena dt.kprofile-modbtn {
	background-color:#999999 !important;
	color: #FFF !important;
}

/* SLIDERS
----------------------------------------------------------------------------------------------- */

#Kunena span#kprofilebox-status {
	color: #fff;
	background-color: #5388B4;
}
#Kunena #kprofilebox-toggle {
	border-color: #fff;
}

/* Mootools Autocompleter CSS classes
----------------------------------------------------------------------------------------------- */
/* DO NOT ADD #Kunena into these rules! */
ul.autocompleter-choices {
	border-color:			#7c7c7c;
	border-left-color:		#c3c3c3;
	border-right-color:		#c3c3c3;
	border-bottom-color:	#ddd;
	background-color:		#fff;
	font-family:			Verdana, Geneva, Arial, Microsoft Yahei, sans-serif;
	background-color:		#fff;
}
ul.autocompleter-choices li.kautocompleter-selected {
	background-color:		#444;
	color:					#fff;
}
ul.autocompleter-choices li.kautocompleter-selected span.kautocompleter-queried {
	color:					#9FCFFF;
}

/* CSS suffix support for category specific styling (Leave this section at the bottom)
----------------------------------------------------------------------------------------------- */

/* -red category suffix
------------------------------------------------------ */

#Kunena .kforum-headerdesc-red {
	color: #000000;
	background-color: #FFDDDD;
}
#Kunena tr.krow1-red td {
	background-color: #FFDDDD;
}
#Kunena tr.krow2-red td {
	background-color: #FFCFCF;
}

/* -green category suffix
----------------------------------------------------- */

#Kunena .kforum-headerdesc-green {
	background-color: #d2f8db;
}
#Kunena tr.krow1-green td {
	background-color: #d2f8db;
}
#Kunena tr.krow2-green td {
	background-color: #bfe5c7;
}

/* -yellow category suffix
------------------------------------------------------ */

#Kunena .kforum-headerdesc-yellow {
	color: #000000;
	background-color: #FFFFCC;
}
#Kunena tr.krow1-yellow td {
	background-color: #FFFFCC;
}
#Kunena tr.krow2-yellow td {
	background-color: #FFFFAA;
}

/* -blue category suffix
------------------------------------------------------- */

#Kunena .kforum-headerdesc-blue {
	color: #000000;
	background-color: #c3f0ff;
}
#Kunena tr.krow1-blue td {
	background-color: #c3f0ff;
}
#Kunena tr.krow2-blue td {
	background-color: #b1e3ff;
}

/* -grey category suffix
------------------------------------------------------ */

#Kunena .kforum-headerdesc-grey {
	color: #000000;
	background-color: #e5e5e5;
}
#Kunena tr.krow1-grey td {
	background-color: #e5e5e5;
}
#Kunena tr.krow2-grey td {
	background-color: #d5d5d5;
}

/* -pink category suffix
---------------------------------------------------- */

#Kunena .kforum-headerdesc-pink {
	color: #000000;
	background-color: #ffddff;
}
#Kunena tr.krow1-pink td {
	background-color: #ffddff;
}
#Kunena tr.krow2-pink td {
	background-color: #ffd0ff;
}

/* for form-validation
------------------------------------------------------ */
	
#Kunena #kpost-message .invalid { 
	border-color: red !important;
	background-color: #FFDDDD !important;
}

/* SHOW ICONS 
----------------------------------------------------------------------------------------------- */

.kgooglemap {
	background-color:#E5E3DF;
}

/* Fix Atomic Joomla 1.6 template (breaks topic coloration) */
/*#Kunena tbody tr:nth-child(2n).krow2 td, 
#Kunena tbody tr.even.krow2 td {
	background-color: #FFF !important;
}*/

/* --------------------------------------------------------------- */