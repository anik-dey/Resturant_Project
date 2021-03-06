<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

Session_start();

class Gallery extends Controller
{
    public function show()
    {
        return view('add-gallery');
    }
    public function store(Request $request)
    {
        $data = array();
        $image = $request->file('gallery_image');
        if ($image) {
            $image_name = Str::random(40);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->MOVE($upload_path, $image_full_name);
            if ($success) {
                $data['gallery_images'] = $image_url;
                DB::table('gallery_tbl')->insert($data);
                Session::put('exception', 'Image added successfully !!');
                return Redirect::to('/dashboard/add-gallery');
            }
        }
        $data['image'] = $image_url;
        DB::table('gallery_tbl')->insert($data);
        Session::put('exception', 'Image added successfully !!');
        return Redirect::to('/dashboard/add-gallery');

        // $data['image'] = $image_url;
        // DB::table('student_tbl')->insert($data);
        // Session::put('exception', 'Student Added Successfully !!');
        // return Redirect::to('/addstudent');
    }
}
