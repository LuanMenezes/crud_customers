<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function index()
    {
//        echo "Hello World ";
        return view('users', [
            'checked' => true,
            'users' => ['User 001','User 002','User 003']
        ]);
    }
}
