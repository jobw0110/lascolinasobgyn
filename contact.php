<?php
	function rpHash($value) {
		$hash = 5381;
		$value = strtoupper($value);
		for($i = 0; $i < strlen($value); $i++) {
			$hash = (($hash << 5) + $hash) + ord(substr($value, $i));
		}
		return $hash;
	}
	$submit_message = "";
	if (isset($_POST['submit']))
	{
		//print_r($_POST);
		require_once 'login.php';
		$db_server = mysql_connect($db_hostname,$db_username,$db_password);
		if(!$db_server)die("Unable to connect to MySQL: " . mysql_error());
		mysql_select_db($db_database)
			or die("Unable to select database: " . mysql_error());
			
		if(rpHash($_POST['defaultReal']) == $_POST['defaultRealHash']) {

			$name = mysql_fix_string($_POST['name']);
			$email = mysql_fix_string($_POST['email']);
			$message = mysql_fix_string($_POST['message']);
			
			$query = "INSERT INTO contact VALUES('" . $name . "','" . $email . "','" . 
				     $message . "', CURDATE() )";
			//$query = "INSERT INTO contact VALUES('" . $name . "','" . $email . "','" . $message . "')";
			//echo $query;
			$result = mysql_query($query);
			if(!$result)die("Database access failed: " . mysql_error());

			// the message
			//$msg = "Contact Form Submission at LasColinasObGyn.com";

			// use wordwrap() if lines are longer than 70 characters
			$msg = wordwrap($msg,70);

			// send email
			mail("draftpick09@yahoo.com","Contact Form",$message);

			$submit_message = '<p style="color:blue;">Submitted Successfully</p>';
		}
		else
		{
			$submit_message = '<p class="rejected" style="color:red;">You have NOT entered the "real person" 
					value correctly and the form has been rejected.</p>';
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Contact Us</title>
	<link rel="stylesheet" href="css/lascolinas.css">
	<link rel="stylesheet" href="css/contact.css">
	<link rel="stylesheet" href="css/superfish.css">
	<link rel="stylesheet" href="css/jquery.realperson.css">
	
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
	
	<script src="js/superfish.js"></script>
	<script src="js/menu.js"></script>
	 
	<script src="js/jquery.plugin.js"></script> 
	<script src="js/jquery.realperson.js"></script>
	<script>
		$(document).ready(function(){
			$('#defaultReal').realperson();
		});
	</script>
</head>
<?php $spanish = "espanol_contact.php"; ?>
<body>
<?php include("header.php"); ?>
<h1>Contact Us</h1>
<section>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3351.7231486422447!2d-96.95901615!3d32.8525812!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd1c04fb8b797f556!2sLas+Colinas+Ob%2FGyn%3A+Zavaleta+John+MD!5e0!3m2!1sen!2sus!4v1395020776139" width="380" height="400" frameborder="0" style="border:0"></iframe>
	<h3>Las Colinas ObGyn</h3>
	<p>3501 N. MacArthur Blvd.<br>Suite 350<br>Irving, TX 75062<br><br>
	<b>Phone:</b> (972) 257-5300 <br><br><b>Fax:</b> (972) 257-5322<br><br><a href="mailto:info@lascolinasobgyn.com" target="_blank">info@lascolinasobgyn.com</a></p>
	<h3>Office Hours</h3>
	<p>Monday-Thursday<br>8am-4:30pm<br><br>Friday<br>8am-12pm<br><br>Closed Saturday<br><br> Closed Sunday<br></p>
	<h3>Facilities</h3>
	<p>Many procedures are performed in our offices. For those procedures that require advanced or surgical facilities, we have privileges at the following centers:</p>
	<a href="http://www.ic-sh.com/" target="_blank"><h4>Irving Coppell Surgical Hospital</h4></a>
	<p>400 West I-635 Suite 100<br>Irving, Texas 75063<br> 972-868-4000</p> 
	<a href="http://lascolinasmedical.com/" target="_blank"><h4>Las Colinas Medical Center</h4></a>
	<p>6800 N. MacArthur Blvd.<br>Irving, TX 75039<br> (972) 969-2000 </p>
	<a href="http://lascolinassurgery.com/" target="_blank"><h4>Las Colinas Surgery Center</h4></a>
	<p>4255 N. MacArthur Blvd.<br>Irving, TX 75038<br> (972) 257-0144 </p>
	</section>
<aside>
	<div id="contact">
		<?php echo $submit_message ?>
		<h3>Contact Form</h3>
		<form method="post" action="contact.php">
			<label>Name</label>
			<input name="name" placeholder="Type Here">
			
			<label>Email</label>
			<input name="email" type="email" placeholder="Type Here">
			
			<label>Message</label>
			<textarea name="message" placeholder="Type Here"></textarea>
			
			<p><label>Enter the letters displayed:</label>
			<input type="text" id="defaultReal" name="defaultReal"></p>

			<input id="submit" name="submit" type="submit" value="Submit">
		</form>
	</div>
	<?php include("aside.php"); ?>
</aside>
<?php include("footer.php"); ?>
</body>
</html>
