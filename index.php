<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Contact Form</title>
		<link rel="stylesheet" href="css/style-global.css">
	</head>
	<body>
		<div class="container">
			<form class="contact-form">

				<h1 class="contact-form__title">Contact Form</h1>

				<input type="text" name="name" placeholder="Name and Surname" class="contact-form__text-input">
				<input type="email" name="email" placeholder="email@address.com" class="contact-form__text-input">
				<select name="subject" class="contact-form__select">
					<option value="1">First option</option>
					<option value="2">Second option</option>
					<option value="3">Third option</option>
				</select>
				<textarea rows="4" name="message" placeholder="Please write Your request here." class="contact-form__textarea"></textarea>
				<a href="#!" class="contact-form__submit">Send Request</a>
			</form>
		</div>
	</body>

	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,700" rel="stylesheet">

</html>
