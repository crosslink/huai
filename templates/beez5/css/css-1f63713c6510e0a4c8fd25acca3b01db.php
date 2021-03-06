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

/**
 * @author Design & Accessible Team ( Angie Radtke  )
 * @package Joomla
 * @subpackage Accessible-Template-Beez
 * @copyright Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant to the
 * GNU General Public License, and as distributed it includes or is derivative
 * of works licensed under the GNU General Public License or other free or open
 * source software licenses. See COPYRIGHT.php for copyright notices and
 * details.
 */




body
{
        background: #fff;
        color: #000000;
        font-size: 100.1%;
        padding: 0px;
        text-align: center;
}

body.contentpane {
		width:auto;
		margin:10px;
		text-align: left;
}
img { border: 0 none; }


/*** position.css ***/

/**

 * @author ( Angie Radtke )
 * @package Joomla
 * @subpackage Accessible-Template-Beez
 * @copyright Copyright (C) 2005 - 2009 Open Source Matters. All rights reserved.
 * @license GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant to the
 * GNU General Public License, and as distributed it includes or is derivative
 * of works licensed under the GNU General Public License or other free or open
 * source software licenses. See COPYRIGHT.php for copyright notices and
 * details.
 */

/* not ready */

*
{
        margin: 0;
        padding: 0;
}

body
{
    font-size: 100.01%;
    padding: 0px;
    text-align: center;
    position:relative;
}

/* ###################### general ###################### */
#all
{
    margin: 0 auto;
    max-width:1050px;
    padding: 0px;
    text-align: left;
}

#header
{
    display:block ;
    position:relative;
    padding:0px;
    overflow:hidden;
}

#back
{
        margin: 0;
        padding:0px;
}

#contentarea,
#contentarea2
{
	position:relative;
    overflow:hidden;
    padding:0px 20px ;
    margin:0;

}

#wrapper
{
	width:53%;
	float:left;
	position:relative;

}

#wrapper2
{
	width:72%;
	float:left;
	position:relative;
	padding-bottom:20px

}


#wrapper2 .item-page
{max-width:660px}
#main
{
    padding: 10px 0px 20px 0px;
    position: relative;
    min-height:320px;
}

#right
{
    float:left;
    width: 20%;
    margin:10px 0px 10px 2%;
    padding:0px 0px 5px 0px;
    position:relative;


}

.unseen,
.hidelabeltxt
{
        display: inline;
    height: 0px;
    left: -3000px;
    position: absolute;
    top: -2000px;
    width: 0px;
}

/* ++++++++++++++  nav after content  ++++++++++++++ */
.left
{
        padding-top:0px;
        float:right;
        margin:10px 0px 10px 0%;
        width: 22%;
        position:relative;

}

/* ++++++++++++++  nav before content  ++++++++++++++ */
.left1
{
    padding:0px 0 0 0px;
    float: left;
    margin:10px 3% 10px 0px;
    width: 21%;
        position:relative
}

.leftbigger
{
        width:25%
}


/* ###################### header ###################### */

.skiplinks,
.skiplinks li
{
        display: inline;
    height: 0px;
    line-height:0;
    padding:0 !important;
}

.skiplinks li a.u2
{
        display: inline;
    height: 0px;
    left: -3000px;
    position: absolute;
    top: -2000px;
    width: 0px;
    z-index: 200 !important;
}

.skiplinks li a.u2:active,
.skiplinks li a.u2:focus
{
        position:absolute;
    width:13em;
    top:100px;
    left:10px;
    z-index:10;
    line-height:1.5em;
    padding:5px;
    font-weight:bold;
    height:3em
}

.wrap
{
        border: 0;
    clear: both;
    float: none;
    font-size: 1px;
    height: 0;
    line-height: 1px;
    margin: 0;
    padding: 0;
    visibility: hidden;
}

h1#logo
{
        font-size:3.5em;
        line-height:1.0em;
}

#logo
{
}

#logo img
{
        display: block;
        }

#logo span
{
        padding-left:2px
}

#logo span.header1
{
        font-size:0.4em;
        display:block;
        top:0em;
        line-height:0.8em
}

.logoheader
{
        margin:0;
        padding:0;
        text-align:left;
        font-weight:normal;
        line-height:1.5em;


}

#line
{

}

/* ++++++++++++++  button for closing right column  ++++++++++++++ */

#close
{
        margin-right:0px;
        font-size:0.85em;
        text-transform:uppercase;
}

#close span
{
        position:absolute;
        right: 20px;
    z-index:10000;
    top:5px;
    width:7em;
    font-weight:bold;
    text-align:right;
    line-height:1.5em;
    padding:5px 2px 5px 5px
}


/* ###################### main ###################### */

/* ++++++++++++++  position  ++++++++++++++ */

.blog-featured
{
        padding: 0;
}

.items-leading
{
        padding:0px 5px 10px 5px;
        overflow:hidden;
        margin-bottom:10px
}

.row-separator
{
        display: block;
        clear: both;
        margin: 0;
        border: 0px;
        height:1px
}

.item-separator
{
        display: none;
        margin: 0px;
}

.shownocolumns
{
        width:98% !important;
}

#top
{
        margin:0 0 20px 0;
        overflow:hidden
}

/* ++++++++++++++  blog  ++++++++++++++ */

.cols-1
{
        display: block;
        float: none !important;
        margin: 0 !important;
}

.cols-2 .column-1
{
        width:46%;
        float:left;
}

.cols-2 .column-2
{
        width:46%;
        float:right;
        margin:0
}

.cols-3 .column-1
{
        float:left;
        width:29%;
        padding:0px 5px;
        margin-right:4%

}
.cols-3 .column-2
{
        float:left;
        width:29%;
        margin-left:0;
        padding:0px 5px
}
.cols-3 .column-3
{
        float:right;
        width:29%;
        padding:0px 5px
}

.items-row
{
        overflow:hidden;
        margin-bottom:10px !important;
}

.column-1,
.column-2,
.column-3
{
        padding:10px 5px
}

.column-2
{
        width:55%;
        margin-left:40%;
}

.column-3
{
        width:30%
}

.blog-more
{
        padding:10px 5px
}

/* ++++++++++++++  footer  ++++++++++++++ */

#bottom
{
        overflow:hidden
}

.box
{
        width:27%;
        float:left;
        margin-right:10px;
        min-height:100px;
        position:relative
}

.box1
{
        width:35%
}

.box2
{
        width:32%
}

.box3
{
        float:right
}

#footer-inner
{
        max-width:1025px;
        margin:0 auto;
        font-size:0.8em;
        padding:10px 15px 15px 10px;
}

img { border: 0 none; }

/*** layout.css ***/

/**
 * @author  ( Angie Radtke  )
 * @package Joomla
 * @subpackage Accessible-Template-Beez
 * @copyright Copyright (C) 2005 - 2009 Open Source Matters. All rights reserved.
 * @license GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant to the
 * GNU General Public License, and as distributed it includes or is derivative
 * of works licensed under the GNU General Public License or other free or open
 * source software licenses. See COPYRIGHT.php for copyright notices and
 * details.
 */

/* not ready */


h3
{
        font-size:1.1em;
        font-weight:bold;
        margin:10px 0;
}

h4
{
        font-size:1em;
}

fieldset
{
        margin:10px 0 ;
        padding:15px 0px;
        border:solid 1px
}

p
{
        line-height:1.7em;
        margin:8px 0;
}

em
{
        font-weight:bold;
}

/* ##########################  general  ########################### */
#all
{
    font-size: 0.8em;
}

/* ##########################  header content  ########################### */

#header form
{

}

#header form .button
{
        font-weight:bold;
        margin: 0;
        cursor:pointer;
        text-align:center;
        text-transform:uppercase
}

#header form .inputbox
{
        font-size:1em;
        width:13em;
        padding:3px;
}

#header form .inputbox { margin: 2px 13px 2px 2px;}
#header form .inputbox:focus { margin: 1px 11px 0 1px; }


#header ul
{
        display:block;
        margin:0px 0px 1px 0px;
        text-align:right;
        list-style-type:none;
        padding:10px 0px 10px 0px;
        position:absolute;
        top:0;
        right:0px;
        width:100%
}

#header ul li a:link,
#header ul li a:visited
{
        text-transform:uppercase;
        padding:10px;
        display:inline
}

#header ul.menu li
{
        display:inline ;
        padding:0 ;
        margin:0;

}

#header ul.menu li a:link,
#header ul.menu li a:visited
{
        font-weight:bold;
        text-decoration:none;
        padding:0px 10px;
        margin:0 ;
}

#header ul li a:hover,
#header ul li a:active,
#header ul li a:focus
{
        font-weight:bold;
}

#header ul li.active a:link,
#header ul li.active a:visited
{
        text-transform:uppercase;
        padding:10px 10px;
}




/* ##########################  fontsize  ########################### */

#fontsize
{
    padding:0;
    margin:0 20px 0 1px;
    text-align:right;
    margin-bottom:10px;
    float:none
}

#fontsize h3
{
    padding-right:0;
    font-weight:normal;
    display:inline;
    font-size:1em;
}

#fontsize p
{
    margin:0 0 0 2px;
    display:inline;
    font-size:1em;
}

#fontsize p a
{
    margin:0 2px;
    display:inline;
    padding:2px 5px;
}


/* ##########################  breadcrumbs  ########################### */

#breadcrumbs
{
        padding:0 0 0 0px;
        text-align:left;
        margin:15px 20px 15px 0px;
        font-size:0.85em
}

#breadcrumbs p
{
        padding:5px 5px 5px 0;
        display:inline;
}

#breadcrumbs span
{
        padding:0px;
}

#breadcrumbs span a:link,
#breadcrumbs span a:visited
{
        text-transform:none;
        font-weight:normal;

}

#breadcrumbs span a:hover,
#breadcrumbs span a:active,
#breadcrumbs span a:focus
{
        text-decoration:none;
}


/* ##########################  navigation column  ########################### */

#nav ul
{
        list-style-type:none;
        margin:0px 0;
}

.module_content
{
        margin:0px 0 0px 0;
        padding:0px 0px 10px 5px
}

.moduletable
{
        margin:0px 0 20px 0;
        padding:0px 0;
}

.moduletable_menu
{
        margin:0px 0 10px 0;
}

.moduletable_js
{
        margin-bottom:5px;
}

#nav h3.js_heading,
#right h3.js_heading
{
        position:relative;
        display:block;
        padding:5px 0px 0 0px ;
        margin:0px ;
        font-size:1.40em;
}

h3.js_heading span.backh
{
        padding:4px 0px 0px 10px;
        display:block;
}

h3.js_heading span.backh1
{
        padding:0px 20px 8px 0px;
        display:block;
}

h3.js_heading a
{
        display:block;
        position:absolute ;
        right:0px ;
        top:0px;
        padding:5px 5px 0 0;
        text-decoration:none;
}

.no
{
        font-size:1px;
}

#nav h3
{
        font-size:1.4em;
        margin:5px 0 6px 0;
        font-weight:normal;
        line-height:1.19em
}


#nav h3 span.backh3
{
        padding:0px 0px 5px 2px;
        display:block;
}


/* ++++++++++++++  first level  ++++++++++++++ */

#nav .moduletable-example ul.menu
{
        margin:0;
        padding:0
}

 ul.menu
{
        list-style-type:none !important;
        margin:0 0 0px 0px ;
        padding: 0px 5px 20px 5px;

}

 .module_content ul.menu
{
        margin-left:-5px;
        padding:10px 0 0 0 ;
}

 ul.menu li
{
        margin:0;
}

ul.menu li a:link,
 ul.menu li a:visited
{
        display:block;
        padding:7px 4px 7px 15px;
        text-decoration:none;
}

 ul.menu li.active a:link,
 ul.menu li.active a:visited
{
        font-weight:bold;
}

 ul.menu li a:hover,
 ul.menu li a:active,
 ul li a:focus
{

}



/* ++++++++++++++  second level  ++++++++++++++ */
 ul.menu li ul
{
        margin:0 ;
        padding:0 ;
}
 ul.menu li ul li
{
        margin:0;
        padding:0
}

 ul.menu li.active ul li a:link,
 ul.menu li.active ul li a:visited
{
        padding:5px 10px 5px 20px ;
        font-weight:normal;
}


 ul.menu li.active ul li a.active:link,
 ul.menu li.active ul li a.active:visited
{
        padding:7px 10px 7px 20px ;
}

 ul li.active ul li.active a:link,
 ul li.active ul li.active a:visited
{
        font-weight:bold ;
}

/* ++++++++++++++  third level  ++++++++++++++ */

 ul.menu li ul li ul
{
        padding:5px 0 5px 0px;
}

 ul.menu li ul li ul li
{

}

ul.menu li.active ul li.active ul li a:link,
 ul.menu li.active ul li.active ul li a:visited
{
        padding:5px 4px 5px 30px;
        font-weight:normal;
}

 ul.menu li.active ul li.active ul li.active a:link,
 ul.menu li.active ul li.active ul li.active a:visited
{
        font-weight:bold;
}



/* ##########################  main  ########################### */

/* ++++++++++++++  main general  ++++++++++++++ */

#main h1
{

        padding: 5px;
        font-size:1.4em;
        line-height:1.19em;
        font-weight:normal;
        margin:0 -5px 10px -5px

}

#main h2
{
        font-size:1.6em;
        font-weight:normal;
        margin-bottom:10px;
        padding:3px 0px;
}

#main h2 a
{
        text-decoration:none;
}

#main h3
{
        margin:20px 0 10px;
}

.item
{
        padding:0px 5px 10px 5px;
        display:block
}

.item h2
{
        margin:0 0px 10px 0px
}

.item-page
{
        padding:0 5px;
        display:block;
        overflow:hidden
}


/* h1 on frontpage and blog view */

#main .blog-featured h1,
#main .blog h1
{

        margin:0 0px 10px 0px
}


.blog .category-desc
{
        padding:0 5px;
        margin:10px 0 25px
}

.blog .cat-children .category-desc
{
        padding:0 0px;
        margin:10px 0 25px
}

#main .items-row h2
{
        font-weight:normal;
        padding:5px 2px 5px 2px;
        font-size:1.4em
}
#main ul.subcategories
{
        margin:20px 20px 20px 10px
}
#main .subcategories-link
{
        font-weight:bold
}

#main ul
{
        list-style-position:outside;
        list-style-type:square;
        padding:0 0 0 15px;
        margin:10px 0 10px 0px;
}

#main ol
{
        padding:0 0 0 20px;
        margin:10px 0 10px 0px;
                list-style-position:outside
}

#main ul li,
#main ol li
{
        padding:0;
        line-height:1.7em;
        margin: 0;
}

#main .category-list
{
        padding:0 5px;
        display:block;
}

#main .category-list h1
{
        margin-left:-5px;
        margin-right:-5px;
}

.categories-list
{
        padding:0 5px
}

#main .categories-list ul
{
        margin:0px 0 0 20px;
        padding:0
}

#main .categories-list ul li
{
        padding: 5px;
}

#main .categories-list ul ul
{
        margin-left:15px
}

.category-desc
{
        line-height:1.7em;
        margin:10px 0;
        padding-left:0px
}

.small
{
        font-size:0.85em;
        margin:0 0 20px;
}

.image-left
{
        float:left;
        margin:0 15px 5px 0;


}

.image-right
{
        float:right;
        margin:0 0 5px 15px
}

.archive
{
        padding:0 5px
}

.archive form
{
        padding:0 5px
}

ul#archive-items
{
        margin:20px 0 20px 0px;
        list-style-type:none;
        padding:0
}

ul#archive-items li.row0,
ul#archive-items li.row1
{
        padding:10px 0;
        margin:10px 0;
}

/* ++++++++++++++  columns  ++++++++++++++ */

.cols-4 .column-1
{
        width:23%;
        float:left
}

.cols-4 .column-2
{
        width:23%;
        margin-left:1%;
        float:left;
}

.cols-4 .column-3
{
        width:23%;
        margin-left:1%;
        float:left
}

.cols-4 .column-4
{
        width:23%;
        margin-left:0;
        float:right
}

/* ++++++++++++++  top  ++++++++++++++ */

#top h2
{
        font-size:1.4em;
        font-weight:normal
}

/* ++++++++++++++  leading  ++++++++++++++ */

#main .items-leading h2
{
        font-size:1.4em;
        font-weight:normal;
        padding:5px 0px
}

/* ++++++++++++++  readmore  ++++++++++++++ */

#main .readmore a
{
        font-weight:bold;
        padding:2px 5px 2px 10px;
        display:inline-block;
        margin-top:5px;
                text-decoration:none
}

.newsflash  a.readmore:link,
.newsflash a.readmore:visited,
#main a.readmore:link,
#main a.readmore:visited
{
        padding:4px 5px 4px 10px ;
        line-height:1.2em;
        text-decoration:none;

}

.newsflash  a.readmore:link,
.newsflash a.readmore:visited
{margin:10px 0;}

a.readmore:hover,
a.readmore:active,
a.readmore:focus
{
        text-decoration:none
}

#main .readmore a:hover,
#main .readmore a:active,
#main .readmore a:focus
{
        text-decoration:none;
}

/* ++++++++++++++  details  ++++++++++++++ */

.article-info
{
        margin:10px 0 10px 0px;
        font-size:0.9em;
}

.article-info-term
{
        display:none
}

dt.category-name,
dt.create,
dt.modified,
dt.createdby
{
        float:left;
        padding-right:5px;
}

.archive .article-info dd,
.article-info dd
{
        margin:2px 0 0px 0;
        line-height:1.2em
}

dd.createdby
{

}

.article-info dd span
{
    text-transform:none;
    display:inline-block;
    padding:0 5px 0 0px;
    margin:0 10px 0 0px;
}

/* ++++++++++++++  icons  ++++++++++++++ */

#main ul.actions
{
        text-align:right;
        padding:0 ;
        width:100%;
        margin:0
}

#main ul.actions li
{
        display:inline
}

#main ul.actions a
{
        text-decoration:none
}

/* ++++++++++++++  items more  ++++++++++++++ */

#main .items-more
{
        padding-top:10px;
}

#main .items-more h3
{
        font-weight:normal;
        margin:0;
        padding:5px 5px 5px 5px;
        font-size:1.4em
}

#main .items-more ol
{
        line-height:1.3em;
        list-style-type:none;
        margin:0;
        padding:10px 0 10px 2px;
}

#main .items-more ol li
{
        padding:2px;
}

#main .items-more ol li a
{
        display:inline;
        margin:0;
        font-weight:normal;
        padding:5px 5px 5px 20px;
}

#main .items-more ol li a:hover,
#main .items-more ol li a:active,
#main .items-more ol li a:focus
{
        font-weight:normal;
        padding:5px 5px 5px 20px;
        text-decoration:none
}


/* ++++++++++++++  pagination  ++++++++++++++ */

#main .pagination
{
        margin:10px 0 ;
        padding:10px 0 10px 0px;
        clear:both;

}

#main .pagination ul
{
        list-style-type:none;
        margin:0;
        padding:0;
        text-align:left;
}

#main .pagination li
{
        display:inline;
        padding:2px 5px;
        text-align:left;
        border:solid 1px #eee;
        margin:0 2px
}

.pagenav
{padding:2px; clear:both;}

#main .pagination li.pagination-start,
#main .pagination li.pagination-next,
#main .pagination li.pagination-end,
#main .pagination li.pagination-prev
{border:0}

#main .pagination li.pagination-start ,
#main .pagination li.pagination-start  span
 {
padding:0

}
p.counter
{
        font-weight:bold;
}


/* ##########################  right  ########################### */

#right .moduletable
{
        margin:0px 0px 0px 0px;
        padding:0px 0 20px 0;
}

#right h3
{
        font-size:1.2em;
                line-height:1.4em;
        margin:5px 0 0 0;
        font-weight:normal ;
}

#right h3 span.backh
{
        padding:0px 0px 0px 0;
        display:block;
}

#right h3 span.backh2
{
        display:block;
}

#right h3 span.backh3
{
        padding:0px 0px 5px 0px;
        display:block;
}

#right h3.js_heading span.backh
{
        padding:0px 0 0 10px
}

#right h4
{
        font-size:1em;
        padding:10px 5px 0 0;
        margin:0;
}

#right ul
{

    list-style-type:none;
    margin:10px 0;
    padding:5px 0 0 0px;
    position:relative;
}
#right ul.categories-module ul
{margin: 15px 0 15px 10px}
#right ul li
{

}

#right ul li a
{

}

#right ul.category-module
{
        margin-top:0;
        padding-top:0
}



/*  ####################   forms   #####################  */

#member-registration
{
        padding:0 5px
}
#member-registration fieldset
{
border:solid 1px #ddd
}

form fieldset dt
{
        clear:left;
        float:left;
        width:12em;
        padding:3px 0
}

form fieldset dd
{
        float:left;
        padding:3px 0
}

/* ########################## search ############################ */
.searchintro
{
        font-weight:normal;
        margin:20px 0 20px;
}

#searchForm,
#finder-search
{
        padding:0 5px
}

.form-limit
{
        margin:20px 0 0;
        text-align:right;
        padding:0 10px 0 20px;
}

.inputbox:focus
{

}

.highlight
{
        font-weight:bold;
}

.ordering-box
{
        width:40%;
        float:right;
}

.phrases-box
{
        width:60%;
        float:left
}

.only,
.phrases
{
        margin:10px 0 0 0px;
        padding:15px ;
        line-height:1.3em;
}

label.ordering
{
        display:block;
        margin:10px 0 10px 0
}

.word
{
        padding:10px 10px 10px 0;
}

.word input
{
        font-weight:bold;
        margin:0px 10px 0px 10px;
        padding:4px;
        font-size:1em
}

.word input:focus
{
        margin:0 0 0 9px;
}

.word label
{
    font-weight:bold
}

fieldset.only label,
fieldset.phrases label
{
    margin:0 10px 0 0px
}

.ordering-box label.ordering
{
    margin:0 10px 5px 0;
    float:left
}


form .search label,
form .finder label
{
        display:none
}

form #finder-filter-select-list label
{
        display:block;
        margin-top: 10px;
        margin-bottom: 2px;
}

/* ++++++++++++++  selects  ++++++++++++++ */
.phrases .inputbox
{
        width:10em;
}

.phrases .inputbox option
{
        padding:2px;
}


/* ++++++++++++++  search results  ++++++++++++++++++ */

dl.search-results
{

}

dl.search-results dt.result-title
{
        padding:15px 15px 0px 5px;
        font-weight:bold;
}

dl.search-results dd
{
        padding:2px 15px 2px 5px
}

dl.search-results dd.result-text
{
        padding:10px 15px 10px 5px;
        line-height:1.7em
}

dl.search-results dd.result-url
{
        font-size:90%;
        padding:2px 15px 15px 5px;
}

dl.search-results dd.result-created
{
        padding:2px 15px 15px 5px
}

dl.search-results dd.result-category
{
	 padding:10px 15px 5px 5px
}

/* ########################### contacts ########################### */

.contact
{
        padding:0 5px
}

.contact-category
{
        padding:0 10px
}

.contact-category  #adminForm fieldset.filters
{
	border:0;
	padding:0
}

.contact-image
{
	margin:10px 0;
	overflow:hidden;
}

.contact-image img
{
/* as you like
float:right;
float:left */
}

address
{
        font-style:normal;
        margin:10px 0;
}

address span
{
        display:block
}

span.contact-image
{
    margin-bottom:10px;
    overflow:hidden;
    display:block
}

.contact-address

{
margin:20px 0 10px 0;

}


.contact-email div
{
        padding:2px 0;
        margin:0 0 10px 0;
}

.contact-email label
{
        width:17em;
        float:left;

}

#contact_textmsg
{padding: 2px 0 10px 0}

#contact-email-copy
{
        float:left;
        margin-right:10px;

}

.contact .button
{
        float:none !important;
        clear:left;
        display:block;
        margin:20px 0 0 0
}



dl.tabs {
    float: left;
    margin: 50px 0 0 0;
    z-index: 50;
    clear:both;


}

dl.tabs dt {
    float: left;
    padding: 4px 10px;
    border-left: 1px solid #ccc;
    border-right: 1px solid #ccc;
    border-top: 1px solid #ccc;
    margin-right: 3px;
    background: #f0f0f0;
    color: #666;
}

dl.tabs dt.open {
    background: #F9F9F9;
    border-bottom: 1px solid #F9F9F9;
    z-index: 100;
    color: #000;

}

div.current {
    clear: both;
    border: 1px solid #ccc;
    padding: 10px 10px;

}


div.current dd {
    padding: 0;
    margin: 0;
}

dl#content-pane.tabs {
    margin: 1px 0 0 0;
}


/* ##########################  user profile  ########################### */

#users-profile-core,
#users-profile-custom
{
        margin:10px 0 15px 0;
        padding:15px;
}

#users-profile-core dt,
#users-profile-custom dt
{
        float:left;
        width:12em;
        padding:3px 0;
}

#users-profile-core dd,
#users-profile-custom dd
{
        padding:3px 0;
}

#member-profile fieldset,
.registration fieldset
{
        margin:10px 0 15px 0;
        padding:15px;
}

#users-profile-core legend,
#users-profile-custom legend,
.profile-edit legend,
.registration legend
{
		font-weight:bold
}

.profile-edit form#member-profile fieldset dd,
.registration form#member-registration fieldset dd
{ float:none; padding:5px 0}

.profile-edit form#member-profile fieldset dd input,
.profile-edit form#member-profile fieldset dd select,
.registration form#member-registration fieldset dd input
{width:17em}

.profile-edit form#member-profile fieldset dt,
.registration form#member-registration fieldset dt
{padding:5px 5px 5px 0; width:13em}


span.optional
{font-size:0.9em}

/*#################### tables ############################ */

table
{
        border-collapse:collapse
}

table.weblinks,
table.category

{
        font-size:1em;
        margin:10px 10px 20px 0px;
        width:99%;
}

table.weblinks td
{
        border-collapse:collapse;
}

table.weblinks td,
table.category td

{
        padding:7px;
}

table.weblinks th,
table.category th

{
        padding:7px;
        text-align:left
}

td.num
{
        vertical-align:top;
        text-align:left;
}

td.hits
{
        vertical-align:top;
        text-align:center
}

td p
{
        margin:0;
        line-height:1.3em
}

.filter
{
        margin:10px 0
}

.display-limit,
.filter
{
        text-align:right;
        margin-right:7px
}




/* ++++++++++++++  category table  ++++++++++++++ */

table.category th a img
{
        padding:2px 10px
}

.filter-search
{
        float:left;

}
.filter-search .inputbox
{width:6em}

legend.element-invisible
{
        position:absolute;
        /* need margin top and left doesn't work for the legend element */
        margin-left:-3000px;
        margin-top:-3000px;
        height:0px;
}

.cat-items
{
        margin-top:20px
}


/* #################### footer ############################ */
#footer-sub
{

    padding:0px
}
#footer
{
        padding:15px 10px 15px 20px;
        text-align:right;
        margin:0 auto;
        display:block;
        max-width:1020px;
        overflow:hidden
}

#footer div
{
        float:left;
        font-size:0.8em;
        line-height:1.7em;
}

#footer-outer
{
        padding:0;
}

.box
{
        text-align:left
}

.box ul
{
        list-style-type:none
}

#bottom .newsfeed-item
{
        padding:0;
        margin-bottom:10px
}

.box .moduletable_menu,
.box .moduletable
{
        margin:10px
}

.box3
{
        padding-left:10px
}

.box h3
{
        font-size:1.3em
}

#bottom ul.latestnews
{
        padding-left:0
}

#footer p
{
        font-size:0.8em;
        margin:0
}

p.syndicate
{
        float:left;
        display:block;
        text-align:left;
}


/* ++++++++++++++  Error Message contact form  ++++++++++++++ */
p.error
{
        padding:10px;
}

/* ++++++++++++++  editor  ++++++++++++++ */
.contentpaneopen_edit
{
        float: left;
}

.contentpaneopen_edit img
{

}

a.mceButton:hover  {background:none !important}

/* ++++++++++++++  pagebreak  ++++++++++++++ */
table.contenttoc
{
        padding:10px;
        margin:10px;
}

table.contenttoc tr td
{
        padding:1px 0px
}

.pagenavcounter
{
        font-weight:bold;
}


/* ++++++++++++++  edit  ++++++++++++++ */
legend
{
        padding:3px 5px;
}

form#adminForm
{

}

.edit form#adminForm fieldset
{
        padding:20px 15px;
        margin:10px 0 15px 0;
}

.formelm
{
        margin:5px 0
}


.formelm label
{
        width:13em;
        display:inline-block;
        vertical-align:top;
}

form#adminForm .formelm-area
{
        padding:5px 0
}

form#adminForm .formelm-area label
{
        vertical-align:top;
        display:inline-block;
        width:7.9em
}

.formelm-buttons
{
        text-align:right;
        margin-bottom:10px
}

.button2-left
{

}

a.modal-button,
.button2-left .blank a,
.button2-left a,
.button2-left div.readmore a
{background:#eee;
padding:4px !important;
margin:0 !important;
line-height:1.2em; border:solid 1px #ddd;
font-weight:bold; text-decoration:none;
margin-top:10px !important}

/* ++++++++++++++  tooltip  ++++++++++++++ */
.tip
{
        font-size:0.8em;
        text-align:left;
        padding:3px;
        max-width:400px
}

.tip-title
{
        font-weight:bold;
}


/* #################### modules ############################ */

/* ++++++++++++++  newsflash  ++++++++++++++ */

/* newsflash horizontal */
.newsflash-horiz
{
        overflow:hidden;
        list-style-type:none !important;
        margin:0 5px!important;
        padding:20px 10px !important
}

.newsflash-horiz li
{
        float:left;
        width:30%;
        margin:0 1% !important;
        padding:10px 5px;
}

ul.newsflash-horiz li h4
{
    font-size:1.4em;
}

.newsflash-horiz li img
{
    display:block;
    margin-bottom:10px
}

/* newsflash vertical */

.newsflash-vert
{
    padding:0
}


/* ++++++++++++++  banner  ++++++++++++++ */

.banneritem
{
        margin: 10px 0px 10px 0px;
        padding:0px;
}

.banneritem a
{
        font-weight:bold
}


/* ++++++++++++++  latest, popular  ++++++++++++++ */

#nav .module_content ul.latestnews,
#nav .module_content ul.mostread
{
        margin:10px 0 0 0
}

ul.latestnews,
ul.mostread
{
        padding-left:10px;
        list-style-type:none !important;
}

ul.latestnews li a,
ul.mostread li a
{
    padding:2px 2px 2px 15px ;
    display:block;
    text-decoration:none
}


/* ++++++++++++++  newsflash  ++++++++++++++ */
.newsflash
{
    margin:0px;

}

/* ++++++++++++++  newsfeed  ++++++++++++++ */
.newsfeed
{
        padding:0 5px
}

ul.newsfeed
{
        padding:0 !important
}

.newsfeed-item
{
        padding:5px 0 0 0;
        margin:0
}

.feed-item-description img
{margin: 5px 10px 10px 0}

.newsfeed-item h5 a
{
        font-size:1.1em;
        font-weight:bold !important
}

dl.newsfeed-count dt,
dl.newsfeed-count dd
{
        display:inline
}

/* ++++++++++++++  weblinks  ++++++++++++++ */

dl.weblink-count dt,
dl.weblink-count dd
{
        display:inline;
}

/* ++++++++++++++  login  ++++++++++++++ */

#login-form
{
        padding-top:5px
}

#login-form fieldset
{
        padding:0
}

#login-form .inputbox
{
        padding:2px
}

#login-form fieldset.input
{
        padding:10px 0 0 0;
        margin:0px 0 10px 5px
}

#login-form label
{
        margin-right:10px;
        width:8.4em;
        display:block;
        float:left
}

#form-login-remember label
{
	float:none;
	width:auto;
	display:inline
}

.logout-button
{
	margin-top:10px
}

input.button,
button.button,
button.validate
{
        cursor:pointer;
        padding:3px 5px 3px 7px ;
        font-weight:bold;
        line-height:1.2em;
        font-family:arial;
}

#modlgn-username,
#modlgn-passwd
{
        width:9em
}

.module_content #form-login-username label,
.module_content #form-login-password label
{
            float:left;
            width:5.2em
}

.login-fields
{
        margin:10px 0
}

.login-fields label
{
        float:left;
        width:9em
}

.login-description img,
.logout-description img
{
        float:left;
        margin-right:20px
}

.login-description,
.logout-description
{
        overflow:hidden;
                padding-left:5px;
                margin:20px 0 10px 0
}

.logout-description
{
        margin-bottom:20px
}



/* ++++++++++++++  tabs/ slide  ++++++++++++++ */
.slide
{
        height:auto !important;

}

ul.tabs
{
    overflow:hidden;
    padding:0 !important;
    margin:0 !important
}

.tabopen ul.newsflash-horiz,
.tabopen ul.newsflash-vert,
.tabopen ul.latestnews
{
    margin:0 !important;
    padding:0 !important;
}

.tabopen ul.newsflash-horiz li,
.tabopen ul.newsflash-vert li
{
    padding:0 6px !important;
}

ul.tabs li
{
    list-style-type:none;
    float:left;
    width:auto;
    padding:0;
    display:block;
    margin:0;
    font-size:1em;
}

ul.tabs li a:link,
ul.tabs li a:visited
{
    text-decoration:none;
    padding:7px 5px;
    margin:0px ;
    display:block;
    font-size:0.9em;
    font-weight:normal;
}

ul.tabs li a.linkopen:link,
ul.tabs li a.linkopen:visited
{
    font-weight:bold;
}

ul.tabs li a:hover,
ul.tabs li a:active,
ul.tabs li a:focus
{
        text-decoration:underline;
}

.tabcontent
{
        padding:15px 10px;
        margin-top:-1px;

}

.tabcontent:focus
{
	outline:none
}

.tabopen
{
        display:block;
        margin-bottom:20px;
        overflow:hidden
}

.tabclosed
{
        display:none
}

.tabcontent ul
{
        padding:0
}

.tabcontent ul li
{
        list-style-type:none
}

.tabcontent .linkclosed
{

}

a.linkopen
{

}

.tabouter
{
        margin-top:20px
}


.module_content
{border:solid 1px #000;
padding:10px}

/* ++++++++++++++  random  ++++++++++++++ */

#right .random-image,
#nav .random-image
{
        margin-top:10px;
        margin-left:10px
}



/* ++++++++++++++  content-module ++++++++++++++ */
.category-module li
{
        padding:5px 0 5px 0
}

.category-module span
{
        display:block;
        font-size:0.85em;
}

.category-module a span
{
        display:inline
}

a.mod-articles-category-title
{
        text-decoration:none;
        font-weight:bold
}



/*-------------------------------*/

.australia
{
        margin:0px 0;
        padding:10px 65px 10px 10px;
}

.australia h3
{
        font-size:1.4em;
}

.australia a
{
        font-weight:bold
}

.australia p
{
        line-height:1.4em
}

/* ###########  Categories list ############ */
#main .categories-listalphabet ul
{
	padding:0;
	margin:20px 10px 10px 0;
	list-style-type:none;
	list-style-position:inside
 }
#main .categories-listalphabet ul li
{
	display :inline;
	padding:5px;
	border-right:solid 1px #ddd
}


#main .categories-list ul
{
	list-style-type:none;
	margin:0
}
#main .categories-list dl dt,
#main .categories-list dl dd
{
	display:inline
}

#main .cat-children
{
	padding-left:5px
}
#main .cat-children ul dl dt,
#main .cat-children ul dl dd
{ display:inline}

#main .cat-children ul
{
	list-style-type:none;
	margin:0;
	padding:0;
}
 #main .cat-children ul
{
	margin:20px 20px 20px 0;
}
#main .cat-children ul ul
{
	margin:20px
}

#main .cat-children ul li
{
	margin:10px 0 10px 0
}




  /* mod stats  */


.stats-module dl
{
	margin:10px 0 10px 0
}
.stats-module dt
{
	float:left;
	margin:0 10px 0 0;
	font-weight: bold;
}
.stats-module dt,
.stats-module dd
{
	padding:2px 0 2px 0
}
/* syndicate */

a.feed-link
{
margin-top:15px;
display:block;
text-decoration:none
}

.feed-link img
{border:0}
/* pagenav */
#main ul.pagenav {
	list-style-type:none;
	padding:0;
	overflow:hidden
}
ul.pagenav li
{
	display:inline-block;
	padding:1px;
	margin:0;
	border:solid 0px #cc0000;
	position:relative;

}

#main ul.pagenav li
{
	line-height:2em
}

ul.pagenav li a
{
	border:solid 1px #ccc;
	display:inline;
	background:#eee;
	padding:2px;
	text-decoration:none;

}
ul.pagenav li.pagenav-prev
{float:left}
ul.pagenav li.pagenav-next
{float:right}

/* pagebreak */

#article-index
{
	width:25%;
	float:right;
	border:solid 1px #eee;
	padding:10px;
	margin: 10px 0px 20px 30px;
	background:#f9faf9
}
#article-index h3
{
	margin:0;
	font-size:1em;


}

#article-index ul
{
	list-style-type:disc;
	color:#666
}


/* mailto window */


#mailto-window
{
	background:#f5f5f5;
	padding:15px;
	border:solid 1px #ddd;
	position:relative
}
#mailto-window label
{
	width:10em
}

.mailto-close
{
	position:absolute;
	right:0;
	top:5px;
	background:none;




}


.mailto-close a
{
background:#f5f5f5 url(../images/close.png) no-repeat !important;
min-width:25px;
display:block;
min-height:25px;
overflow:visible
}

.mailto-close a  span
{
	position:absolute;
	left:-3000px;
	top:-3000px;
	display:inline

}
#mailto-window  .inputbox
{
	background:url("../images/content_bg.gif") repeat-x scroll 0 0 #FFFFFF;
	border:1px solid #ccc;
	padding:3px;
}

#mailto-window p
{
	margin-top:20px
}

#mailto-window button
{
	margin:0 5px 0 0
}

.clr{
	clear:both;
}

/* for the spacer field*/
span.spacer > span.text label {
	white-space: nowrap;
	font-weight: bold;
	color: #666;
}
.red {
	font-weight: bold;
	color: #c00;
}

.star {
	color:#cc0000;
}

/* ++++++++++++++  news feeds direction ++++++++++++++ */

.redirect-ltr {
	direction: ltr;
	text-align: left;
}

.redirect-rtl {
	direction:rtl;
	text-align: right;
}
#main h3.title,
#main2 h3.title,
#main dl.tabs h3,
#main2 dl.tabs h3
{margin:0}

/* ++++++++++++++  feed display module ++++++++++++++ */

div.feed {
	display:block;
	padding: 5px 10px;
}

/* ++++++++++++++  image float style ++++++++++++++ */
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

/*** print.css ***/

/**
 * @author Design & Accessible Team ( Angie Radtke / Robert Deutz )
 * @package Joomla
 * @subpackage Accessible-Template-Beez
 * @copyright Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant to the
 * GNU General Public License, and as distributed it includes or is derivative
 * of works licensed under the GNU General Public License or other free or open
 * source software licenses. See COPYRIGHT.php for copyright notices and
 * details.
 */


/* not ready */

h1,
#main h1
{
      font-size: 16pt;
      font-weight: bold;
      margin: 0.4em 0 0.5em 0;
      padding:0;
}

h2,
#main h2
{
      font-size: 14pt;
      font-weight: bold;
      margin: 0.2em 0 0.5em 0;
      padding: 0.3em 0.3em 0.3em 0;
}

h3
{
      font-size: 12pt;
      font-weight: bold;
      margin: 0.4em 0 0.2em 0;
}

/* Vermeidung von Seitenumbr�chen direkt nach einer �berschrift */
h1,
h2,
h3
{
      page-break-after: avoid;
}

body
{
  line-height:150%;
  font-family:Arial, Verdana, Helvetica, sans-serif;
}

p,
ul li, ol li,
address,
.category-desc,
table,
label,
dt,
dd
{
  font-size:10pt
}

address
{
	font-style:normal
}

.contact-address address span
{
	display:block
}

a
{

      font-weight: bold;
}

.unseen,
#line,
#header ul,
#breadcrumbs,
.article-info-term,
ul.actions,
#close,
.display-limit,
.moduletable_menu,
.moduletable_js,
.tabouter,
#bottom,
.pagination,
#footer,
#header-image

{
      display: none;
}

.skiplinks, #suckerfish
{
	display:none !important
}

#header .logoheader
{
	border:0
}

#header
{
      width: auto;
}

#all #back #header
{
padding-top:0
}


#all
{
      text-align:left;
      border:solid 0px #000
}

#back
{
  border:solid 0px #000;
  padding:0
}

#right
{
      display: block;
}

#header h1#logo
{
  font-size:20pt;
  font-weight:normal
}

#contentarea2,
#contentarea
{
	border: solid 0px #000;
	padding:0 !important
}

#main .blog-featured h1
{
  padding:0 !important;
}

#main #top
{
  overflow:hidden;
  margin-bottom:25pt;
  border:0
}

#main .categories-listalphabet ul
{
	padding-left:0
}

#main .categories-listalphabet ul li
{
	display:inline;
	padding:5pt;
	border-right:solid 1pt #ddd
}

#wrapper
{
	display:block;
	width:100% !important;
}

.item
{
  margin-bottom:30pt
}

.category-desc
{
	margin:15pt 0
}

.items-leading
{
	margin-bottom:30pt
}

#main .items-leading h2,
#main .item h2
{
      font-size: 14pt;
      font-weight: bold;
}

h2 a
{
	text-decoration:none
}

#main h1
{
	padding:5pt
}

#main .readmore a
{
  border:0 !important;
  padding-left:0 !important
}

.image-left {
	float:left;
	margin:0 15pt 5pt 0;
}

table
{
  margin:20pt 0;
  border-collapse:collapse;
  width:90%;
}

table td,
table th
{
  padding:2pt 5pt;
  border:solid 1pt #ddd
}

.items-more h3
{
	padding: 5pt 0;
	font-size:14pt
}

.items-more ol li a
{
	font-weight:normal
}

#nav a.readmore
{
  font-size:10pt
}

#nav .module_content
{
  margin-bottom:20pt;
  border:0 !important;
  padding:0 !important
}

#nav .moduletable ul.menu
{
	border:0;
	list-style-type:none;
	padding:0
}

#nav .moduletable ul.menu,
#nav .moduletable ul.menu ul,
#nav .moduletable ul.menu ul ul
{
	border:0;
	list-style-type:none
}

#nav .moduletable ul.menu ul,
#nav .moduletable ul.menu ul ul
{
	padding-left:15pt
}

#nav .moduletable ul.menu li
{
  border:0
}

#nav .moduletable ul.menu li a,
#nav .moduletable ul.menu li.active ul li a,
#nav .moduletable ul.menu li.active ul li.active ul li a
{
	text-decoration:none;
	border:solid 0px #000
}

ul#archive-items
{
	list-style-type:none;
	padding-left:0
}

.moduletable
{
  margin:20pt 0
}

dl.article-info
{
	line-height:120%;
	font-size:9pt
}

dl.article-info dd
{
	margin-left:0
}

h3.js_heading a img
{
  border:0
}

h3.js_heading,
#bottom h3,
.moduletable h3,
#nav h3
{
  font-size:12pt !important;
}

.category-list
{
	padding:0 !important;
}

.moduletable_js
{
  margin-bottom:20pt
}

.tabouter
{
  border:solid 0px ;
  overflow:hidden;
  margin:20pt 0
}

ul.tabs
{
  padding:0;
}

ul.tabs li.tab
{
  list-style-type:none;
  text-transform:uppercase;
  display:inline;
  border-right:solid 1pt #ddd;
  padding:2pt 10pt
}

ul.tabs li.tab a
{
  text-decoration:none;
}

.tabcontent
{
  padding:10pt
}

.contact-email div
{
	overflow:hidden
}

.contact-email label
{
	border:solid 0px #000;
	float:left;
	width:10em
}

.login div
{
	overflow:hidden
}

.login label
{
	float:left;
	width:10em
}

form fieldset dt
{
	clear:left;
	float:left;
	width:12em;
}

legend
{
	background:#fff;
	font-size:.85em
}

.phrases,
.only
{
	margin-bottom:15pt
}

.newsflash a.readmore:link
{
	border: solid 0pt ;
	font-weight:normal;
	font-size:0.8em;
	text-decoration:none
}

.stats dt
{
	float:left;
	width:10em
}

#footer-outer
{
  border:solid 0px;
  padding:0;
  background:none
}

#bottom
{
  text-align:left
}

#footer-outer #bottom .box .moduletable
{
  border-bottom:solid 1px #ddd;
  padding:10pt 0
}

#footer-outer #bottom .box1,
#footer-outer #bottom .box3
{
  border:0;
}

#bottom ul
{
  list-style-type:none;
  padding:0 !important
}

#bottom ul li
{
  border:solid 0px #c00
}


/*** beez5.css ***/

/*
 * @author ( Angie Radtke )
*/

/* not ready */

/* ##########################  general  ########################### */


@font-face {
	font-family: 'Titillium Maps';
	src: url("../fonts/TitilliumMaps29L002.eot");
	src: local('Titillium Maps'), local('TitilliumMaps'),
		url("../fonts/TitilliumMaps29L002.otf") format("opentype"),
		url("../fonts/TitilliumMaps29L002.woff") format("woff");
}

body
{
background: #eee url(../images/header_outer.jpg) repeat-x ;
color: #333;
font-family: arial, helvetica, sans-serif;
}

#all
{
color: #333;
border:solid 0px #ddd  !important ;

}
a:link,
a:visited
{
color:#7BA428
}

a:hover,
a:active,
a:focus
{
background:#669933;
color:#FFF;
}

input:focus
{
border:solid 2px;
}

fieldset
{
border:solid 0px #ccc
}

.article-info
{
color:#444;
}

.article-info dd span
{
color:#444;
border-right:solid 0px;

}
/* ##########################  logo  ########################### */
#header
{background:#fff}
#logo span
{
color:#555 !important;
margin-top:6px;
font-size:0.4em !important;
letter-spacing:1px
}

.logoheader
{
border-top:solid 5px #555;
color:#555;
background: #fff;

}

#header-image
{
min-height:20px;
background:#eee
}

h1#logo
{
margin:1.2em 20px 10px 20px;
font-size:3em;

}


#line
{
text-align:right;
margin-bottom:10px;
padding-right:20px
}

#header #line form,
#header #line #fontsize,
#header #line form .search
#header #line form .finder
{
display:inline !important;
}

/* ##########################  header  ########################### */


#header ul
{
max-width:1030px;
right:15px;
}

/* ++++++++++++++  lists, skiplinks  ++++++++++++++ */
#header ul.menu
{

margin-top:5px !important;
list-style-type:none
}

#header ul.menu li
{
border:0
}

#header ul.menu li a:link,
#header ul.menu li a:visited
{
color:#333;
border:0;
border-right:solid 1px #eee;
background:transparent;
padding:10px 15px;
}

#header ul.menu li a:hover,
#header ul.menu li a:active,
#header ul.menu li a:focus
{
color:#444;
background:#ddd
}

#header ul.menu li.active a:link,
#header ul.menu li.active a:visited
{
color:#fff;
border-right:solid 1px #237D85;
background:#7ba428 !important
}

#header ul.skiplinks
{
width:100%
}
.skiplinks,
.skiplinks li
{
	border:solid 0px #000;
}

#header ul.skiplinks
{
	width:100%;
	text-align:left;
	background:none;
	z-index:20000;
	top:0;
	display:inline;
	padding:0
}

#header ul.skiplinks li a.u2:active,
#header ul.skiplinks li a.u2:focus

{
	background:#333 !important;
	color:#fff !important;
	border:solid 1px;
	top:0px !important;
	z-index:1000000000000 !important;
	left:10px !important;
	display:block;
		width:14em;
		display:block
}

/* ++++++++++++++  fontsize  ++++++++++++++ */

#fontsize
{
	color:#444;
}

#fontsize p a:link,
#fontsize p a:visited
{
	color:#444
}

#fontsize p a:hover,
#fontsize p a:active,
#fontsize p a:focus
{
	background:#555;
	color:#fff
}

#fontsize h3
{
	color:#444;
}


/* ++++++++++++++  search  ++++++++++++++ */

#header form .inputbox
{
	background:#fff !important;
}

#header form .inputbox:focus
{
	border:solid 2px #000;
}

#header form .button
{
	border:solid 1px #999;
	background:#664335 url(../images/searchbutton.png) ;
	color:#fff;
}

/* ##########################  contentarea  ########################### */

#top
{
		background:#eee;
		padding:15px;
		border:solid 1px #ddd
}

#contentarea,
#contentarea2
{
	background:#fff url(../images/box1.png) repeat-x;
}


/* ##########################  breadcrumbs  ########################### */

#breadcrumbs
{
	color:#555;
}

#breadcrumbs span
{
	color:#555;
}

#breadcrumbs span a:link,
#breadcrumbs span a:visited
{
	background:#fff;
	color:#7BA428;
}

#breadcrumbs span a:hover,
#breadcrumbs span a:active,
#breadcrumbs span a:focus
{
	background:#7BA428;
	color:#fff;
}


/* ##########################  navigation column  ########################### */

.module_content
{
	border:solid 1px #ddd;
	background:#fff
}
.moduletable_js
{
	border:solid 0px #ddd;
}

#right .moduletable_js
{
	border:0
}

#nav h3
{
	border-bottom:solid 1px #ddd;
	color:#444;
}

h3.js_heading
{
	border-bottom:solid 1px #fff !important;
	background:#eee;
	font-family: 'Titillium Maps', Arial;
}

h3.js_heading span.backh
{
	border:solid 0px #000
}

h3.js_heading span.backh1
{
	color:#444
}

#right h3
{
	color:#377A2E;
	border-bottom:solid 1px #ddd;
}

#right h3 span.backh
{

}

#right h3 span.backh2
{

}

#right h3 span.backh3
{
	color:#664335
}

h3.js_heading a
{
	border:0
}

h3.js_heading a img
{
	border:0
}

h3.js_heading a.opencloselink:hover,
h3.js_heading a.opencloselink:active,
h3.js_heading a.opencloselink:focus
{
	background:none
}

h3.js_heading a:link,
h3.js_heading a:visited,
h3.js_heading a:hover,
h3.js_heading a:active,
h3.js_heading a:focus
{

}

#nav h3
{
	font-family: 'Titillium Maps', Arial;
}

#nav h3.js_heading a:focus
{

}

#nav form
{
	color:#000;
}

#nav form a:hover,
#nav form a:active,
#nav form a:focus
{
	color:#fff;
	background:#669933;
}

/* ++++++++++++++  first level  ++++++++++++++ */
#nav .moduletable-example ul.menu
{
	background:#fff;
	border:0;
}

ul.menu
{
	border:0;
	background:#fff /* url(../images/nav_level_1.gif) repeat-x */;
	border:solid 0px #eee;
}

.module_content ul.menu
{
	border:0;
}

ul.menu li
{
	border-bottom:solid 1px #ddd;
}


ul.menu li a:link,
ul.menu li a:visited
{
	color:#444;
	background:url(../images/karo.gif) 5px 12px no-repeat
}

ul.menu li.active a:link,
ul.menu li.active a:visited
{
	color:#333;
}

ul.menu li a:hover,
ul.menu li a:active,
ul.menu li a:focus,
ul.menu li.active a:hover,
ul.menu li.active a:active,
ul.menu li.active a:focus
{
	background: #fff url(../images/nav_level_1.gif) repeat-x ;
	color:#638420 ;
}


/* ++++++++++++++  second level  ++++++++++++++ */

ul.menu li ul
{
	border:solid 0px #eee;
}

 ul.menu li ul li
{
	border:solid 0px #000;
	background:#fff;
}

 ul.menu li.active ul li a:link,
 ul.menu li.active ul li a:visited
{
	color:#444;
	border:0;
	border-bottom:solid 1px #fff;
	background: #e8e8e8
}

 ul.menu li.active ul li.active a:link,
 ul.menu li.active ul li.active a:visited
{
	border:0;
	color:#333;
	border-bottom:solid 1px #fff;
}

 ul.menu li.active ul li a:hover,
 ul.menu li.active ul li a:active,
 ul.menu li.active ul li a:focus
{
	background:#666 !important;
	color:#fff !important;
}


/* ++++++++++++++  third level  ++++++++++++++ */

ul.menu li ul li ul
{
	border:0 !important;
	background:#f5f5f5 !important;
	padding-bottom:0
}

ul.menu li.active ul li.active ul li a:link,
ul.menu li.active ul li.active ul li a:visited
{
	background:#f5f5f5 ;
	border-bottom:solid 1px #fff;
	color:#444
}

ul.menu li.active ul li.active ul li.active a:link,
ul.menu li.active ul li.active ul li.active a:visited
{
	color:#333;
}



/* ++++++++++++++  fourth level  ++++++++++++++ */

ul.menu li ul li ul li ul
{
	border:solid 1px #eee !important;
	padding-top:10px !important;
	padding-bottom:10px !important;
	background:#fff url(../images/level4.png) repeat-x !important;
}


ul.menu li.active  ul li.active  ul li.active  ul li  a:link,
ul.menu li.active  ul li.active  ul li.active  ul li a:visited
{
	font-weight:normal;
	padding: 3px 2px 3px 40px;
	font-size:0.9em;
	background:#fff url(../images/arrow_small.png) no-repeat  30px 5px;
	color:#444
}


ul.menu li.active  ul li.active  ul li.active  ul li.active  a:link,
ul.menu li.active  ul li.active  ul li.active  ul li.active a:visited
{font-weight:bold;
color:#333 }



/* ++++++++++++++  fifth level  ++++++++++++++ */

ul.menu li ul li ul li ul li ul
{
	border:solid 0px #eee !important;
	padding-top:5px !important;
	padding-bottom:10px !important;
	background:#fff url(../images/level4.png) repeat-x !important;
}


ul.menu li.active  ul li.active  ul li.active  ul li.active	ul li  a:link,
ul.menu li.active  ul li.active  ul li.active  ul li.active	ul li a:visited
{
	font-weight:normal;
	padding: 3px 2px 3px 5px;
	font-size:0.9em;
	background:#fff ;
	color:#444;
	margin:0 10px  0 35px;
	border-bottom:solid 1px #ddd
}


ul.menu li.active  ul li.active  ul li.active  ul li.active  ul li.active  a:link,
ul.menu li.active  ul li.active  ul li.active  ul li.active  ul li.active a:visited
{font-weight:bold; color:#333}


/* ##########################  content - main   ########################### */


#main
{

min-height:300px

}

#main a:link,
#main a:visited
{

}

#main a:hover,
#main a:active,
#main a:focus
{
	background:#7BA428;
	color:#fff;
}

#main th a:hover,
#main th a:active,
#main th a:focus
{
	background:#333;
	color:#fff;
}

.items-row
{

}

.column-1,
.column-2
{
	border: solid 0px;
}

.item-separator
{
	border: solid 0px #333333;
}

#main ul li
{

}

.small
{
	border:solid 0;
}

ul#archive-items li.row0,
ul#archive-items li.row1
{
	border-bottom:solid 1px #ddd
}

.archive #adminForm fieldset
{
	border:0;
	padding:0;
	margin:20px 0
}

/* ++++++++++++++  images  ++++++++++++++ */

.image-left
{
		padding:2px;
}

.image-right
{
	  border:solid 1px #ddd;
		padding:2px
}


/* ++++++++++++++  leading  ++++++++++++++ */

.items-row
{

}


/* ++++++++++++++++++++ headings +++++++++++++ */

#main h1
{
	color:#444;
	border-top:solid 0px #ddd;
	border-bottom:solid 1px #ddd;
	 font-family: 'Titillium Maps', Arial;

}

/* h1 on frontpage */
/*
#main .blog-featured h1
{
	border-top:solid 0px #ddd;
	border-bottom:solid 0px #ddd;
}
*/
.items-row h2
{
	color:#7BA428;
	border-top:solid 1px #ddd;
	border-bottom:solid 1px #ddd;
}
.items-row h2 a:link,
.items-row h2 a:visited,
.items-leading h2 a:link,
.items-leading h2 a:visited
{
	color:#7BA428 !important;
}



.items-row h2 a:hover,
.items-row h2 a:active,
.items-row h2 a:focus,
.items-leading h2 a:hover,
.items-leading h2 a:active,
.items-leading h2 a:focus
{color:#fff !important;
text-decoration:none !important
}





.items-leading h2
{
	color:#7BA428;
}

#main h2
{
	color:#7BA428;
	font-family: 'Titillium Maps', Arial;

}

#main h2 a
{
	color:#333;
}


/* ++++++++++++++  readmore  ++++++++++++++ */

.readmore a:link,
.readmore a:visited,
a.readmore:link,
a.readmore:visited
{
	color:#444;
	background:#eee url(../images/arrow1.gif) no-repeat left top;
	border:solid 1px #ddd;
}

.readmore a:hover,
.readmore a:active,
.readmore a:focus,
a.readmore a:hover,
a.readmore a:active,
a.readmore a:focus
{
	background:#555 url(../images/arrow2.gif) no-repeat left 6px !important;
	color:#fff;
}

a.readmore:hover,
a.readmore:active,
a.readmore:focus
{
	background:#555;
	color:#fff;
}

/* ++++++++++++++  icons  ++++++++++++++ */

.actions img
{
	border:0;
}

/* ++++++++++++++  items-more  ++++++++++++++ */

#main .items-more h3
{
	border-bottom:solid 1px #ddd;
	border-top:solid 1px #ddd;
	color:#444;
}

#main .items-more ol
{
	color:#000;
}

#main .items-more ol li a
{
	background:#FFF url(../images/blog_more.gif) no-repeat  !important;
	color: #7BA428 /* #377A2E */
}

#main .items-more ol li a:hover,
#main .items-more ol li a:active,
#main .items-more ol li a:focus
{
	background: #555 url(../images/arrow2.gif) no-repeat 0px center;
	color:#333;
}

/* ++++++++++++++  pagination  ++++++++++++++ */

#main .pagination
{
	border-top:solid 1px #ddd;
}


/* ++++++++++++++  article index  ++++++++++++++ */

table.contenttoc
{
	border:solid 1px #ccc;
}


/* ##########################  right column   ########################### */

#right
{

}

#right .moduletable
{
	border:solid 0px #eee;
	border-top:0;
		margin-bottom:10px;

}

#right h3
{
	color:#333
}

#right h4
{
	color:#444;
	border:solid 0;
}

#right ul
{
	border:solid 0 #ccc;
	color:#333;
}

.moduletable-custom ul li
{
	color:#333;
	background: url(../images/arrow2_grey.png) no-repeat  2px 7px;
}

#right .moduletable-custom h4
{
color:#444
}

#right .moduletable a img
{border:0}

/* ++++++++++++++  button for closing right column  ++++++++++++++ */
#close span
{
	color:#000;
}

/* ##########################  modules  ########################### */

/* ++++++++++++++  mostread, latest news ++++++++++++++ */

.mostread li a:link,
.mostread li a:visited,
.latestnews li a:link,
.latestnews li a:visited
{
	background: url(../images/arrow2_grey.png) 2px 7px  no-repeat ;
}

.mostread li a:hover,
.latestnews li a:hover,
.mostread li a:active,
.latestnews li a:active,
.mostread li a:focus,
.latestnews li a:focus
{
	background:#555 url(../images/arrow_white_grey.png) 2px 6px  no-repeat !important;
}

/* ++++++++++++++  newsfeed  ++++++++++++++ */

ul.newsfeed
{
	border:solid 0px #000;
}

.newsfeed-item
{
	border-bottom:solid 1px #ddd;
}

.newsfeed-item h5 a
{

}

/* ++++++++++++++  newsflash  ++++++++++++++ */
/* newsflash horizontal */

ul.newsflash-horiz
{
	border:solid 1px #eee;
	background:#f5f5f5 url(../images/box.png) repeat-x;
}

.newsflash-horiz li
{
	border:solid 0px #eee;
	background:#f5f5f5;
}

ul.newsflash-horiz li h4
{
	border-bottom:solid 1px #fff;
	font-family: 'Titillium Maps', Arial;
}

/* newsflash vertical */

.newsflash-vert
{

}

/* ++++++++++++++  banner  ++++++++++++++ */

.banneritem
{
	border:0
}

.banneritem a
{
	background:none
}

.banneritem a img
{
	background:none;
	border:0
}

/* ++++++++++++++  login  ++++++++++++++ */

#login-form .inputbox
{
	border:solid 1px #ddd;
	background:url(../images/content_bg.gif) repeat-x;
}

fieldset.input
{
	border:0;
}

input.button,
button.button
{
	background:#FFFFFF url(../images/arrow1.gif) no-repeat left top;
	border:1px solid #DDDDDD;
	color:#444444;
}


/* ++++++++++++++  tabs/ slide  ++++++++++++++ */

ul.tabs
{
	border:solid 1px #ddd;
	border-bottom:0;
	background:#f5f5f5 url(../images/box.png) repeat-x;
}

ul.tabs li
{
	background:#f5f5f5 url(../images/box.png) repeat-x;
	border-right:solid 1px #ddd
}

ul.tabs li a:link,
ul.tabs li a:visited
{
	color:#333;
}

ul.tabs li a:hover,
ul.tabs li a:active,
ul.tabs li a:focus
{
	color:#000
}

.tabcontent
{
	border:solid 1px #ddd;
	background:#fff;
	color:#000;
}

.tabcontent .linkclosed
{
	color:#000;
	border-bottom:solid 1px #e5e5e5;
}

ul.tabs li a.linkopen
{
	background:#fff;
	color:#333;
	border:0
}

ul.tabs li a.linkclosed:hover,
ul.tabs li a.linkclosed:active,
ul.tabs li a.linkclosed:focus,
ul.tabs li a.linkopen:hover,
ul.tabs li a.linkopen:active,
ul.tabs li a.linkopen:focus
{
	background:#555;
	color:#fff
}


/* ++++++++++++++  category-module  ++++++++++++++ */

.category-module li
{
	border-bottom:solid 1px #ddd;
}

.category-module li li
{
	border:0
}

/* ##########################  search   ########################### */

.searchintro img
{
	border:0px
}

.inputbox:focus
{
	border:solid 2px #000;
}

.word
{
	background:#fff;
	border:solid 0px #ccc ;
}

.word input
{
	background:#fff;
	border:solid 1px #999;
	color:#444;
}

.only
{
	border:solid 1px #ccc;
}

.phrases
{
	border:solid 1px #ccc;
}

/* ++++++++++++++  selects  ++++++++++++++ */
.phrases .inputbox
{
	background:#fff;
	color:#000;
}

.phrases .inputbox option
{
	background:#f5f5f5;
	border-bottom:solid 1px #ccc;
}

.phrases .inputbox option a:hover
{
	background:#C00;
	border-color:#CFD0D6;
	color:#fff;
}

/* ++++++++++++++  search results	++++++++++++++++++ */

dl.search-results
{
	background:#f5f5f5;
}

dl.search-results dt.result-title
{
	border-top:dotted 1px #ddd
}

dl.search-results dd.result-url
{
	border-bottom:solid 5px #fff;
	color:#115599;
}

dl.search-results dd.result-created
{
	border-bottom:solid 5px #fff;
}

/* ##########################  forms   ########################### */

/* ++++++++++++++  form validation  ++++++++++++++ */

.invalid
{
	border-color:red !important;
}

label.invalid
{
	color:red;
}

/* ##########################  user profile  ########################### */

#users-profile-core,
#users-profile-custom
{
	border:solid 1px #ccc;
}

#member-profile fieldset
{
	border:solid 1px #ccc;
}


/* ##########################  tables   ########################### */
table
{
	border:solid 1px #ddd !important
}

tbody
{

}

tr.odd,
.cat-list-row1
{
	background:url(../images/news.gif)  repeat-x;
}

table.newsfeeds td,
table.weblinks td
{

}

table.weblinks th,
table.newsfeeds th,
table.category th,
table.jlist-table th
{
	background:#444;
	color:#fff
}

table.weblinks th a,
table.newsfeeds th a,
table.category th a,
table.jlist-table th a
{
	color:#fff !important
}

td.table_footer
{
	background:#ddd url(../images/table_footer.gif) bottom left repeat-x;
}

td.counter
{

}

td.num,
td.hits
{

}

td p
{

}

table.category th a img
{
	border:solid 0px ;
}

/* for opera */
tr, td
{
	border:solid 1px #ddd
}

fieldset.filters
{
	border:0;
}


/* ##########################  contacts   ########################### */

.contact form
{
	background:#fff;
	color:#000;
}

.contact input
{
	background:#fff;
	color:#000;
}

.contact input.invalid,
.contact textarea.invalid
{
	border:solid 2px red;
}

.contact label.invalid
{
	color:red;
}


/* ++++++++++++++  Error Message contact form  ++++++++++++++ */

p.error
{
	color:#044b63;
	background:#eee;
	border-top:3px solid #044b63;
	border-bottom:3px solid #044b63;
}

body.contentpane
{
	background:#fff;
}


/* ##########################  footer   ########################### */

#footer
{

	background:#333333 url(../images/tabs_back.png) repeat-x;
	color:#fff;
	border-top:solid 0px #ccc;

}

#footer-inner
{
	background:#f5f5f5 url(../images/footer.jpg) repeat-x left bottom;
	border-top:solid 1px #ddd
}

#footer-sub a:link,
#footer-sub a:visited
{color:#fff}



.box1
{
	border-right:solid 1px #ddd
}

.box3
{
	border-left:solid 1px #ddd;
}

.box h3
{
	font-family: 'Titillium Maps', Arial;
}

#bottom a img
{
	border:0 none;
}



/* ##########################  editor  ########################### */

.contentpaneopen_edit img
{
	border:0
}

form.editor fieldset
{
	border:solid 1px #ccc;
}


/* ++++++++++++++  edit  ++++++++++++++ */

form#adminForm
{
	border:solid 0px #000
}

.edit form#adminForm fieldset
{
	border:solid 1px #ddd
}

legend
{font-weight:bold}
/* ++++++++++++++  tooltip  ++++++++++++++ */
.tip
{
	border:solid 1px #333;
	background:#ffffcc;
}
table.pagenav,
table.pagenav tr,
table.pagenav td
{border:0 !important}

#main .categories-list ul
{list-style-type:none}

/* contact  plain */
#main .contact h3
{
	border-bottom:solid 1px #ddd;
	margin: 20px 0
}

.form-required
{
	font-weight:bold;
	margin:10px 0;
	background:#fff url(../images/req.png) no-repeat;
	padding:10px 40px

}

.contact .inputbox
{
	background:#fff url(../images/content_bg.gif) repeat-x ;
	border:solid 1px #ccc;
	padding:3px
}
/* contact  slider */

.panel
{
	border:solid 1px #ddd;
	margin-top:-1px

}
#main .contact .panel h3
{
	margin:0px 0 0px 0;
	padding: 0;
	background:#eee;
	border:0
}
.panel h3 a
{
	display:block;
	padding:6px;
	text-decoration:none;
	color:#444;
	padding:6px;
}


.panel h3.pane-toggler a
{
	background:#f5f5f5 url(../images/slider_plus.png) right  top no-repeat;
}
.panel h3.pane-toggler-down a
{
	background:#f5f5f5  url(../images/slider_minus.png) right  top no-repeat;
	border-bottom:solid 1px #ddd;
}

.pane-slider
{
	border:solid 0px;
	padding:0px 10px !important;
	margin:0;
	background: url(../images/nav_level_1.gif) repeat-x ;
}

.panel .contact-form,
.panel  .contact-miscinfo
{
	padding:10px
}

.contact .panel .contact-form form,
.contact .panel .contact-address
{
	margin:20px 0 0 0
}

.categories-list .category-desc ul li
{list-style-type:square
}
/* tabs */

div.current
{

	background: url(../images/nav_level_1.gif) repeat-x ;
}

#close a
{text-decoration:none}

/*Encyclopedia*/
div.encyclopedia_col1 {
	width:49%;
	float:left;

}
div.encyclopedia_col1 p.img_caption {
	font-size: .6em;
}
div.encyclopedia_col2 {
	width:49%;
	float:right;
	padding-left:3px;
	margin-left: 2px;
}
div.encyclopedia_col2 p {
	padding-left:3px;
	margin-left: 2px;
}

div.encyclopedia_links ul
{
        display:block;
        margin:0px 0px 1px 0px;
        list-style-type:none;
        padding:10px 0px 10px 0px;
        width:100%
}
div.encyclopedia_links ul li
{
        display:inline ;
        padding:2px ;
        margin:2px;
        white-space:nowrap;

}
/* ########################## sample module styling  ########################### */

div.sample-module {
    border: 2px dashed #ddd;
    padding: 10px;
    background-color: #f5f5f5;
}

/*** general.css ***/

/* not ready */

/* -- form validation */
.invalid { border-color: #ff0000; }
label.invalid { color: #ff0000; }

/* -- buttons */
#editor-xtd-buttons {
        padding: 0px;
}

.button2-left,
.button2-right,
.button2-left div,
.button2-right div {
        float: left;
}

.button2-left a,
.button2-right a,
.button2-left span,
.button2-right span {
        display: block;

        float: left;


        color: #666;
        cursor: pointer;
}

.button2-left span,
.button2-right span {
        cursor: default;
        color: #999;
}

.button2-left .page a,
.button2-right .page a,
.button2-left .page span,
.button2-right .page span {
        padding: 0 6px;
}

.page span {
        color: #000;
        font-weight: bold;
}

.button2-left a:hover,
.button2-right a:hover {
        text-decoration: none;
        color: #0B55C4;
}

.button2-left a,
.button2-left span {
        padding: 0 24px 0 6px;
}

.button2-right a,
.button2-right span {
        padding: 0 6px 0 24px;
}

.button2-left {
        float: left;
        margin-left: 5px;
}

.button2-right {

        float: left;
        margin-left: 5px;
}

.button2-left .image {

}

.button2-left .readmore {

}

.button2-left .pagebreak {

}

/* Tooltips */
div.tooltip {
        float: left;
        background: #ffc;
        border: 1px solid #D4D5AA;
        padding: 5px;
        max-width: 200px;
}

div.tooltip h4 {
        padding: 0;
        margin: 0;
        font-size: 95%;
        font-weight: bold;
        margin-top: -15px;
        padding-top: 15px;
        padding-bottom: 5px;

}

div.tooltip p {
        font-size: 90%;
        margin: 0;
}

/* Caption fixes */
.img_caption .left {
        float: left;
        margin-right: 1em;
}

.img_caption .right {
        float: right;
        margin-left: 1em;
}

.img_caption .left p {
        clear: left;
        text-align: center;
}

.img_caption .right p {
        clear: right;
        text-align: center;
}

.img_caption  {
	text-align: center!important;
}

.img_caption.none {
	margin-left:auto;
	margin-right:auto;
}


/* Calendar */
a img.calendar {
        width: 16px;
        height: 16px;
        margin-left: 3px;
        cursor: pointer;
        vertical-align: middle;
}

/* System Messages */

.error
{
        padding:0px;
        margin-bottom: 20px;
}

.error h2
{
        color:#000 !important;
        font-size:1.4em !important;
        text-transform:uppercase;
        padding:0 0 0 0px !important
}

#system-message
{
                margin:10px 0 20px 0;
                border-left:0;
                border-right:0;
}

#system-message dt
{
	font-weight: bold;
}
#system-message dd
{
	margin: 0 0 15px 0;
	font-weight: bold;
	text-indent: 0px;
	padding:0
}
#system-message dd ul
{
	color: #000;
	list-style: none;
	padding: 0px;
}
#system-message dd ul li
{
	line-height:1.5em
}

/* System Standard Messages */
#system-message dt.message
{
	position:absolute;
	top:-2000px;
	left:-3000px;
}

#system-message dd.message  ul
{
	background: #fff  url(../images/system/notice-info.png) no-repeat;
	padding-left:40px;
	padding: 10px 10px 10px 40px;
	border-top: 2px solid #90B203;
	border-bottom: 2px solid #90B203;
}

#system-message dd.message ul li{background:none !important}

/* System Error Messages */
#system-message dt.error
{
	position:absolute;
	top:-2000px;
	left:-3000px;
}

#system-message dd.error ul
{
	background:#fff url(../images/system/notice-alert.png) no-repeat ;
	padding-left:40px;
 	padding: 10px 10px 10px 40px;
    border-top: 2px solid #990000;
    border-bottom: 2px solid #990000;
}



/* System Notice Messages */
#system-message dt.notice
{
	position:absolute;
	top:-2000px;
	left:-3000px;
}

#system-message dd.notice  ul
{
		background:#fff url(../images/system/notice-note.png) no-repeat ;
		padding-left:40px;
	    padding: 10px 10px 10px 40px;
	    border-top: 2px solid #FAA528;
	    border-bottom: 2px solid #FAA528;
}
#system-message dd.notice ul { color: #000;margin:10px 0 }

#system-message
{
    margin-bottom: 0px;
    padding: 0;
}

#system-message dt
{
    font-weight: bold;
}

#system-message dd
{
    font-weight: bold;
    padding: 0;
}
