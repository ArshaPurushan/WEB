<html>
	<head>
		<title>Internal mark</title>
		
	</head>
	<body>
		<form method="POST" action="">
		<center>
		<br>
		<table>
		<tr>
			<td>NAME</td>
			<td><input type="text" name="t1" ></td>
		</tr>
		<tr>
			<td>ROLL.NO</td>
			<td><input type="number" name="t2"></td>
		</tr>
		
		</table><br>
		<table border="1">
			<tr>
				<th>SI.NO</th>
				<th>SUBJECT</th>
				<th>MARK</th>
			</tr>
			<tr>
				<th>1</th>
				<td>MATHEMATICS</td>
				<td><input type="number" name="m1"></td>
			</tr>
			<tr>
				<th>2</th>
				<td>ENGLISH</td>
				<td><input type="number" name="m2"></td>
			</tr>
			<tr>
				<th>3</th>
				<td>PHYSICS</td>
				<td><input type="number" name="m3"></td>
			</tr>
			<tr>
				<td colspan="3"><center><input type="submit" name="btn1" value="RESULT">&nbsp&nbsp
							<input type="reset" name="btn2" value="CANCEL"></center>
			</tr>
		</table>  
		</center>
		
		<?php
			if(isset($_POST["btn1"]))
			{
			$name=$_POST["t1"];
			$roll=$_POST["t2"];
			$m1=$_POST["m1"];
			$m2=$_POST["m2"];
			$m3=$_POST["m3"];
			$total=$m1+$m2+$m3;
			
			
			$s=array($name,$roll)
			$mark=array($m1,$m2,$m3);
			int $i;
			
			}
			
			?>
			
			<form>
				<h2>Session Examination</h2><br>
				<table>
					<tr>
						<td>1</td>
						<td>MATHEMATICS</td>
						
					</tr>
				</table>
			</form>
			
					
		<?php
			}	
		
		?>
		
		</form>	
	</body>
</html>
