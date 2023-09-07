<div class="slug-sidebar-widget">
    <div class="header">
        <h6>Категории услуг</h6>
    </div>
    <div class="content">
        <ul>
            @foreach($categories as $category)
                <li>
                    <a href="{{ route('slug_category_page', ['category' => $category->uri]) }}">
                        {{ $category->name }}
                        <span>
                            {{ $category->slugCount() }}
                        </span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
<recall-form 
    :project='@json($slug)' 
    :page='@json($page)' 
    :category='@json($category)'
></recall-form>