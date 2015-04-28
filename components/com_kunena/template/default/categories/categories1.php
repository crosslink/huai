<?php

// Dont allow direct linking
defined ( '_JEXEC' ) or die ();

$mmm=0;
foreach ( $this->categories [0] as $section ) :
	$mmm++;
	$htmlClassBlockTable = !empty ( $section->class_sfx ) ? ' kblocktable' . $this->escape($section->class_sfx) : '';
	$htmlClassTitleCover = !empty ( $section->class_sfx ) ? ' ktitle-cover' . $this->escape($section->class_sfx) : '';
?>
<div class="kblock kcategories-<?php echo intval($section->id) ?>">



	<div class="kcontainer" id="catid_<?php echo intval($section->id) ?>">
		<div>
<table class="kblocktable<?php echo $htmlClassBlockTable ?>" id="kcat<?php echo intval($section->id) ?>">
<tr>
		<?php if (empty ( $this->categories [$section->id] )) { echo JText::_('COM_KUNENA_GEN_NOFORUMS');
		} else {
		$k = 0;
		foreach ( $this->categories [$section->id] as $category ) {
	?>


		<td class="kcol-top kcol-kcattitle">
		



			<div class="kchildcount ks">
			<?php
				// Show new posts, locked, review
				echo CKunenaLink::GetCategoryLink ( 'showcat', intval($category->id), $this->escape($category->name ) );
				if ($category->new) {
					echo '<sup class="knewchar">(' . intval($category->new) . ' ' . JText::_('COM_KUNENA_A_GEN_NEWCHAR') . ")</sup>";
				}
				if ($category->locked) {
					echo CKunenaTools::showIcon ( 'kforumlocked', JText::_('COM_KUNENA_GEN_LOCKED_FORUM') );
				}
				if ($category->review) {
					echo CKunenaTools::showIcon ( 'kforummoderated', JText::_('COM_KUNENA_GEN_MODERATED') );
				}
				?>
			</div>



		
		<?php if (! empty ( $this->modlist [$category->id] )) : ?>
			<div class="kthead-moderators ks">
		<?php
				// get the Moderator list for display
				$modslist = array();
				foreach ( $this->modlist [$category->id] as $mod ) {
					$modslist[] = CKunenaLink::GetProfileLink ( intval($mod->userid) );
				}
				echo JText::_('COM_KUNENA_GEN_MODERATORS') . ': ' . implode(', ', $modslist);
		?>
			</div>
		<?php endif; ?>
		<?php if (! empty ( $this->pending [$category->id] )) : ?>
			<div class="ks kalert">
				<?php echo CKunenaLink::GetCategoryReviewListLink ( intval($category->id), intval($this->pending [$category->id]) . ' ' . JText::_('COM_KUNENA_SHOWCAT_PENDING'), 'nofollow' ); ?>
			</div>
		<?php endif; ?>
			

			


		</td>
		<?php } } ?></tr>
</table>
</div>
</div>
</div>
<!-- F: List Cat -->
<!-- Begin: Category Module Position -->
<?php
// TODO: Remove from production version
//if(JDEBUG == 1){
//	if(defined('JFIREPHP')){
//		FB::log($mmm, 'Section Count');
//	}
//}
?>

	<?php CKunenaTools::showModulePosition('kunena_section_' . $mmm) ?>
<!-- Finish: Category Module Position -->
<?php endforeach; ?>
