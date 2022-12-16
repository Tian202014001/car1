<?php
include_once 'database.php';

if(isset($_POST['ultrasonic']))
{	 
	$service_id2= $_POST['service_id2'];
    
    
 
   $query = oci_parse($conn, "INSERT INTO engine_diagnosis(service_id,report,ed_amount,ed_date) 
	values (concat('D_','$service_id3'),'fixed',5000,sysdate)");
	
	$result = oci_execute($query);
	if ($result) {
       
        
		header('Location: DiagnosisPackage.php'); 
    }
				
	
	else{
		header('Location: DiagnosisPackage.php'); 
	}
    

}
?>