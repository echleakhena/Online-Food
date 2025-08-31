<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function List(){
        $users= User::orderBy('created_at', 'desc')->get();
        return view('Backend.User.List',compact('users'));
    }
     
    public function add(){
       return view('Backend.User.Add');
   }
    public function create(Request $request)
{
        $request->validate([
            'username' => 'required|string|max:255',
            'phone'    => 'required|string|max:20|unique:users,phone',   
            'password' => 'required|string|min:4|confirmed',
            'email'    => 'nullable|email|max:255|unique:users,email',  
            'image'    => 'nullable|string|max:255',
            'note'     => 'nullable|string',
            ]);

            $user = new User();
            $user->username = $request->username;
            $user->phone    = $request->phone;
            $user->email    = $request->email;
            $user->image    = $request->image;
            $user->note     = $request->note;
            $user->password = Hash::make($request->password); 
            $user->save();

        return redirect()->route('user.list')->with('success', 'User added successfully');
}

      public function delete($id)
{
            $user = User::findOrFail($id);
            $user->delete();

    return redirect()->route('user.list')->with('success', 'User deleted successfully.');
}


}
