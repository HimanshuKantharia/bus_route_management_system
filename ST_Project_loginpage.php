<title>ST_Project_loginpage</title>
<head> <link rel ="stylesheet" type="text/css" href="login.css">
</head>


<div class = "header"><h1 class= "movehead">Bus Managment System</h1></div>

<div class = "display" >
	<p>Select the route to display the details.</p>
	<form method = "get" action = "ST_Project_loginpage.php">
	<select name = "route">
		<option value = "None">---Select Route---</option>
		<?php
			error_reporting(0);
			$choice = 0;
			$count = 1;
			$x = 1;
			$read = file("route.txt");
			foreach($read as $fname)
				{
					if($count%2==0)
					{echo "<option value = ".$x.">".$fname."</option>";
					$x++;}
					$count++;
				}	
		?>
	</select>
	<input type = submit />
	</form>
	<?php
		error_reporting(0);
		$routeno = $_GET["route"];
		if($routeno=="None" || $routeno == "" || $routeno == null)
			echo "You have not selected any route.";
		else 
		{
			echo "You have selected route no. ".$routeno;
			echo "<br><br>This route goes through the following stations.<br><br>";
			$handle=file("station.txt"); $cnt = 1;
			$flag = 0;
			echo "<table width = 400>
				  <tr><td>Station number</td>
				      <td>Station name</td>
				  </tr>
				 ";
			foreach($handle as $fname)
			{
				if($cnt%3==0 && $flag>0 ) {echo "<td>".$fname."</td></tr>"; $flag = 0;}
				if($cnt%3==2 && $flag>0)	echo "<tr><td>".$fname."</td>";
				if($cnt%3==1)
				{
					if($routeno == trim($fname)) $flag++;
					
				}
				$cnt++;
			}
			echo"</table>";
			
		}
		
	?>
</div>

<div class = "bus">
	<h3 style = "color: green;">Buses on the selected route</h3>
	<br>
	<?php
		error_reporting(0);
		$routeno = $_GET["route"];
		if($routeno=="None" || $routeno == "" || $routeno == null) echo "Route not selected.";
		else
		{
			echo "The following buses are available:<br>";
			$read = file("bus.txt");
			$cnt = 1;
			$flag = 0;
			echo "
				 <table width = 300>
				 <tr>
					<td>Bus number</td>
					<td>Bus capacity</td>
				 </tr>	
				 ";
			foreach($read as $fno)
			{
				if($cnt%3==0 && $flag>0 ) {echo "<td>".$fno."</td></tr>"; $flag = 0;}
				if($cnt%3==2 && $flag>0)	echo "<tr><td>".$fno."</td>";
				if($cnt%3==1)
				{
					if($routeno == trim($fno)) $flag++;
					
				}
				$cnt++;
			}
			echo"</table>";
		}
	?>
</div>




<div class = "login">	
		<h2 style = "color: green; font-family: "Book Antiqua";">Admin login</h2>
		<br>
		<form action = "ST_Project_NLI.php" method = "post">
			<table width = "350" style = "color : red; font-size:17px; border-spacing : 5px;">
				<tr>
					<td>Username : </td>
					<td><input type = "text" name = "user" required></td>
				</tr>
				<tr>
					<td>Password : </td>
					<td><input type = "password" name = "pswd" required></td>
				</tr>
				<tr><td colspan = "2"><center><input type = submit></center></td></tr>
			</table>
		</form>
</div>

<div class="footer">
<iframe src = "https://www.clocktabs.com"></iframe>
<h1>Contact me :* : +91-8758624706</h1>

</div
