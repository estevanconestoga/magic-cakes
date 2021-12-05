 <?php

/	function prepare_string($sql_connection, $string) {
		$string = mysqli_real_escape_string($sql_connection, trim($string));
		return $string;
	}

	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'magiccake');

	$sql_connection = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
		OR die('Could not connect to MySQL: ' . mysqli_connect_error());
	mysqli_set_charset($sql_connection, 'utf8');


  ?>  