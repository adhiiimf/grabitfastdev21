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
    <link rel="stylesheet" href="{{asset('styles/map.css')}}">
    <link rel="stylesheet" href="{{asset('styles/navleft.css')}}">
    <link rel="stylesheet" href="{{asset('styles/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('styles/sticky-oa.css')}}">
    @extends('template/font')
    @section('font')
    @endsection 
    <title>Grab It Fast 2021</title>
</head>
<body id="main-fonts">
<section id="background">
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
            <div class="text-center pb-4">
                <img class="lineuptitle img-fluid" src="assets/map/headline.png" alt="">
            </div>
            <div class="text-center">
                <img class="map img-fluid" src="assets/map/map.png" alt="">
            </div>
            <div class="text-center pt-xl-5">
                <span class="head-keterangan">Keterangan:</span>
            </div>
            <div class="d-flex justify-content-center">
            <div class="row">
                <div class="col-lg">
                    <div class="text-keterangan">
                        <span>FIK : Fakultas Industri Kreatif</span>
                    </div>
                    <div class="text-keterangan">
                        <span>FEB : Fakultas Ekonomi dan Bisnis</span>
                    </div>
                    <div class="text-keterangan">
                        <span>FKB : Fakultas Komunikasi Bisnis</span>
                    </div>
                    <div class="text-keterangan">
                        <span>FIF : Fakultas Teknik Informatika </span>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="text-keterangan">
                        <span>FIT : Fakultas Ilmu Terapan</span>
                    </div>
                    <div class="text-keterangan">
                        <span>FTE : Fakultas Teknik Elektro</span>
                    </div>
                    <div class="text-keterangan">
                        <span>FRI : Fakultas Rekayasa Industri</span>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</section>
</section>
</body>
</html>