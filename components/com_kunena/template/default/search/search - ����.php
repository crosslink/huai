<?php


defined ( '_JEXEC' ) or die ();

if (empty ( $this->q ) && empty ( $this->quser )) {
	return;
}
?>
<div class="kblock ksearchresult">

	<div class="kcontainer" id="ksearchresult">
		<div class="kbody">
<table>
	<tbody>
		<tr>
			<td>
				<?php foreach ( $this->results as $result ) : ?>
					<table>
						<thead>
							<tr class="ksth">
								<th colspan="2">
									<span class="kmsgdate">
										<?php echo CKunenaTimeformat::showDate ( $result->time )?>
									</span>
								</th>
							</tr>
						</thead>
						<tbody>
							<?php $k = 0; if ($this->total == 0 && $this->int_kunena_errornr) : ?>
							<tr class="k<?php echo $this->tabclass [$k] ?>" >
								<td>
									<?php echo $this->escape($this->str_kunena_errormsg) ?>
								</td>
							</tr>
							<?php endif; ?>
							<tr>
								<td rowspan="2" valign="top" class="kprofile-left kresultauthor">
								<p><?php echo $this->escape($result->name) ?></p>
								</td>
								<td class="kmessage-left resultmsg">
									<div class="kmsgbody">
										<div class="kmsgtitle kresult-title">
											<span class="kmsgtitle">
												<?php echo CKunenaLink::GetThreadPageLink ( 'view', intval($result->catid), intval($result->id), NULL, NULL, $result->htmlsubject, intval($result->id) )?>
											</span><span class="kchildcount ks">
										<?php echo CKunenaTimeformat::showDate ( $result->time )?>
									</span>
								</th>
										</div>
										<div class="kmsgtext resultmsg">
											<?php echo $result->htmlmessage ?>
										</div>
										<div class="resultcat">
											<?php echo JText::_('COM_KUNENA_CATEGORY') . ' ' . CKunenaLink::GetCategoryLink ( 'showcat', intval($result->catid), $this->escape($result->catname), $rel = 'follow', $class = '', $title = '' )?>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				<?php endforeach; ?>
			</td>
		</tr>
		<tr class="ksth">
			<th colspan="3">
			<?php
			$resStart = $this->limitstart + 1;
			$resStop = $this->limitstart + count ( $this->results );
			if ($resStart < $resStop)
				$resStartStop = ( string ) ($resStart) . ' - ' . ( string ) ($resStop);
			else
				$resStartStop = '0';
			printf ( JText::_('COM_KUNENA_FORUM_SEARCHRESULTS'), $resStartStop, intval($this->total) );
			?>

			<?php if ($this->total > $this->limit) : ?>
			<?php echo $this->pagination; ?>
			<?php endif; ?>
			</th>
		</tr>
	</tbody>
</table>
</div>
</div>
</div>