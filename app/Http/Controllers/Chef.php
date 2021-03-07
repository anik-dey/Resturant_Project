<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

Session_start();


class Chef extends Controller
{
    public function show()
    {
        return view('add-chef');
    }
    public function store(Request $request)
    {
        $data = array();
        $image = $request->file('chef_image');
        if ($image) {
            $image_name = Str::random(40);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->MOVE($upload_path, $image_full_name);
            if ($success) {
                $data['chef_images'] = $image_url;
                DB::table('chef_tbl')->insert($data);
                Session::put('exception', 'Image added successfully !!');
                return Redirect::to('/dashboard/add-gallery');
            }
        }
        $data['image'] = $image_url;
        DB::table('chef_tbl')->insert($data);
        Session::put('exception', 'Image added successfully !!');
        return Redirect::to('/dashboard/add-chef');
    }
    public function view()
    {
        $image = DB::table('chef_tbl')->get();
        return view('remove-chef-images', compact('image', 'image'));
    }

    public function delete($chef_id)
    {
        DB::table('chef_tbl')
            ->where('chef_id', $chef_id)
            ->delete();
        return Redirect::to('dashboard/remove-chef');
    }
}
