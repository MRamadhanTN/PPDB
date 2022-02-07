@extends('layout.dashboard_admin')
@section('title', 'PPDB Online')

@section('content')
<div class="tab-content tab-content-basic">
    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title fs-1 text-center mt-5 fw-bold" style="color: #f4813f; font-weight: 900px;">Edit User</h1>
                        <form class="forms-sample p-5" action="#" method="POST">
                            @csrf
                            {{-- @method(PUT) --}}
                            {{-- Username --}}
                            <div class="form-group">
                                <label for="exampleInputUsername">Username</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" value="#" name="username" autofocus>
                                @error('username')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Email --}}
                            <div class="form-group">
                                <label for="exampleInputEmail">Email address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" name="email" value="#">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- NIP --}}
                            <div class="form-group">
                                <label for="exampleInputNIP">NIP</label>
                                <input type="number" class="form-control @error('NIP') is-invalid @enderror" id="NIP" placeholder="NIP" name="NIP" value="#">
                                @error('NIP')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Jabatan --}}
                            <div class="form-group">
                                <label for="exampleInputPosition">Jabatan</label>
                                <select class="form-select form-select-sm @error('position') is-invalid @enderror" name="position" id="position" value="#">
                                    <option disabled selected>Pilih Jabatan</option>
                                    <option value="#">Kepala Sekolah</option>
                                    <option value="#">Guru</option>
                                    <option value="#">Staff Sekolah</option>
                                </select>
                                @error('position')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Password --}}
                            <div class="form-group">
                                <label for="exampleInputPassword">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" value="#">
                                <div class="d-flex justify-content-between mt-2">
                                    <div class="d-flex align-items-center" style="font-size: 12px">
                                        <input type="checkbox" onclick="myFunction()">&nbsp; Show Password
                                    </div>
                                </div>
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Confirm Password --}}
                            <div class="form-group">
                                <label for="exampleInputConfirmPassword">Confirm Password</label>
                                <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" id="ConfirmPassword" placeholder="Confirm Password" name="confirm_password" value="#">
                                <div class="d-flex justify-content-between mt-2">
                                    <div class="d-flex align-items-center" style="font-size: 12px">
                                        <input type="checkbox" onclick="myFunction1()">&nbsp; Show Password
                                    </div>
                                </div>
                                @error('confirm_password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Role --}}
                            <div class="form-group">
                                <label for="exampleInputRole">Role</label>
                                <select class="form-select form-select-sm @error('role') is-invalid @enderror" name="role" id="role" value="#">
                                    <option disabled selected>Pilih Role</option>
                                    <option value="#">Super Admin</option>
                                    <option value="#">Admin</option>
                                </select>
                                @error('role')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-end align-items-center">
                                <button type="submit" class="btn fw-bold border-0 btn-primary px-4 text-white mx-0" style="padding: 12px 0px;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-5"><a href="#" class="btn fw-bold border-0 btn-warning text-white rounded-circle" style="padding: 10px 8px 10px 11px;"><i class="mdi mdi-arrow-up" style="font-size: 20px"></i></a></div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('buttonExport')
    <a href="{{ route('user') }}" class="btn btn-outline-success px-4">Back</a>
@endpush

@push('breadcrumb')
    <li class="breadcrumb-item"><a class="text-decoration-none fs-6" href="{{ route('Admin') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a class="text-decoration-none fs-6" href="{{ route('user') }}">Data Users</a></li>
    <li class="breadcrumb-item active fs-6" aria-current="page">Edit</li>
@endpush

@push('afterScript')
    {{-- Show Password --}}
    <script>
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        };
        function myFunction1() {
            var y = document.getElementById("ConfirmPassword");
            if (y.type === "password") {
                y.type = "text";
            } else {
                y.type = "password";
            }
        };
    </script>
@endpush
