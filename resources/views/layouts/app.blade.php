<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('storage/source/logo_icon.svg') }}" type="image/x-icon">
    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/box_containers.css') }}">
    <link rel="stylesheet" href="{{ asset('css/content.css') }}">
    <link rel="stylesheet" href="{{ asset('css/elements.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fixed_elements.css') }}">
    <link rel="stylesheet" href="{{ asset('css/windows.css') }}">
    {{-- SwiperJs --}}
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    {{-- For style --}}
    @yield('styles')
    {{-- Seo --}}
    @yield('seo_tags')
</head>

<body>
    {{-- First element --}}
    <div id="app">
        @include('includes.windows.feedback_form-fd')
        <div class="app-container">
            <div class="app-container-navigator">
                @include('includes.fixed.navigator')
            </div>
            <div class="app-container-elements">
                @yield('content')
            </div>
            <div class="app-container-footer">
                @include('includes.fixed.footer')
            </div>
        </div>
    </div>
    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    {{-- InputMask --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.9/jquery.inputmask.min.js"
        integrity="sha512-F5Ul1uuyFlGnIT1dk2c4kB4DBdi5wnBJjVhL7gQlGh46Xn0VhvD8kgxLtjdZ5YN83gybk/aASUAlpdoWUjRR3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @yield('scripts')
    <script>
        $(document).ready(function() {
            $('.modal').hide()
        })
    </script>
    <script>
        $(document).on('click', '.modal_fade', function() {
            let this_data = $(this).data('modal');
            $(`#modalfade_${this_data}`).show()
        })
        $(document).on('click', '.close-modal-md', function() {
            let this_data = $(this).data('modal');
            $(`#modalfade_${this_data}`).hide()
        })
    </script>
    <script>
        $(document).on('click', '.burger-btn', function() {
            $(this).toggleClass('active')
            $('.fixed-container-burger-bar').toggleClass('fade')
        })
    </script>
</body>

</html>
