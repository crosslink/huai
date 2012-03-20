<?php
/**
 * @version $Id$
 * KunenaLatest Module
 * @package Kunena latest
 *
 * @Copyright (C)2010-2011 www.kunena.org. All rights reserved
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 */

// no direct access
defined ( '_JEXEC' ) or die ( '' );
?>
<div class="klatest <?php echo $this->params->get ( 'moduleclass_sfx' ).' '; echo $this->params->get ( 'sh_moduleshowtype' )?>">

<?php
if (is_array ( $this->klistpost ) && !$this->kunena_config->board_offline) { ?>
<ul class="klatest-items">
<?php 	foreach ( $this->klistpost as $item ) {
		$threadPages = ceil ( $item->msgcount / $this->kunena_config->messages_per_page );
?>
<li class="klatest-item">
	<ul class="klatest-itemdetails">
		<?php
		if ( $this->params->get ( 'sh_topiciconoravatar' ) == 1) { ?>
		<span class="klatest-avatar">
			<?php echo modKunenaLatestHelper::userAvatar( $item->userid, $this->params ); ?>
		</span>
		<?php } elseif( $this->params->get ( 'sh_topiciconoravatar' ) == 0) {  ?>
		<li class="klatest-topicicon">
		<?php echo $this->ktemplate->getTopicIcon($item); ?>
		</li>
		<?php } ?>
		<span class="klatest-subject">
		<?php
			if ($this->params->get ( 'sh_sticky' )) {
				if ($item->ordering) {
					echo '<img src="' . JURI::root () . 'modules/mod_kunenalatest/tmpl/images/sticky.png" alt="' . JText::_ ( 'MOD_KUNENALATEST_STICKY_TOPIC' ) . '" title="' . JText::_ ( 'MOD_KUNENALATEST_STICKY_TOPIC' ) . '" />';
				}
			}
				if ( $this->params->get ( 'choosemodel' ) != 'latestposts' && $this->params->get ( 'choosemodel' ) != 'latesttopics'  ):
				echo CKunenaLink::GetThreadLink ( 'view', $item->catid, $item->id, JString::substr ( htmlspecialchars ( $item->subject ), '0', $this->params->get ( 'titlelength' ) ), JString::substr ( htmlspecialchars ( KunenaParser::stripBBCode($item->message) ), '0', $this->params->get ( 'messagelength' ) ), 'follow' );
			else :
				if ($this->topic_ordering == 'ASC') :
					echo CKunenaLink::GetThreadPageSpecialLink ( 'view', intval($item->catid), intval($item->thread), $threadPages, intval($this->kunena_config->messages_per_page), JString::substr ( htmlspecialchars ( $item->subject ), '0', $this->params->get ( 'titlelength' ) ), intval($item->id), '','', JString::substr ( htmlspecialchars ( KunenaParser::stripBBCode($item->message) ), '0',  $this->params->get ( 'messagelength' ) ) );
					if ( $this->params->get ( 'sh_postcount' ) ) : echo ' ('.$item->msgcount.' '.JText::_('MOD_KUNENALATEST_MSG').')';
					endif;
				else :
					echo CKunenaLink::GetThreadPageSpecialLink ( 'view', intval($item->catid), intval($item->thread), 1, intval($this->kunena_config->messages_per_page), JString::substr ( htmlspecialchars ( $item->subject ), '0', $this->params->get ( 'titlelength' ) ), intval($item->id), '','', JString::substr ( htmlspecialchars ( KunenaParser::stripBBCode($item->message) ), '0',  $this->params->get ( 'messagelength' ) ));
					if ( $this->params->get ( 'sh_postcount' ) ): echo ' ('.$item->msgcount.' '.JText::_('MOD_KUNENALATEST_MSG').')';
					endif;
				endif;
			endif;
			if ($item->unread) {
				echo '<sup class="knewchar">(' . JText::_($this->params->get ( 'unreadindicator' )) . ")</sup>";
			}
			if ($this->params->get ( 'sh_favorite' )) {
				if ($item->favcount) {
					if ($item->myfavorite) {
						echo '<img class="favoritestar" src="'.$this->ktemplate->getImagePath('icons/favoritestar.png').'"  alt="' . JText::_ ( 'MOD_KUNENALATEST_FAVORITE' ) . '" title="' . JText::_ ( 'MOD_KUNENALATEST_FAVORITE' ) . '" />';
					} else {
						echo '<img class="favoritestar-grey" src="'.$this->ktemplate->getImagePath('icons/favoritestar-grey.png').'"  alt="' . JText::_ ( 'MOD_KUNENALATEST_FAVORITE' ) . '" title="' . JText::_ ( 'MOD_KUNENALATEST_FAVORITE' ) . '" />';
					}
				}
			}
			if ($this->params->get ( 'sh_locked' )) {
				if ($item->locked) {
					echo '<img src="'.$this->ktemplate->getImagePath('icons/lock_sm.png').'"  alt="' . JText::_ ( 'MOD_KUNENALATEST_LOCKED_TOPIC' ) . '" title="' . JText::_ ( 'MOD_KUNENALATEST_LOCKED_TOPIC' ) . '" />';
				}
			}
			?>
		</span>
		<?php if ($this->params->get ( 'sh_firstcontentcharacter' )) : ?>
			<li class="klatest-preview-content"><?php echo JString::substr(KunenaParser::stripBBCode($item->message), '0', $this->params->get ( 'lengthcontentcharacters' )); ?></li>
		<?php endif; ?>
		<?php if ($this->params->get ( 'sh_category' )) : ?>
			<li class="klatest-cat"><?php echo JText::_ ( 'MOD_KUNENALATEST_IN_CATEGORY' ).' '.CKunenaLink::GetCategoryLink ( 'showcat', $item->catid, $item->catname ); ?></li>
		<?php endif; ?>
		<?php if ($this->params->get ( 'sh_author' )) : ?>
			<li class="klatest-author"><?php echo JText::_ ( 'MOD_KUNENALATEST_LAST_POST_BY' ) .' '. CKunenaLink::GetProfileLink ( $item->userid, $item->name ); ?></li>
		<?php endif; ?>
		<?php if ($this->params->get ( 'sh_time' )) : ?>
			<li class="klatest-posttime">
				<span title="<?php echo CKunenaTimeformat::showDate($this->params->get( 'choosemodel' ) == 'latestposts' ? $item->time : $item->lasttime, 'config_post_dateformat_hover') ?>">
					<?php echo CKunenaTimeformat::showDate($this->params->get( 'choosemodel' ) == 'latestposts' ? $item->time : $item->lasttime, 'config_post_dateformat') ?>
				</span>
			</li>
		<?php endif; ?>
	</ul>
</li>
<?php
	} //end foreach
?>
</ul>
<?php if ($this->params->get ( 'sh_morelink' )): ?>
	<p class="klatest-more"><?php echo CKunenaLink::GetShowLatestLink ( JText::_ ( 'MOD_KUNENALATEST_MORE_LINK' ) , $this->latestdo ); ?></p>
<?php endif; ?>
<?php
} else {
	echo JText::_('MOD_KUNENALATEST_OFFLINE');
} ?>
</div>