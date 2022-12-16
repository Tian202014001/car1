<?php
include_once 'database.php';
if(isset($_POST['request']))
{	 
	$service_id= $_POST['service_id'];
    $v_model= $_POST['model'];
	$reg_no= $_POST['reg_no'];
    $customer_id = $_POST['customer_id'];

   
    $var_r_amount=oci_parse($conn,"SELECT sum(r_Amount)  FROM repair WHERE
	service_id = '$service_id' group by('$service_id')");
	$result1 = oci_execute( $var_r_amount);
	
	$var_m_amount=oci_parse($conn,"SELECT sum(m_amount)  FROM maintainance WHERE
	service_id = '$service_id' group by('$service_id')");
	$result2 = oci_execute( $var_m_amount);
	$var_ed_amount=oci_parse($conn,"SELECT sum(ed_amount)  FROM engine_diagnosis WHERE
	service_id = $service_id group by($service_id)");
	$result3 = oci_execute( $var_m_amount);



   $query = oci_parse($conn, "INSERT INTO services(service_id,reg_no,v_model,bill,customer_id) 
	values ('$service_id',' $v_model','$reg_no',0, '$customer_id')");
		$result = oci_execute($query);
	
	//$query4 = oci_parse($conn, "update services set bill=(SELECT sum(r_Amount)  FROM repair  where service_id='$service_id')+(SELECT sum(m_Amount)  FROM maintainance  where service_id='$service_id') +(SELECT sum(ed_Amount)  FROM engine_diagnosis  where service_id='$service_id')  where service_id='$service_id'");
	//$result4 = oci_execute($query4);

	$query4 = oci_parse($conn, "update services set bill=(SELECT sum(r_Amount)  FROM engine_diagnosis  where service_id='$service_id') where service_id='$service_id'");
	$result4= oci_execute($query4);



	//$query5 = oci_parse($conn, "update services set bill=(SELECT sum(m_Amount)  FROM maintainance  where service_id='$service_id')");
	//$result5 = oci_execute($query5);

	//$query6 = oci_parse($conn, "update services set bill=(SELECT sum(ed_Amount)  FROM engine_diagnosis  where service_id='$service_id')");
	//$result6 = oci_execute($query6);
	
	
	if ($result) {
       
        
		header('Location: DiagnosisPackage.php'); 
    }
				
	
	else{
		header('Location: DiagnosisPackage.php'); 
	}
    

}




















?>