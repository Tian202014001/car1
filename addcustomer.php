<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	//$customerID= customer_id_SEQUENCE.nextval;
	$customerName= $_POST['customer_name'];
	$mail = $_POST['c_email'];
    $phoneNo = $_POST['c_phone'];
	$password = $_POST['C_password'];
  
   
   
    $DOB = date('d-m-y', strtotime($_POST['DOB'])); 
    $state = $_POST['c_state'];
    $city = $_POST['c_city'];
    $streetNo = $_POST['c_streetNo'];
    
 
   
	$query = oci_parse($conn," INSERT INTO customer(customer_id,customer_name,c_email,c_phone,C_password,DOB,c_state,c_city,c_streetNo) 
	values (customer_id_SEQUENCE.nextval,'$customerName','$mail','  $phoneNo','$password',to_date('$DOB','dd-mm-yyyy'),' $state',' $city','$streetNo')");
	
	$result = oci_execute($query);
	if ($result) {
        
        header('Location: allcar.php');
				exit();
	}
	else{
		header('Location: create_account.php');
		exit();
	}
}
?>