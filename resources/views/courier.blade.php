@extends('layouts.app')

@section('title')
    Викликати кур'єра - Екочистка одягу та домашнього текстилю
@endsection

@section('content')
    {{-- @include('includes.elements.header-box') --}}
    @include('includes.elements.courier_form-box')
    @include('includes.elements.delivery-box')
    @include('includes.elements.consultation')
@endsection