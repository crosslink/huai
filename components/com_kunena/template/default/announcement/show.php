<?php
/**
* @version $Id$
* Kunena Component
* @package Kunena
*
* @Copyright (C) 2008 - 2011 Kunena Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @link http://www.kunena.org
**/
// Dont allow direct linking
defined( '_JEXEC' ) or die();

$document=JFactory::getDocument();
$document->setTitle(JText::_('COM_KUNENA_ANN_ANNOUNCEMENTS') . ' - ' . $this->config->board_title);
//FIXME: announcement show only 5 ann. in table
?>
<div class="kblock">
	<div >
		
			<span>
				<?php echo $this->app->getCfg('sitename'); ?>
				<?php echo JText::_('COM_KUNENA_ANN_ANNOUNCEMENTS'); ?>
				<?php
				if ($this->canEdit)
					echo "| " . CKunenaLink::GetAnnouncementLink('add', NULL, JText::_('COM_KUNENA_ANN_ADD'), JText::_('COM_KUNENA_ANN_ADD'));
				?>
			</span>
		
	</div>
	
</div>