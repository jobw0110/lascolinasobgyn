<?php
	include 'login.php';

	$db_server = mysql_connect($db_hostname,$db_username,$db_password);
	if(!$db_server)die("Unable to connect to MySQL: " . mysql_error());
	mysql_select_db($db_database)
		or die("Unable to select database: " . mysql_error());

	for($i = 0;$i < count($_POST['hrefs']);$i++)
	{
		$query = "insert into article_lounge values ('" . $_POST['hrefs'][$i] . "','" . 
			$_POST['titles'][$i] . "','" . $_POST['sections'][$i] . "') ";

		$articles = mysql_query($query);
		if(!$articles)die("Database access failed: " . mysql_error());
	}

?>