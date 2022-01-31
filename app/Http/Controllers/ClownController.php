<?php

namespace App\Http\Controllers;

use App\Clown;
use App\Http\Requests\ClownRequest;

class ClownController extends Controller
{
    /**
     * show all clowns.
     *
     * @return \Illuminate\Support\Facades\View
     */
    public function index()
    {
        $clowns = Clown::all();
        return view('clowns.index', compact('clowns'));
    }

    /**
     * store new clown
     *
     * @param Request $request
     * @return \Illuminate\Support\Facades\View
     */
    public function store(ClownRequest $request)
    {
        Clown::create($request->all());

        return redirect()->route('clowns.index')->withSuccess('Clown successfully created.');
    }
}
