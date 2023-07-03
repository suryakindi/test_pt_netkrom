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

<body>
    @if(session()->has('sukses-ticket'))
    <script>
        alert('Berhasil Mendaftar, Silahkan Gunakan Fitur Pencarian Untuk Mencetak');
    </script>
    @endif
    @if(session()->has('ada-ticket'))
    <script>
        alert('Data Anda Sudah Terdaftar!');
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
                    <a href="/" class="logo">
                        <h4>Konser Live Music Gratis</h4>
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
                  <h6>Silahkn Isi Biodata Anda</h6>
                  <h4><em>Untuk Dapatkan Tiket</em> {{$slug}}</h4>
                  <div class="main-button">
                    <a href="#ticketing">Daftar Tiket</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->

          

          
          <div class="gaming-library" id="ticketing">
            <h5>Daftar Tiket {{$slug}}</h5><br>
                 
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama" style="color: white">Nama Lengkap</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama Lengkap" name="nama">
                    @error('nama')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div><br>
                <div class="form-group">
                    <label for="nama" style="color: white">No KTP </label>
                    <input type="text" class="form-control @error('noktp') is-invalid @enderror" id="nama" placeholder="No KTP" name="noktp">
                    @error('noktp')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div><br>
                <div class="form-group">
                    <label for="nama" style="color: white">Alamat Lengkap</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="nama" placeholder="Alamat Lengkap" name="alamat">
                    @error('alamat')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div><br>
                <button type="submit" class="btn btn-primary">Generate Your Ticket ID</button>
            </form>
            <hr style="color: white"><hr style="color: white">
            <div class="form-group">
                <form action="" method="POST">
                @csrf
                <input type="text" class="form-control" id="nama" placeholder="Cari Nama Anda" name="search" style="width: 20%"><br>
                <button type="submit" class="btn btn-success">Cari Ticket Anda</button>
                </form> 
            </div><br>
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">No KTP</th>
                    <th scope="col">Alamat Lengkap</th>
                    <th scope="col">Ticket ID</th>
                    <th scope="col">Status</th>
                    <th scope="col">Print</th>
                  </tr>
                </thead>
                <tbody>
                    @isset($ticket)
                    <?php 
                    $no=1;
                    ?>
                    @foreach ($ticket as $item)
                    <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->noktp}}</td>
                        <td>{{$item->alamat}}</td>
                        <td>{{$item->ticket_id}}</td>
                        @if($item->checkin == 0)
                        <td><button class="btn btn-danger" disabled>Belum Checkin</button></td>
                        @else
                        <td><button class="btn btn-success" disabled>Sudah Checkin</button></td>
                        @endif

                        @if($item->checkin == 0)
                        <td>
                        <a href="/tiket/{{$slug}}/cetak/{{$item->id}}"><button class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                            <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                            <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
                          </svg></button></a>
                        </td>
                        @else
                        <td>
                            <button class="btn btn-info" disabled><i class="fa fa-check" aria-hidden="true"></i></button>                            </button>
                            </td>
                        @endif
                            
                      </tr>          
                    @endforeach
                    @endisset               
                </tbody>
              </table>
          </div>
        
        </div>
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
