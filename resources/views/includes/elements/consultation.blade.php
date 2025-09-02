<div class="container mx-auto px-4 mb-20">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
        {{-- Left Content --}}
        <div class="space-y-8">
            <div class="space-y-6">
                <div class="inline-flex items-center px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-medium">
                    <i class="fas fa-phone mr-2"></i>
                    Безкоштовна консультація
                </div>
                
                <h2 class="text-4xl lg:text-5xl font-bold leading-tight text-gray-900">
                    Отримати <span class="text-primary">консультацію</span>
                </h2>
                
                <p class="text-xl text-gray-600 leading-relaxed">
                    Залиште свої контакти і ми зв'яжемося з вами найближчим часом для обговорення ваших потреб
                </p>
            </div>
            
            {{-- Features --}}
            <div class="grid grid-cols-2 gap-6">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-primary/20 to-primary/10 rounded-xl flex items-center justify-center">
                        <i class="fas fa-clock text-primary text-lg"></i>
                    </div>
                    <div>
                        <div class="font-semibold text-gray-900">Швидко</div>
                        <div class="text-sm text-gray-600">Відповідь за 15 хв</div>
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-500/20 to-green-500/10 rounded-xl flex items-center justify-center">
                        <i class="fas fa-shield-alt text-green-500 text-lg"></i>
                    </div>
                    <div>
                        <div class="font-semibold text-gray-900">Безпечно</div>
                        <div class="text-sm text-gray-600">Конфіденційно</div>
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-orange-500/20 to-orange-500/10 rounded-xl flex items-center justify-center">
                        <i class="fas fa-user-tie text-orange-500 text-lg"></i>
                    </div>
                    <div>
                        <div class="font-semibold text-gray-900">Експерт</div>
                        <div class="text-sm text-gray-600">Професійна порада</div>
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-500/20 to-purple-500/10 rounded-xl flex items-center justify-center">
                        <i class="fas fa-gift text-purple-500 text-lg"></i>
                    </div>
                    <div>
                        <div class="font-semibold text-gray-900">Безкоштовно</div>
                        <div class="text-sm text-gray-600">Без зобов'язань</div>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Right Form --}}
        <div class="relative">
            <div class="bg-white rounded-3xl shadow-2xl p-8 lg:p-10 border border-gray-100 relative overflow-hidden">
                {{-- Background Pattern --}}
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-primary/5 to-secondary/5 rounded-full -translate-y-16 translate-x-16"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-gradient-to-tr from-secondary/5 to-primary/5 rounded-full translate-y-12 -translate-x-12"></div>
                
                <div class="relative z-10">
                    <div class="text-center mb-8">
                        <div class="w-16 h-16 bg-gradient-to-br from-primary to-secondary rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <i class="fas fa-paper-plane text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Зв'яжіться з нами</h3>
                        <p class="text-gray-600">Заповніть форму і ми обов'язково відповімо</p>
                    </div>
                    
                    <form method="POST" action="#" class="space-y-6">
                        @csrf
                        <div class="space-y-4">
                            <div class="form-group">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Ім'я *</label>
                                <input type="text" id="name_fd" placeholder="Введіть ваше ім'я" 
                                       class="w-full px-4 py-4 border-2 border-gray-200 rounded-2xl focus:border-primary focus:outline-none transition-all duration-300 text-lg bg-gray-50 focus:bg-white">
                            </div>
                            <div class="form-group">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Номер телефону *</label>
                                <input type="tel" id="phone_fd" placeholder="+380 (XX) XXX XX XX" 
                                       class="w-full px-4 py-4 border-2 border-gray-200 rounded-2xl focus:border-primary focus:outline-none transition-all duration-300 text-lg bg-gray-50 focus:bg-white">
                            </div>
                        </div>
                        
                        <div class="pt-4">
                            <button class="w-full bg-gradient-to-r from-primary to-secondary hover:from-primary/90 hover:to-secondary/90 text-white px-8 py-4 rounded-2xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-2xl group" type="submit">
                                <i class="fas fa-paper-plane mr-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                                Відправити заявку
                            </button>
                        </div>
                        
                        <div class="text-center pt-4">
                            <p class="text-sm text-gray-500">
                                Натискаючи кнопку, ви погоджуєтесь з 
                                <a href="#" class="text-primary hover:underline">умовами обробки даних</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
