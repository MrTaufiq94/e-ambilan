<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){

        // if($request->keyword){
        // $search = $request->keyword;

            //$users = User::where('name','LIKE','%'.$search.'%')->paginate(5);
            $users = User::latest()->when(request()->keyword,function($users){
                $users = $users->where('name','LIKE','%'.request()->keyword.'%');
            })->paginate(5);
        // }else{
        //     //$users = User::all();
        //     $users = User::paginate(5);
        // }
        // //paparkan users dalam user/index
        return view('admin/user/index',compact('users'));
    }


}
