<?php 

	if(isset($_POST['submit'])){
		$name = $_POST["name"];
		$email = $_POST["email"];
		$subject = $_POST["subject"];
		$message = $_POST["message"];
	}


	$mailTo = "raghavendramalagi8@gmail.com";	
	$headers = " From " .$email;
	$txt = " You have received an e-mail  from " .$name.".\n\n".$message;

	mail($mailTo,$subject,$txt,$headers);
	header("Location : index.php?mailsend");

 ?>