<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index()
    {
        return view('links.index');
    }

    public function create()
    {
        return view('links.create');
    }

    public function edit()
    {
        return view('links.edit');
    }
}
