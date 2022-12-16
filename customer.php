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
 $query=oci_parse($conn,"select * from customer");
 $query_result=oci_execute($query);
 ?>

<?php
 $query1=oci_parse($conn,"select customer_id,v_id from owner natural join car");
 $query_result1=oci_execute($query1);
 ?>

<?php
 $query2=oci_parse($conn,"select * from service_taken");
 $query_result2=oci_execute($query2);
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
	<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >☰ Customer Details</span>
	<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >☰Customer Details</span>
	</div>
		<br><br><br>
    
	<form action="" method="post">
	<h3 style="color:aliceblue"><center>bought Car</center></h3>
   
   <table>
	  <tr>
	   <th>Customer Id</th>
	    <th>vehicle ID</th>
	   
      
	  </tr>
	  <?php 
  
	while(($row1 = oci_fetch_array($query1, OCI_BOTH)) != false){

	?>
	<tr>
		<td><?php echo $row1[0]; ?></td>
		<td><?php echo $row1[1]; ?></td>
		
	


</form></td>

		
	</tr>
	<?php

	}
	?>
   

<br>


	  
	</table>
   
 
 
 <br>
 
 
 <h3 style="color:aliceblue"><center>service Taken</center></h3>
   <table>
	  <tr>
	   <th>Customer Id</th>
	    <th>service ID</th>
	   
      
	  </tr>
	  <?php 
  
	while(($row1 = oci_fetch_array($query2, OCI_BOTH)) != false){

	?>
	<tr>
		<td><?php echo $row1[0]; ?></td>
		<td><?php echo $row1[1]; ?></td>
		
	


</form></td>

		
	</tr>
	<?php

	}
	?>
   

<br>
	  
	</table>
	<h3 style="color:aliceblue"><center>View All Customer</center></h3>
	<form action="" method="post">
	<input type="text" name="customer_id" placeholder="Enter Customer Id"/>
	<input type="submit" name="search" value="serach"/>
</form>
<table>
	  <tr>
	   <th>Customer Id</th>
	    <th>Name</th>
	    <th>email</th>
      <th>Phone</th>
	  <th>Password</th>
      <th>Dob</th>
      
      <th>State</th>
      <th>City</th>
      <th>Street NO</th>
	  <!-- <th> Edit </th> -->
	  <th>Delete</th>
	  <th></th>
      
	  </tr>
<?php 
      
      if(isset($_POST['search']))
        {
         // $customer_id=$_POST['customer_id'];
		  $customer_id=$_POST['customer_id'];
        $query=oci_parse($conn,"select * from customer where customer_id=$customer_id");
           
        }
		else
		{
		  $query=oci_parse($conn,"select * from customer");
		}
		$query_result=oci_execute($query);

	
	$count=0;
  
	while(($row = oci_fetch_array($query, OCI_BOTH)) != false){
			$count++;
	?>
	<tr>
	
		
		<td><?php echo $row[0]; ?></td>
		<td><?php echo $row[1]; ?></td>
		<td><?php echo $row[2]; ?></td>
		<td><?php echo $row[3]; ?></td>
		<td><?php if(isset($row[4]))
			{echo $row[4];} ?></td>
		<td><?php echo $row[5]; ?></td>
		<td><?php echo $row[6]; ?></td>
		<td><?php echo $row[7]; ?></td>
		<td><?php echo $row[8]; ?></td>
		<td><form action="delete_customer.php" method="post">

<input type="hidden" name="delete_id" value="<?php echo $row['CUSTOMER_ID']; ?>">

<button type="submit" name="delete_p_btn" class="btn btn-danger"> DELETE</button>


</form></td>

		
	</tr>
	<?php

	}
	?>
   <?php echo $count; ?>


<br>
	  
	</table>
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