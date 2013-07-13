<?php
	$returnUrl = "http://localhost/#email";

	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	if ($name=="" || $message==""){
	   echo "Θα πρέπει να συμπληρωθούν απαραίτητα το όνομα και το κείμενο του μηνύματος";
	}
	else
	{
		echo "Το μήνυμα σου θα προωθηθεί κατάλληλα";	
	}
	
?>