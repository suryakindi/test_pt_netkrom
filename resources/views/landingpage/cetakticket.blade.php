<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Live Music Konser</title>

    <!-- Bootstrap core CSS -->
    <link href="/landingpage_css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/landingpage_css/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/landingpage_css/assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="/landingpage_css/assets/css/owl.css">
    <link rel="stylesheet" href="/landingpage_css/assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

  </head>
  <style type="text/css">
    * {
    -webkit-print-color-adjust: exact !important;   /* Chrome, Safari 6 – 15.3, Edge */
    color-adjust: exact !important;                 /* Firefox 48 – 96 */
    print-color-adjust: exact !important;           /* Firefox 97+, Safari 15.4+ */
    }
  </style>

<body>
    <script>
        window.print();
    </script>
    @if(session()->has('sukses-ticket'))
    <script>
        alert('Berhasil Mendaftar, Silahkan Gunakan Fitur Pencarian Untuk Mencetak');
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
  
  <!-- ***** Header Area End ***** -->

  <div class="container">
    
      
        <div class="page-content">

          <!-- ***** Banner Start ***** -->
          <div class="main-banner">
            <div class="row">
              <div class="col-lg-7">
                <div class="header-text">
                  <h6>Ticket Check in Konser {{$slug}}</h6>
                  <h4><em>Nama : </em> {{$ticket->nama}}</h4>
                  <h4><em>Ticket ID : </em> {{$ticket->ticket_id}}</h4>
                  <small style="color: red"><i>* Silahkan Tunjukkan Karcis Ini Ke Petugas</i></small>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->

          

          
         
      
    
  </div>
  
  
  


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
