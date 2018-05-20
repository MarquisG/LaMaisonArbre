<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Tag;
use App\Models\GalleryTag;
use Illuminate\Http\Request;

class GalleryController extends Controller
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

    public function index()
    {
        $gallery = Gallery::with('Tag')->where('gallery.trashed', false)->get();
        $tags = Tag::all();

        return view('admin.gallery', compact('gallery', 'tags'));
    }

    protected function delete(Request $request)
    {
        $flight = Gallery::find($request->id);
        $flight->trashed = true;
        $flight->save();
        return redirect('admin/gallery')->with(['success' => 'Photo Deleted', 'id' => $request->id]);
    }

    protected function restore(Request $request)
    {
        $gallery = Gallery::find($request->id);
        $gallery->trashed = false;
        $gallery->save();
        return redirect('admin/gallery')->with('success', 'Photo Restored');
    }

    public function store(Request $request)
    {
        $photoName = time()+rand(0, 100000).'.'.$request->all()['file']->getClientOriginalExtension();

        $request->all()['file']->move(public_path('img'), $photoName);

        $gallery = new Gallery;
        $gallery->name = $photoName;
        $gallery->trashed = false;
        $gallery->save();

        if(isset($request->tags)){
            foreach($request->tags as $tag){
                $galleryTag = new GalleryTag;
                $galleryTag->gallery_id = $gallery->id;
                $galleryTag->tag_id = $tag; 
                $galleryTag->save();
            }
        }
    }

}
