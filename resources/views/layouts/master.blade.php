<!-- layouts/master.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Master Barang</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        @yield('header')
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        @yield('footer')
    </footer>
</body>
</html>
