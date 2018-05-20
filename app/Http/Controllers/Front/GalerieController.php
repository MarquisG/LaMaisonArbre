<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Tag;
use App\Models\GalleryTag;
use App\Models\Text;
use Illuminate\Http\Request;

class GalerieController extends Controller
{


    public function index()
    {
        $gallery = Gallery::with('Tag')->where('gallery.trashed', false)->get();
        $tags = Tag::all();
        $texts = Text::all();

        return view('front.galerie', compact('gallery', 'tags', 'texts'));
    }

}
