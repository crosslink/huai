<?php


// Dont allow direct linking
defined ( '_JEXEC' ) or die ();
require_once (KUNENA_PATH_LIB . '/kunena.login.php');
$this->user = JFactory::getUser();
$this->config = KunenaFactory::getConfig ();
$type = CKunenaLogin::getType ();
$return = CKunenaLogin::getReturnURL ( $type );
$avatar = CKunenaLogin::getMyAvatar();

$logout = CKunenaLogin::getlogoutFields();
$private = KunenaFactory::getPrivateMessaging();
$PMCount = $private->getUnreadCount($this->my->id);
$PMlink = $private->getInboxLink($PMCount ? JText::sprintf('COM_KUNENA_PMS_INBOX_NEW', $PMCount) : JText::_('COM_KUNENA_PMS_INBOX'));
?>
