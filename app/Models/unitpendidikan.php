<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitPendidikan extends Model
{
    use HasFactory;

    // Pastikan nama tabel sesuai dengan yang ada di database
    protected $table = 'unitpendidikan';
    protected $fillable = [
        'nama_unit',
        'status_unit'

    ];

    // Relasi ke tabel 'users'
    public function users()
    {
        return $this->hasMany(User::class, 'unitpendidikan_idunitpendidikan');
    }
}