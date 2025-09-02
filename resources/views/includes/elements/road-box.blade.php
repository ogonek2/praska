<div class="py-20 bg-gradient-to-r from-primary/10 to-secondary/10">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-secondary mb-4">
                <i class="fas fa-route text-primary mr-3"></i>
                Як це працює
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Простий процес за 3 кроки - від замовлення до отримання чистих речей
            </p>
        </div>
        
        <div class="max-w-4xl mx-auto">
            <div class="grid md:grid-cols-3 gap-8">
                {{-- Step 1 --}}
                <div class="text-center animate-fade-in-up">
                    <div class="relative mb-8">
                        <div class="bg-primary w-20 h-20 rounded-full flex items-center justify-center mx-auto shadow-lg">
                            <img src="{{ asset('storage/source/svg/courier_item.svg') }}" alt="Виклик кур'єра" class="w-10 h-10 filter brightness-0 invert">
                        </div>
                        <div class="absolute -top-2 -right-2 bg-secondary text-white w-8 h-8 rounded-full flex items-center justify-center text-sm font-bold">
                            1
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-secondary mb-4">Виклик кур'єра</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Замовляйте на сайті, обираєте зручний час, і наш кур'єр приїжджає до ваших дверей.
                    </p>
                </div>
                
                {{-- Step 2 --}}
                <div class="text-center animate-fade-in-up" style="animation-delay: 0.2s;">
                    <div class="relative mb-8">
                        <div class="bg-primary w-20 h-20 rounded-full flex items-center justify-center mx-auto shadow-lg">
                            <img src="{{ asset('storage/source/svg/goingto_item.svg') }}" alt="Уже в дорозі" class="w-10 h-10 filter brightness-0 invert">
                        </div>
                        <div class="absolute -top-2 -right-2 bg-secondary text-white w-8 h-8 rounded-full flex items-center justify-center text-sm font-bold">
                            2
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-secondary mb-4">Уже в дорозі</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Ми забираємо речі, проводимо професійну чистку, прасування та упаковку. Ви в цей час займаєтесь своїми справами.
                    </p>
                </div>
                
                {{-- Step 3 --}}
                <div class="text-center animate-fade-in-up" style="animation-delay: 0.4s;">
                    <div class="relative mb-8">
                        <div class="bg-primary w-20 h-20 rounded-full flex items-center justify-center mx-auto shadow-lg">
                            <img src="{{ asset('storage/source/svg/complated_item.svg') }}" alt="Отримуєш чисті речі" class="w-10 h-10 filter brightness-0 invert">
                        </div>
                        <div class="absolute -top-2 -right-2 bg-secondary text-white w-8 h-8 rounded-full flex items-center justify-center text-sm font-bold">
                            3
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-secondary mb-4">Отримуєш чисті речі</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Доставляємо все назад — ідеально чисте, охайне, свіже. Просто розкладай у шафу.
                    </p>
                </div>
            </div>
        </div>
        
        {{-- CTA Section --}}
        <div class="mt-16 text-center">
            <div class="bg-white rounded-2xl shadow-xl p-8 max-w-2xl mx-auto">
                <h3 class="text-2xl font-bold text-secondary mb-4">Готові спробувати?</h3>
                <p class="text-gray-600 mb-6">Замовте кур'єра прямо зараз і отримайте чисте одяг без турбот</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="bg-primary hover:bg-primary/90 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl modal_fade" data-modal="feedbackmd">
                        <i class="fas fa-phone mr-2"></i>
                        Замовити зараз
                    </button>
                    <a href="{{ route('courier_page') }}" class="border-2 border-primary text-primary hover:bg-primary hover:text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-truck mr-2"></i>
                        Викликати кур'єра
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
