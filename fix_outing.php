<?php
require_once("functions.php");


	$preference = $_POST['priority'];
	$date = $_POST['prefered_dates'];


establishing_connection();

$query = "insert into outing(username, date_prefered, preference, groups, outing_name) values ('{$username}', '{$date}', {$preference}, '{group_name}', '{outing_name}')";
mysqli_query($connection, $query);
echo mysqli_affected_rows($connection);





?>