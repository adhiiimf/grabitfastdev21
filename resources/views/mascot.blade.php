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
    <link rel="stylesheet" href="styles/mascot.css">
    <link rel="stylesheet" href="styles/navleft.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/sticky-oa.css">
    @extends('template/font')
    @section('font')
    @endsection 
    <title>Grab It Fast 2021</title>
</head>
<body id="main-fonts">
<section id="background">
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
            <div class="">
                <div class="row d-flex align-items-center pb-5">
                    <div class="col-lg">
                        <div class="pb-5">
                            <img class="geulismascot img-fluid" src="assets/mascot/Geulis Mascot.png" alt="Geulis mascot">
                        </div>
                    </div>
                    <div class="col-lg-6 geulistext">
                        <div>
                            <img class="img-fluid geulishead" src="assets/mascot/Geulishead.png" alt="Geulis head">
                        </div>
                        <div class="box-geulis">
                            <div>
                                <span>
                                    Perkenalkan! Si Geulis adalah maskot kami, Geulis ini selain memiliki paras yang cantik dia juga punya banyak keahlian lhoo! Dia memiliki karakter ceria, cerdas dan memiliki rasa ingin tahu yang tinggi sesuai sama warna kesukaannya yaitu warna kuning nih, peeps! 
                                    <br><br>
                                    Nah, karena rasa ingin tahunya yang tinggi dia bisa dibilang multi tasking lhoo saking banyak nya hal yang dia suka pelajarin. Oiya! si Geulis ini punya hobi menggambar. Katanya, lewat gambar dia bisa mengekspresikan apapun.  Selama beraktivitas, si Geulis selalu ditemani dengan si Kasep dan si Ujang.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex flex-xl-row-reverse align-justify-center pb-5">
                    <div class="col-lg">
                        <div class="pb-5 text-center">
                            <img class="kasepmascot img-fluid" src="assets/mascot/Kasep Mascot.png" alt="kasep mascot">
                        </div>
                    </div>
                    <div class="col-lg-6 kaseptext">
                        <div>
                            <img class="img-fluid kasephead" src="assets/mascot/Kasephead.png" alt="kasep head">
                        </div>
                        <div class="box-kasep">
                            <div>
                                <span>
                                    Kenalin nih maskot kita selain si Geulis, dia juga punya teman namanya si Kasep!! Kasep itu  sangat kreatif dan memiliki ide-ide unik yang tentunya sangat mind blowing. 
                                    <br><br>
                                    Oiya! Kasep sangat suka warna oranye, karena melambangkan semangat, optimisme dan percaya diri. Wihh, seru ya temenan sama si Kasep!!!
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex align-justify-center">
                    <div class="col-lg">
                        <div class="pb-5 text-center">
                            <img class="ujangmascot img-fluid" src="assets/mascot/Ujang Mascot.png" alt="kasep mascot">
                        </div>
                    </div>
                    <div class="col-lg-6 ujangtext">
                        <div>
                            <img class="img-fluid ujanghead" src="assets/mascot/Ujanghead.png" alt="kasep head">
                        </div>
                        <div class="box-ujang">
                            <div>
                                <span>
                                    Nah, ini adalah temannya si Geulis dan si Kasep, yang bernama si Ujang. Ujang itu selalu ceria dan tidak pernah takut untuk mengekspresikan dirinya, dia menyukai semua warna loh!! Namun diantara semua warna yang paling dia sukai adalah warna merah. Sesuai dengan karakternya yang berani dalam mengekspresikan apapun yang dia rasakan yaaa peeps. 
                                    <br>
                                    Eiitss, jangan takut sama si Ujang ya peeps! walaupun dia hewan tapi dia mau berteman dengan siapa saja dan selalu ceria lhoo, jadi jangan takut yaa. Oiya! di acara Grab It Fast 2021 kalo kalian mau bawa hewan peliharaan kalian, boleh banget nih, nanti pasti bakal di temenin sama si Ujang!
                                </span>
                            </div>
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