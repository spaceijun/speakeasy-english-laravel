<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocsController extends Controller
{
    public function index()
    {
        return view('docs.dashboard');
    }

    public function category()
    {
        return view('docs.operation.category');
    }
}
