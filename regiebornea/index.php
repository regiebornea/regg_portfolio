<!doctype html>
<html lang="en">
  <head>
    <title>Regg Bourne | Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  </head>
  <style>
    @keyframes slideInFromLeft{
        0%{
            transform: translateX(-100%);
        }
        100%{
            transform: translateX(0);
        }
    }
    @keyframes slideInFromRight{
        0%{
            transform: translateX(0);
        }
        100%{
            transform: translateX(100%);
        }
    }
    .btn-learn{animation:1s slideInFromLeft;}
    .btn-hire{animation:1s slideInFromLeft;}
    .services:hover{color:green;}
    #vid:hover{
      transform: scale(1.1);
      border-color: orange;
    }
    .single-cat{border:1px solid #e1ebf7;border-radius:6px;padding:61px 22px;position:relative;}
    .single-cat::before{position:absolute;content:"";width:100%;height:0;background:#ff3d1c;transition:1s;bottom:0;left:0;z-index:-1;border-radius:6px}
    .single-cat:hover::before{height:100%;}
    .cat-cap h5 a{color:green;}
    .cat-cap p a{color:red;}
    .single-cat:hover h5 a{color:white;}
    .single-cat:hover p a{color:white;}
    .single-cat:hover h5{color:white;}
    .single-cat:hover p{color:white;}
    .single-cat:hover .fa{border:1px solid #e1ebf7;}
    .img-container{position:relative;text-align:center;}
    .btn-hire{position:absolute;bottom:10%;left:20%;}
    .btn-hire:hover{transform:scale(1.1);}
  </style>
  <body onload="myFunction()" style="margin:0;">
    <?php include 'preloader.php';?>
    <div style="display:none;" id="myDiv" class="container-fluid">
    <?php include 'header.php';?>
    <div class="img-container">
        <img width="1300" class="img-fluid animate-bottom" src="assets/photos/myphoto.jpg">
        <button class="btn btn-success btn-hire btn-responsive">Hire Me</button>
    </div>
        <hr><br>
        <div class="container">
            <!-- Section Title -->
            <div class="pt-3 pb-3">
                <h2 class="pt-3 pb-3 text-left">What Services you will get from me:</h2>
            </div><br>
            <div class="row">
                <div class="p-3 mb-5 rounded col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div>
                            <span class="fa fa-list shadow rounded-circle p-3"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">Point of Sales</a></h5>
                                <p>All-in-one web based sales and inventory management system with customizable functionalities. Complete reports and secured transactions. <a href="#">See more>>></a></p>
                        </div>
                    </div>
                </div>
                <div class="p-3 mb-5 rounded col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div>
                            <span class="fa fa-list shadow rounded-circle p-3"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">Thesis/Capstone Projects</a></h5>
                                <p>Full-stack web applications with API integrations with project documentation assistance including flowcharts, diagrams and other requirements. <a href="#">See more>>></a></p>
                        </div>
                    </div>
                </div>
                <div class="p-3 mb-5 rounded col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div>
                            <span class="fa fa-list shadow rounded-circle p-3"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">Dynamic Websites</a></h5>
                                <p>Any types of websites may it be a personal blog or for business purposes with e-commerce integration, we can always make it happen.  <a href="#">See more>>></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        <section class="">
            <div class="container">
            <hr>
                <div class="row mb-35">
                    <div class="col-lg-6">
                        <div>
                            <h2 clas="text-left">View some of my works here:</h2>
                            <br>
                        </div>
                    </div>
                    <div class="col-lg-6 align-items-end">
                        <div class="properties__button">
                            <!--Nav Button  -->                                            
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="false"> All</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-ecommerce" role="tab" aria-controls="nav-profile" aria-selected="false"> E-Commerce</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-pos" role="tab" aria-controls="nav-contact" aria-selected="false">POS</a>
                                    <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-websites" role="tab" aria-controls="nav-contact" aria-selected="false">Websites</a>
                                    <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-others" role="tab" aria-controls="nav-contact" aria-selected="false">Others</a>
                                </div>
                            </nav>
                            <!--End Nav Button  -->
                            <br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Nav Card -->
                        <div class="tab-content active" id="nav-tabContent">
                            <!-- card ONE -->
                            <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">           
                                <div class="services-caption">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <div class="shadow mb-30">
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <!--Content-->
        <div class="modal-content">
          <div class="modal-header">
            <label> E-Commerce Website of Malachi Blooms Flower Supply</label>
          </div>
          <div class="modal-body">
            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
               <video id="vid" autoplay style="width:100%;height:auto;" muted>
                  <source src="assets/videos/malachi_customer.mp4" type="video/mp4">
               </video>
            </div>
          </div>
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>
            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
            <!--Twitter-->
            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
            <!--Google +-->
            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
            <!--Linkedin-->
            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><video id="vid" autoplay style="width:100%;height:auto;" muted data-toggle="modal" data-target="#modal1">
  <source src="assets/videos/malachi_customer.mp4" type="video/mp4">
</video></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="shadow mb-30">
<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">
          <div class="modal-header">
            <label> E-Commerce Thesis Project (Capiral Online Services)</label>
          </div>
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<video id="vid" autoplay style="width:100%;height:auto;" muted>
  <source src="assets/videos/capiral_customer.mp4" type="video/mp4">
</video>
            </div>

          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>
            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
            <!--Twitter-->
            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
            <!--Google +-->
            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
            <!--Linkedin-->
            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><video id="vid" autoplay style="width:100%;height:auto;" muted data-toggle="modal" data-target="#modal2">
  <source src="assets/videos/capiral_customer.mp4" type="video/mp4">
</video></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="shadow mb-30">
<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">
          <div class="modal-header">
            <label> Point of Sales with Inventory Management System</label>
          </div>
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<video id="vid" autoplay style="width:100%;height:auto;" muted>
  <source src="assets/videos/motorshop_1.mp4" type="video/mp4">
</video>
            </div>

          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>
            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
            <!--Twitter-->
            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
            <!--Google +-->
            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
            <!--Linkedin-->
            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><video id="vid" autoplay style="width:100%;height:auto;" muted data-toggle="modal" data-target="#modal3">
  <source src="assets/videos/motorshop_1.mp4" type="video/mp4">
</video></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="shadow mb-30">
<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">
          <div class="modal-header">
            <label> Thesis Project (Waste Segregator)</label>
          </div>
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<video id="vid" autoplay style="width:100%;height:auto;" muted>
  <source src="assets/videos/waste_segregator_admin.mp4" type="video/mp4">
</video>
            </div>

          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>
            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
            <!--Twitter-->
            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
            <!--Google +-->
            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
            <!--Linkedin-->
            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><video id="vid" autoplay style="width:100%;height:auto;" muted data-toggle="modal" data-target="#modal4">
  <source src="assets/videos/waste_segregator_admin.mp4" type="video/mp4">
</video></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="shadow mb-30">
<div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">
          <div class="modal-header">
            <label> Point of Sales for Motorshop</label>
          </div>
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<video id="vid" autoplay style="width:100%;height:auto;" muted>
  <source src="assets/videos/motorshop_2.mp4" type="video/mp4">
</video>
            </div>

          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>
            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
            <!--Twitter-->
            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
            <!--Google +-->
            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
            <!--Linkedin-->
            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><video id="vid" autoplay style="width:100%;height:auto;" muted data-toggle="modal" data-target="#modal5">
  <source src="assets/videos/motorshop_2.mp4" type="video/mp4">
</video></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <div class="shadow mb-30">
<div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">
          <div class="modal-header">
            <label> Thesis Project (E-Deliverna Logistics Tracking)</label>
          </div>
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<video id="vid" autoplay style="width:100%;height:auto;" muted>
  <source src="assets/videos/ideliverna_admin.mp4" type="video/mp4">
</video>
            </div>

          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>
            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
            <!--Twitter-->
            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
            <!--Google +-->
            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
            <!--Linkedin-->
            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><video id="vid" autoplay style="width:100%;height:auto;" muted data-toggle="modal" data-target="#modal6">
  <source src="assets/videos/ideliverna_admin.mp4" type="video/mp4">
</video></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card TWO -->
<div class="tab-pane fade" id="nav-ecommerce" role="tabpanel" aria-labelledby="nav-ecommerce-tab">           
                                <div class="services-caption">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="shadow mb-30">
<div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">
          <div class="modal-header">
            <label> E-Commerce Website of Malachi Blooms Flower Supply</label>
          </div>
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<video id="vid" autoplay style="width:100%;height:auto;" muted>
  <source src="assets/videos/malachi_customer.mp4" type="video/mp4">
</video>
            </div>

          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>
            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
            <!--Twitter-->
            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
            <!--Google +-->
            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
            <!--Linkedin-->
            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><video id="vid" autoplay style="width:100%;height:auto;" muted data-toggle="modal" data-target="#modal7">
  <source src="assets/videos/malachi_customer.mp4" type="video/mp4">
</video></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="shadow mb-30">
<div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">
          <div class="modal-header">
            <label> Thesis Project (Capiral Online Services)</label>
          </div>
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<video id="vid" autoplay style="width:100%;height:auto;" muted>
  <source src="assets/videos/capiral_customer.mp4" type="video/mp4">
</video>
            </div>

          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>
            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
            <!--Twitter-->
            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
            <!--Google +-->
            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
            <!--Linkedin-->
            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><video id="vid" autoplay style="width:100%;height:auto;" muted data-toggle="modal" data-target="#modal8">
  <source src="assets/videos/capiral_customer.mp4" type="video/mp4">
</video></a>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                    </div>
                </div>
                <hr>
            </div>
<div class="tab-pane fade" id="nav-pos" role="tabpanel" aria-labelledby="nav-pos-tab">           
                                <div class="services-caption">
                                    <div class="row">
                                        <div class="col-lg-10 col-md-10 col-sm-10 ml-5">
                                            <div class="shadow mb-30">
<div class="modal fade" id="modal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">
          <div class="modal-header">
            <label> Point of Sales with Inventory Management System</label>
          </div>
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<video id="vid" autoplay style="width:100%;height:auto;" muted>
  <source src="assets/videos/motorshop_1.mp4" type="video/mp4">
</video>
            </div>

          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>
            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
            <!--Twitter-->
            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
            <!--Google +-->
            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
            <!--Linkedin-->
            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><video id="vid" autoplay style="width:100%;height:auto;" muted data-toggle="modal" data-target="#modal9">
  <source src="assets/videos/motorshop_1.mp4" type="video/mp4">
</video></a>
                                            </div>
                                        </div>
                    </div>
                </div>
                <hr>
</div>
<div class="tab-pane fade" id="nav-websites" role="tabpanel" aria-labelledby="nav-websites-tab">           
                                <div class="services-caption">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="shadow mb-30">
<div class="modal fade" id="modal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">
          <div class="modal-header">
            <label> E-Commerce Website of Malachi Blooms Flower Supply</label>
          </div>
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<video id="vid" autoplay style="width:100%;height:auto;" muted>
  <source src="assets/videos/malachi_customer.mp4" type="video/mp4">
</video>
            </div>

          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>
            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
            <!--Twitter-->
            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
            <!--Google +-->
            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
            <!--Linkedin-->
            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><video id="vid" autoplay style="width:100%;height:auto;" muted data-toggle="modal" data-target="#modal10">
  <source src="assets/videos/malachi_customer.mp4" type="video/mp4">
</video></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="shadow mb-30">
<div class="modal fade" id="modal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">
<div class="modal-header">
            <label> Thesis Project (Capiral Online Services)</label>
          </div>
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<video id="vid" autoplay style="width:100%;height:auto;" muted>
  <source src="assets/videos/capiral_customer.mp4" type="video/mp4">
</video>
            </div>

          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>
            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
            <!--Twitter-->
            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
            <!--Google +-->
            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
            <!--Linkedin-->
            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><video id="vid" autoplay style="width:100%;height:auto;" muted data-toggle="modal" data-target="#modal11">
  <source src="assets/videos/capiral_customer.mp4" type="video/mp4">
</video></a>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                    </div>
                </div>
                <hr>
</div>
<div class="tab-pane fade" id="nav-others" role="tabpanel" aria-labelledby="nav-others-tab">           
                                <div class="services-caption">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="shadow mb-30">
<div class="modal fade" id="modal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">
          <div class="modal-header">
            <label> Thesis Project (Logistics Tracking system)</label>
          </div>
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<video id="vid" autoplay style="width:100%;height:auto;" muted>
  <source src="assets/videos/ideliverna_admin.mp4" type="video/mp4">
</video>
            </div>

          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>
            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
            <!--Twitter-->
            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
            <!--Google +-->
            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
            <!--Linkedin-->
            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><video id="vid" autoplay style="width:100%;height:auto;" muted data-toggle="modal" data-target="#modal12">
  <source src="assets/videos/ideliverna_admin.mp4" type="video/mp4">
</video></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="shadow mb-30">
<div class="modal fade" id="modal13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">
<div class="modal-header">
            <label> Thesis Project (Trashbin Monitoring System)</label>
          </div>
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
<video id="vid" autoplay style="width:100%;height:auto;" muted>
  <source src="assets/videos/waste_segregator_admin.mp4" type="video/mp4">
</video>
            </div>

          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>
            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
            <!--Twitter-->
            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
            <!--Google +-->
            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
            <!--Linkedin-->
            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><video id="vid" autoplay style="width:100%;height:auto;" muted data-toggle="modal" data-target="#modal13">
  <source src="assets/videos/waste_segregator_admin.mp4" type="video/mp4">
</video></a>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                    </div>
                </div>
                <hr>
            </div>
        </section>
      <div class="container">
        <h2 class="text-left">Brands I worked with:</h2>
        <br>
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

    <!--Controls-->
    <div class="controls-top">
      <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
      <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
    </div>
    <!--/.Controls-->

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
      <li data-target="#multi-item-example" data-slide-to="1"></li>
      <li data-target="#multi-item-example" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">

        <div class="row">
          <div class="col-md-4" id="vid">
            <div class="card mb-2">
              <img class="card-img-top" src="assets/photos/alicia_water.jpg"
                   alt="Card image cap" height="200">
              <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 clearfix d-none d-md-block" id="vid">
            <div class="card mb-2">
              <img class="card-img-top" src="assets/photos/ms_chix.jpg"
                   alt="Card image cap" height="200">
              <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 clearfix d-none d-md-block" id="vid">
            <div class="card mb-2">
              <img class="card-img-top" src="assets/photos/mqbc.jpg"
                   alt="Card image cap" height="200">
              <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!--/.First slide-->

      <!--Second slide-->
      <div class="carousel-item">

        <div class="row">
          <div class="col-md-4" id="vid">
            <div class="card mb-2">
              <img class="card-img-top" src="assets/photos/retsel_moto.jpg"
                   alt="Card image cap" height="200">
              <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 clearfix d-none d-md-block" id="vid">
            <div class="card mb-2">
              <img class="card-img-top" src="assets/photos/alicia_water.jpg"
                   alt="Card image cap" height="200">
              <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 clearfix d-none d-md-block" id="vid">
            <div class="card mb-2">
              <img class="card-img-top" src="assets/photos/ms_chix.jpg"
                   alt="Card image cap" height="200">
              <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!--/.Second slide-->

      <!--Third slide-->
      <div class="carousel-item">

        <div class="row">
          <div class="col-md-4" id="vid">
            <div class="card mb-2">
              <img class="card-img-top" src="assets/photos/mqbc.jpg"
                   alt="Card image cap" height="200">
              <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 clearfix d-none d-md-block" id="vid">
            <div class="card mb-2">
              <img class="card-img-top" src="assets/photos/gtr_speedtech.jpg"
                   alt="Card image cap" height="200">
              <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 clearfix d-none d-md-block" id="vid">
            <div class="card mb-2">
              <img class="card-img-top" src="assets/photos/alicia_water.jpg"
                   alt="Card image cap" height="200">
              <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!--/.Third slide-->

    </div>
    <!--/.Slides-->
<hr>
  </div>
</div>
  <!--/.Carousel Wrapper-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-10">
                            <h2 class="text-left">Some Positive Feedbacks That Encourage Me:</h2>
                            <br>
                    </div>
                </div>
            </div>
                <div class="container">
                        <div class="row">
                            <!-- single-items -->
                            <div class="services shadow p-3 mb-5 rounded col-lg-4 col-md-6 col-sm-6">
                                                <img style="height:70px;width:70px;border-radius:50%;" src="assets/photos/mrs_gtr.jpg" alt="">
                                                <h2>Mr. & Mrs. Santos</h2>   
                                                <span>GTR Speedtech Motorparts</span>
                                        <p>If you're looking for quality yet affordable business solutions, discuss it with Regg and you'll be amazed with the outcome.</p>
                            </div>
                            <!-- single-items -->
                            <div class="services shadow p-3 mb-5 rounded col-lg-4 col-md-6 col-sm-6">
                                                <img style="height:70px;width:70px;border-radius:50%;" src="assets/photos/mrs_mqbc.jpg" alt="">
                                                <h2>Mr. & Mrs. Caminero</h2>   
                                                <span>MQBC General Merchandise</span>
                                        <p>Regg is awesome, he quickly understands what we want to achieve and finished our business software on time.</p>
                            </div>
                            <!-- single-items -->
                            <div class="services shadow p-3 mb-5 rounded col-lg-4 col-md-6 col-sm-6">
                                                <img style="height:70px;width:70px;border-radius:50%;" src="assets/photos/mark_tullao.jpg" alt="">
                                                <h2>Mark Carlo Tullao</h2>   
                                                <span>GTX Medical Supplies</span>
                                        <p>I couldn't ask for more... Regg customized my Sales and Inventory Management System perfectly fit for my business with 24/7 tech support.</p>
                                        <hr>
                            </div>
                        </div>
                    </div>   
        </section>
        <footer>
        <?php include 'footer.php';?>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>