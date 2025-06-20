@extends('base.base-auth-index')
@section('content')
<section>
    <div class="page-header min-vh-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                    <img src="{{ asset('storage/images/web/site-logo.png')}}" alt="ESEC Logo" style="display: block; margin: 0 auto; max-width: 200px;">

                    <div class="card card-plain">
                        <div class="card-header pb-0 text-start">
                            <h4 class="font-weight-bolder">Forgot Password</h4>
                            <p class="mb-0">Enter your email for Reset Password</p>
                        </div>
                        @include('sweetalert::alert')
                        <div class="card-body">
                            <form action="{{ route('mahasiswa.auth-forgot-verify') }}" method="POST" role="form">
                                @csrf

                                <div class="mb-3">
                                    <input type="email" class="form-control form-control-lg" name="email" placeholder="Alamat email..." aria-label="Email">
                                    @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Check Users</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center pt-0 px-lg-2 px-1">
                            <p class="mb-0 text-sm mx-auto">
                                Have an account?
                                <a href="{{ route('mahasiswa.auth-signin-page') }}" class="text-primary text-gradient font-weight-bold">Login Here</a>
                            </p>
                            <p class="mb-0 text-sm mx-auto">
                                Back to home?
                                <a href="{{ route('root.home-index') }}" class="text-primary text-gradient font-weight-bold">Come Here</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                    <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('{{ asset('auth/assets/img/amdev.png') }}'); background-size: cover;">
                        <span class="mask bg-gradient-primary opacity-6"></span>
                        <h4 class="mt-5 text-white font-weight-bolder position-relative">Sistem Informasi Akademik</h4>
                        <p class="text-white font-weight-bolder position-relative">Platform terintegrasi untuk mengelola berbagai aspek akademik secara efisien dan efektif.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
