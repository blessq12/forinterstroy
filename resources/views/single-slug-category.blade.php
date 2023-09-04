@extends('components.layout')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <h2>Category Name: {{$category->name}}</h2>
                <ul class="list-unstyled py-3">
                    @foreach ($slugs as $slug)
                        <li>
                            <h4>{{ $slug->name }}</h4>
                            <a href="{{ route('single_slug_page',['id'=>$slug->id]) }}" class="btn btn-success">Enter</a>
                        </li>
                    @endforeach
                </ul>
                {{ $slugs->links() }}
            </div>
        </div>
    </div>
@endsection