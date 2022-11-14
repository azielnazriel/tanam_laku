<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use App\Models\Tanaman;

class TanamController extends Controller
{
    //     /**
    //      * Display a listing of the resource.
    //      *
    //      * @return \Illuminate\Http\Response
    //      */
    public function index(Request $Request)
    {
        //         $katakunci = $Request->katakunci;
        //         $baris = 1;
        //         if(strlen($katakunci)){
        // $data = tanam::where('id_tanam','like',"%$katakunci%")
        //     ->orWhere('nama_tanam','like',"%$katakunci%")
        //     ->orWhere('kategori','like',"%$katakunci%")
        //     ->orWhere('harga','like',"%$katakunci%")
        //     ->orWhere('stok','like',"%$katakunci%")
        //     ->orWhere('keterangan','like',"%$katakunci%")
        //     ->orWhere('foto','like',"%$katakunci%")
        //     ->paginate($baris);
        //         }else {
        //             $data = Tanaman::orderBy ('id_tanam','desc')->paginate($baris);
        //         }

        return view('Tanam.index', [
            'data' => Tanaman::orderBy('id_tanam', 'desc')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Tanam.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('id_tanam', $request->id_tanam);
        Session::flash('nama_tanam', $request->nama_tanam);
        Session::flash('kategori', $request->kategori);
        Session::flash('harga', $request->harga);
        Session::flash('stok', $request->stok);
        Session::flash('keterangan', $request->keterangan);

        $request->validate([
            'id_tanam' => 'required|numeric|unique:tanamen,id_tanam',
            'nama_tanam' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'keterangan' => 'required',
            'foto' => 'image|file|max:10000'
        ], [
            'id_tanam.required' => ' Id wajib diisi',
            'id_tanam.numeric' => 'Id wajib dalam angka',
            'id_tanam.unique' => 'Id sudah ada dalam database',
            'nama_tanam.required' => 'Nama wajib diisi',
            'harga.required' => 'Harga wajib diisi',
            'stok.required' => 'Stok wajib diisi',
            'keterangan.required' => 'keterangan belum ada',
            'foto.required' => 'Foto wajib diisi',
            'foto.mimes' => 'Foto hanya diperbolehkan JPG',
        ]);


        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis') . '.' . $foto_ekstensi;
        $foto_file->move(public_path('foto'), $foto_nama);

        $data = [
            'id_tanam' => $request->input('id_tanam'),
            'nama_tanam' => $request->input('nama_tanam'),
            'kategori' => $request->input('kategori'),
            'harga' => $request->input('harga'),
            'stok' => $request->input('stok'),
            'keterangan' => $request->input('keterangan'),
            'foto' => $foto_nama,
        ];
        // $data =[
        //     'id_tanam' => $request->id_tanam,
        //     'nama_tanam' => $request->nama_tanam,
        //     'kategori' => $request->kategori,
        //     'harga' => $request->harga,
        //     'stok' => $request->stok,
        //     'keterangan' => $request->keterangan,
        //     'foto' => $request->foto_nama,
        // ];

        Tanaman::create($data);
        return redirect()->to('tanam')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_tanam)
    {
        $data = Tanaman::where('id_tanam', $id_tanam)->first();
        return view('tanam.detail')->with('produk', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_tanam)
    {
        $data = Tanaman::where('id_tanam', $id_tanam)->first();
        return view('tanam.edit')->with('data', $data);
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function update(Request $request, $id)
    {
        //     $request->validate([
        //         'judul' => 'required',
        //         'penulis' => 'required',
        //         'category' => 'required',


        //     ], [
        //         'judul.required' => 'Judul wajib diisi',
        //         'penulis.required' => 'Penulis wajib diisi',
        //         'category.required' => 'Cataegory wajib diisi',

        //     ]);
        $data = [
            'nama_tanam' => $request->nama_tanam,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'keterangan' => $request->keterangan,
            'foto' => $request->foto,
        ];
        $tanam = Tanaman::where('id_tanam', $id)->first();
        $tanam->update($data); //menghilangkan variable yg tidak diinginkan
        return redirect()->to('tanam')->with('success', 'Berhasil mengubah data');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function destroy($id_tanam)
    {
        $data_foto = Tanaman::where('id_tanam', $id_tanam)->first();
        File::delete(public_path('foto') . '/' . $data_foto->foto);

        Tanaman::where('id_tanam', $id_tanam)->delete();
        return redirect()->to('tanam')->with('success', 'Berhasil menghapus  data');
    }
}
