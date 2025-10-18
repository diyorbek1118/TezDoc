<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>DigiMedia - Creative SEO HTML5 Template</title>

<!-- ================= CSS Fayllar ================= -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/animated.css') }}">
<link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.css') }}">
<link rel="stylesheet" href="{{ asset('css/templatemo-digimedia-v3.css') }}">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">

<style>
  .flash-message {
    position: fixed;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    padding: 15px 25px;
    border-radius: 8px;
    box-shadow: 0px 5px 15px rgba(0,0,0,0.2);
    z-index: 1000;
    font-family: 'Montserrat', sans-serif;
    max-width: 90%;
    animation: fadeInOut 5s forwards;
}

.flash-success { 
    background-color: #4CAF50; /* yashil rang */
    color: #fff; 
}

.close-btn {
    margin-left: 15px;
    cursor: pointer;
    font-weight: bold;
}

/* xabar 5 soniyada avtomatik yo‘qoladi */
@keyframes fadeInOut {
    0% {opacity: 0;}
    10% {opacity: 1;}
    90% {opacity: 1;}
    100% {opacity: 0;}
}





.navbar-buttons {
    display: flex;
    gap: 10px; /* tugmalar orasidagi bo'shliq */
}

.btn {
    padding: 8px 20px;
    font-size: 14px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
}

/* Sign up tugmasi */
.btn-signup {
    color: #000;
    background-color: transparent;
    border: 1px solid #000;
}

.btn-signup:hover {
    background-color: #000;
    color: #fff;
}

/* Log in tugmasi */
.btn-login {
    color: #fff !important;
    background-color: #0b0a23; /* siz yuklagan rasmga mos rang */
    border: none;
}

.btn-login:hover {
    background-color: #1b1a47;
}


</style>

  </head>

<body>

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

 @include('partials.navbar');
  
    <!-- Success xabar -->
  @if(Session::has('success'))
      <div class="flash-message flash-success">
          {{ Session::get('success') }}
          <span class="close-btn" onclick="this.parentElement.style.display='none';">&times;</span>
      </div>
  @endif

  @show

  @yield('content')

  @include('partials.footer');
  
    <!-- ================= JS Fayllar ================= -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/animation.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.js') }}"></script>
    <script src="{{ asset('js/isotope.js') }}"></script>
    <script src="{{ asset('js/owl-carousel.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- jQuery -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

  


</body>
</html>