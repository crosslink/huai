<?php

defined( '_JEXEC' ) or die();
?>
<!-- ANNOUNCEMENTS BOX -->
<div class="kblock kannouncement">
	<div class="kheader">
		<span class="ktoggler"><a class="ktoggler close" title="<?php echo JText::_('COM_KUNENA_TOGGLER_COLLAPSE') ?>" rel="kannouncement"></a></span>
		<h2><?php echo CKunenaLink::GetAnnouncementLink( 'read', $this->id, KunenaParser::parseText($this->announcement->title), JText::_('COM_KUNENA_ANN_READMORE'),'follow'); ?></h2>
	</div>
	
</div>
<!-- / ANNOUNCEMENTS BOX -->