//Number Only (intiger) >>mycls_numint
$(document).ready(function(){
	$(".mycls_numint").keydown(function(event) {
		// Allow: backspace, delete, tab, escape and enter
		if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 || 
				 // Allow: Ctrl+A
				(event.keyCode == 65 && event.ctrlKey === true) || 
				 // Allow: home, end, left, right
				(event.keyCode >= 35 && event.keyCode <= 39)) {
						 // let it happen, don't do anything
						 return;
		}else{
				// Ensure that it is a number and stop the keypress
				if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
						event.preventDefault();
				}
		}
	});
});

//Number Only (double) >>mycls_numdub
$(document).ready(function(){
	$(".mycls_numdub").keydown(function(event) {
		// Allow: backspace, delete, tab, escape, decimal and enter
		if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 || event.keyCode == 190 || event.keyCode == 110 ||
				 // Allow: Ctrl+A
				(event.keyCode == 65 && event.ctrlKey === true) || 
				 // Allow: home, end, left, right
				(event.keyCode >= 35 && event.keyCode <= 39)) {
						 // let it happen, don't do anything
						 return;
		}else{
				// Ensure that it is a number and stop the keypress
				if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
						event.preventDefault();
				}
		}
	});
});

//Masked Input Settings
$(".mask_mbil").focus(function(){
	$(".mask_mbil").mask("799999999");
});