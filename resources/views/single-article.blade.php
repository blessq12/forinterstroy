@extends('components.layout')

@section('content')
<x-comp.banner :page="$page"></x-comp.banner>
<div class="container py-5">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-8 pb-4">
            <div class="article-image">
                <img src="{{ $article->image }}" alt="">
            </div>
            <div class="article">
                
                <div class="title">
                    <h5>{{ $article->name }}</h5>
                    <hr>
                </div>
                <div class="content">
                    {!! $article->content !!}
                </div>
            </div>
            <x-comp.cta :company="$company"></x-comp.cta>
        </div>
        <div class="col-12 col-md-12 col-lg-4">
            <x-comp.article-sidebar></x-comp.article-sidebar>
        </div>
    </div>
</div>
@endsection