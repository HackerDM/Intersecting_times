<?php include_once("functions.php"); ?>
<?php require_once("sessions.php"); ?>
<?php	
	include_once("header.php");	
	$message = $_SESSION["message"]; 
	$message.= "<br/>Welcome "; 
	$message.= $_SESSION["username"]; 
	$message.= "<br/><br/>";
	echo $message;?>
	
	<a href="logout.php">Logout</a><br/>

	If you wish to create a new group, <a href="create_group.php">click here</a>.<br/>
	If you wish to plan an outing with an existing group, <a href="#">click here</a>.<br/>
	
	Kindly input the dates when you are free in the order of decreasing priority.
	
	<!--Date preference form--> 

	<form action="fix_outing.php" method="POST">
		<table>
		<?php $counter=1; while ($counter<=3 ) { ?>
		<tr id = "add">
			<td>Preference: <input type="text" name="priority<?php echo $counter?>" value=""/></td>
			<td>Date: <input type="date" name="prefered_dates<?php echo $counter?>" value=""/></td>
		</tr>		
		<?php	$counter++; } ?>
		</table><br/>
		<input type="submit" value="submit">
	</form>

	<button onclick = "moreOptions()">More preferences</button>


<?php include_once("footer.php"); ?>