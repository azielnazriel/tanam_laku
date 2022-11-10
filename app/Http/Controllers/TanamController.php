<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use App\Models\Tanaman;
class TanamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $Request)
    {
        $katakunci = $Request->katakunci;
        $baris = 1;
        if(strlen($katakunci)){
$data = tanam::where('id_tanam','like',"%$katakunci%")
    ->orWhere('nama_tanam','like',"%$katakunci%")
    ->orWhere('harga','like',"%$katakunci%")
    ->orWhere('stok','like',"%$katakunci%")
    ->orWhere('keterangan','like',"%$katakunci%")
    ->orWhere('foto','like',"%$katakunci%")
    ->paginate($baris);
        }else {
            $data = Tanaman::orderBy ('id_tanam','desc')->paginate($baris);
        }
      
        return view('tanam.index', [
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
        Session::flash('harga', $request->harga);
        Session::flash('stok', $request->stok);
        Session::flash('keterangan', $request->keterangan);

        $request->validate([
            'id_tanam' => 'required|numeric|unique:tanam,id_tanam',
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
            'harga' => $request->input('harga'),
            'stok' => $request->input('stok'),
            'keterangan' => $request->input('keterangan'),
            'foto' => $foto_nama
        ];
        // $data =[
        //     'id' =>$request->id,
        //     'judul' =>$request->judul,
        //     'penulis' =>$request->penulis,
        //     'category' =>$request->category,
        //     'isi' =>$request->isi,
        //     'foto'=> $foto_nama
        // ];

        
       
        tanam::create($data);
        return redirect()->to('tanam')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = buku::where('id', $id)->first();
        return view('buku.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'category' => 'required',
           

        ], [
            'judul.required' => 'Judul wajib diisi',
            'penulis.required' => 'Penulis wajib diisi',
            'category.required' => 'Cataegory wajib diisi',
         
        ]);
        $data = [
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'category' => $request->category,
        ];
        buku::where('id', $id)->update($data);
        return redirect()->to('buku')->with('success', 'Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_foto = buku::where('id', $id)->first();
    File::delete(public_path('foto') . '/' . $data_foto->foto);


        buku::where('id', $id)->delete();
        return redirect()->to('buku')->with('success', 'Berhasil menghapus  data');
    }
}
