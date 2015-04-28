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

/*** screen.css ***/

/* --------------------------------------------------------------

   fancy-type.css
   * Lots of pretty advanced classes for manipulating text.

   See the Readme file in this folder for additional instructions.

-------------------------------------------------------------- */

/* Indentation instead of line shifts for sibling paragraphs. */
   p + p { text-indent:2em; margin-top:-1.5em; }
   form p + p  { text-indent: 0; } /* Don't want this in forms. */


/* For great looking type, use this code instead of asdf:
   <span class="alt">asdf</span>
   Best used on prepositions and ampersands. */

.alt {
  color: #666;
  font-family: "Warnock Pro", "Goudy Old Style","Palatino","Book Antiqua", Georgia, serif;
  font-style: italic;
  font-weight: normal;
}


/* For great looking quote marks in titles, replace "asdf" with:
   <span class="dquo">&#8220;</span>asdf&#8221;
   (That is, when the title starts with a quote mark).
   (You may have to change this value depending on your font size). */

.dquo { margin-left: -.5em; }


/* Reduced size type with incremental leading
   (http://www.markboulton.co.uk/journal/comments/incremental_leading/)

   This could be used for side notes. For smaller type, you don't necessarily want to
   follow the 1.5x vertical rhythm -- the line-height is too much.

   Using this class, it reduces your font size and line-height so that for
   every four lines of normal sized type, there is five lines of the sidenote. eg:

   New type size in em's:
     10px (wanted side note size) / 12px (existing base size) = 0.8333 (new type size in ems)

   New line-height value:
     12px x 1.5 = 18px (old line-height)
     18px x 4 = 72px
     72px / 5 = 14.4px (new line height)
     14.4px / 10px = 1.44 (new line height in em's) */

p.incr, .incr p {
  font-size: 10px;
  line-height: 1.44em;
  margin-bottom: 1.5em;
}


/* Surround uppercase words and abbreviations with this class.
   Based on work by Jørgen Arnor Gårdsø Lom [http://twistedintellect.com/] */

.caps {
  font-variant: small-caps;
  letter-spacing: 1px;
  text-transform: lowercase;
  font-size:1.2em;
  line-height:1%;
  font-weight:bold;
  padding:0 2px;
}
