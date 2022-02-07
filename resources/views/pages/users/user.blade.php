@extends('layout.dashboard_admin')
@section('title', 'PPDB Online')

@section('content')
<div class="tab-content tab-content-basic">
    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between flex-wrap">
                            <div class="mb-3">
                                <h4 class="card-title fs-2">Data Users</h4>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <a href="#"><button class="text-white btn btn-success px-4 border-0 fw-bold">Create</button></a>
                                </div>
                                <div>
                                    <a href="#"><button class="btn btn-danger px-3 border-0 text-white fw-bold">Delete All</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover" id="table">
                                <thead>
                                    <tr>
                                        <th class="fw-bold">No</th>
                                        <th class="fw-bold">Username</th>
                                        <th class="fw-bold">Gender</th>
                                        <th class="fw-bold">Jabatan</th>
                                        <th class="fw-bold">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><div class="text-dark fw-bold p-2">1</div></td>
                                        <td>
                                            <div class="d-flex gap-3">
                                                <img src="{{ asset('template/images/faces/face1.jpg') }}" alt="">
                                                <div>
                                                    <h6>Muhamad Ramadhan Tri Nurdias</h6>
                                                    <p class="badge badge-success">Super Admin</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><h6>Laki-Laki</h6></td>
                                        <td><div class="badge badge-opacity-success">Kepala Sekolah</div></td>
                                        <td>
                                            <div class="d-flex">
                                                {{-- Edit --}}
                                                <a href="#">
                                                    <button class="btn btn-warning text-white border-0" style="padding: 8px 5px; border-radius: 50px;">
                                                        <i style="font-size: 18px; margin-left: 4px;" class="mdi mdi-pencil-box"></i>
                                                    </button>
                                                </a>

                                                {{-- Delete --}}
                                                <button class="btn btn-danger text-white border-0"  style="padding: 8px 5px; border-radius: 50px;"><i style="font-size: 18px; margin-left: 4px;" class="mdi mdi-delete"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><div class="text-dark fw-bold p-2">2</div></td>
                                        <td>
                                            <div class="d-flex gap-3">
                                                <img src="{{ asset('template/images/faces/face1.jpg') }}" alt="">
                                                <div>
                                                    <h6>Muji Kuwat</h6>
                                                    <p class="badge badge-warning">Admin</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><h6>Laki-Laki</h6></td>
                                        <td><div class="badge badge-opacity-warning">Staff</div></td>
                                        <td>
                                            <div class="d-flex">
                                                {{-- Edit --}}
                                                <a href="#">
                                                    <button class="btn btn-warning text-white border-0" style="padding: 8px 5px; border-radius: 50px;">
                                                        <i style="font-size: 18px; margin-left: 4px;" class="mdi mdi-pencil-box"></i>
                                                    </button>
                                                </a>

                                                {{-- Delete --}}
                                                <button class="btn btn-danger text-white border-0"  style="padding: 8px 5px; border-radius: 50px;"><i style="font-size: 18px; margin-left: 4px;" class="mdi mdi-delete"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><div class="text-dark fw-bold p-2">3</div></td>
                                        <td>
                                            <div class="d-flex gap-3">
                                                <img src="{{ asset('template/images/faces/face1.jpg') }}" alt="">
                                                <div>
                                                    <h6>Abdurrahman</h6>
                                                    <p class="badge badge-warning">Admin</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><h6>Laki-Laki</h6></td>
                                        <td><div class="badge badge-opacity-warning">Staff</div></td>
                                        <td>
                                            <div class="d-flex">
                                                {{-- Edit --}}
                                                <a href="#">
                                                    <button class="btn btn-warning text-white border-0" style="padding: 8px 5px; border-radius: 50px;">
                                                        <i style="font-size: 18px; margin-left: 4px;" class="mdi mdi-pencil-box"></i>
                                                    </button>
                                                </a>

                                                {{-- Delete --}}
                                                <button class="btn btn-danger text-white border-0"  style="padding: 8px 5px; border-radius: 50px;"><i style="font-size: 18px; margin-left: 4px;" class="mdi mdi-delete"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><div class="text-dark fw-bold p-2">4</div></td>
                                        <td>
                                            <div class="d-flex gap-3">
                                                <img src="{{ asset('template/images/faces/face1.jpg') }}" alt="">
                                                <div>
                                                    <h6>Ihsan Djamil</h6>
                                                    <p class="badge badge-warning">Admin</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><h6>Laki-Laki</h6></td>
                                        <td><div class="badge badge-opacity-warning">Staff</div></td>
                                        <td>
                                            <div class="d-flex">
                                                {{-- Edit --}}
                                                <a href="#">
                                                    <button class="btn btn-warning text-white border-0" style="padding: 8px 5px; border-radius: 50px;">
                                                        <i style="font-size: 18px; margin-left: 4px;" class="mdi mdi-pencil-box"></i>
                                                    </button>
                                                </a>

                                                {{-- Delete --}}
                                                <button class="btn btn-danger text-white border-0"  style="padding: 8px 5px; border-radius: 50px;"><i style="font-size: 18px; margin-left: 4px;" class="mdi mdi-delete"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><div class="text-dark fw-bold p-2">5</div></td>
                                        <td>
                                            <div class="d-flex gap-3">
                                                <img src="{{ asset('template/images/faces/face1.jpg') }}" alt="">
                                                <div>
                                                    <h6>Hudzaifah</h6>
                                                    <p class="badge badge-warning">Admin</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><h6>Laki-Laki</h6></td>
                                        <td><div class="badge badge-opacity-warning">Staff</div></td>
                                        <td>
                                            <div class="d-flex">
                                                {{-- Edit --}}
                                                <a href="#">
                                                    <button class="btn btn-warning text-white border-0" style="padding: 8px 5px; border-radius: 50px;">
                                                        <i style="font-size: 18px; margin-left: 4px;" class="mdi mdi-pencil-box"></i>
                                                    </button>
                                                </a>

                                                {{-- Delete --}}
                                                <button class="btn btn-danger text-white border-0"  style="padding: 8px 5px; border-radius: 50px;"><i style="font-size: 18px; margin-left: 4px;" class="mdi mdi-delete"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-5"><a href="#" class="shadow-lg btn fw-bold border-0 btn-warning text-white rounded-circle" style="padding: 10px 8px 10px 11px;"><i class="mdi mdi-arrow-up" style="font-size: 20px"></i></a></div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- @push('buttonExport')
    <a href="#" class="btn btn-outline-info">Print</a>
    <a href="#" class="btn btn-outline-warning">Export Template</a>
    <a href="#" class="btn btn-outline-primary">Import</a>
@endpush --}}

@push('breadcrumb')
    <li class="breadcrumb-item"><a class="text-decoration-none fs-6" href="#">Dashboard</a></li>
    <li class="breadcrumb-item active fs-6" aria-current="page">Data Users</li>
@endpush
