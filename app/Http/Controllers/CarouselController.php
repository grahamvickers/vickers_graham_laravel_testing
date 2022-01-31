<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carousel;

class CarouselController extends Controller
{
    /**
     * show all rollercoasters.
     *
     * @return \Illuminate\Support\Facades\View
     */
    public function index()
    {
        $carousels = Carousel::all();

        return view('carousels.index', compact('carousels'));
    }
}
