<?php


defined( '_JEXEC' ) or die();

if(isset($this->advsearch_hide) && $this->advsearch_hide==1)
{
	$advsearch_class = ' open';
	$advsearch_style = ' style="display: none;"';
	$advsearch_title = JText::_('COM_KUNENA_TOGGLER_EXPAND');
} else {
	$advsearch_class = ' close';
	$advsearch_style = '';
	$advsearch_title = JText::_('COM_KUNENA_TOGGLER_COLLAPSE');
}
$this->doc->addScriptDeclaration( "// <![CDATA[
document.addEvent('domready', function() {
	// Attach auto completer to the following ids:
	new Autocompleter.Request.JSON('kusername', '" . CKunenaLink::GetJsonURL('autocomplete', 'getuser', false) . "', { 'postVar': 'value' });
});
// ]]>");
?>


