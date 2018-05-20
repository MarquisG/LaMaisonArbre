<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Text;
use App\Models\Appart;
use App\Models\Field;
use Illuminate\Http\Request;

class AppartementController extends Controller
{


    public function index()
    {
        $texts = Text::all();
        $apparts = Appart::all();
        $fields = Field::all();
        return view('front.appartements', compact('texts', 'apparts', 'fields'));
    }

}
