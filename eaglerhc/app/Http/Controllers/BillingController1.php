<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillingController1 extends Controller
{
    public function index()
    {
        return view('billing.index');
    }

    public function show($id)
    {
        return view('billing.show', compact('id'));
    }
}