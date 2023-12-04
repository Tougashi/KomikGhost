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
                            <th>Username</th>
                            <th>Email</th>
                            <th>Peran</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <div class="@if ($user->role && $user->role->role === 'Admin') text-success @elseif ($user->role && $user->role->role === 'User') text-primary  @endif">
                                    @if ($user->role && $user->role->role === 'Admin') <i class='bx bx-user-check me-1'></i>
                                    @elseif ($user->role && $user->role->role === 'User')<i class='bx bx-user me-1'></i>
                                    @endif
                                    {{ $user->role->role }}
                                </div>
                            </td>
                            <td>
                                <div class="d-flex order-actions">
                                    <a href="{{ route('users.edit', encrypt($user->id) ) }}" class="btn-primary"><i class='bx bxs-edit'></i></a>
                                    <a href="{{ route('users.destroy', ['user' => encrypt($user->id)]) }}" class="btn-danger" data-confirm-delete="true"><i class='bx bxs-trash'></i></a>
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