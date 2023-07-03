<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Login Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="/landingpage_css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/landingpage_css/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/landingpage_css/assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="/landingpage_css/assets/css/owl.css">
    <link rel="stylesheet" href="/landingpage_css/assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

  </head>

<body>
    @if(session()->has('gagal-login'))
    <script>
        alert('Username / Password Salah');
    </script>
    @endif
    
    

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <h4>Login Panel </h4>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search End ***** -->
                   
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="/" class="active">Home</a></li>
                      
                        <li><a href="/contact">Contact <img src="/landingpage_css/assets/images/profile-header.jpg" alt=""></a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Banner Start ***** -->
          <div class="main-banner">
            <div class="row">
              <div class="col-lg-7">
                <div class="header-text">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="username" style="color: white">Username</label>
                          <input type="text" class="form-control" id="username" placeholder="username" name="username">
                        </div><br>
                        <div class="form-group">
                            <label for="username" style="color: white">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="password" name="password"><br>
                        </div>
                      
                        <button type="submit" class="btn btn-primary">Login Panel</button>
                      </form>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->

          

          
          
      </div>
    </div>
  </div>
  
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © {{date('Y')}} <a href="#">Asikin Agent</a> Company. All rights reserved. 
          
          
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="/landingpage_css/vendor/jquery/jquery.min.js"></script>
  <script src="/landingpage_css/vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="/landingpage_css/assets/js/isotope.min.js"></script>
  <script src="/landingpage_css/assets/js/owl-carousel.js"></script>
  <script src="/landingpage_css/assets/js/tabs.js"></script>
  <script src="/landingpage_css/assets/js/popup.js"></script>
  <script src="/landingpage_css/assets/js/custom.js"></script>


  </body>

</html>
