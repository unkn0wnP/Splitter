<!DOCTYPE html>
<html>
    <head>
        
        <title>Splitter</title>

        <link rel="stylesheet" href="stylesheet.css" type="text/css">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    
    </head>
    <body>
        <header class="header">
            <nav class="navbar navbar-style">
                    <div class="container">
                        <div class="navbar-header">

                            <a href=""> <img src="logo.png" alt="logo" class="logo"></a>

                        </div>
                       
                        <ul class="nav">

                            <li class="nav-item"><a  class="nav-link" href="">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="">Features</a></li>
                            <li class="nav-item"><a class="nav-link" href="">Team</a></li>
                            <li class="nav-item"><a class="nav-link" href="">About Us</a></li>

                        </ul>
    
                </div>
            </nav>
            
        </header>

        <div class="row my-5 mx-5">
            <div class="col-sm-6">
                
                <div class="container-fluid pt-5">

                    <h1 class="display-3">Let us split the bills</h1><br>
                    <p style="font-family: Arial, Helvetica, sans-serif; margin-right: 20%;">Keep track of your shared expenses and balances with housemates, trips, groups, friends, and family. 
                    </p>

                    <div class="container-fluid pt-5">

                        <form action="login.php">
                          <button type="submit" value="Sign in" class="sign">Sign in</button>
                        </form>
                          &nbsp;

                        <form action="register.php">
                          <button type="submit" value="Sign up" class="signup">Sign up</button>
                        </form>

                        
                        

                    </div>

                </div>

            </div>

            <div class="col-sm-6 my-5">

                <div id="demo" class="carousel slide" data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    </div>
                    
                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="home.png" alt="home" class="d-block" style="width:100%;height: 350px;">
                        <div class="carousel-caption">
                          <p class="cap">Manage expenses with housemates</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="trip.jpg" alt="trip" class="d-block" style="width:100%;height: 350px;">
                        <div class="carousel-caption">
                          <p class="cap">Manage expenses in trips</p>
                        </div> 
                      </div>
                      <div class="carousel-item">
                        <img src="partner.jpg" alt="partner" class="d-block" style="width:100%;height: 350px;">
                        <div class="carousel-caption">
                          <p class="cap">Manage expenses with your partner</p>
                        </div>  
                      </div>
                    </div>
                    
                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                      <span class="carousel-control-next-icon"></span>
                    </button>
                  </div>
                  
        
            </div>

        </div>

        <footer class="text-center text-lg-start bg-light text-muted">
          <!-- Section: Social media -->
         
        
          <!-- Section: Links  -->
          <section class="">
            <div class="container text-center text-md-start mt-5">
              <!-- Grid row -->
              <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                  <!-- Content -->
                  <h6 class="text-uppercase fw-bold mb-4">
                    <i class="fas fa-gem me-3"></i>splitter.com
                  </h6>
                  <p>
                
                  </p>
                </div>
                <!-- Grid column -->
        
                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold mb-4">
                    Account
                  </h6>
                  <p>
                    <a href="#!" class="text-reset">Log in</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Sign up</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Reset password</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Settings</a>
                  </p>
                </div>
                <!-- Grid column -->
        
                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold mb-4">
                    More
                  </h6>
                  <p>
                    <a href="#!" class="text-reset">Contact us</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">FAQ</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Terms of Service</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Privacy Policy</a>
                  </p>
                </div>
                <!-- Grid column -->
        
                <!-- Grid column -->
                
              </div>
              <!-- Grid row -->
            </div>
          </section>
          <!-- Section: Links  -->
        
          <!-- Copyright -->
          <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright: Splitter.com
          </div>
          <!-- Copyright -->
        </footer>

    </body>
</html>