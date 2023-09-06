@extends('components.layout')
@section('content')
    <x-comp.banner :page="$page"></x-comp.banner>
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-8">
                <div class="project-slider">
                    <div class="slider-item">
                        <img src="http://via.placeholder.com/1920x1080" alt="{{ $project->name }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="project-details">
                            <div class="description">
                                <h6>Описание</h6>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem fugit adipisci deleniti iste? Nam mollitia tempora nisi exercitationem accusantium magni cumque, delectus necessitatibus tempore tenetur, enim sit atque veritatis. Placeat?
                                </p>
                            </div>
                            <div class="project-data">
                                <h6>Данные проекта</h6>
                                <ul>
                                    <li>data1 : value1</li>
                                    <li>data2 : value2</li>
                                    <li>data3 : value3</li>
                                    <li>data4 : value4</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <x-comp.cta :company="$company"></x-comp.cta>
                    </div>
                </div>
                
            </div>
            <div class="col-12 col-md-4 col-lg-4"></div>
        </div>
    </div>
@endsection