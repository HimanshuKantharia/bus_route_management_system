<title>ST_Project_AdminPage</title>
<head><link rel ="stylesheet" type="text/css" href="admin.css"></head>
<a class = "logout" href = "ST_Project_LoginPage.php">Logout</a>
<h1> Welcome, Administrator. </h1>
<div class = "ext">
	<h3>Add bus:</h3>
	<form method = "post" action = "ST_Project_Subs.php">
		<table>
			<tr><td>Enter bus number:					</td><td><input name = "busno" type = "number"/></td></tr>
			<tr><td>Enter seating capacity:				</td><td><input name = "seat" type = "number"/>	</td></tr>
			<tr><td>Enter the route number to follow:	</td><td><select name = "rno"/><?php 
																						$count = 0;
																						$read = file("route.txt");
																						foreach($read as $fname)
																						{
																							$count++;
																							if($count%2)
																								echo "<option value = $fname>".$fname."</option>";
																						}
																						?></select></td></tr>
			<tr><td><input type = submit />				</td></tr>
		</table>
	</form>
</div>

<div class = "ext">
<h3>Add station:</h3>
	<form method = "post" action = "ST_Project_Subs.php">
		<table>
			<tr><td>Enter station number:				</td><td><input type = "number" name = "stno" /></td></tr>
			<tr><td>Enter station name:					</td><td><input type = "text" name = "stname" /></td></tr>
			<tr><td>Enter the route number to follow:	</td><td><select name = "rrno"/><?php 
																						$count = 0;
																						$read = file("route.txt");
																						foreach($read as $fname)
																						{
																							$count++;
																							if($count%2)
																								echo "<option value = $fname>".$fname."</option>";
																						}
																						?></select></td></tr>
			<tr><td><input type = submit /></td></tr>
		</table>
	</form>

</div>

<div class = "ext">
<h3>Add route:</h3>
	<form method = "post" action = "ST_Project_Subs.php">
		<table>
			<tr><td>Enter route number:	</td><td><input type = "number" name = "arno"/></td></tr>
			<tr><td>Enter source:		</td><td><input type = "text" name = "source"/></td></tr>
			<tr><td>Enter destination:	</td><td><input type = "text" name = "desti" /></td></tr>
			<tr><td><input type = submit /></td></tr>
		</table>
	</form>
</div>

<table class = "foot">
	<tr>
		<td><h2>Total number of buses</h2></td>
		<td><h2>Total routes</h2></td>
		<td><h2>Total stations</h2></td>
	</tr>
	<tr>
		<td>
		<?php
			$handle = file("bus.txt");
			$count = 0;
			foreach($handle as $handle)
			{
				$count++;
			}
			$count = $count / 3 ;
			echo $count;
		?>
		</td>
		<td>
		<?php
			$handle = file("route.txt");
			$count = 0;
			foreach($handle as $handle)
			{
				$count++;
			}
			$count = $count / 2 ;
			echo $count;
		?>
		</td>
		<td>
		<?php
			$handle = file("station.txt");
			$count = 0;
			foreach($handle as $handle)
			{
				$count++;
			}
			$count = $count / 3 ;
			echo $count;
		?>
		</td>
	</tr>
</table>
