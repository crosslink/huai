<?php


// Dont allow direct linking
defined( '_JEXEC' ) or die();

if ($this->showgenstats > 0)
{
	$this->loadGenStats();

	$kunena_config = KunenaFactory::getConfig ();

	$userlist1 = CKunenaLink::GetUserlistLink('', $this->totalmembers);
	$userlist2 = CKunenaLink::GetUserlistLink('', JText::_('COM_KUNENA_STAT_USERLIST').' &raquo;');

	?>
<div class="kblock kfrontstats">
	<div class="kmsg-header kmsg-header-right">
		
	<h2><span>&nbsp;&nbsp;<?php echo CKunenaLink::GetStatsLink(JText::_('COM_KUNENA_STAT_FORUMSTATS'), ''); ?></span></h2>
	</div>
	<div class="kcontainer" id="kfrontstats-tbody">
		<div class="kbody">
			<table class = "kblocktable" id ="kfrontstats">
				<tr class="krow1">
					<td class = "kcol-first">
						<div class="kstatsicon"></div>
					</td>
					<td class="kcol-mid km">
						
							
						
						<ul id="kstatslistleft" class="fltlft">
							<li><?php echo JText::_('COM_KUNENA_STAT_TOTAL_MESSAGES'); ?>: <strong> <?php echo intval($this->totalmsgs); ?></strong> <span class="divider">|</span> <?php echo JText::_('COM_KUNENA_STAT_TOTAL_SUBJECTS'); ?>: <strong><?php echo intval($this->totaltitles); ?></strong><span class="divider">|</span>
<?php echo JText::_('COM_KUNENA_STAT_TOTAL_USERS'); ?>: <strong><?php echo $userlist1; ?></strong> <span class="divider">|</span> <?php echo JText::_('COM_KUNENA_STAT_LATEST_MEMBERS'); ?>:<strong> <?php echo CKunenaLink::GetProfileLink($this->lastestmemberid); ?></strong>			

</li>

<li>	<?php echo JText::_('COM_KUNENA_STAT_TODAY_OPEN_THREAD'); ?>: <strong><?php echo intval($this->todayopen); ?></strong> <span class="divider">|</span> <?php echo JText::_('COM_KUNENA_STAT_YESTERDAY_OPEN_THREAD'); ?>: <strong><?php echo intval($this->yesterdayopen); ?></strong><span class="divider">|</span>
							<?php echo JText::_('COM_KUNENA_STAT_TODAY_TOTAL_ANSWER'); ?>: <strong><?php echo intval($this->todayanswer); ?></strong> <span class="divider">|</span> <?php echo JText::_('COM_KUNENA_STAT_YESTERDAY_TOTAL_ANSWER'); ?>: <strong><?php echo intval($this->yesterdayanswer); ?></strong></li>
							
						</ul>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>

<?php
}

