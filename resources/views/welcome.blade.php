@extends('layouts.app')

@section('title')
    Екочистка одягу та домашнього текстилю
@endsection

@section('content')
    {{-- @include('includes.elements.header-box') --}}
    @include('includes.elements.header-2-box')
    @include('includes.elements.road-box')
    @include('includes.elements.services-box')
    @include('includes.elements.price-box')
    @include('includes.elements.consultation')
    @include('includes.elements.recomendations-box')
    @include('includes.elements.delivery-box')
    @include('includes.elements.courier_form-box')
@endsection

@section('scripts')
    <script src="{{ asset('js/scripts/price_slide.js') }}"></script>
@endsection