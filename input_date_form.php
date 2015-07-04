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
	
	Kindly input the dates when you are free in the order of decreasing priority.<br/>
	
	<!--Date preference form--> 

	<button onclick = "addOptions()">Add Options</button>
	<button onclick = "removeOptions()">Remove Options</button><br/>
	<form action="fix_outing.php" method="POST">
		<table id = "preferences" >
		<tr>
			<td>Preference: <input type="text" name="priority1" value=""/></td>
			<td>Date: 
				<select name="day1">
                        <option value="1">01
                        </option>
                        <option value="2">02
                        </option>
                        <option value="3">03
                        </option>
                        <option value="4">04
                        </option>
                        <option value="5">05
                        </option>
                        <option value="6">06
                        </option>
                        <option value="7">07
                        </option>
                        <option value="8">08
                        </option>
                        <option value="9">09
                        </option>
                        <option value="10">10
                        </option>
                        <option value="11">11
                        </option>
                        <option value="12">12
                        </option>
                        <option value="13">13
                        </option>
                        <option value="14">14
                        </option>
                        <option value="15">15
                        </option>
                        <option value="16">16
                        </option>
                        <option value="17">17
                        </option>
                        <option value="18">18
                        </option>
                        <option value="19">19
                        </option>
                        <option value="20">20
                        </option>
                        <option value="21">21
                        </option>
                        <option value="22">22
                        </option>
                        <option value="23">23
                        </option>
                        <option value="24">24
                        </option>
                        <option value="25">25
                        </option>
                        <option value="26">26
                        </option>
                        <option value="27">27
                        </option>
                        <option value="28">28
                        </option>
                        <option value="29">29
                        </option>
                        <option value="30">30
                        </option>
                        <option value="31">31
                        </option>
                    </select>
                    <select name="month1">
                        <option value="1">January
                        </option>
                        <option value="2">February
                        </option>
                        <option value="3">March
                        </option>
                        <option value="4">April
                        </option>
                        <option value="5">May
                        </option>
                        <option value="6">June
                        </option>
                        <option value="7">July
                        </option>
                        <option value="8">August
                        </option>
                        <option value="9">September
                        </option>
                        <option value="10">October
                        </option>
                        <option value="11">November
                        </option>
                        <option value="12">December
                        </option>
                    </select>					
			</td>
		</tr>		
		</table><br/>
		<input type="submit" value="submit">
	</form>


<?php include_once("footer.php"); ?>