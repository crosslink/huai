<?php


// Dont allow direct linking
defined ( '_JEXEC' ) or die ();

if (!isset($this->showUnusedSocial)) $this->showUnusedSocial = false;
?>
	
<ul id="kpost-profiletop">
	
<div id="ckepop" class="jiathis">



<span class="kfooter-time">
		&nbsp;&nbsp;	<a name="<?php echo intval($this->id) ?>"></a>
			<?php echo $this->numLink ?> F&nbsp;&nbsp;
		
			<?php echo CKunenaLink::GetProfileLink ( intval($this->profile->userid), $this->escape($this->username) ); ?>&nbsp;&nbsp;</span><span class="kfooter-time" title="<?php echo CKunenaTimeformat::showDate($this->msg->time, 'config_post_dateformat_hover') ?>">   
			<?php echo CKunenaTimeformat::showDate($this->msg->time, 'config_post_dateformat') ?>
</span>


	<span class="kfooter-time">
<!-- JiaThis Button BEGIN -->

	&nbsp;&nbsp;&nbsp;<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt" target="_blank"><img src="http://v2.jiathis.com/code_mini/images/btn/v1/jiathis1.gif" border="0" /></a>
	<a class="jiathis_counter_style_margin:3px 0 0 2px"></a>

<script type="text/javascript" src="http://v2.jiathis.com/code_mini/jia.js" charset="utf-8"></script>
<!-- JiaThis Button END -->
</span>

	
			
		</div>
	</ul>


