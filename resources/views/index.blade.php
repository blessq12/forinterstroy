@extends('components.layout')
@section('content')
<hero-banner :company='@json($company)'></hero-banner>

<section class="py-5" style="background: url('https://www.toptal.com/designers/subtlepatterns/uploads/dot-grid.png')">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 pb-5 p-md-0">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h3>От проектировки до строительства</h3>
                            <hr>
                        </div>
                        <div class="section-content">
                            <p>
                                Опыт работы дает множество преимуществ, главное из которых – надежные, проверенные временем поставщики материалов для строительства и отделки.
                                Именно с такими компания «ФорИнтерСтрой» и сотрудничает на постоянной основе. Партнерские отношения с региональными производителями бруса, поставщиками отделочных материалов дают не только уверенность в качестве их продукции.
                            </p>
                            <ul>
                                <li>
                                    <b>Расширенная гарантия включена в договор</b>
                                </li>
                                <li>
                                    <b>Быстрое возведение</b>
                                </li>
                                <li>
                                    <b>Цена не меняется в процессе строительства</b>
                                </li>
                                <li>
                                    <b>Строим без предоплаты</b>
                                </li>
                                <li>
                                    <b>Помощь и сопровождение на всех этапах строительства</b>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="from-to">
                    <div class="image-carts">
                        <div class="carts-wrap">
                            <div class="image-cart first">
                                <img src="/images/construction-project.jpg" alt="">
                            </div>
                            <div class="image-cart second">
                                <img src="/images/random-project.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3>Не определились с выбором?</h3>
                    <hr>
                </div>
                <div class="section-content">
                    <p>
                        Посмотрите готовые проекты домов в нашем каталоге, мы разбили его на категории, чтобы вам было проще ориентироваться в нем 
                    </p>
                    <ul class="index-project-categories">
                        @foreach ($categories as $category)
                            <li class="index-single-category">
                                <a href="{{ route('catalog_page', [ 'category' => $category->uri]) }}">
                                    <div class="index-category-card">
                                        <div class="overlay"></div>
                                        <div class="image" style="background: url('{{ $category->image }}')"></div>
                                        <div class="content">
                                            <h4>{{ $category->name }}</h4>
                                            <div class="badge">
                                                Проектов: {{ $category->projectCount() }} шт
                                            </div>
                                        </div>
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
<section class="pb-5">
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bank-section">
                    <img src="{{ asset('/images/pochta_bank.jpeg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pb-5">
<x-comp.test></x-comp.test>
</section>
@endsection