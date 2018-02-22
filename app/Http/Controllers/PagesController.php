<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }


    public function page()
    {
        return view('page');
    }


    public function public()
    {
        return 'This is a public route.';
    }
}
