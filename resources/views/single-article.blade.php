@extends('components.layout')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col">
            <div class="d-flex align-items-center fw-bold py-3">
                <a href="{{ route('index_page') }}" class="px-1 text-info">Главная</a> / 
                <a href="{{ route('blogCategoriesPage', ['category' => $category->uri]) }}" class="px-1 text-info">{{ $category->name }}</a> / 
                <span class="px-1 text-info">{{ $article->name }}</span>
            </div>
            <p class="m-0 fw-light">From Category: {{ $category->name }}</p>
            <h2 class="fw-semibold">Project Name: {{ $article->name }}</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit consequuntur adipisci repellendus incidunt a, asperiores aut blanditiis qui sequi repellat, doloremque quisquam nostrum id possimus, aspernatur reprehenderit culpa. Modi, rerum!</p>
        </div>
    </div>
</div>
@endsection