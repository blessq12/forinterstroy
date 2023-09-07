<div class="slug-sidebar-widget">
    <div class="header">
        <h6>Категории услуг</h6>
    </div>
    <div class="content">
        <ul>
            @foreach($categories as $category)
                <li>{{ $category->name }} - {{ $category->slugCount() }}</li>
            @endforeach
        </ul>
    </div>
</div>