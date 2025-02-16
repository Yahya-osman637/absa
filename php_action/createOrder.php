<?php 	

require_once("../include/conn.php");

$valid['success'] = array('success' => false, 'messages' => array(), 'order_id' => '');
// print_r($valid);
if($_POST) {	

$Date 						= date('Y-m-d', strtotime($_POST['Date']));	
  $Name 					= $_POST['Name'];
  $Type 				= $_POST['Type'];
  $Amount 				= $_POST['Amount'];
  $Reason 						=	$_POST['Reason'];
 
  
  //$cost     = $_POST['cost'];

				
	$sql = "INSERT INTO tblpayment (Date, Name, Type, Amount, Reason) VALUES ('$Date', '$Name', '$Type', '$Amount', '$Reason')";
	
	
	$order_id;
	$orderStatus = false;
	if($connect->query($sql) === true) {
		$order_id = $connect->insert_id;
		$valid['order_id'] = $order_id;	

		$orderStatus = true;
	}
}
		
	// echo $_POST['productName'];
	// /if $_POST
// echo json_encode($valid);