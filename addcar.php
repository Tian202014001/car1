<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	
	//$vehicleid= $_POST['v_id'];
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
    $branch_id = $_POST['branch_id'];
    $img_dir = $_FILES['img_dir'];
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
	values (car_id_SEQUENCE.nextval,'$status','$brand','$Model','$Color','$manufacturing_country','$year',to_date('$ImportDate','dd-mm-yyyy'),'$EngineCC','$BodyType','$Dimension','$Weight','$seat', '$FuelCapacity','$TopSpeed','$Acceleration','$Power','$fuelconsumption','$Milage','$price','$destinationfile'.'$branch_id')");
	
	$result = oci_execute($query);
	if ($result) {
				echo "Data added Successfully !";
				exit();
	}
	else{
		echo "Error !";
				exit();
	}
}}
?>