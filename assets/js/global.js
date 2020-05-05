$(document).ready(function() {
	$("#fadeTitle").fadeIn(4000);
	$("#showSignIn").click(function() {
		$("#signInForm").slideToggle("slow");
	});
});