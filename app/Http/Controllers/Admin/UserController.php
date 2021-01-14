<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        //panggil semua user
        //$users = User::all();
        $users = User::paginate(5);
        return view('admin/user/index',compact('users'));
        //paparkan users dalam user management index
    }
}
