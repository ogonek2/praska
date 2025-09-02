{{-- Price Section --}}
<div class="py-20 bg-gradient-to-br from-gray-50 via-white to-blue-50 relative overflow-hidden">
    {{-- Background Elements --}}
    <div class="absolute top-0 left-0 w-full h-full">
        <div class="absolute top-20 left-10 w-32 h-32 bg-primary/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-40 h-40 bg-secondary/5 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-60 h-60 bg-primary/3 rounded-full blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        {{-- Header --}}
        <div class="text-center mb-16">
            <div class="flex items-center justify-center mb-2">
                <div class="inline-flex items-center justify-center w-12 h-8">
                    <i class="fas fa-tag text-primary text-4xl"></i>
                </div>
                <h2 class="text-4xl font-bold text-blue-900">
                    Ціни
                </h2>
            </div>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Прозорі та доступні ціни на всі наші послуги
            </p>
        </div>
        
        @if(isset($categories) && $categories->count() > 0)
            <div class="w-full">
                {{-- Mobile Menu Toggle --}}
                <div class="lg:hidden mb-6">
                    <button id="price-mobile-menu-toggle" class="w-full bg-white border border-gray-300 rounded-xl px-6 py-4 text-left font-semibold text-gray-700 hover:bg-gray-50 transition-colors duration-200 flex items-center justify-between">
                        <span id="price-mobile-menu-text">Оберіть категорію</span>
                        <i class="fas fa-chevron-down transition-transform duration-200" id="price-mobile-menu-icon"></i>
                    </button>
                </div>

                {{-- Unified Tab Container --}}
                <div class="bg-white rounded-2xl shadow-lg border border-gray-200 overflow-hidden">
                    <div class="flex flex-col lg:flex-row">
                        {{-- Sidebar Navigation (Desktop) --}}
                        <div class="hidden lg:block w-80 bg-gray-50 border-r border-gray-200">
                            <div class="p-6">
                                <h3 class="text-lg font-bold text-gray-800 mb-4">Категорії послуг</h3>
                                <nav class="space-y-2">
                                    @foreach ($categories->filter(fn($category) => $category->services->isNotEmpty()) as $index => $category)
                                        <button class="price-tab-btn w-full text-left px-4 py-3 rounded-lg font-medium transition-all duration-300 {{ $index === 0 ? 'bg-primary text-white shadow-md' : 'text-gray-700 hover:bg-white hover:shadow-sm' }}" 
                                                data-category="{{ $category->href }}">
                                            <div class="flex items-center justify-between">
                                                <span>{{ $category->name }}</span>
                                                <span class="text-xs opacity-75">({{ $category->services->count() }})</span>
                                            </div>
                                        </button>
                                    @endforeach
                                </nav>
                            </div>
                        </div>

                        {{-- Mobile Dropdown Menu --}}
                        <div id="price-mobile-menu" class="lg:hidden border-b border-gray-200 bg-gray-50">
                            <div class="p-4 space-y-2">
                                @foreach ($categories->filter(fn($category) => $category->services->isNotEmpty()) as $index => $category)
                                    <button class="price-tab-btn w-full text-left px-4 py-3 rounded-lg font-medium transition-all duration-300 {{ $index === 0 ? 'bg-primary text-white shadow-md' : 'text-gray-700 hover:bg-white hover:shadow-sm' }}" 
                                            data-category="{{ $category->href }}">
                                        <div class="flex items-center justify-between">
                                            <span>{{ $category->name }}</span>
                                            <span class="text-xs opacity-75">({{ $category->services->count() }})</span>
                                        </div>
                                    </button>
                                @endforeach
                            </div>
                        </div>
                        
                        {{-- Tab Content --}}
                        <div class="flex-1">
                            <div class="price-content">
                                @foreach ($categories->filter(fn($category) => $category->services->isNotEmpty()) as $index => $category)
                                    <div class="price-category {{ $index === 0 ? 'active' : '' }}" data-category="{{ $category->href }}">
                                        {{-- Category Header --}}
                                        <div class="bg-gradient-to-r from-gray-50 to-gray-100 px-8 py-6 border-b border-gray-200">
                                            <div class="flex items-center justify-between">
                                                <div>
                                                    <h3 class="text-2xl font-bold text-gray-800">{{ $category->name }}</h3>
                                                    <p class="text-gray-600 mt-1">{{ $category->services->count() }} послуг</p>
                                                </div>
                                                <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center">
                                                    <i class="fas fa-list text-primary text-xl"></i>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Services List --}}
                                        @if($category->services->count() > 0)
                                            <div class="divide-y divide-gray-200">
                                                @foreach ($category->services as $serviceIndex => $service)
                                                    <div class="service-item px-8 py-6 hover:bg-gray-50 transition-colors duration-200 group">
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-center space-x-4">
                                                                                                                            <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center group-hover:bg-primary/20 transition-colors duration-200">
                                                                <span class="text-primary font-semibold text-sm leading-none flex items-center justify-center w-full h-full">{{ $serviceIndex + 1 }}</span>
                                                            </div>
                                                                <div>
                                                                    <h4 class="text-lg font-semibold text-gray-800 group-hover:text-primary transition-colors duration-200">{{ $service->name }}</h4>
                                                                    <p class="text-sm text-gray-500">Професійна обробка</p>
                                                                </div>
                                                            </div>
                                                            <div class="text-right">
                                                                <div class="text-2xl font-bold text-primary">{{ $service->price }}</div>
                                                                <div class="text-xs text-gray-500">за одиницю</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @else
                                            <div class="px-8 py-16 text-center">
                                                <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                                    <i class="fas fa-exclamation-triangle text-gray-400 text-xl"></i>
                                                </div>
                                                <p class="text-gray-500">Послуги в цій категорії тимчасово недоступні</p>
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="text-center py-16">
                <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-info-circle text-gray-400 text-3xl"></i>
                </div>
                <p class="text-gray-500 text-xl">Інформація про ціни тимчасово недоступна</p>
            </div>
        @endif
        
        {{-- Modern CTA Section --}}
        <div class="mt-20 text-center">
            <div class="relative">
                <div class="bg-gradient-to-r from-primary via-secondary to-primary rounded-3xl p-12 shadow-2xl relative overflow-hidden">
                    {{-- Background Pattern --}}
                    <div class="absolute inset-0 opacity-10">
                        <div class="absolute top-0 left-0 w-full h-full bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.1"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
                    </div>
                    
                    <div class="relative z-10">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-2xl mb-6">
                            <i class="fas fa-rocket text-white text-2xl"></i>
                        </div>
                        <h3 class="text-4xl font-bold text-white mb-4">Готові замовити?</h3>
                        <p class="text-white/90 text-lg mb-8 max-w-2xl mx-auto leading-relaxed">
                            Зв'яжіться з нами для уточнення деталей та оформлення замовлення. 
                            Наші експерти готові допомогти вам!
                        </p>
                        
                        <div class="flex flex-col sm:flex-row gap-6 justify-center">
                            <button class="group bg-white text-primary hover:bg-gray-100 px-10 py-5 rounded-2xl font-bold text-lg transition-all duration-500 transform hover:scale-105 shadow-xl hover:shadow-2xl modal_fade" data-modal="feedbackmd">
                                <i class="fas fa-phone mr-3 group-hover:rotate-12 transition-transform duration-300"></i>
                                Замовити зараз
                            </button>
                            <a href="{{ route('courier_page') }}" class="group border-2 border-white text-white hover:bg-white hover:text-primary px-10 py-5 rounded-2xl font-bold text-lg transition-all duration-500 transform hover:scale-105">
                                <i class="fas fa-truck mr-3 group-hover:translate-x-1 transition-transform duration-300"></i>
                                Викликати кур'єра
                            </a>
                        </div>
                        
                        {{-- Trust Indicators --}}
                        <div class="mt-8 flex flex-wrap justify-center gap-8 text-white/80">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-shield-alt"></i>
                                <span class="text-sm">Гарантія якості</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-clock"></i>
                                <span class="text-sm">Швидка доставка</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-star"></i>
                                <span class="text-sm">5-зірковий сервіс</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.price-category {
    display: none;
    opacity: 0;
    transform: translateY(10px);
    transition: all 0.3s ease-in-out;
}

.price-category.active {
    display: block;
    opacity: 1;
    transform: translateY(0);
}

.price-tab-btn {
    position: relative;
    border: none;
    outline: none;
}

.price-tab-btn.active {
    background-color: #3b82f6 !important;
    color: white !important;
}



.price-tab-btn:not(.active):hover {
    background-color: #f3f4f6 !important;
    color: #374151 !important;
}

.service-item {
    transition: all 0.2s ease-in-out;
}

.service-item:hover {
    background-color: #f9fafb !important;
    transform: translateX(4px);
}

/* Mobile menu styles */
#price-mobile-menu {
    transition: all 0.3s ease-in-out;
    max-height: 0;
    overflow: hidden;
    opacity: 0;
}

#price-mobile-menu.show {
    max-height: 500px;
    opacity: 1;
}

#price-mobile-menu-icon.rotate {
    transform: rotate(180deg);
}

/* Ensure mobile menu is properly styled */
#price-mobile-menu {
    display: block !important;
}

#price-mobile-menu.hidden {
    display: none !important;
}

/* Sidebar navigation styles */
.price-tab-btn {
    position: relative;
    border: none;
    outline: none;
    transition: all 0.3s ease-in-out;
}

.price-tab-btn.active {
    background-color: #3b82f6 !important;
    color: white !important;
    transform: translateX(4px);
    box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
}

.price-tab-btn:not(.active):hover {
    background-color: white !important;
    color: #374151 !important;
    transform: translateX(2px);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

/* Number circle centering */
.service-item .w-10.h-10 {
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    text-align: center !important;
}

.service-item .w-10.h-10 span {
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    width: 100% !important;
    height: 100% !important;
    line-height: 1 !important;
    text-align: center !important;
}

/* Responsive adjustments */
@media (max-width: 1024px) {
    .service-item {
        padding: 1rem !important;
    }
    
    .service-item .flex {
        flex-direction: column;
        align-items: flex-start !important;
        gap: 0.5rem;
    }
    
    .service-item .text-right {
        text-align: left !important;
        align-self: flex-end;
    }
}

@media (max-width: 768px) {
    .service-item {
        padding: 0.75rem !important;
    }
    
    .service-item h4 {
        font-size: 1rem !important;
    }
    
    .service-item .text-2xl {
        font-size: 1.5rem !important;
    }
    
    /* Ensure number circles are properly centered on mobile */
    .service-item .w-10.h-10 {
        min-width: 2.5rem !important;
        min-height: 2.5rem !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
    }
    
    .service-item .w-10.h-10 span {
        font-size: 0.875rem !important;
        font-weight: 600 !important;
        line-height: 1 !important;
    }
}

/* Smooth tab transitions */
.price-content {
    min-height: 400px;
}

/* Unified container styling */
.price-content .price-category {
    border-radius: 0;
    box-shadow: none;
    border: none;
}

/* Focus states for accessibility */
.price-tab-btn:focus {
    outline: 2px solid #3b82f6;
    outline-offset: 2px;
}

/* Loading state */
.price-category.loading {
    opacity: 0.5;
    pointer-events: none;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('Price tabs script starting...');
    
    const tabButtons = document.querySelectorAll('.price-tab-btn');
    const categories = document.querySelectorAll('.price-category');
    const mobileMenuToggle = document.getElementById('price-mobile-menu-toggle');
    const mobileMenu = document.getElementById('price-mobile-menu');
    const mobileMenuIcon = document.getElementById('price-mobile-menu-icon');
    const mobileMenuText = document.getElementById('price-mobile-menu-text');
    
    console.log('Found tab buttons:', tabButtons.length);
    console.log('Found categories:', categories.length);
    console.log('Mobile menu toggle:', mobileMenuToggle);
    console.log('Mobile menu:', mobileMenu);
    console.log('Mobile menu icon:', mobileMenuIcon);
    
    if (tabButtons.length === 0 || categories.length === 0) {
        console.log('No price elements found');
        return;
    }
    
    // Check if mobile elements exist
    if (!mobileMenuToggle || !mobileMenu || !mobileMenuIcon) {
        console.log('Mobile menu elements not found');
    }
    
    // Function to switch tabs
    function switchTab(targetCategory) {
        console.log('Switching to category:', targetCategory);
        
        // Remove active class from all buttons
        tabButtons.forEach(btn => {
            btn.classList.remove('active');
            btn.classList.remove('bg-primary', 'text-white', 'shadow-md');
            btn.classList.add('text-gray-700');
        });
        
        // Add active class to clicked button
        const activeButtons = document.querySelectorAll(`.price-tab-btn[data-category="${targetCategory}"]`);
        activeButtons.forEach(activeButton => {
            activeButton.classList.add('active');
            activeButton.classList.remove('text-gray-700');
            activeButton.classList.add('bg-primary', 'text-white', 'shadow-md');
        });
        
        // Hide all categories
        categories.forEach(cat => {
            cat.classList.remove('active');
            cat.style.display = 'none';
        });
        
        // Show target category
        const targetCat = document.querySelector(`.price-category[data-category="${targetCategory}"]`);
        if (targetCat) {
            targetCat.style.display = 'block';
            // Small delay for smooth transition
            setTimeout(() => {
                targetCat.classList.add('active');
            }, 10);
            console.log('Showing category:', targetCategory);
            
            // Update mobile menu text
            const categoryName = activeButtons[0]?.textContent.trim() || 'Категорія';
            if (mobileMenuText) {
                mobileMenuText.textContent = categoryName;
            }
            
            // Close mobile menu
            closeMobileMenu();
        } else {
            console.log('Target category not found:', targetCategory);
        }
    }
    
    // Mobile menu functions
    function toggleMobileMenu() {
        console.log('Toggle mobile menu clicked');
        if (mobileMenu.classList.contains('show')) {
            closeMobileMenu();
        } else {
            openMobileMenu();
        }
    }
    
    function openMobileMenu() {
        console.log('Opening mobile menu');
        mobileMenu.classList.remove('hidden');
        mobileMenu.classList.add('show');
        if (mobileMenuIcon) {
            mobileMenuIcon.classList.add('rotate');
        }
    }
    
    function closeMobileMenu() {
        console.log('Closing mobile menu');
        mobileMenu.classList.remove('show');
        if (mobileMenuIcon) {
            mobileMenuIcon.classList.remove('rotate');
        }
        // Add small delay before hiding to allow animation
        setTimeout(() => {
            if (!mobileMenu.classList.contains('show')) {
                mobileMenu.classList.add('hidden');
            }
        }, 300);
    }
    
    // Add click event listeners to tab buttons
    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetCategory = this.getAttribute('data-category');
            switchTab(targetCategory);
        });
        
        // Add keyboard support
        button.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                const targetCategory = this.getAttribute('data-category');
                switchTab(targetCategory);
            }
        });
    });
    
    // Mobile menu toggle
    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            console.log('Mobile menu button clicked');
            toggleMobileMenu();
        });
    } else {
        console.log('Mobile menu toggle button not found');
    }
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(e) {
        if (mobileMenu && mobileMenuToggle && 
            !mobileMenu.contains(e.target) && 
            !mobileMenuToggle.contains(e.target)) {
            closeMobileMenu();
        }
    });
    
    // Initialize first tab
    if (tabButtons.length > 0 && categories.length > 0) {
        const firstButton = tabButtons[0];
        const firstCategory = firstButton.getAttribute('data-category');
        
        console.log('Initializing first category:', firstCategory);
        switchTab(firstCategory);
    }
    
    console.log('Price tabs script initialized');
});
</script>