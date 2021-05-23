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
    <link rel="stylesheet" href="styles/lineup.css">
    <link rel="stylesheet" href="styles/navleft.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/sticky-oa.css">
    @extends('template/font')
    @section('font')
    @endsection 
    <title>Grab It Fast 2021</title>
</head>
<body id="main-fonts">

<!-- Sticky Official Account Sosial Media -->
<section class="sticky-sosmed">
<div class="stick-sosmed text-center">
    <div class="pb-4">
        <a href="https://www.instagram.com/grabitfasttelkom/" target="_blank"><img class="sticklogo" src="assets/instagram.png" alt=""></a>
    </div>
    <div class="pb-4">
        <a href="https://www.youtube.com/channel/UCP_j4yhOh9ld2a0Et3UoLkw" target="_blank"><img class="sticklogo" src="assets/youtube.png" alt=""></a>
    </div>
    <div>
        <a href=""><img class="sticklogo" src="assets/line.png" alt=""></a>
    </div>
</div>
</section>

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
                                    <img class="gsfoto" src="/assets/lineup/gsfoto.png" alt="">
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
                                    <p class="aboutgstext">Fathia Izzati Saripudin; adalah seorang youtuber dan penyanyi Indonesia yang juga merupakan vokalis dari grup musik Reality Club.</p>
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
                                    <img class="gsfoto" src="/assets/lineup/gsfoto.png" alt="">
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
                                            <li class="sosmed-list">
                                                <img class="oags" src="assets/twitter.png" alt="">
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
                                    <p class="aboutgstext">Juicy Luicy merupakan sebuah grup musik asal Indonesia yang dibentuk pada tahun 2010. Grup musik ini beranggotakan 7 orang yaitu Julian Kaisar (vokal), Denis Ligia (gitar), Gelvi Gelvian (vokal latar), Zam Zam Y.M (saksofon), Gilang Kurniawan (trombon), Dwi Nugroho (Drum), dan Bina Bagja. Genre musik ini adalah pop.</p>
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