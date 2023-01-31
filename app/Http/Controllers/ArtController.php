<?php

namespace App\Http\Controllers;

use App\Models\Art;
use Illuminate\Http\Request;

class ArtController extends Controller
{
    public function home()
    {
        $arts = Art::all();

        return view('pages.home', compact('arts'));
    }
}
