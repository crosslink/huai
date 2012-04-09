<?php
/**
 * @version		0.1
 * @package		zKunenaTicker
 * @author		Aaron Gilbert {@link http://www.nzambi.braineater.ca}
 * @author		Created on Feb-15-2011
 * @copyright	Copyright (C) 2009 - 2010 Aaron Gilbert. All rights reserved.
 * @license		GNU/GPL, see http://www.gnu.org/licenses/gpl-2.0.html
 *
 */
//-- No direct access
defined('_JEXEC') or die('Restricted access');

JHTML::_('behavior.mootools');
$document =& JFactory::getDocument();

JHTML::script('zticker.js','modules/mod_zkunenaticker/assets/js/');
JHTML::stylesheet('zticker.css','modules/mod_zkunenaticker/assets/css/');

	require_once (dirname(__FILE__).DS.'helper.php');
	require_once (KUNENA_PATH_LIB . DS . 'kunena.link.class.php');
	require_once (KUNENA_PATH_LIB . DS . 'kunena.image.class.php');
	require_once (KUNENA_PATH_LIB . DS . 'kunena.timeformat.class.php');
	require_once (KUNENA_PATH_FUNCS . DS . 'latestx.php');
	require_once (JPATH_ADMINISTRATOR . '/components/com_kunena/libraries/html/parser.php');
	KunenaFactory::loadLanguage();
	$KunenaConfig = KunenaFactory::getConfig ();

	$list = modZKunenaTickerHelper::getItems($params);
	
	$document->addStyleDeclaration( modZKunenaTickerHelper::getExtraCss($params, $module) );
	$document->addScriptDeclaration( modZKunenaTickerHelper::getScript($params, $module)  );
	$layout = 'default';
	require(JModuleHelper::getLayoutPath('mod_zkunenaticker', $layout));
?>