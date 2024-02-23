@extends('components.layout')

@section('content')
    <x-comp.banner :page="$page"></x-comp.banner>
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-8">
                <div class="slug-image">
                    <img src="{{ $slug->image }}" alt="{{ $slug->name }}">
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="slug-content">
                            <div class="title">
                                <h6>Описание</h6>
                                <hr>
                            </div>
                            {!! $slug->content !!}
                        </div>
                    </div>
                </div>
                <x-comp.cta :company="$company"></x-comp.cta>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <x-comp.slug-sidebar 
                    :slug="$slug" 
                    :categories="$categories" 
                    :company="$company"
                    :page="$page"
                ></x-comp.slug-sidebar>
            </div>
        </div>
    </div>
@endsection