@extends('components.layout')
@section('content')
    <x-comp.banner :page="$page"></x-comp.banner>
    <div class="container py-5">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="category-item">
                        <div class="image" style="background: url('http://via.placeholder.com/512x512')"></div>
                        <div class="content">
                            <h5>{{ $category->name }}</h5>
                            <p>Кол-во проектов: {{ $category->projectCount() }}</p>
                        </div>
                        <div class="footer">
                            <a href="{{ route('catalog_page', ['category' => $category->uri]) }}">Перейти</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection