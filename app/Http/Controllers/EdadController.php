<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EdadController extends Controller
{
    public function showForm()
    {
        return view('edad.edad');
    }

    public function procesarEdad(Request $request)
    {
        return redirect()->route('clasificar.edad')->withInput();
    }
}
