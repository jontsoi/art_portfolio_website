<?php   
include("templates/header.php");
include("templates/nav.php");
?>
<link href="css/contact_css.css" rel="stylesheet">
<div id="content">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<img src="images/artist-silhouette.jpg" alt="Portrait" height="100%" width="100%">
				</div>
				<div class="col-md-8">
					<h2>Who I Am</h2>
					<p>Write details about yourself here. Who are you? What is your goal that can be said in one to two sentences? What are your skills and/or specialities? What projects have you worked on?</p>
					<form method = "post" action = "contact_submit.php">
						Name: <br>  
						<input type="text" name="name" required placeholder="Enter your name"/> <br>
						E-mail: <br>  
						<input type="email" name="email" required placeholder="Enter your email address"> <br>			
						Message: <br>
						<textarea cols="40" rows="5" name="mymessage" onfocus="this.select()"  placeholder="What do you want to say?"></textarea> <br>
						<input type = "submit" value = "Submit"> <br>
					</form>
					<br>
				</div>
			</div>
		</div>
</div>

<?php
include("templates/footer.php");
