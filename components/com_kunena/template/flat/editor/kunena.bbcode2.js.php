<?php
/**
 * @version $Id: kunena.bbcode.js.php 4336 2011-01-31 06:05:12Z severdia $
 * Kunena Component
 * @package Kunena
 *
 * @Copyright (C) 2008 - 2011 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/

defined( '_JEXEC' ) or die();

$kunena_config = KunenaFactory::getConfig ();
require_once (KPATH_SITE . DS . 'lib' .DS. 'kunena.poll.class.php');
$kunena_poll =& CKunenaPolls::getInstance();
$document =& JFactory::getDocument();

ob_start();

//
// function kPreviewHelper (elementId)
//
// Helper function for to perform JSON request for preview
//
?>
function kPreviewHelper()
{
	if (_previewActive == true){
		previewRequest = new Request.JSON({url: "<?php echo CKunenaLink::GetJsonURL('preview');?>",
				  							onSuccess: function(response){
			var __message = $("kbbcode-preview");
			if (__message) {
				__message.set("html", response.preview);
			}
			}}).post({body: $("kbbcode-message").get("value")
		});
	}
}

<?php
// Now we instanciate the class in an object and implement all the buttons and functions.
?>
window.addEvent('domready', function() {
<?php
//creating a kbbcode object
?>
kbbcode = new kbbcode('kbbcode-message', 'kbbcode-toolbar', {
				dispatchChangeEvent: true,
				changeEventDelay: 1000,
				interceptTab: true
			});

kbbcode.addFunction('Bold', function() {
	this.wrapSelection('[b]', '[/b]', false);
}, {'id': 'kbbcode-bold-button',
	'title': '<?php echo JText::_('COM_KUNENA_EDITOR_BOLD');?>',
	'alt': '<?php echo JText::_('COM_KUNENA_EDITOR_HELPLINE_BOLD');?>',
	'onmouseover' : '$("helpbox").set("value", "<?php echo JText::_('COM_KUNENA_EDITOR_HELPLINE_BOLD');?>")'});

kbbcode.addFunction('Italic', function() {
	this.wrapSelection('[i]', '[/i]', false);
}, {'id': 'kbbcode-italic-button',
	'title': '<?php echo JText::_('COM_KUNENA_EDITOR_ITALIC');?>',
	'alt': '<?php echo JText::_('COM_KUNENA_EDITOR_HELPLINE_ITALIC');?>',
	'onmouseover' : '$("helpbox").set("value", "<?php echo JText::_('COM_KUNENA_EDITOR_HELPLINE_ITALIC');?>")'});






kbbcode.addFunction('Size', function() {
	kToggleOrSwap("kbbcode-size-options");
}, {'id': 'kbbcode-size-button',
	'title': '<?php echo JText::_('COM_KUNENA_EDITOR_FONTSIZE');?>',
	'alt': '<?php echo JText::_('COM_KUNENA_EDITOR_HELPLINE_FONTSIZE');?>',
	'onmouseover' : '$("helpbox").set("value", "<?php echo JText::_('COM_KUNENA_EDITOR_HELPLINE_FONTSIZE');?>")'});











kbbcode.addFunction('Center', function() {
	this.wrapSelection('[center]', '[/center]', false);
}, {'id': 'kbbcode-center-button',
	'title': '<?php echo JText::_('COM_KUNENA_EDITOR_CENTER');?>',
	'alt': '<?php echo JText::_('COM_KUNENA_EDITOR_HELPLINE_CENTER');?>',
	'onmouseover' : '$("helpbox").set("value", "<?php echo JText::_('COM_KUNENA_EDITOR_HELPLINE_CENTER');?>")'});






kbbcode.addFunction('Quote', function() {
	this.wrapSelection('[quote]', '[/quote]', false);
}, {'id': 'kbbcode-quote-button',
	'title': '<?php echo JText::_('COM_KUNENA_EDITOR_QUOTE');?>',
	'alt': '<?php echo JText::_('COM_KUNENA_EDITOR_HELPLINE_QUOTE');?>',
	'onmouseover' : '$("helpbox").set("value", "<?php echo JText::_('COM_KUNENA_EDITOR_HELPLINE_QUOTE');?>")'});





<?php
if ($kunena_config->showspoilertag) {
?>


kbbcode.addFunction('Spoiler', function() {
	this.wrapSelection('[spoiler]', '[/spoiler]', false);
}, {'id': 'kbbcode-spoiler-button',
	'title': '<?php echo JText::_('COM_KUNENA_EDITOR_SPOILER');?>',
	'alt': '<?php echo JText::_('COM_KUNENA_EDITOR_HELPLINE_SPOILER');?>',
	'onmouseover' : '$("helpbox").set("value", "<?php echo JText::_('COM_KUNENA_EDITOR_HELPLINE_SPOILER');?>")'});
<?php
}
?>

kbbcode.addFunction('Hide', function() {
	this.wrapSelection('[hide]', '[/hide]', false);
}, {'id': 'kbbcode-hide-button',
	'title': '<?php echo JText::_('COM_KUNENA_EDITOR_HIDE');?>',
	'alt': '<?php echo JText::_('COM_KUNENA_EDITOR_HELPLINE_HIDE');?>',
	'onmouseover' : '$("helpbox").set("value", "<?php echo JText::_('COM_KUNENA_EDITOR_HELPLINE_HIDE');?>")'});




kbbcode.addFunction('#', function() {
}, {'id': 'kbbcode-separator3'});



kbbcode.addFunction('Image', function() {
	kToggleOrSwap("kbbcode-image-options");
}, {'id': 'kbbcode-image-button',
	'title': '<?php echo JText::_('COM_KUNENA_EDITOR_IMAGELINK');?>',
	'alt': '<?php echo JText::_('COM_KUNENA_EDITOR_HELPLINE_IMAGELINK');?>',
	'onmouseover' : '$("helpbox").set("value", "<?php echo JText::_('COM_KUNENA_EDITOR_HELPLINE_IMAGELINK');?>")'});



kbbcode.addFunction('Link', function() {
	sel = this.getSelection();
	if (sel != "") {
		$('kbbcode-link_text').set('value', sel);
	}
	kToggleOrSwap("kbbcode-link-options");
}, {'id': 'kbbcode-link-button',
	'title': '<?php echo JText::_('COM_KUNENA_EDITOR_LINK');?>',
	'alt': '<?php echo JText::_('COM_KUNENA_EDITOR_HELPLINE_LINK');?>',
	'onmouseover' : '$("helpbox").set("value", "<?php echo JText::_('COM_KUNENA_EDITOR_HELPLINE_LINK');?>")'});
<?php
/*
kbbcode.addFunction('Gallery', function() {
	kToggleOrSwap("kbbcode-gallery-options");
}, {'id': 'kbbcode-gallery-button',
	'title': '<?php echo JText::_('COM_KUNENA_EDITOR_GALLERY');?>',
	'alt': '<?php echo JText::_('COM_KUNENA_EDITOR_HELPLINE_GALLERY');?>',
	'onmouseover' : '$("helpbox").set("value", "<?php echo JText::_('COM_KUNENA_EDITOR_HELPLINE_GALLERY');?>")'});
*/
?>

<?php

if ($kunena_config->showebaytag) {
?>
kbbcode.addFunction('eBay', function() {
	this.wrapSelection('[ebay]', '[/ebay]', false);
}, {'id': 'kbbcode-ebay-button',
	'title': '<?php echo JText::_('COM_KUNENA_EDITOR_EBAY');?>',
	'alt': '<?php echo JText::_('COM_KUNENA_EDITOR_HELPLINE_EBAY');?>',
	'onmouseover' : '$("helpbox").set("value", "<?php echo JText::_('COM_KUNENA_EDITOR_HELPLINE_EBAY');?>")'});
<?php
}
?>

<?php
if ($kunena_config->showvideotag) {
?>
kbbcode.addFunction('Video', function() {
	kToggleOrSwap("kbbcode-video-options");
}, {'id': 'kbbcode-video-button',
	'title': '<?php echo JText::_('COM_KUNENA_EDITOR_VIDEO');?>',
	'alt': '<?php echo JText::_('COM_KUNENA_EDITOR_HELPLINE_VIDEO');?>',
	'onmouseover' : '$("helpbox").set("value", "<?php echo JText::_('COM_KUNENA_EDITOR_HELPLINE_VIDEO');?>")'});



<?php
}
?>



<?php if (1==0) { // disable for now TODO: make safe - dont allow public to access modules?>
kbbcode.addFunction('Module', function() {
	this.wrapSelection('[module]', '[/module]', false);
}, {'id': 'kbbcode-module-button',
	'title': '<?php echo JText::_('COM_KUNENA_EDITOR_MODULE');?>',
	'alt': '<?php echo JText::_('COM_KUNENA_EDITOR_HELPLINE_MODULE');?>',
	'onmouseover' : '$("helpbox").set("value", "<?php echo JText::_('COM_KUNENA_EDITOR_HELPLINE_MODULE');?>")'});



<?php } // end disable ?>


<?php if ($this->my->id != 0) { ?>







<?php } ?>







<?php
// Add the click behaviors for our bbcode options
?>
	





	var size = $$("div#kbbcode-size-options span");
	if (size) {
		size.addEvent("click", function(){
			var tag = this.get( "title" );
			kbbcode.wrapSelection(tag , '[/size]', false);
			kToggleOrSwap("kbbcode-size-options");
		});
	}

	bindAttachments();
	newAttachment();
	//This is need to retrieve the video provider selected by the user in the dropdownlist
	if ($('kvideoprovider') != undefined) {
		$('kvideoprovider').addEvent('change', function() {
			var sel = $$('#kvideoprovider option:selected');
			sel.each(function(el) {
				$('kvideoprovider').store('videoprov',el.value);
			});
		});
	}

	// Fianlly apply some screwy IE7 and IE8 fixes to the html...
	IEcompatibility();
});

<?php
/* Plupload hooks: promising piece of software, but not ready for production use */
/*
window.addEvent('domready', function() {
	kupload = $('kupload');
	if (typeof(plupload) == 'object' && kupload) {
		var uploader = new plupload.Uploader({
			//runtimes : 'gears,silverlight,flash,html5,html4',
			runtimes : 'flash,html4',
			browse-button : 'kupload',
			max_file_size : '4mb',
			url : '<?php echo CKunenaLink::GetJsonURL('uploadfile','upload');?>',
			//resize : {width : 320, height : 240, quality : 90},
			flash_swf_url : '<?php echo KUNENA_DIRECTURL;?>/js/plupload/plupload.flash.swf',
			silverlight_xap_url : '<?php echo KUNENA_DIRECTURL;?>/js/plupload/plupload.silverlight.xap',
			filters : [
				{title : "Image files", extensions : "jpg,gif,png"},
				{title : "Zip files", extensions : "zip,gz"}
			],
			multipart_params : [
				{type: 'hidden', name: 'mesid', value: '0'}
			]
		});

		uploader.bind('Init', function(up, params) {
			$('kattachmentsnote').set('html', "<div>Multi-File Upload enabled: " + params.runtime + "</div>");
		});

		uploader.bind('FilesAdded', function(up, files) {
			$each(files, function(file, i) {
				fileDiv = new Element('div', {id: file.id, html: file.name + ' (' + plupload.formatSize(file.size) + ') <a></a> <b></b>'});
				fileDiv.inject($('kattachment'), 'before');
				$$('#'+file.id+' a').addEvent('click', function(e) { $(file.id).dispose(); uploader.removeFile(file); return false;});
			});
			$('kupload').fireEvent('upload', null, 500);
		});

		uploader.bind('UploadProgress', function(up, file) {
			$$("#" + file.id + " b").set('html', file.percent + "%");
		});

		uploader.bind('FileUploaded', function(up, file) {
			$$("#" + file.id + " b").set('html', file.response);
		});

		kupload.addEvent('upload', function() {
			uploader.start();
		});

		kupload.setProperty('value', '');
		uploader.init();
	}
});
*/
?>

<?php
$script = ob_get_contents();
ob_end_clean();

CKunenaTools::addScript(KUNENA_DIRECTURL . 'template/default/js/editor-min.js');
$document->addScriptDeclaration( "// <![CDATA[
{$script}
// ]]>");
