<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenisBarang extends Model
{
    use HasFactory;
    public $incrementing = true;
    protected $keyType = 'integer';
    protected $table = 'jenisbarang';
    protected $primaryKey = 'id_jenis';
    protected $fillable = [
        'id_jenis',
        'nama_jenis_barang',
    ];

    public function barangs()
    {
        return $this->hasMany(barang::class, 'jenis_barang_id', 'id_jenis');
    }
}
