window.addEvent("load",function(){
	// get the updates
	//getUpdates();
	$$('.pane-down').each(function(el){el.removeClass('pane-down');el.addClass('pane-hide')});

	var kunena_sel = $$('.kunenacategories')[0];
	var kunena_fil = $('jform_params_categoryFilter');
	
	if (kunena_sel.value < 1 ) 
		kunena_fil.setProperty('disabled', 'disabled'); 
	
	kunena_sel.addEvent('change',function(event) {
		kunena_sel.value > 0 ? kunena_fil.removeProperty('disabled') : kunena_fil.setProperty('disabled', 'disabled');
	});
	
	var mooFx_switch = $('jform_params_MooFX');
	var moo_opts = $$('.mooOptions');
	
	if (mooFx_switch.value < 1 ) 
		moo_opts.each(function(el){el.setProperty('disabled', 'disabled')});
	
	mooFx_switch.addEvent('change',function(event) {
		mooFx_switch.value > 0 ? moo_opts.each(function(el){el.removeProperty('disabled')}) : moo_opts.each(function(el){el.setProperty('disabled', 'disabled')});
	});

	var fluid = $('jform_params_fluidWidth');
	if (fluid.value > 0 ) {
		$('jform_params_modulewidth').setProperty('disabled', 'disabled');
		$('jform_params_minwidth').removeProperty('disabled');
	} else 
		$('jform_params_minwidth').setProperty('disabled', 'disabled'); 
	
	fluid.addEvent('change',function(event) {
		
    	if (fluid.value > 0 ) {
			$('jform_params_modulewidth').setProperty('disabled', 'disabled');
			$('jform_params_minwidth').removeProperty('disabled');
		} else {
			$('jform_params_modulewidth').removeProperty('disabled');
			$('jform_params_minwidth').setProperty('disabled', 'disabled');
		}
	});	
	
	var showTime = $('jform_params_showTime');
	var timeOpt = $('jform_params_timeFormat');
	
	if (showTime.value < 1 ) 
		timeOpt.setProperty('disabled', 'disabled');	
	
	showTime.addEvent('change',function(event) {
		showTime.value > 0 ? timeOpt.removeProperty('disabled') : timeOpt.setProperty('disabled', 'disabled');
	});	
	
	// switches
	$$('.z-switch').each(function(el){
		el.setStyle('display','none');
		var style = (el.value == 1) ? 'on' : 'off';
		var switcher = new Element('div',{'class' : 'switcher-'+style});
		switcher.inject(el, 'after');
		switcher.addEvent("click", function(){
			if(el.value == 1){
				switcher.setProperty('class','switcher-off');
				el.value = 0;
				el.fireEvent('change');
			}else{
				switcher.setProperty('class','switcher-on');
				el.value = 1;
				el.fireEvent('change');
			}
		});
	});
	
	// other form operations
	//$$('.experimental').each(function(el){el.getParent().innerHTML = el.getParent().innerHTML + "<span class=\"unit\">Experimental!</span>"});
	$$('.input-pixels').each(function(el){el.getParent().innerHTML = el.getParent().innerHTML + "<span class=\"unit\">px</span>"});
	$$('.input-percents').each(function(el){el.getParent().innerHTML = el.getParent().innerHTML + "<span class=\"unit\">%</span>"});
	$$('.input-minutes').each(function(el){el.getParent().innerHTML = el.getParent().innerHTML + "<span class=\"unit\">minutes</span>"});
	$$('.input-ms').each(function(el){el.getParent().innerHTML = el.getParent().innerHTML + "<span class=\"unit\">ms</span>"});
	
	var link = new Element('a', { 'class' : 'nZambiLink', 'href' : 'http://www.nzambi.braineater.ca', 'target' : '_blank' })
	link.inject($$('div.panel')[$$('div.panel').length-1].getElement('h3'), 'bottom');
	link.addEvent('click', function(e) { e.stopPropagation(); });
});

// encode chars
function htmlspecialchars(string) {
    string = string.toString();
    string = string.replace(/&/g, '[ampersand]').replace(/</g, '[leftbracket]').replace(/>/g, '[rightbracket]');
    return string;
}
// decode chars
function htmlspecialchars_decode(string) {
	string = string.toString();
	string = string.replace(/\[ampersand\]/g, '&').replace(/\[leftbracket\]/g, '<').replace(/\[rightbracket\]/g, '>');
	return string;
}