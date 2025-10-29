<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        // Bisa mengirim data ke view
        return view('hello', ['message' => 'Hello from HelloController!']);
    }
}
