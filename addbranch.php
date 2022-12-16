<?php
include_once 'database.php';
if(isset($_POST['submit']))
{	 
	//$customerID= customer_id_SEQUENCE.nextval;
	$b_capacity= $_POST['b_capacity'];
   // $b_available= $_POST['b_available'];
	$b_contact_no = $_POST['b_contact_no'];
    $b_city = $_POST['b_city'];
	$b_state = $_POST['b_state'];
    $b_street_no = $_POST['b_street_no'];
   
    
 
   
	$query = oci_parse($conn," INSERT INTO branch(branch_id,b_capacity,b_contact_no,b_city ,b_state ,b_street_no) 
	values (branch_id_SEQUENCE.nextval,$b_capacity,'$b_contact_no','$b_city','$b_state','$b_street_no')");
	
	$result = oci_execute($query);
	if ($result) {
        
        header('Location:branchmanage.php');
				exit();
	}
	else{
		header('Location:branch_entry.php');
	}
}
?>