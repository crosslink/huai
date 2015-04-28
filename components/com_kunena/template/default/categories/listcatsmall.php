<?php

// Dont allow direct linking
defined ( '_JEXEC' ) or die ();

$this->displayAnnouncement ();
CKunenaTools::showModulePosition ( 'kunena_announcement' );

?>





<?php
	if (count ( $this->categories [0] )) {
	$this->displayCategories ();

	$this->displayStats ();
?>

<?php
} else {
	$this->displayInfoMessage ();
}
?>
