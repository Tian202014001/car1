<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="icon" href="assets/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>PHPJabbers.com | Free Car Rental Website Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
          <div class="container">
            <a class="navbar-brand" href="index.html">
              <h2>Car Showroom <em>Website</em></h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
              aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
    
               
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false">Services</a>
    
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="RepairPackages.php">Repair</a>
                    <a class="dropdown-item" href="MaintainancePackages.php">Maintenance</a>
                    <a class="dropdown-item" href="DiagnosisPackage.php">Diagnosis</a>
                  </div>
                </li>
    
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false">More</a>
    
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="blog.php">Blog</a>
                    <a class="dropdown-item" href="team.php">Team</a>
    
                    <a class="dropdown-item" href="terms.php">Terms</a>
                  </div>
                </li>
    
                <li class="nav-item"><a class="nav-link" href="about-us.html">About Us</a></li>
    
                <!-- <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li> -->
    
                <li class="nav-item"><a class="nav-link" href="admin_login.php">Login</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
<div class="container">
      <div class="banner header-text">
        <div class="owl-banner owl-carousel">
          <div class="banner-item-01">
            <div class="text-content">
              <h4>Find your car today!</h4>
              <h2>Lorem ipsum dolor sit amet</h2>
            </div>
          </div>
          <div class="banner-item-02">
            <div class="text-content">
              <h4>Fugiat Aspernatur</h4>
              <h2>Laboriosam reprehenderit ducimus</h2>
            </div>
          </div>
          <div class="banner-item-03">
            <div class="text-content">
              <h4>Saepe Omnis</h4>
              <h2>Quaerat suscipit unde minus dicta</h2>
            </div>
          </div>
        </div>
      </div><br><br><br>
    <!-- Page Content -->
    
    <div class="row row-cols-1 row-cols-md-4 g-4">
      <div class="col">
        <div class="card h-100">
          <img src="Service Images/noun-engine-3433962.png" class="card-img-top" alt="...">
          <div class="card-body">
           

            <h2 class="card-title" style="text-align: center;">Engine</h2>
          
           
            <p class="card-text">Package includes Repair and Replace of Engine Parts like Sparks, Valves etc</p>
            <p class="card-text">RS-500 Tk</p>
            <form action="repair1.php" method="post">
           <input type="text" placeholder="service Id" name="service_id"/>
            <button class="btn btn-primary btn " type="submit"  name="engine" value="select">Select</button>
</form> </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="Service Images/noun-transmission-4564938.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h2 class="card-title" style="text-align: center;">Transmission</h2>
            <p class="card-text">Package includes repair and replacement of Transmission parts</p>
            <p class="card-text">RS-500 Tk</p>
            <form action="repair2.php" method="post">
           <input type="text" placeholder="service Id" name="service_id2"/>
            <button class="btn btn-primary btn " type="submit"  name="Transmission" value="select">Select</button></form>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="Service Images/noun-brake-4314845.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h2 class="card-title" style="text-align: center;">Brakes and Wheels</h2>
            <p class="card-text">RS-500 Tk</p> <p class="card-text">Package includes Repaira and Replacement of Brakes and Wheeles, tires</p>
            <form action="repair3.php" method="post">
            <input type="text" name="service_id3" placeholder= "service_id" size="15" required /> 
               <button class="btn btn-primary btn " type="submit"  name="brake" >Select</button></form>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="Service Images/noun-suspension-2213412.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h2 class="card-title" style="text-align: center;">Suspensions and Alignment</h2>
            <p class="card-text">RS-500 Tk</p>  <p class="card-text">Package includes Repair and Replacement of Suspensions and correcting alignment</p>
            <form action="repair4.php" method="post">
            <input type="text" name="service_id4" placeholder= "service_id" size="15" required /> 
               <button class="btn btn-primary btn " type="submit"  name="Suspension" value="select">Select</button></form>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
          <img src="Service Images/noun-car-radiator-4793790.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h2 class="card-title" style="text-align: center;">Radiators and cooling System</h2>
            <p class="card-text">RS-500 Tk</p><p class="card-text">Package includes Repair and Replace of radiator and Air cooling Parts</p>
            <form action="repair5.php" method="post">
            <input type="text" name="service_id5" placeholder= "service_id" size="15" required /> 
              
            <button class="btn btn-primary btn " type="submit"  name="radiators" value="select">Select</button></form>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="Service Images/noun-car-body-3375772.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h2 class="card-title" style="text-align: center;">Fenders and Chassis</h2>
            <p class="card-text">Package includes Fixing Scratches, Cracks and Dents</p>
           
            <form action="repair6.php" method="post">
            <input type="text" name="service_id6" placeholder= "service_id" size="15" required /> 
            <button class="btn btn-primary btn-lg " type="submit"  name="fenders" value="select">Select</button></form>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="Service Images/noun-circuit-2833931.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h2 class="card-title" style="text-align: center;">Electrical Repair</h2>
           
            <p class="card-text">RS-500 Tk</p> <p class="card-text">Package includes Repair and Replace of Electrical and Electronic Units</p>
          
            <form action="repair7.php" method="post">
           <input type="text" placeholder="service Id" name="service_id7"/>
            <button class="btn btn-primary btn" type="submit"  name="Electrical" value="select">Select</button></form>
          </div>
        </div>
      </div>
     
    </div>
    

</div>
<br>
<hr>

<div class="container">
<form action="servicerequest1.php" method="post">
<h2 class="card-title" s>Request Repair</h2>
<hr>
<input type="text" placeholder="Service_id" name="service_id"/>
              <input type="text" placeholder="Vehicle Model" name="model"/>
              <input type="text" placeholder="Registration Number" name="reg_no"/>
              <input type="text" placeholder="Customer_id" name="customer_id"/>

              <button class="btn btn-primary btn-lg " type="submit"  name="request" value="select">Request</button></form>
            </form>
</div>  

    
    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2020 Company Name - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script> 
  </body>

</html>
