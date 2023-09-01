<footer>
    <div class="footer-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h4 class="mb-0">{{ $company->name }}</h4>
                    <p class="mb-0 text-muted">{{ $company->description }}</p>
                </div>
                <div class="col-6">
                    <img src="{{ $company->logo }}" width="100%" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="mb-0">Copyright: {{ $company->name }}. All right reserved {{ now()->year }}</p>
                </div>
            </div>
        </div>
    </div>
</footer>
@vite('resources/js/app.js')
</body>
</html>