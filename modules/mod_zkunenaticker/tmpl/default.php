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
?>
<?php if ($params->get('addHeader',1)) : ?>
	<div class="zKunenaTickerHeader"><?php echo $params->get('headerText') ?></div>
<?php endif; ?>
<div id="zKunenaTicker<?php echo $module->id ?>" class="zKunenaTicker">
    <div id="zKunenaTickerWrap<?php echo $module->id ?>" class="zKunenaTickerWrap" >
        <ul id="zTickerVertical<?php echo $module->id ?>" class="zTickerVertical">
          <?php 
		  $i = 1;
		  foreach ($list as $k => $item) : ?>
          <li class=" tickeritems tickeritem<?php echo $i ?>" >
          	<?php if($params->get('showAvatar', 1) == 1 ) :?>
            	<div class="zKunenaTickerAvatar"><?php echo modZKunenaTickerHelper::getAvatar( $item->userid, $params ); ?></div>
            <?php elseif($params->get('showAvatar') == 2) :?>
        	<div class="zKlatestAvatar_left">
        		<?php echo modZKunenaTickerHelper::getTopicIcon( $item, $params ); ?>
            </div>
			<?php endif ; ?>
            <div class="zKunenaTickerDetails">
                <div class="zKunenaTickerSubject"><?php echo modZKunenaTickerHelper::getSubject($item, $params); ?></div>
                <div class="zKunenaTickerAuthor">
                    <?php if ($params->get('showAuthor', 1)) {
                        echo $params->get( 'authorPrefix', 'by' ). ' ';
                        echo CKunenaLink::GetProfileLink ($item->userid, $item->name);
                    }
                    ?>
                </div>
                <?php if($params->get('showTime', 1 )) :?>
                <div class="zKunenaTickerTime"><?php echo modZKunenaTickerHelper::getPostDate($item, $params)?></div>
                <?php endif ; ?>
            </div>
          </li>
          <?php 
		  $i ++;
		  endforeach ?>
        </ul>
    </div>
<?php if ($params->get('allowLink',1)) : ?>
	<span class="small"> <?php echo modZKunenaTickerHelper::getCredit() ;?> </span>
<?php endif;?>
</div>




