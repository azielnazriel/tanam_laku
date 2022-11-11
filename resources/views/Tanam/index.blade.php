@extends('layout.template')


@section('konten')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <!-- FORM PENCARIAN -->
    {{-- <div class="pb-3">
        <form class="d-flex" action="{{ url('tanam') }}" method="get">
            <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
            <button class="btn btn-secondary" type="submit">Cari</button>
        </form>
    </div> --}}
    

    <table class="table table-striped">
        <h2 class="text-center">Tabel Produk Anda</h2>
        <thead>
            <tr>
                <th class="col-md-1 text-center">No</th>
                <th class="col-md-1 text-center">id_tanam</th>
                <th class="col-md-1.5 text-center">Tanaman</th>
                <th class="col-md-1 text-center">Kategori</th>
                <th class="col-md-1 text-center">Harga</th>
                <th class="col-md-1 text-center">Stok</th>
                <th class="col-md-3.5 text-center">Keterangan</th>
                <th class="col-md-1.8 text-center">Foto</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = $data->firstItem()?>
            @foreach ($data as $item)
            <tr>
                {{-- <td>{{ $loop->iteration }}</td> --}}
                <td>{{$i}}</td>
                <td>{{ $item->id_tanam }}</td>
                <td>{{ $item->nama_tanam }}</td>
                <td>{{ $item->kategori }}</td>
                <td>{{ $item->harga }}</td>
                <td>{{ $item->stok }}</td>
                <td>{{ $item->keterangan }}</td>
                <td><img style="max-width: 180px;" src="{{ url('foto').'/'. $item->foto }}" alt=""></td>
                <td>
                    <a href= '{{url('tanam/'.$item->id_tanam.'/edit')}}'  class="btn btn-warning btn-sm">Edit</a>
                    <form onsubmit="return confirm('Yakin mau menghapus data?')" class='d-inline' action="{{ url('tanam/'.$item->id_tanam) }}" method="post">
                    @csrf 
                    @method('DELETE')
                    <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                    </form>
                </td>
            </tr>
            <?php $i=1;$i++ ?>
            @endforeach
        </tbody>
    </table>
           <!-- TOMBOL TAMBAH DATA -->
           <div class="pb-3">
            <a href='{{ url('tanam/create') }}' class="btn btn-primary">+ Tambah Data</a>
            <a href='{{ url('') }}' class="btn btn-danger">Kembali</a>
        </div>
</div>
<!-- AKHIR DATA -->
@endsection
    