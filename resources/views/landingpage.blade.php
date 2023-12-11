<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$data[0]->title}}</title>
    <link rel="icon" type=" href=""/>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-grid.css') }}">    
    <script src="https://kit.fontawesome.com/bc3cf86588.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>   
</head>
<body>
  <!-- navbar-->
  <div class="atas" >
    <nav  class="navbar fixed-top" style="background-color:#748E63;" >
      <div class="container-fluid px-5">
        <a style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-weight: bolder; color: white;" class="navbar-brand" href="">
          <img class="logo1" src="{{ asset('assets/img/logo.png') }}"    srcset="">
        SISTEM INFORMASI AKADEMIK
        </a> 
        <form class="d-flex">
          <!-- <input style="width: 400px; ;" class="form-control me-2" type="search" placeholder="Search an Airport" aria-label="Search"> -->
          @if(auth()->check())
              <!-- Tampilkan tautan logout jika pengguna sudah masuk -->
              <a href="/dashboard" style="background-color: #f8af7b; font-weight: bolder;" class="btn btn-outline-success mx-3">DASHBOARD</a>
          @else
              <!-- Tampilkan tautan login jika pengguna belum masuk -->
              <a href="/login" style="background-color: #f8af7b; font-weight: bolder;" class="btn btn-outline-success mx-3">M A S U K</a>
          @endif

        
        </form>
      </div>
    </nav>
  </div> 
     <!-- header-->
     <header class="masthead">
        <div class="container"> 
            <div class="masthead-subheading">SELAMAT DATANG DI</div>
            <div class="masthead-heading text-uppercase">SMP Swasta AMALYATUL HUDA</div>
  
        </div>
    </header>

<!-- Sekilas Tentang Sekolah-->
<section class="Sekilas" >
    <div class="container">
        <h3 class="judulsekilas"> SEKILAS TENTANG <strong>SMP SWASTA AMALYATUL HUDA</strong></h3>
        {{$data[0]->tentang}}
    </div>
</section>

<!-- Visi-Misi Sekolah-->
<section class="visi-misi bg-light" id="">
    <div class="container">
            <div class="row">
              <div class="col">
                <h3 class="judulvisimisi" style="text-align: center;">TUJUAN</h3>
                
                {!! nl2br($data[0]->tujuan) !!}

              </div>
              <div class="col">
                <h3 class="judulvisimisi" style="text-align: center;"> VISI DAN MISI</h3>
                {!! nl2br($data[0]->visi_misi) !!}

              </div>
            </div>
    </div>
</section>

<!-- Galery Sekolah-->
<section class="Galery" id="">
            <h2 style="text-align: center;color: #748E63"><strong> Dokumentasi Kegiatan </strong></h2><br>
          <div class="container gallery-container">
          <div class="tz-gallery">
              <div class="row">
                  <div class="col-sm-6 col-md-4">
                      <a class="lightbox" href="">
                          <img src="{{ asset("assets/img/gmbr1.jpg") }}" alt="galery">
                      </a>
                  </div>
                  <div class="col-sm-6 col-md-4">
                      <a class="lightbox" href="">
                          <img src="{{ asset("assets/img/gmbr2.jpg") }}" alt="galery">
                      </a>
                  </div>
                  <div class="col-sm-12 col-md-4">
                      <a class="lightbox" href="">
                          <img src="{{ asset("assets/img/gmbr3.jpg") }}" alt="galery">
                      </a>
                  </div>
                  <div class="col-sm-6 col-md-4">
                      <a class="lightbox" href="">
                          <img src="{{ asset("assets/img/gmbr4.jpg") }}" alt="galery">
                      </a>
                  </div>
                  <div class="col-sm-6 col-md-4">
                      <a class="lightbox" href="">
                          <img src="{{ asset("assets/img/gmbr5.jpg") }}" alt="galery">
                      </a>
                  </div>
                  <div class="col-sm-6 col-md-4">
                      <a class="lightbox" href="">
                          <img src="{{ asset("assets/img/gmbr6.jpg") }}" alt="galery">
                      </a>
                  </div>
              </div>
            </div>
          </div>
          </div>
</section>
 

@include('partials.footer_maps')


<script src="https://kit.fontawesome.com/bc3cf86588.js" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
</body>
</html>