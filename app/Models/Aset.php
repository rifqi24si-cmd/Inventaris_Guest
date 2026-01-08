<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aset extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'aset';

    // Primary Key custom
    protected $primaryKey = 'aset_id';

    // Kolom yang boleh diisi (Mass Assignment)
    protected $fillable = [
        'kategori_id',
        'kode_aset',
        'nama_aset',
        'tgl_perolehan',
        'nilai_perolehan',
        'kondisi',
    ];

    /**
     * Relasi ke Kategori Aset (Many to One)
     * Menghubungkan aset dengan kategorinya
     */
    public function kategori()
    {
        return $this->belongsTo(KategoriAset::class, 'kategori_id', 'kategori_id');
    }
}