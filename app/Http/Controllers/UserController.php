<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function uploadAvatar(Request $request)
    {
        if($request->hasFile('image')){
            User::uploadAvatar($request->image);
            
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
