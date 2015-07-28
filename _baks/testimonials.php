<?php
if (isset($_POST['submit']))
{
	$first_name = $_POST['first'];
	$last_name = $_POST['last'];
	$testimonial = $_POST['add'];
	$dsn = 'mysql:host=mysql10.websitesource.net;dbname=JZavale_lascolinasobgyn';
	$username = 'JZavale_admin';
	$password = 'c0lin4sDB';
	try{
		$db = new PDO($dsn, $username, $password);
		//echo 'connected to database';
	} catch (PDOException $e) {
		$error_message = $e->getMessage();
		echo 'an error occurred';
	}
	$query = "INSERT * INTO testimonial_submission VALUES ('" . $first_name . "','" . 
			 $last_name . "','" . $testimonial . "')";
	$testimonials = $db->query($query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Patients</title>
	<link rel="stylesheet" href="css/lascolinas.css">
	<link rel="stylesheet" href="css/testimonials.css">
	<link rel="stylesheet" href="css/superfish.css"> 
	
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
		
	<script src="js/superfish.js"></script>
	<script src="js/menu.js"></script>
</head>
<?php $spanish = "espanol_index.php"; ?>
<body>
<?php include("header.php"); ?>
<h1>Testimonials</h1>
<section>
	<div class="testimonials">
	<?php	
		$dsn = 'mysql:host=mysql10.websitesource.net;dbname=JZavale_lascolinasobgyn';
		$username = 'JZavale_admin';
		$password = 'c0lin4sDB';
		try{
			$db = new PDO($dsn, $username, $password);
			//echo 'connected to database';
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo 'an error occurred';
		}
		$query = 'SELECT * FROM testimonials';
		$testimonials = $db->query($query);
		foreach ($testimonials as $testimonial)
		{
			print "<div id='testimonial'><blockquote><p>" . $testimonial[2] . "</p><cite>&ndash;" . $testimonial[0] . " " . $testimonial[1] . "</cite></blockquote></div>";
		}
	?>
	</div>
	<div id="testimonial_add">
		<h3>Testimonial</h3>
		<form method="post" action="contact.php">
			<label for="first">First Name</label>
			<input name="first" placeholder="Type Here">
			
			<label for="last">Last Name</label>
			<input name="last" placeholder="Type Here">
			
			<label for="add">Testimonial</label>
			<textarea name="add" placeholder="Type Here"></textarea>
			
			<input id="submit" name="submit" type="submit" value="Submit">
		</form>
		<?php //echo $status; ?>
	</div> -->
</section>
<aside>
	<?php include("aside.php") ?>
</aside>
<?php include("footer.php"); ?> 
</body>
</html>