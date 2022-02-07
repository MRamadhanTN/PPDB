@extends('layout.dashboard_admin')
@section('title', 'PPDB Online')

@section('content')
<div class="tab-content tab-content-basic">
    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
        <div class="row">
            <div class="col-sm-12">
                <div class="statistics-details d-flex justify-content-around">
                    <div>
                        <p class="statistics-title">Quota Penerimaan</p>
                        <h3 class="rate-percentage" style="color: #f4813f;">3000<span class="text-dark" style="font-size: 15px; padding-left: 10px">/orang</span></h3>
                    </div>
                    <div>
                        <p class="statistics-title">Jumlah Pendaftar</p>
                        <h3 class="rate-percentage" style="color: #f4813f;">100<span class="text-dark" style="font-size: 15px; padding-left: 10px">/300</span></h3>
                        <p class="d-flex justify-content-center"></p>
                    </div>
                    <div class="d-none d-md-block">
                        <p class="statistics-title">Jumlah Laki</p>
                        <h3 class="rate-percentage" style="color: #f4813f;">50<span class="text-dark" style="font-size: 15px; padding-left: 10px">/150</span></h3>
                        <p class="d-flex justify-content-center"></p>
                    </div>
                    <div class="d-none d-md-block">
                        <p class="statistics-title">Jumlah Perempuan</p>
                        <h3 class="rate-percentage" style="color: #f4813f;">50<span class="text-dark" style="font-size: 15px; padding-left: 10px">/150</span></h3>
                    </div>
                    <div class="d-none d-md-block">
                        <p class="statistics-title">Verifikasi</p>
                        <h3 class="rate-percentage" style="color: #f4813f;">20<span class="text-dark" style="font-size: 15px; padding-left: 10px">/300</span></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 d-flex flex-column">
                <div class="row flex-grow">
                {{-- <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-start">
                        <div>
                        <h4 class="card-title card-title-dash">Statistik Pendaftar</h4>
                        <h5 class="card-subtitle card-subtitle-dash">Lorem Ipsum is simply dummy text of the printing</h5>
                        </div>
                        <div id="performance-line-legend"></div>
                        </div>
                        <div class="chartjs-wrapper mt-5">
                        <canvas id="performaneLine"></canvas>
                        </div>
                    </div>
                    </div>
                </div> --}}
                <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                        <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-start">
                                <div>
                                    <h4 class="card-title card-title-dash">Statistik Pendaftar Tahun 2022</h4>
                                <p class="card-subtitle card-subtitle-dash">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                                </div>
                                <div>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> This month </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                <h6 class="dropdown-header">Settings</h6>
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="d-sm-flex align-items-center mt-1 justify-content-end">
                                    {{-- <div class="d-sm-flex align-items-center mt-4 justify-content-between">
                                        <h2 class="me-2 fw-bold">$36,2531.00</h2>
                                        <h4 class="me-2">USD</h4><h4 class="text-success">(+1.37%)</h4>
                                    </div> --}}
                                    <div class="me-3">
                                        <div id="marketing-overview-legend"></div>
                                    </div>
                            </div>
                            <div class="chartjs-bar-wrapper mt-3">
                                <canvas id="marketingOverview"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-flex flex-column">
            <div class="row flex-grow">
            <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                <div class="card card-rounded" style="background: #f4813f;">
                <div class="card-body pb-0">
                    <h4 class="card-title card-title-dash text-white mb-4">Status Pendaftaran</h4>
                    <div class="row">
                    <div class="col-sm-12">
                        <p class="status-summary-ight-white mb-1">Buka</p>
                        <h2 class="text-white w-100">12-12-2001</h2>
                    </div>
                    {{-- <div class="col-sm-5">
                        <div class="status-summary-chart-wrapper pb-4">
                        <canvas id="status-summary"></canvas>
                        </div>
                    </div> --}}
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                <div class="card card-rounded">
                <div class="card-body">
                    <div class="row">
                    <div class="col-sm-6">
                        <div class="d-flex justify-content-between align-items-center mb-2 mb-sm-0">
                        <div class="circle-progress-width">
                            <div id="totalVisitors" class="progressbar-js-circle pr-2"></div>
                        </div>
                        <div>
                            <p class="text-small mb-2">Total User</p>
                            <h4 class="mb-0 fw-bold">10</h4>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="circle-progress-width">
                            <div id="visitperday" class="progressbar-js-circle pr-2"></div>
                        </div>
                        <div>
                            <p class="text-small mb-2">Jurusan</p>
                            <h4 class="mb-0 fw-bold">2</h4>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-8 d-flex flex-column">
            <div class="row">
            {{-- <div class="col-12 grid-margin stretch-card">
                <div class="card card-rounded">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-start">
                    <div>
                        <h4 class="card-title card-title-dash">Market Overview</h4>
                    <p class="card-subtitle card-subtitle-dash">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    </div>
                    <div>
                        <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> This month </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                            <h6 class="dropdown-header">Settings</h6>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                    <div class="d-sm-flex align-items-center mt-4 justify-content-between"><h2 class="me-2 fw-bold">$36,2531.00</h2><h4 class="me-2">USD</h4><h4 class="text-success">(+1.37%)</h4></div>
                    <div class="me-3"><div id="marketing-overview-legend"></div></div>
                    </div>
                    <div class="chartjs-bar-wrapper mt-3">
                    <canvas id="marketingOverview"></canvas>
                    </div>
                </div>
                </div>
            </div> --}}
            </div>
            {{-- <div class="row flex-grow">
            <div class="col-12 grid-margin stretch-card">
                <div class="card card-rounded table-darkBGImg">
                <div class="card-body">
                    <div class="col-sm-8">
                    <h3 class="text-white upgrade-info mb-0">
                        Enhance your <span class="fw-bold">Campaign</span> for better outreach
                    </h3>
                    <a href="#" class="btn btn-info upgrade-btn">Upgrade Account!</a>
                    </div>
                </div>
                </div>
            </div>
            </div> --}}
            <div class="row flex-grow d-md-block d-none">
                <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                    <div class="card card-rounded table-darkBGImg">
                        <div class="card-body">
                            <div class="col-sm-8">
                                <div class="mb-3">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6d/Logo_SMKN_1_Tulungagung.png" alt="image" width="120" height="120">
                                </div>
                                <h3 class="text-white upgrade-info mb-0">
                                    <span class="fw-bold">PPDB Online 2022</span>
                                    <br>
                                    <span class="fw-bold">
                                        SMK Negeri 1 Sungai Raya
                                        Bersama Kita Bisa !!!
                                    </span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card card-rounded">
                <div class="card-body">
                    <div class="d-sm-flex align-items-start">
                    <div>
                        <h4 class="card-title card-title-dash">Data Users</h4>
                    <p class="card-subtitle card-subtitle-dash">Update semua data user yang terbaru</p>
                    </div>
                    {{-- <div>
                        <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i>Add new member</button>
                    </div> --}}
                    </div>
                    <div class="table-responsive">
                        <table class="table select-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Gender</th>
                                    <th>Jabatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="text-dark fw-bold">1</div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('template/images/faces/face1.jpg') }}" alt="image">
                                            <div>
                                                <h6>Muhamad Ramadhan Tri Nurdias</h6>
                                                <p class="badge badge-success">Super Admin</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td><h6>Laki-Laki</h6></td>
                                    <td><div class="badge badge-opacity-success">Kepala Sekolah</div></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="text-dark fw-bold">2</div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('template/images/faces/face1.jpg') }}" alt="image">
                                            <div>
                                                <h6>Ihsan Djamil</h6>
                                                <p class="badge badge-warning">Admin</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td><h6>Laki-Laki</h6></td>
                                    <td><div class="badge badge-opacity-warning">Staff</div></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="text-dark fw-bold">3</div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('template/images/faces/face1.jpg') }}" alt="image">
                                            <div>
                                                <h6>Muji Kuwat</h6>
                                                <p class="badge badge-warning">Admin</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td><h6>Laki-Laki</h6></td>
                                    <td><div class="badge badge-opacity-warning">Staff</div></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="text-dark fw-bold">4</div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('template/images/faces/face1.jpg') }}" alt="image">
                                            <div>
                                                <h6>Hudzaifah</h6>
                                                <p class="badge badge-warning">Admin</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td><h6>Laki-Laki</h6></td>
                                    <td><div class="badge badge-opacity-warning">Staff</div></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="text-dark fw-bold">5</div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('template/images/faces/face1.jpg') }}" alt="image">
                                            <div>
                                                <h6>Muhammad Ali</h6>
                                                <p class="badge badge-warning">Admin</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td><h6>Laki-Laki</h6></td>
                                    <td><div class="badge badge-opacity-warning">Staff</div></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-4 d-flex flex-column">
            <div class="row">
            {{-- <div class="col-12 grid-margin stretch-card">
                <div class="card card-rounded">
                <div class="card-body">
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title card-title-dash">Todo list</h4>
                        <div class="add-items d-flex mb-0">
                            <!-- <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?"> -->
                            <button class="add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p"><i class="mdi mdi-plus"></i></button>
                        </div>
                        </div>
                        <div class="list-wrapper">
                        <ul class="todo-list todo-list-rounded">
                            <li class="d-block">
                            <div class="form-check w-100">
                                <label class="form-check-label">
                                <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                </label>
                                <div class="d-flex mt-2">
                                <div class="ps-4 text-small me-3">24 June 2020</div>
                                <div class="badge badge-opacity-warning me-3">Due tomorrow</div>
                                <i class="mdi mdi-flag ms-2 flag-color"></i>
                                </div>
                            </div>
                            </li>
                            <li class="d-block">
                            <div class="form-check w-100">
                                <label class="form-check-label">
                                <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                </label>
                                <div class="d-flex mt-2">
                                <div class="ps-4 text-small me-3">23 June 2020</div>
                                <div class="badge badge-opacity-success me-3">Done</div>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="form-check w-100">
                                <label class="form-check-label">
                                <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                </label>
                                <div class="d-flex mt-2">
                                <div class="ps-4 text-small me-3">24 June 2020</div>
                                <div class="badge badge-opacity-success me-3">Done</div>
                                </div>
                            </div>
                            </li>
                            <li class="border-bottom-0">
                            <div class="form-check w-100">
                                <label class="form-check-label">
                                <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                </label>
                                <div class="d-flex mt-2">
                                <div class="ps-4 text-small me-3">24 June 2020</div>
                                <div class="badge badge-opacity-danger me-3">Expired</div>
                                </div>
                            </div>
                            </li>
                        </ul>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div> --}}
            </div>

            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                        <div class="card-body card-rounded">
                            <h4 class="card-title  card-title-dash">Jadwal Kegiatan</h4>
                            <div class="list align-items-center border-bottom py-2">
                                <div class="wrapper w-100">
                                    <p class="mb-2 font-weight-medium">
                                    Tanggal Buka :
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-calendar text-muted me-1"></i>
                                            <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list align-items-center border-bottom py-2">
                                <div class="wrapper w-100">
                                    <p class="mb-2 font-weight-medium">
                                        Tanggal Tutup :
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-calendar text-muted me-1"></i>
                                            <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list align-items-center border-bottom py-2">
                                <div class="wrapper w-100">
                                    <p class="mb-2 font-weight-medium">
                                    Verifikasi :
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-calendar text-muted me-1"></i>
                                            <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list align-items-center border-bottom py-2">
                                <div class="wrapper w-100">
                                    <p class="mb-2 font-weight-medium">
                                    Tes 1
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-calendar text-muted me-1"></i>
                                            <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list align-items-center border-bottom py-2">
                                <div class="wrapper w-100">
                                    <p class="mb-2 font-weight-medium">
                                    Tes 2
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-calendar text-muted me-1"></i>
                                            <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list align-items-center py-2">
                                <div class="wrapper w-100">
                                    <p class="mb-2 font-weight-medium">
                                    Wawancara
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="mdi mdi-calendar text-muted me-1"></i>
                                            <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <h4 class="card-title card-title-dash">Update Data Masuk</h4>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                            <div class="d-flex">
                                                <img class="img-sm rounded-10" src="{{ asset('template/images/faces/face1.jpg') }}" alt="profile">
                                                <div class="wrapper ms-3">
                                                    <p class="ms-1 mb-1 fw-bold">Brandon Washington</p>
                                                    <small class="text-muted mb-0">162543121212</small>
                                                </div>
                                            </div>
                                            <div class="text-muted text-small">
                                            1h ago
                                            </div>
                                        </div>
                                        <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                            <div class="d-flex">
                                                <img class="img-sm rounded-10" src="{{ asset('template/images/faces/face2.jpg') }}" alt="profile">
                                                <div class="wrapper ms-3">
                                                    <p class="ms-1 mb-1 fw-bold">Wayne Murphy</p>
                                                    <small class="text-muted mb-0">162543</small>
                                                </div>
                                                </div>
                                                <div class="text-muted text-small">
                                                1h ago
                                                </div>
                                            </div>
                                                <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                    <div class="d-flex">
                                                        <img class="img-sm rounded-10" src="{{ asset('template/images/faces/face3.jpg') }}" alt="profile">
                                                    <div class="wrapper ms-3">
                                                    <p class="ms-1 mb-1 fw-bold">Katherine Butler</p>
                                                    <small class="text-muted mb-0">162543</small>
                                                </div>
                                            </div>
                                            <div class="text-muted text-small">
                                            1h ago
                                            </div>
                                        </div>
                                        <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                            <div class="d-flex">
                                            <img class="img-sm rounded-10" src="{{ asset('template/images/faces/face4.jpg') }}" alt="profile">
                                            <div class="wrapper ms-3">
                                                <p class="ms-1 mb-1 fw-bold">Matthew Bailey</p>
                                                <small class="text-muted mb-0">162543</small>
                                            </div>
                                            </div>
                                            <div class="text-muted text-small">
                                            1h ago
                                            </div>
                                        </div>
                                        <div class="wrapper d-flex align-items-center justify-content-between pt-2">
                                            <div class="d-flex">
                                            <img class="img-sm rounded-10" src="{{ asset('template/images/faces/face5.jpg') }}" alt="profile">
                                            <div class="wrapper ms-3">
                                                <p class="ms-1 mb-1 fw-bold">Rafell John</p>
                                                <small class="text-muted mb-0">Alaska, USA</small>
                                            </div>
                                            </div>
                                            <div class="text-muted text-small">
                                            1h ago
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end" style="margin-bottom: -30px;"><a href="#" class="btn fw-bold border-0 btn-warning text-white rounded-circle shadow-lg" style="padding: 10px 8px 10px 11px;"><i class="mdi mdi-arrow-up" style="font-size: 20px"></i></a></div>
    </div>
    </div>
</div>
@endsection
