<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function create(){
        return view('tag.create');
    }

    public function store(Request $request){

    }

    public function index(){
        return view('tag.index', [
            'tags' => Tag::all(),
        ]);
    }

    public function show($id){
        return view('tag.show', [
            'tag' => Tag::find($id),
        ]);
    }

    public function edit(){
        return view('tag.edit');
    }

    public function update(Request $request){

    }

    public function delete(){
        return view('tag.delete');
    }

    public function destroy(Request $request){

    }
}
