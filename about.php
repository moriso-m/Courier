<?php
/**
 * Created by PhpStorm.
 * User: moris
 * Date: 30/03/2019
 * Time: 01:13
 */

?>

<!doctype html>
<html lang="en">
<head>
	<?php include "links.php";?>
	<title>About</title>
</head>
<body>
<div>

	<?php
	include "header.php";
	?>
	<div style="" id="main-content">
		<ul class="breadcrumb">
			<li>
				<a href="index">Home</a>
			</li>
			<li class="active">About us</li>
		</ul>
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#about">
					<h4>About us</h4>
				</a>
			</li>
			<li><a data-toggle="tab" href="#contact">
					<h4>Contact us</h4>
				</a></li>
			<li><a data-toggle="tab" href="#team">
					<h4>Our Team</h4>
				</a></li>
		</ul>

		<div class="tab-content" >
			<div id="about" class="tab-pane fade in active about">
				<h3 class="text-center">Who we are</h3>
				<p>
					Ethan courier is a courier company.We operate in Kenya and East Africa and
					our main offices are located in Nairobi and Eldoret.
					We are dedicated to understanding and fulfilling our client's needs and 
					doing whatever it takes by providing the highest level of reliability and
					services.
					We offer the following services:
					<ol>
						<li>Cargo delivery</li>
						<li>Offers packaging services</li>
						<li>Extra services for ware housing whenever required</li>
					</ol>
					From small packages to large containers we have all types of means from trucks to small vehicles to transport your luggage.
					We give you personalized services and execute them competently, whatever the size of your requirement.
					We offer quick and efficient transportation covering all major towns in Kenya and outside Kenya.
					We are here for companies, business entities and travelers who want to move cargo in whichever direction
					they require delivery.
					We are a Kenyan company with offices in Eldoret and Nairobi, Uganda and Tanzania.
				</p>
					<h3 class="text-center" id="mission">Our Mission</h3>
					<p>
						We are committed to providing delivery services to our customers 24/7 with reasonable rates 
						on a consistent basis. We enable our customers to prosper by delivering their products on time 
						in a professional manner. We will continuously challenge ourselves to exceed our customers’ 
						expectations by providing leading edge solutions to their needs
					</p>
					<h3 class="text-center" id="vision">Our Vision</h3>
					<p>
						To be the “Go To” courier company with assurance in quality,
						advanced delivery services in and outside Kenya for our customers everywhere.
					</p>
					<h3 class="text-center" id="core-values">Core values</h3>
					<ul>
						<li>We deliver with commitment and with a sense of urgency each and every time.</li>
						<li>
							Integrity and honesty are at the heart of our business.
							We expect our people to maintain high ethical standards in everything they do.
						</li>
						<li>
							We strive to attract, retain and 
							develop individuals to meet our high standards in ability and fit our culture while promoting diversity.
						</li>
							</ul>
			</div>
			<div class="tab-pane row fade in" id="contact" >
				<div class="col-lg-4 text-center">
					<h4><i class="fa fa-map-marker"></i>Visit us</h4>
					<address>
					
					</address>
				</div>
				<div class="col-lg-4 text-center" id="about-contact">
					<address >
						<h4><span class="fa fa-phone"></span> Call us</h4>
							Telephone Numbers: <br>
							<span><a href="tel:+254706619474">+254706619474</a></span><br>
							<span><a href="tel:+254728147154">+254728147154</a></span><br>
							<span class="fa fa-envelope-o"></span>
								Email:<br>
								<a href="mailto:Email : info@ethancourier.com" >
									info@ethancourier.com
								</a><br>
					</address>
				</div>
				<div class="col-lg-4 text-center">
					<h4>Working hours</h4>
					<span >Monday - Friday(8.00 am - 5.00pm)</span><br>
					<span>Saturday(8.00 am - 12.00pm)</span><br>
				</div>
			</div>
		<?php
	include "footer.php";
	?>

</div>
<script src="main.js"></script>
</body>
</html>
