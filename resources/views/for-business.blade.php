@extends('layouts.app')

@section('title')
    Для бізнесу / B2B - Екочистка одягу та домашнього текстилю
@endsection

@section('content')
    {{-- Hero Section --}}
    <div class="container mx-auto px-4 mb-20">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            {{-- Content --}}
            <div class="space-y-8 text-center lg:text-left">
                {{-- Breadcrumb --}}
                <nav class="flex items-center space-x-2 text-sm">
                    <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Головна</a>
                    <span>/</span>
                    <span class="text-primary">B2B</span>
                </nav>
                
                {{-- Main Title --}}
                <div class="space-y-6">
                    <h1 class="text-4xl lg:text-6xl font-bold leading-tight text-gray-900">
                        Для <span class="text-primary">бізнесу</span>
                    </h1>
                    <p class="text-xl text-gray-600 leading-relaxed max-w-2xl">
                        Професійні послуги екочистки з 
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
                        <i class="fas fa-truck mr-2"></i>
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
                            <i class="fas fa-shield-alt text-green-500 text-xl"></i>
                        </div>
                        <div class="text-2xl font-bold text-gray-900">100%</div>
                        <div class="text-sm text-gray-600">Гарантія якості</div>
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
                                <i class="fas fa-building text-white text-3xl"></i>
                            </div>
                            
                            {{-- Text --}}
                            <div class="space-y-2">
                                <h3 class="text-xl font-semibold text-gray-900">B2B послуги</h3>
                                <p class="text-gray-600">Професійна чистка для бізнесу</p>
                            </div>
                            
                            {{-- Features --}}
                            <div class="grid grid-cols-2 gap-4 text-sm">
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-check text-green-500"></i>
                                    <span class="text-gray-600">Корпоративні тарифи</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-check text-green-500"></i>
                                    <span class="text-gray-600">Кур'єрська доставка</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-check text-green-500"></i>
                                    <span class="text-gray-600">Гнучкий графік</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-check text-green-500"></i>
                                    <span class="text-gray-600">Документообіг</span>
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
    <div class="py-20">
        @include('includes.elements.header-3-box')
    </div>

    {{-- Courier Delivery Highlight --}}
    <div class="bg-gradient-to-r from-primary/10 to-secondary/10 py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-secondary mb-4">
                    <i class="fas fa-truck text-primary mr-3"></i>
                    Кур'єрська доставка
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Забираємо та доставляємо ваші речі прямо до офісу. Без черг, без турбот!
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-lg text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-map-marker-alt text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Забираємо</h3>
                    <p class="text-gray-600">Кур'єр приїжджає за вашими речами в зручний час</p>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-lg text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-cogs text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Обробляємо</h3>
                    <p class="text-gray-600">Професійна екочистка на сучасному обладнанні</p>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-lg text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-home text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Доставляємо</h3>
                    <p class="text-gray-600">Повертаємо чистий одяг прямо до вашого офісу</p>
                </div>
            </div>
        </div>
    </div>

    {{-- B2B Services --}}
    <div id="services" class="py-20">
        @include('includes.elements.b2b_categories-box')
    </div>

    {{-- Consultation Section --}}
    <div id="consultation" class="py-20">
        @include('includes.elements.consultation')
    </div>

    {{-- Courier Form --}}
    <div class="py-20">
        @include('includes.elements.courier_form-box')
    </div>

    {{-- Delivery Info --}}
    <div class="py-20">
        @include('includes.elements.delivery-box')
    </div>
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