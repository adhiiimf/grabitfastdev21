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
    <link rel="stylesheet" href="styles/praevent.css">
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
@extends('template/sticky')
@section('sticky')
@endsection

<!-- Navigasi top -->
@include('template/navbar-ex')
@section('navbar-ex')
@endsection

<!-- praevent -->
<section id="praeventsection">
<div class="container paddingt-7">
    <div class="row">
        @include('template/navleft')
        @section('navleft')
        @endsection
        <div class="col-lg">
            <div>
                <img class="praeventhead img-fluid" src="assets/pramainevent/Pra Event.png" alt="">
            </div>
            <div>
            <div class="text-center forchamphead">
                <img class="img-fluid" src="assets/pramainevent/ForchampHeader.png" alt="">
            </div>
            <div class="forchambox">
                <span class="box-text-praevent">
                    Forcy Championship (FORCHAMP) merupakan ajang kompetisi yang diselenggarakan oleh komunitas mahasiswa Bogor di Telkom University. Pra event forchamp ini bertujuan untuk meningkatkan kerja sama, keaktifan, kekompakan, serta menumbuhkan rasa solidaritas terhadap sesama komunitas dan organisasi yang ada. <br>
                    Forcy Championship melibatkan beberapa kompetisi yaitu, kompetisi futsal, musik, dan E-Sport. Dari ketiga kompetisi tersebut diharapkan dapat meningkatkan sportifitas dan menyatukan organisasi maupun komunitas yang berada di Telkom University.
                </span>
            </div>
            </div>
            <div class="text-end pt-5">
                <img class="maineventhead img-fluid" src="assets/pramainevent/Main Event.png" alt="">
            </div>
            <div class="roadshowpad">
            <div class="text-start roadshowhead">
                <img class="img-fluid" src="assets/pramainevent/Road Show.png" alt="">
            </div>
            <div class="roadshowbox">
                <span class="box-text-praevent">
                    Road Show merupakan kegiatan sosialisasi untuk mempromosikan Telkom University ke beberapa sekolah menengah atas yang bertujuan agar para siswa mendapatkan informasi yang lebih jelas mengenai Telkom University.
                </span>
            </div>
            </div>
            <div class="miniexpopad">
                <div class="text-end">
                    <img class="miniexpohead img-fluid" src="assets/pramainevent/Mini Expo.png" alt="">
                </div>
                <div class="miniexpobox">
                    <span class="box-text-praevent">
                        Mini Expo merupakan kegiatan untuk memperkenalkan, serta menunjukan hasil karya tiap-tiap jurusan di Telkom University kepada para peserta dengan tujuan agar peserta dapat lebih tertarik dan memiliki gambaran yang lebih jelas mengenai jurusan yang mereka minati di Telkom University.
                    </span>
                </div>
            </div>
            <div class="seminarpad">
                <div class="text-start">
                    <img class="seminarhead img-fluid" src="assets/pramainevent/Seminar.png" alt="">
                </div>
                <div class="seminarbox">
                    <span class="box-text-praevent">
                        Seminar merupakan kegiatan yang bertujuan untuk membahas suatu materi dan mencari solusi terhadap permasalahan dengan cara interaksi kepada para peserta. Dengan begitu, para peserta seminar mendapatkan informasi baru yang dapat dikembangkan menjadi sesuatu yang lebih luas kepada orang banyak.
                    </span>
                </div>
            </div>
            <div class="tryoutpad">
                <div class="text-center">
                    <img class="tryouthead img-fluid" src="assets/pramainevent/Tryout.png" alt="">
                </div>
                <div class="tryoutbox">
                    <span class="box-text-praevent">
                        Memberikan soal-soal kepada para peserta dalam bentuk try out secara online yang bertujuan agar membantu mereka dalam mempersiapkan ujian nasional (UN) dan seleksi masuk Telkom University.
                    </span>
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