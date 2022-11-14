@extends('layout.template')
@section('konten')
<!-- START FORM -->
<body>
<form action='{{ url('tanam') }}' method="POST" enctype="multipart/form-data">
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="id_tanam" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='id_tanam' value="{{Session::get('id_tanam')}}" id="id_tanam">
            </div>
            @error('id_tanam')
            <div class="invalid-feedback"></div>
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Penjual</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' value="{{Session::get('nama')}}" id="nama">
            </div>
            @error('nama')
            <div class="invalid-feedback"></div>
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3 row">
            <label for="no_tlpn" class="col-sm-2 col-form-label">No_tlpn</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='no_tlpn' value="{{Session::get('no_tlpn')}}" id="no_tlpn">
            </div>
            @error('no_tlpn')
            <div class="invalid-feedback"></div>
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='alamat' value="{{Session::get('alamat')}}" id="alamat">
            </div>
            @error('alamat')
            <div class="invalid-feedback"></div>
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3 row">
            <label for="nama_tanam" class="col-sm-2 col-form-label">Nama Tanaman</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama_tanam' value="{{Session::get('nama_tanam')}}" id="nama_tanam">
            </div>
            @error('nama_tanam')
            <div class="invalid-feedback"></div>
                {{ $message }}
            @enderror
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
            @error('kategori')
            <div class="invalid-feedback"></div>
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3 row">
            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='harga' value="{{Session::get('harga')}}" id="harga">
            </div>
            @error('harga')
            <div class="invalid-feedback"></div>
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3 row">
            <label for="stok" class="col-sm-2 col-form-label">Stok</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='stok' value="{{Session::get('stok')}}" id="stok">
            </div>
            @error('stok')
            <div class="invalid-feedback"></div>
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3 row">
            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='keterangan' value="{{Session::get('keterangan')}}" id="keterangan">
            </div>
            @error('keterangan')
            <div class="invalid-feedback"></div>
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3 row">
            <label for="foto" class="col-sm-2 col-form-label">Foto</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name='foto' value="{{Session::get('foto')}}" id="foto">
            </div>
            @error('foto')
            <div class="invalid-feedback"></div>
                {{ $message }}
            @enderror
        </div>
        <a href='{{url('tanam')}}' class="btn btn-danger">Kembali</a>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </div>
    </div>
</form>
</body>
<!-- AKHIR FORM -->
@endsection