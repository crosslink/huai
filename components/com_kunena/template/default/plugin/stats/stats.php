<?php


// Dont allow direct linking
defined( '_JEXEC' ) or die();

$kunena_config = KunenaFactory::getConfig ();
$document = JFactory::getDocument();
$document->setTitle(JText::_('COM_KUNENA_STAT_FORUMSTATS') . ' - ' . $kunena_config->board_title);

if($kunena_config->showstats):

$this->loadGenStats();
$this->loadUserStats();
$this->loadTopicStats();
$this->loadPollStats();
$this->loadThanksStats();

$forumurl = 'index.php?option=com_kunena';

$userlist1 = CKunenaLink::GetUserlistLink('', intval($this->totalmembers));
?>
<!-- BEGIN: GENERAL STATS -->
<?php if($kunena_config->showgenstats): ?>
<div class="kblock kgenstats">
	<div class="kheader">
		<span class="ktoggler"><a class="ktoggler close" title="<?php echo JText::_('COM_KUNENA_TOGGLER_COLLAPSE') ?>" rel="kgenstats_tbody"></a></span>
		<h2><span><?php echo $this->escape($kunena_config->board_title); ?> <?php echo JText::_('COM_KUNENA_STAT_FORUMSTATS'); ?></span></h2>
	</div>
	<div class="kcontainer" id="kgenstats_tbody">
		<div class="kbody">
	<table  class = "kblocktable">
		<tbody>
			<tr class = "ksth">
				<th colspan="2"><?php echo JText::_('COM_KUNENA_STAT_GENERAL_STATS'); ?></th>
			</tr>
			<tr class = "krow1">
				<td class = "kcol-first">
					<div class="kstatsicon"></div>
				</td>
				<td class = "kcol-mid">
					<?php echo JText::_('COM_KUNENA_STAT_TOTAL_USERS'); ?>:<b> <?php echo $userlist1;?></b> &nbsp;
					<?php echo JText::_('COM_KUNENA_STAT_LATEST_MEMBERS'); ?>:<b> <?php echo CKunenaLink::GetProfileLink(intval($this->lastestmemberid)); ?></b>

					<br /> <?php echo JText::_('COM_KUNENA_STAT_TOTAL_MESSAGES'); ?>: <b> <?php echo intval($this->totalmsgs); ?></b> &nbsp;
					<?php echo JText::_('COM_KUNENA_STAT_TOTAL_SUBJECTS'); ?>: <b> <?php echo intval($this->totaltitles); ?></b> &nbsp;
					<?php echo JText::_('COM_KUNENA_STAT_TOTAL_SECTIONS'); ?>: <b> <?php echo intval($this->totalcats); ?></b> &nbsp;
					<?php echo JText::_('COM_KUNENA_STAT_TOTAL_CATEGORIES'); ?>: <b> <?php echo intval($this->totalsections); ?></b>

					<br /> <?php echo JText::_('COM_KUNENA_STAT_TODAY_OPEN_THREAD'); ?>: <b> <?php echo intval($this->todayopen); ?></b> &nbsp;
					<?php echo JText::_('COM_KUNENA_STAT_YESTERDAY_OPEN_THREAD'); ?>: <b> <?php echo intval($this->yesterdayopen); ?></b> &nbsp;
					<?php echo JText::_('COM_KUNENA_STAT_TODAY_TOTAL_ANSWER'); ?>: <b> <?php echo intval($this->todayanswer); ?></b> &nbsp;
					<?php echo JText::_('COM_KUNENA_STAT_YESTERDAY_TOTAL_ANSWER'); ?>: <b> <?php echo intval($this->yesterdayanswer); ?></b>

				</td>
			</tr>
		</tbody>
	</table>
</div>
</div>
</div>
<?php endif; ?>
<!-- FINISH: GENERAL STATS -->

<?php
$tabclass = array("row1","row2");
$k = 0;
?>

<!-- B: Pop Subject -->
<?php if($this->showpopsubjectstats && !empty($this->toptitles)) : ?>
<div class="kblock kpopsubjstats">
	<div class="kheader">
		<span class="ktoggler"><a class="ktoggler close" title="<?php echo JText::_('COM_KUNENA_TOGGLER_COLLAPSE') ?>" rel="kpopsubstats-tbody"></a></span>
		<h2><span><?php echo JText::_('COM_KUNENA_STAT_TOP'); ?> <strong><?php echo $kunena_config->popsubjectcount; ?></strong> <?php echo JText::_('COM_KUNENA_STAT_POPULAR'); ?> <?php echo JText::_('COM_KUNENA_STAT_POPULAR_USER_KGSG'); ?></span></h2>
	</div>
	<div class="kcontainer" id="kpopsubstats-tbody">
		<div class="kbody">
			<table class = "kblocktable">
				<tbody>
					<tr class = "ksth" >
						<th class="kname"> <?php echo JText::_('COM_KUNENA_GEN_SUBJECT') ;?></th>
					
						<th class="kname"><?php echo JText::_('COM_KUNENA_USRL_HITS') ;?></th>
					</tr>
					<?php
					foreach ($this->toptitles as $toptitle) :
						$k = 1 - $k;
						if ($toptitle->hits == $this->toptitlehits) {
							$barwidth = 100;
						} else {
							$barwidth = round(($toptitle->hits * 100) / $this->toptitlehits);
						}
					?>
					<tr class = "k<?php echo $this->escape($tabclass[$k]); ?>">
						<td class="kcol-first1">
							<?php echo CKunenaLink::GetThreadLink( 'view', intval($toptitle->catid), intval($toptitle->id), KunenaParser::parseText ($toptitle->subject), '' ); ?>
						</td>
					
						<td class="kcol-last">
							<?php echo intval($toptitle->hits); ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php endif; ?>
<!-- F: Pop Subject -->


<!-- B: User Messages -->
<?php if($this->showpopuserstats && !empty($this->topposters)): ?>
<div class="kblock kpopuserstats">
	<div class="kheader">
		<span class="ktoggler"><a class="ktoggler close" title="<?php echo JText::_('COM_KUNENA_TOGGLER_COLLAPSE') ?>" rel="kpopusermsgstats_tbody"></a></span>
		<h2><span><?php echo JText::_('COM_KUNENA_STAT_TOP'); ?> <strong><?php echo $kunena_config->popusercount; ?></strong> <?php echo JText::_('COM_KUNENA_STAT_POPULAR'); ?> <?php echo JText::_('COM_KUNENA_STAT_POPULAR_USER_TMSG'); ?></span></h2>
	</div>
	<div class="kcontainer" id="kpopusermsgstats_tbody">
		<div class="kbody">
			<table class = "kblocktable">
				<tbody>
					<tr class = "ksth" >
						<th class="kname"><?php echo JText::_('COM_KUNENA_USRL_USERNAME') ;?></th>
					
						<th class="kname"><?php echo JText::_('COM_KUNENA_USRL_POSTS') ;?></th>
					</tr>
					<?php
						foreach ($this->topposters as $poster) :
						$k = 1 - $k;
						if ($poster->posts == $this->topmessage) {
							$barwidth = 100;
						} else {
							$barwidth = round(($poster->posts * 100) / $this->topmessage);
						}
					?>
					<tr class = "k<?php echo $this->escape($tabclass[$k]); ?>">
						<td class="kcol-first">
							<?php echo CKunenaLink::GetProfileLink(intval($poster->userid)); ?>
						</td>
					
						<td class="kcol-last">
							<?php echo intval($poster->posts); ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php endif; ?>
<!-- F: User Messages -->




<?php


endif;
