<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class JenisPembayaran extends Model
{
    use HasFactory;
    protected $table = "jenispembayaran";
    protected $fillable = ['nama_pembayaran','type','tahun','nominal_jenispembayaran','idunitpendidikan'];
    public function unitPendidikan()
    {
        return $this->belongsTo(UnitPendidikan::class, 'idunitpendidikan ', 'idunitpendidikan ');
    }
}
