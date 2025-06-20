@extends('base.base-dash-index')
@section('title')
    Data Master Ruang - Siakad By PKBM Mutiara Ilmu
@endsection
@section('menu')
    Data Master Ruang
@endsection
@section('submenu')
    Daftar Data Ruang
@endsection
@section('submenu0')
    Tambah Data Ruang
@endsection
@section('urlmenu')
    #
@endsection
@section('subdesc')
    Halaman untuk mengelola Data Ruang
@endsection
@section('content')
<section class="section row">

    <div class="col-lg-4 col-12">
        <form action="{{ route($prefix.'inventory.ruang-store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title">@yield('submenu0')</h5>
                    <button type="submit" class="btn btn-outline-primary"><i class="fa-solid fa-paper-plane"></i></button>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="gedu_id">Gedung</label>
                        <select name="gedu_id" id="gedu_id" class="form-select">
                            <option value="" selected>Pilih Gedung</option>
                            @foreach ($gedung as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('gedu_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="type">Type Ruang</label>
                        <select name="type" id="type" class="form-select">
                            <option value="" selected>Pilih Type Ruang</option>
                            <option value="0" >Ruang Kelas</option>
                            <option value="1" >Ruang Laboratorium </option>
                            <option value="2" >Ruang Kerja </option>
                            <option value="3" >Ruang Pribadi </option>
                            <option value="4" >Fasilitas Umum </option>
                        </select>
                        @error('type')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="floor">Lokasi Lantai Gedung</label>
                        <input type="number" class="form-control" name="floor" id="floor" placeholder="Ada dilantai berapa ruangan ini?...">
                        @error('floor')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">Nama Ruangan</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Inputkan nama ruangan...">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="code">Kode Ruangan ( 5 Huruf Bebas )</label>
                        <input type="text" class="form-control" name="code" id="code" placeholder="Inputkan kode ruangan..." maxlength="5" uppercase onkeydown="return /[a-zA-Z0-9]/i.test(event.key)" >
                        @error('code')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-lg-8 col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">@yield('submenu')</h5>

            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <th class="text-center">#</th>
                        <th class="text-center">Nama Gedung</th>
                        <th class="text-center">Nama Ruangan</th>
                        <th class="text-center">Kode Ruangan</th>
                        <th class="text-center">Button</th>
                    </thead>
                    <tbody>
                        @foreach ($ruang as $key => $item)
                            <tr >
                                <td data-label="Number">{{ ++$key }}</td>
                                <td data-label="Nama Gedung">{{ $item->gedung->name . ' - Lantai ' . $item->floor }}</td>
                                <td data-label="Nama Ruang">{{ $item->type . ' - ' .$item->name }}</td>
                                <td data-label="Kode Ruang">{{ $item->code }}</td>
                                <td class="d-flex justify-content-center align-items-center">
                                    <a href="#" style="margin-right: 10px" data-bs-toggle="modal" data-bs-target="#updateRuang{{ $item->code }}" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                                    {{-- <a href="{{ route($prefix.'staffmanager-dosen-view', $item->code) }}"  style="margin-right: 10px" class="btn btn-outline-info"><i class="fa-solid fa-eye"></i></a> --}}
                                    <form id="delete-form-{{ $item->code }}"
                                        action="{{ route($prefix.'inventory.ruang-destroy', $item->code) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a type="button" class="bs-tooltip btn btn-rounded btn-outline-danger"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"
                                            data-original-title="Delete"
                                            data-url="{{ route($prefix.'inventory.ruang-destroy', $item->code) }}"
                                            data-name="{{ $item->name }}"
                                            onclick="deleteData('{{ $item->code }}')">
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

</section>
<div class="me-1 mb-1 d-inline-block">

    <!--Extra Large Modal -->
    @foreach ($ruang as $item)
    <form action="{{ route($prefix.'inventory.ruang-update', $item->code) }}" method="POST" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="modal fade text-left w-100" id="updateRuang{{$item->code}}" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel16" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-l"
                role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel16">Edit Ruang - {{ $item->name }}</h4>
                        <div class="">
    
                            <button type="submit" class="btn btn-outline-primary" >
                                <i class="fas fa-paper-plane"></i>
                            </button>
                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"
                                aria-label="Close">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group">
                                <label for="gedu_id">Gedung</label>
                                <select name="gedu_id" id="gedu_id" class="form-select">
                                    <option value="" selected>Pilih Gedung</option>
                                    @foreach ($gedung as $gd)
                                        <option value="{{ $gd->id }}" {{ $item->gedu_id == $gd->id ? 'selected' : '' }}>{{ $gd->name }}</option>
                                    @endforeach
                                </select>
                                @error('gedu_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="type">Type Ruang</label>
                                <select name="type" id="type" class="form-select">
                                    <option value="" selected>Pilih Type Ruang</option>
                                    <option value="0" {{ $item->raw_type == 0 ? 'selected' : '' }} >Ruang Kelas</option>
                                    <option value="1" {{ $item->raw_type == 1 ? 'selected' : '' }}>Ruang Laboratorium </option>
                                    <option value="2" {{ $item->raw_type == 2 ? 'selected' : '' }}>Ruang Kerja </option>
                                    <option value="3" {{ $item->raw_type == 3 ? 'selected' : '' }}>Ruang Pribadi </option>
                                    <option value="4" {{ $item->raw_type == 4 ? 'selected' : '' }}>Fasilitas Umum </option>
                                </select>
                                @error('type')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="floor">Lokasi Lantai Gedung</label>
                                <input type="number" class="form-control" name="floor" id="floor" value="{{ $item->floor }}" placeholder="Ada dilantai berapa ruangan ini?...">
                                @error('floor')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Nama Ruangan</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{ $item->name }}" placeholder="Inputkan nama ruangan...">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="code">Kode Ruangan ( 5 Huruf Bebas )</label>
                                <input type="text" class="form-control" name="code" id="code" value="{{ $item->code }}" placeholder="Inputkan kode ruangan..." maxlength="5" uppercase onkeydown="return /[a-zA-Z0-9]/i.test(event.key)" >
                                @error('code')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @endforeach
</div>
@endsection
