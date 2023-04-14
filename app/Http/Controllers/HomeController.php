<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //get user data
        $user = auth()->user();
        //get other users who are not the current user, who are the same type and have opposite number of wins
        $users = User::where('id', '!=', $user->id)->where('race', $user->race)->where('sex', '!=', $user->sex)->get();
        //get user name
        return view('home', ['user' => $user, 'users' => $users]);
    }

    public function upload(Request $request)
    {
        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images', $filename, 'public');
            Auth()->user()->update(['picture_path'=>'/examen/storage/app/public/images/'.$filename]);

        }
        return redirect()->back();
    }
}
