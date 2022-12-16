<?php
include_once 'database.php';
if(isset($_POST['bought']))
{	 
	//$customerID= customer_id_SEQUENCE.nextval;

   
	$query = oci_parse($conn,"select * from owner");
	
	$result = oci_execute($query);
	if ($result) {
        
        header('Location: customer.php');
				exit();
	}
	else{
		
        header('Location: customer.php');
				exit();
	}
}
?>