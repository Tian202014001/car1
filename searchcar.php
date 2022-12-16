<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	
	
    $brand = $_POST['brannd'];
	
   
   
	$query = oci_parse($conn, "select * from car where brannd ='$brand'");
	
	$result = oci_execute($query);
	if ($result) {
				//echo "Data added Successfully !";
				exit();
	}
	else{
		header('Location: allcar.php');  
	}
}
?>