<div class="container mx-auto px-4 mb-20">
    <div class="text-center mb-16">
        <h2 class="text-4xl font-bold text-gray-900 mb-4">Наші B2B послуги</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Виберіть категорію послуг для детального ознайомлення
        </p>
    </div>
    
    <div class="w-full">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @foreach ($b2b_data as $index => $item)
                <a href="{{ route('b2b_page_show', $item->href) }}" 
                   class="group relative h-80 rounded-3xl overflow-hidden transition-all duration-700 hover:scale-105"
                   style="animation-delay: {{ $index * 0.1 }}s;">
                    
                    {{-- Light Background --}}
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/20 via-secondary/15 to-primary/25 group-hover:from-primary/30 group-hover:via-secondary/25 group-hover:to-primary/35 transition-all duration-700"></div>
                    
                    {{-- Animated Pattern Overlay --}}
                    <div class="absolute inset-0 opacity-30 group-hover:opacity-40 transition-opacity duration-700">
                        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.1"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] animate-pulse"></div>
                    </div>
                    
                    {{-- Floating Geometric Shapes --}}
                    <div class="absolute top-6 right-6 w-16 h-16 bg-white/20 rounded-2xl rotate-45 group-hover:rotate-90 group-hover:scale-110 transition-all duration-500"></div>
                    <div class="absolute bottom-6 left-6 w-12 h-12 bg-white/15 rounded-full group-hover:scale-125 transition-all duration-500"></div>
                    <div class="absolute top-1/2 left-4 w-8 h-8 bg-white/10 rounded-lg rotate-12 group-hover:rotate-45 transition-all duration-500"></div>
                    
                    {{-- Main Content --}}
                    <div class="relative z-10 h-full flex flex-col justify-between p-6 text-gray-900">
                        {{-- Top Section --}}
                        <div class="space-y-4">
                            {{-- Icon with Category-specific Icons --}}
                            <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center group-hover:bg-white/30 group-hover:scale-110 transition-all duration-500 shadow-lg">
                                @php
                                    $iconMap = [
                                        'restaurants' => 'fas fa-utensils',
                                        'cafes' => 'fas fa-coffee',
                                        'kindergartens' => 'fas fa-child',
                                        'schools' => 'fas fa-graduation-cap',
                                        'hotels' => 'fas fa-bed',
                                        'medical' => 'fas fa-user-md',
                                        'offices' => 'fas fa-building',
                                        'shops' => 'fas fa-store',
                                        'gyms' => 'fas fa-dumbbell',
                                        'beauty' => 'fas fa-cut',
                                        'default' => 'fas fa-building'
                                    ];
                                    
                                    $iconClass = $iconMap['default'];
                                    foreach ($iconMap as $key => $icon) {
                                        if (stripos($item->name, $key) !== false || stripos($item->href, $key) !== false) {
                                            $iconClass = $icon;
                                            break;
                                        }
                                    }
                                    
                                    // Дополнительные проверки по названию
                                    if (stripos($item->name, 'ресторан') !== false || stripos($item->name, 'кафе') !== false) {
                                        $iconClass = stripos($item->name, 'кафе') !== false ? 'fas fa-coffee' : 'fas fa-utensils';
                                    } elseif (stripos($item->name, 'сад') !== false || stripos($item->name, 'дитяч') !== false) {
                                        $iconClass = 'fas fa-child';
                                    } elseif (stripos($item->name, 'школ') !== false) {
                                        $iconClass = 'fas fa-graduation-cap';
                                    } elseif (stripos($item->name, 'готел') !== false || stripos($item->name, 'хостел') !== false) {
                                        $iconClass = 'fas fa-bed';
                                    } elseif (stripos($item->name, 'медичн') !== false || stripos($item->name, 'стоматолог') !== false || stripos($item->name, 'клінік') !== false) {
                                        $iconClass = 'fas fa-user-md';
                                    } elseif (stripos($item->name, 'офіс') !== false) {
                                        $iconClass = 'fas fa-building';
                                    } elseif (stripos($item->name, 'магазин') !== false || stripos($item->name, 'торгівельн') !== false) {
                                        $iconClass = 'fas fa-store';
                                    } elseif (stripos($item->name, 'спорт') !== false || stripos($item->name, 'фітнес') !== false) {
                                        $iconClass = 'fas fa-dumbbell';
                                    } elseif (stripos($item->name, 'краса') !== false || stripos($item->name, 'салон') !== false) {
                                        $iconClass = 'fas fa-cut';
                                    }
                                @endphp
                                <i class="{{ $iconClass }} text-white text-3xl"></i>
                            </div>
                            
                            {{-- Title --}}
                            <h3 class="text-2xl font-bold leading-tight text-gray-900 group-hover:text-primary transition-colors duration-500 group-hover:translate-y-[-2px] transition-transform duration-300">
                                {{ $item->name }}
                            </h3>
                            
                            {{-- Description --}}
                            <p class="text-gray-700 text-sm leading-relaxed group-hover:text-gray-800 transition-colors duration-300">
                                Професійна обробка для вашого бізнесу
                            </p>
                        </div>
                        
                        {{-- Bottom Section --}}
                        <div class="space-y-4">
                            {{-- Features Pills --}}
                            <div class="flex flex-wrap gap-2">
                                <div class="px-3 py-1.5 bg-white/20 backdrop-blur-sm rounded-full text-xs font-medium group-hover:bg-white/30 transition-all duration-300">
                                    <i class="fas fa-truck mr-1 text-primary"></i>
                                    <span class="text-gray-700">Доставка</span>
                                </div>
                                <div class="px-3 py-1.5 bg-white/20 backdrop-blur-sm rounded-full text-xs font-medium group-hover:bg-white/30 transition-all duration-300">
                                    <i class="fas fa-clock mr-1 text-green-600"></i>
                                    <span class="text-gray-700">24/7</span>
                                </div>
                            </div>
                            
                            {{-- CTA Arrow --}}
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-semibold text-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    Дізнатися більше
                                </span>
                                <div class="w-10 h-10 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center group-hover:bg-white/30 group-hover:translate-x-2 transition-all duration-300">
                                    <i class="fas fa-arrow-right text-sm text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- Hover Shine Effect --}}
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent transform -skew-x-12 translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-1000 pointer-events-none"></div>
                    
                    {{-- Corner Accent --}}
                    <div class="absolute top-0 right-0 w-20 h-20 bg-white/10 rounded-bl-3xl group-hover:bg-white/20 transition-colors duration-500"></div>
                </a>
            @endforeach
        </div>
    </div>
</div>
