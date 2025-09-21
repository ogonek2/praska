{{-- Price Section --}}
<div class="py-20 bg-gradient-to-br from-gray-50 via-white to-blue-50 relative">
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
                <h2 class="text-4xl font-bold text-blue-900">Ціни</h2>
            </div>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Прозорі та доступні ціни на всі наші послуги
            </p>
        </div>
        
        @if (isset($categories) && $categories->count() > 0)
            {{-- Mobile Category Selector --}}
            <div class="mb-6 lg:hidden">
                <div class="relative">
                    <button id="mobile-category-selector"
                        class="w-full bg-white border-2 border-gray-300 rounded-xl px-6 py-4 text-left font-semibold text-gray-700 hover:border-primary focus:border-primary focus:outline-none transition-all duration-200 flex items-center justify-between">
                        <span id="mobile-category-text">Оберіть категорію</span>
                        <i class="fas fa-chevron-down transition-transform duration-200" id="mobile-category-icon"></i>
                    </button>
                    
                    {{-- Dropdown Menu --}}
                    <div id="mobile-category-dropdown" class="absolute top-full left-0 right-0 mt-2 bg-white border border-gray-300 rounded-xl shadow-lg z-50 hidden">
                        <div class="py-2">
                            @foreach ($categories->filter(fn($category) => $category->services->isNotEmpty()) as $index => $category)
                                <button class="mobile-category-option w-full text-left px-6 py-3 hover:bg-gray-50 transition-colors duration-200 flex items-center justify-between"
                                    data-category="{{ $category->href }}"
                                    data-name="{{ $category->name }}">
                                    <span class="font-medium">{{ $category->name }}</span>
                                    <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded-full">{{ $category->services->count() }}</span>
                                </button>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- Main Layout (Desktop + Mobile) --}}
            <div class="flex flex-col lg:flex-row gap-6">
                {{-- Sticky Sidebar (Desktop only) --}}
                <div class="w-80 flex-shrink-0 hidden lg:block">
                    <div class="sticky top-20">
                        <div class="bg-white rounded-xl shadow-lg border border-gray-200 p-4">
                            <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                                <i class="fas fa-list mr-2 text-primary"></i>
                                Категорії послуг
                            </h3>
                            <nav class="space-y-2 max-h-[calc(100vh-200px)] overflow-y-auto scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100">
                                @foreach ($categories->filter(fn($category) => $category->services->isNotEmpty()) as $index => $category)
                                    <button class="price-tab-btn w-full text-left px-4 py-3 rounded-lg font-medium transition-all duration-300 {{ $index === 0 ? 'bg-primary shadow-md' : 'hover:bg-white hover:shadow-sm' }}"
                                        data-category="{{ $category->href }}">
                                        <div class="flex items-center justify-between">
                                            <span>{{ $category->name }}</span>
                                            <span class="text-xs opacity-75 bg-gray-100 px-2 py-1 rounded-full">{{ $category->services->count() }}</span>
                                        </div>
                                    </button>
                                @endforeach
                            </nav>
                        </div>
                    </div>
                </div>

                    {{-- Main Content --}}
                    <div class="flex-1">
                        <div class="bg-white rounded-2xl shadow-lg border border-gray-200">
                            <div class="price-content">
                                @foreach ($categories->filter(fn($category) => $category->services->isNotEmpty()) as $index => $category)
                                    @php
                                        $categoryGroups = $category->services->pluck('groups')->flatten()->unique('id');
                                    @endphp

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

                                        {{-- Group Tabs (if category has groups) --}}
                                        @if ($categoryGroups->count() > 0)
                                            <div class="bg-gray-50 px-8 py-4 border-b border-gray-200">
                                                <div class="flex flex-wrap gap-2">
                                                    <button class="group-tab-btn px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 bg-primary text-white shadow-sm"
                                                        data-category="{{ $category->href }}" data-group="all">
                                                        <i class="fas fa-th-large mr-2"></i>Всі послуги
                                                    </button>
                                                    @foreach ($categoryGroups as $group)
                                                        <button class="group-tab-btn px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 text-gray-700 hover:bg-white hover:shadow-sm"
                                                            data-category="{{ $category->href }}" data-group="{{ $group->id }}">
                                                            <i class="fas fa-tag mr-2"></i>{{ $group->name }}
                                                        </button>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif

                                        {{-- Services List --}}
                                        @if ($category->services->count() > 0)
                                            <div class="category-services" data-category="{{ $category->href }}">
                                                {{-- All Services (default view) --}}
                                                <div class="group-services {{ $index === 0 ? 'active' : '' }}" data-category="{{ $category->href }}" data-group="all">
                                                    <div class="divide-y divide-gray-200">
                                                        @foreach ($category->services as $serviceIndex => $service)
                                                            <div class="service-item px-8 py-6 hover:bg-gray-50 transition-colors duration-200 group">
                                                                <div class="flex items-center justify-between">
                                                                    <div class="flex items-center space-x-4">
                                                                        <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center group-hover:bg-primary/20 transition-colors duration-200">
                                                                            <span class="text-primary font-semibold text-sm leading-none flex items-center justify-center w-full h-full">{{ $serviceIndex + 1 }}</span>
                                                                        </div>
                                                                        <div>
                                                                            <h4 class="text-sm font-semibold text-gray-800 group-hover:text-primary transition-colors duration-200">
                                                                                {{ $service->name }}</h4>
                                                                            <p class="text-sm text-gray-500">
                                                                                @if ($service->groups->count() > 0)
                                                                                    Група: {{ $service->groups->pluck('name')->join(', ') }}
                                                                                @else
                                                                                    Професійна обробка
                                                                                @endif
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-right">
                                                                        <div class="text-lg font-bold text-primary">{{ $service->price }}₴</div>
                                                                        <div class="text-xs text-gray-500">за одиницю</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>

                                                {{-- Services by Groups --}}
                                                @foreach ($categoryGroups as $group)
                                                    <div class="group-services" data-category="{{ $category->href }}" data-group="{{ $group->id }}" style="display: none;">
                                                        <div class="divide-y divide-gray-200">
                                                            @foreach ($category->services->where('groups', '!=', null)->filter(function ($service) use ($group) {
                                                                return $service->groups->contains('id', $group->id);
                                                            }) as $serviceIndex => $service)
                                                                <div class="service-item px-8 py-6 hover:bg-gray-50 transition-colors duration-200 group">
                                                                    <div class="flex items-center justify-between">
                                                                        <div class="flex items-center space-x-4">
                                                                            <div class="w-10 h-10 bg-secondary/10 rounded-lg flex items-center justify-center group-hover:bg-secondary/20 transition-colors duration-200">
                                                                                <span class="text-secondary font-semibold text-sm leading-none flex items-center justify-center w-full h-full">{{ $serviceIndex + 1 }}</span>
                                                                            </div>
                                                                            <div>
                                                                                <h4 class="text-lg font-semibold text-gray-800 group-hover:text-secondary transition-colors duration-200">
                                                                                    {{ $service->name }}</h4>
                                                                                <p class="text-sm text-gray-500">Група: {{ $group->name }}</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-right">
                                                                            <div class="text-2xl font-bold text-secondary">{{ $service->price }}</div>
                                                                            <div class="text-xs text-gray-500">за одиницю</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
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

                            {{-- CTA Section for Desktop --}}
                            <div class="mt-12">
                                <div class="bg-gradient-to-r from-primary via-secondary to-primary rounded-3xl p-12 shadow-2xl relative overflow-hidden">
                                    <div class="relative z-10">
                                        <div class="inline-flex items-center w-16 h-16 justify-center bg-white/20 rounded-2xl mb-6">
                                            <i class="fas fa-rocket text-white text-2xl"></i>
                                        </div>
                                        <h3 class="text-4xl font-bold text-white mb-4">Готові замовити?</h3>
                                        <p class="text-white/90 text-lg mb-8 max-w-2xl leading-relaxed">
                                            Зв'яжіться з нами для уточнення деталей та оформлення замовлення.
                                            Наші експерти готові допомогти вам!
                                        </p>
                                        
                                        <div class="flex flex-col sm:flex-row gap-6">
                                            <button class="group bg-white text-primary hover:bg-gray-100 px-10 py-5 rounded-2xl font-bold text-lg transition-all duration-500 transform hover:scale-105 shadow-xl hover:shadow-2xl modal_fade" data-modal="feedbackmd">
                                                <i class="fas fa-phone mr-3 group-hover:rotate-12 transition-transform duration-300"></i>
                                                Замовити зараз
                                            </button>
                                            <a href="{{ route('courier_page') }}" class="group border-2 border-white text-white hover:bg-white hover:text-primary px-10 py-5 rounded-2xl font-bold text-lg transition-all duration-500 transform hover:scale-105">
                                                <i class="fas fa-truck mr-3 group-hover:translate-x-1 transition-transform duration-300"></i>
                                                Викликати кур'єра
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mobile Layout --}}
            <div class="lg:hidden">
                <div class="bg-white rounded-2xl shadow-lg border border-gray-200">
                    <div class="price-content">
                        @foreach ($categories->filter(fn($category) => $category->services->isNotEmpty()) as $index => $category)
                            @php
                                $categoryGroups = $category->services->pluck('groups')->flatten()->unique('id');
                            @endphp

                            <div class="price-category {{ $index === 0 ? 'active' : '' }}" data-category="{{ $category->href }}">
                                {{-- Category Header --}}
                                <div class="bg-gradient-to-r from-gray-50 to-gray-100 px-4 py-4 border-b border-gray-200">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <h3 class="text-xl font-bold text-gray-800">{{ $category->name }}</h3>
                                            <p class="text-gray-600 text-sm mt-1">{{ $category->services->count() }} послуг</p>
                                        </div>
                                        <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center">
                                            <i class="fas fa-list text-primary text-lg"></i>
                                        </div>
                                    </div>
                                </div>

                                {{-- Group Tabs (if category has groups) --}}
                                @if ($categoryGroups->count() > 0)
                                    <div class="bg-gray-50 px-4 py-3 border-b border-gray-200">
                                        <div class="flex flex-wrap gap-2">
                                            <button class="group-tab-btn px-3 py-2 rounded-lg text-sm font-medium transition-all duration-200 bg-primary text-white shadow-sm"
                                                data-category="{{ $category->href }}" data-group="all">
                                                <i class="fas fa-th-large mr-1"></i>Всі
                                            </button>
                                            @foreach ($categoryGroups as $group)
                                                <button class="group-tab-btn px-3 py-2 rounded-lg text-sm font-medium transition-all duration-200 text-gray-700 hover:bg-white hover:shadow-sm"
                                                    data-category="{{ $category->href }}" data-group="{{ $group->id }}">
                                                    <i class="fas fa-tag mr-1"></i>{{ $group->name }}
                                                </button>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif

                                {{-- Services List --}}
                                @if ($category->services->count() > 0)
                                    <div class="category-services" data-category="{{ $category->href }}">
                                        {{-- All Services (default view) --}}
                                        <div class="group-services {{ $index === 0 ? 'active' : '' }}" data-category="{{ $category->href }}" data-group="all">
                                            <div class="divide-y divide-gray-200">
                                                @foreach ($category->services as $serviceIndex => $service)
                                                    <div class="service-item px-4 py-4 hover:bg-gray-50 transition-colors duration-200 group">
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-center space-x-3">
                                                                <div class="w-8 h-8 bg-primary/10 rounded-lg flex items-center justify-center group-hover:bg-primary/20 transition-colors duration-200">
                                                                    <span class="text-primary font-semibold text-xs leading-none flex items-center justify-center w-full h-full">{{ $serviceIndex + 1 }}</span>
                                                                </div>
                                                                <div>
                                                                    <h4 class="text-base font-semibold text-gray-800 group-hover:text-primary transition-colors duration-200">
                                                                        {{ $service->name }}</h4>
                                                                    <p class="text-xs text-gray-500">
                                                                        @if ($service->groups->count() > 0)
                                                                            {{ $service->groups->pluck('name')->join(', ') }}
                                                                        @else
                                                                            Професійна обробка
                                                                        @endif
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="text-right">
                                                                <div class="text-lg font-bold text-primary">{{ $service->price }}</div>
                                                                <div class="text-xs text-gray-500">за одиницю</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                        {{-- Services by Groups --}}
                                        @foreach ($categoryGroups as $group)
                                            <div class="group-services" data-category="{{ $category->href }}" data-group="{{ $group->id }}" style="display: none;">
                                                <div class="divide-y divide-gray-200">
                                                    @foreach ($category->services->where('groups', '!=', null)->filter(function ($service) use ($group) {
                                                        return $service->groups->contains('id', $group->id);
                                                    }) as $serviceIndex => $service)
                                                        <div class="service-item px-4 py-4 hover:bg-gray-50 transition-colors duration-200 group">
                                                            <div class="flex items-center justify-between">
                                                                <div class="flex items-center space-x-3">
                                                                    <div class="w-8 h-8 bg-secondary/10 rounded-lg flex items-center justify-center group-hover:bg-secondary/20 transition-colors duration-200">
                                                                        <span class="text-secondary font-semibold text-xs leading-none flex items-center justify-center w-full h-full">{{ $serviceIndex + 1 }}</span>
                                                                    </div>
                                                                    <div>
                                                                        <h4 class="text-base font-semibold text-gray-800 group-hover:text-secondary transition-colors duration-200">
                                                                            {{ $service->name }}</h4>
                                                                        <p class="text-xs text-gray-500">{{ $group->name }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="text-right">
                                                                    <div class="text-lg font-bold text-secondary">{{ $service->price }}</div>
                                                                    <div class="text-xs text-gray-500">за одиницю</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <div class="px-4 py-16 text-center">
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
        @else
            <div class="text-center py-16">
                <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-info-circle text-gray-400 text-3xl"></i>
                </div>
                <p class="text-gray-500 text-xl">Інформація про ціни тимчасово недоступна</p>
            </div>
        @endif

        {{-- Modern CTA Section (Mobile only) --}}
        <div class="mt-20 text-center lg:hidden">
            <div class="relative">
                <div class="bg-gradient-to-r from-primary via-secondary to-primary rounded-3xl p-12 shadow-2xl relative overflow-hidden">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('scripts')
<script src="{{ asset('js/scripts/price_slide.js') }}"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('Price tabs script starting...');

    // Elements
    const tabButtons = document.querySelectorAll('.price-tab-btn');
    const categories = document.querySelectorAll('.price-category');
    const mobileSelector = document.getElementById('mobile-category-selector');
    const mobileDropdown = document.getElementById('mobile-category-dropdown');
    const mobileIcon = document.getElementById('mobile-category-icon');
    const mobileText = document.getElementById('mobile-category-text');
    const mobileOptions = document.querySelectorAll('.mobile-category-option');
    const groupTabButtons = document.querySelectorAll('.group-tab-btn');

    console.log('Found elements:', {
        tabButtons: tabButtons.length,
        categories: categories.length,
        mobileOptions: mobileOptions.length,
        groupTabButtons: groupTabButtons.length
    });

    // Function to switch categories
    function switchTab(targetCategory) {
        console.log('Switching to category:', targetCategory);

        // Update desktop buttons
        tabButtons.forEach(btn => {
            btn.classList.remove('bg-primary', 'text-white', 'shadow-md');
            btn.classList.add('text-gray-700');
        });

        const activeButtons = document.querySelectorAll(`.price-tab-btn[data-category="${targetCategory}"]`);
        activeButtons.forEach(activeButton => {
            activeButton.classList.add('bg-primary', 'text-white', 'shadow-md');
            activeButton.classList.remove('text-gray-700');
        });

        // Hide all categories
        categories.forEach(cat => {
            cat.classList.remove('active');
            cat.style.display = 'none';
        });

        // Show target category
        const targetCats = document.querySelectorAll(`.price-category[data-category="${targetCategory}"]`);
        targetCats.forEach(targetCat => {
            targetCat.style.display = 'block';
            setTimeout(() => {
                targetCat.classList.add('active');
            }, 10);
        });

        // Update mobile selector text
        if (mobileText && activeButtons.length > 0) {
            const categoryName = activeButtons[0].querySelector('span').textContent.trim();
            mobileText.textContent = categoryName;
        }

        // Close mobile dropdown
        closeMobileDropdown();

        // Initialize group tabs for this category
        setTimeout(() => {
            initializeGroupTabs(targetCategory);
        }, 100);
    }

    // Function to initialize group tabs
    function initializeGroupTabs(category) {
        console.log('Initializing group tabs for:', category);
        
        const categoryServices = document.querySelector(`.category-services[data-category="${category}"]`);
        if (categoryServices) {
            const groupServices = categoryServices.querySelectorAll('.group-services');
            
            // Hide all group services
            groupServices.forEach(serviceGroup => {
                serviceGroup.style.display = 'none';
            });
            
            // Show "all" services
            const allServices = categoryServices.querySelector('.group-services[data-group="all"]');
            if (allServices) {
                allServices.style.display = 'block';
            }
            
            // Reset group buttons
            const categoryGroupButtons = document.querySelectorAll(`.group-tab-btn[data-category="${category}"]`);
            categoryGroupButtons.forEach(btn => {
                btn.classList.remove('bg-primary', 'text-white', 'shadow-sm');
                btn.classList.add('text-gray-700');
            });
            
            // Activate "all" button
            const allButton = document.querySelector(`.group-tab-btn[data-category="${category}"][data-group="all"]`);
            if (allButton) {
                allButton.classList.add('bg-primary', 'text-white', 'shadow-sm');
                allButton.classList.remove('text-gray-700');
            }

            // Re-initialize event listeners for group buttons in this category
            reinitializeGroupTabListeners(category);
        }
    }

    // Function to re-initialize group tab listeners for a specific category
    function reinitializeGroupTabListeners(category) {
        console.log('Re-initializing group tab listeners for category:', category);
        
        const categoryGroupButtons = document.querySelectorAll(`.group-tab-btn[data-category="${category}"]`);
        console.log('Found group buttons for category:', categoryGroupButtons.length);
        
        categoryGroupButtons.forEach(button => {
            // Remove any existing listeners
            button.removeEventListener('click', handleGroupTabClick);
            
            // Add new listener
            button.addEventListener('click', handleGroupTabClick);
            console.log('Added listener to group button:', button.textContent.trim());
        });
    }

    // Separate handler for group tab clicks
    function handleGroupTabClick(e) {
        e.preventDefault();
        e.stopPropagation();
        
        const category = this.getAttribute('data-category');
        const group = this.getAttribute('data-group');
        
        console.log('Group tab clicked:', { category, group, button: this });
        
        switchGroupTab(category, group);
    }

    // Function to switch group tabs
    function switchGroupTab(category, group) {
        console.log('Switching to group:', group, 'in category:', category);

        // Update group buttons
        const categoryGroupButtons = document.querySelectorAll(`.group-tab-btn[data-category="${category}"]`);
        console.log('Found category group buttons:', categoryGroupButtons.length);
        
        categoryGroupButtons.forEach(btn => {
            btn.classList.remove('bg-primary', 'text-white', 'shadow-sm');
            btn.classList.add('text-gray-700');
        });

        const activeButton = document.querySelector(`.group-tab-btn[data-category="${category}"][data-group="${group}"]`);
        console.log('Active button found:', activeButton);
        
        if (activeButton) {
            activeButton.classList.add('bg-primary', 'text-white', 'shadow-sm');
            activeButton.classList.remove('text-gray-700');
        }

        // Update group services
        const categoryServices = document.querySelector(`.category-services[data-category="${category}"]`);
        console.log('Category services container found:', categoryServices);
        
        if (categoryServices) {
            const groupServices = categoryServices.querySelectorAll('.group-services');
            console.log('Found group services:', groupServices.length);
            
            groupServices.forEach(serviceGroup => {
                serviceGroup.style.display = 'none';
                console.log('Hiding group services:', serviceGroup.getAttribute('data-group'));
            });

            const targetGroupServices = categoryServices.querySelector(`.group-services[data-group="${group}"]`);
            console.log('Target group services found:', targetGroupServices);
            
            if (targetGroupServices) {
                targetGroupServices.style.display = 'block';
                console.log('Showing group services for group:', group);
            } else {
                console.log('Target group services not found for group:', group);
            }
        } else {
            console.log('Category services container not found for category:', category);
        }
    }

    // Mobile dropdown functions
    function toggleMobileDropdown() {
        if (mobileDropdown.classList.contains('hidden')) {
            openMobileDropdown();
        } else {
            closeMobileDropdown();
        }
    }

    function openMobileDropdown() {
        mobileDropdown.classList.remove('hidden');
        if (mobileIcon) {
            mobileIcon.classList.add('rotate');
        }
    }

    function closeMobileDropdown() {
        mobileDropdown.classList.add('hidden');
        if (mobileIcon) {
            mobileIcon.classList.remove('rotate');
        }
    }

    // Event listeners
    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetCategory = this.getAttribute('data-category');
            switchTab(targetCategory);
        });
    });

    if (mobileSelector) {
        mobileSelector.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            toggleMobileDropdown();
        });
    }

    mobileOptions.forEach(option => {
        option.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const targetCategory = this.getAttribute('data-category');
            const categoryName = this.getAttribute('data-name');
            
            if (mobileText) {
                mobileText.textContent = categoryName;
            }
            
            closeMobileDropdown();
            switchTab(targetCategory);
        });
    });

    // Initialize group tab listeners for all buttons
    groupTabButtons.forEach(button => {
        button.addEventListener('click', handleGroupTabClick);
        console.log('Initial listener added to group button:', button.textContent.trim());
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
        if (mobileDropdown && mobileSelector &&
            !mobileDropdown.contains(e.target) &&
            !mobileSelector.contains(e.target)) {
            closeMobileDropdown();
        }
    });

    // Initialize first tab
    if (tabButtons.length > 0 && categories.length > 0) {
        const firstButton = tabButtons[0];
        const firstCategory = firstButton.getAttribute('data-category');
        const firstCategoryName = firstButton.querySelector('span').textContent.trim();

        switchTab(firstCategory);
        
        if (mobileText) {
            mobileText.textContent = firstCategoryName;
        }
    }
});
</script>
@endsection

<style>
/* Mobile dropdown styles */
#mobile-category-dropdown {
    transition: all 0.3s ease-in-out;
    transform: translateY(-10px);
    opacity: 0;
    visibility: hidden;
}

#mobile-category-dropdown:not(.hidden) {
    transform: translateY(0);
    opacity: 1;
    visibility: visible;
}

#mobile-category-icon.rotate {
    transform: rotate(180deg);
}

.mobile-category-option:hover {
    background-color: #f3f4f6 !important;
}

/* Category styles */
.price-category {
    display: none;
}

.price-category.active {
    display: block;
}

/* Smooth transitions */
.price-tab-btn, .group-tab-btn {
    transition: all 0.3s ease-in-out;
}

.price-tab-btn.active {
    background-color: #3b82f6 !important;
    color: white !important;
}

.service-item {
    transition: all 0.2s ease-in-out;
}

.service-item:hover {
    background-color: #f9fafb !important;
    transform: translateX(4px);
}

/* Responsive adjustments */
@media (max-width: 1024px) {
    .service-item {
        padding: 1rem !important;
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
}
</style>