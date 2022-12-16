<?php
   include_once 'database.php';
	if(isset($_POST['delete_p_btn']))
{
	
    $id=$_POST['delete_id'];
    $query = oci_parse($conn,"update test_ride set action='Not approved'   where tr_id='$id'");
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