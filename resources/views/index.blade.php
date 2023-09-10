@extends('components.layout')
@section('content')
<hero-banner :company='@json($company)'></hero-banner>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3>Нам не всё равно!</h3>
                    <hr>
                </div>
                <div class="section-content">
                    <p>С каждого построенного дома мы жертвуем средства на благоттворительность, а именно: в детские дома, детские больницы, потому что нам не всё равно на то, что происходит сейчас в наше с вами время</p>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- опросник марквиз --}}
<x-comp.test></x-comp.test>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3>Не определились с выбором?</h3>
                    <hr>
                </div>
                <div class="section-content">
                    <p>Посмотрите готовые проекты в нашем каталоге проектов, мы постоянно обновляем его и стараемся держать всегда актуальным</p>
                    <ul class="category-list">
                        @foreach ($categories as $category)
                            <li>
                                <a href="">
                                    <div class="category-item" style="background: url('{{ $category->image }}')">
                                        <div class="overlay"></div>
                                        <div class="d-block position-relative">
                                            <h5>
                                                {{ $category->name }}
                                            </h5>
                                        </div>
                                        <span>Проектов: {{ $category->projectCount() }} шт.</span>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection