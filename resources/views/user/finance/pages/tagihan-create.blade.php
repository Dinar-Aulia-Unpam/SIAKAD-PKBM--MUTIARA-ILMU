@extends('base.base-dash-index')
@section('title')
    Data Tagihan - Siakad By PKBM Mutiara Ilmu
@endsection
@section('menu')
    Data Tagihan
@endsection
@section('submenu')
    Tambah
@endsection
@section('urlmenu')
    {{ route($prefix . 'finance.tagihan-index') }}
@endsection
@section('subdesc')
    Halaman untuk melihat data tagihan
@endsection
@section('custom-css')
    <style>
        @media (max-width: 768px) {
            .card-body {
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .icon {
                margin: 10px 0;
            }

            .text-putih {
                margin-left: 0px !important;
                /* Mengatur margin-left menjadi 0 */
                margin-top: 10px;
                margin-bottom: 10px;
            }
        }
    </style>
@endsection
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="row">
                    <div class="col-lg-3 col-6 mb-2">
                        <a href="{{ route($prefix . 'finance.tagihan-index') }}">
                            <div class="card btn btn-outline-success">
                                <div class="card-body d-flex justify-content-around align-items-center">
                                    <span class="icon" style="margin-right: 25px;"><i class="fa-solid fa-file-invoice" style="font-size: 42px"></i></span>
                                    <span class="text-putih" style="margin-left: 25px; font-size: 16px;">{{ \App\Models\TagihanKuliah::all()->count() }}<br> Tagihan</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6 mb-2">
                        <a href="{{ route($prefix . 'finance.pembayaran-index') }}">
                            <div class="card btn btn-outline-success">
                                <div class="card-body d-flex justify-content-around align-items-center">
                                    <span class="icon" style="margin-right: 25px;"><i class="fa-solid fa-file-invoice-dollar" style="font-size: 42px"></i></span>
                                    <span class="text-putih" style="margin-left: 25px; font-size: 16px;">{{ \App\Models\HistoryTagihan::where('stat', 1)->count() }}<br> Pembayaran</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6 mb-2">
                        <a href="{{ route($prefix . 'finance.keuangan-index') }}">
                            <div class="card btn btn-outline-success">
                                <div class="card-body d-flex justify-content-around align-items-center">
                                    <span class="icon" style="margin-right: 25px;"><i class="fa-solid fa-dollar" style="font-size: 42px"></i></span>
                                    <span class="text-putih" style="margin-left: 25px; font-size: 16px;">{{ number_format($income, 0, ',', '.') }}<br> Income ( IDR )</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-12 mb-2">
                <form action="{{ route($prefix . 'finance.tagihan-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title">@yield('submenu')@yield('menu')</h5>
                            <div class="">
                                <a href="{{ route($prefix . 'finance.tagihan-index') }}" class="btn btn-outline-warning"><i class="fa-solid fa-backward"></i></a>
                                <button type="submit" class="btn btn-outline-primary"><i class="fa-solid fa-paper-plane"></i></button>
                            </div>

                        </div>
                        <div class="card-body row">
                            <div class="form-group col-lg-6 col-12">
                                <label for="name">Nama Tagihan</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Nama tagihan...">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-lg-6 col-12">
                                <label for="price">Nominal Tagihan</label>
                                <input type="text" name="price" id="price" class="form-control" placeholder="Nominal tagihan...">
                                @error('price')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-lg-4 col-12">
                                <label for="users_id">Tagihan Mahasiswa</label>
                                <select name="users_id" id="users_id" class="choices form-select">
                                    <option value="0" selected>Pilih Mahasiswa</option>
                                    @foreach ($mahasiswa as $item)
                                        <option value="{{ $item->id }}">{{ $item->mhs_name }}</option>
                                    @endforeach
                                </select>
                                @error('users_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-lg-4 col-12">
                                <label for="prodi_id">Tagihan Program Studi</label>
                                <select name="prodi_id" id="prodi_id" class="choices form-select">
                                    <option value="0" selected>Pilih Program Studi</option>
                                    @foreach ($prodi as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('prodi_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-lg-4 col-12">
                                <label for="proku_id">Tagihan Program Kuliah</label>
                                <select name="proku_id" id="proku_id" class="choices form-select">
                                    <option value="0" selected>Pilih Program Kuliah</option>
                                    @foreach ($proku as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('proku_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-12 col-12 mb-2">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title">Data Tagihan Terbaru</h5>
                        <div class="">
                            <a href="{{ route($prefix . 'finance.tagihan-index') }}" class="btn btn-outline-warning"><i class="fa-solid fa-backward"></i></a>
                            {{-- <a href="#" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a> --}}
                        </div>

                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <th class="text-center">#</th>
                                <th class="text-center">Kode Tagihan</th>
                                <th class="text-center">Nama Tagihan</th>
                                <th class="text-center">Type Tagihan</th>
                                <th class="text-center">Tagihan</th>
                                <th class="text-center">Nominal</th>
                                <th class="text-center">Button</th>
                            </thead>
                            <tbody>
                                @foreach ($tagihan as $key => $item)
                                    <tr class="">
                                        <td data-label="Number">{{ ++$key }}</td>
                                        <td data-label="Kode Tagihan"><span style="text-transform: uppercase">{{ $item->code }}</span></td>
                                        <td data-label="Nama Tagihan">{{ $item->name }}</td>
                                        <td data-label="Type Tagihan">
                                            @if ($item->proku_id > 0)
                                                Type Global
                                            @elseif($item->prodi_id > 0)
                                                Type Pribadi
                                            @elseif($item->users_id > 0)
                                                Type Pribadi
                                            @endif
                                        </td>
                                        <td data-label="Tagihan Kepada">
                                            @if ($item->proku_id !== 0 && $item->prokuu)
                                                Program Kuliah
                                                <br>
                                                {{ $item->prokuu->name }}
                                            @elseif($item->prodi_id !== 0 && $item->prodi)
                                                Program Studi
                                                <br>
                                                {{ $item->prodi->name }}
                                            @elseif($item->users_id !== 0 && $item->mahasiswa)
                                                Mahasiswa
                                                <br>
                                                {{ $item->mahasiswa->mhs_name }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td data-label="Nominal">Rp. {{ number_format($item->price, 0, ',', '.') }}</td>
                                        {{-- <td data-label="Tagihan Kepada">{{ $item->users_id === 0 ? $item->proku->name : $item->users->mhs_name }}</td> --}}
                                        <td class="d-flex justify-content-center align-items-center">
                                            <a href="#" style="margin-right: 10px" data-bs-toggle="modal" data-bs-target="#updateTagihan{{ $item->code }}" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                            <form id="delete-form-{{ $item->code }}" action="{{ route($prefix . 'finance.tagihan-destroy', $item->code) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a type="button" class="bs-tooltip btn btn-rounded btn-outline-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete" data-url="{{ route($prefix . 'finance.tagihan-destroy', $item->code) }}" data-name="{{ $item->name }}" onclick="deleteData('{{ $item->code }}')">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="me-1 mb-1 d-inline-block">

        <!--Extra Large Modal -->
        @foreach ($tagihan as $item)
            <form action="{{ route($prefix . 'finance.tagihan-update', $item->code) }}" method="POST" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="modal fade text-left w-100" id="updateTagihan{{ $item->code }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel16">Edit Tagihan - {{ $item->name }}</h4>
                                <div class="">

                                    <button type="submit" class="mt-1 btn btn-outline-primary">
                                        <i class="fas fa-paper-plane"></i>
                                    </button>
                                    <button type="button" class="mt-1 btn btn-outline-danger" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="modal-body row">
                                <div class="form-group col-lg-6 col-12">
                                    <label for="name">Nama Tagihan</label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ $item->name }}" placeholder="Nama tagihan...">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-6 col-12">
                                    <label for="price">Nominal Tagihan</label>
                                    <input type="text" name="price" id="price" class="form-control" value="{{ $item->price }}" placeholder="Nominal tagihan...">
                                    @error('price')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-4 col-12">
                                    <label for="users_id">Tagihan Mahasiswa</label>
                                    <select name="users_id" id="users_id" class="choices form-select">
                                        <option value="0" selected>Pilih Mahasiswa</option>
                                        @foreach ($mahasiswa as $mhs)
                                            <option value="{{ $mhs->id }}" {{ $item->users_id == $mhs->id ? 'selected' : '' }}>{{ $mhs->mhs_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('users_id')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-4 col-12">
                                    <label for="prodi_id">Tagihan Program Studi</label>
                                    <select name="prodi_id" id="prodi_id" class="choices form-select">
                                        <option value="0" selected>Pilih Program Studi</option>
                                        @foreach ($prodi as $prd)
                                            <option value="{{ $prd->id }}" {{ $item->prodi_id == $prd->id ? 'selected' : '' }}>{{ $prd->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('prodi_id')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-4 col-12">
                                    <label for="proku_id">Tagihan Program Kuliah</label>
                                    <select name="proku_id" id="proku_id" class="choices form-select">
                                        <option value="0" selected>Pilih Program Kuliah</option>
                                        @foreach ($proku as $prk)
                                            <option value="{{ $prk->id }}" {{ $item->proku_id == $prk->id ? 'selected' : '' }}>{{ $prk->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('proku_id')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        @endforeach
    </div>
@endsection
@section('custom-js')
    <script src="{{ asset('dist') }}/assets/extensions/choices.js/public/assets/scripts/choices.js"></script>
    <script src="{{ asset('dist') }}/assets/static/js/pages/form-element-select.js"></script>
@endsection
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('dist') }}/assets/extensions/choices.js/public/assets/styles/choices.css">
@endsection
