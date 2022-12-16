<?php
include_once 'database.php';

if(isset($_POST['engine']))
{	 
	$service_id= $_POST['service_id'];
    
    
 
   $query = oci_parse($conn, "INSERT INTO repair(service_id,part_name,r_amount,repair_date) 
	values (concat('R_','$service_id'),'engine',5000,sysdate)");
	
	$result = oci_execute($query);
	if ($result) {
       
        
	
		header('Location: RepairPackages.php');  
    }
				
	
	else{
		
		header('Location: RepairPackages.php'); 
	}
    

}
?>