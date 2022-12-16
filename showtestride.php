
	<?php
		include "database.php";
	

	if(isset($_POST['tr_p_btn']))
{
	
    $id=$_POST['tr_id'];
    $query=oci_parse($conn,"select customer_id||' '||':' ||' '||'your requested test ride for '||v_id||' '||'was'||' '||action from test_ride natural join customer where action='Approved' and customer_id='$id'");
    $query_result=oci_execute($query);
    if($query_run)
    {
        
		echo "deleted";
        header('Location: customer_test_ride.php'); 
    }
    else
    {
       
		header('Location: test_ride.php'); 
       
    }
}
?>





<?php
	while(($row = oci_fetch_array($query, OCI_BOTH)) != false)
                {

					?>
					<div class="container">
					  <h4 style="color:aliceblue"><?php if(isset($row[0]))
			                          {echo $row[0];} ?></h4>
		</div>

		<?php

}



?>

<?php
	while(($row = oci_fetch_array($query1, OCI_BOTH)) != false)
                {

					?>
					<div class="container">
					  <h4 style="color:aliceblue"><?php if(isset($row[0]))
			                          {echo $row[0];} ?></h4>
		</div>

		<?php

}



?>

<?php
	while(($row = oci_fetch_array($query2, OCI_BOTH)) != false)
                {

					?>
					<div class="container">
					  <h4 style="color:aliceblue"><?php if(isset($row[0]))
			                          {echo $row[0];} ?></h4>
		</div>

		<?php

}

