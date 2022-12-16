<?php
include_once 'database.php';

if(isset($_POST['pre']))
{	
    
   
	$service_id2= $_POST['service_id2'];
    
    
 
   $query = oci_parse($conn, "INSERT INTO maintainance(service_id,type,m_amount,maintainance_date) 
	values (concat('M_','$service_id2'),'preventive ',5000,sysdate)");
	
	$result = oci_execute($query);
	if ($result) {
       
        
		header('Location: MaintainancePackages.php'); 
    }
				
	
	else{
		header('Location: MaintainancePackages.php'); 
	}
    

}
?>