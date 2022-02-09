<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class todosController extends Controller
{
    public function index() {
        $todos = Todo::all();

        return view('todos', compact('todos'));
    }
}
