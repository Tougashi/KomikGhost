@extends('layouts.index')
@section('container')
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            {{-- <div class="breadcrumb-title pe-3">Menu</div> --}}
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item" aria-current="page">Chapter Upload</li>
                        <li class="breadcrumb-item" aria-current="page">Pastikan subjudulnya sesuai</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto"><a href="/chapter-list" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bx-arrow-back"></i>Kembali</a></div>
        </div>
        <div class="card">
            <div class="card-body">
                    @if($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    <form class="row g-3" action="{{ route('chapter.store') }}" method="POST">
                        @csrf
                        <div class="col-md-4">
                            <label for="judul_ch" class="form-label">Judul Chapter</label>
                            <input type="text" class="form-control" name="judul_ch" id="judul_ch" required>
                        </div>
                        <div class="col-md-4">
                            <label for="total_page" class="form-label">Jumlah Page</label>
                            <input type="number" class="form-control" name="total_page" id="total_page" required>
                        </div>
                        <div class="col-md-4">
                            <div class="select2-sm">
                            <label for="komik_id" class="form-label">Subjudul Komik</label>
                            <select class="single-select" name="komik_id" id="komik_id" required>
                                <option selected disabled value="">Pilih...</option>
                                @foreach ($komik as $item)
                                <option value="{{ $item->id }}">{{ $item->judul }} {{ $item->subjudul }}</option>
                                @endforeach
                            </select>
                        </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                <label class="form-check-label" for="invalidCheck2">Sudah benar?</label>
                            </div>
                        </div>
                        
                         @error('chapter')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Upload</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
@endsection