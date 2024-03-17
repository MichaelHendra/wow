<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class char extends Model
{
    use HasFactory, HasApiTokens;
    protected $connection = 'character';
    protected $table = 'characters';
}
