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
        

        <section id="donasi2">
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                            <h6 class="position-relative d-inline text-primary ps-4"> Donasi</h6>
                            <h2 class="mt-2">Data Donasi</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                           <form action="{{ route('donatur.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control  @error('nama') is-invalid @enderror"
                                    name="nama">
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                    name="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">No Telp</label>
                                <input type="number" class="form-control  @error('no') is-invalid @enderror"
                                    name="no">
                                @error('no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jumlah</label>
                                <input type="number" class="form-control  @error('jumlah') is-invalid @enderror"
                                    name="jumlah">
                                @error('jumlah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jenis Donasi</label>
                                <select name="jenis" class="form-control  @error('jenis') is-invalid @enderror">
                                    <option value="">--Pilih Jenis Donasi--</option>
                                    <option value="zakat">Zakat</option>
                                    <option value="infaq">Infaq</option>
                                    <option value="sedekah">Sedekah</option>
                                </select>
                                @error('jenis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jenis Pembayaran</label>
                                <select name="pembayaran" class="form-control  @error('pembayaran') is-invalid @enderror">
                                    <option value="">--Pilih Jenis Pembayaran--</option>
                                    <option value="BCA">BCA</option>
                                    <option value="Mandiri">Mandiri</option>
                                    <option value="Gopay">Gopay</option>
                                </select>
                                @error('pembayaran')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit" name="kirim">Save</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>

        <section>
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">

                        <?php
                            if (isset($_POST['kirim'])) {
                                $nama = $_POST['nama'];
                                $email = $_POST['email'];
                                $no = $_POST['no'];
                                $jumlah = $_POST['jumlah'];
                                $jenis = $_POST['jenis'];
                                $pembayaran = $_POST['pembayaran'];
                                ?>
                                <p><?php $nama ?></p>

                                <?php
                            }
                        ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        

 
@endsection
<!-- <form action="{{route('donatur.index')}}">
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Name" required>
                                            <label for="name">Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Email" required>
                                            <label for="email">Email</label>
                                        </div>
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
                            </form> -->