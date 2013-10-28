<?php
// Create connection
$con=mysqli_connect("localhost","ryan","sanderson","personal_site");

// Check connection
if (mysqli_connect_errno($con))
{
	$message1 = '<div class="error">Failed to connect to MySQL: ';
	$message2 = mysqli_connect_error();
	$message3 = '</div>';
   	echo $message1 . $message2 . $message3;
}
//else
//{
//	echo '<div class="error">Connection Successful</div>';
//}

mysqli_close($con);
?>