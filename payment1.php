<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
      rel="stylesheet">
  
    <title>Car Showroom Management</title>
  
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/payment.css">
    <!-- <link rel="stylesheet" href="assets/css/owl.css"> -->
</head>
<body>
  <form method="post" action="addpayment.php">
    <button type="button" class="btn btn-primary launch" data-toggle="modal" data-target="#staticBackdrop"> <i class="fa fa-rocket"></i> Pay Now
    </button>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-body"> <div class="text-right"> <i class="fa fa-close close" data-dismiss="modal"></i> </div> <div class="tabs mt-3"> <ul class="nav nav-tabs" id="myTab" role="tablist"> <li class="nav-item" role="presentation"> <a class="nav-link active" id="visa-tab" data-toggle="tab" href="#visa" role="tab" aria-controls="visa" aria-selected="true"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwfVIoWDpswlEBqjrsTGzWs8Hrz8VBt7QPaQ&usqp=CAU" width="80"> </a> </li> <li class="nav-item" role="presentation"> <a class="nav-link" id="paypal-tab" data-toggle="tab" href="#paypal" role="tab" aria-controls="paypal" aria-selected="false"> <img src="https://thumbs.dreamstime.com/b/cash-money-dollar-banknote-stack-vector-simplistic-illustration-icon-logo-business-finance-theme-income-taxes-revenue-prize-157862705.jpg" width="80"> </a> </li> </ul> <div class="tab-content" id="myTabContent"> <div class="tab-pane fade show active" id="visa" role="tabpanel" aria-labelledby="visa-tab"> <div class="mt-4 mx-4"> <div class="text-center"> <h5>Credit card</h5> </div> <div class="form mt-3"> <div class="inputbox"> <input type="text" name="customer_name" class="form-control" required="required"> <span>Cardholder Name</span> </div> <div class="inputbox"> <input type="text" name="v_id" min="1" max="999" class="form-control" required="required"> <span>Vehicle Id</span> <i class="fa fa-eye"></i> </div> <div class="d-flex flex-row"> <div class="inputbox"> <input type="text" name="total_cost" min="1" max="999" class="form-control" required="required"> <span>Amount</span> </div> <div class="input-box">
      <span class="details">payment Date</span>
      <input type="date" name="payment_date" placeholder="Enter your number" required>
    </div>  </div> 
    <!-- <div class="px-5 pay"> <button class="btn btn-success btn-block">Confirm payment</button> </div>  -->
    <div class="button">
      <input type="submit" name="save" value="Confirm payment">
  </div> </div> </div> <div class="tab-pane fade" id="paypal" role="tabpanel" aria-labelledby="paypal-tab"> <div class="px-5 mt-5">
     <!-- <div class="inputbox"> <input type="text" name="name" class="form-control" required="required"> <span>Amount after dicount </span> </div> -->
    <!-- <div class="input-box">
      <span class="details">Test Ride Date</span>
      <input type="date" name="DOB" placeholder="Enter your number" required>
    </div> -->
    <!-- <div class="inputbox"> <input type="text" name="payment_date" min="1" max="999" class="form-control" required="required"> <span>payment_date</span> </div> -->

     <div class="pay px-5"> <button class="btn btn-primary btn-block">Pay</button> </div> </div> </div> </div> </div> </div> </div> </div>
    </div>
  </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
</html>