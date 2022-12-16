<?php
include_once 'database.php';

if(isset($_POST['periodic']))
{	 
	$service_id1= $_POST['service_id1'];
    
    
 
   $query = oci_parse($conn, "INSERT INTO maintainance(service_id,type,m_amount,maintainance_date) 
	values (concat('M_','$service_id1'),'Preodic Maintaince',10000,sysdate)");
	
	$result = oci_execute($query);
	if ($result) {
       
        
		header('Location: MaintainancePackages.php');  
    }
				
	
	else{
		header('Location: MaintainancePackages.php'); 
	}
    

}
?>