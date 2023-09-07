@extends('components.layout')
@section('content')
    <x-comp.banner :page="$page"></x-comp.banner>
    <div class="container py-5">
        <div class="row">    
            <div class="col-12 col-md-12 col-lg-8">
                <div class="row">
                    @if ($slugs->total() > 0)
                        @foreach ($slugs as $slug)
                            <div class="col-12 col-md-6">
                                <div class="slug-item">
                                    <div class="header" style="background: url('{{ $slug->thumb }}')"></div>
                                    <div class="content">
                                        <h6>{{ $slug->name }}</h6>
                                        <p>{{ mb_strimwidth($slug->description, 0, 100, '...') }}</p>
                                    </div>
                                    <div class="footer">
                                        <a href="{{ route('single_slug_page', ['id' => $slug->id]) }}">Подробнее</a>
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
                <x-comp.slug-sidebar :categories="$categories" :page="$page"></x-comp.slug-sidebar>
            </div>
            {{ $slugs->links() }}
            </div>
        </div>
    </div>
@endsection