<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
class userController extends Controller
{
    public function index()
    {
        $user = User::get();
        return view('welcome',compact('user'));
    }
    public function insertUser(Request $request)
    {
        $request->validate([
            'name' => 'required|max:30',
            'email'=> 'email',
        ]);
        //validation check.
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect::to('/user');
    }
    public function editUser ($id)
    {
        $user = User::where('id','=',$id)->first();
        return view('edit-user',compact('user'));
    }
}
