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
        $chef = DB::table('chef_tbl')->get();
        $menu = DB::table('menu_tbl')->get();
        $stage = 0;
        //$realArray = (array)$menu;









        return view('layout', compact('gallery', 'chef', 'menu', 'stage'));
    }
}
