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

class modZKunenaTickerHelper {
	
	function trimStringLong($str, $limit, $break=".", $pad="...") {
		if(strlen($str) <= $limit) return $str;
		if(false !== ($breakpoint = strpos($str, $break, $limit))) { 
			if($breakpoint < strlen($str) - 1) { 
				$str = substr($str, 0, $breakpoint) . $pad; 
			} 
		} 
		return $str; 
	}
	function trimString($string, $limit, $break=" ", $pad="...") { 
		if(strlen($string) <= $limit) return $string; 
		$string = substr($string, 0, $limit); 
		if(false !== ($breakpoint = strrpos($string, $break))) { 
			$string = substr($string, 0, $breakpoint); 
		} 
		return $string . $pad; 
	}

	function getItems($params) {
		JRequest::setVar ( 'sel', 10000 );
		KunenaFactory::getSession ( true );
		$model = new CKunenaLatestX ( '', 0 );
		$model->threads_per_page = $params->get ( 'numberPosts', 6 );
		$model->latestcategory = $params->get ( 'categoryLimit', 0  );
		$model->latestcategory_in = $params->get ( 'categoryFilter', 1 );

		$result = array ();
		$threadmode = true;

		switch ( $params->get( 'modelType' ) ) {
			case 'latestmessages' :
				$model->getLatestPosts();
				$threadmode = false;
				break;
			case 'noreplies' :
				$model->getNoReplies();
				break;
			case 'subscriptions' :
				$model->getSubscriptions();
				break;
			case 'favorites' :
				$model->getFavorites();
				break;
			case 'owntopics' :
				$model->getOwnTopics();
				break;
			case 'deletedposts' :
				$model->getDeletedPosts();
				$threadmode = false;
				break;
			case 'saidthankyouposts' :
				$model->getSaidThankYouPosts();
				$threadmode = false;
				break;
			case 'gotthankyouposts' :
				$model->getGotThankYouPosts();
				$threadmode = false;
				break;
			case 'userposts' :
				$model->getUserPosts();
				$threadmode = false;
				break;
			case 'latesttopics' :
			default :
				$model->getLatest ();
		}

		if ($threadmode == true) {
			$result = $model->threads;

			foreach ($result as $message) {
				$message->id = $model->lastreply[$message->thread]->id;
				$message->message = $model->lastreply[$message->thread]->message;
				$message->userid = $model->lastreply[$message->thread]->userid;
				$message->name = $model->lastreply[$message->thread]->name;
				$message->lasttime = $model->lastreply[$message->thread]->lasttime;
			}

		} else {
			$result = $model->customreply;
		}
		return $result;
	}
	
	function getTopic($item, $params) {
		$subject = JText::_('MOD_ZKUNENATICKER_TOPIC');
		$title = JText::_('MOD_ZKUNENATICKER_TOPIC_TITLE');
		return CKunenaLink::GetThreadLink ( 'view', $item->catid, $item->thread, $subject , $title , 'follow' );
	}
	function getSubject($item, $params) {
		$subject =  JString::substr(htmlspecialchars ($item->subject), '0', $params->get ('subjectLength', 50) );
		$title = JText::_('MOD_ZKUNENATICKER_POSTED_IN') .' - '. $item->catname;
		
		return CKunenaLink::GetThreadLink ( 'view', $item->catid, $item->id, $subject , $title , 'follow' );
	}
	function getMessage($item, $params) {}
	
	function getCredit() {
		return JText::_('MOD_ZKUNENATICKER_POWERED_BY')." <a href=\"http://nzambi.braineater.ca\" target=\"_blank\"><em>nZambi!</em></a>";
	}
	function getAvatar($userid, $params) {
		$kunena_user = KunenaFactory::getUser ( ( int ) $userid );
		$username = $kunena_user->getName(); // Takes care of realname vs username setting
		$avatarlink = $kunena_user->getAvatarLink ( '', $params->get('avatarsize', 40 ), $params->get('avatarsize', 40 ));
		
		return CKunenaLink::GetProfileLink ( $userid, $avatarlink, $username );
	}
	function getTopicIcon($item, $params) {
		$ktemplate = KunenaFactory::getTemplate();
		return $ktemplate->getTopicIcon($item);
	}
	function getPostDate($item, $params) {
		return CKunenaTimeformat::showDate($item->lasttime, $params->get('timeFormat', 'datetime_today'));
	}
	function getExtraCss($params, $module ) {
		
		$setWidth 	= (int)$params->get('modulewidth',200);
		$listWidth 	= ($params->get('showAvatar') ? (int)$params->get('modulewidth',200) - ((int)$params->get('avatarsize',40)+14) : (int)$params->get('modulewidth',200) );
		$detailPad 	= ($params->get('showAvatar') ?  ' padding-left: '. ((int)$params->get('avatarsize',40)+8) .'px; '  : '' );
		
		$CSS = "
		" ;
		$CSS .= '#zKunenaTickerWrap'.$module->id.' { width:'.(int)$params->get('modulewidth',200).'px; height:'.(int)$params->get('moduleheight',200).'px; '
				. ($params->get('contentBkg') ? 'background-color: '.$params->get('contentBkg').';' : ''). ' } ' 
				. '#zKunenaTicker'.$module->id.' { width:'.(int)$params->get('modulewidth',200).'px;  } ' 
				. '#zTickerVertical'.$module->id.' li .zKunenaTickerTime, #zTickerVertical'.$module->id.' li .zKunenaTickerSubject, #zTickerVertical'.$module->id.' li .zKunenaTickerAuthor {  width:'.(int)$listWidth.'px; } '
				. '#zTickerVertical'.$module->id.' li .zKunenaTickerDetails {'.$detailPad.'} ' ;
		
		if ($params->get('borderClr')) {
			
			$CSS   .=  '#zKunenaTicker'.$module->id.' {	border:1px solid '.$params->get('borderClr').'; }' ; 
			
		}
		if ($params->get('latestBkg')) {
			$CSS   .= '#zKunenaTicker'.$module->id.' .tickeritem1 { '
					. 'background-color: '
					. $params->get('latestBkg') . '; }';
					
		}
		return $CSS;
		} // function CSS
	
	function getScript($params, $module) {
		if ($params->get('moo_trans1')) {
			$transition	= ", transition:'".$params->get('moo_trans1');
			if ($params->get('moo_trans1') <> 'linear') {
				$transition	.= ($params->get('moo_trans2') ? ":".$params->get('moo_trans2') : "" );
			}
			$transition	.="'";

		} else {
			$transition	= '';
		}
		//$transition	= '';
		$js = "
		window.addEvent('load', function() {
					var vert".$module->id." = new Ticker('zTickerVertical".$module->id."',{duration:".$params->get('tickerSpeed', 1500 ).",delay:".$params->get('tickerDelay', 1500 ).",direction:'vertical'".$transition."});
					$('zKunenaTicker".$module->id."').addEvent('mouseenter', function() {vert".$module->id.".pause();});
					$('zKunenaTicker".$module->id."').addEvent('mouseleave', function() {vert".$module->id.".resume();});
		}); 
		";
		
		return $js;

	} // function script
	
}// class
?>