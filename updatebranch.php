<?php
   include_once 'database.php';
	if(isset($_POST['update_p_btn']))
{
	
    $id=$_POST['update_id'];
    $car_number=$_POST['car_number'];
    $query = oci_parse($conn,"update branch set b_capacity=$car_number  where branch_id='$id'");
    $query_run = oci_execute($query);

    $query1 = oci_parse($conn,"CREATE or REPLACE TRIGGER branch_Restock_Trigger
    BEFORE UPDATE OF b_capacity
    ON branch
    FOR EACH ROW
    WHEN (New.b_capacity < 4)
    BEGIN
    INSERT INTO branch_restock VALUES (:old.branch_id,
    :new.b_capacity, :old.b_contact_no, :old.b_city,
    :old.b_state,:old.b_street_no  );
    END;");
    $query_run1 = oci_execute($query1);
    if($query_run)
    {
        
	
        header('Location: branchmanage.php'); 
    }
    else
    {

     
		header('Location: branchmanage.php'); 
       
    }
}
?>