<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Akun extends Model
{
    use HasFactory, HasApiTokens;
    protected $connection = 'auths';
    protected $table = 'account';
    protected $fillable = ['username','salt','verifier','joindate'];
}
