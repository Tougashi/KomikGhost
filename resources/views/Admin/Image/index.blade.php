@extends('layouts.index')
@section('container')
<div class="page-content">
    <div class="card">
        <div class="card-body">
        @if($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                @error('image.*')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                <label  for="inputProductDescription" class="form-label">Unggah Gambar Komik | Maks 8 Gambar | Pastikan Berurutan</label>
                <input id="image-uploadify" type="file" name="image[]" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" class="form-control" multiple required>   
            </div>
            <p></p>
            <div class="select2-sm">
                <label for="chapter_id" class="form-label">Nama Chapter</label>
                <select class="single-select" name="chapter_id" id="chapter_id" required >
                    <option selected disabled value="">Pilih...</option>
                    @foreach ($komik as $komik)
                        @foreach ($komik->chapters as $chapter)
                            <option value="{{ $chapter->id }}">{{ $komik->judul }} {{ $komik->subjudul }} - {{ $chapter->judul_ch }}</option>
                        @endforeach
                    @endforeach
                </select>
                
            </div>
            <p></p>
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