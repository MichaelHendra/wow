<?php

namespace App\Http\Controllers;

use App\Http\Resources\AkunResource;
use App\Models\Akun;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function index() { 
        $akun = Akun::select('id','username','joindate','last_ip','last_login')->get();

        return new AkunResource(true, 'list akun', $akun);
        
    }
}
