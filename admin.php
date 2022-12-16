<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title></title>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/admin.css" type="text/css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
</head>
<body>
<?php
                  $conn = oci_connect('dbms_project', 'mahi202014030', '//localhost/XE');
                  // Check connection
                  if (!$conn) {
                      echo 'Failed to connect to oracle' . "<br>";
                  }
                  else {
                      echo 'Connected successfully!' ."<br>";
                  }
				  ?>

	
<div id="mySidenav" class="sidenav">
<p class="logo"><span>A</span>dmin</p>
		<a href="admin.php" class="icon-a"><i class="fa fa-dashboard icons"></i> All Car List</a>
		<a href="car_entry2.php"class="icon-a"><i class="fa fa-users icons"></i>   Car entry</a>
		<a href="test_ride.php"class="icon-a"><i class="fa fa-list icons"></i>   Test ride details</a>
		<a href="customer.php"class="icon-a"><i class="fa fa-user icons"></i>   Customer Manage</a>
		<a href="employee.php"class="icon-a"><i class="fa fa-user icons"></i>   Employee List</a>
		<a href="customer_payment.php"class="icon-a"><i class="fa fa-tasks icons"></i>   Payment details</a>
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

    <div class="container">
        <h1>Profile</h1>
        <br>
        <table border="2">
         
            <tr>
	    <th>VID</th>
	    
		<th>status
		</th>
		<th>Brand</th>
		<th>Model</th>
		
		<th>color</th>
		<th> Year</th>
		<th>Mnaufracturing_ country</th>
		
		
	
		
		
		<th>Import Date</th>
		<th>Engine CC</th>
		<th>Body type</th>
		<th>Dimension</th>
		<th>Weight</th>
		<th>Seat</th>
		<th>Fuel Capacity/th>
		
		<th>Acceleration</th>
		<th>Milage</th>
		<th>Power</th>
		<th>fuel_consumtion</th>
		<th></th>
		<th>Price</th>
		<th>Image</th>
		<th>Branch_id</th>
		<th>Action</th>


	  </tr>
	
            
           
            <?php
                 
				 if(isset($_POST['submit']))
				 {
					
                    $status = $_POST['status'];
    $brand = $_POST['brannd'];
	$Model = $_POST['model'];
    $Color = $_POST['color'];
   
    $manufacturing_country=$_POST['manufacturing_country'];
    $year=$_POST['year'];
    $ImportDate = date('d-m-y', strtotime($_POST['import_date'])); 
    $EngineCC = $_POST['engine_cc'];
    $BodyType = $_POST['body_type'];
    $Dimension = $_POST['dimension'];
    $Weight = $_POST['weight'];
    $seat = $_POST['seat'];
    $FuelCapacity = $_POST['fuel_capacity'];
    $TopSpeed = $_POST['top_speed'];
    $Acceleration = $_POST['acceleration'];
    $Power = $_POST['power'];
   $fuelconsumption=$_POST['fuel_consumtion'];
    $Milage = $_POST['milage'];
    $price = $_POST['price'];
	$branch_id = $_POST['branch'];
                    $img_dir=$_FILES['img_dir'];
                 
                    echo '<br>';
         
                    echo '<br>';
                    //print_r($img_dir);
                    echo '<br>';

                    $filename=$img_dir['name'];
                   $fileerror=$img_dir['error'];
                   $filetemp=$img_dir['tmp_name'];

                   $fileext=explode('.', $filename);
                   $filecheck=strtolower(end($fileext));
                   $fileextstored=array('png','jpg','jpeg');
                   if(in_array( $filecheck, $fileextstored))
                   {
                    $destinationfile='upload/'.$filename;
                    move_uploaded_file($filetemp,$destinationfile);

                    $query = oci_parse($conn, "INSERT INTO car(v_id,status,brannd,model,color,manufacturing_country,year,import_date,engine_cc,body_type,dimension,Weight,seat,fuel_capacity,top_speed,acceleration,power,fuel_consumtion ,milage,price,img_dir,branch_id) 
	values (car_id_SEQUENCE.nextval,'$status','$brand','$Model','$Color','$manufacturing_country','$year',to_date('$ImportDate','dd-mm-yyyy'),'$EngineCC','$BodyType','$Dimension','$Weight','$seat', '$FuelCapacity','$TopSpeed','$Acceleration','$Power','$fuelconsumption','$Milage','$price','$destinationfile','$branch_id')");
	
	$result = oci_execute($query);
         

					


                
   }
				 }
				 
                 ?>



<?php
            $displayquery=oci_parse($conn, "select * from car");
			$disresult = oci_execute($displayquery);

		   
			while(($row = oci_fetch_array($displayquery, OCI_BOTH)) != false){

		?>
		<tr>
<td><?php echo $row[0]; ?></td>
<td><?php echo $row[1]; ?></td>
<td><?php echo $row[2]; ?></td>
<td><?php echo $row[3]; ?></td>
<td><?php echo $row[4]; ?></td>

<td><?php if(isset($row[6]))
	{echo $row[6];} ?></td>
<td><?php echo $row[5]; ?></td>
<td><?php if(isset($row[7]))
	{echo $row[7];} ?></td>
<td><?php echo $row[8]; ?></td>
<td><?php echo $row[9]; ?></td>
<td><?php echo $row[10]; ?></td>
<td><?php echo $row[11]; ?></td>
<td><?php echo $row[12]; ?></td>
	<td><?php echo $row[13]; ?></td>
	<td><?php echo $row[14]; ?></td>
<td><?php echo $row[15]; ?></td>
<td><?php echo $row[16]; ?></td>
<td><?php echo $row[17]; ?></td>
<td><?php echo $row[18]; ?></td>
<td><?php if(isset($row[19]))
	{echo $row[19];} ?></td>
	<td> <img src="<?php echo $row[20]; ?>" height="100px" width="100px"></td>
	<td><?php if(isset($row[21]))
	{echo $row[21];} ?></td>

	<td><form action="deleteCar.php" method="post">

<input type="hidden" name="delete_id" value="<?php echo $row['V_ID']; ?>">

<button type="submit" name="delete_p_btn" class="btn btn-danger"> DELETE</button>  
<?php
			}
			
			?>
				 
            

        </table>
        

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
    </div>
	
    
</body>
</html>