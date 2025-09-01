<div class="app-container-elements-box box b2b-categories-box_block">
    <div class="items-box">
        @foreach ($b2b_data as $item)
            <a href="{{ route('b2b_page_show', $item->href) }}">
                <div class="item">
                    <div class="banner-backdrop">
                        @if ($item->banner == 'Empty')
                            <div class="backdrop-load">
                                <img src="{{ asset('storage/source/logo.svg') }}" alt="{{ $item->name }}">
                            </div>
                        @else
                            <img src="{{ asset('storage/' . $item->banner) }}" alt="{{ $item->name }}">
                        @endif
                    </div>
                    <div class="title">
                        <h1>
                            {{ $item->name }}
                        </h1>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
