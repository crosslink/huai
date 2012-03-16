<?php
/**
 * @version $Id: message.contents.php 3525 2010-09-19 07:28:35Z mahagr $
 * Kunena Component
 * @package Kunena
 *
 * @Copyright (C) 2008 - 2010 Kunena Team All rights reserved
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.com
 *
 **/

// Dont allow direct linking
defined ( '_JEXEC' ) or die ();
?>

<div class="kmsgbody">
	<div class="kmsgtext">
		<?php echo $this->messageHtml ?>
	</div>
</div>
<?php $this->displayAttachments() ?>