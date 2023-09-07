<?php

namespace App\View\Components\comp;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProjectSidebar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $categories,
        public $company,
        public $project,
        public $category
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.comp.project-sidebar');
    }
}
