<!Doctype HTML>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="assets/css/admin.css" type="text/css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>


	<body>
	<?php
		include "database.php";
	
		?>
<?php
 $query=oci_parse($conn,"select * from services");
 $query_result=oci_execute($query);
 $query1=oci_parse($conn,"select * from repair");
 $query_result1=oci_execute($query1);
 $query2=oci_parse($conn,"select * from maintainance");
 $query_result2=oci_execute($query2);

 $query3=oci_parse($conn,"select * from engine_diagnosis");
 $query_result3=oci_execute($query3);
 ?>
	<div id="mySidenav" class="sidenav">
<p class="logo"><span>A</span>dmin</p>
		<a href="admin.php" class="icon-a"><i class="fa fa-dashboard icons"></i> All Car List</a>
		<a href="car_entry2.php"class="icon-a"><i class="fa fa-users icons"></i>   Car entry</a>
		<a href="test_ride.php"class="icon-a"><i class="fa fa-list icons"></i>   Test ride details</a>
		<a href="customer.php"class="icon-a"><i class="fa fa-user icons"></i>   Customer Manage</a>
		<a href="employee.php"class="icon-a"><i class="fa fa-user icons"></i>   Employee List</a>
		<a href="paymentDetails.php"class="icon-a"><i class="fa fa-tasks icons"></i>   Payment details</a>
		<a href="branch_entry.php"class="icon-a"><i class="fa fa-user icons"></i>   Branch entry</a>
		<a href="branchmanage.php"class="icon-a"><i class="fa fa-user icons"></i>   Branch Management</a>
		<a href="servicemanage.php"class="icon-a"><i class="fa fa-user icons"></i>   Service Management</a>
		<a href="admin_login.php"class="icon-a"><i class="fa fa-list-alt icons"></i>   Logout</a>
	</div>
  <div id="main">

		<div class="head">
			<div class="col-div-6">
	<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >☰ Dashboard</span>
	<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >☰ Dashboard</span>
	</div>

	
		<br><br><br>
        <h2 style="color:aliceblue">Service Requested</h2>
		
				<table>
	  <tr>
	  <th>service Id</th>
	    <th>v_model</th>
	    <th>reg_no</th>
      <th>bill</th>
	  <th>customer_id </th>
    
      
	  </tr>
	  <?php
	  while(($row = oci_fetch_array($query, OCI_BOTH)) != false){

?>
<tr>
<td><?php if(isset($row[0]))
		{echo $row[0];} ?></td>
	<td><?php echo $row[1]; ?></td>
	<td><?php echo $row[2]; ?></td>
	
	<td><?php if(isset($row[3]))
		{echo $row[3];} ?></td>
		<td><?php if(isset($row[4]))
		{echo $row[4];} ?></td>
		

	

</form></td>

	
</tr>
<?php

}
?>



<br>
  
</table>
	 
	 
	  
<h2 style="color:aliceblue">Repair Requested</h2>
		
		<table>
<tr>
<th>service Id</th>
<th>part_name</th>
<th>Amount</th>
<th>Date</th>



</tr>
<?php
while(($row1 = oci_fetch_array($query1, OCI_BOTH)) != false){

?>
<tr>
<td><?php if(isset($row1[0]))
		{echo $row1[0];} ?></td>
<td><?php echo $row1[1]; ?></td>
<td><?php echo $row1[2]; ?></td>

<td><?php if(isset($row1[3]))
{echo $row1[3];} ?></td>





</form></td>


</tr>
<?php

}
?>



<br>

</table>


<h2 style="color:aliceblue">Maintaince requested</h2>
		
		<table>
<tr>
<th>service Id</th>
<th>part_name</th>
<th>Amount</th>
<th>Date</th>



</tr>
<?php
while(($row2 = oci_fetch_array($query2, OCI_BOTH)) != false){

?>
<tr>
<td><?php if(isset($row2[0]))
		{echo $row2[0];} ?></td>
<td><?php echo $row2[1]; ?></td>
<td><?php echo $row2[2]; ?></td>

<td><?php if(isset($row2[3]))
{echo $row2[3];} ?></td>





</form></td>


</tr>
<?php

}
?>



<br>

</table>

<h2 style="color:aliceblue">Diagnosis requested</h2>
		
		<table>
<tr>
<th>service Id</th>
<th>part_name</th>
<th>Amount</th>
<th>Date</th>



</tr>
<?php
while(($row3 = oci_fetch_array($query3, OCI_BOTH)) != false){

?>
<tr>
<td><?php if(isset($row3[0]))
		{echo $row3[0];} ?></td>
<td><?php echo $row3[1]; ?></td>
<td><?php echo $row3[2]; ?></td>

<td><?php if(isset($row3[3]))
{echo $row3[3];} ?></td>





</form></td>


</tr>
<?php

}
?>



<br>

</table>





    <br>
    <h2 style="color:aliceblue">Assign Employee</h2>
    <form>
        <input type="text" name="earch by Position" placeholder= "Employee role" size="15" required /> <button type="submit" class="btn btn-success btn-lg">Search</button>

    </form>
    <table>
        <tr>
          <th>Employee ID</th>
          <th>Employee Name</th>
          <th>Employye Email</th>
          <th>Employye Role</th>
          <th></th>
         
        
        </tr>
       
          
          
           
        
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th><button type="submit" class="btn btn-success btn-lg">Assign</button></th>

       
        </tr>
       
        
      </table>
    
			</div>
		</div>
		</div>

    </div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>

	  $(".nav").click(function(){
	    $("#mySidenav").css('width','70px');
	    $("#main").css('margin-left','70px');
	    $(".logo").css('visibility', 'hidden');
	    $(".logo span").css('visibility', 'visible');
	     $(".logo span").css('margin-left', '-10px');
	     $(".icon-a").css('visibility', 'hidden');
	     $(".icons").css('visibility', 'visible');
	     $(".icons").css('margin-left', '-8px');
	      $(".nav").css('display','none');
	      $(".nav2").css('display','block');
	  });

	$(".nav2").click(function(){
	    $("#mySidenav").css('width','300px');
	    $("#main").css('margin-left','300px');
	    $(".logo").css('visibility', 'visible');
	     $(".icon-a").css('visibility', 'visible');
	     $(".icons").css('visibility', 'visible');
	     $(".nav").css('display','block');
	      $(".nav2").css('display','none');
	 });

	</script>

	</body>


	</html>