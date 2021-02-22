<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function viewlogin(){
        return view('login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function login(Request $request){
        
        if(Auth::attempt($request->only('email', 'password'))){
            if($request->role == 'Member'){
                return redirect('/');
            }else{
                return redirect('/');
            }
        }
        else{
            return redirect('/login');
        }
    }

    public function viewregister(){
        return view('register');
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required|numeric',
            'role' => 'required'
        ]);

        $password = Hash::make($request->password);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password,
            'phone' => $request->phone,
            'role' => $request->role
        ]);
        
        return redirect()->action('UserController@viewlogin');
    }

    public function viewupdate(){
        $user = Auth::user();
        return view('updateuser')->with('user',$user);
    }

    public function update(Request $request){
        $user = Auth::user();

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|numeric'
        ]);

        DB::table('users')->where('id', $user->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        return redirect('/');
    }
}
