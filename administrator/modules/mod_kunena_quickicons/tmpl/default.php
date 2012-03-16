<?php
/**
 * @version		$Id$
 * @package		K2
 * @author		JoomJunk
 * @copyright	Copyright (c) 2011 - JoomJunk
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

?>

<div id="KunenaQuickIcons">

<div class="kunenaclr"></div>

<div id="kunenaQuickIconsTitle">
	<a href="index.php?option=com_kunena" title="<?php echo JText::_('Kunena Control Panel'); ?>">
		<span>My Site Forum Setting</span>
	</a>
</div>

<div id="kunenaQuickIcons">
	<?php if(file_exists($quickIconsFile)) @ include($quickIconsFile); ?>
	<div class="kunenaclr"></div>
</div>

<div class="kunenaclr"></div>

</div>
