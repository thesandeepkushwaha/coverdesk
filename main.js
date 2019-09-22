$(document).ready(function() {
	$("#contact").submit(function() {
		$.ajax({
			type: "POST",
			url: "mailer.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Message sent! Thanks for contacting us.");
			$("#contact").trigger("reset");
		});
		return false;
	});
});

