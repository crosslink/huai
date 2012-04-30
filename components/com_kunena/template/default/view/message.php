<?php


// Dont allow direct linking
defined ( '_JEXEC' ) or die ();
//TODO: Split this file
if ($this->params->get('avatarPosition') == 'top') : ?>


<table <?php echo $this->class ?>>
	<tbody>
		<tr>
			<td class="kprofile-top">
				<?php $this->displayProfile('horizontal') ?>
             
			</td>
		</tr>
		<tr>
			<td class="kmessage-top">	
		
	
				<?php $this->displayContents() ?>
			</td>
		</tr>
		<tr>
			<td class="kbuttonbar-top">
				<?php $this->displayActions() ?>
				<?php $this->displayThankyou() ?>
			</td>
		</tr>
	</tbody>
</table>






<?php endif ?>

<!-- Begin: Message Module Position -->
	<?php CKunenaTools::showModulePosition('kunena_msg_' . $this->mmm) ?>
<!-- Finish: Message Module Position -->