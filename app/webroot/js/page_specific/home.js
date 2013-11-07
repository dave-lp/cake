jQuery(document).ready(function(){

	jQuery("#folllow_up_schedule_and_date").click(function() {

		jPrompt('Type something:', '', 'Dialog', function(r) {
			console.log(r);
			if( r ) alert('You entered ' + r);
		});

		var employee, date;
		jQuery(".datepicker").datepicker({
			dateFormat: 'yy-mm-dd'
		});
		jQuery(".datepicker").datepicker("disable");
		jQuery("#dialog_scheduler_follow_up").dialog({
			width: 400,
			modal: true,
			open: function(event, ui) {
				jQuery(".datepicker").datepicker("enable");
			},
			/*
			buttons: {
				"Submit": function() {
					date = jQuery('#scheduler_follow_up_date').val();
					employee = jQuery('#scheduler_follow_up_employee').val();
					console.log(employee);
					//window.location='/controls/FollowUpSchedForm/'+date+'/'+employee+'';
					//jQuery( this ).dialog( "close" );
				},
				Cancel: function() {
					//jQuery( this ).dialog( "close" );
				}
			}
		});
	});
});
