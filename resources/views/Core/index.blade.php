@extends('layouts.index')
@section('container')
<div class="page-content">  
    <h4 class="mb-0 text-uppercase">Terbaru</h4>
    <hr/>
    <div class="row row-cols-none row-cols-md-4 g-1">
        @foreach ($komik as $item)
            <div class="card-group shadow">
                <div class="card border-end shadow-none">
                    <img src="{{ asset('storage/' . $item->cover) }}" class="card-img-top h-75" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->judul }}</h5>
                        <h5 class="card-title">{{ $item->subjudul }}</h5>
                        <p class="card-text">{{ $item->category->nama }}</p>
                        <div class="d-flex align-items-center gap-2">
                            @if(auth()->check())
                            <a href="/chapter/{{ $item->subjudul }}" class="btn btn-dark"><i class='bx bx-book-open'></i>Baca</a>
                            {{-- <a href="/chapter/{{ $item->subjudul }}" class="btn btn-dark"><i class='bx bx-bookmark-plus'></i>Bookmark</a> --}}
                            @else
                            <a href="/Chapter/{{ $item->subjudul }}" class="btn btn-dark"><i class='bx bx-book-open'></i>Baca</a>
                            @endif
                        </div>
                        
                    </div>
                    <div class="card-footer bg-white">
                        <small class="text-muted">Diupdate {{ $item->updated_at->diffForHumans() }}</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <h4 class="mb-0 text-uppercase">Detective Comics | DC</h4>
    <hr/>
    <div class="row row-cols-none row-cols-md-4 g-1">
        @foreach ($Detective as $item)
            <div class="card-group shadow">
                <div class="card border-end shadow-none">
                    <img src="{{ asset('storage/' . $item->cover) }}" class="card-img-top h-75" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->judul }}</h5>
                        <h5 class="card-title">{{ $item->subjudul }}</h5>
                        <p class="card-text">{{ $item->category->nama }}</p>
                        <div class="d-flex align-items-center gap-2">
                            @if(auth()->check())
                                <a href="/chapter/{{ $item->subjudul }}" class="btn btn-dark"><i class='bx bx-book-open'></i>Baca</a>
                                <a href="/chapter/{{ $item->subjudul }}" class="btn btn-dark"><i class='bx bx-book-open'></i>Bookmark</a>
                            @else
                                <a href="/Chapter/{{ $item->subjudul }}" class="btn btn-dark"><i class='bx bx-book-open'></i>Baca</a>
                            @endif
                        </div>
                        
                    </div>
                    <div class="card-footer bg-white">
                        <small class="text-muted">Diupdate {{ $item->updated_at->diffForHumans() }}</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <h4 class="mb-0 text-uppercase">Marvel</h4>
    <hr/>
    <div class="row row-cols-none row-cols-md-4 g-1">
        @foreach ($MC as $item)
            <div class="card-group shadow">
                <div class="card border-end shadow-none">
                    <img src="{{ asset('storage/' . $item->cover) }}" class="card-img-top h-75" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->judul }}</h5>
                        <h5 class="card-title">{{ $item->subjudul }}</h5>
                        <p class="card-text">{{ $item->category->nama }}</p>
                        <div class="d-flex align-items-center gap-2">
                            @if(auth()->check())
                                <a href="/chapter/{{ $item->subjudul }}" class="btn btn-dark"><i class='bx bx-book-open'></i>Baca</a>
                                {{-- <a href="/chapter/{{ $item->subjudul }}" class="btn btn-dark"><i class='bx bx-bookmark-plus'></i>Bookmark</a> --}}
                            @else
                                <a href="/Chapter/{{ $item->subjudul }}" class="btn btn-dark"><i class='bx bx-book-open'></i>Baca</a>
                            @endif
                        </div>
                        
                    </div>
                    <div class="card-footer bg-white">
                        <small class="text-muted">Diupdate {{ $item->updated_at->diffForHumans() }}</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <h4 class="mb-0 text-uppercase">Vertigo</h4>
    <hr/>
    <div class="row row-cols-none row-cols-md-4 g-1">
        @foreach ($Verti as $item)
            <div class="card-group shadow">
                <div class="card border-end shadow-none">
                    <img src="{{ asset('storage/' . $item->cover) }}" class="card-img-top h-75" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->judul }}</h5>
                        <h5 class="card-title">{{ $item->subjudul }}</h5>
                        <p class="card-text">{{ $item->category->nama }}</p>
                        <div class="d-flex align-items-center gap-2">
                            @if(auth()->check())
                                <a href="/chapter/{{ $item->subjudul }}" class="btn btn-dark"><i class='bx bx-book-open'></i>Baca</a>
                                {{-- <a href="/chapter/{{ $item->subjudul }}" class="btn btn-dark"><i class='bx bx-bookmark-plus'></i>Bookmark</a> --}}
                            @else
                                <a href="/Chapter/{{ $item->subjudul }}" class="btn btn-dark"><i class='bx bx-book-open'></i>Baca</a>
                            @endif
                        </div>
                        
                    </div>
                    <div class="card-footer bg-white">
                        <small class="text-muted">Diupdate {{ $item->updated_at->diffForHumans() }}</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <h4 class="mb-0 text-uppercase">X-MEN</h4>
    <hr/>
    <div class="row row-cols-none row-cols-md-4 g-1">
        @foreach ($Xmen as $item)
            <div class="card-group shadow">
                <div class="card border-end shadow-none">
                    <img src="{{ asset('storage/' . $item->cover) }}" class="card-img-top h-75" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->judul }}</h5>
                        <h5 class="card-title">{{ $item->subjudul }}</h5>
                        <p class="card-text">{{ $item->category->nama }}</p>
                        <div class="d-flex align-items-center gap-2">
                            @if(auth()->check())
                                <a href="/chapter/{{ $item->subjudul }}" class="btn btn-dark"><i class='bx bx-book-open'></i>Baca</a>
                                {{-- <a href="/chapter/{{ $item->subjudul }}" class="btn btn-dark"><i class='bx bx-bookmark-plus'></i>Bookmark</a> --}}
                            @else
                                <a href="/Chapter/{{ $item->subjudul }}" class="btn btn-dark"><i class='bx bx-book-open'></i>Baca</a>
                            @endif
                        </div>
                        
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