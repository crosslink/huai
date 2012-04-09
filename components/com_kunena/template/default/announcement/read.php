<?php

defined( '_JEXEC' ) or die();

$document = JFactory::getDocument();
$document->setTitle(JText::_('COM_KUNENA_ANN_ANNOUNCEMENTS') . ' - ' . $this->config->board_title);
?>
<div class="kblock kannouncement">
	<div class="kheader">
		<h2>
			<span><?php echo KunenaParser::parseText($this->announcement->title); ?></span>
		</h2>
	</div>
	
</div>