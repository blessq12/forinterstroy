<div class="project-sidebar-widget">
    <div class="header">
        <h6>Категории проектов</h6>
    </div>
    <div class="content">
        <ul>
            @foreach ($categories as $category)
                <li>
                    <a href="{{ route('catalog_page', ['category' => $category->uri]) }}">
                        {{ $category->name }}
                        <span>{{ $category->projectCount() }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
<recall-form :project='@json($project)'></recall-form>

