<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'snippets/head.php';?>
</head>
<body>
	<?php include 'snippets/header.php';?>
	<div role="banner" class="row brown-bg">
		<div class="grid-container">
			<h6>CONTACT US</h6>
		</div>
	</div>
	<main role="main" class="grid-container">
		<div class="row">
			<div class="col-4">
				<div class="card">
					<img src="images/flickr_zaimoku_woodpile.jpg" alt="Cat licking cat" />
				</div>
			</div>
			<div class="col-8">
				<div class="card">
					<h5>Meow at us</h5>
					<p>
						Feel free to use the form below to ask us any question you might have about our service before going ahead and making a booking.  We monitor these inboxes around the clock and you will be sure to hear back from us as soon as possible.
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<div class="card">
					<form method="post" action="#">
						<label for="fname">First Name
							<input placeholder="Your first name." type="text" name="fname" id="fname" required/>
						</label>
						<label for="lname">Last Name
							<input placeholder="Your last name." type="text" name="lname" id="lname" required/>
						</label>
						<label for="email">Email
							<input placeholder="Your email address." type="text" name="email" id="email" required/>
						</label>
						<label for="question">Question
							<textarea placeholder="Do your cats play nice?" id="question" rows="10" cols="50"></textarea>
						</label>
						<label for="catquestion">Do you own a cat?
							<select id="catquestion">
								<option value="yes">Yes</option>
								<option value="no">No</option>
							</select>
						</label>
						<input type="submit" name="submit" value="Submit" />
						<input type="hidden" name="userToken" value="82903472039874" />
					</form>
				</div>
			</div>
			<div class="col-6">
				<div class="card">
					<h5>Find Us</h5>
					<img src="https://maps.googleapis.com/maps/api/staticmap?center=-27.5711087,153.060699&#38;size=500x300&#38;zoom=15&#38;markers=color:blue|(-27.5711087 , 153.060699)&#38;sensor=false" alt="Map of Catitude" id="rightimg"/>

					<p>Address: 3 Zamia Street</p>
					<p>Phone: (07) 3412 1808</p>
					<p>E-Mail: supernova@catitude.com</p>
				</div>
			</div>
		</div>
	</main>
	<?php include 'snippets/footer.php';?>
</body>
</html>