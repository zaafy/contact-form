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
		  <input type="text" name="name" placeholder="Name and Surname" class="contact-form__text-input">
		  <input type="email" name="email" placeholder="email@address.com" class="contact-form__text-input">
		  <select name="subject" class="contact-form__select">
		    <option value="1">First option</option>
		    <option value="2">Second option</option>
		    <option value="3">Third option</option>
		  </select>
		  <textarea rows="4" name="message" placeholder="Please write Your request here." class="contact-form__textarea"></textarea>
		  <input type="submit" value="Send Request" class="contact-form__submit">
		</form>
	</div>
</body>
</html>
