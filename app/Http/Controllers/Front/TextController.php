<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Text;
use Illuminate\Http\Request;

class TextController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(Request $request)
    {
        $text = Text::find($request->id);  
        $text->content = $request->content;
        $text->save();
        return response()->json(['success' => 'Text Updated']);
    }

}
