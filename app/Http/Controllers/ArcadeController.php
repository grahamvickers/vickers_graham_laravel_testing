<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArcadeController extends Controller
{
    /**
     * show arcade.
     *
     * @return \Illuminate\Support\Facades\View
     */
    public function index()
    {
        return view('arcade.index');
    }
}
