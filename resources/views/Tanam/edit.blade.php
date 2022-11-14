@extends('layout.template')
@section('konten')
<link href="/css/warna.css" rel="stylesheet" />
<!-- START FORM -->
<body>
<form action='{{ url('tanam/'.$data->id_tanam) }}' method='post' enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="id_tanam" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" readonly name='id_tanam' value="{{ $data->id_tanam }}" id="id_tanam">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Penjual</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' value="{{ $data->nama }}" id="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="no_tlpn" class="col-sm-2 col-form-label">No Telpon</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='no_tlpn' value="{{ $data->no_tlpn }}" id="no_tlpn">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='alamat' value="{{ $data->alamat }}" id="alamat">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama_tanam" class="col-sm-2 col-form-label">Nama Tanaman</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama_tanam' value="{{$data->nama_tanam}}" id="nama_tanam">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">

                <input type="text" class="form-control" readonly name='kategori' value="{{ $data->kategori }}" id="kategori">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='harga' value="{{$data->harga}}" id="harga">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="stok" class="col-sm-2 col-form-label">Stok</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='stok' value="{{$data->stok}}" id="stok">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='keterangan' value="{{$data->keterangan}}" id="keterangan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="foto" class="col-sm-2 col-form-label">Foto</label>
            <div class="col-sm-10">
                <td><img style="max-width: 180px;" src="{{ url('foto').'/'. $data->foto }}" alt=""></td>
                <input type="file" class="form-control" name='foto' value="{{$data->foto}}" id="foto">
            </div>
        </div>
        <div class="col-sm-10"><button type="submit" class="btn btn-primary">Simpan</button>
        <a href='{{url('tanam')}}' class="btn btn-danger">Kembali</a>
    </div>
    </div>
    </div>
</form>
</body>
<!-- AKHIR FORM -->
@endsection