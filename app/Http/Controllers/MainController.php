<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request){
        return view('index',[
            'company' => Company::all()->first()
        ]);
    }
}
