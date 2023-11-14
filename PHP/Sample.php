
<?php
	//$t=time();
	$s=array("1","2","3");
	echo "Maximum: ".max($s)."<br>";
	echo "Minimum: ".min($s)."<br>";
	echo "Random value: ".rand(10,50)."<br><br>";
	
	echo "Today is ".date("Y/m/d")."<br>";
	echo "Today is ".date("Y.m.d")."<br>";
	echo "Today is ".date("Y-m-d")."<br>";
	echo "Today is ".date("l")."<br>";
	echo "Today is ".date("d")."<br>";
	echo "Month is ".date("F")."<br>";
	echo "Year is ".date("Y")."<br><br>";
	
	date_default_timezone_set("Asia/Kolkata");
	echo "Time is ".date("h:i:sa")."<br><br>";
	
	define("hi","hello");
	echo hi;
	
	
	
	
	

?>
