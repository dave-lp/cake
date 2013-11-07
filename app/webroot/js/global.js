
function realTimeDate() {
	if (!document.all && !document.getElementById) {
		return
	}

	thelement = document.getElementById ? document.getElementById("tick2") : document.all.tick2;

	var Digital = new Date();
	var hours = Digital.getHours();
	var minutes = Digital.getMinutes();
	var seconds = Digital.getSeconds();
	var dn = "PM";

	if (hours < 12) {
		dn = "AM"
	}
	if (hours > 12) {
		hours = hours - 12
	}
	if (hours == 0) {
		hours = 12
	}
	if (minutes <= 9) {
		minutes = "0" + minutes
	}
	if (seconds <= 9) {
		seconds = "0" + seconds
	}

	var ctime = hours + ":" + minutes + ":" + seconds + " " + dn;
	thelement.innerHTML = "<b style='font-size:14;'>" + ctime + "</b>";
	setTimeout("realTimeDate()", 1000);
}
window.onload = realTimeDate;


jQuery(document).ready(function () {

	// Disable Ajax Caching
	jQuery.ajaxSetup({ cache:false });

	// Feedback form
	/*
	jQuery('#feedback-badge-right').feedbackBadge({
		css3Safe: jQuery.browser.safari ? true : false, // This trick prevents old safari browser versions to scroll properly
		float: 'right',
		onClick: function () {
			var div = jQuery('<div id="popup" ></div>');
			div.load('/controls/feedback', function () {
				jQuery(window).scroll();
			});
			jQuery('body').prepend(div);

			// After ataching the popup to the dom - load the form by ajax
			jQuery('#send_feedback').on('click', function () {

				if (jQuery("#feedbackMessage :text[value='']").length === 0) {
				if (!jQuery("#feedbackType option:selected").length) {
					jQuery("#feedback-form").ajaxForm(function(){

						jQuery.ajax({
							type: "POST",
							url: "/hip_chat/hip_chat/feedback",
							data: jQuery(this).serialize(),
							success: function() {
								jQuery(this).unbind();
								return false;
							},
							error: function() {
								jQuery(this).unbind();
								return false;
							}
						});

						jQuery(this).unbind();
						return false;
					});

					// Do your magic in here when the form submit button is clicked
					return false;
				} else {
					alert('Must have a message!');
				}
				}
			});
			return false;
		}
	});
	*/

	jQuery('#popup #feedback-form #close-bt').live('click', function () {
		jQuery('#popup').hide();
	});

	jQuery(window).scroll(function () {
		var topMargin = (jQuery(window).height() - jQuery('#popup').height())/2 + jQuery(window).scrollTop();
		jQuery('#popup').css('margin-top', topMargin);
	});
});

