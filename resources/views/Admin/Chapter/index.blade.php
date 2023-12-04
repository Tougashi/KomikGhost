@extends('layouts.index')
@section('container')
<div class="page-content">
    <!--breadcrumb-->
    <!--end breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        {{-- <div class="breadcrumb-title pe-3">Menu</div> --}}
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item" aria-current="page">CHAPTER LIST</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto"><a href="/chapter-upload" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Tambahkan Data</a></div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Chapter</th>
                            <th>Total Page</th>
                            <th>Nama Komik</th>
                            <th></th>
                        </tr>
                    </thead>
                     <tbody>
                        @foreach ($chapter as $chapter)     
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $chapter->judul_ch }}</td>
                            <td>{{ $chapter->total_page }}</td>
                            @if ($chapter->komiks)
                                <td>{{ $chapter->komiks->judul }} {{ $chapter->komiks->subjudul }}</td>
                            @else
                                <td>Belum memiliki komik terkait</td>
                            @endif
                    
                            <td>
                                <div class="d-flex order-actions">
                                    <a href="{{ route('chapter.edit', encrypt($chapter->id) ) }}" class="btn-primary"><i class='bx bxs-edit'></i></a>
                                    <a href="{{ route('chapter.destroy', ['id' => encrypt($chapter->id)]) }}" class="btn-danger" data-confirm-delete="true"><i class='bx bxs-trash'></i></a>
                            </td>
                        @endforeach 
                        </tr>
                    </tbody>    
                </table>
            </div>
        </div>
    </div>
@endsection