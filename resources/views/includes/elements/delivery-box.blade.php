<div class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-secondary mb-4">
                <i class="fas fa-shipping-fast text-primary mr-3"></i>
                Доставка
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Швидка та надійна доставка ваших речей прямо до дверей
            </p>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            {{-- Content --}}
            <div class="space-y-8 animate-fade-in-left">
                {{-- Working Hours --}}
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <div class="flex items-center mb-6">
                        <div class="bg-primary/10 w-12 h-12 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-clock text-primary text-xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-secondary">Графік роботи</h3>
                    </div>
                    <div class="space-y-4">
                        <p class="text-gray-600">
                            Телефонуйте за номером <strong class="text-primary">+38 (xxx) xxx-xx-xx</strong> або 
                            <span class="text-primary cursor-pointer modal_fade" data-modal="feedbackmd">оформити замовлення онлайн.</span>
                        </p>
                        <p class="text-gray-600">
                            Графік роботи кур'єрської служби з <strong>10:00-20:00 без вихідних</strong>.
                        </p>
                    </div>
                </div>
                
                {{-- Delivery Cost --}}
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <div class="flex items-center mb-6">
                        <div class="bg-primary/10 w-12 h-12 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-money-bill-wave text-primary text-xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-secondary">Вартість доставки</h3>
                    </div>
                    <div class="space-y-4">
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="bg-primary/5 p-4 rounded-xl">
                                <div class="text-2xl font-bold text-primary">350 грн</div>
                                <div class="text-sm text-gray-600">Доставка в обидві сторони</div>
                            </div>
                            <div class="bg-primary/5 p-4 rounded-xl">
                                <div class="text-2xl font-bold text-primary">24 години</div>
                                <div class="text-sm text-gray-600">Термін виконання</div>
                            </div>
                        </div>
                        <div class="space-y-2 text-gray-600">
                            <p>• Мінімальна сума замовлення по Києву: <strong>350 грн</strong></p>
                            <p>• По передмістю Києва: <strong>700 грн</strong></p>
                            <p>• Обслуговуємо все місто Київ</p>
                            <p class="text-primary font-semibold">• Безкоштовна доставка від 1500 грн</p>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Image --}}
            <div class="animate-fade-in-right">
                <div class="relative">
                    <img src="{{ asset('storage/source/images/delivery-girl-blue-uniform-cap-holding-box-package-shoulder-smiling-friendly-positive-happy-standing.png') }}" 
                         alt="Кур'єрська доставка" 
                         class="w-full h-auto rounded-2xl shadow-2xl">
                    {{-- Floating Elements --}}
                    <div class="absolute -top-4 -right-4 bg-primary text-white p-4 rounded-full shadow-lg animate-bounce-slow">
                        <i class="fas fa-truck text-2xl"></i>
                    </div>
                    <div class="absolute -bottom-4 -left-4 bg-success text-white p-4 rounded-full shadow-lg animate-pulse-slow">
                        <i class="fas fa-check text-2xl"></i>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Additional Info --}}
        <div class="mt-16 bg-white rounded-2xl shadow-lg p-8">
            <div class="flex items-center mb-6">
                <div class="bg-primary/10 w-12 h-12 rounded-full flex items-center justify-center mr-4">
                    <i class="fas fa-shield-alt text-primary text-xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-secondary">Безпечна транспортування</h3>
            </div>
            <p class="text-gray-600 leading-relaxed">
                Наші автомобілі обладнані так, що при транспортуванні ваш одяг не пам'ятається. Одяг розвішується
                на металевий тремпель з картонною вкладкою під плічка і упаковується поліетиленовою плівкою.
            </p>
        </div>
    </div>
</div>