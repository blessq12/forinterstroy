<nav style="z-index: 12">
    <div class="container">
        {{-- mobile --}}
        <div class="row d-flex d-md-none d-lg-none">
            <div class="col-6">
                <a href="{{ route('index_page') }}" class="logo">
                    <img src="{{ $company->logo }}" alt="{{ $company->name }}">
                    <div class="logo-text">
                        <h5 class="m-0">{{ $company->name }}</h5>
                        <span style="font-size: 10px">Строительная компания {{ $company->city }}</span>
                    </div>
                </a>
            </div>
            <div class="col-6 d-flex align-items-center justify-content-end">
                <button class="burger-menu" onclick="document.querySelector('.mobile-menu').classList.add('show')">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
        {{-- tablet/desktop --}}
        <div class="row d-none d-md-flex align-items-center">
            <div class="col-2">
                <a href="{{ route('index_page') }}" class="logo">
                    <img src="{{ $company->logo }}" alt="{{ $company->name }}">
                    <div class="logo-text">
                        <h5>{{ $company->name }}</h5>
                        <span>{{ $company->city }}</span>
                    </div>
                </a>
            </div>
            <div class="col-8 text-center">
                <ul class="navbar-links">
                    <li class="drop">
                        Проекты
                        <div class="drop-menu">
                            <ul>
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="{{ route('catalog_page', ['category' => $category->uri]) }}">
                                            {{ $category->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                    <li class="drop">
                        Услуги
                        <div class="drop-menu">
                            <ul>
                                @foreach ($slugCategories as $category)
                                    <li>
                                        <a href="{{ route('slug_category_page', ['category' => $category->uri]) }}">
                                            {{ $category->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('blogCategoriesPage') }}">Статьи</a>
                    </li>
                    <li>
                        <a href="{{ route('portfolio_page') }}">Портфолио</a>
                    </li>
                    <li>
                        <a href="{{ route('contact_page') }}">Контакты</a>
                    </li>
                </ul>
            </div>
            <div class="col-2 d-flex justify-content-end align-items-center">
                <div class="work-hours">
                    <div class="clock">
                        <i class="fa fa-clock"></i>
                        Пн-Пт - 09:00 - 21:00
                    </div>
                    <div class="clock">
                        <i class="fa fa-clock"></i>
                        Сб-Вс - 10:00 - 18:00
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>