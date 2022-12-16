<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/search.css" type="text/css"/>
    <!-- ******** -->
   
  </head>

  <body>
  <?php
include_once 'database.php';
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
    <!-- <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Car Rental <em>Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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
                <li class="nav-item active"><a class="nav-link" href="allcar.html">All car</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="blog.html">Blog</a>
                      <a class="dropdown-item" href="team.html">Team</a>
 
                      <a class="dropdown-item" href="terms.html">Terms</a>
                    </div>
                </li>

                <li class="nav-item"><a class="nav-link" href="about-us.html">About Us</a></li>
                
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header> -->
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

            <li class="nav-item"><a class="nav-link" href="fleet.php">Fleet</a></li>
            <li class="nav-item"><a class="nav-link" href="allcar.php">All car</a></li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">More</a>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="blog.php">Blog</a>
                <a class="dropdown-item" href="team.php">Team</a>

                <a class="dropdown-item" href="terms.php">Terms</a>
              </div>
            </li>

            <li class="nav-item"><a class="nav-link" href="about-us.php">About Us</a></li>

            <!-- <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li> -->

            <li class="nav-item"><a class="nav-link" href="admin_login.php">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              
              <h2>All Car Listing</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
         
          <!-- ***************************************** -->
          <!-- <div class="col-md-4">
            <br>
            <div class="container">
            <h3>Search Car</h3>
            </div>
            
            <hr>
            
            <form onsubmit="event.preventDefault();" role="search">
              <label for="search">Search for stuff</label>
              <input id="search" type="search" placeholder="brand" autofocus required />
              
            </form>
     
            <br>
          
              <form onsubmit="event.preventDefault();" role="search">
                <label for="search">Search for stuff</label>
                <input id="search" type="search" placeholder="model" autofocus required />
                
              </form>
              <br>
              <form onsubmit="event.preventDefault();" role="search">
                <label for="search">Search for stuff</label>
                <input id="search" type="search" placeholder="price" autofocus required />
                
              </form>
              <br>
              <form onsubmit="event.preventDefault();" role="search">
                <label for="search">Search for stuff</label>
                <input id="search" type="search" placeholder="Engine CC" autofocus required />
                
              </form>
              <br>
              <form onsubmit="event.preventDefault();" role="search">
                <label for="search">Search for stuff</label>
                <input id="search" type="search" placeholder="Seat NO" autofocus required />
                
              </form><br>
              <form onsubmit="event.preventDefault();" role="search">
                <label for="search">Search for stuff</label>
                <input id="search" type="search" placeholder="Milage" autofocus required />
                
              </form><br>
              <form onsubmit="event.preventDefault();" role="search">
                <label for="search">Search for stuff</label>
                <input id="search" type="search" placeholder="Fuel Capacity" autofocus required />
                
              </form><br>
              <form onsubmit="event.preventDefault();" role="search">
                <label for="search">Search for stuff</label>
                <input id="search" type="search" placeholder="Color" autofocus required />
                
              </form><br>
              

                
           
              <button type="submit" class="btn btn-danger btn-lg" id="result">Show Results</button> 
             
            </div><br> -->




            

<div class="container" >
 
                    
                  <form  id="header-search-people" class="form-area" novalidate="novalidate" autocomplete="off"action="" method="get">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="styled-input wide multi">
                                <div class="first-name" id="input-first-name">
                                    <input type="text" id="fn" autocomplete="off" data-placeholder-focus="false" placeholder="Brand " name="brannd"required  />
                                    <label>First Name</label>
                                    <svg class="icon--check" width="21px" height="17px" viewBox="0 0 21 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                                            <g id="UI-Elements-Forms" transform="translate(-255.000000, -746.000000)" fill-rule="nonzero" stroke="#81B44C" stroke-width="3">
                                                <polyline id="Path-2" points="257 754.064225 263.505943 760.733489 273.634603 748"></polyline>
                                            </g>
                                        </g>
                                    </svg>
                                    <svg class="icon--error" width="15px" height="15px" viewBox="0 0 15 15" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                                            <g id="UI-Elements-Forms" transform="translate(-550.000000, -747.000000)" fill-rule="nonzero" stroke="#D0021B" stroke-width="3">
                                                <g id="Group" transform="translate(552.000000, 749.000000)">
                                                    <path d="M0,11.1298982 L11.1298982,-5.68434189e-14" id="Path-2-Copy"></path>
                                                    <path d="M0,11.1298982 L11.1298982,-5.68434189e-14" id="Path-2-Copy-2" transform="translate(5.564949, 5.564949) scale(-1, 1) translate(-5.564949, -5.564949) "></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="last-name" id="input-last-name">
                                    <input type="text" name="model" id="ln" autocomplete="off" placeholder="Model" data-placeholder-focus="false"  required />
                                    <label>Last Name</label>
                                    <svg class="icon--check" width="21px" height="17px" viewBox="0 0 21 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                                            <g id="UI-Elements-Forms" transform="translate(-255.000000, -746.000000)" fill-rule="nonzero" stroke="#81B44C" stroke-width="3">
                                                <polyline id="Path-2" points="257 754.064225 263.505943 760.733489 273.634603 748"></polyline>
                                            </g>
                                        </g>
                                    </svg>
                                    <svg class="icon--error" width="15px" height="15px" viewBox="0 0 15 15" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                                            <g id="UI-Elements-Forms" transform="translate(-550.000000, -747.000000)" fill-rule="nonzero" stroke="#D0021B" stroke-width="3">
                                                <g id="Group" transform="translate(552.000000, 749.000000)">
                                                    <path d="M0,11.1298982 L11.1298982,-5.68434189e-14" id="Path-2-Copy"></path>
                                                    <path d="M0,11.1298982 L11.1298982,-5.68434189e-14" id="Path-2-Copy-2" transform="translate(5.564949, 5.564949) scale(-1, 1) translate(-5.564949, -5.564949) "></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="city" id="input-city">
                                    <input type="text" name="engine_cc" id="city" autocomplete="off" placeholder="EngineCC"data-placeholder-focus="false"  />
                                    <label>City</label>
                                    <svg class="icon--check" width="21px" height="17px" viewBox="0 0 21 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                                            <g id="UI-Elements-Forms" transform="translate(-255.000000, -746.000000)" fill-rule="nonzero" stroke="#81B44C" stroke-width="3">
                                                <polyline id="Path-2" points="257 754.064225 263.505943 760.733489 273.634603 748"></polyline>
                                            </g>
                                        </g>
                                    </svg>
                                    <svg class="icon--error" width="15px" height="15px" viewBox="0 0 15 15" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                                            <g id="UI-Elements-Forms" transform="translate(-550.000000, -747.000000)" fill-rule="nonzero" stroke="#D0021B" stroke-width="3">
                                                <g id="Group" transform="translate(552.000000, 749.000000)">
                                                    <path d="M0,11.1298982 L11.1298982,-5.68434189e-14" id="Path-2-Copy"></path>
                                                    <path d="M0,11.1298982 L11.1298982,-5.68434189e-14" id="Path-2-Copy-2" transform="translate(5.564949, 5.564949) scale(-1, 1) translate(-5.564949, -5.564949) "></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="city" id="input-city">
                                  <input type="text" name="seat" id="city" placeholder="Seat"autocomplete="off" placeholder="EngineCC"data-placeholder-focus="false" />
                                  <label>City</label>
                                  <svg class="icon--check" width="21px" height="17px" viewBox="0 0 21 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                                          <g id="UI-Elements-Forms" transform="translate(-255.000000, -746.000000)" fill-rule="nonzero" stroke="#81B44C" stroke-width="3">
                                              <polyline id="Path-2" points="257 754.064225 263.505943 760.733489 273.634603 748"></polyline>
                                          </g>
                                      </g>
                                  </svg>
                                  <svg class="icon--error" width="15px" height="15px" viewBox="0 0 15 15" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                                          <g id="UI-Elements-Forms" transform="translate(-550.000000, -747.000000)" fill-rule="nonzero" stroke="#D0021B" stroke-width="3">
                                              <g id="Group" transform="translate(552.000000, 749.000000)">
                                                  <path d="M0,11.1298982 L11.1298982,-5.68434189e-14" id="Path-2-Copy"></path>
                                                  <path d="M0,11.1298982 L11.1298982,-5.68434189e-14" id="Path-2-Copy-2" transform="translate(5.564949, 5.564949) scale(-1, 1) translate(-5.564949, -5.564949) "></path>
                                              </g>
                                          </g>
                                      </g>
                                  </svg>
                              </div>
                              <div class="city" id="input-city">
                                  <input type="text" name="color" id="city" autocomplete="off" placeholder="color"data-placeholder-focus="false" />
                                  <label>City</label>
                                  <svg class="icon--check" width="21px" height="17px" viewBox="0 0 21 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                                          <g id="UI-Elements-Forms" transform="translate(-255.000000, -746.000000)" fill-rule="nonzero" stroke="#81B44C" stroke-width="3">
                                              <polyline id="Path-2" points="257 754.064225 263.505943 760.733489 273.634603 748"></polyline>
                                          </g>
                                      </g>
                                  </svg>
                                  <svg class="icon--error" width="15px" height="15px" viewBox="0 0 15 15" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                                          <g id="UI-Elements-Forms" transform="translate(-550.000000, -747.000000)" fill-rule="nonzero" stroke="#D0021B" stroke-width="3">
                                              <g id="Group" transform="translate(552.000000, 749.000000)">
                                                  <path d="M0,11.1298982 L11.1298982,-5.68434189e-14" id="Path-2-Copy"></path>
                                                  <path d="M0,11.1298982 L11.1298982,-5.68434189e-14" id="Path-2-Copy-2" transform="translate(5.564949, 5.564949) scale(-1, 1) translate(-5.564949, -5.564949) "></path>
                                              </g>
                                          </g>
                                      </g>
                                  </svg>
                              </div>
                              <div class="last-name" id="input-last-name">
                                    <input type="text"  id="ln" autocomplete="off" placeholder="Min Price" name="start_price" value="<?php if(isset($_GET['start_price'])){echo $_GET['start_price']; }else{echo "Min price";} ?>" data-placeholder-focus="false" required />
                                    <label>Last Name</label>
                                    <svg class="icon--check" width="21px" height="17px" viewBox="0 0 21 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                                            <g id="UI-Elements-Forms" transform="translate(-255.000000, -746.000000)" fill-rule="nonzero" stroke="#81B44C" stroke-width="3">
                                                <polyline id="Path-2" points="257 754.064225 263.505943 760.733489 273.634603 748"></polyline>
                                            </g>
                                        </g>
                                    </svg>
                                    <svg class="icon--error" width="15px" height="15px" viewBox="0 0 15 15" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                                            <g id="UI-Elements-Forms" transform="translate(-550.000000, -747.000000)" fill-rule="nonzero" stroke="#D0021B" stroke-width="3">
                                                <g id="Group" transform="translate(552.000000, 749.000000)">
                                                    <path d="M0,11.1298982 L11.1298982,-5.68434189e-14" id="Path-2-Copy"></path>
                                                    <path d="M0,11.1298982 L11.1298982,-5.68434189e-14" id="Path-2-Copy-2" transform="translate(5.564949, 5.564949) scale(-1, 1) translate(-5.564949, -5.564949) "></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="city" id="input-city">
                                    <input type="text" id="city" autocomplete="off" placeholder="Max Price" name="end_price" value="<?php if(isset($_GET['end_price'])){echo $_GET['end_price']; }else{echo "Max Price";} ?>"data-placeholder-focus="false" />
                                    <label>City</label>
                                    <svg class="icon--check" width="21px" height="17px" viewBox="0 0 21 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                                            <g id="UI-Elements-Forms" transform="translate(-255.000000, -746.000000)" fill-rule="nonzero" stroke="#81B44C" stroke-width="3">
                                                <polyline id="Path-2" points="257 754.064225 263.505943 760.733489 273.634603 748"></polyline>
                                            </g>
                                        </g>
                                    </svg>
                                    <svg class="icon--error" width="15px" height="15px" viewBox="0 0 15 15" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                                            <g id="UI-Elements-Forms" transform="translate(-550.000000, -747.000000)" fill-rule="nonzero" stroke="#D0021B" stroke-width="3">
                                                <g id="Group" transform="translate(552.000000, 749.000000)">
                                                    <path d="M0,11.1298982 L11.1298982,-5.68434189e-14" id="Path-2-Copy"></path>
                                                    <path d="M0,11.1298982 L11.1298982,-5.68434189e-14" id="Path-2-Copy-2" transform="translate(5.564949, 5.564949) scale(-1, 1) translate(-5.564949, -5.564949) "></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                               
             

                    </div>
         
                   
                           
                        </div>
                        <div class="col-md-2 no-pad-left-10">
                            <button type="submit" class="primary-btn serach-btn" id="submit_btn" name="save">SEARCH</button>
                        </div>
                    </div>
                  </form>
 
                </div>
 
</div>
<br><br><br><br><br><br><br><br>

     <!-- *********************************************** -->
     <div class="card-body">
      <div class="row">
      <?php 
      
      if(isset($_GET['brannd'])&& isset($_GET['start_price']) && isset($_GET['end_price']))
        {
          $brand=$_GET['brannd'];
          $startprice = $_GET['start_price'];
          $endprice = $_GET['end_price'];
          $query=oci_parse($conn,"select * from car where brannd='$brand'  and price BETWEEN $startprice AND $endprice ");
           
        }

      elseif(isset($_GET['brannd']) && isset($_GET['model']) && isset($_GET['engine_cc']) && isset($_GET['seat']) && isset($_GET['color']) && isset($_GET['start_price']) && isset($_GET['end_price']))
      {
          $brand=$_GET['brannd'];
          $model=$_GET['model'];
          $engine_cc=$_GET['engine_cc'];
          $seat=$_GET['seat'];
          $color=$_GET['color'];
          $startprice = $_GET['start_price'];
          $endprice = $_GET['end_price'];

          $query=oci_parse($conn,"select * from car where brannd='$brand' and model='$model' and engine_cc='$engine_cc' and seat='$seat' and color='$color' and price BETWEEN $startprice AND $endprice ");
      }
 
          else
      {
        $query=oci_parse($conn,"select * from car");
      }
               
                $query_result=oci_execute($query);
                while(($row = oci_fetch_array($query, OCI_BOTH)) != false)
                {
                  ?>
                  <div class="col-md-4">
                    <div class="border p-2">
                    <img src="<?php echo $row[20]; ?>" height="300px" width="330px">
                    <h4><small>car ID </small><?php if(isset($row[0]))
			                          {echo $row[0];} ?></h4>
                         
                        <h4><small>Brand: </small><?php if(isset($row[2]))
			                          {echo $row[2];} ?></h4>
                                 <h4><small>Price:</small> <?php if(isset($row[19]))
		              	{echo $row[19];} ?></h4>
                    <form action="cardetail.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="v_id" placeholder="Enter ID" size="15" >
                 <button type="submit" name="submit" class="btn btn-success btn-lg" value="view details" >view Details</button></form>
                    </div>
                </div>
                <?php

                }
              
                
  
               
                  
        
  
  
?>
 
  
       
       
  
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  </body>

</html>
