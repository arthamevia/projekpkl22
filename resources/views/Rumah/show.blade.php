@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Artikel Home
                    </div>
                    <div class="card-body">
                    <div class="mb-3">
                            <label class="form-label">Judul</label>
                            <input type="text" class="form-control " name="judul" value="{{ $rumah1->judul }}" readonly>
                        </div>
                        </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Artikel</label>
                            <textarea class="form-control" name="artikel" readonly>{{ $rumah1->artikel }}</textarea>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="text" class="form-control" name="tgl_lahir" value="{{ $rumah1->tanggal }}"
                                readonly>

                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('rumah.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection