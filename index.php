<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Contact Form</title>
		<link rel="stylesheet" href="css/style-global.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> <!-- load jquery via CDN -->
		<script src="js/jquery-3.3.1.js"></script>
		<script src="js/jquery.validate.js"></script>
	</head>
	<body>
		<div class="container">
			<form id="contact-form" class="contact-form" action="process.php" method="POST">

				<h1 class="contact-form__title">Contact Form</h1>

				<input required type="text" name="name" placeholder="Name and Surname" class="contact-form__text-input">
				<span class="name-error"></span>
				<input required type="email" name="email" placeholder="email@address.com" class="contact-form__text-input">
				<span class="email-error"></span>
				<select required name="subject" class="contact-form__select">
					<option value="1">First option</option>
					<option value="2" selected>Second option</option>
					<option value="3">Third option</option>
				</select>
				<span class="subject-error"></span>
				<textarea required rows="4" name="message" placeholder="Please write Your request here." class="contact-form__textarea"></textarea>
				<span class="message-error"></span>
				<input type="submit" class="contact-form__submit" value="Send Request">
			</form>
		</div>
	</body>

	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,700" rel="stylesheet">

	<script>
			$("form").validate();
	</script>
</html>
