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
                    
                    <li class="breadcrumb-item" aria-current="page">KOMIK LIST</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto"><a href="/komik-upload" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Tambahkan Data</a></div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Sub Judul</th>
                            <th>Deskripsi</th>
                            <th>Kategori</th>
                            <th>Chapter</th>
                            <th>Dibuat</th>
                            <th></th>
                        </tr>
                    </thead> 
                    <tbody>
                        @foreach ($komik as $komik)     
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $komik->judul }}</td>
                            <td>{{ $komik->subjudul }}</td>
                            <td>{{ Str::substr($komik->deskripsi, 0, 6) }}...</td>
                            <td>{{ $komik->category->nama }}</td>
                            <td>{{ $komik->jumlah_ch }}</td>
                            <td>{{ $komik->updated_at->formatLocalized('%d %B %Y') }}</td>
                            
                            <td>
                                <div class="d-flex order-actions">
                                    <a href="{{ route('komik.edit',encrypt($komik->id)) }}" class="btn-primary"><i class='bx bxs-edit'></i></a>
                                    <a href="{{ route('komik.destroy', encrypt($komik->id)) }}" class="btn-danger" data-confirm-delete="true"><i class='bx bxs-trash'></i></a>
                                </div>
                            </td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection