<html>
	<head>
		<title>Bill</title>
	</head>
	<body>
		<center>
			<h2>XYZ Supermarket</h2></br></br>
			
			<form method="POST">
				<table border="1">
					<tr>
						<th>SI.NO</th>
						<th>Item</th>
						<th>Qty</th>
						<th>Individual Price</td>
						<th>Price</th>
					</tr>
					<tr>
						<td><input type="alphanum" name="T1"></td>
						<td><input type="text" name="T2"></td>
						<td><input type="number" name="T3"></td>
						<td><input type="number" name="T4"></td>
						<td><input type="number" name="T5"></td>
					</tr>
					<tr>
						<td colspan="5" align="center"><input type="submit" value="Print" name="btn1">&nbsp&nbsp&nbsp
							<input type="reset" value="Cancel" name="btn2">
					</tr>
					<tr>
						<td colspan="5" align="right">Total
						<input type="number" name="T6"></td>
					</tr>
				
				
				</table>			
			</form>
		</center>

	
<?php
	if(isset($_POST['btn1'])){
		$si=$_POST['T1'];
		$itm=$_POST['T2'];
		$qt=$_POST['T3'];
		$ipl=$_POST['T4'];
		$p=$_POST['T5'];
		
		?>
		<tr>
		<td><?php echo $si;?></td>
		<td><?php echo $itm;?></td>
		<td><?php echo $qt;?></td>
		</tr>
		<?php
		}
	
?>

</body>
	
</htmlt>



