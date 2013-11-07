jQuery(document).ready(function() {
	jQuery('#FollowUpTable').dataTable({
		"sPaginationType": "full_numbers",
		"aaSortingFixed": [[0,'asc']],
		"fnDrawCallback": function(oSettings) {
			jQuery.uniform.update();
		}
	});
	jQuery('#SurgeryFollowUpTable').dataTable({
		"sPaginationType": "full_numbers",
		"aaSortingFixed": [[0,'asc']],
		"fnDrawCallback": function(oSettings) {
			jQuery.uniform.update();
		}
	});
});

