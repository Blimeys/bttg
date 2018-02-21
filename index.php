<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];
		$from = 'Website enquiries';
		$to = 'kay.johnson@mcgoffgroup.com';
		$subject = 'You have a new enquiry';

		$body = "From: $name\n Address: $address\n Phone-Number: $phone\n E-Mail: $email\n Message:\n $message";

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		if (!$_POST['phone']) {
			$errPhone = 'Please enter your phone number';
		}
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		if (!$_POST['address']) {
			$errAddress = 'Please enter your address';
		}
		//Check if simple anti-bot test is correct

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errAddress && !$errPhone) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank you for your enquiry, a member of our team will be back in touch shortly</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}
}
	}
?>

<!DOCTYPE html>
<html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,500i,600,700|Roboto+Slab:100,300,400|Caveat" rel="stylesheet">

  <link href="/src/css/style.css" rel="stylesheet">
  <meta charset="utf-8">
  <title>Back to the garden - Childcare</title>
</head>

<body>

  <div class="header">
    <div class="sub-header">
    </div>
  </div>
  <div class="content-section white-section text-content">

		    <h2>
		Opening Date: August 2018 <br /><br />
		The McGoff Group is thrilled to announce its partnership with Stewart and Jeannie Pickering, the duo and founders of the highly successful kidsunlimited brand, and the launch of a brand new day nursery in Altrincham; Back to the Garden Childcare.
	</h2>
	<h3>The new venture marks the return of Stewart and Jeannie to the child care sector, with the couple re-entering the marketplace after 10 years following the sale of kidsunlimited in 2008. Whilst at the helm of kidsunlimited, they opened more than 50 full day care nurseries, which were in short supply, and introduced the first on site ‘workplace’ nurseries in the North West for firms such as HSBC.
<br /><br />
		The concept for Back to the Garden will challenge the current childcare provision in the country. With new build there is an opportunity to significantly improve the economic footprint of nurseries with a design that is environmentally, economically and even socially more sustainable. The setting of the nursery is also significant. Back to the Garden will occupy a spacious and safe corner of the site, with the location strategically chosen to answer national Government calls to position child care facilities away from busy main roads, where elevated levels of pollution are more and more often being linked to hindered general development and the increase in childhood asthma, plus other health related issues. According to a Greenpeace investigation, 35 nurseries in Greater Manchester are located close to roads that break the legal pollution limits.
		In addition to the purpose-built nursery, the expertly designed garden and extensive external space will provide an opportunity for children to explore and discover in a natural, safe and stimulating environment, benefiting from a beautiful landscaped setting, a gardening and planting patch, large playground and all-weather play areas. It is this emphasis on outdoor play and the setting of the nursery that will stand Back to the Garden apart from competitors.
		<br /><br /></h3><h2>Build Completes: July 2018</h2>


</div>
<div class="insert-photo">

</div>
<div class="content-section white-section text-content">
<h3>
In addition to the purpose-built nursery, the expertly designed garden and extensive external space will provide an opportunity for children to explore and discover in a natural, safe and stimulating environment, benefiting from a beautiful landscaped setting, a gardening and planting patch, large playground and all-weather play areas. It is this emphasis on outdoor play and the setting of the nursery that will stand Back to the Garden apart from competitors.
</h3>
  </div>

  <div class="green-section content-section ">
    <div class="text-content">
      <h4 class="quote">
        "The success of New Care over the last few years, combining our property and construction expertise to acquire, design, build and operate purpose-built care homes, has undoubtedly encouraged the Group to take the next natural step into operational child care. We are proud to be partnering up with Stewart and Jeannie, who are pioneers in this sector, and firmly believe that we are creating a dream team operator for Back to the Garden Childcare.”
<br />
        <span class="sign">Chris McGoff, Director at the McGoff Group</span><br />
        <br />

         “Our philosophy focuses on the health and wellbeing of each and every child, enhancing their nursery experience with a dedicated commitment on outdoor play and activities in the fresh air.”
<br />
        <span class="sign">Stewart Pickering, Co-Founder of Back to the Garden Childcare</span>
<br /><br/>
        “We want and will strive to provide the very best child care in the North West, and incorporated into the heart of the design of the nursery and its location are concerning issues regarding air pollution, which causes health problems and affects children’s development.”
<br />
        <span class="sign">Jeannie Pickering, Co-Founder of Back to the Garden Childcare</span>
</h4>
    </div>
  </div>

<div class="content-section white-section text-content">
	<form role="form" method="post" action="index.php">
<h2>For all enquiries please register your details here	</h2>
			<div class="form-left">
				<input type="text" id="name" name="name" placeholder="First & Last Name..." value="<?php echo htmlspecialchars($_POST['name']); ?>">
				<?php echo "<p class='text-danger'>$errName</p>";?>


				<input type="email" id="email" name="email" placeholder="Your email address..." value="<?php echo htmlspecialchars($_POST['email']); ?>">
				<?php echo "<p class='text-danger'>$errEmail</p>";?>
				<input type="text" id="phone" name="phone" placeholder="Telephone Number..." value="<?php echo htmlspecialchars($_POST['phone']); ?>">
				<?php echo "<p class='text-danger'>$errPhone</p>";?>
				<input type="text" id="address" name="address" placeholder="Your address..." value="<?php echo htmlspecialchars($_POST['address']); ?>">
				<?php echo "<p class='text-danger'>$errAddress</p>";?>
			</div>
<div class="form-right">
<textarea class="form-control" rows="4" name="message" placeholder="Anything else ? Use this space to tell us any additional info on your requirements"><?php echo htmlspecialchars($_POST['message']);?></textarea>
<?php echo "<p class='text-danger'>$errMessage</p>";?>
</div>

				<input id="submit" name="submit" type="submit" value="Send" class="send-form">
				<?php echo $result; ?>
	</form>
	<h3>
		<br />
		<br />
		For all other enquiries please contact
		<br>
		Kay Johnson on 07972 732 477
		<br>
		<a>
			Kay.Johnson@mcgoffgroup.com
		</a>
		<h3>
		</h3>
</div>
  </div>

  <div class="footer-map">
<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d4213.681531654329!2d-2.3658675800759457!3d53.40503280906422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x487bac82035e2d1d%3A0x505fcfcdb45662a0!2sSinderland+Rd%2C+Timperley%2C+Altrincham+WA14+5JU!3m2!1d53.4047681!2d-2.362697!5e0!3m2!1sen!2suk!4v1518019319661" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  </div>
</body>

</html>
