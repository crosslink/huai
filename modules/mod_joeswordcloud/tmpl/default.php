<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); ?>

<div id="joeswordcloud"<?php echo $joeswordcloud_params->moduleclasssfx.$joeswordcloud_params->modulewidth; ?>>
	<p style="text-align:<?php echo $joeswordcloud_params->textalignment; ?>">
	<?php
		echo $joeswordcloud_params->modulecontent;
	?>
	</p>
</div>
<?php
	if ($joeswordcloud_params->showsql) {
		echo "<pre>// Debug\n";
		print_r($joeswordcloud_params->debug);
		echo "</pre><pre>// Word Count\n";
		print_r($joeswordcloud_params->proof);
		echo "</pre><pre>// Development\n";
		print_r($joeswordcloud_params->dev);
		echo "</pre>";
	}
?>