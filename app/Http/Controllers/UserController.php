<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function uploadAvatar(Request $request)
    {
        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images', $filename, 'public');
            auth()->user()->update(['avatar'=> $filename]);
        }
        return redirect()->back();
    }


    public function index()
    {
       $data = [
            'name'    => 'Elon',
            'email'   => 'elon@bitfumes.com',
            'password'=> 'pass',
       ];
       $user = User::all();

       return $user;

       return view('home'); 
    }
}
