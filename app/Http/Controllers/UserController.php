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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'note'     => 'nullable|string',
            ]);

            $user = new User();
            $user->username = $request->username;
            $user->phone    = $request->phone;
            $user->email    = $request->email;
            $user->note     = $request->note;
            $user->password = Hash::make($request->password); 
             if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = rand(1000, 9999) . '_' . $file->getClientOriginalExtension();
            $file->move(public_path('User'), $filename);
            $user->image = $filename;
    }
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
