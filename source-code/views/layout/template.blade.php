<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SITUGEDE</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="navcss.css">
  <link rel="icon" type="image/png" href="/Assets/LogoSituGede.png">

  
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    </style>
   
   {{-- include cdn file --}}

        {{-- jquery cdn --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


        {{-- 1. owl carousel min .css --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        {{-- 2. owl carousle theme min .css --}}
        <link rel="stylesheet" href="https://cdnjs.c loudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    
</head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary fixed-top">
      <div class="container">
          <a class="navbar-brand" href="/dashboard">
              <img src="/Assets/LogoSituGede.png" alt="logo" style="width: 60px; height: 60px;">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
              <li class="nav-item mx-2">
              <a class="nav-link {{($title === 'dashboard') ? 'text-info' : '' }}" aria-current="page" href="/dashboard">Dashboard</a>
              </li>
              <li class="nav-item mx-2">
              <a class="nav-link {{($title === 'pesan') ? 'text-info' : '' }}"  href="/pesan">Cek Pesanan</a>
              </li>
              <li class="nav-item mx-2">
              <a class="nav-link {{($title === 'konservasi') ? 'text-info' : '' }}" aria-current="page" href="/konservasi">Konservasi</a>
              </li>
              <li class="nav-item mx-2">
              <a class="nav-link {{($title === 'tiket') ? 'text-info' : '' }}" aria-current="page" href="/tiket">Tiket</a>
              </li>
          </ul>
          
          <nav class="navbar bg-transparent">
              @auth
              
              <li class="nav-item dropdown mx-1" type="none" >
                  <a class="nav-link dropdown-toggle mr-8" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa-regular fa-user mx-1"></i> {{auth()->user()->name}} 
                  </a>
                  <ul class="dropdown-menu" >
                      <li><a class="dropdown-item" href="/profile"><i class="fa fa-user-circle" aria-hidden="true"></i> Profile</a></li>
                      <li><hr class="dropdown-divider"></li>
                      
                      <li>
                      <form action="/logout" method="POST">
                          @csrf
                          <button type="submit" class="dropdown-item btn btn-outline-info me-1"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</button>
                      </form>
                      </li>
                  </ul>
              </li>
  
              @else
              
              <form class="container-fluid justify-content-end">
                  <a href="/login" class="btn btn-outline-info me-1">Login</a>
                  <a href="/regis" class="btn btn-outline-info me-1">Register</a>
              </form>
              @endauth
          </nav>
  
  
  
          </div>
  
    </div>
  </nav>

    <div>
        @yield('isi')
    </div>

    <footer>
        <div class="footerContainer">
          <div class="iconFooter">
            <img src="Assets/LogoSituGede.png" alt="logo" style="width: 120px; height: 130px">
            <p>SituGede</p>
          </div>
        </div>

        <div class="footerNav">
          <ul type="none">
            <li><a href="/dashboard">Beranda</a></li>
            <li><a href="/cekpesanan">Cek Pesanan</a></li>
            <li><a href="/konservasi">Konservasi</a></li>
            <li><a href="/tiket">Tiket</a></li>
          </ul>
        </div>

        <div class="footerBottom">
          <p>Copyright &copy;2023 <span class="situ">SituGede Bogor</span></p>
        </div>
    </footer>
   
    </body>
</html>