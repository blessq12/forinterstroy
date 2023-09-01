<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use App\Models\Project;
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
            'company' => Company::all()->first(),
            'categories' => Category::all()
        ]);
    }
    public function category($query){
        if (!$query){
            return abort(404);
        }
        $category = Category::where('uri', $query)->first();
        if (!$category){
            return abort(404);
        }
        $projects = Project::where('category_id',$category->id)->paginate(10);
        return view('single-category',[
            'company' => Company::all()->first(),
            'category' => $category,
            'projects' => $projects
        ]);
    }
    public function projects(){
        $content = file_get_contents('https://forinterstroy.ru/projects');
        $decoded = json_decode($content);

        foreach ($decoded as $key => $value) {
            $item = json_decode($value);
            $item = (array) $item;
            $itemVal = $item[$key];

            // dump($itemVal);

            // create new model object
            $project = new Project();
            // fill columns for model
            $project->name = $itemVal->name;
            switch ($itemVal->category) {
                case 'bath':$project->category_id = 1;
                    break;
                case 'houses':$project->category_id = 2;
                    break;
                case 'karkas':$project->category_id = 3;
                    break;
                case 'dacha':$project->category_id = 4;
                    break;
                case 'besedki':$project->category_id = 5;
                    break;
                case 'a-frame':$project->category_id = 6;
            }
            $project->price = $itemVal->price;
            $project->area = $itemVal->area;
            $project->useful_area = $itemVal->useful_area;
            $project->wall_height = $itemVal->wall_height;
            $project->rooms = $itemVal->rooms;
            $project->bath_rooms = $itemVal->bath_rooms;
            $project->image_full_1 = $itemVal->image_full_1;
            $project->image_full_2 = $itemVal->image_full_2;
            $project->image_full_3 = $itemVal->image_full_3;
            $project->image_full_4 = $itemVal->image_full_4;
            $project->image_thumb_1 = $itemVal->image_thumb_1;
            $project->image_thumb_2 = $itemVal->image_thumb_2;
            $project->image_thumb_3 = $itemVal->image_thumb_3;
            $project->image_thumb_4 = $itemVal->image_thumb_4;
            $project->layout_first_floor = $itemVal->layout_first_floor;
            $project->layout_second_floor = $itemVal->layout_second_floor;
            $project->floors = $itemVal->floors;
            $project->balcon = $itemVal->balcon;
            $project->terassa = $itemVal->terassa;
            $project->type_size = $itemVal->type_size;

            if ($project->save()){
                echo 'created project: ' . $project->name;  
                echo '<br>'; 
            }
        }
    }
}
