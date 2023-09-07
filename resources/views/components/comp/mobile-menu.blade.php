<div class="mobile-menu">
    <div class="container py-3">
        <div class="row">
            <div class="col-12 justify-content-between align-items-center d-flex pb-3">
                <div class="phone-top">
                    <a href="tel:{{ $company->phone }}">
                        <h4>{{ $company->phone }}</h4>
                    </a>
                </div>
                <button class="close-menu" onclick="document.querySelector('.mobile-menu').classList.remove('show')">
                    <span></span>
                    <span></span>
                </button>
            </div>
            <div class="header bg-dark text-white py-3">
                <div class="col-12 justify-content-between align-items-center d-flex">
                    <div class="d-block">
                        <h4>{{ $company->name }}</h4>
                        <span>{{ $company->city }}</span>
                    </div>
                    <div class="logo">
                        <img src="{{ $company->logo }}" alt="{{ $company->name }}">
                    </div>
                </div>
            </div>
            <div class="nav">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h5>Навигация по сайту</h5>
                            <ul>
                                <li>
                                    <a href="{{ route('index_page') }}">Главная</a>
                                </li>
                                <li>
                                    <a href="{{ route('catalog_page') }}">Каталог проектов</a>
                                </li>
                                <li>
                                    <a href="{{ route('slug_category_page') }}">Каталог услуг</a>
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
                    </div>
                </div>
            </div>
            <div class="footer pt-0">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h5>Мы в соц сетях</h5>
                            <ul class="social">
                                <li>
                                    <a href="{{ $company->youtube }}">
                                        <div class="social-item" style="background: #cc181e">
                                            <i class="fab fa-youtube"></i>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $company->whatsapp }}">
                                        <div class="social-item" style="background: #25d366">
                                            <i class="fab fa-whatsapp"></i>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $company->telegram }}">
                                        <div class="social-item" style="background: #179cde">
                                            <i class="fab fa-telegram"></i>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $company->vk }}">
                                        <div class="social-item" style="background: #4c75a3">
                                            <i class="fab fa-vk"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>