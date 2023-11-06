<html>
	<head>
		<title>Simple Form</title>
	</head>
	<body style='background-color:grey'>
		<center>
			<h2>Informations</h2><br><br>
		
		<form method="POST">
			Name: 
			<input type="text" name="T1"><br><br>
			Contact Number:
			<input type="text" name="T2"><br><br>
			Address:
			<input type="textarea" name="T3"><br><br>
			Email:
			<input type="text" name="T4"><br><br>
			<input type="submit" value="Ok" name="btn1">&nbsp&nbsp&nbsp
			<input type="reset" value="Cancel" name="btn3">
		</form>
		<a href="Table.html">Next</a>
		</center>
	</body>
</html>

<?php
	if(isset($_POST['btn1']))
		{

		$n=$_POST['T1'];
		$phn=$_POST['T2'];
		$ad=$_POST['T3'];
		$mail=$_POST['T4'];
		
		echo "Name: ",$n,"<br>";
		echo "Phone: ",$phn,"<br>";
		echo "Address: ",$ad,"<br>";
		echo "Email: ",$mail,"<br>";
		}
		
?>
