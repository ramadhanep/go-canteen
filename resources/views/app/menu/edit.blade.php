@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('template/modules/jquery-selectric/selectric.css') }}">
<script src="{{ asset('template/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
<script src="{{ asset('template/modules/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>
<section class="section">
    <div class="section-header">
        <h1>Data Menu</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Data</a></div>
            <div class="breadcrumb-item"><a href="#">Menu</a></div>
            <div class="breadcrumb-item">Edit</div>
        </div>
    </div>
    <div class="row">
        <form method="POST" action="{{ route('menuUpdate', $menu->id) }}" enctype="multipart/form-data" class="needs-validation" novalidate="" style="width: 100%;display: flex;flex-wrap:wrap;">
            @csrf
            <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Foto Kategori</h4>
                    </div>
                    <div class="card-body">
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Menu</h4>
                    </div>
                    @php
                        $m = \App\Menu::all();
                    @endphp
                    @foreach($m as $menu)
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <div class="form-group">
                                    <label>Nama Barang</label>
                                    <input type="text" class="form-control" name="nama" required="" value="{{ $menu->nama }}">
                                    <div class="invalid-feedback">
                                        Form Nama Kantin harus diisi!
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="id_kantin" value="{{$menu->id_kantin}}">
                            <div class="col-12 col-lg-12">
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <input type="text" class="form-control" name="kategori" required="" value="{{ $menu->kategori }}">
                                    <div class="invalid-feedback">
                                        Form Nama Kantin harus diisi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class="form-group">
                                    <label>Stok</label>
                                    <input type="text" class="form-control" name="stok" required="" value="{{ $menu->stok }}">
                                    <div class="invalid-feedback">
                                        Form Nama Kantin harus diisi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="file" class="form-control" name="gambar" value="{{ $menu->gambar }}">
                                    <div class="invalid-feedback">
                                        Form Nama Kantin harus diisi!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="text" class="form-control" name="harga" required="" value="{{ $menu->harga }}">
                                    <div class="invalid-feedback">
                                        Form Nama Kantin harus diisi!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                            <label class="custom-control-label" for="customCheck1">Setuju, dan sudah memeriksa data dengan benar.</label>
                        </div>
                    </div>
                    @endforeach
                    <div class="card-footer text-right">
                        <button class="btn btn-primary" id="submit-btn">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<script>
    $('#barangMenuLink').addClass('active');
    $('#jenisBarangLink').addClass('active');
</script>
<script src="{{ asset('template/js/page/features-post-create.js') }}"></script>
@endsection