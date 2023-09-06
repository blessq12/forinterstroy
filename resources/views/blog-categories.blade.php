@extends('components.layout')

@section('content')
    <x-comp.banner :page="$page"></x-comp.banner>
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-8">
                <div class="row">
                    @foreach ($articles as $article)
                        <div class="col-12 col-md-6">
                            {{$article->name}}
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                sidebar
            </div>
        </div>
    </div>
@endsection