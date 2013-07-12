function validateEmail(email) 
{
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

$(document).ready(function() {
	// attach event to add lead form
	$("form#addLeadForm").on("submit", function(e) {
		var email = $(this).find('input[name=email]').val();
		e.preventDefault();
		
		if(validateEmail(email)) {
			$.post($(this).attr("action"), $(this).serialize(), function(data) {
				if(data == 'OK') {
					var n = noty({"text": 'Your e-mail has been saved. Thank you! We will inform you when we release How Are You.', type: 'success'});
					$("form#addLeadForm input[name=email]").val("");
				} else {
					var n = noty({"text": 'There was an error saving your e-mail address', type: 'error'});
				}
			})	
		} else {
			var n = noty({"text": 'Invalid e-mail address given', type: 'error'});
		}
	});
});