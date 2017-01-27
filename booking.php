<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'snippets/head.php';?>
</head>
<body>
	<?php include 'snippets/header.php';?>
	<div role="banner" class="row brown-bg">
		<div class="grid-container">
			<h6>BOOK NOW</h6>
		</div>
	</div>
	<main role="main" class="grid-container">
		<div class="row">
			<div class="col-6">
				<div class="card">
					<form name="bookForm" method="post">
						<label for="fname">First Name
							<input placeholder="Your first name." type="text" name="fname" id="fname"/>
						</label> 
						<label for="lname">Last Name 
							<input placeholder="Your last name." type="text" name="lname" id="lname"/>
						</label>
						<label for="phone">Phone
							<input placeholder="Your phone number." type="text" name="phone" id="phone" />
						</label> 
						<label for="email">Email 
							<input placeholder="Your email address." type="text" name="email" id="email"/>
						</label>
						<label for="email">Age 
							<input placeholder="Your age." type="text" name="age" id="age"/>
						</label>
						<label for="gender_male">Male
							<input type="radio" name="gender" id="gender_male" value="male" />
						</label>
						<label for="gender_female">Female 
							<input type="radio" name="gender" id="gender_female" value="female" />
						</label>
						<label for="gender_nds">Non-Disclose 
							<input type="radio" name="gender" id="gender_nds" value="nds" />
						</label>
						<label for="cfname">Cats First Name 
							<input placeholder="Your cats first name." type="text" name="cfname" id="cfname"/></label>
						<label for="clname">Cats Last Name 
							<input placeholder="Your cats last name." type="text" name="clname" id="clname"/>
						</label>
						<label for="breed">Breed</label>
						<select name="colour" id="breed">
							<option value="choose" selected="selected">Choose a breed</option>
							<option value="persian">Persian</option>
							<option value="mainecoon">Maine Coon</option>
							<option value="siamese">Siamese</option>
							<option value="calico">Calico</option>
							<option value="ragdoll">Ragdoll</option>
							<option value="shorthair">American Shorthair</option>
							<option value="shorthair">Other</option>
						</select>
						<label for="otherbreed">Can't find yours?</label> <input type="otherbreed" name="otherbreed" id="otherbreed" value="(breed)"/>
						<label for="gender_male">Male</label> <input type="radio" name="gender" id="gender_male" value="male" />
						<label for="gender_female">Female</label> <input type="radio" name="gender" id="gender_female" value="female" />
						<label for="problem">What's the problem?
							<textarea placeholder="My cat is really cute but keeps jumping on the table." id="problem" name="problem" rows="10" cols="50"></textarea>
						</label>
						<input type="submit" name="submit" value="Submit Booking" />
						<input type="hidden" name="userToken" value="82903472039874" />
					</form>
				</div>
			</div>
			<div class="col-6">
				<div class="card">
					<h5>Making a Booking</h5>
					<p>
						Thanks for deciding to make a booking here at our Cat Psychology clinic.  We need some more information about you and your catty situation to better help you when we first get in touch.
					</p>
					<p>
						Prices for consultations are determined during the first meeting which is provided to you entirely free.  Take this no obligation opportunity to see what the Catitude Clinic can do for you and your catty friend.  We are the solution you are looking for in human feline interactions.
					</p>
					<img src="images/flickr_byronchin.jpg" alt="Cat on laptop" />
				</div>
			</div>
		</div>
	</main>
	<?php include 'snippets/footer.php';?>
</body>
</html>