<?php //login.php
	$db_hostname = 'mysql10.websitesource.net';
	$db_database = 'JZavale_lascolinasobgyn';
	$db_username = 'JZavale_admin';
	$db_password = 'c0lin4sDB';

	function mysql_fix_string($string)
	{
		if(get_magic_quotes_gpc()) $string = stripslashes($string);
		return mysql_real_escape_string($string);
	}
	
?>