<?php
/**
 * @version $Id: bbcode.php 4336 2011-01-31 06:05:12Z severdia $
 * Kunena Component
 * @package Kunena
 *
 * @Copyright (C) 2008 - 2011 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/

// Dont allow direct linking
defined ( '_JEXEC' ) or die ();

// Kunena bbcode editor
$kunena_config = KunenaFactory::getConfig ();
?>
<table style="border: 0;">
		<tr>
			<td class="kpostbuttons">
				<ul id="kbbcode-toolbar"><li></li></ul>
			</td>
		</tr>
		<!-- Start extendable secondary toolbar -->
		<tr>
			<td class="kpostbuttons">
			<div id="kbbcode-size-options" style="display: none;">
			<span class="kmsgtext-xs" title='[size=1]'
				onmouseover="javascript:document.id('helpbox').set('value', '<?php
				echo KunenaParser::JSText('COM_KUNENA_EDITOR_HELPLINE_FONTSIZE_XS');?>')">&nbsp;<?php
				echo JText::_('COM_KUNENA_EDITOR_SIZE_SAMPLETEXT');
				?>&nbsp;</span>
			<span class="kmsgtext-s" title='[size=2]'
				onmouseover="javascript:document.id('helpbox').set('value', '<?php
				echo KunenaParser::JSText('COM_KUNENA_EDITOR_HELPLINE_FONTSIZE_S');?>')">&nbsp;<?php
				echo JText::_('COM_KUNENA_EDITOR_SIZE_SAMPLETEXT');
				?>&nbsp;</span>
			<span class="kmsgtext-m" title='[size=3]'
				onmouseover="javascript:document.id('helpbox').set('value', '<?php
				echo KunenaParser::JSText('COM_KUNENA_EDITOR_HELPLINE_FONTSIZE_M');?>')">&nbsp;<?php
				echo JText::_('COM_KUNENA_EDITOR_SIZE_SAMPLETEXT');
				?>&nbsp;</span>
			<span class="kmsgtext-l" title='[size=4]'
				onmouseover="javascript:document.id('helpbox').set('value', '<?php
				echo KunenaParser::JSText('COM_KUNENA_EDITOR_HELPLINE_FONTSIZE_L');?>')">&nbsp;<?php
				echo JText::_('COM_KUNENA_EDITOR_SIZE_SAMPLETEXT');
				?>&nbsp;</span>
			<span class="kmsgtext-xl" title='[size=5]'
				onmouseover="javascript:document.id('helpbox').set('value', '<?php
				echo KunenaParser::JSText('COM_KUNENA_EDITOR_HELPLINE_FONTSIZE_XL');?>')">&nbsp;<?php
				echo JText::_('COM_KUNENA_EDITOR_SIZE_SAMPLETEXT');
				?>&nbsp;</span>
			<span class="kmsgtext-xxl" title='[size=6]'
				onmouseover="javascript:document.id('helpbox').set('value', '<?php
				echo KunenaParser::JSText('COM_KUNENA_EDITOR_HELPLINE_FONTSIZE_XXL');?>')">&nbsp;<?php
				echo JText::_('COM_KUNENA_EDITOR_SIZE_SAMPLETEXT');
				?>&nbsp;</span>
			</div>
						<div id="kbbcode-link-options" style="display: none;">
				<?php echo JText::_('COM_KUNENA_EDITOR_LINK_URL'); ?>&nbsp;
				<input id="kbbcode-link_url" name="url" type="text" size="40" value=""
					onmouseover="javascript:document.id('helpbox').set('value', '<?php echo KunenaParser::JSText('COM_KUNENA_EDITOR_HELPLINE_LINKURL'); ?>')" />
				<?php echo JText::_('COM_KUNENA_EDITOR_LINK_TEXT'); ?>&nbsp;
				<input name="text2" id="kbbcode-link_text" type="text" size="30" maxlength="150"
					onmouseover="javascript:document.id('helpbox').set('value', '<?php echo KunenaParser::JSText('COM_KUNENA_EDITOR_HELPLINE_LINKTEXT'); ?>')" />
				<input type="button" name="insterLink" value="<?php echo JText::_('COM_KUNENA_EDITOR_INSERT'); ?>"
					onclick="kbbcode.replaceSelection('[url=' + document.id('kbbcode-link_url').get('value') + ']' + document.id('kbbcode-link_text').get('value') + '[/url]'); kToggleOrSwap('kbbcode-link-options');"
					onmouseover="javascript:document.id('helpbox').set('value', '<?php echo KunenaParser::JSText('COM_KUNENA_EDITOR_HELPLINE_LINKAPPLY'); ?>')" />
			</div>

			<div id="kbbcode-image-options" style="display: none;">
				<?php echo JText::_('COM_KUNENA_EDITOR_IMAGELINK_SIZE'); ?>&nbsp;
				<input id="kbbcode-image_size" name="size" type="text" size="10" maxlength="10"
 value="400"					onmouseover="javascript:document.id('helpbox').set('value', '<?php echo KunenaParser::JSText('COM_KUNENA_EDITOR_HELPLINE_IMAGELINKSIZE'); ?>')" />
				<?php echo JText::_('COM_KUNENA_EDITOR_IMAGELINK_URL'); ?>&nbsp;
				<input name="url2" id="kbbcode-image_url" type="text" size="40" value=""
					onmouseover="javascript:document.id('helpbox').set('value', '<?php echo KunenaParser::JSText('COM_KUNENA_EDITOR_HELPLINE_IMAGELINKURL'); ?>')" />&nbsp;
				<input type="button" name="Link" value="<?php echo JText::_('COM_KUNENA_EDITOR_INSERT'); ?>" onclick="kInsertImageLink()"
					onmouseover="javascript:document.id('helpbox').set('value', '<?php echo KunenaParser::JSText('COM_KUNENA_EDITOR_HELPLINE_IMAGELINKAPPLY'); ?>')" />
			</div>

			<?php
			if ($kunena_config->highlightcode) {
				$kunena_config = KunenaFactory::getConfig();
				if (KUNENA_JOOMLA_COMPAT == '1.5') {
					$path = JPATH_ROOT.'/libraries/geshi/geshi';
				} else {
					$path = JPATH_ROOT.'/plugins/content/geshi/geshi/geshi';
				}
				if ( file_exists($path) ) {
					$files = JFolder::files($path, ".php"); ?>
					<div id="kbbcode-code-options" style="display: none;">
						<?php echo JText::_('COM_KUNENA_EDITOR_CODE_TYPE'); ?>
						<select id="kcodetype" name="kcode_type" class="kbutton"
							onmouseover="javascript:document.id('helpbox').set('value', '<?php echo KunenaParser::JSText('COM_KUNENA_EDITOR_HELPLINE_CODETYPE'); ?>')">
						<?php
						echo '<option value = ""></option>';
						foreach ($files as $file)
							echo '<option value = "'.substr($file,0,-4).'">'.substr($file,0,-4).'</option>';
						?>
					</select>
					<input id="kbutton_addcode" type="button" name="Code" onclick="kInsertCode()" value="<?php echo JText::_('COM_KUNENA_EDITOR_CODE_INSERT'); ?>"
						onmouseover="javascript:document.id('helpbox').set('value', '<?php echo KunenaParser::JSText('COM_KUNENA_EDITOR_HELPLINE_CODEAPPLY'); ?>')" />
					</div>
			<?php }
			}
			if ($kunena_config->showvideotag) {
			?>

			<div id="kbbcode-video-options" style="display: none;"><?php
			echo JText::_('COM_KUNENA_EDITOR_VIDEO_SIZE');
			?><input id="kvideosize"
				name="videosize" type="text" size="5" maxlength="5"
				onmouseover="javascript:document.id('helpbox').set('value', '<?php
				echo KunenaParser::JSText('COM_KUNENA_EDITOR_HELPLINE_VIDEOSIZE');
				?>')" />
			<?php
			echo JText::_('COM_KUNENA_EDITOR_VIDEO_WIDTH');
			?><input id="kvideowidth" name="videowidth"
				type="text" size="5" maxlength="5"
				onmouseover="javascript:document.id('helpbox').set('value', '<?php
				echo KunenaParser::JSText('COM_KUNENA_EDITOR_HELPLINE_VIDEOWIDTH');
				?>')" />
			<?php
			echo JText::_('COM_KUNENA_EDITOR_VIDEO_HEIGHT');
			?><input id="kvideoheight"
				name="videoheight" type="text" size="5" maxlength="5"
				onmouseover="javascript:document.id('helpbox').set('value', '<?php
				echo KunenaParser::JSText('COM_KUNENA_EDITOR_HELPLINE_VIDEOHEIGHT');
				?>')" /> <br />
			<?php
			echo JText::_('COM_KUNENA_EDITOR_VIDEO_PROVIDER');
			?> <select id="kvideoprovider"
				name="provider" class="kbutton"
				onmouseover="javascript:document.id('helpbox').set('value', '<?php
				echo KunenaParser::JSText('COM_KUNENA_EDITOR_HELPLINE_VIDEOPROVIDER');
				?>')">
				<?php
				$vid_provider = array ( 'YouKu', 'Tudou', 'Google','Facebook','YouTube');
				foreach ( $vid_provider as $vid_type ) {
					$vid_type = explode ( ',', $vid_type );
					echo '<option value = "' . (! empty ( $vid_type [1] ) ? $this->escape($vid_type [1]) : JString::strtolower ( $this->escape($vid_type [0]) ) . '') . '">' . $this->escape($vid_type [0]) . '</option>';
				}
				?>
			</select> <?php
			echo JText::_('COM_KUNENA_EDITOR_VIDEO_ID');
			?><input id="kvideoid"
				name="videoid" type="text" size="11" maxlength="14"
				onmouseover="javascript:document.id('helpbox').set('value', '<?php
				echo KunenaParser::JSText('COM_KUNENA_EDITOR_HELPLINE_VIDEOID');
				?>')" />
			<input id="kbutton_addvideo1" type="button" name="Video" accesskey="p"
				onclick="kInsertVideo1()"
				value="<?php
						echo JText::_('COM_KUNENA_EDITOR_VIDEO_INSERT');
						?>"
				onmouseover="javascript:document.id('helpbox').set('value', '<?php
				echo KunenaParser::JSText('COM_KUNENA_EDITOR_HELPLINE_VIDEOAPPLY1');
				?>')" /><br />
			<?php
			echo JText::_('COM_KUNENA_EDITOR_VIDEO_URL');
			?><input id="kvideourl" name="videourl"
				type="text" size="30" maxlength="250" value=""
				onmouseover="javascript:document.id('helpbox').set('value', '<?php
				echo KunenaParser::JSText('COM_KUNENA_EDITOR_HELPLINE_VIDEOURL');
				?>')" />
			<input id="kbutton_addvideo2" type="button" name="Video" accesskey="p"
				onclick="kInsertVideo2()"
				value="<?php
						echo JText::_('COM_KUNENA_EDITOR_VIDEO_INSERT');
						?>"
				onmouseover="javascript:document.id('helpbox').set('value', '<?php
				echo KunenaParser::JSText('COM_KUNENA_EDITOR_HELPLINE_VIDEOAPPLY2');
				?>')" />
			</div>
			</td>
		</tr>
		<?php
		}
		if (!$this->config->disemoticons) : ?>
		<tr>
			<td class="kpostbuttons">
			<div id="smilie"><?php
			$emoticons = smile::getEmoticons(0, 1);
			foreach ( $emoticons as $emo_code=>$emo_url ) {
				echo '<img class="btnImage" src="' . $emo_url . '" border="0" alt="' . $emo_code . ' " title="' . $emo_code . ' " onclick="kbbcode.insert(\' '. $emo_code .' \', \'after\', true);" style="cursor:pointer"/> ';
			}
			?>
			</div>
			</td>
		</tr>
		<?php endif; ?>
		<!-- end of extendable secondary toolbar -->

</table>