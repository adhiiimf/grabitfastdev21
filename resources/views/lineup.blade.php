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
    <link rel="stylesheet" href="{{asset('styles/lineup.css')}}">
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
            <div class="text-center pb-4">
                <img class="lineuptitle img-fluid" src="assets/lineup/title.png" alt="">
            </div>
            <div class="pt-3">
                <ul class="nav nav-pills mb-1" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="tab-landing active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Speakers</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="tab-landing" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Guest Stars</button>
                    </li>
                  </ul>
                </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="tab-content-sub">
                        <div class="row d-flex flex-xl-row-reverse">
                            <div class="col-lg">
                                <div class="d-flex justify-content-center">
                                    <img class="gsfoto" src="/assets/lineup/fathiaizzati.png" alt="fathiaizzati">
                                    <div>
                                        <ul class="sosmed-gs">
                                            <li class="sosmed-list">
                                                <a href="https://www.youtube.com/user/kittendust" target="_blank"><img class="oags" src="assets/youtube-rounded.png" alt="Fathia Izzati Youtube"></a>
                                            </li>
                                            <li class="sosmed-list">
                                                <a href="https://www.instagram.com/kittendust" target="_blank"><img class="oags" src="assets/instagram-rounded.png" alt="Fathia Izzati Instagram"></a>
                                            </li>
                                            <li class="sosmed-list">
                                                <a href="https://twitter.com/ketendangs" target="_blank"><img class="oags" src="assets/twitter.png" alt="Fathia Izzati Twitter"></a>
                                            </li>
                                        </ul>
                                    </div>
                                   
                                </div>
                                <div class="text-center">
                                    <h4 class="gsname">FATHIA IZZATI</h4>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mobile-hide">
                                    <h4>ABOUT FATHIA IZZATI</h4>
                                </div>
                                <div>
                                    <p class="aboutgstext">Fathia Izzati atau yang akrab disapa dengan Ciaa, merupakan seorang content creator dan vokalis dari Reality Club. Ia memulai menjadi seorang content creator sejak tahun 2011, sampai saat ini total sudah ada 77 video yang di unggah di akun youtube pribadinya. Ia juga memiliki karier yang baik dalam industri musik, bersama dengan Reality Club ia telah merilis dua buah album, dengan It Is The Answer? sebagai salah satu hits mereka yang mengantarkan mereka menjadi nominiasi di dua penghargaan AMI 2018. Fathia Izzati juga merupakan lulusan Fakultas Hukum Universitas Indonesia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="tab-content-sub">
                        <div class="row d-flex flex-xl-row-reverse">
                            <div class="col-lg">
                                <div class="d-flex justify-content-center">
                                    <img class="gsfoto" src="/assets/lineup/ardhito.png" alt="juicyluicy">
                                    <div>
                                        <ul class="sosmed-gs">
                                            <li class="sosmed-list">
                                                <a href="https://www.youtube.com/channel/UC8ND2XCj7tvw-A7Kq1r416A" target="_blank"><img class="oags" src="assets/youtube-rounded.png" alt="Ardhito Pramono Youtube"></a>
                                            </li>
                                            <li class="sosmed-list">
                                                <a href="https://www.instagram.com/ardhitopramono/" target="_blank"><img class="oags" src="assets/instagram-rounded.png" alt="Ardhito Pramono Instagram"></a>
                                            </li>
                                            <li class="sosmed-list">
                                                <a href="https://open.spotify.com/artist/3TkSKriI4EZmTxSFyzs0fd" target="_blank"><img class="oags" src="assets/spotify.png" alt="Ardhito Pramono Spotify"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h4 class="gsname">ARDHITO PRAMONO</h4>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mobile-hide">
                                    <h4>ABOUT ARDHITO PRAMONO</h4>
                                </div>
                                <div>
                                    <p class="aboutgstext">Ardhito Rifqi Pramono atau yang akrab disapa Ardhito merupakan seorang penyani, penulis lagu, dan seorang aktor. Memulai karirnya pada tahun 2013 melalui youtube, sampai akhirnya merilis lagu pertama yang ia tulis sendiri berjudul "I Placed My Heart", salah satu lagunya yang populer berjudul "Bitterlove" telah dilihat 23 juta kali di youtube, dan yang terbaru ia baru saja merilis mini album yang diberi judul "Semar & Pasukan Monyet". Tak hanya berkarya di indsustri musik saja, ia juga berperan sebagai Kale dalam film NKCTHI dan Story of Kale.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex flex-xl-row-reverse pt-5">
                            <div class="col-lg">
                                <div class="d-flex justify-content-center">
                                    <img class="gsfoto" src="/assets/lineup/juicyluicy.png" alt="juicyluicy">
                                    <div>
                                        <ul class="sosmed-gs">
                                            <li class="sosmed-list">
                                                <a href="https://www.youtube.com/c/JuicyLuicy/featured" target="_blank"><img class="oags" src="assets/youtube-rounded.png" alt="Juicy Luicy Youtube"></a>
                                            </li>
                                            <li class="sosmed-list">
                                                <a href="https://www.instagram.com/juicyluicyband/" target="_blank"><img class="oags" src="assets/instagram-rounded.png" alt="Juicy Luicy Instagram"></a>
                                            </li>
                                            <li class="sosmed-list">
                                                <a href="https://open.spotify.com/artist/3tMTXQyRrPmMyHv5SoC0TV" target="_blank"><img class="oags" src="assets/spotify.png" alt="Juicy Luicy Spotify"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h4 class="gsname">JUICY LUICY</h4>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="mobile-hide">
                                    <h4>ABOUT JUICY LUICY</h4>
                                </div>
                                <div>
                                    <p class="aboutgstext">Grup musik yang beranggotakan Julian Kaisar (vokal), Denis Ligia (gitar), Zam Zam (saksofon), Dwi Nugroho (drum), dan Bina Bagja (bas) memulai debutnya pada tahun 2010. Juicy Luicy membawakan musik bernuansakan pop yang sederhana dan mudah diterima. Tahun 2020 Juicy Luicy merilis album pertama mereka berjudul "Sentimental" yang berisikan 11 lagu, dengan Lantas sebagai salah satu hits nya. Di tahun yang sama Juicy Luicy berhasil masuk salah satu nominasi Billboard Indonesia Musics Awards.</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
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