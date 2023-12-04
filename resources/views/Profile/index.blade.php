@extends('layouts.index')
@section('container')
<div class="page-content">
    <div class="container">
        <div class="main-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="assets/images/logo/logo3.png" alt="Admin" class=" rounded p-1 " width="110">
                                <div class="mt-3">
                                    @if (auth()->check())
                                   <h4>{{ auth()->user()->username }}</h4>
                                   
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Username</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="{{ auth()->user()->username }}" readonly />
                                </div>
                                <p></p>
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="{{ auth()->user()->email }}" readonly />
                                </div>
                                <p></p>
                                {{-- <div class="col-sm-3">
                                    <h6 class="mb-0">Password</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="password" class="form-control" id="password" value="{{ $decryptedPassword }}" readonly />
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    @endif
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection