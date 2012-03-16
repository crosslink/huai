<?php
/**
 * @version		$Id$
 * @package		K2
 * @author		JoomJunk
 * @copyright	Copyright (c) 2011 - JoomJunk
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */
 
 /**
 * @modified to adapt for Kunena Quickicons by JoomJunk
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// Get user group ID
$user= &JFactory::getUser();

?>
 <?php if ($user->gid>23): ?>
  <div style="float:left;">
    <div class="icon">
	    <a href="index.php?option=com_kunena">
		    <img alt="<?php echo JText::_('Kunena Control Panel'); ?>" src="modules/mod_kunena_quickicons/icons/control.png" />
		    <span><?php echo JText::_('Control Panel'); ?></span>
	    </a>
    </div>
  </div>
   <?php endif; ?>
  <div style="float:left;">
    <div class="icon">
	    <a href="index.php?option=com_kunena&task=showconfig">
		    <img alt="<?php echo JText::_('Kunena Configuration'); ?>" src="modules/mod_kunena_quickicons/icons/kconfig.png" />
		    <span><?php echo JText::_('Configuration'); ?></span>
	    </a>
    </div>
  </div>

	<div style="float:left;">
    <div class="icon">
	    <a href="index.php?option=com_kunena&task=showAdministration">
		    <img alt="<?php echo JText::_('Kunena Catagory Manager'); ?>" src="modules/mod_kunena_quickicons/icons/kforumadm.png" />
		    <span><?php echo JText::_('Catagory Manager'); ?></span>
	    </a>
    </div>
  </div>

  <div style="float:left;">
    <div class="icon">
	    <a href="index.php?option=com_kunena&task=showprofiles">
		    <img alt="<?php echo JText::_('Kunene Users'); ?>" src="modules/mod_kunena_quickicons/icons/kuser.png" />
		    <span><?php echo JText::_('Users'); ?></span>
	    </a>
    </div>
  </div>
  
    <?php if ($user->gid>23): ?>
	<div style="float:left;">
    <div class="icon">
	    <a href="index.php?option=com_kunena&task=showTemplates">
		    <img alt="<?php echo JText::_('Kunena Template Manager'); ?>" src="modules/mod_kunena_quickicons/icons/templatemanager.png" />
		    <span><?php echo JText::_('Templates'); ?></span>
	    </a>
    </div>
  </div>
 <?php endif; ?>
 
  <?php if ($user->gid>23): ?>
	<div style="float:left;">
    <div class="icon">
	    <a href="index.php?option=com_kunena&task=ranks">
		    <img alt="<?php echo JText::_('Kunena Ranks'); ?>" src="modules/mod_kunena_quickicons/icons/kranks.png" />
		    <span><?php echo JText::_('Ranks'); ?></span>
	    </a>
    </div>
  </div>
  <?php endif; ?>