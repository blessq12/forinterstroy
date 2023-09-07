@extends('components.layout')

@section('content')
    <x-comp.banner :page="$page"></x-comp.banner>
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-8">
                asdsad
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <x-comp.slug-sidebar :slug="$slug" :categories="$categories" :company="$company"></x-comp.slug-sidebar>
            </div>
        </div>
    </div>
@endsection