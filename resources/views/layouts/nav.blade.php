@php
$currentRouteName = Route::currentRouteName();
@endphp
<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #680081;">
    <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src={{ Vite::asset('resources/images/kardus.png') }} alt="" width="35" height="28" class="d-inline-block align-text-top">
                    - Modul Master Barang
            </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-md-none text-white-50">
                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link @if($currentRouteName =='home') active @endif">Home</a></li>
                    {{-- <li class="nav-item col-2 col-md-auto"><a href="{{ route('employees.index') }}" class="nav-link
                        @if($currentRouteName == 'employees.index') active
                        @endif">Employee</a></li> --}}
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('barangs.index') }}" class="nav-link
                        @if($currentRouteName == 'barangs.index') active
                        @endif">Barang</a></li>
                </ul>
            <hr class="d-md-none text-white-50">
                <a href="{{ route('biodata') }}" class="btn btn-outline-light my-2 ms-md-auto"> <img src={{ Vite::asset('resources/images/Profile.jpg') }} class="rounded-circle m-1" alt="" width="24" height="24">
                My Bio
                </a>
        </div>
    </div>
</nav>
