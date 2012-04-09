<?php


// Dont allow direct linking
defined ( '_JEXEC' ) or die ();



if ($this->params->get('avatarPosition') == 'left') : ?>


<table <?php echo $this->class ?>>
	<tbody>
		<tr>
			<td rowspan="2" class="kprofile-left">
				<?php $this->displayProfile('vertical') ?>
			</td>
			<td class="kmessage-left">
	
<span >
		



<span class="kfooter-time" >&nbsp;&nbsp;
			
			<?php echo $this->numLink ?>&nbsp;F&nbsp;
		</span>


	<span class="kfooter-time" title="<?php echo CKunenaTimeformat::showDate($this->msg->time, 'config_post_dateformat_hover') ?>">
			<?php echo CKunenaTimeformat::showDate($this->msg->time, 'config_post_dateformat') ?>
		</span>
		


				<?php $this->displayContents() ?>
			</td>
		</tr>
		<tr>
			<td class="kbuttonbar-left">





	
		


				<?php $this->displayActions() ?>		<?php $this->displayThankyou() ?>

		
		
			</td>
		</tr>
	</tbody>
</table>



<?php endif ?>

<!-- Begin: Message Module Position -->
	<?php CKunenaTools::showModulePosition('kunena_msg_' . $this->mmm) ?>
<!-- Finish: Message Module Position -->