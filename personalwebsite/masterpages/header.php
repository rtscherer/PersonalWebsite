<?php $page_title = $page_title ?>
<?php echo 
	'
	<!DOCTYPE HTML>
	<html>
	<title>
	'
?>
<?php echo $page_title ?>
<?php echo 
	'
	</title>
	<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<!--DEBUG: offline jquery--><script type="text/javascript" src="scripts/jquery-1.9.1.js"></script>
		<script type="text/javascript" src="scripts/script.js"></script>
		<script type="text/javascript" src="scripts/jquery.scrollTo-1.4.3.1-min.js"></script>
		<script type="text/javascript" src="scripts/jquery.localscroll-1.2.7-min.js"></script>
		<link rel="stylesheet" type="text/css" href="styles/styles.css">
	</head>
	<body>
	<!--Navigation-->
		<a id="home_button" href="#"><div class="title">RYAN SCHERER // </div></a>
		<a id="about_button" href="#"><div class="button">ABOUT</div></a>
		<a id="contact_button" href="#"><div class="button">CONTACT</div></a>
		<div class="button">BLOG</div>
	<!--End Navigation-->
	
	<!--Social Media-->
		<div id="linkedin" class="socialmedia"><img src="images/linkedin.png" height="64" width="64" /></div>
		<a href="https://twitter.com/rtscherer" target="_blank">
			<div id="twitter" class="socialmedia"><img src="images/twitter.png" height="64" width="64" /></div></a>
		<div id="facebook" class="socialmedia"><img src="images/facebook.png" height="64" width="64" /></div>
		<!--<div id="lastfm" class="socialmedia"><img src="images/lastfm.png" height="64" width="64" /></div>-->
	<!--End Social Media-->
	'
?>