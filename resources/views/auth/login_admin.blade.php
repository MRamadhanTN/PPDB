@extends('layout.login_admin')
@section('title', 'PPDB Online')

@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 admin">
        <form action="#" class="form-admin p-5 shadow m-auto">
            <div class="title text-center mb-5">
                <h1>Login Admin</h1>
            </div>
            <div class="form-floating mb-4">
                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center" style="font-size: 15px; color: #EFEFEF;">
                        <input type="checkbox" onclick="myFunction()">&nbsp; Show Password
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button class="btn btn-primary px-4">Sign In</button>
            </div>
        </form>
    </div>
@endsection

@push('afterCss')
    <style>
        .admin {
            padding-top: 120px;
            height: 100%;
        }

        .form-admin {
            width: 75vh;
            border-radius: 15px;
            background: #f4813f;
        }

        .title {
            color: #efefef !important;
        }
    </style>
@endpush

@push('afterScript')
    <script>
        // login-admin
        gsap.from('.nav-admin', {duration: 0.5, opacity: 0, y: -50, delay: 1.5, ease: 'back',});
    </script>
@endpush
