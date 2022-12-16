<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	//$customerID= customer_id_SEQUENCE.nextval;
	$customer_name= $_POST['customer_name'];
	$payment_id = $_POST['payment_id'];
    $v_id = $_POST['v_id'];
	$total_cost = $_POST['total_cost'];
  
   
   
    $payment_date = date('d-m-y', strtotime($_POST['payment_date'])); 
    // $position = $_POST['e_position'];
    // $e_position = $_POST['e_position'];
    // $city = $_POST['e_city'];
   
 
   
	$query = oci_parse($conn," INSERT INTO payment(customer_name,payment_id,v_id,total_cost,payment_date) 
	values ('$customer_name',payment_id_SEQUENCE.nextval,'$v_id','$total_cost',to_date('$payment_date','dd-mm-yyyy'))");
	
	$result = oci_execute($query);
	if ($result) {
        
        header('Location: allcar.php');
				exit();
	}
	else{
		echo "Error !";
				exit();
	}
}
?>