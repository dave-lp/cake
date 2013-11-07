jQuery.noConflict();

jQuery(document).ready(function(){

	var rightpanelmargin = '260px';
	//Modernizr.Detectizr.detect();
	if(jQuery('html').hasClass('chrome25') && jQuery('html').hasClass('windows')) {
		jQuery('.leftpanel').css({width: '259px', position: 'static'});
		jQuery('.rightpanel, .breadcrumbwidget').css({position: 'static'});
		rightpanelmargin = '259px';
	}

	prettyPrint();			//syntax highlighter
	mainwrapperHeight();
	responsive();


	// adjust height of mainwrapper when 
	// it's below the document height
	function mainwrapperHeight() {
		var windowHeight = jQuery(window).height();
		var mainWrapperHeight = jQuery('.mainwrapper').height();
		var leftPanelHeight = jQuery('.leftpanel').height();
		if(leftPanelHeight > mainWrapperHeight)
			jQuery('.mainwrapper').css({minHeight: leftPanelHeight});	
		if(jQuery('.mainwrapper').height() < windowHeight)
			jQuery('.mainwrapper').css({minHeight: windowHeight});
	}

	function responsive() {

		var windowWidth = jQuery(window).width();

		// hiding and showing left menu
		if(!jQuery('.showmenu').hasClass('clicked')) {

			if(windowWidth < 960)
				hideLeftPanel();
			else
				showLeftPanel();
		}

		// rearranging widget icons in dashboard
		if(windowWidth < 768) {
			if(jQuery('.widgeticons .one_third').length == 0) {
				var count = 0;
				jQuery('.widgeticons li').each(function(){
					jQuery(this).removeClass('one_fifth last').addClass('one_third');
					if(count == 2) {
						jQuery(this).addClass('last');
						count = 0;
					} else { count++; }
				});	
			}
		} else {
			if(jQuery('.widgeticons .one_firth').length == 0) {
				var count = 0;
				jQuery('.widgeticons li').each(function(){
					jQuery(this).removeClass('one_third last').addClass('one_fifth');
					if(count == 4) {
						jQuery(this).addClass('last');
						count = 0;
					} else { count++; }
				});	
			}
		}
	}

	// when resize window event fired
	jQuery(window).resize(function(){
		mainwrapperHeight();
		responsive();
	});

	// dropdown in leftmenu
	jQuery('.leftmenu .dropdown > a').click(function(){
		if(!jQuery(this).next().is(':visible'))
			jQuery(this).next().slideDown('fast');
		else
			jQuery(this).next().slideUp('fast');	
		return false;
	});

	// hide left panel
	function hideLeftPanel() {
		jQuery('.leftpanel').css({marginLeft: '-260px'}).addClass('hide');
		jQuery('.rightpanel').css({marginLeft: 0});
		jQuery('.mainwrapper').css({backgroundPosition: '-260px 0'});
		jQuery('.footerleft').hide();
		jQuery('.footerright').css({marginLeft: 0});
	}

	// show left panel
	function showLeftPanel() {
		jQuery('.leftpanel').css({marginLeft: '0px'}).removeClass('hide');
		jQuery('.rightpanel').css({marginLeft: rightpanelmargin});
		jQuery('.mainwrapper').css({backgroundPosition: '0 0'});
		jQuery('.footerleft').show();
		jQuery('.footerright').css({marginLeft: rightpanelmargin});
	}

	// show and hide left panel
	jQuery('.showmenu').click(function() {
		jQuery(this).addClass('clicked');
		if(jQuery('.leftpanel').hasClass('hide'))
			showLeftPanel();
		else
			hideLeftPanel();
		return false;
	});

	// transform checkbox and radio box using uniform plugin
	if(jQuery().uniform)
		jQuery('input:checkbox, input:radio, select.uniformselect').uniform();

	// check all checkboxes in table
	if(jQuery('.checkall').length > 0) {
		jQuery('.checkall').click(function(){
			var parentTable = jQuery(this).parents('table');										   
			var ch = parentTable.find('tbody input[type=checkbox]');										 
			if(jQuery(this).is(':checked')) {

				//check all rows in table
				ch.each(function(){ 
					jQuery(this).attr('checked',true);
					jQuery(this).parent().addClass('checked');	//used for the custom checkbox style
					jQuery(this).parents('tr').addClass('selected'); // to highlight row as selected
				});


			} else {

				//uncheck all rows in table
				ch.each(function(){ 
					jQuery(this).attr('checked',false); 
					jQuery(this).parent().removeClass('checked');	//used for the custom checkbox style
					jQuery(this).parents('tr').removeClass('selected');
				});	

			}
		});
	}


	// delete row in a table
	if(jQuery('.deleterow').length > 0) {
		jQuery('.deleterow').click(function(){
			var conf = confirm('Continue delete?');
			if(conf)
				jQuery(this).parents('tr').fadeOut(function(){
					jQuery(this).remove();
					// do some other stuff here
				});
				return false;
		});	
	}


	// dynamic table
	if(jQuery('#dyntable').length > 0) {
		jQuery('#dyntable').dataTable({
			"sPaginationType": "full_numbers",
			"aaSortingFixed": [[0,'asc']],
			"fnDrawCallback": function(oSettings) {
				jQuery.uniform.update();
			}
		});
	}


	/////////////////////////////// ELEMENTS.HTML //////////////////////////////


	// date picker
	if(jQuery('#datepicker').length > 0)
		jQuery( "#datepicker" ).datepicker({
			dateFormat: 'yy-mm-dd',
		});


	// growl notification
	if(jQuery('#growl').length > 0) {
		jQuery('#growl').click(function(){
			jQuery.jGrowl("Hello world!");
		});
	}

	// another growl notification
	if(jQuery('#growl2').length > 0) {
		jQuery('#growl2').click(function(){
			var msg = "This notification will live a little longer.";
			jQuery.jGrowl(msg, { life: 5000});
		});
	}

	// basic alert box
	if(jQuery('.alertboxbutton').length > 0) {
		jQuery('.alertboxbutton').click(function(){
			jAlert('This is a custom alert box', 'Alert Dialog');
		});
	}

	// confirm box
	if(jQuery('.confirmbutton').length > 0) {
		jQuery('.confirmbutton').click(function(){
			jConfirm('Can you confirm this?', 'Confirmation Dialog', function(r) {
				jAlert('Confirmed: ' + r, 'Confirmation Results');
			});
		});
	}

	// promptbox
	if(jQuery('.promptbutton').length > 0) {
		jQuery('.promptbutton').click
		(function(){
			jPrompt('Type something:', 'Prefilled value', 'Prompt Dialog', function(r) {
				if( r ) alert('You entered ' + r);
			});
		});
	}

	// alert with html
	if(jQuery('.alerthtmlbutton').length > 0) {
		jQuery('.alerthtmlbutton').click(function(){
			jAlert('You can use HTML, such as <strong>bold</strong>, <em>italics</em>, and <u>underline</u>!');
		});
	}

	// sortable list
	if(jQuery('#sortable').length > 0)
		jQuery("#sortable").sortable();

	// sortable list with content-->
	if(jQuery('#sortable2').length > 0) {
		jQuery("#sortable2").sortable();
		jQuery('.showcnt').click(function(){
			var t = jQuery(this);
			var det = t.parents('li').find('.details');
			if(!det.is(':visible')) {
				det.slideDown();
				t.removeClass('icon-arrow-down').addClass('icon-arrow-up');
			} else {
				det.slideUp();
				t.removeClass('icon-arrow-up').addClass('icon-arrow-down');
			}
		});
	}

	///// MESSAGES /////	
	if(jQuery('.mailinbox').length > 0) {

		// star
		jQuery('.msgstar').click(function(){
			if(jQuery(this).hasClass('starred'))
				jQuery(this).removeClass('starred');
			else
				jQuery(this).addClass('starred');
		});

		//add class selected to table row when checked
		jQuery('.mailinbox tbody input:checkbox').click(function(){
			if(jQuery(this).is(':checked'))
				jQuery(this).parents('tr').addClass('selected');
			else
				jQuery(this).parents('tr').removeClass('selected');
		});

		// trash
		if(jQuery('.msgtrash').length > 0) {
			jQuery('.msgtrash').click(function(){
				var c = false;
				var cn = 0;
				var o = new Array();
				jQuery('.mailinbox input:checkbox').each(function(){
					if(jQuery(this).is(':checked')) {
						c = true;
						o[cn] = jQuery(this);
						cn++;
					}
				});
				if(!c) {
					alert('No selected message');	
				} else {
					var msg = (o.length > 1)? 'messages' : 'message';
					if(confirm('Delete '+o.length+' '+msg+'?')) {
						for(var a=0;a<cn;a++) {
							jQuery(o[a]).parents('tr').remove();	
						}
					}
				}
			});
		}
	}

	//jQuery('#tabs, #tabs2').tabs();
});
