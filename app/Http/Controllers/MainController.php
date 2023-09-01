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
    public function contact(Request $request){
        return view('contact',[
            'company' => Company::all()->first()
        ]);
    }
    public function catalog(Request $request){
        
        // check query param and call category action if isset
        if ($request->query() && $request->query('category')){
            return $this->callAction('category',$request->query());
        }
        
        return view('catalog',[
            'company' => Company::all()->first()
        ]);
    }
    public function category($query){
        return view('single-category',[
            'company' => Company::all()->first()
        ]);
    }
}
