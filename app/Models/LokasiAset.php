<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LokasiAset extends Model
{
    protected $table = 'lokasi_aset';
    protected $primaryKey = 'lokasi_id';
    protected $fillable = ['aset_id', 'keterangan', 'lokasi_text', 'rt', 'rw'];

    // Relasi ke Aset (Setiap lokasi mencatat satu aset)
    public function aset()
    {
        return $this->belongsTo(Aset::class, 'aset_id', 'aset_id');
    }
}
