jQuery(document).ready(function(){

	jQuery('#tabs').tabs();

	jQuery(".phone").text(function(i, text) {
		text = text.replace(/(\d{3})(\d{3})(\d{4})/, "$1-$2-$3");
		return text;
	});

	if(jQuery('#date_recommended_datepicker').length > 0) {
		jQuery("#date_recommended_datepicker").datepicker({
			dateFormat: 'yy-mm-dd',
		});
	}
	if(jQuery('#scheduled_surgery_date_datepicker').length > 0) {
		jQuery("#scheduled_surgery_date_datepicker").datepicker({
			dateFormat: 'yy-mm-dd',
		});
	}
	if(jQuery('#surgery_date_datepicker').length > 0) {
		jQuery("#surgery_date_datepicker").datepicker({
			dateFormat: 'yy-mm-dd',
		});
	}
	if(jQuery('#preops_date_datepicker').length > 0) {
		jQuery("#preops_date_datepicker").datepicker({
			dateFormat: 'yy-mm-dd',
		});
	}

	if(jQuery('#lop_sent_date_datepicker').length > 0) {
		jQuery("#lop_sent_date_datepicker").datepicker({
			dateFormat: 'yy-mm-dd',
		});
	}
	if(jQuery('#lop_received_date_datepicker').length > 0) {
		jQuery("#lop_received_date_datepicker").datepicker({
			dateFormat: 'yy-mm-dd',
		});
	}
	if(jQuery('#scheduled_follow_up_date_datepicker').length > 0) {
		jQuery("#scheduled_follow_up_date_datepicker").datepicker({
			dateFormat: 'yy-mm-dd',
		});
	}

});
