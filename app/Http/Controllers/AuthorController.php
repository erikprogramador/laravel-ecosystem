<?php

namespace App\Http\Controllers;

use App\Author;

class AuthorController extends Controller
{
    public function show()
    {
        $author = Author::with('projects')->first();

        return view('author', compact('author'));
    }
}
