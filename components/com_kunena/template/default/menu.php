<?php


// Dont allow direct linking
defined ( '_JEXEC' ) or die ();
jimport( 'joomla.document.html.html' );
?>
<!-- Kunena Menu -->
<div id="ktop">
	<?php if (JDocumentHTML::countModules ( 'kunena_menu' )) : ?>
		<!-- Kunena Module Position: kunena_menu -->
		<div id="ktopmenu">
			<div id="ktab"><?php CKunenaTools::displayMenu() ?></div>
		</div>
		<!-- /Kunena Module Position: kunena_menu -->
	<?php endif; ?>
	
</div>
<!-- /Kunena Menu -->