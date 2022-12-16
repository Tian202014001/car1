<?php
   include_once 'database.php';
	if(isset($_POST['delete_p_btn']))
{
	
    $id=$_POST['delete_id'];
    $query = oci_parse($conn,"Delete  from car where v_id='$id'");
 
    $query_run = oci_execute($query);
    if($query_run)
    {
        
		echo "deleted";
        header('Location: admin.php'); 
    }
    else
    {
       
		header('Location: admin.php'); 
       
    }
}
?>