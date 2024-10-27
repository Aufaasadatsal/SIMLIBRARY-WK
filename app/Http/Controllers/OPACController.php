<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OPACController extends Controller
{
    public function index()
    {
        return view('opac');
    }
}
