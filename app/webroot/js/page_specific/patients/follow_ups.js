jQuery(document).ready(function() {
	if(jQuery(".date").length > 0) {
		jQuery(".date").datepicker({
			dateFormat: 'yy-mm-dd',
		});
	}
	jQuery('#FollowUpTable').dataTable({
		"sPaginationType": "full_numbers",
		"aaSortingFixed": [[0,'asc']],
		"fnDrawCallback": function(oSettings) {
			jQuery.uniform.update();
		}
	});
});

