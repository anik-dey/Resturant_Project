<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContractFormMail;
use function GuzzleHttp\Promise\all;
use Illuminate\Support\Facades\Mail;

class Contract extends Controller
{
    public function store(Request $request)
    {
        // $request()->validate([
        //     'name'=> 'require',
        //     'email'=> 'require|email',
        //     'subject'=> 'require',
        //     'message'=> 'require',

        // ]);

       $data=request()->all();
        Mail::to('anikdey975197@gmail.com')->send(new ContractFormMail($data));
        return back()->with('success', 'We have received your message and we would like to thank you for writing to us.');
    }
}
