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
			<input type="textarea" name="T4"><br><br>
			Email:
			<input type="text" name="T5"><br><br>
			<input type="submit" value="Ok" name="btn1">&nbsp&nbsp&nbsp
			<input type="reset" value="Cancel" name="btn3">
		</form>
		<a href="Table.html">Next</a>
		</center>
	</body>
</html>

<?php

$n=$n=$_POST['T1'];
echo "Name: ",$n;
?>
