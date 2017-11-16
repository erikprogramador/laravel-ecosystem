<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManifestController extends Controller
{
    public function show()
    {
        $manifest = '[Hello](google.com.br)';

        return view('manifest', compact('manifest'));
    }
}
