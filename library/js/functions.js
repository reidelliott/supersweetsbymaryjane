$(document).ready(function() {
	
	$('#registerform').submit(function() {
		
		fnameVal = escape($('#fname').val());
        lnameVal = escape($('#lname').val());
		
		// Prepare query string and send AJAX request
		$.ajax({
			url: 'library/config-mcapi.php',
			data: 'ajax=true&email=' + escape($('#email').val()) + '&fname=' + fnameVal + '&lname=' + lnameVal,
			success: function(msg) {
				// update user interface
				// $('#getupdates').html('Thank you...');
				$('#registerform').fadeOut('fast', function(){
					$('#response').html(msg).fadeIn('fast');
				});
			}
		});
	
		return false;
	});
	
	
});
