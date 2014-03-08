<?php
	$myEmail = "rtscherer@gmail.com";
?>
<?php
	$con=mysqli_connect("localhost","ryan","sanderson","personal_site");
	
	// Check connection
	if (mysqli_connect_errno($con))
	{
		$message1 = '<div class="error">Failed to connect to MySQL: ';
		$message2 = mysqli_connect_error();
		$message3 = '</div>';
   		echo $message1 . $message2 . $message3;
	}
?>
<?php

	header('Location: http://localhost:8888/me/contact.php');

	//SAVE TO DATABASE
	$sql_contact=
	"INSERT INTO contact (contact_id, name, email_address)
	 VALUES(NULL,'$_POST[contact_name]','$_POST[contact_email]')";
		  
	$sql_contact_detail=
	"INSERT INTO contact_detail (contact_id, email_subject, email_message)
	 VALUES(NULL,'$_POST[contact_subject]','$_POST[contact_message]')";

	if (!mysqli_query($con,$sql_contact))
  	{
  		die('Error inserting into table: contact' . mysqli_error($con));
  	}
  	
  	if (!mysqli_query($con,$sql_contact_detail))
  	{
  		die('Error inserting into table: contact_details: ' . mysqli_error($con));
  	}
	//echo "1 record added";
	
	//SEND EMAIL
	$to = $myEmail;
	$subject = $_POST[contact_subject];
	$message = $_POST[contact_message];
	$from = $_POST[contact_email];
	$headers = "From:" . $from . "[" . $_POST[contact_name] . "]";
	mail($to,$subject,$message,$headers);
	
	echo "Mail Sent.";
	
	
?>
<?php
	mysqli_close($con);
?>