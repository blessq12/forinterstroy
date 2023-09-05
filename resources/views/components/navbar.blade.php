<nav>
    <div class="container">
        {{-- mobile --}}
        <div class="row d-flex d-md-none d-lg-none">
            <div class="col-6">
                {{ $company->name }}
            </div>
            <div class="col-6 text-end">
                ham
            </div>
        </div>
        {{-- tablet/desktop --}}
        <div class="row d-none d-md-flex">
            <div class="col-4">
                {{ $company->name }}
            </div>
            <div class="col-4 text-center">
                <ul class="list-unstyled d-flex align-items-center m-0">
                    <li class="px-1">
                        <a href="{{ route('index_page') }}" class="text-white m-0">Главная</a>
                        <a href="{{ route('catalog_page') }}" class="text-white m-0">Проекты</a>
                        <a href="{{ route('slug_category_page') }}" class="text-white m-0">Услуги</a>
                        <a href="{{ route('portfolio_page') }}" class="text-white m-0">Портфолио</a>
                        <a href="{{ route('blogCategoriesPage') }}" class="text-white m-0">Статьи</a>
                        <a href="{{ route('contact_page') }}" class="text-white m-0">Контакты</a>
                    </li>
                </ul>
            </div>
            <div class="col-4 text-end">
                fav/question
            </div>
        </div>
    </div>
</nav>