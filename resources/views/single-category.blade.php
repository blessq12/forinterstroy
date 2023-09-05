@extends('components.layout')
@section('content')
    <x-comp.banner :page="$page"></x-comp.banner>
    <div class="container py-5">
        <div class="row">
            @if ($projects->total() > 0)
                <div class="col-12 col-md-8 col-lg-8">
                    <div class="row">
                        @foreach ($projects as $project)
                            <div class="col-6 col-md-4">
                                {{ $project->name }}
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <x-comp.empty-set></x-comp.empty-set>
            @endif
            <div class="col-12 col-md-4 col-lg-4">
                <p class="text-success">
                    sidebar will be here
                </p>
            </div>
            <div class="col">
                {{ $projects->appends($_GET)->links() }}
            </div>
        </div>
    </div>
@endsection