@extends('layouts.index')
@section('container')

<div class="page-content">  
    <h4 class="mb-0 text-uppercase">Marvel & X-Men</h4>
    <hr/>
    <div class="row row-cols-none row-cols-md-4 g-1">
        @foreach ($MarvelXmen as $item)
            <div class="card-group shadow">
                <div class="card border-end shadow-none">
                    <img src="{{ asset('storage/' . $item->cover) }}" class="card-img-top h-75" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->judul }}</h5>
                        <h5 class="card-title">{{ $item->subjudul }}</h5>
                        <p class="card-text">{{ $item->category->nama }}</p>
                        @if(auth()->check())
                                <a href="/chapter/{{ $item->subjudul }}" class="btn btn-dark"><i class='bx bx-book-open'></i>Baca</a>
                            @else
                                <a href="/Chapter/{{ $item->subjudul }}" class="btn btn-dark"><i class='bx bx-book-open'></i>Baca</a>
                            @endif
                    </div>
                    <div class="card-footer bg-white">
                        <small class="text-muted">Diupdate {{ $item->updated_at->diffForHumans() }}</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>
<!--end page wrapper -->



@endsection 