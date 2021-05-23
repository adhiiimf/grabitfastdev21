<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('styles/about.css')}}">
    <link rel="stylesheet" href="{{asset('styles/navleft.css')}}">
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
@include('template/navbar-ex')
@section('navbar-ex')
@endsection

<!-- Landing Page .gif -->
<section id="aboutsection">
<div class="container paddingtb-4">
    <div class="row">
        @include('template/navleft')
        @section('navleft')
        @endsection
        <div class="col-lg">
            <div>
                <img class="abouthead img-fluid" src="assets/about/About Us head.png" alt="">
            </div>
            <div class="aboutbox">
                <span class="box-text-about">
                    “Grab It Fast” (GIF) adalah kegiatan yang diselenggarakan oleh komunitas daerah Bogor FORCY (Family Of Rain City) di Telkom University sebagai salah satu langkah mempromosikan Telkom University kepada masyarakat Bogor khususnya siswa-siswi SMA/MA/SMK dan sekitarnya dengan cara mengadakan try out, seminar, dan campus expo dari setiap fakultas yang ada di Telkom University melalui media yang proporsional. Kami juga mengundang pengisi acara ternama sebagai salah satu daya tarik bagi para pelajar.
                </span>
            </div>
        </div>
    </div>
</div>
</section>

<!-- Footer -->
<!-- <section id="footer">
<div class="container">
<footer>
<div class="text-center">
    <span>Official Grab It Fast 2021</span>
</div>
</footer>
</div>
</section> -->

</body>
</html>