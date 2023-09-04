@extends('components.layout')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <h2>Slug Categories</h2>
                <ul class="list-unstyled">
                    @foreach ($slugCategories as $category)
                        <li class="py-3">
                            <h4>{{ $category->name }}</h4>
                            <a href="{{ route('slug_category_page',['category' => $category->uri]) }}" class="btn btn-success">Enter</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection