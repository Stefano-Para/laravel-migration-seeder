<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pack;

class PackController extends Controller
{
    public function home() {
        $packs = Pack::all();
        
        return view('home', compact('packs'));
    }
}
