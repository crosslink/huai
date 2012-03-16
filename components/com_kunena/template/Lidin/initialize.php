<?php
/**
* @version $Id: initialize.php 3864 2010-11-05 16:23:40Z fxstein $
* Kunena Component
* @package Kunena
*
* @Copyright (C) 2010 Kunena Team All rights reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @link http://www.kunena.org
**/
defined( '_JEXEC' ) or die();

$document = JFactory::getDocument();
$template = KunenaFactory::getTemplate();
$this->params = $template->params;

// Template requires Mootools 1.2 framework
$template->loadMootools();

// We load smoothbox library
CKunenaTools::addScript( KUNENA_DIRECTURL . 'js/slimbox/slimbox-min.js' );

// New Kunena JS for default template
// TODO: Need to check if selected template has an override
CKunenaTools::addScript ( KUNENA_DIRECTURL . 'template/default/js/default-min.js' );

$skinner = $this->params->get('enableSkinner', 0);

if (file_exists ( KUNENA_JTEMPLATEPATH .DS. 'css' .DS. 'kunena.forum.css' )) {
	// Load css from Joomla template
	CKunenaTools::addStyleSheet ( KUNENA_JTEMPLATEURL . 'css/kunena.forum-min.css' );

	if ($skinner && file_exists ( KUNENA_JTEMPLATEPATH . '/css/kunena.skinner.css' )){
		CKunenaTools::addStyleSheet ( KUNENA_JTEMPLATEURL . 'css/kunena.skinner-min.css' );
	} elseif (!$skinner && file_exists ( KUNENA_JTEMPLATEPATH . '/css/kunena.default.css' )) {
		CKunenaTools::addStyleSheet ( KUNENA_JTEMPLATEURL . 'css/kunena.default-min.css' );
	}
} else if (file_exists ( KUNENA_ABSTMPLTPATH .DS. 'css' .DS. 'kunena.forum.css' )){
	// Load css from the current template
	CKunenaTools::addStyleSheet ( KUNENA_TMPLTCSSURL );

	if ($skinner && file_exists ( KUNENA_ABSTMPLTPATH . '/css/kunena.skinner.css' )){
		CKunenaTools::addStyleSheet ( KUNENA_TMPLTURL . 'css/kunena.skinner-min.css' );
	} elseif (!$skinner && file_exists ( KUNENA_ABSTMPLTPATH . '/css/kunena.default.css' )) {
		CKunenaTools::addStyleSheet ( KUNENA_TMPLTURL . 'css/kunena.default-min.css' );
	}
} else {
	// Load css from default template
	CKunenaTools::addStyleSheet ( KUNENA_DIRECTURL . 'template/default/css/kunena.forum-min.css' );
	if ($skinner){
		CKunenaTools::addStyleSheet ( KUNENA_DIRECTURL . 'template/default/css/kunena.skinner-min.css' );
	} else {
		CKunenaTools::addStyleSheet ( KUNENA_DIRECTURL . 'template/default/css/kunena.default-min.css' );
	}
}
$cssurl = JURI::base() . "components/com_kunena/template/default/css";
?>
<!--[if lte IE 7]>
<link rel="stylesheet" href="<?php echo  KUNENA_TMPLTURL; ?>/css/kunena.forum.ie7.css" type="text/css" />
<![endif]-->
<?php
$mediaurl = JURI::base() . "components/com_kunena/template/default/media";


$document->addStyleDeclaration($styles);