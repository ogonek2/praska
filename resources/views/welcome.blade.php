@extends('layouts.app')

@section('title')
    Екочистка одягу та домашнього текстилю
@endsection

@section('content')
    {{-- Hero Section --}}
    <div class="container mx-auto px-4 mb-20">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            {{-- Content --}}
            <div class="space-y-8 text-center lg:text-left">
                {{-- Badge --}}
                <div class="inline-flex items-center px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-medium">
                    <i class="fas fa-leaf mr-2"></i>
                    Екологічно чисто • 100% безпечно
                </div>
                
                {{-- Main Title --}}
                <div class="space-y-6">
                    <h1 class="text-4xl lg:text-6xl font-bold leading-tight text-gray-900">
                        Екочистка <span class="text-primary">одягу</span>
                    </h1>
                    <p class="text-xl text-gray-600 leading-relaxed max-w-2xl">
                        Професійна екочистка одягу та домашнього текстилю з 
                        <span class="font-semibold text-primary">кур'єрською доставкою</span>. 
                        Швидко, зручно, якісно!
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
                
                {{-- Quick Stats --}}
                <div class="grid grid-cols-3 gap-6 pt-8">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-primary/20 to-primary/10 rounded-2xl flex items-center justify-center mx-auto mb-3">
                            <i class="fas fa-truck text-primary text-xl"></i>
                        </div>
                        <div class="text-2xl font-bold text-gray-900">24/7</div>
                        <div class="text-sm text-gray-600">Кур'єрська доставка</div>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-green-500/20 to-green-500/10 rounded-2xl flex items-center justify-center mx-auto mb-3">
                            <i class="fas fa-leaf text-green-500 text-xl"></i>
                        </div>
                        <div class="text-2xl font-bold text-gray-900">100%</div>
                        <div class="text-sm text-gray-600">Екологічно чисто</div>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-orange-500/20 to-orange-500/10 rounded-2xl flex items-center justify-center mx-auto mb-3">
                            <i class="fas fa-clock text-orange-500 text-xl"></i>
                        </div>
                        <div class="text-2xl font-bold text-gray-900">24ч</div>
                        <div class="text-sm text-gray-600">Швидке виконання</div>
                    </div>
                </div>
            </div>
            
            {{-- Visual Element --}}
            <div class="relative">
                <div class="relative z-10">
                    {{-- Main Illustration Container --}}
                    <div class="bg-gradient-to-br from-primary/10 to-secondary/10 rounded-3xl p-8 border border-gray-200">
                        <div class="text-center space-y-6">
                            {{-- Icon --}}
                            <div class="w-24 h-24 bg-gradient-to-br from-primary to-secondary rounded-3xl flex items-center justify-center mx-auto shadow-lg">
                                <i class="fas fa-tshirt text-white text-3xl"></i>
                            </div>
                            
                            {{-- Text --}}
                            <div class="space-y-2">
                                <h3 class="text-xl font-semibold text-gray-900">Професійна чистка</h3>
                                <p class="text-gray-600">Ваш одяг буде виглядати як новий</p>
                            </div>
                            
                            {{-- Features --}}
                            <div class="grid grid-cols-2 gap-4 text-sm">
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-check text-green-500"></i>
                                    <span class="text-gray-600">Еко засоби</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-check text-green-500"></i>
                                    <span class="text-gray-600">Безпечно</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-check text-green-500"></i>
                                    <span class="text-gray-600">Швидко</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-check text-green-500"></i>
                                    <span class="text-gray-600">Зручно</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- Floating Elements --}}
                <div class="absolute -top-4 -right-4 w-12 h-12 bg-gradient-to-br from-primary to-secondary rounded-2xl flex items-center justify-center shadow-lg">
                    <i class="fas fa-star text-white"></i>
                </div>
                <div class="absolute -bottom-4 -left-4 w-10 h-10 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center shadow-lg">
                    <i class="fas fa-heart text-white text-sm"></i>
                </div>
            </div>
        </div>
    </div>

    {{-- Services Navigation --}}
    @include('includes.elements.header-2-box')

    {{-- Road/Process Section --}}
    @include('includes.elements.road-box')

    {{-- Services Section --}}
    <div id="services">
        @include('includes.elements.services-box')
    </div>

    {{-- Price Section --}}
    @include('includes.elements.price-box')

    {{-- Consultation Section --}}
    @include('includes.elements.consultation')

    {{-- Recommendations Section --}}
    @include('includes.elements.recomendations-box')

    {{-- Delivery Section --}}
    @include('includes.elements.delivery-box')

    {{-- Courier Form --}}
    @include('includes.elements.courier_form-box')
@endsection

@section('scripts')
    <script src="{{ asset('js/scripts/price_slide.js') }}"></script>
    <script>
        // Page-specific animations
        document.addEventListener('DOMContentLoaded', function() {
            // Add floating animation to stats
            document.querySelectorAll('.grid.grid-cols-3 > div').forEach((stat, index) => {
                stat.style.animationDelay = `${index * 0.2}s`;
                stat.classList.add('animate-fade-in-up');
            });
        });
    </script>
@endsection