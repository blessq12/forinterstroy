@extends('components.layout')
@section('content')
    <x-comp.banner :page="$page"></x-comp.banner>
    <div class="container py-5">
        <div class="row">
            @foreach ($slugCategories as $category)
                <div class="col-12 col-md-4">
                    <div class="slug-category-item">
                        <div class="header" style="background: url('{{ $category->image }}')"></div>
                        <div class="content">
                            <h6>{{ $category->name }}</h6>
                            <ul>
                                <li>
                                    <span class="projects">Услуг:</span>
                                    <p class="mb-0">{{ $category->slugCount() }}</p>
                                </li>
                            </ul>
                        </div>
                        <div class="footer">
                            <a href="{{ route('slug_category_page',['category'=>$category->uri]) }}">Подробнее</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection