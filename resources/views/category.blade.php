@extends('layouts.app')

@section('title')
    {{ $category->name ?? 'Категорія' }} - Екочистка одягу та домашнього текстилю
@endsection

@section('content')
    {{-- Hero Section --}}
    <div class="relative bg-gradient-to-br from-primary to-secondary py-20 overflow-hidden">
        {{-- Background Pattern --}}
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center text-white">
                <h1 class="text-4xl lg:text-5xl font-bold mb-4 animate-fade-in-up">
                    <i class="fas fa-tag text-primary mr-3"></i>
                    {{ $category->name ?? 'Категорія' }}
                </h1>
                <p class="text-xl max-w-3xl mx-auto opacity-90 animate-fade-in-up" style="animation-delay: 0.2s;">
                    {{ $category->description ?? 'Професійна обробка з кур\'єрською доставкою' }}
                </p>
            </div>
        </div>
    </div>

    {{-- Price Section --}}
    @include('includes.elements.price-box')

    {{-- Consultation Section --}}
    @include('includes.elements.consultation')

    {{-- Services Navigation --}}
    @include('includes.elements.header-2-box')

    {{-- Courier Form --}}
    @include('includes.elements.courier_form-box')
@endsection

@section('scripts')
    <script src="{{ asset('js/scripts/price_slide.js') }}"></script>
@endsection