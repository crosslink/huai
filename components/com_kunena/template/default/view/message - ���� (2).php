<?php


// Dont allow direct linking
defined ( '_JEXEC' ) or die ();
//TODO: Split this file
if ($this->params->get('avatarPosition') == 'top') : ?>



<?php elseif ($this->params->get('avatarPosition') == 'left') : ?>


<table <?php echo $this->class ?>>
	<tbody>
		<tr>
			<td rowspan="2" class="kprofile-left">
				<?php $this->displayProfile('vertical') ?>
			</td>
			<td class="kmessage-left">
	
<span >
		&nbsp;?¡º&nbsp;<?php echo $this->subjectHtml ?>&nbsp;¡»&nbsp;
		</span>
&nbsp;
		
		<span class="kfooter-time" title="<?php echo CKunenaTimeformat::showDate($this->msg->time, 'config_post_dateformat_hover') ?>">
			<?php echo CKunenaTimeformat::showDate($this->msg->time, 'config_post_dateformat') ?>
		</span>
		<span class="kfooter-time" >&nbsp;&nbsp;
			<a name="<?php echo intval($this->id) ?>"></a>
			<?php echo $this->numLink ?>&nbsp;F
		</span>
	



				<?php $this->displayContents() ?>
			</td>
		</tr>
		<tr>
			<td class="kbuttonbar-left">
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