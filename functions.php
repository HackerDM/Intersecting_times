<?php
define("DB_HOST", 'localhost');
define("DB_USER", 'dhruv');
define("DB_PASS", 'password');
define("DB_NAME", 'intersecting_times');
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

function establishing_connection()
{
	if(mysqli_connect_errno())
	{
		die("Database connection failed: " . mysqli_connect_error() . "<br/");
	}
	else
		echo ("Database connection successful <br/>");

}


function redirect($link)
{
	header ("location: {$link}");
	exit;
}



?>