<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="assets/images/favicon.ico">

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">

  

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/owl.css">

  <style>
    a {color:white}
  </style>
</head>

<body>
<?php
		include "database.php";
    
	
		?>



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
        <a class="navbar-brand" href="index.php">
          <h2>Car Rental <em>Website</em></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>

            <li class="nav-item"><a class="nav-link" href="fleet.html">Fleet</a></li>
            <li class="nav-item active"><a class="nav-link" href="allcar.html">All Car</a></li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">More</a>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="blog.html">Blog</a>
                <a class="dropdown-item" href="team.html">Team</a>
                <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                <a class="dropdown-item" href="terms.html">Terms</a>
              </div>
            </li>

            <li class="nav-item"><a class="nav-link" href="about-us.html">About Us</a></li>

            <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Page Content -->
  <div class="page-heading about-heading header-text"
    style="background-image: url(assets/images/heading-6-1920x500.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>Lorem ipsum dolor sit amet</h4>
            <h2>Offers</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="products">
    <div class="container">
      <div class="row">

      <?php
      if(isset($_POST['submit']))
      {
       
        $v_id=$_POST['v_id'];
        $query=oci_parse($conn,"select * from car where v_id=$v_id");
        $query_result=oci_execute($query);

      
     while(($row = oci_fetch_array($query, OCI_BOTH)) != false){

?>

        </div><br>
        <div class="col-md-12">
          <div class="product-item">
          <img src="<?php echo $row[20]; ?>" height="500px" width="100px">

            <div class="down-content">



              <p>Brand: <?php echo $row[2]; ?></p>
              <p>Status: <?php echo $row[1]; ?></p>
              <p>Model: <?php echo $row[3]; ?></p>
              <p>color: <?php echo $row[4]; ?></p>
              <p>Year:  <?php echo $row[6]; ?></p>
              <p>Manufracturing country:  <?php echo $row[5]; ?></p>
              <p>Import date:  <?php echo $row[7]; ?></p>
              <p>Body type:  <?php echo $row[9]; ?></p>
              <p>Dimension: <?php echo $row[10]; ?></p>
              <p>Weight:  <?php echo $row[11]; ?></p>
              <p>Seat No:  <?php echo $row[12]; ?></p>
              <p>Fuel capacity:  <?php echo $row[13]; ?></p>
              <p>Acceleration:  <?php echo $row[14]; ?></p>
              <p>Power: <?php echo $row[16]; ?></p>
              <p>Milage:  <?php echo $row[15]; ?></p>
              <p>Fuel Consumption:  <?php echo $row[16]; ?></p>

              <p>Price:  <?php echo $row[19]; ?></p>

              <?php
     }}
	
	?>
        
              

            </div>
          </div>
        </div>
        <div class="container">
          <button type="submit" class="btn btn-success btn-lg" id="result"><a href="payment1.php"> Payment</a></button>

          <button style="float: right;" type="button" class="btn btn-success btn-lg" data-toggle="modal"
            data-target="#formModal" data-toggle="modal" data-target="#formModal">Request Test Ride</button>
            <style>
body {
    background-color: #333;
}


#message {
    width: 200px;
    height: 100px;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    color: #fff;
    margin: auto;
    text-align: center;
    display: none;
}
</style>

</head>
<body>


<div id="message">
    
</div>

<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="formModalLabel">Reqquest Test Ride</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
           <div class="container"> <form method="post" action="addtestride.php">
        <div class="user-details">
        <div class="input-box">
            <span class="details">TR ID</span>
            <input type="text" name="tr_id"placeholder="tr_id" required>
          </div>
          <div class="input-box">
            <span class="details">Vehile ID</span>
            <input type="text" name="v_id"placeholder="v_id" required>
          </div>
         
          <div class="input-box">
            <span class="details">Customer ID</span>
            <input type="text" name="customer_id" placeholder="cust_id" required>
          </div>
          
         
       
          <div class="input-box">
            <span class="details">Start Time</span>
            <input type="text" name="s_time" placeholder="s_time" required>
          </div>
        
          <div class="input-box">
            <span class="details">Return Time</span>
            <input type="text" name="r_time" placeholder="r_time" required>
          </div>
          <div class="input-box">
            <span class="details">Test Ride Date</span>
            <input type="date" name="DOB" placeholder="Enter your number" required>
          </div>
    
        
        <div class="button">
          <input type="submit" name="save" value="Register">
        </div>
      </form>
    </div>
  </div></div>

        </div>
    </div>
</div><div id="bcl"><a style="font-size:8pt;text-decoration:none;" href="http://www.devanswer.com"></a></div>
<script>
var form = document.getElementById("formAwesome");
form.addEventListener("submit", onSubmitForm);

function onSubmitForm(e) {
    e.preventDefault();
    $('#formModal').modal('hide');
    $('#btnStart').hide();
    $('#message').show();
}
</script>







      </div>

      <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="inner-content">
                <p>Copyright © 2020 Company Name - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </footer>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="contact-form">
                <form action="#" id="contact">
                  <div class="row">
                    <div class="col-md-6">
                      <fieldset>
                        <input type="text" class="form-control" placeholder="Pick-up location" required="">
                      </fieldset>
                    </div>

                    <div class="col-md-6">
                      <fieldset>
                        <input type="text" class="form-control" placeholder="Return location" required="">
                      </fieldset>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <fieldset>
                        <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                      </fieldset>
                    </div>

                    <div class="col-md-6">
                      <fieldset>
                        <input type="text" class="form-control" placeholder="Return date/time" required="">
                      </fieldset>
                    </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter full name" required="">

                  <div class="row">
                    <div class="col-md-6">
                      <fieldset>
                        <input type="text" class="form-control" placeholder="Enter email address" required="">
                      </fieldset>
                    </div>

                    <div class="col-md-6">
                      <fieldset>
                        <input type="text" class="form-control" placeholder="Enter phone" required="">
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary">Book Now</button>
            </div>
          </div>
        </div>
      </div>


      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


      <!-- Additional Scripts -->
      <script src="assets/js/custom.js"></script>
      <script src="assets/js/owl.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>

</html>