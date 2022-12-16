
<?php

include_once 'database.php';

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>PHPJabbers.com | Free Car Rental Website Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    
</head>


    <div class="container1">
        <div class="screen">
            <div class="screen__content">
                <form class="login"  action="" method="post">
                <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="username"placeholder="Enter your name" required>
          </div>
         
          <div class="input-box">
            <span class="details">password</span>
            <input type="password" name="password" placeholder="Enter your password" required>
          </div>
                    <button class="button login__submit" name="submit">
                        Log In Now
                        </button>
                        <button class="button login__submit" name="admin_submit">
                        Log In as admin
                        </button>
                    <div><p id="length"></p></div>
                    <button class="button login__submit">
                        <span class="button__text"><a class="nav-link" href="create_account.php">Create customer account</a></span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>
                    <button class="button login__submit">
                        <span class="button__text"><a class="nav-link" href="create_account_employee.php">Create employee account</a></span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>				
                </form>


                <?php
                if(isset($_POST['submit']))
                {
                  


                    $query = oci_parse($conn,"select customer_name,C_password from customer where customer_name='$_POST[username]' and C_password='$_POST[password]'");
	
	                $result = oci_execute($query);
                    $count=0;
  
                    while(($row = oci_fetch_array($query, OCI_BOTH)) != false){
                            $count++;
                    }

                   echo $count; 
                   if($count>0)
                   {
                        header('location:allcar.php');
                   }
                   else{
                  
                    echo "<script>alert('Incorrect username or password');</script>";
                   
                   }

                  }  ?>




<?php
                if(isset($_POST['admin_submit']))
                {
                  


                    $query = oci_parse($conn,"select admin_id,admin_password from admin where admin_id='admin' and admin_password='admin'");
	
	                $result = oci_execute($query);
                    $count=0;
  
                    while(($row = oci_fetch_array($query, OCI_BOTH)) != false){
                            $count++;
                    }

                   echo $count; 
                   if($count>0)
                   {
                        header('location:admin.php');
                   }
                   else{
                  
                    echo "<script>alert('Incorrect username or password');</script>";
                   
                   }

                  }  ?>






                <!-- <div class="social-login">
                    <h3>log in via</h3>
                    <div class="social-icons">
                        <a href="#" class="social-login__icon fab fa-instagram"></a>
                        <a href="#" class="social-login__icon fab fa-facebook"></a>
                        <a href="#" class="social-login__icon fab fa-twitter"></a>
                    </div>
                </div> -->
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>		
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>		
        </div>
    </div>
   
</body>
</html>