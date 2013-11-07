jQuery(document).ready(function() {
	jQuery('.addAtterony').click(function() {
		jQuery.get('/attorneys/add', function(data) {
			jAlert(data, 'Add Attorney');
			jQuery('.result').html(data);
		});
	});
	jQuery('#tabs, #tabs2').tabs();
});
