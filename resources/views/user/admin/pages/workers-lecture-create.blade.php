@extends('base.base-dash-index')
@section('title')
    Data Pengguna Dosen - Siakad By PKBM Mutiara Ilmu
@endsection
@section('menu')
    Data Pengguna Dosen
@endsection
@section('submenu')
    Tambah Dosen
@endsection
@section('urlmenu')
    {{ route('web-admin.workers.lecture-index') }}
@endsection
@section('subdesc')
    Halaman untuk menambah data pengguna Dosen
@endsection
@section('content')

<form action="{{ route('web-admin.workers.lecture-store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <section class="section row">
        <div class="col-lg-4 col-12">

            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h4 class="card-title">Ubah Foto Profile</h4>
                    <div class="">
                        <a href="@yield('urlmenu')" class="btn btn-outline-warning"><i class="fa-solid fa-backward"></i></a>
                        <button type="submit" class="btn btn-outline-primary"><i class="fa-solid fa-paper-plane"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <img src="{{ asset('storage/images/default/default-profile.jpg') }}" class="card-img-top" alt="">
                    <hr>
                    <div class="form-group">
                        <label for="dsn_image">Upload Foto Profile</label>
                        <div class="d-flex justify-content-between align-items-center">

                            <input type="file" class="form-control" name="dsn_image" id="dsn_image">
                            @error('dsn_image')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            {{-- <button type="submit" class="btn btn-outline-primary" style="margin-left: 10px"><i class="fa-solid fa-paper-plane"></i></button> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-12">

            <div class="card">
                <div class="card-body">

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa-solid fa-id-card" style="margin-right: 5px"></i> Data Personal</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="fa-solid fa-address-book" style="margin-right: 5px"></i> Data Kontak</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fa-solid fa-user-lock" style="margin-right: 5px;"></i> Pengaturan Akun</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                            <hr>
                            <div class="row">
                                <div class="form-group col-lg-6 col-12">
                                    <label for="dsn_name">Nama Lengkap</label>
                                    <input type="text" name="dsn_name" id="dsn_name" class="form-control" placeholder="Nama lengkap..." >
                                    @error('dsn_name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-6 col-12">
                                    <label for="dsn_nidn">NIDN</label>
                                    <input type="text" name="dsn_nidn" id="dsn_nidn" class="form-control" placeholder="Username..." >
                                    @error('dsn_nidn')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-6 col-12">
                                    <label for="dsn_user">Username</label>
                                    <input type="text" name="dsn_user" id="dsn_user" class="form-control" placeholder="Username..."  >
                                    @error('dsn_user')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-6 col-12">
                                    <label for="dsn_gend">Jenis Kelamin</label>
                                    <select name="dsn_gend" id="dsn_gend" class="form-select" >
                                        <option value="" selected>Pilih Jenis Kelamin</option>
                                        <option value="L" >Laki Laki</option>
                                        <option value="P" >Perempuan</option>
                                    </select>
                                    @error('dsn_gend')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-6 col-12">
                                    <label for="dsn_birthplace">Tempat Lahir</label>
                                    <input type="text" name="dsn_birthplace" id="dsn_birthplace" class="form-control" placeholder="Tempat Lahir..."  >
                                    @error('dsn_birthplace')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-6 col-12">
                                    <label for="dsn_birthdate">Tanggal Lahir</label>
                                    <input type="date" name="dsn_birthdate" id="dsn_birthdate" class="form-control" placeholder="Tanggal Lahir..." >
                                    @error('dsn_birthdate')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="d-flex justify-content-end align-items-center">
                                    {{-- <button type="submit" class="btn btn-outline-primary"><i class="fa-solid fa-save"></i> Save</button> --}}
                                </div>
                            </div>


                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <hr>
                            <div class="row">
                                <div class="form-group col-lg-6 col-12">
                                    <label for="dsn_phone">Nomor HandPhone</label>
                                    <input type="text" class="form-control" name="dsn_phone" id="dsn_phone" placeholder="Inputkan nomor telepon..." >
                                    @error('dsn_phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-6 col-12">
                                    <label for="dsn_mail">Alamat Email</label>
                                    <input type="text" class="form-control" name="dsn_mail" id="dsn_mail" placeholder="Inputkan alamat email..." >
                                    @error('dsn_mail')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <hr>
                            <div class="row">
                                <div style="display: block" class="form-group col-lg-6 col-12">
                                    <label for="dsn_stat">Status Member</label>
                                    <select name="dsn_stat" id="dsn_stat" class="form-select">
                                        {{-- <option selected disabled>Pilih Tipe Member</option> --}}
                                        <optgroup label="Pilih Status Users">
                                            <option value="0"  >Non-Active</option>
                                            <option value="1" >Active</option>
                                        </optgroup>
                                    </select>
                                    @error('dsn_stat')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div style="display: none" class="form-group col-lg-6 col-12">
                                    <label for="type">Type Users</label>
                                    <select name="type" id="type" class="form-select">
                                        <option value="" selected>Pilih Role Users</option>
                                        <option value="0" >Web Administrator</option>
                                        <option value="1" >Koordinator Program</option>
                                        <option value="2" >Staff Administrasi</option>
                                        <option value="3" >Staff Akademik</option>
                                        <option value="4" >Staff Sarana dan Prasarana</option>


                                    </select>
                                    @error('type')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-6 col-12">
                                    <label for="newPassword">Password Baru</label>
                                    <div class="d-flex justify-content-between align-items-center">

                                        <input type="password" class="form-control" name="password" id="newPassword" placeholder="Inputkan password...">
                                        <span class="btn btn-sm btn-outline-danger" style="margin-left: 5px" id="showPasswordButton"><i class="fa-solid fa-eye"></i></span>
                                    </div>
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-6 col-12">
                                    <label for="newPasswordKonfirm">Konfirmasi Password Baru</label>
                                    <div class="d-flex justify-content-between align-items-center">

                                        <input type="password" class="form-control" name="password_confirm" id="newPasswordKonfirm" placeholder="Inputkan konfirmasi password...">
                                        <span class="btn btn-sm btn-outline-danger" style="margin-left: 5px" id="showPasswordButton"><i class="fa-solid fa-eye"></i></span>
                                    </div>
                                    @error('password_confirm')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="d-flex justify-content-end align-items-center">
                                    {{-- <button type="submit" class="btn btn-outline-primary"><i class="fa-solid fa-save"></i> Save</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</form>
@endsection
@section('custom-js')
    <script>
        document.getElementById("image").onchange = function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.querySelector('.card-img-top');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
    </script>
    <script>
        const showPasswordButtons = document.querySelectorAll('.btn-outline-danger');
        showPasswordButtons.forEach((btn, index) => {
            const passwordInput = btn.previousElementSibling;
            btn.addEventListener('click', () => {
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text'; // Show password
                    btn.innerHTML = '<i class="fa-solid fa-eye-slash"></i>'; // Change icon to eye-slash
                } else {
                    passwordInput.type = 'password'; // Hide password
                    btn.innerHTML = '<i class="fa-solid fa-eye"></i>'; // Change icon back to eye
                }
            });
        });
    </script>
@endsection
