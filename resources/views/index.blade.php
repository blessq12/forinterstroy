@extends('components.layout')
@section('content')
    <div id="app">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <h2>{{ $company->name }}</h2>
                    <p class="text-muted">{{ $company->description }}</p>
                    <span class="d-block">{{ $company->phone }}</span>
                    <span class="d-block">{{ $company->phone_additional }}</span>
                </div>
            </div>
        </div>
    </div>
@endsection