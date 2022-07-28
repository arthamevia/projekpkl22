@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Artikel Donatur
                    </div>
                    <div class="card-body">
                    <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control " name="nama" value="{{ $donatur1->nama }}" readonly>
                        
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" value="{{ $donatur1->email }}"
                                readonly>
                        
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No Telp</label>
                            <input type="text" class="form-control" name="no" value="{{ $donatur1->no }}"
                                readonly>
                        
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah</label>
                            <input type="text" class="form-control" name="jumlah" value="{{ $donatur1->jumlah }}"
                                readonly>
                        
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Donasi</label>
                            <input type="text" class="form-control" name="jenis" value="{{ $donatur1->jenis }}"
                                readonly>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Pembayaran</label>
                            <input type="text" class="form-control" name="pembayaran" value="{{ $donatur1->pembayaran }}"
                                readonly>

                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('donatur.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection