<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($nama){
        $data = [
            //key => value
            'nama' => $nama
        ];
    
        return view('hello', $data);
    }
}
