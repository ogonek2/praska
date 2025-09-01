@extends('layouts.app')

@section('title')
    Доставка - Екочистка одягу та домашнього текстилю
@endsection

@section('content')
    {{-- @include('includes.elements.header-box') --}}
    @include('includes.elements.delivery-box')
    @include('includes.elements.consultation')
    @include('includes.elements.courier_form-box')
    @include('includes.elements.header-3-box')
@endsection

@section('scripts')
    <script src="{{ asset('js/scripts/price_slide.js') }}"></script>
@endsection
