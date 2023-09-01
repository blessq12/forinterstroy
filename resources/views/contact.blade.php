@extends('components.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Contact page {{ $company->name }}</h2>
                <p>{{ $company->description }}</p>
            </div>
        </div>
    </div>
@endsection