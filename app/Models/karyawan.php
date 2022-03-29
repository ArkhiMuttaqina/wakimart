<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawan';
    protected $primaryKey = 'id_karyawan';
    protected $fillable = ['id_karyawan', 'no_induk', 'nama', 'alamat', 'tanggal_lahir', 'jatah_cuti', 'date_registered', 'updated_at', 'nourut', 'created_at'];
}
