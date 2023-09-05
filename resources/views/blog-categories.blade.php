@extends('components.layout')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <h2>Article categories page:</h2>
                <ul class="list-unstyled">
                    @foreach ($articleCategories as $category)
                        <li>{{ $category->name }}</li>
                    @endforeach
                </ul>
                <h2>Articles</h2>
                <ul class="list-unstyled">
                    @foreach ($articles as $article)
                        <li>
                            <a href="{{ route('singleArticlePage', ['id' => $article->id]) }}">
                                {{ $article->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection