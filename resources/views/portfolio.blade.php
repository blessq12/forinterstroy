@extends('components.layout')

@section('content')
    <x-comp.banner :page="$page"></x-comp.banner>
    <div class="container py-5">
        <div class="row">
            @foreach ($items as $key => $val)
                <div class="col-4 mb-4">
                    <img src="/images/portfolio/{{ $val }}" style="width: 100%" alt="">
                </div>
            @endforeach
        </div>
    </div>
@endsection