<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard',[
            'user' => Auth::user(),
            'projects' => Project::all(),
            'projectCategories' => Category::all(),
            'users' => User::all(),
            'clients' => 0
        ]);
    }
}
