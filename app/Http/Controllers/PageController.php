<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function page2()
    {
        return view('pages.page2');
    }

    public function exampleMeta()
    {
        return view('pages.example-meta');
    }
}
