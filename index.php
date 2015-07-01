<?php require_once("functions.php");?>
<?php
session_start();

// php for sign up form
require_once("sign_up.php");

//php for sign in form
require_once("sign_in.php");
?>


<?php include_once("header.php"); ?>

<!--Sign up form-->

<h2> Sign Up </h2>
<form action = "index.php" method ="POST">
	Username: <input type = "text" value="" name="username"/><br/>
	Password: <input type = "password" value="" name="password"/><br/>
	Confirm Password: <input type = "password" value="" name="password_2"/><br/>
	<input type = "submit" value="submit" name="submit"/><br/>

	</form>


<!--sign in form -->
<h2> Sign in </h2>
<form action = "index.php" method ="POST">
	Username: <input type = "text" value="" name="username_o"/><br/>
	Password: <input type = "password" value="" name="password_o"/><br/>
	<input type = "submit" value="submit" name="submit_o"/><br/>

<?php include_once("footer.php"); ?>
