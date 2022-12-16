<!Doctype HTML>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="assets/css/customer_dashboard.css" type="text/css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>


	<body>
		<?php
		include "database.php";
	
		?>
<?php
 $query=oci_parse($conn,"select customer_id||' '||':' ||' '||'your requested test ride for '||v_id||' '||'was'||' '||action from test_ride where action='Approved'");
 $query_result=oci_execute($query);
 ?>


	<?php
 $query1=oci_parse($conn,"select customer_id||' '||':' ||' '||'your requested test ride for '||v_id||' '||'was'||' '||action from test_ride where action='Not approved'");
 $query_result1=oci_execute($query1);
 ?>


<?php
 $query2=oci_parse($conn,"select customer_id||' '||':' ||' '||'your requested test ride for '||v_id||' '||'is'||' '||'Pending'from test_ride where action is null");
 $query_result2=oci_execute($query2);
 ?>
	
	
		
		<div id="mySidenav" class="sidenav">
			<p class="logo"><span>Customer</span>-Dashboard</p>
    
            <a href="customer_servicereport.html" class="icon-a"><i class="fa fa-dashboard icons">  Service Details </i> </a>
            <a href="customer_test_ride.html"class="icon-a"><i class="fa fa-list icons"></i>   Test ride details</a>
            <a href="customer_paymentDetails.html"class="icon-a"><i class="fa fa-tasks icons"></i>   Payment details</a>
            <a href="#"class="icon-a"><i class="fa fa-list-alt icons"></i>   Logout</a>

	</div>
	<div id="main">

		<div class="head">
			<div class="col-div-6">
	<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >☰ Dashboard</span>
	<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >☰ Dashboard</span>
	</div>
		<br><br><br>
		
    <h2 style="color:aliceblue">Requested test ride status<hr></h2>
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



?>





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