@extends('layouts.user2')

@section('content')

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated zoomIn">Sedekah</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="/home2">Home</a></li>
                                    <li class="breadcrumb-item"><a class="text-white" href="/zakat2">zakat</a></li>
                                    <li class="breadcrumb-item"><a class="text-white" href="/infaq2">Infaq</a></li>
                                    <li class="breadcrumb-item"><a class="text-white" href="/donasi2">Donasi</a></li>
                                </ol>
                                <a href="/donasi2" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">Donasi</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Full Screen Search Start -->
        
        <!-- Full Screen Search End -->


        <!-- About Start -->
        <!-- <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h6 class="position-relative text-primary ps-4">Pengertian</h6>
                            <h2 class="mt-2">Pengertian sedekah</h2>
                        </div>
                        <p class="mb-4">Sedangkan menurut istilah, sedekah atau shadaqah adalah pemberian sesuatu kepada seseorang
                             yang membutuhkan, semata-mata hanya mengharap ridha Allah Swt. Dengan kata lain sedekah adalah suatu 
                             pemberian yang diberikan oleh seorang muslim kepada orang lain secara sukarela tanpa ditentukan jumlahnya.</p>
                        
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn " data-wow-delay="0.5s" src="aset/img/d.sedekah2.png" style="width: 450px; height:350px">
                    </div>
                </div>
                <br>
                <br>
                <hr class="wow zoomIn" data-wow-delay="0.5s">
                <br>
                <br>

                <div class="row g-5">
                <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn " data-wow-delay="0.5s" src="aset/img/d.sedekah2.png" style="width: 450px; height:350px">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h6 class="position-relative text-primary ps-4">Tujuan</h6>
                            <h2 class="mt-2">Tujuan Bersedekah</h2>
                        </div>
                        <p class="mb-4">Selain berpahala, sedekah juga dapat bermanfaat sebagai penolak bala dan menahan musibah dan
                             kejahatan bagi seseorang yang sering mengamalkannya. Dalam sebuah hadis, Rasulullah SAW bersabda:
                             “Bersegeralah untuk bersedekah, karena musibah dan bencana tidak bisa mendahului sedekah.”</p>
                        
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        About End -->

        @foreach($sedekah as $data)
            <h3>{{$data->judul}}</h3>
            <p>{{$data->artikel}}</p>
        @endforeach


        

 
@endsection