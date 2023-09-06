<div class="mobile-menu show">
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
            <div class="header bg-dark text-white">
                <div class="container py-3">
                    <div class="row justify-content-between align-items-center">
                        <div class="col d-block">
                            <h4>{{ $company->name }}</h4>
                            <span>{{ $company->city }}</span>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <div class="logo">
                                <img src="http://via.placeholder.com/256x256" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>