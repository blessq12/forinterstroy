@extends('components.layout')

@section('content')
    <x-comp.banner></x-comp.banner>
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <h2>Article categories page:</h2>
                <ul class="list-unstyled">
                    @foreach ($articleCategories as $category)
                        <li>{{ $category->name }} : {{$category->countArticle()}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection