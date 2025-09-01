<div class="app-container-footer-bar">
    <div class="elements">
        <div class="element">
            <div class="logo-path">
                <a href="/">
                    <img src="{{ asset('storage/source/logo.svg') }}" alt="">
                    <span>
                        <p>
                            praska.kiev.ua
                        </p>
                    </span>
                </a>
            </div>
        </div>
        <div class="element">
            <ul>
                <li>
                    <b>
                        Навігація
                    </b>
                </li>
                <li>
                    <a href="{{ route('services') }}">Наші послуги</a>
                </li>
                <li>
                    <a href="{{ route('b2b_page') }}">B2B</a>
                </li>
                <li>
                    <a href="{{ route('courier_page') }}">Викликати кур’єра</a>
                </li>
                <li>
                    <a href="{{ route('delivery_page') }}">Доставка</a>
                </li>
            </ul>
        </div>
        <div class="element">
            <ul>
                <li>
                    <b>Послуги</b>
                </li>
                @foreach (get_categories()->filter(fn($category) => $category->services->isNotEmpty()) as $item)
                    <li>
                        <a href="{{ route('category_page', $item->href) }}" target="_blank">
                            {{ $item->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="element">
            <ul>
                <li>
                    <b>
                        Графік роботи
                    </b>
                </li>
                <li>
                    Приймаємо замовлення з 10:00-20:00 без вихідних.
                </li>
                <li>
                    Графік роботи кур'єрської
                    служби з 10:00-20:00 без вихідних.
                </li>
            </ul>
        </div>
        <div class="element">
            <ul>
                <li>
                    <b>
                        Контакти
                    </b>
                </li>
                <li>
                    <a href="#">
                        <b>
                            <i class="fa-solid fa-phone"></i>
                            <span>+38 (xxx) xxx-xx-xx</span>
                        </b>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <b>
                            <i class="fa-solid fa-envelope"></i>
                            <span>email@gmail.com</span>
                        </b>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
