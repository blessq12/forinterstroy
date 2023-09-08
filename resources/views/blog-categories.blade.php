@extends('components.layout')

@section('content')
    <x-comp.banner :page="$page"></x-comp.banner>
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-8">
                <div class="row">
                    
                    @if ($articles)
                        @foreach ($articles as $article)
                            <div class="col-12 col-md-6">
                                <div class="blog-single">
                                    <div class="header" style="background: url('{{ $article->image }}')"></div>
                                    <div class="content">
                                        <h6>{{ $article->name }}</h6>
                                        <p>{{  mb_strimwidth($article->description, 0, 100, '...') }}</p>
                                    </div>
                                    <div class="footer">
                                        <a href="{{ route( 'singleArticlePage' , [ 'id' => $article->id ]) }}">Читать полностью</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <x-comp.empty-set></x-comp.empty-set>
                    @endif
                   
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <x-comp.article-sidebar></x-comp.article-sidebar>
            </div>
        </div>
    </div>
@endsection