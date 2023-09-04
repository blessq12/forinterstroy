<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function __construct(){
        
    }
    public function login(Request $request){

        // after register state
        $register = false;

        if ($request->register && $request->register == 'success'){
            $register = true;
        }

        return view('login.login',[
            'register' => $register
        ]);
    }
    public function loginUser(Request $request){
        $validator = Validator::make(
            $request->all(),[
            'email' => 'email|required|min:3|max:255',
            'password' => 'required|min:3'
            ],[
            'email' => 'Поле :attribute не является электронной почтой',
            'required' => 'Поле :attribute обязательно для заполнения',
            'min' => 'Поле :attribute минимум 3 символа'
            ]
        );
        if ($validator->fails()){
            return back()->withErrors($validator->errors());
        }
        if (!Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])){
            return redirect()->route('crm_login')->with(['user'=>'not-found']);
        }
        
        return redirect()->route('dashboard');
    }
    public function register(){
        return view('login.register');
    }
    public function registerUser(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'email|unique:users|min:3|max:255',
            'name' => 'required|min:3',
            'password' => 'min:3' 
        ],[
            'unique' => ':Attribute адрес уже занят',
            'required' => 'Поле :attribute обязательно',
            'min' => ':attribute минимум 3 символа'
        ]);
        if ($validator->fails()){
            return back()->withErrors($validator);
        }
        $user = new User([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password)
        ]);
        if (!$user->save()){
            return back()->withInput(['email' => $request->email, 'name' => $request->name]);
        }
        return redirect()->route('crm_login',['register'=>'success']);
    }
    public function logoutUser(){
        if (Auth::user()){
            Auth::logout();
            return redirect()->route('crm_login');
        }
    }
}
