<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;



Session_start();

class Base extends Controller
{
    public function show()
    {
        $gallery = DB::table('gallery_tbl')->get();
        return view('layout', compact('gallery', 'gallery'));
    }
}
