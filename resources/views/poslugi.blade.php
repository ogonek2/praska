@extends('layouts.app')

@section('title')
    Послуги та ціни - Екочистка одягу та домашнього текстилю
@endsection

@section('content')
    {{-- Hero Section --}}
    <div class="container mx-auto px-4 mb-20">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            {{-- Content --}}
            <div class="space-y-8 text-center lg:text-left">
                {{-- Badge --}}
                <div class="inline-flex items-center px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-medium">
                    <i class="fas fa-list mr-2"></i>
                    Повний спектр послуг
                </div>
                
                {{-- Main Title --}}
                <div class="space-y-6">
                    <h1 class="text-4xl lg:text-6xl font-bold leading-tight text-gray-900">
                        Послуги та <span class="text-primary">ціни</span>
                    </h1>
                    <p class="text-xl text-gray-600 leading-relaxed max-w-2xl">
                        Повний спектр послуг екочистки з 
                        <span class="font-semibold text-primary">прозорими цінами</span> та 
                        кур'єрською доставкою. Швидко, зручно, якісно!
                    </p>
                </div>
                
                {{-- CTA Buttons --}}
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <button class="bg-gradient-to-r from-primary to-secondary hover:from-primary/90 hover:to-secondary/90 text-white px-8 py-4 rounded-2xl font-semibold text-lg transition-all duration-300 shadow-lg hover:shadow-2xl modal_fade" data-modal="feedbackmd">
                        <i class="fas fa-phone mr-2"></i>
                        Замовити зараз
                    </button>
                    <a href="#services" class="border-2 border-primary text-primary hover:bg-primary hover:text-white px-8 py-4 rounded-2xl font-semibold text-lg transition-all duration-300 hover:border-primary">
                        <i class="fas fa-list mr-2"></i>
                        Наші послуги
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Services Section --}}
    @include('includes.elements.services-box')

    {{-- Price Section --}}
    @include('includes.elements.price-box')

    {{-- Consultation Section --}}
    @include('includes.elements.consultation')

    {{-- Services Navigation --}}
    @include('includes.elements.header-2-box')

    {{-- Delivery Section --}}
    @include('includes.elements.delivery-box')

    {{-- Courier Form --}}
    @include('includes.elements.courier_form-box')
@endsection

@section('scripts')
    <script src="{{ asset('js/scripts/price_slide.js') }}"></script>
@endsection