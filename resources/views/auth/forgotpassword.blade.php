<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-grid.css') }}">   
    <script src="https://kit.fontawesome.com/bc3cf86588.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>    
</head>
<body>
    
    @include('partials.navbar')

   <!-- login -->
  <body style="background-color: #666666;">	
    <div class="limiter">
      <div class="container-login100">
        <div class="wrap-login100">
          <form class="login100-form validate-form">
            <span class="login100-form-title p-b-43" style="font-weight: bolder; color: #ff852d;">
                RESET PASSWORD
            </span>  <br>         
            
            
            <div class="form-group py-3">
                <input type="email" class="form-control form-control-user"
                    id="exampleInputEmail" aria-describedby="emailHelp"
                    placeholder="Masukkan Alamat Email..." style="height: 50px;">
            </div>    
            <div class="mb-3 ">
                <button class="login100-form-btn " style="background-color: #f8af7b; font-size: larger; height: 40px;">
                    Reset Password
                  </button>
                </div>
            <div class="mb-3 ">
              <button class="login100-form-btn" style="background-color: #f8af7b; font-size: larger; height: 40px;">
                Login
              </button>
            </div>
          </form>
          <div class="login100-more" style="background-image:url({{ asset('assets/img/login2.png') }});">
          </div>
        </div>
      </div>
    </div>

    @include('partials.footer_maps')

<script src="https://kit.fontawesome.com/bc3cf86588.js" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
</body>
</html>