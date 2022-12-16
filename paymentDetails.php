<!Doctype HTML>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="assets/css/admin.css" type="text/css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>


	<body>
		
	
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
    <h2 style="color:aliceblue"><center>Payemnt Details</center></h2>
		
				<table>
	  <tr>
	    <th>Payment Id</th>
	    <th>V ID</th>
	    <th>Payment Method</th>
     
      <th>Discount</th>
      <th>Total Cost</th>
      <th>Paid Amount</th>
      <th>Due</th>
      <th>Date</th>
      <th>

      </th>
      
	  </tr>
	  <tr>
	    <td></td>
	    <td></td>
	    <td></td>
        <td></td>
        <td></td>
        <td></td>
      <td>
      </td>
      <td></td>
      <td><button type="button" class="btn btn-primary btn-sm">update</button></td>
      
	  </tr>
      <tr>
	    <td></td>
	    <td></td>
	    <td></td>
        <td></td>
        <td></td>
        <td></td>
      <td>
      </td>
      <td></td>
      <td><button type="button" class="btn btn-primary btn-sm">update</button></td>
      
      
	  </tr>
      <tr>
	    <td></td>
	    <td></td>
	    <td></td>
        <td></td>
        <td></td>
        <td></td>
      <td>
      </td>
      <td></td>
      <td><button type="button" class="btn btn-primary btn-sm">update</button></td>
      
	  </tr>
      <tr>
	    <td></td>
	    <td></td>
	    <td></td>
        <td></td>
        <td></td>
        <td></td>
      <td>
      </td>
      <td></td>
      <td><button type="button" class="btn btn-primary btn-sm">update</button></td>
      
	  </tr>
	  
	  
	</table>

</div><button type="button" class="btn btn-primary btn-lg">DUE</button>
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