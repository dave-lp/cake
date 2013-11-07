jQuery(document).ready(function(){
			jQuery("#surgery_date_datepicker").datepicker({
			dateFormat: 'yy-mm-dd',
		});
		jQuery("#date_funded_datepicker").datepicker({
			dateFormat: 'yy-mm-dd',
		});
		jQuery("#settled_date_datepicker").datepicker({
			dateFormat: 'yy-mm-dd',
		});
		jQuery("#dob_datepicker").datepicker({
			dateFormat: 'yy-mm-dd',
		});
		jQuery("#date_sent_to_attorney_datepicker").datepicker({
			dateFormat: 'yy-mm-dd',
		});
	jQuery('#tabs').tabs();
	jQuery("#bad_faith_note").hide();
});
jQuery(function () {
	jQuery("#bad_faith").change(function() {
		var val = jQuery(this).val();
		console.log(val);
		if(val === "Yes") {
			jQuery("#bad_faith_note").show();
		} else if(val === "No") {
			jQuery("#bad_faith_note").hide();
			}
	});
});
