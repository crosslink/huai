<?php


// Dont allow direct linking
defined ( '_JEXEC' ) or die ();

if (!isset($this->showUnusedSocial)) $this->showUnusedSocial = false;
?>
	
<ul id="kpost-profiletop">
	


<span>
		&nbsp;&nbsp;	<a name="<?php echo intval($this->id) ?>"></a>
			<?php echo $this->numLink ?> F&nbsp;&nbsp;
		
			<?php echo CKunenaLink::GetProfileLink ( intval($this->profile->userid), $this->escape($this->username) ); ?>&nbsp;&nbsp;</span><span class="kfooter-time" title="<?php echo CKunenaTimeformat::showDate($this->msg->time, 'config_post_dateformat_hover') ?>">   
			<?php echo CKunenaTimeformat::showDate($this->msg->time, 'config_post_dateformat') ?>
</span>


	
			
		
	</ul>


