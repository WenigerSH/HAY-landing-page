$(document).ready(function() {
	// attach event to add lead form
	$("form#addLeadForm").on("submit", function(e) {
		e.preventDefault();
		$.post($(this).attr("action"), $(this).serialize(), function(data) {
			if(data == 'OK') {
				alert('Your e-mail has been saved. Thank you.');
				$("form#addLeadForm input").val("");
			} else {
				alert('There was an error');
			}
		})
	});
});