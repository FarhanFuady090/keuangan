<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PindahKelas extends Model
{
    use HasFactory;
    protected $table = "pindahkelas";
    protected $fillable = ['siswa_id','kelas_id'];
    public function siswas()
    {
        return $this->belongsTo(siswas::class, 'siswa_id ', 'id ');
    }
    public function kelas()
    {
        return $this->belongsTo(kelas::class, 'kelas_id', 'id');
    }
}
