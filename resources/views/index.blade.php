@extends('components.layout')
@section('content')
<hero-banner :company='@json($company)'></hero-banner>
@endsection