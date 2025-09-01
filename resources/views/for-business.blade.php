@extends('layouts.app')

@section('title')
    Для бізнесу / B2B - Екочистка одягу та домашнього текстилю
@endsection

@section('content')
    {{-- @include('includes.elements.header-box') --}}
    @include('includes.elements.header-3-box')
    @include('includes.elements.consultation')
    @include('includes.elements.b2b_categories-box')
    @include('includes.elements.courier_form-box')
    @include('includes.elements.delivery-box')
@endsection

@section('scripts')
    <script src="{{ asset('js/scripts/price_slide.js') }}"></script>
@endsection