<section id="navigation">  
	<?php $page_title = 'Ryan Scherer .: Home'; ?>
	<?php include 'masterpages/header.php'; ?>
</section>
	
	<section id="home" data-type="background"> 
	<a name="home">  
         <article>
         	<div class="homecontent">
				<div class="hometext">
					My name is <span class="orangetext">Ryan Scherer</span>.
					I'm a software developer with a passion for the web. Music motivates me,
					craft beer relaxes me, and playing piano fulfills my never ending need to learn 
					and challenge myself. I created this site purely for fun.
				</div>
				<img src="images/me.png" height="428" width="409" alt="That's me!" />
			</div>
			
			<div id="home_scroll">
				Scroll Down<br />
				<img src="images/orange_down_arrow.png" height="64" width="64" alt="Scroll Down" />
			</div>
         </article>
         </a>
	</section>
    
    <section id="home" data-type="background">
    <a name="about">
    	<article>
    		<div class="maincontent">
				<div class="aboutheader">
					<span class="orangetext">About</span> Me.
				</div>
				<div class="abouttext">
					I am a graduate of DeSales High School in Geneva, NY. <br />
					I have an undergraduate degree from Syracuse University in Information Management
					and Technology with a minor in Marketing, grad '06. <br />
					I'm employed by the #1 grocery retailer and one of the top
					5 employers in the United States, Wegmans Food Markets, based in Rochester, NY.
		
					<br />
					<br />
		
					As a part of my education from Syracuse University and my work at Wegmans, 
					I've gained many skills and a definite passion for web development.
		
					<br />
					<br />
		
					I've always had a passion for music of all kinds, in particular, alternative
					rock, hard rock, and classical.
		
					<br />
					<br />
		
					I'm a huge baseball fan and love spending time playing organized softball with
					my friends.
		
				</div>
			</div>
    	</article>
    	</a> 
    </section>
	   
	<section id="home" data-type="background">
	<a name="contact">
         <article>
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
         </article>
	</a>
	</section>
	
	
<?php include 'masterpages/footer.php'; ?>