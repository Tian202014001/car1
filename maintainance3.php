<?php
include_once 'database.php';

if(isset($_POST['complete']))
{	 
	$service_id3= $_POST['service_id3'];
    
    
 
   $query = oci_parse($conn, "INSERT INTO maintainance(service_id,type,m_amount,maintainance_date) 
	values (concat('M_','$service_id3'),'Complete Maintaince',10000,sysdate)");
	
	$result = oci_execute($query);
	if ($result) {
       
        
		header('Location: MaintainancePackages.php'); 
    }
				
	
	else{
		header('Location: MaintainancePackages.php'); 
	}
    

}
?>