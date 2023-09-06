<div class="call-to-action">
    <div class="logo">
        <img src="http://via.placeholder.com/512x512" alt="">
    </div>
    <div class="content">
        <h5>{{ $company->name }}</h5>
        <p>
            {{ $company->description }}
        </p>
        <span class="phone">
            Телефон:
            <a href="tel:{{ $company->phone }}">{{ $company->phone }}</a>
        </span>
        <ul>
            <li>item 1</li>
            <li>item 2</li>
        </ul>
    </div>
</div>