<?php

	include 'login.php'; 
	
	$db_server = mysql_connect($db_hostname,$db_username,$db_password);
	if(!$db_server)die("Unable to connect to MySQL: " . mysql_error());
	mysql_select_db($db_database)
		or die("Unable to select database: " . mysql_error());

	$query = 'SELECT * FROM testimonials ORDER BY date desc';
	$testimonials = mysql_query($query);
	if(!$testimonials)die("Database access failed: " . mysql_error());

	$i = 0;
	while($row = mysql_fetch_assoc($testimonials))
	{
	   $data[$i] = $row;
	   $i++;
	}
			
	$testimonials = array("data" => $data);
	echo json_encode($testimonials);
?>