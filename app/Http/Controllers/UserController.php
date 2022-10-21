<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    function userView(){
        //   dd(111);
        $users = User::all();
        return view('admin.pages.user',compact('users'));
    }
    function userForm(){
        return view('admin.pages.form');
    }
    function store(Request $request){
        // dd(343);
        // dd($request->all());
        $request->validate([
            'username' => 'required',
            'first_name' => "required",
            'last_name' =>  "required",
            'email' =>  "required"
        ]);

        User::create([
          'username' =>$request->username,
          'first_name' => $request->first_name,
          'last_name' => $request->last_name,
          'email' => $request->email
        ]);

        return redirect('/user')->with('msg','data inserted successfully');
    }

    function edit($id){

        $users = User::find($id);
        // dd($user);
        return view('admin.pages.edit',compact('users'));
    }

     function update(Request $request,$id){

        $users = User::find($id);

       $users->username = $request->username;
       $users->first_name = $request->first_name;
       $users->last_name = $request->last_name;
       $users->email = $request->email;
       $users->save();



        // $users->update([
        //   'username' => $request->username,
        //   'first_name' => $request->first_name,
        //   'last_name' => $request->last_name,
        //   'email' => $request->email
        //  ]);

        // $users->update($request->all());

         return redirect('/user')->with('msg','Data Updated Successfully');
     }

     function destroy($id){
           $users = User::find($id);
           $users->delete();

           return redirect('/user')->with('msg','Data Deleted Successfully');
     }

     function passUpdate(Request $request){
        // dd($request->all());
        $request->validate([
            'password' => 'required|confirmed|min:6',
        ]);
        
      $users = User::find(Auth::user()->id);

    //   dd($users);

        $users->update([
            'password'=>Hash::make($request->password)
        ]);

        return redirect('/user')->with('msg','Password Update Successfully');
     }
}
