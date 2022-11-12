<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanaman extends Model
{
    use HasFactory;
    // protected $fillable = ['id_tanam','nama_tanam','kategori','harga','stok','keterangan','foto'];
    protected $guarded = "";
    protected $primaryKey = 'id_tanam';
    protected $table = "tanamen";
}
