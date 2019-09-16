<?php
if (isset($_POST['submit']))
{
	$name = $_POST['fname'];
	$mailForm = $_POST['mail'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$mailTo = "raihanuddin9619@gmail.com";
	$headers = "From: ".$mailForm;
	$txt = "You have recieved an email from ".$name.".\n\n".$message;

	mail($name, $mailForm, $txt, $headers);
	header("Location: index.html");
}
?>

