<?php


// Dont allow direct linking
defined ( '_JEXEC' ) or die ();
?>

<div>
	<div >
	
		<ul class="kfile-attach">
		<?php foreach($this->attachments as $attachment) : ?>
	


<?php if($this->message_edit) : ?>
	<br>	
<li>
				<?php echo $attachment->thumblink; ?>
				
				<?php echo $attachment->textLink; ?>
				
</li>

<?php endif ?>
	
		<?php endforeach; ?>
		</ul>

	</div>
</div>
