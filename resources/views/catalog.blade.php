@extends('components.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Catalog page</h2>
                <ul>
                    @foreach ($categories as $category)
                        <li>{{ $category->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection