<html>
	<head>
		<title>Bill</title>
	</head>
	<body>
		<center>
			<h2>XYZ Supermarket</h2></br></br>
			
			<form method="get">
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
	if(isset($_GET['btn1'])){
		$si=$_GET['T1'];
		$itm=$_GET['T2'];
		$qt=$_GET['T3'];
		$ipl=$_GET['T4'];
		$p=$_GET['T5'];
		
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
