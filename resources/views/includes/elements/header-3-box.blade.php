<div class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-secondary mb-4">Наші послуги</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Виберіть потрібну послугу для детального ознайомлення
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            {{-- Прасування --}}
            <a href="{{ route('category_page', 'prasuvannya') }}" target="_blank" 
               class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 animate-fade-in-up">
                <div class="p-8 text-center">
                    <div class="bg-primary/10 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <img src="{{ asset('storage/source/svg/icons/tags/praska.svg') }}" alt="Прасування" class="w-10 h-10">
                    </div>
                    <h3 class="text-xl font-semibold text-secondary mb-2 group-hover:text-primary transition-colors">Прасування</h3>
                    <p class="text-gray-600 text-sm">Професійне прасування одягу</p>
                </div>
            </a>

            {{-- Аквачистка --}}
            <a href="{{ route('category_page', 'akvachystka') }}" target="_blank" 
               class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 animate-fade-in-up" style="animation-delay: 0.1s;">
                <div class="p-8 text-center">
                    <div class="bg-primary/10 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <img src="{{ asset('storage/source/svg/icons/tags/aqua_clean.svg') }}" alt="Аквачистка" class="w-10 h-10">
                    </div>
                    <h3 class="text-xl font-semibold text-secondary mb-2 group-hover:text-primary transition-colors">Аквачистка</h3>
                    <p class="text-gray-600 text-sm">Екологічно чиста обробка</p>
                </div>
            </a>

            {{-- Для бізнесу --}}
            <a href="{{ route('b2b_page') }}" target="_blank" 
               class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 animate-fade-in-up" style="animation-delay: 0.2s;">
                <div class="p-8 text-center">
                    <div class="bg-primary/10 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <img src="{{ asset('storage/source/svg/icons/tags/B2B.svg') }}" alt="Для бізнесу" class="w-10 h-10">
                    </div>
                    <h3 class="text-xl font-semibold text-secondary mb-2 group-hover:text-primary transition-colors">Для бізнесу</h3>
                    <p class="text-gray-600 text-sm">Корпоративні послуги</p>
                </div>
            </a>

            {{-- Хімчистка --}}
            <a href="{{ route('category_page', 'khimchystka') }}" target="_blank" 
               class="group bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 animate-fade-in-up" style="animation-delay: 0.3s;">
                <div class="p-8 text-center">
                    <div class="bg-primary/10 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <img src="{{ asset('storage/source/svg/icons/tags/clean.svg') }}" alt="Хімчистка" class="w-10 h-10">
                    </div>
                    <h3 class="text-xl font-semibold text-secondary mb-2 group-hover:text-primary transition-colors">Хімчистка</h3>
                    <p class="text-gray-600 text-sm">Професійна хімчистка</p>
                </div>
            </a>
        </div>
    </div>
</div>
