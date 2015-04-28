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

/*** kunenalatest.css ***/

.klatest li{background:none!important;}.klatest-items li.klatest-item{list-style:none!important;clear:both;margin:2px 0;padding:0 0 1px;}.klatest-items .knewchar{color:#444;font-weight:700;font-family:Tahoma,Microsoft Yahei,Simsun,Helvetica Neue,Luxi Sans,DejaVu Sans,Hiragino Sans GB,STHeiti;margin-left:3px;font-size:.8em;vertical-align:top;white-space:nowrap;}.klatest-subject a{font-size:14px;}.klatest-avatar img{border:1px solid #CCC;margin:2px 2px 2px 0;padding:4px;}.klatest-topicicon img{margin:2px 2px 2px 0;padding:1px;width:32px;height:28px;}.klatest-posttime,.klatest-cat,.klatest-author{font-size:10px;}p.klatest-more{clear:both;margin:0;padding:0;}.klatest-itemdetails li.klatest-author{display:inline;}.klatest-itemdetails li.klatest-posttime{display:block;}.klatest-items,.klatest-items ul.klatest-itemdetails{margin:0;padding:0;}.klatest-itemdetails li,.klatest-preview-content li{margin-bottom:0!important;display:block;}.klatest-avatar,.klatest-topicicon{float:left;display:block;margin-right:5px;}