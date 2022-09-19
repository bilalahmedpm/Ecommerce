<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role','=', 2)->get();
        return view('admin.user.index' , compact('users'));
    }

    public function index2()
    {
        $users = User::where('role','=', 3)->get();
        return view('admin.user.index' , compact('users'));
    }

}
