<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * display home page
     *
     * @return \Illuminate\Support\Facades\View
     */
    public function index()
    {
        return view('index');
    }
}
