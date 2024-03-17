<?php

namespace App\Http\Controllers;

use App\Http\Resources\AkunResource;
use App\Models\char;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index() {
        $char = char::all();

        return new AkunResource(true, 'List Character' , $char);
    }
    public function indexview()  {
        $char = char::all();

        return view('template', ['char' => $char]);
    }
}
