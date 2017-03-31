<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contact Us</title>
		<!-- Adding bootstrap files -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<!-- Adding self created CSS file -->
		<link rel="stylesheet" href="index.css" type="text/css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		
			<?php require('navigation.php'); ?>
			<!-- start of main content -->
			<div class="row" style="margin-top:80px;">
				<div class="container text-justify">
					<div class="col-lg-10">
						<h2>LIVE SUPPORT</h2>
						<h4>24 hours | 7 days a week | 365 days a year    Live Technical Support</h4>
						<p> Contact Us <br>
						Our customer service team is on hand to deal with any reservations or travel queries you may have. Our office is opened<b> Monday to Saturday: 09:00 - 17:45 and Sunday: 09:00 - 19:15.</b> Our telephone number is <b>+92-123-000000. </b>
						Should you wish to drop into us and book your ticket in person our head office is located at: <b>Busmerabus Unit 1, Forster Court, Galway, Ireland.</b>
For any queries outside of office hours please contact <b>busmerabus@gmail.com</b> and our team will respond to you the next morning. :) 

</p>
					</div>
					<div class="col-lg-2">
						<center><img src="pic/contact.png" alt="Contact Us"/></center>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="container">
					<div class="col-lg-8" style="margin-bottom:10px;">
						<h2>CONTACT US</h2>
						<form role="form">
							<div class="form-group">
								<label>Name</label>
								<input class="form-control" id="text">
							</div>
							<div class="form-group">
								<label>Email:</label>
								<input type="email" class="form-control" id="email">
							</div>
							<div class="form-group">
								<label>Message:</label>
								<textarea class="form-control" rows="5" id="comment"></textarea>
							</div>
						  <button type="submit" class="btn btn-primary" style="background-color:purple">Submit</button>
						</form>
					</div>
					<div class="col-lg-4">
						<h2>Company Information :</h2>
						<p>500 Lorem Ipsum Dolor Sit, </p>
						<p>22-56-2-9 Sit Amet, Lorem,</p>
						<p>Ireland.</p>
						<p>Phone:(00) +92-123-000000.</p>
						<p>Fax: (000) 000 00 00 0</p>
						<p>Email: busmerabus@gmail.com</p>
						<p>Follow on: Facebook, Twitter<p>
					</div>
				</div>
				
			
	
			</div>
			<!-- end of main content -->

		</div>
		<!-- closing the container-fluid div -->
		<?php require('footer.php'); ?>
	</body>
</html>