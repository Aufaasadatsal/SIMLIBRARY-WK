<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogAdminController extends Controller
{
    public function index()
    {
        return view('admin.blog');
    }
}
