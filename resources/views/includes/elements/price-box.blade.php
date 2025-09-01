<div class="app-container-elements-box box prices-box_block">
    <div class="backdrop-padding">
        <div class="header-title">
            <h1 class="header-b-title">
                Ціни
            </h1>
        </div>
        <div class="items-box">
            <div class="item">
                <div class="tags-category-elements">
                    @foreach ($categories->filter(fn($category) => $category->services->isNotEmpty()) as $category)
                        <div class="element" data-item="item_{{ $category->href }}">
                            <p>
                                {{ $category->name }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="item">
                @foreach ($categories as $category)
                    <div class="element-list" data-item='item_{{ $category->href }}'>
                        <ul>
                            @foreach ($category->services as $service)
                                <li>
                                    <p>{{ $service->name }}</p>
                                    <span>{{ $service->price }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>