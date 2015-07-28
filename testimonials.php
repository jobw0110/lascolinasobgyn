<?php
	function rpHash($value) {
		$hash = 5381;
		$value = strtoupper($value);
		for($i = 0; $i < strlen($value); $i++) {
			$hash = (($hash << 5) + $hash) + ord(substr($value, $i));
		}
		return $hash;
	}	
	include 'login.php';
	$submit_message = "";
if (isset($_POST['submit']))
{
	//require_once 'login.php';
	$db_server = mysql_connect($db_hostname,$db_username,$db_password);
	if(!$db_server)die("Unable to connect to MySQL: " . mysql_error());
	mysql_select_db($db_database)
		or die("Unable to select database: " . mysql_error());

	if(rpHash($_POST['defaultReal']) == $_POST['defaultRealHash']) {
		
		$first_name = mysql_fix_string($_POST['first']);
		$last_name = mysql_fix_string($_POST['last']);
		$testimonial = mysql_fix_string($_POST['add']);
		
		$query = "INSERT INTO testimonials_submission VALUES ('" . $first_name . "','" . 
				 $last_name . "','" . $testimonial . "', CURDATE() )";
		//$query = "INSERT INTO testimonials_submission VALUES ('" . $first_name . "','" . 
		//		 $last_name . "','" . $testimonial . "')";

		//echo $query;
		$testimonials = mysql_query($query);
		if(!$testimonials)die("Database access failed: " . mysql_error());

		// the message
		$msg = "Testimonial Submission at LasColinasObGyn.com";

		// use wordwrap() if lines are longer than 70 characters
		$msg = wordwrap($msg,70);

		// send email
		mail("draftpick09@yahoo.com","Testimonial",$msg);

		$submit_message = '<p style="color:blue;">Your testimonial has been submitted successfully.</p>';
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
	<title>Testimonials</title>
	<link rel="stylesheet" href="css/lascolinas.css">
	<link rel="stylesheet" href="css/testimonials.css">
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
			$('.testimonial').last().css("border","0");
			$('#defaultReal').realperson();
		});
	</script>
</head>
<?php $spanish = "espanol_index.php"; ?>
<body>
<?php include("header.php"); ?>
<h1>Testimonials</h1>
<section>
	<div class="testimonials">
	<?php	
		$db_server = mysql_connect($db_hostname,$db_username,$db_password);
		if(!$db_server)die("Unable to connect to MySQL: " . mysql_error());
		mysql_select_db($db_database)
			or die("Unable to select database: " . mysql_error());
		
		$query = 'SELECT * FROM testimonials ORDER BY date desc';
		//echo $query;
		$testimonials = mysql_query($query);
		if(!$testimonials)die("Database access failed: " . mysql_error());
		$rows = mysql_num_rows($testimonials);
		for($j = 0; $j < $rows; $j++)
		{
			
			
			$testimonial = mysql_fetch_row($testimonials);
			if($testimonial[3] == '0000-00-00')
				$testimonial[3] = "";
			print "<div class='testimonial'><blockquote><p>" . $testimonial[2] . "</p><cite>&ndash;" . $testimonial[0] . " " . $testimonial[1] . "</cite>
			<span style='float:right;'>" . $testimonial[3] . "</span></blockquote></div>";
		}
	?>
	</div>
</section>
<aside>
	<?php echo $submit_message ?>
	<div id="testimonial_add">
		<h3>Testimonial</h3>
		<form method="post" action="testimonials.php">
			<label for="first">First Name</label>
			<input name="first" placeholder="Type Here">
			
			<label for="last">Last Name</label>
			<input name="last" placeholder="Type Here">
			
			<label for="add">Testimonial</label>
			<textarea name="add" placeholder="Type Here"></textarea>

			<p><label>Enter the letters displayed:</label>
			<input type="text" id="defaultReal" name="defaultReal"></p>
			
			<input id="submit" name="submit" type="submit" value="Submit">
		</form>
	</div>
	<?php include("aside.php") ?>
</aside>
<?php include("footer.php"); ?> 
</body>
</html>