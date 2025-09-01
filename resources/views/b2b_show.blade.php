@extends('layouts.app')

@section('title')
    {{ $b2b->title }} / B2B - Екочистка одягу та домашнього текстилю
@endsection

@section('content')
    {{-- @include('includes.elements.header-box') --}}
    @include('includes.elements.header-3-box')
    <div class="app-container-elements-box box b2b-show-box_block">
        <div class="items-box">
            <div class="item">
                <div class="banner-backdrop">
                    @if ($b2b->banner == 'Empty')
                        <div class="backdrop-load">
                            <img src="{{ asset('storage/source/images/bgk_vcloyhe.png') }}" alt="{{ $b2b->name }}">
                        </div>
                    @else
                        <img src="{{ asset('storage/' . $b2b->banner) }}" alt="{{ $b2b->name }}">
                    @endif
                </div>
                <div class="title-element">
                    <nav>
                        <ul>
                            <li><a href="{{ route('b2b_page') }}">B2B</a></li>
                            <span>/</span>
                            <li class="lk"><a href="{{ route('b2b_page_show', $b2b->href) }}">{{ $b2b->name }}</a></li>
                        </ul>
                    </nav>
                    <h1>
                        {{ $b2b->title }}
                    </h1>
                    <div class="btn btn-style-fas-head_1 modal_fade" data-modal="feedbackmd">
                        <p class="p-uppercase">
                            Консультація
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.elements.consultation')
    @include('includes.elements.courier_form-box')
    @include('includes.elements.delivery-box')
@endsection

@section('scripts')
    <script src="{{ asset('js/scripts/price_slide.js') }}"></script>
@endsection
