<?php
if (isset($_POST["submit"])){ 
	if (!empty($_POST["password"]) && !empty($_POST["username"])) 
	{
	if ($_POST["password"]==$_POST["password_2"])
	{
		$query = "insert into users(username, passwd) values ('" . $_POST["username"] . "', '" . $_POST["password"] . "')";
		
		mysqli_query($connection, $query);
		if (mysqli_affected_rows($connection))
			{
				$_SESSION["message"]="Username added to the database successfully";
				$_SESSION["username"]=$_POST["username"];
				redirect ("input_date_form.php");

			}
		else echo "Could not connect to the database";
	}
	else echo "Passwords do not match";
	}
	else echo "Username/Password cannot be blank";}
	?>