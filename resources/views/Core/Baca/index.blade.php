@extends('layouts.index')
@section('container')
<div class="page-content">
        @if (count($images) > 0)
            @foreach ($images as $img)
                <img src="{{ asset('storage/' . $img->image) }}" alt="{{ $loop->iteration }}" style="max-width: 100%; height: auto;">
            @endforeach
        @else
            <h1 style="text-align: center; font-weight: bold;">Segera Hadir</h1>
        @endif
    </div>    
@endsection