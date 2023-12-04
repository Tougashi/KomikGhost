@extends('layouts.index')
@section('container')
<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item" aria-current="page">EDIT KATEGORI</li>
                    <li class="breadcrumb-item" aria-current="page">ISI DATA DENGAN BENAR</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto"><a href="/category-upload" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bx-arrow-back"></i>Batal</a></div>
    </div>
        <div class="card">
            <div class="card-body">
                <div class="p-4 border rounded">
                    @if($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    <form class="row g-3" action="{{ route('category.update', encrypt($category->id) ) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="col-md-4">
                            <label for="nama" class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="{{ $category->nama }}" required>
                        </div>
                        <div class="col-md-4">
                            <label for="slug" class="form-label">slug</label>
                            <input type="text" class="form-control" name="slug" id="slug" value="{{ $category->slug }}" required>
                        </div>
                        <div class="col-md-4">
                            <label for="created_at" class="form-label">Tanggal Diupdate</label>
                            <input type="date" class="form-control" name="created_at" id="created_at" value="{{ $category->created_at }}" required>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"id="invalidCheck2" value="" required>
                                <label class="form-check-label" for="invalidCheck2">Sudah benar?</label>
                            </div>
                        </div>
                         {{-- @error('category')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror --}}
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection