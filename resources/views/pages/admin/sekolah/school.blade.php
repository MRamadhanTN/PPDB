@extends('layout.dashboard_admin')
@section('title', 'PPDB Online')

@section('content')
<div class="tab-content tab-content-basic">
    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
        <div class="row">
            <div class="col-sm-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">Profile</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="address-tab" data-bs-toggle="tab" data-bs-target="#address" type="button" role="tab" aria-controls="address" aria-selected="false">Alamat</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Kontak</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="kepsek-tab" data-bs-toggle="tab" data-bs-target="#kepsek" type="button" role="tab" aria-controls="kepsek" aria-selected="false">Kepala Sekolah</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="container">
                                <div class="col-sm-12 mx-auto">
                                    <div class="card p-5" style="background: #f4f5f7;">
                                        <h1 class="text-center mb-5 fw-bold text-primary fs-1">Profil Sekolah</h1>
                                        <form class="d-flex flex-wrap">
                                            <div class="col-lg-4 col-sm-12 col-md-12 text-center my-4">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Logo_of_Ministry_of_Education_and_Culture_of_Republic_of_Indonesia.svg/1200px-Logo_of_Ministry_of_Education_and_Culture_of_Republic_of_Indonesia.svg.png" alt="logo-sekolah" width="250" height="250">
                                            </div>
                                            <div class="col-lg-8 col-sm-12 col-md-12">
                                                <div class="row mb-3 d-flex align-items-center">
                                                    <label for="NSM" class="col-sm-3 col-form-label">NSM</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" id="NSM" value="111111111111" readonly>
                                                    </div>
                                                </div>
                                                <div class="row mb-3 d-flex align-items-center">
                                                    <label for="NPSN" class="col-sm-3 col-form-label">NPSN</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" id="NPSN" value="112345678" readonly>
                                                    </div>
                                                </div>
                                                <div class="row mb-3 d-flex align-items-center">
                                                    <label for="name_school" class="col-sm-3 col-form-label">Nama Sekolah</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="name_school" value="SD Negeri 7 Sungai Raya" readonly>
                                                    </div>
                                                </div>
                                                <div class="row mb-3 d-flex align-items-center">
                                                    <label for="akreditasi" class="col-sm-3 col-form-label">Akreditasi</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="akreditasi" value="A" readonly>
                                                    </div>
                                                </div>
                                                <div class="row d-flex align-items-center">
                                                    <label for="status" class="col-sm-3 col-form-label">Status Sekolah</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="status" value="Aktif" readonly>
                                                    </div>
                                                </div>
                                                {{-- <button type="submit" class="btn btn-primary">Sign in</button> --}}
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                        <div class="row">
                            <div class="container">
                                <div class="col-sm-12 mx-auto">
                                    <div class="card p-5" style="background: #f4f5f7;">
                                        <h1 class="text-center mb-5 fw-bold text-primary fs-1">Alamat Sekolah</h1>
                                        <form class="d-flex flex-wrap">
                                            <div class="col-lg-4 col-sm-12 col-md-12 text-center my-4">
                                                <img src="https://cdn0-production-images-kly.akamaized.net/zB5yObgFlhMt9XC3DUyfTSWZQjc=/640x640/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1633836/original/001172300_1498393439-Google_Maps.jpg" alt="logo-sekolah" width="250" height="250" class="rounded">
                                            </div>
                                            <div class="col-lg-8 col-sm-12 col-md-12">
                                                <div class="row mb-3 d-flex align-items-center">
                                                    <label for="address" class="col-sm-3 col-form-label">Alamat Lengkap</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="address" value="Jalan Adiucipto Gg. Janur No.07" readonly>
                                                    </div>
                                                </div>
                                                <div class="row mb-3 d-flex align-items-center">
                                                    <label for="provinsi" class="col-sm-3 col-form-label">Provinsi</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="provinsi" value="Kalimantan Barat" readonly>
                                                    </div>
                                                </div>
                                                <div class="row mb-3 d-flex align-items-center">
                                                    <label for="kabupaten" class="col-sm-3 col-form-label">Kabupaten</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="kabupaten" value="Kubu Raya" readonly>
                                                    </div>
                                                </div>
                                                <div class="row mb-3 d-flex align-items-center">
                                                    <label for="kecamatan" class="col-sm-3 col-form-label">Kecamatan</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="kecamatan" value="Sungai Raya" readonly>
                                                    </div>
                                                </div>
                                                <div class="row d-flex align-items-center">
                                                    <label for="postal_code" class="col-sm-3 col-form-label">Kode Pos</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="postal_code" value="78891" readonly>
                                                    </div>
                                                </div>
                                                {{-- <button type="submit" class="btn btn-primary">Sign in</button> --}}
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row">
                            <div class="container">
                                <div class="col-sm-12 mx-auto">
                                    <div class="card p-5" style="background: #f4f5f7;">
                                        <h1 class="text-center mb-5 fw-bold text-primary fs-1">Kontak Sekolah</h1>
                                        <form class="d-flex flex-wrap">
                                            <div class="col-lg-4 col-sm-12 col-md-12 text-center my-4">
                                                <img src="https://sekolahpedia.id/mobile/template/img/icon/sd.png" alt="logo-sekolah" width="250" height="250" class="rounded">
                                            </div>
                                            <div class="col-lg-8 col-sm-12 col-md-12">
                                                <div class="row mb-3 d-flex align-items-center">
                                                    <label for="telp" class="col-sm-3 col-form-label">No. Telp</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" id="telp" value="0895380013428" readonly>
                                                    </div>
                                                </div>
                                                <div class="row mb-3 d-flex align-items-center">
                                                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="email" value="SDN_7_SuiRaya@gmail.com" readonly>
                                                    </div>
                                                </div>
                                                <div class="row mb-3 d-flex align-items-center">
                                                    <label for="web" class="col-sm-3 col-form-label">Website</label>
                                                    <div class="col-sm-9">
                                                        <input type="url" class="form-control" id="web" value="https://www.w3schools.com/html/html_form_input_types.asp" readonly>
                                                    </div>
                                                </div>
                                                <div class="row mb-3 d-flex align-items-center">
                                                    <label for="facebook" class="col-sm-3 col-form-label">Facebook</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="facebook" value="Sungai Raya" readonly>
                                                    </div>
                                                </div>
                                                <div class="row d-flex align-items-center">
                                                    <label for="ig" class="col-sm-3 col-form-label">Instagram</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="ig" value="78891" readonly>
                                                    </div>
                                                </div>
                                                {{-- <button type="submit" class="btn btn-primary">Sign in</button> --}}
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="kepsek" role="tabpanel" aria-labelledby="kepsek-tab">
                        <div class="row">
                            <div class="container">
                                <div class="col-sm-12 mx-auto">
                                    <div class="card p-5" style="background: #f4f5f7;">
                                        <h1 class="text-center mb-5 fw-bold text-primary fs-1">Kepala Sekolah</h1>
                                        <form class="d-flex flex-wrap">
                                            <div class="col-lg-4 col-sm-12 col-md-12 text-center my-4">
                                                <img src="https://sman5metro.sch.id/storage/pegawai/thumbnail/IMG_20210918_214126.jpg" alt="logo-sekolah" width="250" height="300" class="rounded">
                                            </div>
                                            <div class="col-lg-8 col-sm-12 col-md-12">
                                                <div class="row mb-3 d-flex align-items-center">
                                                    <label for="kepsek" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="kepsek" value="Sukandi .S.Pd" readonly>
                                                    </div>
                                                </div>
                                                <div class="row mb-3 d-flex align-items-center">
                                                    <label for="NIP_kepsek" class="col-sm-3 col-form-label">NIP</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="NIP_kepsek" value="123456789012" readonly>
                                                    </div>
                                                </div>
                                                <div class="row mb-3 d-flex align-items-center">
                                                    <label for="address_kepsek" class="col-sm-3 col-form-label">Alamat</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="address_kepsek" value="Jalan Adisucipto km.12,5 Gg. Durian Runtuh" readonly>
                                                    </div>
                                                </div>
                                                {{-- <button type="submit" class="btn btn-primary">Sign in</button> --}}
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-5"><a href="#" class="btn fw-bold border-0 btn-warning text-white rounded-circle shadow-lg" style="padding: 10px 8px 10px 11px; margin-bottom: -30px;"><i class="mdi mdi-arrow-up" style="font-size: 20px"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('buttonExport')
    <a href="#" class="btn btn-outline-info">Print</a>
    <a href="#" class="btn btn-outline-warning">Export Template</a>
    <a href="#" class="btn btn-outline-primary">Import</a>
@endpush

@push('breadcrumb')
    <li class="breadcrumb-item"><a class="text-decoration-none fs-6" href="{{ route('Admin') }}">Dashboard</a></li>
    <li class="breadcrumb-item active fs-6" aria-current="page">Data Sekolah</li>
@endpush
