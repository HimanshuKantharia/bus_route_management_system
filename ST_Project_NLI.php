<title>ST_Project_NLI</title>
<?php

	/*	Checking login authority 
		Login failure will display warning messages and redirects to login page.
		username to access : admin
		password : baby
	*/
	
	$username = $_POST["user"];
	$password = $_POST["pswd"];
	$url = "ST_Project_loginpage.php";
	if($username != "admin")
	{
		echo
			"
				<p>You are not authorized to access this page.</p>
				<a href = '$url'>Click here</a>
				<p>To be directed to the login page</p>
			";
	}
	else if($password != "baby")
	{
		echo
			"
				<p>You have entered the incorrect password</p>
				<a href = '$url'>Click here</a>
				<p>To be redirected to the login page</p>
			";
	}
	else header("location:ST_Project_Adminpage.php");
?>