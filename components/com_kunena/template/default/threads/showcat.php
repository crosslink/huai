<?php

// Dont allow direct linking
defined ( '_JEXEC' ) or die ();
?>
<!-- Pathway -->
<?php $this->displayPathway () ?>
<!-- / Pathway -->






<?php if ($this->objCatInfo->headerdesc) : ?>
<div class="kblock">
	<div class="kmsg-header kmsg-header-left">
		<span class="ktoggler"><a class="ktoggler close" title="<?php echo JText::_('COM_KUNENA_TOGGLER_COLLAPSE') ?>" rel="frontstats_tbody"></a></span>
		<h2><span>&nbsp;&nbsp;<?php echo JText::_('COM_KUNENA_FORUM_HEADER'); ?></span></h2>
	</div>
	<div class="kcontainer" id="frontstats_tbody">
		<div class="kbody">
			<div class="kfheadercontent">
				<?php echo KunenaParser::parseBBCode ( $this->headerdesc ); ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>



<!-- B: List Actions -->
<table class="klist-actions">
	<tr>
		<td class="klist-actions-goto">
			<a name="forumtop"> </a>
			<?php echo CKunenaLink::GetSamePageAnkerLink ( 'forumbottom', CKunenaTools::showIcon ( 'kforumbottom', JText::_('COM_KUNENA_GEN_GOTOBOTTOM') ), 'nofollow', 'kbuttongoto') ?>
		</td>
		<td class="klist-actions-forum">
			<?php
			if (isset ( $this->forum_new ) || isset ( $this->forum_markread ) || isset ( $this->thread_subscribecat )) {
				echo '<div class="kmessage-buttons-row">';
				if (isset ( $this->forum_new ))
					echo $this->forum_new;
				if (isset ( $this->forum_markread ))
					echo ' ' . $this->forum_markread;
				if (isset ( $this->thread_subscribecat ))
					echo ' ' . $this->thread_subscribecat;
				echo '</div>';
			}
			?>
		</td>
		<td class="klist-pages-all">
			<?php
			// pagination 1
			if (count ( $this->messages ) > 0) {
				$maxpages = 9 - 2; // odd number here (# - 2)
				echo $pagination = $this->getPagination ( $this->catid, $this->page, $this->totalpages, $maxpages );
			}
			?>
		</td>
	</tr>
</table>
<!-- F: List Actions -->


<?php $this->displaySubCategories1 () ?>

<?php $this->displayFlat (); ?>




<!-- B: List Actions -->
<table class="klist-actions">
	<tr>
		<td class="klist-actions-goto">
			<a name="forumtop"> </a>
			<?php echo CKunenaLink::GetSamePageAnkerLink ( 'forumbottom', CKunenaTools::showIcon ( 'kforumbottom', JText::_('COM_KUNENA_GEN_GOTOBOTTOM') ), 'nofollow', 'kbuttongoto') ?>
		</td>
		<td class="klist-actions-forum">
			<?php
			if (isset ( $this->forum_new ) || isset ( $this->forum_markread ) || isset ( $this->thread_subscribecat )) {
				echo '<div class="kmessage-buttons-row">';
				if (isset ( $this->forum_new ))
					echo $this->forum_new;
				if (isset ( $this->forum_markread ))
					echo ' ' . $this->forum_markread;
				if (isset ( $this->thread_subscribecat ))
					echo ' ' . $this->thread_subscribecat;
				echo '</div>';
			}
			?>
		</td>
		<td class="klist-pages-all">
			<?php
			// pagination 1
			if (count ( $this->messages ) > 0) {
				$maxpages = 9 - 2; // odd number here (# - 2)
				echo $pagination = $this->getPagination ( $this->catid, $this->page, $this->totalpages, $maxpages );
			}
			?>
		</td>
	</tr>
</table>
<!-- F: List Actions -->




<!-- B: List Actions Bottom -->




<!-- B: List Actions Bottom -->
<div class="kcontainer klist-bottom">
	<div class="kbody">
		<div class="kmoderatorslist-jump fltrt">
				<?php $this->displayForumJump (); ?>
		</div>
		<?php if (!empty ( $this->modslist ) ) : ?>
		<div class="klist-moderators">
			<?php
			echo '' . JText::_('COM_KUNENA_GEN_MODERATORS') . ": ";
			foreach ( $this->modslist as $mod ) {
				echo CKunenaLink::GetProfileLink ( intval($mod->userid) ) . '&nbsp; ';
			}
			?>
		</div>
		<?php endif; ?>
	</div>
</div>
<!-- F: List Actions Bottom -->