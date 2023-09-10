<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Company;
use App\Models\SlugCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(Request $request): void
    {
        \Illuminate\Pagination\Paginator::useBootstrapFive();
        // View::share('company', Company::first());
        // View::share('categories', Category::all());
        // View::share('slugCategories', SlugCategory::all());
    }
}
