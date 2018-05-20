<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
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

    /**
     * Show the user list.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();

        return view('admin.tags', compact('tags'));
    }
	
	protected function create(Request $request)
	{        
        $tag = new Tag;
        $tag->name = $request->name;
        $tag->save();

		return redirect('admin/tags')->with('success', 'Tag Created');
    }
    
    protected function delete(Request $request)
	{
        $tag = Tag::find($request->id);  
        $tag->delete();
        return redirect('admin/tags')->with('success', 'Tag Deleted');
    }
    
    protected function edit(Request $request)
	{
        $tag = Tag::find($request->id);  
        $tag->name = $request->name;
        $tag->save();

		return redirect('admin/tags')->with('success', 'Tag Updated');
	}
}
