<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rollercoaster;

class RollercoasterController extends Controller
{
    /**
     * show all rollercoasters.
     *
     * @return \Illuminate\Support\Facades\View
     */
    public function index()
    {
        $rollercoasters = Rollercoaster::all();

        return view('rollercoasters.index', compact('rollercoasters'));
    }
}
