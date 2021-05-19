<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('admin.users', [
            'users' => User::all(),
        ]);
    }

    public function delete($id){
        User::find($id)->delete();
        return back();
    }
}
