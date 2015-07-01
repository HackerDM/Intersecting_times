<?php
if (isset($_POST["submit_o"]))	
	if (!empty($_POST["password_o"]) && !empty($_POST["username_o"])) 
	
	{
		$query = "select * from users where username= '" . $_POST["username_o"] . "' LIMIT 1;";
		$result = mysqli_query($connection, $query);
		if ($row = mysqli_fetch_assoc($result))
		{
			if ($row["passwd"]== $_POST["password_o"])
			{
				$_SESSION["message"]="Login successful";
				$_SESSION["username"]=$_POST["username_o"];
				mysqli_free_result($result);
				redirect("input_date_form.php");
			}
			else echo "Login failed";
		}
		else echo "Login failed";
	}
	else echo "username, password cannot be blank;"
?>