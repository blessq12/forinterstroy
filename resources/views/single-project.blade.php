@extends('components.layout')
@section('content')
    <x-comp.banner :page="$page"></x-comp.banner>
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-8 pb-5">
                <div class="project-slider">
                    <div class="slider-item">
                        <img src="{{ $project->image_full_1 }}" alt="{{ $project->name }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="project-details">
                            <div class="description">
                                <h6>Описание</h6>
                                <hr>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem fugit adipisci deleniti iste? Nam mollitia tempora nisi exercitationem accusantium magni cumque, delectus necessitatibus tempore tenetur, enim sit atque veritatis. Placeat?
                                </p>
                            </div>
                            <div class="project-data">
                                <h6>Данные проекта</h6>
                                <hr>
                                <ul>
                                    <li>data1 : value1</li>
                                    <li>data2 : value2</li>
                                    <li>data3 : value3</li>
                                    <li>data4 : value4</li>
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
                ></x-comp.project-sidebar>
            </div>
        </div>
    </div>
@endsection