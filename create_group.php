<?php include_once("functions.php"); ?>
<?php require_once("sessions.php"); ?>
<?php include_once("header.php");?>
<form action = "create_group.php" method = "POST">
	Enter group name: <input type="text" value="" name="group_name"/><br/>
	Invite friends :  <input type="text" value="" name="friend_name"/><br/>