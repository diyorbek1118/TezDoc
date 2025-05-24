<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'TezDoc')</title>
  @vite(['resources/css/style.css','resources/css/responsive.css', 'resources/js/main.js'])

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

   {{-- Navbar --}}
   @include('layout.app.navbar')

   {{-- Asosiy kontent joyi --}}
   <main>
       @yield('content')
   </main>

   {{-- Footer --}}
   @include('layout.app.footer')

</body>
</html>