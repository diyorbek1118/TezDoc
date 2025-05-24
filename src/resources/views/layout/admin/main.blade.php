<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    @vite(['resources/css/admin-panel.css']) 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        @include('layout.admin.sidebar')

        <main class="main-content">
            @include('layout.admin.main-header')

            @yield('content')
        </main>
    </div>
</body>
</html>
