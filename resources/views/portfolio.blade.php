@extends('components.layout')

@section('content')
    <x-comp.banner :page="$page"></x-comp.banner>
    <div class="container py-5">
        <div class="row">
            @foreach ($items as $item)
                <div class="col-4 mb-4">
                    <img src="{{ $item->image }}" style="width: 100%" alt="">
                </div>
            @endforeach
        </div>
    </div>
@endsection