@extends('layout.template')

@section('konten')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-2">
        </div>
        <div class="col-md-12 mt-1">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ url('foto') }}/{{ $produk->foto }}" class="rounded mx-auto d-block" width="100%" alt=""> 
                        </div>
                        <div class="col-md-6 mt-5">
                            <h2>{{ $produk->nama_tanam }}</h2>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>Rp. {{($produk->harga) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Stok</td>
                                        <td>:</td>
                                        <td>{{($produk->stok) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td>{{ $produk->keterangan }}</td>
                                    </tr>  
                                </tbody>
                                
                            </table>
                            <tr>
                                <button type="submit" class="btn btn-primary mt-2 bi bi-chat-dots"> Chat</button>                                 
                            </tr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection