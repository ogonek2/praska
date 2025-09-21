<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('storage/source/logo_icon.svg') }}" type="image/x-icon">
    {{-- Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#30C1F0',
                        secondary: '#002B5B',
                        accent: '#26A9D9',
                        success: '#10B981',
                        warning: '#F59E0B',
                        error: '#EF4444'
                    },
                    fontFamily: {
                        'inter': ['f_inter', 'Inter', 'sans-serif']
                    },
                    animation: {
                        'fade-in-up': 'fadeInUp 0.6s ease-out',
                        'fade-in-left': 'fadeInLeft 0.6s ease-out',
                        'fade-in-right': 'fadeInRight 0.6s ease-out',
                        'bounce-slow': 'bounce 2s infinite',
                        'pulse-slow': 'pulse 3s infinite'
                    },
                    keyframes: {
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        fadeInLeft: {
                            '0%': { opacity: '0', transform: 'translateX(-30px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' }
                        },
                        fadeInRight: {
                            '0%': { opacity: '0', transform: 'translateX(30px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' }
                        }
                    }
                }
            }
        }
    </script>
    
    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/box_containers.css') }}">
    <link rel="stylesheet" href="{{ asset('css/content.css') }}">
    <link rel="stylesheet" href="{{ asset('css/elements.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fixed_elements.css') }}">
    <link rel="stylesheet" href="{{ asset('css/windows.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tailwind-integration.css') }}">
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

    {{-- Back to Top Button --}}
    <button id="back-to-top" class="fixed bottom-6 right-6 bg-primary hover:bg-accent text-white rounded-full w-12 h-12 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-110 z-50 opacity-0 invisible">
        <i class="fas fa-arrow-up text-lg"></i>
    </button>

    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    {{-- InputMask --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.9/jquery.inputmask.min.js"
        integrity="sha512-F5Ul1uuyFlGnIT1dk2c4kB4DBdi5wnBJjVhL7gQlGh46Xn0VhvD8kgxLtjdZ5YN83gybk/aASUAlpdoWUjRR3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    {{-- Modern UI JavaScript --}}
    <script src="{{ asset('js/modern-ui.js') }}"></script>
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

    {{-- Back to Top Button Script --}}
    <script>
        $(document).ready(function() {
            // Show/hide back to top button based on scroll position
            $(window).scroll(function() {
                if ($(this).scrollTop() > 300) {
                    $('#back-to-top').removeClass('opacity-0 invisible').addClass('opacity-100 visible');
                } else {
                    $('#back-to-top').removeClass('opacity-100 visible').addClass('opacity-0 invisible');
                }
            });

            // Smooth scroll to top when button is clicked
            $('#back-to-top').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 800, 'easeInOutQuart');
                return false;
            });

            // Add easing function for smooth scroll
            $.easing.easeInOutQuart = function (x, t, b, c, d) {
                if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
                return -c/2 * ((t-=2)*t*t*t - 2) + b;
            };
        });
    </script>
</body>

</html>
