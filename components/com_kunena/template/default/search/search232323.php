<?php


defined ( '_JEXEC' ) or die ();

if (empty ( $this->q ) && empty ( $this->quser )) {
	return;
}
?>



		
				<?php foreach ( $this->results as $result ) : ?>
					<table>
						<thead>
							<tr class="ksth">
								<th colspan="2">
									<span class="kmsgtitle">
									<?php echo CKunenaLink::GetThreadPageLink ( 'view', intval($result->catid), intval($result->id), NULL, NULL, $result->htmlsubject, intval($result->id) )?></span><span class="kfooter-time"> &nbsp;&nbsp;&nbsp;/&nbsp;<?php echo $this->escape($result->name) ?>&nbsp;/&nbsp;<?php echo CKunenaTimeformat::showDate ( $result->time )?>
									</span>
								</th>
							</tr>
						</thead>
						<tbody>
							<?php $k = 0; if ($this->total == 0 && $this->int_kunena_errornr) : ?>
							<tr class="k<?php echo $this->tabclass [$k] ?>" >
								<td >
									<?php echo $this->escape($this->str_kunena_errormsg) ?>
								</td>
							</tr>
							<?php endif; ?>
							<tr>
								
								<td  class="searchresult">
									
										<div class="kmsgtext resultmsg">
											<?php echo $result->htmlmessage ?>
										</div>
											
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				<?php endforeach; ?>

			<span>
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
			</span>

