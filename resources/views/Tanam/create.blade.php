@extends('layout.template')
@section('konten')
<!-- START FORM -->
<form action='{{ url('tanam') }}' method='post' enctype="multipart/form-data">
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="id_tanam" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='id_tanam' value="{{Session::get('id_tanam')}}" id="id_tanam">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama_tanam" class="col-sm-2 col-form-label">Nama Tanaman</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama_tanam' value="{{Session::get('nama_tanam')}}" id="nama_tanam">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
                <select name="kategori" class="form-control" name='kategori' value="{{Session::get('kategori')}}" id="kategori">
                    <option value="">--Pilih--</option>
                    <option value="dewasa">Dewasa</option>
                    <option value="bibit">Bibit</option>
                    <option value="benih">Benih</option>
                    <option value="mediatanam">Media Tanam</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='harga' value="{{Session::get('harga')}}" id="harga">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="stok" class="col-sm-2 col-form-label">Stok</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='stok' value="{{Session::get('stok')}}" id="stok">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='keterangan' value="{{Session::get('keterangan')}}" id="keterangan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="foto" class="col-sm-2 col-form-label">Foto</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name='foto' value="{{Session::get('foto')}}" id="foto">
            </div>
        </div>
        <a href='{{url('tanam')}}' class="btn btn-danger">Kembali</a>
        <button type="submit" class="btn btn-primary" name="submit">Kirim</button>
    </div>
    </div>
</form>
<!-- AKHIR FORM -->
@endsection