@extends('components.layout')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <h2>{{ $category->name }}</h2>
                <p class="mb-0">{{ $category->description }}</p>
                <ul class="list-unstyled ">
                    @foreach ($projects as $project)
                        <li>
                            <h4>{{ $project->name }}</h4>
                            <ul class="list-unstyled d-flex align-items-center py-3">
                                <li class="px-1">Площадь: {{ $project->area }}</li>
                                <li class="px-1">Этажей: {{ $project->floors }}</li>
                            </ul>
                            <a href="{{ route('single_project_page', ['id' => $project->id ]) }}" class="btn btn-primary"> перейти</a>
                        </li>
                    @endforeach
                </ul>
                {{ $projects->appends($_GET)->links() }}
            </div>
        </div>
    </div>
@endsection