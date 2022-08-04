@extends('layouts.user2')

@section('content')

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated zoomIn">Zakat</h1>
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
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
             @foreach($zakat1 as $data)
                <h4>{{$data->judul}}</h4>
                <p>{{$data->artikel}}</p>
             @endforeach
            </div>
        </div>
        <!-- About End -->


        

 
@endsection