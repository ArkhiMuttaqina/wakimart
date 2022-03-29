<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuti extends Model
{
    use HasFactory;

    protected $table = 'cuti';
    protected $primaryKey = 'id_cuti';
    protected $fillable = ['id_cuti', 'id_karyawan', 'tanggal_cuti', 'lama_cuti', 'alasan_cuti', 'created_at', 'updated_at'];
}
