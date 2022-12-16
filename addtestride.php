<?php
include_once 'database.php';

if(isset($_POST['save']))

{	 

	
	$trID= $_POST['tr_id'];
    $vehicleID= $_POST['v_id'];
	$customerID= $_POST['customer_id'];
    $stime = $_POST['s_time'];
    $rtime = $_POST['r_time'];
    $DOB = date('d-m-y', strtotime($_POST['DOB'])); 
    
 
   $query = oci_parse($conn, "INSERT INTO test_ride(tr_id,v_id,customer_id,s_time,r_time,tr_date) 
	values ('$trID','$vehicleID','$customerID','$stime','$rtime',to_date('$DOB','dd-mm-yyyy'))");
	
	$result = oci_execute($query);
	if ($result) {
        
		header('Location: cardetail.php'); 
    }
				
	
	else{
		header('Location: cardetail.php'); 
	}
}
?>