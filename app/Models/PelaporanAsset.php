<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PelaporanAsset extends Model
{
    protected $table = 'pelaporan_asset';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'nama_asset','deskripsi_laporan'];

   
}
