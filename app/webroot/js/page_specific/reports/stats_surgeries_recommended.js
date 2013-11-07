$(document).ready(function() {
	$('#printTable').dataTable({
		"sDom": 'TC<"clear">lfrtip',
		"oTableTools": {
			"sSwfPath": "/swf/copy_csv_xls_pdf.swf"
		}
	});
	if(jQuery('#start_datepicker').length > 0) {
		jQuery("#start_datepicker").datepicker({
			dateFormat: 'yy-mm-dd',
		});
	}
	if(jQuery('#end_datepicker').length > 0) {
		jQuery("#end_datepicker").datepicker({
			dateFormat: 'yy-mm-dd',
		});
	}
	$(function() {
		$('#submit_dates').click(function() {
			var startDate, endDate
			startDate = $('#start_datepicker').val();
			endDate = $('#end_datepicker').val();
			$.ajax({
				type: 'POST',
				success: function(data) {
					window.location.href='/reports/stats_surgeries_recommended/'+startDate+'/'+endDate;
				},
				error: function(){
				},
				url: '/reports/stats_surgeries_recommended/'+startDate+'/'+endDate,
				cache:false
			});
		});
	});
});

