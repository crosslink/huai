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

/**
* @version $Id$
* Kunena Component
* @package Kunena
*
* @Copyright (C) 2008 - 2011 Kunena Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @link http://www.kunena.org
*
* Based on FireBoard Component
* @Copyright (C) 2006 - 2007 Best Of Joomla All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @link http://www.bestofjoomla.com
* 
**/ 

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
}

#Kunena td,
#Kunena table,
#Kunena th,
#Kunena div,
#Kunena p,
#Kunena span {
	font-size: 1em;
}
#Kunena sup {
	vertical-align: super;
}
#Kunena sub {
	vertical-align: sub;
}
#Kunena ul li {
	background: none;
	margin: 0;
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
	background: #5388B4 !important;
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
#Kunena .ktoggler a:hover {
	color:#ff0000;
	background: url("../../default/images/expand.gif") no-repeat scroll 0 0 transparent;
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

#Kunena img.klist-avatar {
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
	width: 100%;
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
	padding:0;
	margin: 4px;
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
	display:block;
	padding:3px 5px;
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

#Kunena td.kprofileboxcnt ul.kprofilebox-welcome li input.kbutton {
	margin: 0;
}
#Kunena td.kprofileboxcnt ul.kprofilebox-welcome li input.kbutton:hover {
}
#Kunena .kpbox {
	margin: 0!important;
	padding:0;
}
#Kunena div#kforum-head {
	padding: 5px 10px;
	vertical-align:middle;
	border-left: 1px solid;
	border-right: 1px solid;
	border-bottom: 1px solid;
}
#Kunena table#kforumsearch input.kbutton {
	margin: 10px;
}
#Kunena div#kmoderatorslist div.kbody {
	border:1px solid;
	height:25px;
	line-height:25px;
	margin:-6px 0 0;
	padding:5px;
}
#Kunena div.kmoderatorslist-jump form#jumpto  {
	margin:5px;
}
#Kunena table.kblock .kcol-search-subject {
	width: 70%;
}
#Kunena table.kblock .kcol-search-author {
	width: 10%;
}
#Kunena table.kblock .kcol-search-date {
	width: 20%;
}

/* SEARCH
----------------------------------------------------------------------------------------------- */
#Kunena fieldset {
	border:1px solid;
	padding:15px;
	margin-bottom: 15px;
}

#Kunena fieldset legend {
	font-size: 1.182em;
	padding-left: 5px;
	padding-right: 5px;
	margin: 0 0 0 -5px;
	font-weight: bold;
}

#Kunena select#catids option{
	padding-left: 5px;
}

#Kunena label.searchlabel {
 	display:block;
 	margin-bottom: 5px;
	margin-right: 100px;
}

#Kunena input#keywords,
#Kunena input#username {
	/*width:250px;*/
	margin-right: 10px;
}

#Kunena select#catids {
	float:left;
	margin-bottom: 20px;
	
}
#Kunena label#childforums-lbl{
	float:left;
	clear:left;
}
#Kunena fieldset#search-posts-date select,
#Kunena fieldset#search-posts-sort select {
	margin-right: 10px;
}
#Kunena fieldset#search-posts-start select {
	margin-left: 10px;
}
#Kunena div.ksearchresult-desc {
	padding: 5px;
}
#Kunena div#ksearchresult div.resultmsg {
	padding: 15px 0;
	clear:left;
}
#Kunena div#ksearchresult span.kmsgtitle a {
	font-weight: bold;
}
#Kunena div#ksearchresult span.kmsgdate {
	float: left;
}
#Kunena div#ksearchresult div.kresult-title {
	border-bottom: 1px solid;
	overflow:hidden;
	padding-bottom:5px;
}
#Kunena div#ksearchresult td.resultmsg {
	padding: 0 10px 10px;
}
#Kunena div#ksearchresult div.resultcat {
	padding: 5px 0 0 0;
	border-top: 1px dotted;
}
#Kunena div.kadvsearch td.kcol-first,
#Kunena div.kadvsearch td.kcol-mid {
	width: 50%;
	vertical-align: top;
}

/* PROFILEBOX AND LOGINBOX
----------------------------------------------------------------------------------------------- */

#Kunena ul.kprofilebox-link {
	float:right;
}

#Kunena ul.kprofilebox-link li {
	background: url("../../default/images/icons/arrow.png") no-repeat left !important;
	padding-left: 12px;
	display: inline;
	padding-right:10px;

}

#Kunena .kprofilebox-left {
	width: 5%;
	padding: 8px;
	border-right: 1px solid;
	vertical-align: middle;
}

#Kunena .kprofilebox-right {
	border-left: 1px solid;
	padding: 8px;
}

#Kunena .klink-block {
	padding-top: 5px;
}
#Kunena div.kpbox {
	border-bottom: 1px solid;
}

/* CATEGORY LIST
----------------------------------------------------------------------------------------------- */
#Kunena td.kmycount,
#Kunena td.kcol-kcattopics,
#Kunena td.kcol-kcatreplies,
#Kunena td.kcol-ktopicicon,
#Kunena td.kcol-ktopicviews {
	white-space:nowrap;
	text-align:center;
	width: 1%;
	vertical-align: middle;
}
.kcol-ktopicicon img {
	border: 0 none;
}
#Kunena td.kcol-kcatlastpost {
	width: 25%;
	text-align:left;
	vertical-align: middle;
}
#Kunena td.kcol-knoposts {
	width: 25%;
	text-align:center;
	vertical-align: middle;
}
#Kunena td.kcol-category-icon {
	width: 1%;
}
#Kunena #kblock4,
#Kunena #kblock1,
#Kunena .k-bt-cvr1 {
	margin-top: 5px; 
}

#Kunena table.kblocktable {
	border-style: solid;
	border-width: 0px 0px 0px 0px;
	text-align: left;
}

#Kunena h1,
#Kunena h2 {
	text-align: left;
	display: block;
	width:100%;
	line-height: 1.5em;
	font-size:1.333em;
	padding-top: 2px;
	min-height: 1.6em;
	margin-top: 0px;
	margin-bottom: 0px;
	font-weight:bold;
	text-transform: none;
}
#Kunena h2 a {
	font-weight: bold;
}
#Kunena h1 a:hover,
#Kunena h2 a:hover {
	text-decoration: underline;
}

#Kunena h1 a:link,
#Kunena h1 a:active,
#Kunena h1 a:visited {
}

#Kunena h2 span.kright {
	float: right;
	margin: 0 10px;
}
#Kunena h2 span.kheadbtn {
	margin: 0 !important;
}
#Kunena h2 span.kheadbtn a {
	font-size: 11px;
	line-height: 23px;
	border: 1px solid;
	padding-top: 1px; 
	padding-bottom: 3px; 
	padding-left: 3px; 
	padding-right: 3px; 

}
#Kunena h2 span.kheadbtn:hover a {
	text-decoration: none;
	border: 1px solid;
}
#Kunena div.ktitle-desc {
	margin-top:-3px;
	padding:0 0 6px;
}
#Kunena .kcheckbox {
	float:right;
	margin-right: -14px;
	width: 20px;
}

#Kunena div.kfavorite {
	background: url("../../default/images/icons/favoritestar.png") no-repeat left top;
	height: 18px;
	width: 18px;
	display: inline-block;
	margin:-25px 4px 0;
	float: right;
}

#Kunena .ktitle,
#Kunena a.ktitle {
	font-weight: bold;
	display: block;
	text-decoration: none;
	float:left;
}

#Kunena .ktitle a {
	font-weight: bold;
	text-decoration: none;
}

#Kunena div.kthead-title a {
	font-size: .917em;
	display: inline-block;
	float: left;
	padding-bottom: 0;
	margin-bottom: 3px;
	font-weight: bold;
}
#Kunena div.kthead-desc,
#Kunena div.kthead-moderators  {
	clear: left;
	line-height: 1.2em;
}

#Kunena div.kthead-moderators  {
	margin-top: 5px;
	font-size: .833em;
}

#Kunena div.kthead-desc a {
	font-weight:bold;
}

#Kunena div.kthead-desc a:hover {
	text-decoration:underline;
}

#Kunena div.kthead-child {
	clear: left;
	border-top: 1px dotted;
	margin-top: 4px;
}

#Kunena table.kcc-table tr td {
	border: 0px solid;
}

#Kunena div.kcc-childcat-title {
	width: 100%;
	display: inline-block;
	vertical-align: top;
	padding-top: 4px;
	line-height: 2em;
	text-transform: uppercase;
	font-size: .833em;
}

#Kunena div.kcc-table {
	display: inline;
}

#Kunena span.kchildcount {
	margin-left: 2px;
	margin-right: 6px;
	display: inline;
	font-size: 0.833em;
	line-height: 17px;
}

#Kunena div.klatest-subject,
#Kunena div.klatest-subject-by {
	margin-left: 5px;
}

#Kunena div.kcc-subcat {
	float: left;
	display: inline-block;
	vertical-align: top;
	padding-top: 2px;
}

#Kunena div.kcc-subcat a {
	font-size: .917em;
	vertical-align: bottom;
}

/* SHOW CATEGORY 
----------------------------------------------------------------------------------------------- */

#Kunena img.stickyicon,
#Kunena img.attachicon {
	float: right;
	border: 0;
	margin: 2px;
}

#Kunena img.catavatar {
	width: 20px;
	height: 20px;
	margin-left: 4px;
	border: 1px solid;
}

#Kunena .kcontenttablespacer {
	border-left: 0px;
	border-right: 0px;
	border-bottom: 1px solid;
	line-height:0.5em;
}

#Kunena .krow1-stickymsg {
}

#Kunena .krow2-stickymsg {
}

/* VIEW PAGE
-------------------------------------------------------------------- */

#Kunena div.kmsg-header {
	border-bottom:2px solid;
	padding:0;
}
#Kunena div.kmsg-header h2 {
	font-size:.917em;
	padding:3px 0;
	margin-bottom: 0;
}
#Kunena div.kmsg-header-top span.kmsgdate-top,
#Kunena div.kmsg-header-bottom span.kmsgdate-bottom,
#Kunena div.kmsg-header-right span.kmsgdate-right,
#Kunena div.kmsg-header-left span.kmsgdate-left {
	width: 180px; 
	text-align: center;
	line-height:1.8em;
	padding-left: 10px;
}
#Kunena div.kmsg-header-left span.kmsgdate-left {
	float: none;
	padding: 0;
	padding-bottom: 5px;
}
#Kunena div.kmsg-header-top span.kmsg-title-top,
#Kunena div.kmsg-header-bottom span.kmsg-title-bottom,
#Kunena div.kmsg-header-left span.kmsg-title-left,
#Kunena div.kmsg-header-right span.kmsg-title-right {
	/*padding-left:15px;*/
	margin-left:5px;
}
#Kunena div.kmsg-header-top span.kmsg-id-top,
#Kunena div.kmsg-header-bottom span.kmsg-id-bottom,
#Kunena div.kmsg-header-left span.kmsg-id-left,
#Kunena div.kmsg-header-right span.kmsg-id-right {
	float: right;
	margin:0 10px 0 0;
	padding: 0
}
	
#Kunena span.kpost-thankyou {
	float: right;
	margin-right: 15px;
	font-size:0.917em;
}
#Kunena div.kpost-thankyou {
	margin-top:4px;
}

#Kunena span.kmsgusertype {
	font-weight: normal;
	text-decoration: none;
	text-decoration: none;
	font-style: italic;
}

#Kunena span.kavatar img {
	border: 1px solid;
	padding: 1px;
	margin: 5px;
	max-width: 100px;
	max-height: 150px;
}

#Kunena span.kmsgtitle,
#Kunena span.kmsgtitle-new {
	font-weight: bold;
	text-decoration: none;
	background: url("../../default/images/msgtitleicon.gif") no-repeat left center;
	padding-left: 25px;
	line-height: 22px;
	font-size: 1.333em;
}

#Kunena span.kmsgtitle-new {
	background: url("../../default/images/msgtitlenew.gif") no-repeat left center;
}

#Kunena table.kmsg th.kmsg-date {
	vertical-align: middle !important;
}
#Kunena th.kmsg-date span.ktopbottom,
#Kunena th.kmsg-date span.kheader-right {
	float: left;
	margin:2px 25px;
}

#Kunena span.kmsgdate {
	font-weight: normal;
	text-decoration: none;
	padding-left: 5px;
	/*font-size: .833em;*/
	white-space: nowrap;
	/*float: left;*/
}

#Kunena div.kmsgbody {
	display: table;
	table-layout: fixed;
	width: 100%;
	padding: 10px 0 0 0;
	margin-top: 5px;
	min-height: 180px;
}
#Kunena div.kmsgbody div.kmsgtext {
	overflow: auto;
	word-wrap:break-word;
}
#Kunena td.kmessage-right div.kmsgbody,
#Kunena td.kmessage-left div.kmsgbody,
#Kunena td.kmessage-top div.kmsgbody,
#Kunena td.kmessage-bottom div.kmsgbody {
	width: 97%;
}
#Kunena div.kmsgbody div.kmsgtext {
	overflow: auto;
	word-wrap:break-word;
}
#Kunena div.kmsgbody div.kmsgtext img {
	max-width:100%;
	max-height: 800px;
}
#Kunena div.kmsgbody div.kmsgtext ul > li {
	list-style-type:disc;
}
#Kunena div.kmsgattach {
	overflow: hidden;
	padding: 8px;
	margin-top: 8px;
	background:none;
	border:1px dotted;
	display:block;
}
#Kunena ul.kfile-attach,
#Kunena ul.kfile-attach-editing {
	margin:0 0 8px 0;
	padding:0;
}
#Kunena ul.kfile-attach li {
	list-style-type: none;
	margin-top: 10px;
	padding-left: 30px;
	background:url("../../default/images/icons/attachment.png") no-repeat;
	height: 32px;
	line-height: 32px;
	width: auto;
	float: left;
}
#Kunena ul.kfile-attach li span {
	padding-left: 10px;
	vertical-align:top;
	font-size: .833em;
}
#Kunena ul.kfile-attach-editing li span {
	vertical-align:top;
	padding-left: 2px;
}
#Kunena ul.kfile-attach-editing li {
	list-style-type: none;
	margin-top: 10px;
	line-height: 32px;	
}
#Kunena ul.kfile-attach li a img,
#Kunena ul.kfile-attach-editing li a img {
	max-width: 32px;
	max-height: 32px;
	margin-left: 10px;
}
#Kunena span.kmsgtext-xs {
	font-size: 0.5em;
}

#Kunena span.kmsgtext-s {
	font-size: 0.75em;
}

#Kunena span.kmsgtext-m {
	font-size: 1em;
}

#Kunena span.kmsgtext-l {
	font-size: 1.25em;
}

#Kunena span.kmsgtext-xl {
	font-size: 1.50em;
}

#Kunena span.kmsgtext-xxl {
	font-size: 2em;
}

#Kunena div.kmsgtext pre,
#Kunena div.kmsgtext code {
	border-left: 5px solid;
	border-right: 1px solid;
	border-top: 1px solid;
	border-bottom: 1px solid;
	font-weight: normal;
	line-height: 1.5;
	margin: 3px 0 10px 0;
	padding: 10px 15px;	
	overflow: auto;
	width: auto;
	word-wrap:normal;
	max-height: 25em;
}

#Kunena table.kmsg th a {
	float: right;
}

#Kunena div.kmessage-editmarkup-cover {
	padding-top: 5px;
	text-align: right;
	border-bottom: 1px dotted;
}

#Kunena span.kmessage-editmarkup {
	background: no-repeat left center;
	height: 16px;
	border-left: 1px dotted;
	border-right: 1px dotted;
	border-top: 1px dotted;
	padding: 2px 5px 2px 5px;
	margin-left: 3px;
	font-size: .75em;
}

#Kunena span.kmessage-informmarkup {
	height: 16px;
	border-left: 1px dotted;
	border-right: 1px dotted;
	border-top: 1px dotted;
	padding: 2px 5px 2px 5px;
	margin-left: 3px;
	font-size: .75em;
}

#Kunena div.kmsgsignature {
	border-top:1px dotted;
	font-size: .833em;
	margin:15px 0;
	padding:5px 0;
	text-align:left;
}
#Kunena div.kmsgsignature img {
	max-width:100%;
	max-height: 100px;
}

#Kunena div.kmessage-buttons-cover {
	float: right;
}

#Kunena div.kmessage-buttons-row {
	text-align: left;
	height: 15px;
	line-height: 15px;
	margin: 3px 0px;
	line-height: 14px;
	white-space: nowrap;
	font-size: .917em;
}
#Kunena div.kmessage-thankyou{
	border-top: 1px dotted;
	clear: both;
}
#Kunena .kreply-form {
	border: 1px solid;
	padding: 0.5em;
}

#Kunena .kreply-form .inputbox {
	border: 1px solid;
	margin: 2px 0px;
}

#Kunena div.kmsgtext-article,
#Kunena div.kmsgtext-quote,
#Kunena div.kmsgtext-hide,
#Kunena div.kmsgtext-confidential {
	display: block;
	border: 1px dotted;
	margin: 5px 0pt;
	padding: 5px;
	font-style: italic;
}

#Kunena div.kmsgtext-article {
}

#Kunena div.kmsgtext-hide {
}

#Kunena div.kmsgtext-confidential {
}

#Kunena div.khide {
	background: url("../../default/images/bullet-tips.gif") no-repeat scroll 5px center;
	border: 1px dotted;
	font-size: 1.3em;
	padding: 10px 10px 10px 25px;
}

/* AVATAR POSITION
----------------------------------------------------------------------- */

#Kunena div.kmsgtitle {
	/*border-bottom:1px solid;
	padding-bottom: 5px;*/
}

/* right
----------------------------------------*/

#Kunena td.kprofile-right {
	width: 170px;
	min-width: 170px;
	border-bottom: 1px solid;
	border-left: 1px solid;
	vertical-align:top;
}

#Kunena td.kmessage-right {
	width: 100%;
	overflow: hidden;
	padding: 10px 10px 0px 10px;
	vertical-align: top;
}

#Kunena td.kbuttonbar-right {
	vertical-align:bottom;
	width: 100%;
	height: 1em;
	margin: 3px;
	border-bottom: 1px solid;
	padding: 3px 10px;
}

/* left
----------------------------------------*/

#Kunena td.kprofile-left {
	vertical-align: top;
	width: 170px;
	min-width: 170px;
	border-bottom: 1px solid;
	border-right: 1px solid;
}

#Kunena td.kmessage-left {
	overflow: hidden;
	width: 100%;
	padding: 10px 10px 0px 10px;
	vertical-align: top !important;
}

#Kunena td.kbuttonbar-left {
	vertical-align:bottom;
	width: 100%;
	height: 1em;
	margin: 3px;
	border-bottom: 1px solid;
	padding: 3px 10px;
}

#Kunena .kunapproved td {
}

#Kunena .kdeleted td {
}

#Kunena div.kprofile {
	text-align: center;
	padding: 5px;
}


/* User info on posts
----------------------------------------*/

/* Left and right layouts */

#Kunena ul.kpost-profile li {
	padding: 0px;
}

#Kunena ul.kpost-profile {
	margin:8px 0;
	padding: 0;
	text-align:center;
	line-height: 1.5em;
}

#Kunena ul.kpost-profile li {
	list-style-type: none;
	display:block;
	padding-bottom: 1px;
	text-align:center !important;
}

#Kunena ul.kpost-profile li.kpost-username {font-size: 1.333em;}
#Kunena ul.kpost-profile li.kpost-usertype {}
#Kunena ul.kpost-profile li.kpost-avatar{}
#Kunena ul.kpost-profile li.kpost-userrank{}
#Kunena ul.kpost-profile li.kpost-userrank-img {}
#Kunena ul.kpost-profile li.kpost-userrank-img img{vertical-align: text-top;}
#Kunena ul.kpost-profile li.kpost-online-img{}
#Kunena ul.kpost-profile li.kpost-online-img img {vertical-align: text-top;}
#Kunena ul.kpost-profile li.kpost-karma {}

#Kunena li.kpost-karma span.kmsgkarma {
}

#Kunena span.kkarma-minus {
	background: url("../../default/media/iconsets/profile/default/default.png") no-repeat 0px -294px;
	height: 14px;
	width: 14px;
	display: inline-block;
	margin: -2px 0;
}

#Kunena span.kkarma-plus {
	background: url("../../default/media/iconsets/profile/default/default.png") no-repeat 0px -313px;
	height: 14px;
	width: 14px;
	display: inline-block;
	margin: -2px 0;
}

#Kunena li.kpost-userposts{
	margin : 0px;	
}
#Kunena ul.kpost-profile li.kpost-smallicons{
	margin: 0px auto;
	width: 90%;
}
#Kunena ul.kpost-profile li.kpost-personal{
	text-align: center;
	font-style:italic;
}
#Kunena span.kpost-online-status-yes {
	display:inline-block; 
	background: url("../../default/images/icons/online.gif") no-repeat; 
	height: 15px; 
	width: 74px;
	vertical-align: text-top;
}
#Kunena span.kpost-online-status-no {
	display:inline-block;
	background: url("../../default/images/icons/offline.gif") no-repeat; 
	height: 15px; 
	width: 74px;
	vertical-align: text-top;
}

#Kunena li.kpost-online-status-top-yes {
	display:block;
	float: left;
	padding-right:5px;
	background: url("../../default/images/icons/online.gif") no-repeat; 
	height: 15px; 
	width: 74px;
}
#Kunena li.kpost-online-status-top-no {	
	display:block;
	float: left;
	padding-right:5px;	
	background: url("../../default/images/icons/offline.gif") no-repeat; 
	height: 15px; 
	width: 74px;
}

/* Top and bottom layouts */
#Kunena ul#kpost-profiletop {
	margin:0;
	padding: 0;
}
#Kunena ul#kpost-profiletop li {
	list-style-type: none;
	display:block;
	padding: 0;
}

#Kunena ul#kpost-profiletop li.kpost-avatar{
	float:left;
	clear:left;
	margin-right: 5px;
}
#Kunena ul#kpost-profiletop li.kpost-userrank{
	padding-right: 5px;
}
#Kunena ul#kpost-profiletop li.kpost-smallicons{
	float:right;
	width: auto;
	padding-top: 5px;
}
#Kunena ul#kpost-profiletop li.kpost-personal{
	text-align: center;
	font-style:italic;
	float:right;
	width: 40%;
	padding-top: 5px;
}

/* top
----------------------------------------*/
#Kunena ul#kpost-profiletop li.kpost-userrank-img {
	display: block;
}

#Kunena td.kprofile-top {
	vertical-align: top;
	border-bottom: 1px solid;
	padding: 5px;
}

#Kunena td.kmessage-top {
	width: 100%;
	padding: 10px 10px 0px 10px;
}

#Kunena td.kbuttonbar-top {
	width: 100%;
	margin: 3px;
	border-bottom: 1px solid;
	padding: 3px 10px;
}

#Kunena div.ktopbottom-avatar {
	float: left;
}

#Kunena div.kprofile-mid {
	padding: 0px 5px;
	display: inline;
	text-align: left;
	vertical-align: middle;
	float:left;
}

#Kunena div.kprofile-right {
	display: inline;
	vertical-align: middle;
	float:right;
	width: 15%;
	text-align:right;
}

#Kunena div.kpersonal {
	padding: 0px 20px;
	display: inline;
	text-align: left;
	vertical-align: middle;
	float:left;
}

/* bottom
----------------------------------------*/

#Kunena td.kprofile-bottom {
	vertical-align: bottom;
	border-bottom: 1px solid;
	border-top: 1px solid;
	padding: 5px;
}

#Kunena td.kmessage-bottom {
	width: 100%;
	overflow: hidden;
	padding: 10px 10px 0px 10px;
}

#Kunena td.kbuttonbar-bottom {
	width: 100%;
	margin: 3px;
	padding: 3px 10px;
}

/*  Stats on main page  */

#Kunena ul#kstatslistleft,
#Kunena ul#kstatslistright	 {
	margin: 0;
	padding: 0;
}

#Kunena ul#kstatslistleft li,
#Kunena ul#kstatslistright li	 {
	list-style-type:none;
	display:block;
	margin-left: 0;
	padding: 1px 0px 1px 0;
	background: none;
	line-height: 1.333em;
}

#Kunena ul#kstatslistright li strong a {
	font-weight:bold;
}

/*
POST PAGE
-------------------------------------------------------------------- */

#Kunena #kpost-message .postinput {
	width: 94%;
	border: 1px solid;
	padding: 3px 5px;
}

#Kunena #kpost-message .postinput:hover,
#Kunena #kpost-message .postinput:focus	{
	width: 94%;
	border: 1px solid;
	padding: 3px 5px;
}

#Kunena #kpostmessage tr.krow2 td.kcol-ktopicicons table	{
	width: 95%;
}

#Kunena #kpostmessage tr.krow2 td.kcol-ktopicicons td {
	border: 1px solid;
	width: 99%;
}

#Kunena #kpostmessage tr.krow1 .kpostbuttonset td.kposthint	{
	border: 1px solid;
	padding: 2px 5px;
}

#Kunena table#kpostmessage .kposthint .kinputbox {
	border: 0px solid;
	width: 99%;
}

#Kunena .kpostbuttonset {
	width: 95%;
	margin: 2px;
	border: 1px solid;
}

#Kunena tr.krow1 .kpostbuttons {
	border: 1px solid;
}

#Kunena table#kpostmessage .ktxtarea {
	overflow: auto;
	/* IMPORTANT: height must be set in px */
	height: 200px;
	border: 1px solid;
}

#Kunena table.kreview-table td.author {
	width: 15%;
	text-align: center;
}

#Kunena td.kcaptcha {
	text-align: left;
	vertical-align:middle;
	height: 35px;
}
#Kunena div#khistory td.kauthor,
#Kunena div#ksearchresult td.kresultauthor {
	text-align:center;
}
#Kunena div#khistory td.khistorymsg {
	text-align:left;
	padding: 10px;
}
#Kunena div#khistory span.khistory-msgdate {
	float:left;
	padding-left: 10px;
}
#Kunena div#khistory tr.ksth a {
	float:right;
	padding-right: 10px;
}

/* ---- Post Previews ---- */

#Kunena textarea#kbbcode-message {
	width: 95%;
	float: left;
}
#Kunena #kbbcode-preview {
	/* IMPORTANT: do not set height - controlled by js */
	border: 1px solid;
	overflow: scroll;
}
#Kunena div.kbbcode-preview-bottom {
	/* IMPORTANT: do not set height - controlled by js */
	float:left;
	clear:left;
	width: 95%;
	margin-top: 10px;
}
#Kunena div.kbbcode-preview-right {
	/* IMPORTANT: do not set height - controlled by js */
	float:right;
	width: 48%;
	margin-right: 10px;
}

#Kunena #kpostmessage tr.krow1 .kpostbuttonset td,
#Kunena #kpostmessage tr.krow2 .kpostbuttonset td	{
	border-bottom: 1px solid;
}

#Kunena #kpost-message td.kcol-first {
	width: 15%;
	text-align: right;
	vertical-align: middle;
}

#Kunena #kpost-result div {
	border: 1px solid;
	font-size: 1em;
}

#Kunena #kpost-buttons {
	padding: 4px;
}

#Kunena #kpost-buttons .kbutton {
	padding: 4px;
	font-weight: bold;
	font-size: 1em;
}

#Kunena div#kcolor-palette,
#Kunena div#link,
#Kunena div#image,
#Kunena div#video {
	border-bottom: 1px solid;
	margin-bottom: 5px;
	padding-bottom: 5px;
}
	
/* FORUM ICON BUTTONS
----------------------------------------------------------------------------------------------- */

#Kunena .kicon-button {
	text-transform: uppercase;
	/* We need to use fixed font size: button does not grow */
	font-size: 11px;
	text-decoration: none;
	cursor: pointer;
	line-height: 145%;
	display: inline-block;
	background-image: url("../../default/media/iconsets/buttons/default/default.png") !important;
	background-repeat: repeat-x;
	border: none;
	margin:0 5px;
}
/*
#Kunena a.kicon-button:hover {
	background-position: 0 -480px !important;
}
*/
#Kunena .kicon-button span {
	background-image: inherit;
	background-repeat: no-repeat;
	display: inline-block;
	margin:0 -5px;
}
#Kunena .kicon-button span span {
	height: 18px;
	display: inline-block;
	margin: 0;
	padding: 0 7px 0 20px;
	background-repeat: no-repeat;
}
#Kunena a.kicon-button span span:hover {
	text-decoration: underline;
}
/* Need the hover states to fix Beez in Joomla 1.6 */
#Kunena .kbuttonuser,
#Kunena .kbuttonuser:hover {
	background-position: 0 -360px;
}
#Kunena .kbuttononline-yes,
#Kunena .kbuttonmod,
#Kunena .kbuttononline-yes:hover,
#Kunena .kbuttonmod:hover{
	background-position: 0 -200px;
}
#Kunena .kbuttononline-no,
#Kunena .kbuttongen,
#Kunena .kbuttoncomm,
#Kunena .kbuttononline-no:hover,
#Kunena .kbuttongen:hover,
#Kunena .kbuttoncomm:hover {
	background-position: 0 -480px;
}
#Kunena .kbuttononline-yes span span,
#Kunena .kbuttonmod span span,
#Kunena .kbuttononline-yes span span:hover,
#Kunena .kbuttonmod span span:hover{
	background-position: right -220px;
}
#Kunena .kbuttonuser span span,
#Kunena .kbuttonuser span span:hover {
	background-position: right -380px;
}
#Kunena .kbuttononline-no span span,
#Kunena .kbuttongen span span,
#Kunena .kbuttoncomm span span,
#Kunena .kbuttononline-no span span:hover,
#Kunena .kbuttongen span span:hover,
#Kunena .kbuttoncomm span span:hover {
	background-position: right -500px;
}
#Kunena .kbuttononline-yes span span,
#Kunena .kbuttononline-no span span {
	padding: 0 7px;
	height: 15px;
}
#Kunena .kbuttononline-yes span.online-yes {background-position: 0 0px;}
#Kunena .kbuttononline-no span.online-no {background-position: 0 -400px;}
#Kunena .kbuttoncomm span.reply {background-position: 0 -460px;}
#Kunena .kbuttoncomm span.quote {background-position: 0 -440px;}
#Kunena .kbuttoncomm span.newtopic {background-position: 0 -420px;}
#Kunena .kbuttonuser span.layout-flat {background-position: 0 -240px}
#Kunena .kbuttonuser span.layout-flat span {padding: 0 7px;}
#Kunena .kbuttonuser span.layout-threaded {background-position: 0 -240px}
#Kunena .kbuttonuser span.layout-threaded span {padding: 0 7px;}
#Kunena .kbuttonuser span.layout-indented {background-position: 0 -240px}
#Kunena .kbuttonuser span.layout-indented span {padding: 0 7px;}
#Kunena .kbuttonuser span.thankyou {background-position: 0 -340px;}
#Kunena .kbuttonuser span.favorite {background-position: 0 -260px;}
#Kunena .kbuttonuser span.subscribe {background-position: 0 -320px;}
#Kunena .kbuttonuser span.markread {background-position: 0 -300px;}
#Kunena .kbuttonuser span.report {background-position: 0 -320px;}
#Kunena .kbuttonmod span.merge {background-position: 0 -100px;}
#Kunena .kbuttonmod span.edit {background-position: 0 -60px;}
#Kunena .kbuttonmod span.delete {background-position: 0 -40px;}
#Kunena .kbuttonmod span.permdelete {background-position: 0 -40px;}
#Kunena .kbuttonmod span.undelete {background-position: 0 -20px;}
#Kunena .kbuttonmod span.move {background-position: 0 -140px;}
#Kunena .kbuttonmod span.sticky {background-position: 0 -180px;}
#Kunena .kbuttonmod span.lock {background-position: 0 -80px;}
#Kunena .kbuttonmod span.split {background-position: 0 -160px;}
#Kunena .kbuttonmod span.approve {background-position: 0 -180px;}
#Kunena .kbuttonmod span.moderate {background-position: 0 -120px;}

/* Goto Up/down buttons */

#Kunena a.kbuttongoto {
}

#Kunena a.kbuttongoto span.top {
	background: url("../../default/images/icons/top_arrow.gif") no-repeat left top;
	height: 18px;
	width: 18px;
	display: block;
}

#Kunena a.kbuttongoto span.bottom {
	background: url("../../default/images/icons/bottom_arrow.gif") no-repeat left top;
	height: 18px;
	width: 18px;
	display: block;
}

#Kunena div#kreport-container {
	/*border:1px solid;*/
	height:1%;
	overflow:auto;
	padding:10px 10px 30px;	
}

#Kunena form.kform-report,
#Kunena form.kform-report label,
#Kunena form.kform-report input,
#Kunena form.kform-report textarea {
	float:left;
	clear:both;
}
#Kunena form.kform-report label {
	margin-top: 15px;
}
#Kunena form.kform-report input,
#Kunena form.kform-report textarea {
	border:1px solid;
}
	
#Kunena div.kreportstatus {
	text-align:center;
	margin: 30px 0;
}

/*
BBCODE BUTTONS
-------------------------------------------------------------------- */
#Kunena img.kbbcode {
	cursor: pointer;
	margin-top: 4px;
	margin-right: 1px;
	padding: 0px;
}

#Kunena img.kbbcode:hover {
	cursor: pointer;
	margin-top: 4px;
	margin-right: 1px;
	padding: 0px;
}

#Kunena .kbbcode-colortable {
	cursor: pointer;
	width: 100%;
	margin-left: auto;
	margin-right: auto;
}

#Kunena div#kbbcode-size-options {
	margin:2px 0 0;
}

#Kunena div#kbbcode-size-options span {
	vertical-align: middle;
	display: inline-block;
	line-height: 24px;
}

#Kunena div#kbbcode-size-options span:hover {
	cursor: pointer;
	padding: 0px;
}

#Kunena table.kpostbuttonset tr td.kpostbuttons select.kslcbox {
	position: relative;
	bottom: 5px;
}

#Kunena #kbbcode-toolbar {
	list-style-position:inside;
	list-style-type:none;
	height:18px;
	margin:2px 0 2px;
	padding:0;
	position:relative;
}

#Kunena #kbbcode-toolbar li {
	float:left;
	list-style-image:none !important;
	list-style-type:none !important;
	margin:0;
	padding:0;
}

#Kunena #kbbcode-toolbar li a {
	background-repeat: no-repeat;
	display:block;
	height:18px;
	width:18px;
	margin-right: 2px;
}

#Kunena #kbbcode-toolbar li a:hover {
	cursor: pointer;
	padding: 0px;
}

#Kunena #kbbcode-toolbar li span {
	display:none;
}

#Kunena ul#kbbcode-toolbar li a#kbbcode-separator1,
#Kunena ul#kbbcode-toolbar li a#kbbcode-separator2,
#Kunena ul#kbbcode-toolbar li a#kbbcode-separator3,
#Kunena ul#kbbcode-toolbar li a#kbbcode-separator4,
#Kunena ul#kbbcode-toolbar li a#kbbcode-separator5,
#Kunena ul#kbbcode-toolbar li a#kbbcode-separator6,
#Kunena ul#kbbcode-toolbar li a#kbbcode-separator7,
#Kunena ul#kbbcode-toolbar li a#kbbcode-separator8 {
	background-position:-400px 0;
	width: 8px;
	cursor: default;
}
#Kunena ul#kbbcode-toolbar li a#kbbcode-bold-button {background-position:0 0;}
#Kunena ul#kbbcode-toolbar li a#kbbcode-italic-button {background-position:-18px 0;}
#Kunena ul#kbbcode-toolbar li a#kbbcode-underline-button {background-position:-36px 0;}
#Kunena ul#kbbcode-toolbar li a#kbbcode-strike-button {background-position:-54px 0;}
#Kunena ul#kbbcode-toolbar li a#kbbcode-sub-button {background-position:-72px 0;}
#Kunena ul#kbbcode-toolbar li a#kbbcode-sup-button {background-position:-90px 0;}
#Kunena ul#kbbcode-toolbar li a#kbbcode-size-button {background-position:-108px 0;}
#Kunena ul#kbbcode-toolbar li a#kbbcode-color-button {background-position:-126px 0;}
#Kunena ul#kbbcode-toolbar li a#kbbcode-spoiler-button {background-position:-144px 0;}
#Kunena ul#kbbcode-toolbar li a#kbbcode-hide-button {background-position:-162px 0;}
#Kunena ul#kbbcode-toolbar li a#kbbcode-ulist-button {background-position:-180px 0;}
#Kunena ul#kbbcode-toolbar li a#kbbcode-olist-button {background-position:-198px 0;}
#Kunena ul#kbbcode-toolbar li a#kbbcode-list-button {background-position:-216px 0;}
#Kunena ul#kbbcode-toolbar li a#kbbcode-left-button {background-position:-234px 0;}
#Kunena ul#kbbcode-toolbar li a#kbbcode-center-button {background-position:-252px 0;}
#Kunena ul#kbbcode-toolbar li a#kbbcode-right-button {background-position:-270px 0;}
#Kunena ul#kbbcode-toolbar li a#kbbcode-quote-button {background-position:-288px 0;}
#Kunena ul#kbbcode-toolbar li a#kbbcode-code-button {background-position:-306px 0;}
#Kunena ul#kbbcode-toolbar li a#kbbcode-image-button {background-position:-324px 0;}
#Kunena ul#kbbcode-toolbar li a#kbbcode-link-button {background-position:-342px 0;}
#Kunena ul#kbbcode-toolbar li a#kbbcode-table-button {background-position:0 -18px;}
#Kunena ul#kbbcode-toolbar li a#kbbcode-module-button {background-position:-18px -18px;}
#Kunena ul#kbbcode-toolbar li a#kbbcode-ebay-button {background-position:-360px 0;}
#Kunena ul#kbbcode-toolbar li a#kbbcode-video-button {background-position:-378px 0;}
#Kunena ul#kbbcode-toolbar li a#kbbcode-map-button {background-position:-72px -18px;}
#Kunena ul#kbbcode-toolbar li a#kbbcode-attach-button {background-position:-36px -18px;}
#Kunena ul#kbbcode-toolbar li a#kbbcode-gallery-button {background-position:-54px -18px;}
#Kunena ul#kbbcode-toolbar li a#kbbcode-poll-button {background-position:-90px -18px;}
#Kunena ul#kbbcode-toolbar li a#kbbcode-previewbottom-button {background-position:-252px -18px;}
#Kunena ul#kbbcode-toolbar li a#kbbcode-previewright-button {background-position:-270px -18px;}
#Kunena ul#kbbcode-toolbar li a#kbbcode-help-button {background-position:-396px -18px;}

#Kunena .kspoiler {
	cursor:pointer;
}
#Kunena .kattachment .hasTip {
	display: inline;
}

#Kunena .kattachment .kbutton {
	/* font-size: 1em;  */
}

#Kunena #kattachments {
	line-height:18px;
}

#Kunena #kattachments a {
	background-repeat: no-repeat;
	display:inline-block;
	height:18px;
	width:18px;
	margin-right: 2px;
}

#Kunena #kattachments a {
	background-position:-216px -18px;
}

/* Define default image if not set in admin config */
#Kunena #kbbcode-toolbar li a,
#Kunena #kattachments a { 
	background-image:url("../../default/media/iconsets/editor/default/default.png");
}


/*
Multi file upload for bbcode editor
-------------------------------------------------------------------- */

#kfilename {}

#Kunena .kfile-input-textbox {/* float: left; */ display: inline-block; }

#kupload {}

#Kunena .kfile-hide {
	position: relative; 
	width: 100px; 
	height: 23px; 
	overflow: hidden;
}
#Kunena .kfile-input-button,
#Kunena .kfile-input-button:hover,
#Kunena .kfile-input-button:focus {
	top: 0px;
	background: none;
	font-size: .833em !important;
	border: 1px solid;
	padding: 3px 6px;
	cursor:pointer;
}
#Kunena .kfile-input-button:hover,
#Kunena .kfile-input-button:focus {
	background: none;
	border: 1px solid;
}
#Kunena .kattachment-remove,
#Kunena .kattachment-insert {
	background: none;
	font-size: .917em !important;
	border: 1px solid;
	padding: 3px 6px;
}
#Kunena .kattachment-remove:hover,
#Kunena .kattachment-insert:hover {
	font-size:0.917em !important;
	padding: 3px 6px;
}
#Kunena .kattachment-insert {
	margin-left: 20px;
}
#Kunena .kfile-input {
	font-size: 23px; 
	position: absolute; 
	right: 0px; 
	top: -10px;
	/* CSS3 standard */
	opacity: 0;
	/* For IE */
	filter:alpha(opacity=0);
}
#Kunena #kbbcode-filelist {
	padding: 0;
	list-style: none;
	margin: 0;
}
 
#Kunena #kbbcode-filelist .file-invalid {
	cursor: pointer;
	padding-left: 48px;
	line-height: 24px;
	margin-bottom: 1px;
}
#Kunena #kbbcode-filelist .file-invalid span {
	padding: 1px;
}
 
#Kunena #kbbcode-filelist .file {
	line-height: 2em;
	padding-left: 22px;
}
 
#Kunena #kbbcode-filelist .file span,
#Kunena #kbbcode-filelist .file a {
	padding: 0 4px;
}
 
#Kunena #kbbcode-filelist .file .file-size {
}
 
#Kunena #kbbcode-filelist .file .file-error {
}
 
#Kunena #kbbcode-filelist .file .file-progress {
	width: 125px;
	height: 12px;
	vertical-align: middle;
}


/*
POLLS
-------------------------------------------------------------------- */


label.kpoll-title-lbl {
	display:inline-block;
	margin: 10px 15px 10px 5px;
}
label.kpoll-term-lbl {
	display:inline-block;
	margin: 10px 15px 10px 30px;
}
#kpoll-text-help {
	font-weight: bold;
	padding: 0px 10px;
	margin: 3px;
}
#kpoll-text-help p {
	padding: 5px 10px;
}

#kpoll-form-vote fieldset {
	border: 0 none;
	margin:0;
	padding:0;
}

#kpoll-form-vote legend {
	text-indent: -9999px;
}

#kpoll-form-vote ul {
	margin:0 0 0 20px;
	padding: 0;
}

#kpoll-form-vote ul li {
	list-style-type:none;
	line-height: 30px;
	list-style: none !important;
}
#kpoll-btns {
	margin: 5px 0 20px 20px;
}
#Kunena div.kpolldesc td.kpoll-option {
	text-align: left;
	width: 60%;
	padding: 3px 8px;
}
#Kunena div.kpolldesc td.kpoll-bar {
	text-align: left;
	width: 20%;
}
#Kunena div.kpolldesc td.kpoll-number,
#Kunena div.kpolldesc td.kpoll-percent {
	text-align: center;
	width: 10%;
}
#Kunena #kpoll-button-vote {
	margin: 20px 20px 20px 30px;
}
	
	
/* PATHWAY 
----------------------------------------------------------------------------------------------- */
#Kunena .kforum-pathway {
	padding: 5px;
	line-height: 18px;
	margin: -5px 0 0;
	border-left: 1px solid;
	border-right: 1px solid;
}
#Kunena .kforum-pathway-bottom {
	padding: 3px;
	line-height: 18px;
	margin: -1px 0 5px 0;
	border: 1px solid;
}
#Kunena .kforum-pathway-bottom img {
	vertical-align:text-bottom;
}
#Kunena .path-element-first {
	font-weight: normal;
	height: 18px;
	line-height: 18px;
	background: url("../../default/images/pathway_start.gif") no-repeat left center;
	display: inline;
	padding: 1px 3px 1px 22px;
}

#Kunena .path-element-first a:link,
#Kunena .path-element-first a:visited {
	font-weight: normal;
	text-decoration: none;
	background: none;
}

#Kunena .path-element-last,
#Kunena .path-element-last a:link {
	font-weight: bold;
	text-decoration: none;
	text-indent: 5px;
	display: inline;
}

#Kunena .kforum-pathway .path-element,
#Kunena .kforum-pathway-bottom .path-element	{
	background: url("../../default/images/icons/arrow.png") no-repeat left center;
	padding-left: 12px;
	display: inline;
	font-weight: normal;
	height: 18px;
	line-height: 18px;
	padding-right: 3px;
}

#Kunena .kforum-pathway .path-element-last,
#Kunena .kforum-pathway-bottom .path-element-last {
	height: 18px;
	line-height: 18px;
	background: url("../../default/images/pathway_finallink.gif") no-repeat left center;
	padding: 1px 5px 1px 37px;
}

#Kunena .path-element-users {
	display: inline;
	margin-top: 21px;
}

/*
FORUM HEADER DESCRIPTION
-------------------------------------------------------------------- */
#Kunena .kforum-headerdesc {
	padding: 3px;
	line-height: 18px;
	margin: -1px 0 0 0;
	border: 1px solid;
}
#Kunena .kforum-headerdesc td{
	padding: 8px;
}

/*
HELP, RULES, UPLOAD AVATAR, ANNOUNCEMENT
-------------------------------------------------------------------- */
#Kunena div.kannouncement h2 {
	table-layout:fixed;
	word-wrap:break-word;
}
#Kunena div#kannouncement .kanndesc {
	padding: 5px 10px;
}
#Kunena img.calendar {
	margin: 5px 0 -5px 5px;
}

#Kunena td.kuadesc,
#Kunena td.kcreditsdesc	{
	vertical-align: top;
	padding: 15px;
	/*border: 1px solid;*/
}
#Kunena td.kcreditsdesc div.kfooter {
	text-align:center;
}
#Kunena .kcredits-intro {
	margin:5px;
	padding:15px 30px;
	text-align:left;
	border: 1px solid;
	border-radius: 15px;
	-moz-border-radius: 15px;
	-webkit-border-radius: 15px;
}
#Kunena .kteam {
	margin: 0;
	padding: 0;
}
#Kunena .kteammember {
	list-style-type:circle;
	margin:0 10px;
	padding:0;
	text-align:left;
	background: transparent none;
	border-radius: 15px;
	-moz-border-radius: 15px;
	-webkit-border-radius: 15px;
}
#Kunena .kcredits-more {
	padding: 10px 20px;
	margin: 15px;
	border: 1px solid;
	border-radius: 15px;
	-moz-border-radius: 15px;
	-webkit-border-radius: 15px;
}

#Kunena .kcredits-language {
	padding: 10px 20px;
	border: 1px solid;
	margin: 15px;
	border-radius: 15px;
	-moz-border-radius: 15px;
	-webkit-border-radius: 15px;
}

#Kunena .kstatsicon {
	background: url("../../default/images/icons/stats.png") no-repeat center top;
	width: 32px;
	height: 32px;
}

#Kunena div#searchuser_tbody div.search-user {
	padding:5px 10px;
	float: left;
}
#Kunena div#searchuser_tbody div.userlist-jump {
	float: right;
}
#Kunena tr.userlist th {
	padding: 3px;
	text-align: center;
}
#Kunena tr.userlist th a {
	color: #FFF !important;
}
#Kunena div#userlist_tbody td,
#Kunena table#kuserlist_bottom th {
	padding: 4px 8px;
}
#Kunena div#userlist-tbody td {
	text-align: center;
}
#Kunena table#kuserlist-bottom div {
	text-align: center;
	padding: 3px;
}

/* 		STATISTICS PAGE
------------------------------------------------------------------- */

#Kunena tr.ksth th.kname {
	width: 50%;
	text-align: left;
}
#Kunena tr.ksth th.kbar {
	width: 40%;
}
#Kunena tr.ksth th.knr {
	width: 10%;
}
#Kunena div.kwhoisonline td.kcol-first,
#Kunena div.kgenstats td.kcol-first,
#Kunena div.kfrontstats td.kcol-first {
	width: 1%;
}
#Kunena div.kgenstats th {
	text-align: left !important;
}
#Kunena div.kedituser td.kcol-first,
#Kunena div.keditavatar td.kcol-first,
#Kunena div.keditprofile td.kcol-first,
#Kunena div.keditsettings td.kcol-first {
	width: 120px;
}
#Kunena div.klogin div.kbody,
#Kunena div.kinfomessage div.kbody {
	padding: 15px;
	text-align: center;
}

/* 		WHO IS ONLINE
------------------------------------------------------------------- */

#Kunena .kwhoicon {
	background: url("../../default/images/icons/who_is_online.png") no-repeat center top;
	width: 32px;
	height: 32px;
}
#Kunena khidden-ktitle {}
#Kunena kwho-total {}

#Kunena .kwholegend {
	border-top: 1px dotted;
	width: 100%;
	margin-top: 5px;
	padding-top: 5px;
}

#Kunena .kwhoonline {
	border-bottom: 1px dotted;
	width: 100%;
	padding-bottom: 5px;
}

#Kunena #kwhoispage td.td-3 {
	text-align:left;
}


/*     MODERATOR PAGE
-------------------------------------------------------------------- */

#Kunena div#kmod-container {
	/*border: 1px solid;*/ 
	margin: 0; 
	padding: 10px 10px 30px 10px; 
	overflow:hidden;
	height: 1%;
	clear:left;
}
#Kunena div#kmod-container div {
	padding: 5px 0; 
}
#Kunena div#kmod-leftcol {
	width: 47%; 
	float:left;
	clear:left;
}
#Kunena div#kmod-rightcol {
	width: 47%;
	float:right;
}

#Kunena div.kmoderate-message {
	border:1px solid;
	padding:5px !important;
	margin:5px 0;
	display:inline-block;
	width:98%;
}

#Kunena div.kmoderate-message h4 {
	margin:0;
	padding:0;
}

#Kunena div.kmoderate-message div.kmessage-avatar {
	float:left;
	padding:5px 5px 0 0;
}

#Kunena div.kmoderate-message div.kmessage-msgtext {
	margin-left: 42px;
}

#Kunena td.krowmoderation input.kbutton {
	margin: 0 0 0 5px;;
}

#Kunena table#kaddban td.kcol-first {
	width: 35%;
}
#Kunena table#kaddban td.kcol-mid textarea {
	width: 100%;
	height: 50px;
}
#Kunena table#kaddban td.kcol-mid input {
	width: 100%;	
}
#Kunena table#kforumsearch th {
	padding: 0px;
}

#Kunena td.krowmoderation {
	text-align: right;
}
#Kunena div.banhistory th.kid {
	width:2%;
}
#Kunena div.banhistory th.kbanfrom {
	width:14%;
}
#Kunena div.banhistory th.kbanstart,
#Kunena div.banhistory th.kbanexpire,
#Kunena div.banhistory th.kbancreate {
	width:20%;
}
#Kunena div.banhistory th.kbanmodify {
	width:24%;
}
/*       PROFILE
-------------------------------------------------------------------- */

#Kunena .kicon-profile { 
	background-repeat: no-repeat;
	width: 16px;
	height: 16px;
	display: inline-block;
	vertical-align: text-top;
	margin-right: 3px;
	background-image: url("../../default/media/iconsets/profile/default/default.png");
}
#Kunena span.kicon-profile-website,
#Kunena span.kicon-profile-pm {
	vertical-align: top;
	margin-top: 3px;
}
#Kunena .kicon-profile-aim 				{ background-position: 0 0; } 
#Kunena .kicon-profile-bebo 			{ background-position: 0 -21px; } 
#Kunena .kicon-profile-birthdate 		{ background-position: 0 -42px; } 
#Kunena .kicon-profile-blogspot 		{ background-position: 0 -63px; } 
#Kunena .kicon-profile-delicious 		{ background-position: 0 -84px; } 
#Kunena .kicon-profile-digg 			{ background-position: 0 -105px; } 
#Kunena .kicon-profile-email 			{ background-position: 0 -126px; } 
#Kunena .kicon-profile-facebook 		{ background-position: 0 -147px; } 
#Kunena .kicon-profile-gender-female 	{ background-position: 0 -168px; } 
#Kunena .kicon-profile-flickr 			{ background-position: 0 -189px; } 
#Kunena .kicon-profile-friendfeed 		{ background-position: 0 -210px; } 
#Kunena .kicon-profile-gender-unknown 	{ background-position: 0 -231px; } 
#Kunena .kicon-profile-gtalk 			{ background-position: 0 -252px; } 
#Kunena .kicon-profile-icq 				{ background-position: 0 -273px; } 
#Kunena .kicon-profile-karmaminus 		{ background-position: 0 -294px; } 
#Kunena .kicon-profile-karmaplus 		{ background-position: 0 -313px; } 
#Kunena .kicon-profile-linkedin 		{ background-position: 0 -332px; } 
#Kunena .kicon-profile-location 		{ background-position: 0 -353px; } 
#Kunena .kicon-profile-gender-male		{ background-position: 0 -374px; } 
#Kunena .kicon-profile-msn				{ background-position: 0 -395px; } 
#Kunena .kicon-profile-myspace 			{ background-position: 0 -416px; } 
#Kunena .kicon-profile-pm 				{ background-position: 0 -437px; } 
#Kunena .kicon-profile-remind 			{ background-position: 0 -458px; } 
#Kunena .kicon-profile-skype 			{ background-position: 0 -479px; } 
#Kunena .kicon-profile-twitter 			{ background-position: 0 -500px; } 
#Kunena .kicon-profile-website 			{ background-position: 0 -521px; } 
#Kunena .kicon-profile-yim 				{ background-position: 0 -542px; } 
#Kunena .kicon-profile-aim-off 			{ background-position: 0 -563px; } 
#Kunena .kicon-profile-bebo-off 		{ background-position: 0 -584px; } 
#Kunena .kicon-profile-birthday-off 	{ background-position: 0 -605px; } 
#Kunena .kicon-profile-blogspot-off 	{ background-position: 0 -626px; } 
#Kunena .kicon-profile-delicious-off 	{ background-position: 0 -647px; } 
#Kunena .kicon-profile-digg-off 		{ background-position: 0 -668px; } 
#Kunena .kicon-profile-facebook-off 	{ background-position: 0 -689px; } 
#Kunena .kicon-profile-flickr-off 		{ background-position: 0 -710px; } 
#Kunena .kicon-profile-friendfeed-off 	{ background-position: 0 -731px; } 
#Kunena .kicon-profile-gender-off 		{ background-position: 0 -752px; } 
#Kunena .kicon-profile-gtalk-off 		{ background-position: 0 -773px; } 
#Kunena .kicon-profile-icq-off 			{ background-position: 0 -794px; } 
#Kunena .kicon-profile-linkedin-off 	{ background-position: 0 -815px; } 
#Kunena .kicon-profile-msn-off 			{ background-position: 0 -836px; } 
#Kunena .kicon-profile-myspace-off 		{ background-position: 0 -857px; } 
#Kunena .kicon-profile-pm-off 			{ background-position: 0 -878px; } 
#Kunena .kicon-profile-remind-off 		{ background-position: 0 -899px; } 
#Kunena .kicon-profile-skype-off 		{ background-position: 0 -920px; } 
#Kunena .kicon-profile-twitter-off 		{ background-position: 0 -941px; } 
#Kunena .kicon-profile-website-off 		{ background-position: 0 -962px; } 
#Kunena .kicon-profile-yim-off 			{ background-position: 0 -983px; }

#Kunena div#kprofile-leftcol { width: 200px; font-size: 1em; float:left; /*margin-right: 10px;*/}
#Kunena div.kavatar-lg { 
	width: 200px; 
	height: 200px; 
	border: 1px solid;
	display: table-cell;
	vertical-align:middle;
	text-align:center;
}
#Kunena div.kavatar-lg img {	 }
#Kunena div#kprofile-stats { margin-top: 15px;}
#Kunena div#kprofile-stats ul { margin: 0 0 0 3px; padding: 0;}
#Kunena div#kprofile-stats ul li { list-style-type: none; padding-top: 5px; clear:both; font-size:.917em ;}
#Kunena div#kprofile-stats ul li span.konline-status-yes {
	display:block; 
	background: url("../../default/images/icons/online.gif") no-repeat; 
	height: 16px; 
	width: 70px;
}
#Kunena div#kprofile-stats ul li span.konline-status-no {
	display:block; 
	background: url("../../default/images/icons/offline.gif") no-repeat; 
	height: 16px; 
	width: 70px;
}	
div#kprofile-stats ul li span.krankname {
	display:block; 
	margin-right: 5px;
	font-weight:bold;
	float:left;
}
div#kprofile-stats ul li span.krank-admin {
	display:block; 
	background: url("../../default/images/ranks/rankadmin.gif") no-repeat; 
	height: 16px; 
	width: 70px;
	margin-right: 5px;
	float:right;
	margin-top: 0;
}
#Kunena div#kprofile-rightcol { 
	/*display:inline-block;
	float:left;
	margin-left:10px;
	width:75%;*/
}
#Kunena table#kprofile td.kcol-left {
	padding: 10px 10px 30px;
	vertical-align: top;
}
#Kunena table#kprofile td.kcol-right {
	border-left: 0;
	padding: 10px 10px 30px;
	vertical-align: top;
}

#Kunena div#kprofile-rightcoltop  {width: 100%;}
#Kunena div.kprofile-rightcol1 { 
	width: 45%;
}
#Kunena div.kprofile-rightcol1 ul {margin: 0;padding: 0;}
#Kunena div.kprofile-rightcol1 ul li,
#Kunena div.kprofile-rightcol2 ul li { 
	list-style-type: none !important; 
	background: 0 none; 
	padding-bottom: 8px;
	padding-left: 0;
}
#Kunena div#kprofile-stats ul li { 
	list-style-type: none !important; 
	background: 0 none; 
	padding-left: 0;
}
#Kunena li.bd a {
	margin-left: 10px;
}
#Kunena div.kiconrow {
	width: 121px;
	padding-right: 10px;
	padding-bottom: 5px;
	float:left;
}
#Kunena div.kiconrow span,
#Kunena div.kiconprofile span {
	background-repeat: no-repeat;
	display:block;
	float:left;
	margin: 0 5px 5px 0;
	border: 0 none;
}
#Kunena div.kiconprofile span.birthday {
	background-image: none;
	border: 0 none;
}
#Kunena div.clrline {
	clear:both; 
	border-top: 1px solid;
	margin: 15px 0 20px 0;
	line-height: 10px;
}
#Kunena div#kprofile-rightcolbot { }
#Kunena div.kprofile-rightcol1 h4 { margin:10px 0 0 0; padding: 0; font-size: 1em; font-weight:bold;}
#Kunena div.kprofile-rightcol1 p { margin:0; padding: 0;}
#Kunena div.kprofile-rightcol2 { float:right; width: 45%; margin-left: 10px;}
#Kunena div.kprofile-rightcol2 ul {margin: 0;padding: 0;}
#Kunena div.kprofile-rightcol2 ul li {list-style-type: none !important; padding-bottom: 8px;}
#Kunena div.kprofile-rightcol2 ul li span.email {
	float:left;
	display:block; 
	background: url("../../default/images/icons/email.png") no-repeat; 
	height: 16px; 
	width: 16px;
	margin-right: 5px;
}
#Kunena div.kprofile-rightcol2 ul li span.website {
	float:left;
	margin-right: 5px;
}
#Kunena dd.kprofile-modtools h4 {
	margin-bottom: 5px;
	margin-left: 5px;
}
#Kunena dd.kprofile-modtools ul li span {
	margin-right: 15px;
}
#Kunena dd.kprofile-modtools ul li {
	padding-bottom: 5px;
}
#Kunena li.usertype {
	font-weight:bold;
}
#Kunena li.kprofile-rank {
}
#Kunena li.kprofile-rank img {

}

/* Tabs
----------------------------------*/

#Kunena #kprofile-tabs {
	width: 100%;
	margin-top: 0px;
}
#Kunena dl.tabs {
	float: left;
	margin: 10px 0 -1px 0;
	z-index: 50;
}
#Kunena dl.tabs dt {
	float: left;
	padding: 4px 10px;
	border-left: 1px solid;
	border-right: 1px solid;
	border-top: 1px solid;
	margin-left: 3px;
}
#Kunena dl.tabs dt.open {
	border-bottom: 1px solid;
	z-index: 100;
}
#Kunena div.current {
	clear: both;
	border: 1px solid;
	padding: 10px 10px;
	overflow: hidden;
}
#Kunena div.current dd {
	padding: 0;
	margin: 0;
}
#Kunena dt.kprofile-modbtn {
}
#Kunena dd.kprofile-modtools ul {
	margin:0;
	padding:0;
	margin-left: 5px;
}
#Kunena dd.kprofile-modtools ul li {
	list-style-type:none;
}
#Kunena dd.kprofile-modtools .kcheckbox {
	float:left;
	clear:left;
}
#Kunena dd.kprofile-modtools label {
	float:left;
	clear:right;
	margin: 3px 10px 10px 5px;
}
#Kunena input.kbutton {
	margin: 10px 0 0 5px;
}
#Kunena form#jumpto { margin: 5px; }
#Kunena form#jumpto input.kbutton { margin: 0px;}
#Kunena table.klist-top td.klist-markallcatsread input.kbutton { vertical-align:middle; margin: 5px;}

	
/* SLIDERS
----------------------------------------------------------------------------------------------- */

#Kunena span#kprofilebox-status {
	font-weight:bold;
	display:block;
	height: 14px; 
	width: 15px;
}
#Kunena #kprofilebox-toggle {
	display:block;
	height: 15px;
	width: 15px;
	margin-right: 1px;
	margin-top: -14px;
	border: 1px solid;
}
#Kunena a.close {
	display:block; 
	background: url("../../default/images/shrink.gif") no-repeat; 
	height: 15px; 
	width: 15px;
}
#Kunena a.open {
	display:block; 
	background: url("../../default/images/expand.gif") no-repeat; 
	height: 15px; 
	width: 15px;
}

/* FOOTER
----------------------------------------------------------------------------------------------- */
#Kunena .kcredits {	
	text-align: center;
}
#Kunena .kfooter {
	text-align: center;
}
#Kunena img.rsslink {
	float:right;
	margin-top: 10px;
	margin-right: 3px;
}

/* Mootools Autocompleter CSS classes
----------------------------------------------------------------------------------------------- */
/* DO NOT ADD #Kunena into these rules! */
ul.autocompleter-choices {
	position:				absolute;
	margin:					0;
	padding:				0;
	list-style:				none;
	border:					1px solid;
	text-align:				left;
	z-index:				50;
}
ul.autocompleter-choices li {
	position:				relative;
	margin:					-2px 0 0 0;
	padding:				0.2em 1.5em 0.2em 1em;
	display:				block;
	float:					none !important; 
	cursor:					pointer;
	font-weight:			normal;
	white-space:			nowrap;
	font-size:				1em;
	line-height:			1.5em;
}
ul.autocompleter-choices li.kautocompleter-selected {
}
ul.autocompleter-choices span.kautocompleter-queried {
	display:				inline;
	float:					none;
	font-weight:			bold;
	margin:					0;
	padding:				0;
}
ul.autocompleter-choices li.kautocompleter-selected span.kautocompleter-queried {
}

/* for form-validation
------------------------------------------------------ */
	
#Kunena #kpost-message .invalid { 
	border: 1px solid !important;
}

/* SHOW ICONS 
----------------------------------------------------------------------------------------------- */

#Kunena span.kicon {
	background: none;
	border: 0;
	margin: 0;
	padding: 0;
	display: inline-block;
}

#Kunena span.ktopicattach {
	background: url("../../default/images/icons/attachment.png") no-repeat left center;
	margin: 2px;
	width: 32px;
	height: 32px;
	float:right;
}
#Kunena span.kfavoritestar {
	background: url("../../default/images/icons/favoritestar.png") no-repeat left center;
	width: 16px;
	height: 16px;
}
#Kunena span.kfavoritestar-grey {
	background: url("../../default/images/icons/favoritestar-grey.png") no-repeat left center;
	width: 16px;
	height: 16px;
}
#Kunena span.ktopiclocked,
#Kunena span.kforumlocked {
	background: url("../../default/images/icons/lock_sm.png") no-repeat left center;
	width: 16px;
	height: 16px;
}
#Kunena span.ktopicsticky {
	background: url("../../default/images/icons/tsticky.png") no-repeat left center;
	width: 27px;
	height: 44px;
	float:right;
	margin-right: -5px;
}
#Kunena span.kforumbottom {
	background: url("../../default/images/icons/bottom_arrow.gif") no-repeat left center;
	width: 18px;
	height: 15px;
}
#Kunena span.kforumtop {
	background: url("../../default/images/icons/top_arrow.gif") no-repeat left center;
	width: 18px;
	height: 15px;
}
#Kunena span.krss {
	background: url("../../default/images/icons/rss.png") no-repeat left center;
	width: 24px;
	height: 24px;
	margin: 5px 5px 0 -29px;
}
#Kunena span.kpdf {
	background: url("../../default/images/icons/pdf.png") no-repeat left center;
	width: 24px;
	height: 24px;
	margin: 5px 33px 0 -29px;
}
#Kunena div.krss-block {
	float: right;
}
#Kunena span.kforummoderated {
	background: url("../../default/images/icons/tmoder.gif") no-repeat left center;
	width: 16px;
	height: 16px;
}
#Kunena span.kreadforum,
#Kunena span.knotloginforum {
	background: url("../../default/images/icons/folder_nonew.png") no-repeat left center;
	width: 32px;
	height: 32px;
}
#Kunena span.kunreadforum {
	background: url("../../default/images/icons/folder.png") no-repeat left center;
	width: 32px;
	height: 32px;
}
#Kunena span.kreadforum-sm,
#Kunena span.knotloginforum-sm {
	background: url("../../default/images/icons/folder_nonew_sm.png") no-repeat left center;
	width: 12px;
	height: 12px;
	margin-right: 3px;
    vertical-align: middle;
}
#Kunena span.kunreadforum-sm {
	background: url("../../default/images/icons/folder_sm.png") no-repeat left center;
	width: 12px;
	height: 12px;
	margin-right: 3px;
    vertical-align: middle;
}
.kgooglemap {
	width: 100%;
	display:block;
	height:480px;
	overflow:hidden;
	position:relative;
}
.kgooglemap img {
	max-width:none !important;
}

/* Fix for Atomic Template */
#ktab .joomla-nav {
	background-color: transparent;
	border: 0 none;
}

/* Threaded view 
----------------------------------------------------------------------------------------------- */
#Kunena .ktree { 
	width: 15px;
	height: 27px;
	margin: -9px 0;
	display: inline-block;
	background: url("../../default/images/treenodes.png") no-repeat left center;
}
#Kunena .ktree-crossedge { background-position: -45px 0; }
#Kunena .ktree-lastedge { background-position: -75px 0; }
#Kunena .ktree-root { background-position: -15px 0; }
#Kunena .ktree-single { background-position: 0 0; }
#Kunena .ktree-leaf { background-position: -90px 0; }
#Kunena .ktree-node { background-position: -60px 0; }
#Kunena .ktree-edge { background-position: -30px 0; }
#Kunena .ktree-gap { background-position: -105px 0; }
#Kunena .ktree-empty { background: none; }


/*** kunena.default.css ***/

@charset "utf-8";

/**
* @version $Id$
* Kunena Component
* @package Kunena
*
* @Copyright (C) 2008 - 2011 Kunena Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @link http://www.kunena.org
*
* Based on FireBoard Component
* @Copyright (C) 2006 - 2007 Best Of Joomla All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @link http://www.bestofjoomla.com
* 
**/ 

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
	font-family: Arial, Helvetica, sans-serif;
}
#Kunena ul li {
	background: none;
}
#Kunena .divider {color:#999999;}

#Kunena a:link,
#Kunena a:visited,
#Kunena a:active,
#Kunena a:focus { color: #5388B4 !important; background-color:transparent !important;}

#Kunena a:hover { color: #FF0000 !important; background-color:transparent !important; }

#Kunena .knewchar {
	color: #009900;
	font-family: Arial, Helvetica, sans-serif;
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
	background-color: #5388B4;
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
	font-family: Arial, Helvetica, sans-serif;
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
	font-family: Arial, Helvetica, sans-serif;
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
	font-family: Arial, Helvetica, sans-serif;
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
	font-family: Arial, Helvetica, sans-serif;
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
	font-family: Arial, Helvetica, sans-serif;
	color: #FFFFFF;
}

#Kunena div.kthead-title a {
	font-family: Lucida Grande, Lucida, Arial, Helvetica, sans-serif;
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
	font-family: Arial, Helvetica, sans-serif;
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
	font-family: Arial, Helvetica, sans-serif;
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

#Kunena .kmsgtitle {
	color: #fff ;
}
#Kunena div.kmsg-header-top span.kmsg-id-top a,
#Kunena div.kmsg-header-bottom span.kmsg-id-bottom a,
#Kunena div.kmsg-header-left span.kmsg-id-left a,
#Kunena div.kmsg-header-right span.kmsg-id-right a {
	color: #fff !important;
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
	font-family:			Verdana, Geneva, Arial, Helvetica, sans-serif;
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