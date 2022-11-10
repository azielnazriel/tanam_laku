@extends('layout.template')


@section('konten')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <!-- FORM PENCARIAN -->
    <div class="pb-3">
        <form class="d-flex" action="{{ url('tanam') }}" method="get">
            <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
            <button class="btn btn-secondary" type="submit">Cari</button>
        </form>
    </div>
    
    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">
        <a href='{{ url('tanam/create') }}' class="btn btn-primary">+ Tambah Data</a>
        <a href='{{ url('') }}' class="btn btn-danger">Kembali</a>

    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">id_tanam</th>
                <th class="col-md-3">Tanaman</th>
                <th class="col-md-2">Harga</th>
                <th class="col-md-1">Stok</th>
                <th class="col-md-4">Keterangan</th>
                <th class="col-md-2">Foto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->id_tanam }}</td>
                <td>{{ $item->nama_tanam }}</td>
                <td>{{ $item->harga }}</td>
                <td>{{ $item->stok }}</td>
                <td>{{ $item->keterangan }}</td>
                <td>{{ $item->foto }}</td>
                <td>
                    <a href='{{ url('tanam/'.$item->nim.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                    <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{ url('tanam/'.$item->nim) }}" method="post">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                    </form>
                </td>
            </tr>
            <?php $i++ ?>
            @endforeach
        </tbody>
    </table>
</div>
<!-- AKHIR DATA -->
@endsection
    