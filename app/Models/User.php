<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{
  use HasFactory;

    protected $table = 'user_erp';
    protected $primaryKey = 'id_user';
    protected $fillable = ['id_user', 'name', 'initial', 'role', 'email', 'password', 'created_at', 'updated_at'];
}
