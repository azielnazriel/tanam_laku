@extends('layout.template')
@section('konten')   
<!-- START FORM -->
<form action='{{ url('tanam') }}' method='post' enctype="multipart/form-data">
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        
        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='id' value="{{Session::get('id_tanam')}}" id="id_tanam">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Tanaman</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' value="{{Session::get('nama_tanam')}}" id="nama_tanam">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="category" class="col-sm-2 col-form-label">kategori</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='kategori' value="{{Session::get('kategori')}}" id="kategoti">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='harga' value="{{Session::get('harga')}}" id="harga">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Stok</label>
            <div class="col-sm-10">
                <input type="stok" class="form-control" name='stok' value="{{Session::get('stok')}}" id="stok   ">
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
                <input type="file" class="form-control" name='foto'id="foto">
            </div>
        </div>
        <a href='{{url('tanam')}}' class="btn btn-danger">Kembali</a> 
        <a href='{{url('tanam')}}' class="btn btn-primary">Kirim</a>
    </div>
</form>
    <!-- AKHIR FORM -->
    @endsection