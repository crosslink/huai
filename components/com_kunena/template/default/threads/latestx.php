<?php

// Dont allow direct linking
defined ( '_JEXEC' ) or die ();
?>

<?php
$this->displayAnnouncement ();
CKunenaTools::showModulePosition ( 'kunena_announcement' );
?>
<!-- B: List Actions -->
<table class="klist-actions">
	<tr>
<?php if ($this->mode=='posts') : ?>
		<td class="klist-actions-info-all">
			<strong><?php echo $this->escape($this->total)?></strong>
			<?php echo $this->escape($this->header); ?>
		</td>
<?php else: ?>
		<td class="klist-actions-info-all">
			<strong><?php echo $this->escape($this->total)?></strong>
			<?php echo JText::_('COM_KUNENA_DISCUSSIONS')?>
		</td>

		
		<td class="klist-jump-all">
			<?php $this->displayForumJump () ?>
		</td>
<?php endif; ?>

<?php
//pagination 1
if (count ( $this->messages ) > 0) :
	echo '<td class="klist-pages-all">';
	$maxpages = 8 - 2; // odd number here (# - 2)
	echo $pagination = $this->getPagination ( $this->func, $this->show_list_time, $this->page, $this->totalpages, $maxpages );
	echo '</td>';
endif;
?>
	</tr>
</table>
<!-- F: List Actions -->

<?php
if (count ( $this->threads ) > 0) :
	$this->displayItems ();
?>

<!-- B: List Actions -->
<table class="klist-actions">
	<tr>
		<td class="klist-actions-info-all">
			<strong>
				<?php echo $this->total?>
			</strong>
				<?php echo $this->mode=='posts' ? $this->escape($this->header) : JText::_('COM_KUNENA_DISCUSSIONS')?>
		</td>
			<?php
				//pagination 1
				if (count ( $this->messages ) > 0) :
					echo '<td class="klist-pages-all">';
					echo $pagination;
					echo '</td>';
				endif;
			?>
	</tr>
</table>
<!-- F: List Actions -->

<?php endif; ?>

