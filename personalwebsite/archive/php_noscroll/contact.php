<?php $page_title = 'Ryan Scherer .: Contact'; ?>
<?php include 'masterpages/header.php'; ?>
	
	<!--Main Content-->
	<div class="maincontent">
		<div class="contactheader">
			<span class="orangetext">Contacting</span> me is easy. You've probably seen
			enough of these to know how this works:
		</div>
		<form action="repositories/contact_repository.php" method="post">
			<div class="contactmeta">
				<input name="contact_name" type="text" class="textbox" placeholder="Name" />
				<input name="contact_subject" type="text" class="textbox" placeholder="Subject" />
				<input name="contact_email" type="email" class="textbox" placeholder="Return Email Address" />
				<input name="contact_button" type="submit" class="formbutton" value="SEND" />
			</div>
			<div class="spinner">
				<img src="images/spinner.gif" height="55px" width="55px" />
			</div>
			<div class="contactmessage">
				<textarea name="contact_message" class="textarea" placeholder="Message"></textarea>
			</div>
		</form>
		<div class="contactsocialmedia">
			[ or use one of these ]
		</div>
	</div>
	<!--End Main Content-->
	
<?php include 'masterpages/footer.php'; ?>