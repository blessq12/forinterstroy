@extends('components.layout')
@section('content')
    <x-comp.banner :page="$page"></x-comp.banner>
    <div class="container py-5">
        <div class="row">
            @if ($projects->total() > 0)
                <div class="col-12 col-md-8 col-lg-8">
                    <div class="row">
                        @foreach ($projects as $project)
                            <div class="col-12 col-md-6">
                                <div class="project-item">
                                    <div class="header" style="background: url('{{ $project->image_thumb_1 }}')"></div>
                                    <div class="content">
                                        <h6>{{ $project->name }}</h6>
                                        <ul>
                                            <li>
                                                <span>Ванны</span>
                                                <i class="fa fa-bath"></i> {{ $project->bath_rooms }}
                                            </li>
                                            <li>
                                                <span>Этажей</span>
                                                <i class="fa fa-building"></i> {{ $project->floors }}
                                            </li>
                                            <li>
                                                <span>Комнат</span>
                                                <i class="fa fa-inbox"></i> {{ $project->rooms }}
                                            </li>
                                            <li>
                                                <span>Площадь</span>
                                                <i class="fa fa-map"></i> {{ $project->area }}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="footer">
                                        <a href="{{ route('single_project_page',['id'=>$project->id]) }}">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col">
                            {{ $projects->appends($_GET)->links() }}
                        </div>
                    </div>
                </div>
            @else
                <x-comp.empty-set></x-comp.empty-set>
            @endif
            @if ($projects->total() > 0)
            <div class="col-12 col-md-4 col-lg-4">
                <x-comp.project-sidebar 
                    :project="$project" 
                    :category="$category" 
                    :categories="$categories" 
                    :company="$company"
                    :page="$page"
                ></x-comp.project-sidebar>
            </div>
            @endif
        </div>
    </div>
@endsection