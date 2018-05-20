<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
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
        $users = User::all();

        return view('admin.users', compact('users'));
    }
	
	protected function create(Request $request)
	{
		User::create([
			'name' => $request->name,
			'email' => $request->email,
			'password' => bcrypt($request->password),
		]);
		return redirect('admin/users')->with('success', 'User Created');
    }
    
    protected function delete(Request $request)
	{
        $user = User::find($request->id);  
        $user->delete();
        return redirect('admin/users')->with('success', 'User Deleted');
	}
}
