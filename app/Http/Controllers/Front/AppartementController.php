<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Text;
use Illuminate\Http\Request;

class AppartementController extends Controller
{


    public function index()
    {
        $texts = Text::all();

        return view('front.appartements', compact('texts'));
    }

}
