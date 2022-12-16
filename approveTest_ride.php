<?php
   include_once 'database.php';
	if(isset($_POST['approve_p_btn']))
{
	
    $id=$_POST['approve_id'];
    $query = oci_parse($conn,"update test_ride set action='Approved'   where tr_id='$id'");
    $query_run = oci_execute($query);
    if($query_run)
    {
        
		echo "Approved";
        header('Location: test_ride.php'); 
    }
    else
    {
       
		header('Location: test_ride.php'); 
       
    }
}
?>