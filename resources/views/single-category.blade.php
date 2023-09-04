@extends('components.layout')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <h2>{{ $category->name }}</h2>
                <p class="mb-0">{{ $category->description }}</p>
                <ul>
                    @foreach ($projects as $project)
                        <li>{{ $project->name }}</li>
                    @endforeach
                </ul>
                {{ $projects->appends($_GET)->links() }}
            </div>
        </div>
    </div>
@endsection