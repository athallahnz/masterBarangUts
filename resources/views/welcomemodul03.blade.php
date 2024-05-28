<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="card text-white">
        {{-- Contoh cara mereferensikan gambar di dalam file blade dengan menggunakan pendekatan Vite --}}
        <img class="card-img" src="{{ Vite::asset('resources/images/images.jpg') }}" alt="image">
        <div class="card-img-overlay position-fixed text-center ">
            <a class="btn btn-outline-danger btn-lg" href="{{ url('/routing') }}" role="button">Open Here</a>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
