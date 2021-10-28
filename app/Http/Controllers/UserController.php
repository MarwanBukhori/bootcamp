<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        //use of model
        $users = User::all();

        $data = [
            'users' => $users  
        ];

        return view('user-list', $data);

    }
}
