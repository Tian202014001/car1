<!Doctype HTML>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
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
        <!-- <!DOCTYPE html>
<html> -->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
  font-family: Calibri, Helvetica, sans-serif;
  background-color: rgb(14, 12, 52);
}
.container {
    padding: 5px;
  background-color: rgb(14, 12, 52);
}

input[type=text], input[type=password], textarea {
  width: 30%;
  padding: 5px;
  margin: 5px 0 5px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: orange;
  outline: none;
}
 div {
            padding: 10px 0;
         }
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.registerbtn:hover {
  opacity: 1;
}
</style>
</head>
    
        <form action="admin.php" method="post" enctype="multipart/form-data">
          
          

            <input type="text" name="status" placeholder= "status" size="15" required /> 
  <input type="text" name="brannd" placeholder= "brand" size="15" required /> 
<input type="text" name="model" placeholder= "Model" size="15" required /> 
<input type="text" name="color" placeholder= "Color" size="15" required /> 

<input type="text" name="manufacturing_country" placeholder= "manufracturing_country" size="15" required />
<input type="text" name="year" placeholder= "year" size="15" required />  
<input type="date" name="import_date" placeholder= "import_date" size="15" required />  


<input type="text" name="engine_cc" placeholder= "Engine CC" size="15" required /> 
<input type="text" name="body_type" placeholder= "Body Type" size="15" required /> 
<input type="text" name="dimension" placeholder= "Dimension" size="15" required /> 
<input type="text" name="weight" placeholder= "Weight" size="15" required /> 
<input type="text" name="seat" placeholder= "Seat" size="15" required /> 
<input type="text" name="fuel_capacity" placeholder= "Fuel Capacity" size="15" required /> 
<input type="text" name="top_speed" placeholder= "Top Speed" size="15" required /> 
<input type="text" name="acceleration" placeholder= "Acceleration" size="15" required /> 
<input type="text" name="power" placeholder= "Power" size="15" required /> 
<input type="text" name="fuel_consumtion" placeholder= "fuelconsumption" size="15" required /> 

<input type="text" name="milage" placeholder= "Milage" size="15" required />
<input type="text" name="price" placeholder= "Price" size="15" required /> 
<input type="file" name="img_dir" id="image"/><br>
<input type="text" name="branch" placeholder= "Enter Branch" size="15" required /> 



            

           
            <button type="submit" name="submit" class="btn btn-success btn-lg" value="Upload Image">ADD CAR<br>
</form>
</center>
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
<html>




