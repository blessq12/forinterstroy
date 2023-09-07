@extends('components.layout')
@section('content')
    <x-comp.banner :page="$page"></x-comp.banner>
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-8 pb-5">
                <project-slider :project='@json($project)'></project-slider>
                <div class="row">
                    <div class="col-12">
                        <div class="project-details">
                            <div class="project-data">
                                <h6>Данные проекта</h6>
                                <hr>
                                <ul>
                                    <li>
                                        <b>Площадь (с терассами)</b>: {{ $project->area }} м2
                                    </li>
                                    <li>
                                        <b>Полезная площадь</b> : {{ $project->useful_area }} м2
                                    </li>
                                    <li>
                                        <b>Кол-во комнат</b>: {{ $project->rooms }}
                                    </li>
                                    <li>
                                        <b>Кол-во сан/узлов</b>: {{ $project->bath_rooms }}
                                    </li>
                                    <li>
                                        <b>Терассы</b>: {{ ($project->terrasa) ? 'Есть' : 'Нет' }}
                                    </li>
                                    <li>
                                        <b>Балкон</b>: {{ ($project->balcon) ? 'Есть' : 'Нет' }}
                                    </li>
                                    <li>
                                        <b>Кол-во этажей</b>: {{ $project->floors }}
                                    </li>
                                    <li>
                                        <b>Высота стен</b>: {{ $project->wall_height }}
                                    </li>
                                </ul>
                            </div>
                            <div class="layout">
                                <h6>Планировка</h6>
                                <hr>
                                <div class="accordion" id="layouts">
                                    @for ($i = 0; $i < $project->floors; $i++)
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{ ($i == 0) ? "firstFloor" : "secondFloor" }}" aria-expanded="true">
                                                    {{ ($i == 0) ? "Первый этаж" : "Второй этаж"}}
                                                </button>
                                            </h2>
                                            <div id="{{ ($i == 0) ? "firstFloor" : "secondFloor" }}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#layouts">
                                                <div class="accordion-body">
                                                    <img src="{{ ($i == 0) ? $project->layout_first_floor : $project->layout_second_floor }}" alt="{{ $project->name }}">
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <x-comp.cta :company="$company"></x-comp.cta>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <x-comp.project-sidebar 
                    :categories="$categories" 
                    :company="$company" 
                    :project="$project" 
                    :category="$category"
                    :page="$page"
                ></x-comp.project-sidebar>
            </div>
        </div>
    </div>
@endsection