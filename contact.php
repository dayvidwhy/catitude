<!doctype html>
<html lang="en">
<head>
	<?php include 'snippets/head.php';?>
</head>
<body>
	<div class="grid-fluid">
		<?php include 'snippets/header.php';?>
		<div class="row brown-bg">
			<div class="grid-container">
				<h6>CONTACT US</h6>
			</div>
		</div>
		<div class="grid-container">
			<div class="row">
				<div class="col-4">
					<img class="person" src="images/flickr_zaimoku_woodpile.jpg" alt="Cat licking cat" />
				</div>
				<div class="col-8">
					<h5>Our feline friends and I would love to hear from you.</h5>
					<p>
						Feel free to use the form below to ask us any question you might have about our service before going ahead and making a booking.  We monitor these inboxes around the clock and you will be sure to hear back from us as soon as possible.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<form method="post" action="#">
						<label for="fname">First Name
							<input type="text" name="fname" id="fname" required/>
						</label>
						<label for="lname">Last Name
							<input type="text" name="lname" id="lname" required/>
						</label>
						<label for="email">Email
							<input type="text" name="email" id="email" required/>
						</label>
						<label for="question">Question
							<textarea id="question" rows="10" cols="50"></textarea>
						</label>
						<label for="catquestion">Do you own a cat?
							<select  id="catquestion">
								<option value="yes">Yes</option>
								<option value="no">No</option>
							</select>
						</label>
						<input type="submit" name="submit" value="Submit" />
						<input type="hidden" name="userToken" value="82903472039874" />
					</form>
				</div>
				<div class="col-6">
					<h5>Find Us</h5>
					<img src="http://maps.googleapis.com/maps/api/staticmap?center=-27.5711087,153.060699&#38;size=500x300&#38;zoom=15&#38;markers=color:blue|(-27.5711087 , 153.060699)&#38;sensor=false" alt="Map of Catitude" id="rightimg"/>
					
					<p>Address: 3 Zamia Street</p>
					<p>Phone: (07) 3412 1808</p>
					<p>E-Mail: supernova@catitude.com</p>
				</div>
			</div>
		</div>
		<?php include 'snippets/footer.php';?>
	</div>
</body>
</html>