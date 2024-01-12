<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangJenisBarang extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $keyType = 'integer';
    protected $table = 'barang_dan_jenisbarang';
    protected $primaryKey = 'idbarangjenisbarang';
    protected $fillable = [
        'idbarangjenisbarang',
        'kode_barang',
        'id_jenis',
    ];

    public function barang()
    {
        return $this->belongsTo(barang::class, 'kode_barang', 'kode_barang');
    }

    public function jenisBarang()
    {
        return $this->belongsTo(jenisBarang::class, 'id_jenis', 'id_jenis');
    }
    public function jenis()
    {
        return $this->belongsTo(JenisBarang::class, 'id_jenis', 'id_jenis');
    }
}
