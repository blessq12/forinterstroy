<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Category;
use App\Models\Page;
use App\Models\PortfolioItem;
use App\Models\Project;
use App\Models\Slug;
use App\Models\SlugCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MainController extends Controller
{
    public function index(Request $request){
        
        return view('index',[
            'page' => Page::where('uri', $request->getRequestUri())->first()
        ]);

    }
    public function contact(Request $request){
        $page = Page::where('uri', $request->getRequestUri())->first();
        $page->image = '/images/pages-projects-banner.jpg';
        return view('contact',[
            'page' => $page
        ]);
    }
    // Projects
    public function catalog(Request $request){
        // check query param and call category action if isset
        if ($request->category){
            return $this->callAction('category',$request->query());
        }
        $page = Page::where('uri', $request->getRequestUri())->first();
        $page->image = '/images/pages-projects-banner.jpg';
        return view('catalog',[
            'categories' => Category::all(),
            'page' => $page
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
        
        $page = new Page();
        $page->title = $category->name;
        $page->description = $category->description;
        $page->type = 'category';
        $page->image = '/images/pages-projects-banner.jpg';

        return view('single-category',[
            'categories' => Category::all(),
            'category' => $category,
            'projects' => $projects,
            'page' => $page
        ]);
    }
    public function singleProject(Request $request){
        if (!$request->id){
            return abort(404);
        }

        $project = Project::findOrFail($request->id);

        if (!$project){
            return abort(404);
        }

        $page = new Page();
        $page->title = $project->name;
        $page->description = 'Подробная информация по ' .$project->name .' на одной странице. Если у вас возникли вопросы - позвоните нам.';
        $page->type = 'project';
        $page->image = '/images/pages-projects-banner.jpg';

        return view('single-project', [
            'project' => $project,
            'categories' => Category::all(),
            'category' => $project->category,
            'page' => $page
        ]);
    }
    // End Projects
    // Slugs
    public function slugCategories(Request $request){
        if ($request->category){
            return $this->callAction('singleSlugCategory',[ 'category' => $request->category ]);
        }
        $page = Page::where('uri', $request->getRequestUri())->first();
        $page->image = '/images/pages-projects-banner.jpg';
        return view('slug-categories',[
            'slugCategories' => SlugCategory::all(),
            'page' => $page
        ]);
    }
    public function singleSlugCategory($category){
        
        if (!$category){
            return abort(404);
        }
        
        $category = SlugCategory::where('uri', $category)->first();
        
        if (!$category){
            return abort(404);
        }
        $slugs = Slug::where('slug_category_id', $category->id)->paginate(10);

        $page = new Page();
        $page->title = $category->name;
        $page->description = $category->description;
        $page->type = 'slug-category';
        $page->image = '/images/pages-projects-banner.jpg';

        return view('single-slug-category',[
            'slugCategories' => SlugCategory::all(),
            'slugCategory' => $category,
            'slugs' => $slugs,
            'page' => $page
        ]);
    }
    public function singleSlug(Request $request){
        
        if (!$request->id){
            return abort(404);
        }
        $slug = Slug::findOrFail($request->id);

        if (!$slug){
            return abort(404);
        }
        $page = new Page();
        $page->title = $slug->name;
        $page->description = "Подробная информация по услуге " . $slug->name . ' на одной странице. Если не нашли нужную услугу - позвоните нам.';
        $page->type = 'slug';
        $page->image = '/images/pages-projects-banner.jpg';
        return view('single-slug', [
            'slug' => $slug,
            'category' => $slug->slugCategory,
            'page' => $page,
            'categories' => SlugCategory::all()
        ]);
    }
    // End Slugs

    // Articles
    public function blogCategories(Request $request){

        $page = Page::where('uri', $request->getRequestUri())->first();
        $page->image = '/images/pages-projects-banner.jpg';
        return view('blog-categories',[
            'articleCategories' => ArticleCategory::all(),
            'articles' => Article::all(),
            'page' => $page
        ]);
    }
    public function singlerAticle(Request $request){

        if (!$request->id) return abort(404);

        $article = Article::findOrFail($request->id);

        if (!$article) return abort(404);

        $page = new Page();
        $page->title = $article->name;
        $page->description = $article->description;
        $page->image = '/images/pages-projects-banner.jpg';

        return view('single-article',[
            'article' => $article,
            'category' => $article->articleCategory,
            'page' => $page
        ]);
    }
    // End Articles

    // Portfolio
    // Privacy
    public function privacy(Request $request){

        $page = Page::where('uri', $request->getRequestUri())->first();
        $page->image = '/images/pages-projects-banner.jpg';
        return view('privacy-page',[
            'page' => $page
        ]);
    }
    // public function portfolio_setup(Request $request){
    //     $imagesPath = '/images/portfolio/';        
    //     $images = scandir(public_path() . $imagesPath);
    //     $portfolioItem = [];
    //     foreach ($images as $key => $image) {
    //         if ($image !== '.' && $image !== '..' && $image !== '.DS_Store'){
    //             $portfolioItem[] = ['image' => $imagesPath .$image];
    //         }
    //     }
    //     foreach ($portfolioItem as $key => $value) {
    //         $pItem = new PortfolioItem();
    //         $pItem->image = $value['image'];
    //         if ($pItem->save()){
    //             echo 'item saved';
    //         }
    //     }
    // }
    public function portfolio(Request $request){
        $page = Page::where('uri', $request->getRequestUri())->first();
        $page->image = '/images/pages-projects-banner.jpg';
        return view('portfolio',[
            'page' => $page,
            'items' => PortfolioItem::all()
        ]);
    }

    // END Portfolio

    // fetch data from old DB
    public function projects(){
        $content = file_get_contents('http://mvc.forinterstroy.ru/projects.php');
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
    public function slugs(){
        $content = file_get_contents('http://mvc.forinterstroy.ru/slugs.php');
        $decoded = json_decode($content);

        foreach ($decoded as $key => $value){
            $item = json_decode($value);
            $item = $item->$key;
            
            $slug = new Slug();

            switch ($item->category){
                case 'inside' : $slug->slug_category_id = 1;
                break;
                case 'outside' : $slug->slug_category_id = 2;
                break;
                case 'design' : $slug->slug_category_id = 3;
                break;
                case 'demontazh': $slug->slug_category_id = 4;
                break;
                case 'communications' : $slug->slug_category_id = 5;
                break;
                case 'found' : $slug->slug_category_id = 6;
                break;
            }
            $slug->name = $item->name;

            $slug->description = $item->description;
            $slug->content = $item->page_text;
            $slug->thumb = $item->image;
            $slug->image = $item->image_full;

            if ($slug->save()){
                echo $slug->name . 'Saved success';
            }
        }
    }
    public function articles(){
        $content = file_get_contents("http://mvc.forinterstroy.ru/articles.php");
        $content = json_decode($content);

        foreach ($content as $key => $value){
            $item = json_decode($value);
            $item = $item->$key;
            
            $article = new Article();
            
            $article->article_category_id = 1;
            $article->name = $item->name;
            $article->description = $item->seo_description;
            $article->content = $item->excerpt;
            $article->thumb = $item->image;
            $article->image = $item->image_inner;

            if ($article->save()){
                echo 'Article name:' .$article->name .'. Saved successfull. <br>';
            }
        }
    }
}
