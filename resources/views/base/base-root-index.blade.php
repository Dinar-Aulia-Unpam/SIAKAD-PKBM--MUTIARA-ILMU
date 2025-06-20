<!-- resources/views/base/base-root-index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $menu . $title }}</title>
    {{-- <link rel="shortcut icon" href="{{ asset('storage/images/'. $web->school_logo) }}" type="image/x-icon"> --}}
    <link rel="shortcut icon" href="{{ asset('dist') }}/assets/compiled/svg/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('dist') }}/assets/compiled/css/app.css">
    <link rel="stylesheet" href="{{ asset('dist') }}/assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="{{ asset('dist') }}/assets/compiled/css/iconly.css">
    <link rel="stylesheet" href="{{ asset('dist') }}/assets/custom/css/news-section.css">
    {{-- PLUGIN FONT AWESOME --}}
    <link rel="stylesheet" href="{{ asset('vendor') }}/fontawesome/css/all.min.css" rel="stylesheet">
    <style>
        .fontawesome-icons {
            text-align: center;
        }
        article dl {
            background-color: rgba(0, 0, 0, .02);
            padding: 20px;
        }
        .fontawesome-icons .the-icon {
            font-size: 24px;
            line-height: 1.2;
        }
        .berita img {
            max-width: 125px
        }
        @media screen and (max-width: 767px) {
            .footer {
                display: flex;
                flex-direction: column;
                align-items: center;
                /* Tulisan menjadi rata tengah secara horizontal */
            }
            .berita img {
                width: 100%;
                max-width: none;
            }
            .berita a {
                text-align: center !important;
                /* Menambahkan !important agar lebih dominan */
            }
            .berita p {
                /* text-align: justify; */
            }
        }
    </style>
</head>
<body>
    <script src="{{ asset('dist') }}/assets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                <div class="header-top">
                    <div class="container">
                        <div class="logo">
                            <a href="{{ route('root.home-index') }}" style="font-size: 24px"> {{ $web->school_name }}</a>
                        </div>
                        <div class="header-top-right">
                            <div class="dropdown">
                                <a href="#" id="topbarUserDropdown" class="user-dropdown d-flex align-items-center dropend dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
                                    @if (Auth::guard('dosen')->check())
                                    <div class="avatar avatar-md2">
                                        <img src="{{ asset('storage/images/' . Auth::guard('dosen')->user()->dsn_image) }}" alt="Avatar">
                                    </div>
                                    <div class="text">
                                        <h6 class="user-dropdown-name">{{ Auth::guard('dosen')->user()->dsn_name }}</h6>
                                        <p class="user-dropdown-status text-sm text-muted">{{ Auth::guard('dosen')->user()->dsn_stat }}</p>
                                    </div>
                                    @elseif(Auth::guard('mahasiswa')->check())
                                    <div class="avatar avatar-md2">
                                        <img src="{{ asset('storage/images/' . Auth::guard('mahasiswa')->user()->mhs_image) }}" alt="Avatar">
                                    </div>
                                    <div class="text">
                                        <h6 class="user-dropdown-name">{{ Auth::guard('mahasiswa')->user()->mhs_name }}</h6>
                                        <p class="user-dropdown-status text-sm text-muted">{{ Auth::guard('mahasiswa')->user()->mhs_stat }}</p>
                                    </div>
                                    @elseif(Auth::check())
                                    <div class="avatar avatar-md2">
                                        <img src="{{ asset('storage/images/' . Auth::user()->image) }}" alt="Avatar">
                                    </div>
                                    <div class="text">
                                        <h6 class="user-dropdown-name">{{ Auth::user()->name }}</h6>
                                        <p class="user-dropdown-status text-sm text-muted">{{ Auth::user()->type }}</p>
                                    </div>
                                    @else
                                    <div class="avatar avatar-md2">
                                        <!-- <img src="{{ asset('storage/images/default/default-profile.jpg') }}" alt="Avatar"> -->
                                    </div>
                                    <div class="text">
                                        <h6 class="user-dropdown-name"><i class="fas fa-sign-in-alt"></i> Login</h6>
                                    </div>
                                    @endif
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
                                    @if (Auth::guard('dosen')->check())
                                    <li><a class="dropdown-item" href="{{ route('dosen.home-profile') }}">My Account</a></li>
                                    <li><a class="dropdown-item" href="{{ route('dosen.auth-signout-post') }}">Logout</a></li>
                                    @elseif(Auth::guard('mahasiswa')->check())
                                    <li><a class="dropdown-item" href="{{ route('mahasiswa.home-profile') }}">My Account</a></li>
                                    <li><a class="dropdown-item" href="{{ route('mahasiswa.auth-signout-post') }}">Logout</a></li>
                                    @elseif(Auth::check())
                                    <li><a class="dropdown-item" href="{{ route($prefix . 'home-profile') }}">My Account</a></li>
                                    <li><a class="dropdown-item" href="{{ route($prefix . 'auth-signout-post') }}">Logout</a></li>
                                    @else
                                    <li><a class="dropdown-item" href="{{ route('mahasiswa.auth-signin-page') }}"><i class="fas fa-user-graduate"></i> Login Mahasiswa</a></li>
                                    <li><a class="dropdown-item" href="{{ route('dosen.auth-signin-page') }}"><i class="fas fa-chalkboard-teacher"></i> Login Dosen</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.auth-signin-page') }}"><i class="fas fa-user-tie"></i> Login Admin / Pegawai</a></li>
                                    @endif
                                </ul>
                            </div>
                            <!-- Burger button responsive -->
                            <a href="#" class="burger-btn d-block d-xl-none">
                                <i class="bi bi-justify fs-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="main-navbar">
                    <div class="container">
                        <ul>
                            <li class="menu-item">
                                <a href="{{ route('root.home-index') }}" class='menu-link'>
                                    <span><i class="fa-solid fa-home"></i> Home</span>
                                </a>
                            </li>
                            <li class="menu-item  has-sub">
                                <a href="#" class='menu-link'>
                                    <span><i class="fa-solid fa-graduation-cap"></i> Admission</span>
                                </a>
                                <div class="submenu">
                                    <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                                    <div class="submenu-group-wrapper">
                                        <ul class="submenu-group">
                                            @foreach ($fakultas as $faku)
                                            <li class="submenu-item  has-sub">
                                                <a href="#" class='submenu-link'>{{ $faku->name }}</a>
                                                <!-- 3 Level Submenu -->
                                                <ul class="subsubmenu">
                                                    @php
                                                    $pstudi = \App\Models\ProgramStudi::where('faku_id', $faku->id)->get();
                                                    @endphp
                                                    @foreach ($pstudi as $item)
                                                    <li class="subsubmenu-item ">
                                                        <a href="{{ route('root.home-prodi', $item->slug) }}" class="subsubmenu-link">{{ $item->name }}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('root.about-index') }}" class='menu-link'>
                                    <span><i class="fa-solid fa-book"></i> Tentang Kami</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('root.contact-index') }}" class='menu-link'>
                                    <span><i class="fa-solid fa-phone"></i> Kontak Kami</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('root.home-service') }}" class='menu-link'>
                                    <span><i class="fa-solid fa-circle-info"></i> Pelayanan</span>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="{{ route('root.home-advice') }}" class='menu-link'>
                                    <span><i class="fa-solid fa-envelope-open-text"></i> Saran dan Masukan</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <div class="content-wrapper container">
                @include('sweetalert::alert')
                @yield('content')
            </div>
            <footer>
                <div class="container">
                    @include('base.panel.base-panel-footer')
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('dist') }}/assets/static/js/components/dark.js"></script>
    <script src="{{ asset('dist') }}/assets/static/js/pages/horizontal-layout.js"></script>
    <script src="{{ asset('dist') }}/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('dist') }}/assets/compiled/js/app.js"></script>
    <script src="{{ asset('dist') }}/assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('dist') }}/assets/static/js/pages/dashboard.js"></script>
    @yield('custom-js')
</body>
</html>
