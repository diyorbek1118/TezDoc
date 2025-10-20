<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- Font Awesome 6 (brend ikonkalari uchun) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <title>DigiMedia - Creative SEO HTML5 Template</title>

<!-- ================= CSS Fayllar ================= -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/animated.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('css/owl.css') }}">
<link rel="stylesheet" href="{{ asset('css/templatemo-digimedia-v3.css') }}">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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



    .logo {
      display: flex;
      align-items: center;
      font-family: 'Poppins', sans-serif;
      font-weight: 700;
      font-size: 28px;
      color: #3ba4e3; /* asosiy rang */
      letter-spacing: 1px;
    }

    .logo i {
      margin-right: 8px;
      font-size: 30px;
      color: #3ba4e3;
      transition: transform 0.3s ease;
    }

    .logo span {
      color: #3ba4e3;
    }

    .logo .highlight {
      color: #6a5af9; /* “Doc” uchun boshqa rang */
    }

    .logo:hover i {
      transform: rotate(-10deg);
    }


       
        .profile-button {
            background: transparent;
            border: none;
            border-radius: 50%;
            padding: 0;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s;
            position: relative;
        }

        .profile-button:hover {
            background: #f5f5f5;
        }

        .profile-button-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 16px;
            font-weight: 600;
        }

        .profile-button-name {
            display: none;
        }

        .menu-container {
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            width: 100%;
            max-width: 400px;
            overflow: hidden;
            display: none;
            position: absolute;
            top: 60px;
            right: 20px;
        }

        .menu-container.active {
            display: block;
            animation: slideDown 0.2s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .header {
            padding: 24px 20px 20px;
            border-bottom: 1px solid #e5e5e5;
            position: relative;
        }

        .header-icons {
            position: absolute;
            top: 16px;
            right: 16px;
            display: flex;
            gap: 12px;
        }

        .icon-btn {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            border: none;
            background: #f5f5f5;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.2s;
        }

        .icon-btn:hover {
            background: #e5e5e5;
        }

        .profile-avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            margin-bottom: 12px;
        }

        .profile-name {
            font-size: 24px;
            font-weight: 600;
            color: #000;
            margin-bottom: 4px;
        }

        .profile-username {
            font-size: 16px;
            color: #666;
        }

        .menu-list {
            padding: 8px 0;
        }

        .menu-item {
            display: flex;
            align-items: center;
            padding: 14px 20px;
            cursor: pointer;
            transition: background 0.2s;
            text-decoration: none !important;
            color: #000 !important;
            border: none;
            width: 100%;
            background: transparent;
            font-family: inherit;
            font-size: inherit;
            line-height: normal;
        }

        .menu-item:hover {
            background: #f5f5f5;
            text-decoration: none !important;
        }

        .menu-item:focus {
            outline: none;
        }

        .menu-item:visited {
            color: #000 !important;
        }

        .menu-item:active {
            color: #000 !important;
        }

        .menu-icon {
            width: 24px;
            height: 24px;
            margin-right: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .menu-text {
            flex: 1;
            font-size: 16px;
            color: #000;
        }

        .menu-shortcut {
            font-size: 14px;
            color: #999;
            font-family: 'SF Mono', Monaco, 'Cascadia Code', monospace;
        }

        .menu-divider {
            height: 1px;
            background: #e5e5e5;
            margin: 8px 0;
        }

        .logout {
            color: #000;
        }

        svg {
            width: 20px;
            height: 20px;
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

   <script>
        const profileBtn = document.getElementById('profileBtn');
        const menuContainer = document.getElementById('menuContainer');

        profileBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            menuContainer.classList.toggle('active');
        });

        // Tashqariga bosilganda menyuni yopish
        document.addEventListener('click', function(e) {
            if (!menuContainer.contains(e.target) && e.target !== profileBtn) {
                menuContainer.classList.remove('active');
            }
        });

        // Menyu elementlariga click qilganda
        document.querySelectorAll('.menu-item').forEach(item => {
            item.addEventListener('click', function(e) {
                // Link bo'lgani uchun default behavior ishlaydi
                const text = this.querySelector('.menu-text').textContent;
                console.log('Navigating to:', text);
            });
        });
    </script>


</body>
</html>