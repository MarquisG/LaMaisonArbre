<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appart;
use App\Models\Field;
use Illuminate\Http\Request;

class AppartController extends Controller
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
        $apparts = Appart::with('Field')->get();
        return view('admin.apparts', compact('apparts'));
    }
	
	protected function create(Request $request)
	{        
        $field = new Field;
        $field->name = $request->name;
        $field->appart_id = $request->appart;
        $field->save();

		return redirect('admin/apparts')->with('success', 'Field Created');
    }
    
    protected function delete(Request $request)
	{
        $field = Field::find($request->id);  
        $field->delete();
        return redirect('admin/apparts')->with('success', 'Tag Deleted');
    }
    
    protected function edit(Request $request)
	{
        $field = Field::find($request->id);  
        $field->name = $request->name;
        $field->save();

		return redirect('admin/apparts')->with('success', 'Field Updated');
	}
}
