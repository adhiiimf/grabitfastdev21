<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{asset('styles/landing.css')}}">
    <link rel="stylesheet" href="{{asset('styles/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('styles/sticky-oa.css')}}">
    @extends('template/font')
    @section('font')
    @endsection
    <title>Grab It Fast 2021</title>
</head>
<body id="main-fonts">

<!-- Sticky Official Account Sosial Media -->
@extends('template/sticky')
@section('sticky')
@endsection

<!-- Navigasi top -->
@include('template/navbar-land')
@section('navbar-land')
@endsection
<!-- Landing Page .gif -->
@include('template.landingview')
@section('landingview')
@endsection
<!-- Content from logo 'till Mascot -->
<section id="back-div-land2">

<!-- Logo Landing -->
<section class="mobile-hide">
<div class="pt-5 container">
<div class="d-flex justify-content-center">
<div class="row">
<div class="col-lg text-center paddingbotlog-land">
    <div>
    <a href="/aboutus"><img class="logo-landing-nav" src="assets/logolanding/LOGO About Us.png" alt=""></a>
    </div>
    <div>
        <span class="nav-land-text">ABOUT US</span>
    </div>
</div>
<div class="col-lg text-center paddingbotlog-land">
    <div>
    <a href="/lineup"><img class="logo-landing-nav" src="assets/logolanding/LOGO LINE UP.png" alt=""></a>
    </div>
    <div>
        <span class="nav-land-text">LINE UP</span>
    </div>
</div>
<div class="col-lg text-center paddingbotlog-land">
    <div>
    <a href="/map"><img class="logo-landing-nav" src="assets/logolanding/LOGO MAP.png" alt=""></a>
    </div>
    <div>
        <span class="nav-land-text">MAP</span>
    </div>
</div>
<div class="col-lg text-center paddingbotlog-land">
    <div>
    <a href="/mascot"><img class="logo-landing-nav" src="assets/logolanding/LOGO MASKOT .png" alt=""></a>
    </div>
    <div>
        <span class="nav-land-text">MASCOT</span>
    </div>
</div>
<div class="col-lg text-center paddingbotlog-land">
    <div>
    <a href="theme"><img class="logo-landing-nav" src="assets/logolanding/LOGO TEMA ACARA .png" alt=""></a>
    </div>
    <div>
        <span class="nav-land-text">THEME</span>
    </div>
</div>
</div>
</div>
</div><div class="rounded-navmain"></div>
</section>

<!-- Desc & Main Event -->
<section>
<div class="container paddingtop-6r">
    <div>
    <ul class="nav nav-pills mb-1" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="tab-landing active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">DESCRIPTION</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="tab-landing" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">PRA & MAIN EVENT</button>
        </li>
      </ul>
    </div>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="tab-content">
                Grab It Fast 2021 terdiri atas main event dan pra event. Main event terdiri atas rangkaian acara try out, seminar, expo, penampilan dari pengisi acara, dan puncaknya adalah penampilan dari <span id="dots"> ... </span>
                <a href="/deskripsi"><button  class="tab-landing readmore"><span>Read more</span></button></a>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="tab-content">
                <div>
                    <h4>Forcy Championship (FORCHAMP)</h4>
                    Forcy Championship (FORCHAMP) merupakan ajang kompetisi yang diselenggarakan oleh komunitas mahasiswa Bogor di Telkom University. Pra event forchamp ini<span id="dots"> ... </span>
                    <a href="/pramainevent"><button  class="tab-landing readmore"><span>Read more</span></button></a>
                </div>
                
        </div></div>
      </div>
</div>
</section>

<!-- TB Section -->
<section>
<div class="container paddingbot-9r">
    <div class="text-center paddingtop-6r padding-tab">
        <img class="tb-text-img img-fluid" src="assets/THROWBACK.png" alt="">
    </div>
    <div class="d-flex justify-content-center pt-4 ">
        <div class="row">
        <div class="col-lg text-center paddingbotlog-land">
            <div>
            <a href="/gif20"><img class="logo-tb-nav" src="assets/LOGO FOLDER.png" alt=""></a>
            </div>
            <div>
                <span class="nav-tb-text">GIF 2020</span>
            </div>
        </div>
        <div class="col-lg text-center paddingbotlog-land">
            <div>
            <a href="/gif19"><img class="logo-tb-nav" src="assets/LOGO FOLDER.png" alt=""></a>
            </div>
            <div>
                <span class="nav-tb-text">GIF 2019</span>
            </div>
        </div>
        <div class="col-lg text-center paddingbotlog-land">
            <div>
            <a href="/gif18"><img class="logo-tb-nav" src="assets/LOGO FOLDER.png" alt=""></a>
            </div>
            <div>
                <span class="nav-tb-text">GIF 2018</span>
            </div>
        </div>
        </div>
</div>
</section>

<!-- Mascot Logo -->
<section>
<div class="container">
    <div class="text-center">
        <img class="maskotbot img-fluid" src="assets/maskotbot.png" alt="">
    </div>
</div>
</section>
</section>

<!-- Sponsors and Medparts -->
@include('template/medspor')
@section('medspor')
@endsection

<!-- Footer -->
<section id="footer">
<div class="container">
<footer>
<div class="text-center">
    <span>Official Grab It Fast 2021</span>
</div>
</footer>
</div>
</section>

</body>
</html>