<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard(){
        $user = null;
        if (Auth::user()){
            $user = Auth::user();
        }
        
        return view('admin.dashboard',[
            'user' => $user
        ]);
    }
}
