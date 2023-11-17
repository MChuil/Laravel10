<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    
    public function index()
    {
        return view("todo.index");
    }

    public function show($task){
        return view('todo.show', compact('task'));
        // return view('todo.show', ['task'=>$task]);
    }

    public function create(){
        return view('todo.create');
    }
}
