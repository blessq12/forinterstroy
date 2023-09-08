<footer style="background: url('{{ asset('/images/footer.jpg') }}')">
    <div class="overlay"></div>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="footer-section">
                        <div class="header">
                            <div class="logo">
                                <img src="{{ $company->logo }}" alt="">
                                <div class="text-logo">
                                    <h5>{{  $company->name  }}</h5>
                                    <p>Строительная компания. {{ $company->city }}</p>
                                </div>
                            </div>
                            <p>{{ $company->description }}</p>
                        </div>
                        <div class="content">
                            <ul class="contact">
                                <li>
                                    <span>
                                        <i class="fa fa-map-marker"></i>
                                    </span>
                                    <p>{{ $company->city }}, {{ $company->street }}, {{ $company->house }}</p>
                                </li>
                                <li>
                                    <span>
                                        <i class="fa fa-phone"></i>
                                    </span>
                                    <p><a href="tel:{{ $company->phone }}">{{ $company->phone }}</a></p>
                                </li>
                                <li>
                                    <span>
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                    <p><a href="mailto:{{ $company->email_address }}">{{ $company->email_address }}</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-section">
                        <div class="header">
                            <h5>Быстрая навигация</h5>
                            <hr>
                        </div>
                        <div class="content">
                            <ul class="links">
                                <li>
                                    <a href="{{ route('catalog_page') }}">Каталог проектов</a>
                                </li>
                                <li>
                                    <a href="{{ route('slug_category_page') }}">Каталог услуг</a>
                                </li>
                                <li>
                                    <a href="{{ route('blogCategoriesPage') }}">Каталог статей</a>
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
                <div class="col-12 col-md-4">
                    <div class="footer-section">
                        <div class="header">
                            <h5>Подписка на рассылку</h5>
                            <hr>
                        </div>
                        <div class="content">
                            <p>
                                Подпишитесь на рассылку новостей и акций компании, а также полезные советы, вы всегда можете отписаться от рассылки
                            </p>
                            <subscribe-form></subscribe-form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    footer copyrights
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
@vite('resources/js/app.js')
</body>
</html>