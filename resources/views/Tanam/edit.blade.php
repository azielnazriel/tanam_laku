@extends('layout.template')
@section('konten')
<!-- START FORM -->
<form action='{{ url('tanam/'.$data->id_tanam) }}' method='post' enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="id_tanam" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-10">
                {{ $data->id_tanam }}
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

                <input type="text" class="form-control" readonly name='harga' value="{{ $data->kategori }}" id="harga">
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
                <input type="file" class="form-control" name='foto' value="{{ url('foto').'/'. $data->foto }}" id="foto">
            </div>
        </div>
        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">Simpan</button></div>
    </div>
    </div>
</form>
<!-- AKHIR FORM -->
@endsection