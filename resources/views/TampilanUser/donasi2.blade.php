@extends('layouts.user2')

@section('content')

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated zoomIn">Donasi</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="/home2">Home</a></li>
                                    <li class="breadcrumb-item"><a class="text-white" href="/zakat2">zakat</a></li>
                                    <li class="breadcrumb-item"><a class="text-white" href="/infaq2">Infaq</a></li>
                                    <li class="breadcrumb-item"><a class="text-white" href="/donasi2">Donasi</a></li>
                                </ol>
                            <a href="#donasi2" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">Donasi</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-6">
                @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif
            </div>
        </div>

        <section id="donasi2">
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <form action="{{ route('donasi2.store') }}" method="post">
                            @csrf
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" 
                                            id="name" placeholder="Name" required autofocus>
                                            <label for="name">Name</label>
                                        @error('nama')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                                            id="email" placeholder="Email"  required>
                                            <label for="email">Email</label>
                                        </div>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="no" placeholder="No Telp" required>
                                            <label for="number">No Telp</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select name="jenis" id="" class="form-select" required>
                                                <option value="">Jenis Donasi</option>
                                                <option value="zakat">Zakat</option>
                                                <option value="zakat">Infaq</option>
                                                <option value="zakat">Sedekah</option>
                                            </select>
                                            <label for="subject">Jenis Donasi</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="no" placeholder="Jumblah Donasi" required>
                                            <label for="number">jumlah donasi</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="donasi" id="dana" required>
                                        <label class="form-check-label" for="dana">
                                        <img class="img-fluid" src="aset/img/dana.png" alt="" style="width: 90px; heigth: 50px;">
                                        </label>
                                        <br>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="donasi" id="bca" required>
                                        <label class="form-check-label" for="bca">
                                        <img class="img-fluid" src="aset/img/BCA.png" alt="" style="width: 90px; heigth: 50px;">
                                        </label>
                                        <br>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="donasi" id="bni" required>
                                        <label class="form-check-label" for="bni">
                                        <img class="img-fluid" src="aset/img/bni.png" alt="" style="width: 90px; heigth: 50px;">
                                        </label>
                                        <br>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="donasi" id="gopay" required>
                                        <label class="form-check-label" for="gopay">
                                        <img class="img-fluid" src="aset/img/gopay.png" alt="" style="width: 90px; heigth: 50px;">
                                        </label>
                                        <br>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="donasi" id="bjb">
                                        <label class="form-check-label" for="bjb">
                                        <img class="img-fluid" src="aset/img/bjb.png" alt="" style="width: 90px; heigth: 50px;">
                                        </label>
                                        <br>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="donasi" id="mandiri" required>
                                        <label class="form-check-label" for="mandiri">
                                        <img class="img-fluid" src="aset/img/mandiri.png" alt="" style="width: 90px; heigth: 50px;">
                                        </label>
                                        <br>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <input type="submit" value="Donasi Sekarang" name="kirim" class="btn btn-primary w-100 py-3">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <div><b> Silahkan isi data diatas :)</b></div>

        <section>
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">

                        
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        

 
@endsection
