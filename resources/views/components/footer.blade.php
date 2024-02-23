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
                                <li>
                                    <a href="{{ route('privacy_page') }}">Политика конфиденциальности</a>
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
                    <div class="copyright d-block d-md-flex align-items-center justify-content-between">
                        <p class="m-0">@Copyright. Все права защищены <span class="text-uppercase fw-bold">{{ $company->name }}</span> {{ now()->year }}</p>
                        <p class="m-0">Разработано: <a href="http://wa.me/79833409040">CODA</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
 
    ym(75533479, "init", {
         clickmap:true,
         trackLinks:true,
         accurateTrackBounce:true,
         webvisor:true
    });
 </script>
 <noscript><div><img src="https://mc.yandex.ru/watch/75533479" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
 <!-- /Yandex.Metrika counter -->
     <!-- Global site tag (gtag.js) - Google Analytics -->
     <script async src="https://www.googletagmanager.com/gtag/js?id=G-MKPX5C52L3"></script>
     <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
 
         gtag('config', 'G-MKPX5C52L3');
     </script>

{{-- marquiz --}}
<div class="marquiz__container d-none">
    <a class="marquiz__button marquiz__button_blicked marquiz__button_rounded marquiz__button_shadow marquiz__button_fixed marquiz__button_fixed-left" href="#popup:marquiz_5b7cfe118be79d00534f31d9" data-fixed-side="left" data-alpha-color="rgba(248, 58, 75, 0.5)" data-color="#f83a4b" data-text-color="#ffffff">Расчет стоимости</a>
</div>

<script src="//script.marquiz.ru/v1.js" type="application/javascript"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
  Marquiz.init({ 
    id: '5b7cfe118be79d00534f31d9', 
    autoOpen: false, 
    autoOpenFreq: 'once', 
    openOnExit: false 
  });
});
</script>

{{-- end marquiz --}}

@vite('resources/js/app.js')
</body>
</html>