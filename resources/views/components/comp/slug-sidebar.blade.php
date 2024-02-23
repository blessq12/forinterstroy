<div class="slug-sidebar-widget">
    <div class="header">
        <h6>Категории услуг</h6>
    </div>
    <div class="content">
        <ul>
            @foreach($slugCategories as $slugCategory)
                <li>
                    <a href="{{ route('slug_category_page', ['category' => $slugCategory->uri]) }}">
                        {{ $slugCategory->name }}
                        <span>
                            {{ $slugCategory->slugCount() }}
                        </span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
<recall-form 
    :project="null" 
    :page='@json($page)' 
    :category='@json($slugCategory)'
></recall-form>