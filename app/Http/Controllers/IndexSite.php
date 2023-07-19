<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexSite extends Controller
{
    public function index() {
        return view('index');
    }
}
