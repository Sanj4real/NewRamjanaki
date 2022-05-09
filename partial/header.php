<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>New Ram Janaki</title>
        <!-- Favicon Link -->

        <!--build:css css/theme.min.css -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/line-awesome.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.1/css/font-awesome.css" />
        
        <!-- Fancy box CSS -->
        <link rel="stylesheet" href="css/jquery.fancybox.min.css" />
        
        <!-- slick-slider -->
        <link rel="stylesheet" href="https://googledrive.com/host/0B1RR6fhjI2QROGt0MTFoVkhMdUk/fonts.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css">

        <!-- carousel -->
        <link rel="stylesheet" href="css/owl.carousel.min.css" />
        <link rel="stylesheet" href="css/owl.theme.default.min.css" />

        <!-- Bootstrap Dropdown Hover CSS -->
        <link href="css/animate.min.css" rel="stylesheet" />
        <link href="css/bootstrap-dropdownhover.min.css" rel="stylesheet" />

        <!-- Bootstrap Dropdown Hover CSS -->
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/responsive.css" />
        <!-- endbuild -->
    </head>
    <body>
        <header class="site-header header-top" id="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-lg navbar-dark">
                            <a class="navbar-brand" href="index.php">
                                <img src="img/logo/site-logo.png" alt="site-logo-loading" />
                            </a>
                            <div id="nav-icon" class="navbar-toggler" type="button" data-trigger="#main_nav">
                              <span></span>
                              <span></span>
                              <span></span>
                            </div>

                            <!-- </button> -->
                            <div class="navbar-collapse" id="main_nav">
                                <div class="offcanvas-header mt-3">
                                    <button class="btn btn-outline-danger btn-close float-right">&times Close</button>
                                    <h5 class="py-2 text-white">
                                        <a class="navbar-brand" href="index.php">
                                            <img src="img/logo/site-logo.png" alt="site-logo-loading" />
                                        </a>
                                    </h5>
                                </div>
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active"><a class="nav-link" href="index.php">Home </a></li>
                                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" onclick="location.href='Product.php'">LivFast</a>
                                        <ul class="dropdown-menu fade-up">
                                            <li><a class="dropdown-item" href="product.php">Inverter</a></li>
                                            <li><a class="dropdown-item" href="product.php">Battery</a></li>
                                            <li><a class="dropdown-item" href="product.php">Stabilizer</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" onclick="location.href='Product.php'">Home Appliance</a>
                                        <ul class="dropdown-menu fade-up">
                                            <li><a class="dropdown-item" href="product.php">Cooler</a></li>
                                            <li><a class="dropdown-item" href="product.php">Fridge</a></li>
                                            <li><a class="dropdown-item" href="product.php">Tv/LED</a></li>
                                            <li><a class="dropdown-item" href="product.php">Water Purifier</a></li>
                                            <li><a class="dropdown-item" href="product.php">Washing Machine</a></li>
                                            <li><a class="dropdown-item" href="product.php">AC</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="blog.php">Blogs</a></li>
                                    <li class="nav-item"><a class="nav-link" href="contact.php"> Contact Us </a></li>
                                    
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    </body>
    <!-- modal -->
    <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header border-bottom-2">
            <span class="modal-logo">
                <img src="img/logo/site-logo.png" alt="">
            </span>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form>
            <div class="modal-body">
                <div class="form-group">
                  <label for="Name">Enter Your Name</label>
                  <input type="text" class="form-control" id="text" a placeholder="Enter Your Name">
                </div>
              <div class="form-group">
                <label for="email1">Email address</label>
                <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="number">Phone Number</label>
                <input type="number" class="form-control" id="number" placeholder="Enter Your Phone Number">
              </div>
              <div class="form-group">
                <label for="text">Message</label>
                <textarea class="form-control" id="textarea" name="message" rows="3" placeholder="Enter Message"></textarea>
              </div>
            </div>
            <div class="modal-footer border-top-0 d-flex ">
              <button type="submit" class="btn btn-success">Submit</button>
              <button type="cancel" class="btn btn-danger">Cancel</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--  -->
