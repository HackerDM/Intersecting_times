<?php include_once("header.php"); ?>
		<form action="fix_outing.php" method="POST">
			<table>
			<?php 
			$counter=1;
			while ($counter<=3 )
			{
				echo "<tr><td>Preference: <input type=\"text\" 
				name=\"priority{$counter}\" value=\"\"/></td><td>Date: <input type=\"date\" name=\"prefered_dates{$counter}\" value=\"\"/></td></tr>";			
				$counter++;
			}
			?>
			</table><br/>
			<input type="submit" value="submit">
		</form>

<?php include_once("footer.php"); ?>
