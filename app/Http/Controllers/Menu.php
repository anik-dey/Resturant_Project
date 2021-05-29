<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;



Session_start();

class Menu extends Controller
{
    public function show()
    {
        return view('add-menu');
    }

    public function store(Request $request)
    {

        $data = array();


        $data['iteam_name'] = $request->iteam_name;
        $data['iteam_price'] = $request->iteam_price;

        //$data['student_picture']=$request->student_picture;
        $data['iteam_quality'] = $request->iteam_quality;
        $data['iteam_description'] = $request->iteam_description;

        $image = $request->file('iteam_image');

        if ($image) {
            $image_name = Str::random(40);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->MOVE($upload_path, $image_full_name);
            if ($success) {
                $data['iteam_image'] = $image_url;
                DB::table('menu_tbl')->insert($data);
                Session::put('exception', 'Menu added successfully !!');
                return Redirect::to('/dashboard/add-menu');
            }
        }
        $data['image'] = $image_url;
        DB::table('menu_tbl')->insert($data);
        Session::put('exception', 'Menu added successfully !!');
        return Redirect::to('/dashboard/add-menu');
        // echo "mu";
        // $data['image'] = $image_url;
        // DB::table('student_tbl')->insert($data);
        // Session::put('exception', 'Student Added Successfully !!');
        // return Redirect::to('/addstudent');
    }
    public function view()
    {
        $image = DB::table('menu_tbl')->latest()->get();
        return view('remove-menu-images', compact('image', 'image'));
    }

    public function delete($iteam_id)
    {
        DB::table('menu_tbl')
            ->where('iteam_id', $iteam_id)
            ->delete();
        return Redirect::to('dashboard/remove-menu');
    }

    public function edit($iteam_id)
    {
        $iteam_view = DB::table('menu_tbl')
            ->select('*')
            ->where('iteam_id', $iteam_id)
            ->first();
        //dd($iteam_view);
        return view('menu-edit', compact('iteam_view', 'iteam_view'));
    }

    public function update(Request $request, $iteam_id)
    {
        $data = array();

        $data['iteam_name'] = $request->iteam_name;
        $data['iteam_price'] = $request->iteam_price;
        $data['iteam_quality'] = $request->iteam_quality;
        $data['iteam_description'] = $request->iteam_description;

        dd($data);

        // $data['student_email'] = $request->student_email;

        // DB::table('student_tbl')
        //     ->where('student_id', $student_id)
        //     ->update($data);
        // Session::put('exception', 'Update Student Information Successfully !!');
        // return Redirect::to('/allstudent');
    }
}
