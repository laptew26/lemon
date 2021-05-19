<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index(){
        $users = User::paginate(30);
        return view('user.index', [
           'users' =>  $users,
        ]);
    }

    public function show($id){
        return view('user.show', [
           'user' => User::find($id),
        ]);
    }
}
