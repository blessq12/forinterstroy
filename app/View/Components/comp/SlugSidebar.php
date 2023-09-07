<?php

namespace App\View\Components\comp;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SlugSidebar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $categories = null,
        public $company = null,
        public $slug = null,
        public $page = null
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.comp.slug-sidebar');
    }
}
