jQuery(document).ready(function(){

	jQuery(".chzn-select").chosen();
	jQuery("#phone").mask("(999) 999-9999");
	jQuery('#timepicker1').timepicker();
	jQuery(".phone").text(function(i, text) {
		text = text.replace(/(\d{3})(\d{3})(\d{4})/, "$1-$2-$3");
		return text;
	});
	if(jQuery('#date_entered_datepicker').length > 0) {
		jQuery("#date_entered_datepicker").datepicker({
			dateFormat: 'yy-mm-dd',
		});
	}
	if(jQuery('#appointment_date_datepicker').length > 0) {
		jQuery("#appointment_date_datepicker").datepicker({
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
	if(jQuery('#date_entered_datepicker').length > 0) {
		jQuery("#date_entered_datepicker").datepicker({
			dateFormat: 'yy-mm-dd',
		});
	}
	if(jQuery('#appointment_date_datepicker').length > 0) {
		jQuery("#appointment_date_datepicker").datepicker({
			dateFormat: 'yy-mm-dd',
		});
	}
	jQuery('#lop_sent').change(function(){
		if(jQuery(this).is(':checked')){
			jQuery('#lop_sent_date_datepicker').datepicker('setDate', new Date('yy-mm-dd'));
		} else {
			jQuery('#lop_sent_date_datepicker').val('0000-00-00');
		}
	});	

	jQuery('#lop_received').change(function(){
		if(jQuery(this).is(':checked')){
			jQuery('#lop_received_date_datepicker').datepicker('setDate', new Date('yy-mm-dd'));
		} else {
			jQuery('#lop_received_date_datepicker').val('0000-00-00');
		}
	});	

});
