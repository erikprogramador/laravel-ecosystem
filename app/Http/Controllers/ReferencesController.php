<?php

namespace App\Http\Controllers;

use App\Reference;

class ReferencesController extends Controller
{
    public function index()
    {
        $references = Reference::all();

        return view('references', compact('references'));
    }
}
