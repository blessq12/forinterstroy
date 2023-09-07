@extends('components.layout')
@section('content')
    <x-comp.banner :page="$page"></x-comp.banner>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <div class="contact-wrap opening-hours">
                    <div class="header">
                        <h5>Часы работы</h5>
                    </div>
                    <div class="content">
                        <ul>
                            <li>
                                <span>Пн-Пт</span>
                                <span>09:00 - 21:00</span>
                            </li>
                            <li>
                                <span>Сб</span>
                                <span>10:00 - 18:00</span>
                            </li>
                            <li>
                                <span>Вс</span>
                                <span>10:00 - 18:00</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="contact-wrap office">
                    <div class="header">
                        <h5>Контактная информация</h5>
                    </div>
                    <div class="content">
                        <ul class="contact">
                            <li>
                                <span>
                                    <i class="fa fa-home"></i>
                                </span>
                                <p class="m-0">{{ $company->city }}, {{ $company->street }}, {{ $company->house }}</p>
                            </li>
                            <li>
                                <span>
                                    <i class="fa fa-home"></i>
                                </span>
                                <p class="m-0">{{ $company->city_additional }}, {{ $company->street_additional }}, {{ $company->house_additional }}</p>
                            </li>
                            <li>
                                <span>
                                    <i class="fa fa-phone"></i>
                                </span>
                                <a href="tel:{{ $company->phone }}">{{ $company->phone }}</a>
                            </li>
                            <li>
                                <span>
                                    <i class="fa fa-envelope"></i>
                                </span>
                                <a href="mailto:{{ $company->email_address }}">{{ $company->email_address }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="contact-wrap office">
                    <div class="header">
                        <h5>Социальные сети</h5>
                    </div>
                    <div class="content">
                        <ul class="social">
                            <li>
                                <a href="{{ $company->youtube }}" style="background: #cc181e">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $company->whatsapp }}" style="background: #25d366">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $company->telegram }}" style="background: #179cde">
                                    <i class="fab fa-telegram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $company->vk }}" style="background: #4c75a3">
                                    <i class="fab fa-vk"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-8">
                <iframe style="height: 600px; width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2201.6997300911307!2d84.94816540714709!3d56.507380090726684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43269383d63d37cd%3A0x507b55ba4810de0e!2z0YPQuy4g0KDQvtC30Ysg0JvRjtC60YHQtdC80LHRg9GA0LMsIDEwMtCQINGB0YLRgNC-0LXQvdC40LUgMiwg0KLQvtC80YHQuiwg0KLQvtC80YHQutCw0Y8g0L7QsdC7LiwgNjM0MDA5!5e0!3m2!1sru!2sru!4v1615302205884!5m2!1sru!2sru" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" loading="lazy">
                </iframe>
            </div>
        </div>
    </div>
@endsection