<?php require_once("include/conn.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Report</title>
</head>

<body onload="print()">
	<?php



	if ($_POST) {

		$startDate = $_POST['startDate'];
		$date = DateTime::createFromFormat('m/d/Y', $startDate);
		$start_date = $date->format("Y-m-d");


		$endDate = $_POST['endDate'];
		$format = DateTime::createFromFormat('m/d/Y', $endDate);
		$end_date = $format->format("Y-m-d");

		$sql = "SELECT * FROM tblpayment WHERE Date >= '$start_date' AND Date <= '$end_date'";
		$query = $con->query($sql);

		$table = '

	<table border="1" cellspacing="0" cellpadding="0" style="width:100%;">
	<tr>
	<p>Start Date: ' . $start_date . '</p>

	<p>End Date: ' . $end_date . '</p>

</tr>

		<tr>
			<th>Name</th>
			<th>Amount</th>
		
		</tr>

		<tr>';
		$totalAmount = 0;
		while ($result = $query->fetch_assoc()) {
			$table .= '
			<tr>
			
	
				<td><center>' . $result['Name'] . '</center></td>
				<td><center>' . $result['Amount'] . '</center></td>
			
			</tr>';
			$totalAmount += $result['Amount'];
		}
		$table .= '
		</tr>

		<tr>
			<td><center>Total Amount</center></td>
			<td><center>' . $totalAmount . '</center></td>
		</tr>

	

	</table>
	';

		echo $table;


	}

	?>
</body>

</html>