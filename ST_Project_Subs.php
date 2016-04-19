<?php
	/*
		File saving procedure for bus system,
		It must be saved in the following manner
		route no=>Bus no. => Seat caps   
		each detail is saved in a different line as to be accessed by the file() function.
		also i'm awesome
	
	*/
	$busno = $_POST["busno"];
	$seatcap = $_POST["seat"];
	$routeno = $_POST["rno"];
	if(!empty($busno) && !empty($seatcap) && !empty($routeno))		//Just to double check whether the input has arrived or not
	{
		$handle = fopen("bus.txt",'a');  	//Working on append mode
		fwrite($handle,$routeno."\n");
		fwrite($handle,$busno."\n");
		fwrite($handle,$seatcap."\n");
		//writing onto file complete
		fclose($handle);
	}
	
?>


<?php
	/*
		File saving system for station
		It must be saved in the following manner
		Route no => Station No => Station Name
		Every detail in a different line to faciliate and lubricate the file function rather than fopen
	*/
	$stno = $_POST["stno"];
	$stname = $_POST["stname"];
	$rtno = $_POST["rrno"];			//rno , rrno are different so as to avoid confusion during the data transfer
	if(!empty($stno) && !empty($stname) &&!empty($rtno))
	{
		$handle = fopen("station.txt",'a');		//Working on append mode
		fwrite($handle,$rtno."\n");
		fwrite($handle,$stno."\n");
		fwrite($handle,$stname."\n");
		fclose($handle);
	}
	
?>


<?php
	/*
		This one right here is a special one, for the route
		Information will be stored line wise, but with the exception that the source and destination will be concenated
		Sequence of data storage:
		Route No => Source-Destination
		Nice idea right?	Route no in odd lines, source-destination in even lines
		Watch me concate them with my bare hands 
	*/
	
	$route = $_POST["arno"];
	$source = $_POST["source"];
	$desti = $_POST["desti"];
	if(!empty($route) && !empty($source) && !empty($desti) )
	{
		$handle = fopen("route.txt",'a');	//Working on append mode
		fwrite($handle,$route."\n");
		fwrite($handle,$source." - ".$desti."\n");
		fclose($handle);
	}
	
	header("location:ST_Project_Adminpage.php");
?>