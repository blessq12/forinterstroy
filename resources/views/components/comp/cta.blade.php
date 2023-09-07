<div class="call-to-action">
    <div class="logo">
        <img src="{{ $company->logo }}" alt="">
    </div>
    <div class="content">
        <h5 class="text-uppercase">{{ $company->name }}</h5>
        
        <span class="phone">
            Телефон:
            <a href="tel:{{ $company->phone }}">{{ $company->phone }}</a>
        </span>
        <ul>
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