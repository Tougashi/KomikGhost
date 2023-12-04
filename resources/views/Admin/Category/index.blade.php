@extends('layouts.index')
@section('container')
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item" aria-current="page">KATEGORI LIST </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="p-4 border rounded">
                    @if($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    <form class="row g-3" action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="col-md-4">
                            <label for="nama" class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control" name="nama" id="nama" required>
                        </div>
                        <div class="col-md-4">
                            <label for="slug" class="form-label">slug</label>
                            <input type="text" class="form-control" name="slug" id="slug" required>
                        </div>
                        <div class="col-md-4">
                            <label for="created_at" class="form-label">Tanggal Diupload</label>
                            <input type="date" class="form-control" name="created_at" id="created_at" required>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                <label class="form-check-label" for="invalidCheck2">Sudah benar?</label>
                            </div>
                        </div>
                        
                         @error('category')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>slug</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                         <tbody>
                            @foreach ($category as $category)     
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->nama }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="{{ route('category.edit', encrypt($category->id) ) }}" class="bg-none"><i class='bx bxs-edit'></i></a>
                                        @php
                                            $komik = $category->komiks;
                                        @endphp
                                        @if (count($komik) == 0)
                                
                                        <form action="{{ route('category.destroy', encrypt($category->id) ) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm " onclick="return confirm('Apakah Anda yakin ingin menghapus Kategori ini?')"><i class='bx bxs-trash text-danger'></i></button>   
                                        </form>
                                            
                                        @endif
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