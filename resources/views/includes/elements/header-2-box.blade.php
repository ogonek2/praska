<div class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-secondary mb-4">Наші послуги</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Виберіть потрібну послугу або викличте кур'єра для консультації
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            {{-- Прасування --}}
            <div class="bg-white rounded-2xl shadow-lg p-8 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 animate-fade-in-up">
                <div class="bg-primary/10 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <img src="{{ asset('storage/source/svg/icons/tags/praska.svg') }}" alt="Прасування" class="w-10 h-10">
                </div>
                <h3 class="text-xl font-semibold text-secondary mb-4">Прасування</h3>
                <div class="space-y-3">
                    <a href="{{ route('courier_page') }}" class="block w-full bg-primary hover:bg-primary/90 text-white px-6 py-3 rounded-full font-semibold transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-truck mr-2"></i>
                        Викликати кур'єра
                    </a>
                    <a href="{{ route('category_page', 'prasuvannya') }}" target="_blank" class="block w-full border-2 border-primary text-primary hover:bg-primary hover:text-white px-6 py-3 rounded-full font-semibold transition-all duration-300 transform hover:scale-105">
                        Перейти
                    </a>
                </div>
            </div>

            {{-- Аквачистка --}}
            <div class="bg-white rounded-2xl shadow-lg p-8 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 animate-fade-in-up" style="animation-delay: 0.1s;">
                <div class="bg-primary/10 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <img src="{{ asset('storage/source/svg/icons/tags/aqua_clean.svg') }}" alt="Аквачистка" class="w-10 h-10">
                </div>
                <h3 class="text-xl font-semibold text-secondary mb-4">Аквачистка</h3>
                <div class="space-y-3">
                    <a href="{{ route('courier_page') }}" class="block w-full bg-primary hover:bg-primary/90 text-white px-6 py-3 rounded-full font-semibold transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-truck mr-2"></i>
                        Викликати кур'єра
                    </a>
                    <a href="{{ route('category_page', 'akvachystka') }}" target="_blank" class="block w-full border-2 border-primary text-primary hover:bg-primary hover:text-white px-6 py-3 rounded-full font-semibold transition-all duration-300 transform hover:scale-105">
                        Перейти
                    </a>
                </div>
            </div>

            {{-- Для бізнесу --}}
            <div class="bg-white rounded-2xl shadow-lg p-8 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 animate-fade-in-up" style="animation-delay: 0.2s;">
                <div class="bg-primary/10 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <img src="{{ asset('storage/source/svg/icons/tags/B2B.svg') }}" alt="Для бізнесу" class="w-10 h-10">
                </div>
                <h3 class="text-xl font-semibold text-secondary mb-4">Для бізнесу</h3>
                <div class="space-y-3">
                    <a href="{{ route('courier_page') }}" class="block w-full bg-primary hover:bg-primary/90 text-white px-6 py-3 rounded-full font-semibold transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-truck mr-2"></i>
                        Викликати кур'єра
                    </a>
                    <a href="{{ route('b2b_page') }}" target="_blank" class="block w-full border-2 border-primary text-primary hover:bg-primary hover:text-white px-6 py-3 rounded-full font-semibold transition-all duration-300 transform hover:scale-105">
                        Перейти
                    </a>
                </div>
            </div>

            {{-- Хімчистка --}}
            <div class="bg-white rounded-2xl shadow-lg p-8 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 animate-fade-in-up" style="animation-delay: 0.3s;">
                <div class="bg-primary/10 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <img src="{{ asset('storage/source/svg/icons/tags/clean.svg') }}" alt="Хімчистка" class="w-10 h-10">
                </div>
                <h3 class="text-xl font-semibold text-secondary mb-4">Хімчистка</h3>
                <div class="space-y-3">
                    <a href="{{ route('courier_page') }}" class="block w-full bg-primary hover:bg-primary/90 text-white px-6 py-3 rounded-full font-semibold transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-truck mr-2"></i>
                        Викликати кур'єра
                    </a>
                    <a href="{{ route('category_page', 'khimchystka') }}" target="_blank" class="block w-full border-2 border-primary text-primary hover:bg-primary hover:text-white px-6 py-3 rounded-full font-semibold transition-all duration-300 transform hover:scale-105">
                        Перейти
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
