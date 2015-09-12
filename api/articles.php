<?php 
	include 'login.php';

	$db_server = mysql_connect($db_hostname,$db_username,$db_password);
	if(!$db_server)die("Unable to connect to MySQL: " . mysql_error());
	mysql_select_db($db_database)
		or die("Unable to select database: " . mysql_error());

	$query = "select * from article_lounge ";
	
	if(isset($_GET['search_str']))
	{
		$search_str = strtoupper($_GET['search_str']);

		$where = "where UCASE(title) like '%" . $search_str . "%' or UCASE(REPLACE(href,\"_\",\" \")) like '%" . 
			$search_str . "%' or UCASE(section) like '%" . $search_str . "%' ";
	}
	else 
		$where = "";

	$query = $query . $where;
		
	

	//echo $query . "</br>";

	$articles = mysql_query($query);
		if(!$articles)die("Database access failed: " . mysql_error());

	$i = 0;
	while($row = mysql_fetch_assoc($articles))
	{
	   $data[$i] = $row;
	   $i++;
	}
			
	$articles = array("data" => $data);
	echo json_encode($articles);
?>