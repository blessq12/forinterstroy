@extends('components.layout')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <ul class="list-unstyled d-flex align-items-center">
                    <li>
                        <a href="{{ route('index_page') }}" class="px-1">Главная</a>
                    </li>
                    /
                    <li>
                        <a href="{{ route('slug_category_page', ['category' => $category->uri]) }}" class="px-1">{{ $category->name }}</a>
                    </li>
                    /
                    <li>
                        <span class="text-primary px-1">{{ $slug->name }}</span>
                    </li>
                </ul>
                <p class="m-0 fw-light">Slug category: {{ $category->name }}</p>
                <h2 class="fw-semibold">Current slug name: {{ $slug->name }}</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In nulla ducimus blanditiis amet non, vitae, et voluptatum cupiditate reiciendis corrupti praesentium quaerat ea laborum ullam quo harum eligendi esse sint.</p>
            </div>
        </div>
    </div>
@endsection