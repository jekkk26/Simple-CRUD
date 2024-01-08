<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $primaryKey = 'kode_barang';
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'stok',
        'harga',
        'deskripsi',
    ];

    public function jenisBarang()
    {
        return $this->belongsTo(jenisBarang::class, 'jenis_barang_id', 'id_jenis');
    }
}
