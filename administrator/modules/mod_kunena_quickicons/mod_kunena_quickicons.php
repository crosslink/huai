<?php
/** 
 * @version		$Id: mod_kunena_quickicons.php 481 2011-09-05 17:36:08Z JoomJunk $
 * @author		JoomJunk
 * @copyright	Copyright (c) 2011 - JoomJunk
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */
 
// no direct access
defined('_JEXEC') or die('Restricted access');

// JoomJunk reference parameters
$mod_name               = "mod_kunena_quickicons";

// API
$mainframe	= &JFactory::getApplication();
$document 	= &JFactory::getDocument();

// QuickIcons include
$quickIconsFile = JPATH_ADMINISTRATOR.DS.'modules'.DS.'mod_kunena_quickicons'.DS.'default_quickicons.php';

// Append CSS to the document's head
$document->addStyleSheet(JURI::root().'administrator/modules/'.$mod_name.'/tmpl/css/style.css');

// Output content with template
require(JModuleHelper::getLayoutPath($mod_name,'default'));

