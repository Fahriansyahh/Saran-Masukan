<?php

namespace App\Models;

use App\Models\Transaksi;
use App\Models\Kritik_saran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengirim extends Model
{
    use HasFactory;
    protected $primaryKey = 'pengirim_id';
    protected $fillable = ['nama_lengkap', 'email'];

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class);
    }

    public function kritikSarans()
    {
        return $this->hasMany(Kritik_saran::class);
    }
}
