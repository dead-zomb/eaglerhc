<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController1 extends Controller
{
    public function edit($id)
    {
        return view('profile.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // Logic to update profile
    }
}