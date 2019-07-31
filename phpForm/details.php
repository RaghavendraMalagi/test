<!DOCTYPE html>
<html>
<head>
	<title>General php form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div>
		<form action="contact.php" method="post">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" placeholder="Enter name..." autocomplete="off">
			<label for="email">Email</label>
			<input type="text" name="email" id="email" placeholder="Enter email..." autocomplete="off">
			<label for="subject">Subject</label>
			<input type="text" name="subject" id="subject" placeholder="Enter Subject..." autocomplete="off">
			<label for="Message">Message</label>
			<textarea name="message" placeholder="Enter message..." cols="5" rows="10"></textarea>
			<input type="submit" name="submit" id="submit">
		</form>
	</div>
</body>
</html>