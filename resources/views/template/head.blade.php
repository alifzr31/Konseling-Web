<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    @if (Route::current()->getName() == 'index')
        <title>Enigma Putra Mandiri - Home</title>
    @endif

    @if (Route::current()->getName() == 'about')
        <title>Enigma Putra Mandiri - About</title>
    @endif

    @if (Route::current()->getName() == 'contact')
        <title>Enigma Putra Mandiri - Contact</title>
    @endif

    @if (Route::current()->getName() == 'konsultasi')
        <title>Enigma Putra Mandiri - Konsultasi</title>
    @endif

    @if (Route::current()->getName() == 'rekening')
        <title>Enigma Putra Mandiri - Pembayaran</title>
    @endif

    @if (Route::current()->getName() == 'editprofil')
        <title>Enigma Putra Mandiri - Profil Saya</title>
    @endif

    @if (Route::current()->getName() == 'mulaites')
        <title>Enigma Putra Mandiri - Test General Idea</title>
    @endif
    
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-white">
                    @if (!Auth::user())
                        <span>To start the consultaion, please <a href="{{ route('login') }}">Log In</a> first</span>
                    @endif
                    <!-- <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a> -->
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 topbar-right d-inline-flex align-items-center text-white py-2 px-5">
                    <span class="fs-5 fw-bold me-2"><i class="fa fa-phone-alt me-2"></i>Call Us:</span>
                    <span class="fs-5 fw-bold">+62 817-551-807</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5">
        <a href="index.html" class="navbar-brand ps-5 me-0">
            <h1 class="text-white m-0"><img src="img/logo.png" alt="Enigma" style="width: 20%;"> Enigma</h1>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                @if (Route::current()->getName() == 'mulaites')
                    @auth
                    @if (Auth::user()->role == 'user')
                        <div class="nav-item">
                            <a class="nav-link" style="cursor: default;" data-bs-toggle="dropdown"></a>
                        </div>
                    
                        <div class="nav-item">
                            <a class="nav-link @if (Route::current()->getName() == 'editprofil') active @endif" style="cursor: default; text-transform: capitalize;" data-bs-toggle="dropdown">{{ Auth::user()->nama }}</a>
                        </div>
                    @endif
                    @endauth

                    @auth
                    @if (Auth::user()->role == 'admin')
                        <div class="nav-item">
                            <a class="nav-link" style="cursor: default;" data-bs-toggle="dropdown"></a>
                        </div>
                        
                        <div class="nav-item">
                            <a class="nav-link @if (Route::current()->getName() == 'editprofil') active @endif" style="cursor: default; text-transform: capitalize;" data-bs-toggle="dropdown">{{ Auth::user()->nama }}</a>
                        </div>
                    @endif
                    @endauth
                @else
                    <a href="{{ route('index') }}" class="nav-item nav-link @if (Route::current()->getName() == 'index') active @endif">Home</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link @if (Route::current()->getName() == 'about') active @endif">About</a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link @if (Route::current()->getName() == 'contact') active @endif">Contact</a>

                    @auth
                        @if (Auth::user()->role == 'user')
                            <a href="{{ route('konsultasi') }}" class="nav-item nav-link @if (Route::current()->getName() == 'konsultasi' || Route::current()->getName() == 'rekening') active @endif">Konsultasi</a>
                            
                            <div class="nav-item">
                                <a class="nav-link" style="cursor: default;" data-bs-toggle="dropdown"></a>
                            </div>
                        
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle @if (Route::current()->getName() == 'editprofil') active @endif" style="cursor: default; text-transform: capitalize;" data-bs-toggle="dropdown">{{ Auth::user()->nama }}</a>
                                <div class="dropdown-menu bg-light m-0">
                                    <a href="{{ route('editprofil') }}" class="dropdown-item @if (Route::current()->getName() == 'editprofil') text-primary @endif">Profile</a>
                                    <a href="{{ route('logout') }}" class="dropdown-item">Log Out</a>
                                </div>
                            </div>
                        @endif
                    @endauth

                    @auth
                        @if (Auth::user()->role == 'admin')
                            <a href="{{ route('konsultasi') }}" class="nav-item nav-link @if (Route::current()->getName() == 'konsultasi' || Route::current()->getName() == 'rekening') active @endif">Konsultasi</a>
                            
                            <div class="nav-item">
                                <a class="nav-link" style="cursor: default;" data-bs-toggle="dropdown"></a>
                            </div>
                        
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle @if (Route::current()->getName() == 'editprofil') active @endif" style="cursor: default; text-transform: capitalize;" data-bs-toggle="dropdown">{{ Auth::user()->nama }}</a>
                                <div class="dropdown-menu bg-light m-0">
                                    <a href="{{ route('editprofil') }}" class="dropdown-item @if (Route::current()->getName() == 'editprofil') text-primary @endif">Profile</a>
                                    <a href="{{ route('logout') }}" class="dropdown-item">Log Out</a>
                                </div>
                            </div>
                        @endif
                    @endauth
                @endif
            </div>
            @if (!Auth::user())
                <a href="{{ route('login') }}" class="btn btn-primary px-3 d-none d-lg-block">Log In</a>
            @endif
        </div>
    </nav>
    <!-- Navbar End -->