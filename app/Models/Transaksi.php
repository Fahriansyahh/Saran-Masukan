<?php

namespace App\Models;

use App\Models\Pengirim;
use App\Models\Metode_pembayaran;
use App\Models\Kritik_saran;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Kritik_sarans\HasFactory;

class Transaksi extends Model
{
    protected $primaryKey = 'transaksi_id';
    // use HasFactory;
    protected $fillable = [
        'pengirim_id',
        'metode_id', // Menambahkan metode_id ke dalam fillable
        'total_pembayaran',
        'tanggal_transaksi',
        'status_pembayaran',
    ];

    public function pengirim()
    {
        return $this->belongsTo(Pengirim::class, 'pengirim_id', 'pengirim_id');
    }


    public function metodePembayaran()
    {
        return $this->belongsTo(Metode_pembayaran::class, 'metode_id', 'id');
    }


    public function kritikSarans()
    {
        return $this->hasMany(Kritik_saran::class);
    }
}
