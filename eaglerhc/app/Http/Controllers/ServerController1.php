<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServerController1 extends Controller
{
    public function index()
    {
        return view('servers.index');
    }

    public function show($id)
    {
        return view('servers.show', compact('id'));
    }
}