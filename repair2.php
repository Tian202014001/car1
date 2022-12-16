<?php
include_once 'database.php';

if(isset($_POST['Transmission']))
{	 
	$service_id2= $_POST['service_id2'];
    
    
 
   $query = oci_parse($conn, "INSERT INTO repair(service_id,part_name,r_amount,repair_date) 
	values (concat('R_','$service_id2'),'Tranmisson',5000,sysdate)");
	
	$result = oci_execute($query);
	if ($result) {
       
        
	
		header('Location: RepairPackages.php'); 
    }
				
	
	else{
		
		header('Location: RepairPackages.php'); 
	}
    

}
?>