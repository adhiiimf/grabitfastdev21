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
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="styles/lineup.css">
    <link rel="stylesheet" href="styles/navleft.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/sticky-oa.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet"> 
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
                        <div class="row">
                            <div class="col-lg">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <img class="speakersfoto" src="/assets/lineup/gsfoto.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <img class="speakersfoto" src="/assets/lineup/gsfoto.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <img class="speakersfoto" src="/assets/lineup/gsfoto.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="tab-content-sub">
                        <div class="row">
                            <div class="col-lg-6">
                                <div>
                                    <h4>ABOUT GS</h4>
                                </div>
                                <div>
                                    <p class="aboutgstext">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="d-flex justify-content-center">
                                    <img class="gsfoto" src="/assets/lineup/gsfoto.png" alt="">
                                    <div>
                                        <ul class="sosmed-gs">
                                            <li class="sosmed-list">
                                                <img class="oags" src="assets/youtube-rounded.png" alt="">
                                            </li>
                                            <li class="sosmed-list">
                                                <img class="oags" src="assets/instagram-rounded.png" alt="">
                                            </li>
                                            <li class="sosmed-list">
                                                <img class="oags" src="assets/spotify.png" alt="">
                                            </li>
                                            <li class="sosmed-list">
                                                <img class="oags" src="assets/twitter.png" alt="">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h4 class="gsname">GS NAME</h4>
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