<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	//$customerID= customer_id_SEQUENCE.nextval;
	$employeeName= $_POST['employee_name'];
	$mail = $_POST['e_email'];
    $phoneNo = $_POST['e_phone'];
	$password = $_POST['e_password'];
  
   
   
    $DOB = date('d-m-y', strtotime($_POST['DOB'])); 
    // $position = $_POST['e_position'];
    $e_position = $_POST['e_position'];
    $city = $_POST['e_city'];
   
 
   
	$query = oci_parse($conn," INSERT INTO employee(employee_id,employee_name,e_email,e_phone,e_password,DOB,e_position,e_city) 
	values (employee_id_SEQUENCE.nextval,'$employeeName','$mail','  $phoneNo','$password',to_date('$DOB','dd-mm-yyyy'),' $e_position',' $city')");
	
	$result = oci_execute($query);
	if ($result) {
        
        header('Location: employee.php');
				exit();
	}
	else{
		header('Location: create_account_employee.php');
		
	}
}
?>