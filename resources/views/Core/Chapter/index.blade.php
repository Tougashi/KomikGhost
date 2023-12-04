@extends('layouts.index')
@section('container')
<div class="page-content">
 <div class="" style="cursor: text">
  <div class="col">  
    <div class="card">
     <div class="row g-2">
      @if ($komik)
        <div class="col-md-2">
          <img src="{{ asset('storage/' . $komik->cover) }}" class="card-img-top" alt="...">
        </div>
        <div class="col-md">
        <div class="card-body">
          <h5 class="card-title">{{ $komik->judul }}</h5>
          <h5 class="card-title">{{ $komik->subjudul }}</h5>
          <p class="card-text">{{ $komik->category->nama }}</p>
          <p class="card-text">Sinopsis :</p>
          <p class="card-text">{{ $komik->deskripsi }}</p>
      @else
          <h2>Komik Belum Rilis T_T</h2>
      @endif
          
        </div>
        </div>
      </div>
    </div> 
  </div>
</div>

<ul class="list-group">
  <li class="list-group-item bg-dark text-light">Chapter List</li>
    @foreach ($komik->chapters as $chapter)
    @if(auth()->check())
      <a href="/baca/{{ $komik->subjudul }}/{{ $chapter->judul_ch}}"> 
        <li class="list-group-item">{{ $komik->judul }} {{ $komik->subjudul }} {{ $chapter->judul_ch }}</li>
    @else
      <a href="/Baca/{{ $komik->subjudul }}/{{ $chapter->judul_ch}}"> 
        <li class="list-group-item">{{ $komik->judul }} {{ $komik->subjudul }} {{ $chapter->judul_ch }}</li>
    @endif
    @endforeach
      </a>
 </ul>

</div>
@endsection