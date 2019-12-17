<?php
	//Change the values according to your database
	define('HOST','localhost');
	define('USER','root');
	define('PASS','');
	define('DB','mysql db');
	$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
	if ($con) {
    echo "Connected!";
  } else {
    echo "Connection Failed";
  }
?>

