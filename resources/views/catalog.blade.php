@extends('components.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Catalog page</h2>
                <ul>
                    @foreach ($categories as $category)
                        <li>
                            <h5>{{ $category->name }}</h5>
                            
                            <a href="{{ route('catalog_page',['category'=>$category->uri]) }}">Перейти</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection