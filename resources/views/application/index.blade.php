@extends('layouts.application.main')

@section('content')
    <!--begin hero-->
    <section>
        <div class="container">
            <div class="row d-none">
                <div class="col-12">
                    <aside class="d-none d-lg-flex">
                        <a href="" class="c-adplacement__item">
                            <img src="{{asset('')}}application/assets/images/aside.gif" alt=""/>
                        </a>
                    </aside>

                    <!--begin c-adplacement__mobile-->
                    <aside class="c-adplacement__mobile d-flex d-lg-none">
                        <a href="" class="c-adplacement__item">
                            <img src="{{asset('')}}application/assets/images/c-adplacement-mobile.gif" alt=""/>
                        </a>
                    </aside>
                    <!--end c-adplacement__mobile-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="
                  hero-carousel-ui
                  c-adplacement-head-slider c-adplacement-head-slider--home
                ">
                        <div class="swiper--products__container h-100">
                            <!-- Swiper -->
                            <div class="swiper-ui__hero" id="js-swiper-hero" style="overflow: hidden">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="" class="hero-swiper-item-ui">
                                            <img class="img-fluid" src="{{asset('')}}application/assets/images/sliders/01.jpg" alt=""/>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="" class="hero-swiper-item-ui">
                                            <img class="img-fluid" src="{{asset('')}}application/assets/images/sliders/02.jpg" alt=""/>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="" class="hero-swiper-item-ui">
                                            <img class="img-fluid" src="{{asset('')}}application/assets/images/sliders/03.jpg" alt=""/>
                                        </a>
                                    </div>
                                </div>

                                <div class="hero-swiper-button-next"></div>
                                <div class="hero-swiper-button-prev"></div>

                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-flex">
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="javascript:" class="c-adplacement__item">
                                <img src="{{asset('')}}application/assets/images/banners/04.jpg" alt="" loading="lazy"/>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <a href="javascript:" class="c-adplacement__item mb-0">
                                <img src="{{asset('')}}application/assets/images/banners/04.jpg" alt="" loading="lazy"/>
                            </a>
                        </div>

                        <div class="col-12">
                            <a href="javascript:" class="c-adplacement__item mb-0">
                                <img src="{{asset('')}}application/assets/images/sliders/01.jpg" alt="" loading="lazy"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--end hero-->

    <!--begin services-->
    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="swiper__headline"></div>
                    <div class="swiper__box services-ui">
                        <div class="
                    c-promotion__categories
                    d-flex
                    align-items-center
                    w-100
                  ">
                            <a href="" class="c-promotion__category-item">
                                <div class="smooth-corners">
                                    <div class="
                          c-promotion__category
                          c-promotion__category--electronics
                        ">
                                        <i class="ri-macbook-line"></i>
                                    </div>
                                </div>
                                <h3 class="c-promotion__category-name">کالای دیجیتال</h3>
                            </a>
                            <a href="" class="c-promotion__category-item">
                                <div class="smooth-corners">
                                    <div class="
                          c-promotion__category
                          c-promotion__category--electronics
                        ">
                                        <i class="ri-tools-fill"></i>
                                    </div>
                                </div>
                                <h3 class="c-promotion__category-name">
                                    خودرو،ابزار صنعتی
                                </h3>
                            </a>
                            <a href="" class="c-promotion__category-item">
                                <div class="smooth-corners">
                                    <div class="
                          c-promotion__category
                          c-promotion__category--electronics
                        ">
                                        <i class="ri-shirt-fill"></i>
                                    </div>
                                </div>
                                <h3 class="c-promotion__category-name">مد و پوشاک</h3>
                            </a>
                            <a href="" class="c-promotion__category-item">
                                <div class="smooth-corners">
                                    <div class="
                          c-promotion__category
                          c-promotion__category--electronics
                        ">
                                        <i class="ri-emotion-line"></i>
                                    </div>
                                </div>
                                <h3 class="c-promotion__category-name">اسباب بازی،کودک</h3>
                            </a>
                            <a href="" class="c-promotion__category-item">
                                <div class="smooth-corners">
                                    <div class="
                          c-promotion__category
                          c-promotion__category--electronics
                        ">
                                        <i class="ri-hand-heart-line"></i>
                                    </div>
                                </div>
                                <h3 class="c-promotion__category-name">زیبایی،سلامتی</h3>
                            </a>
                            <a href="" class="c-promotion__category-item">
                                <div class="smooth-corners">
                                    <div class="
                          c-promotion__category
                          c-promotion__category--electronics
                        ">
                                        <i class="ri-restaurant-line"></i>
                                    </div>
                                </div>
                                <h3 class="c-promotion__category-name">خانه و آشپزخانه</h3>
                            </a>
                            <a href="" class="c-promotion__category-item">
                                <div class="smooth-corners">
                                    <div class="
                          c-promotion__category
                          c-promotion__category--electronics
                        ">
                                        <i class="ri-book-mark-line"></i>
                                    </div>
                                </div>
                                <h3 class="c-promotion__category-name">
                                    کتاب و لوازم تحریر
                                </h3>
                            </a>
                            <a href="" class="c-promotion__category-item">
                                <div class="smooth-corners">
                                    <div class="
                          c-promotion__category
                          c-promotion__category--electronics
                        ">
                                        <i class="ri-road-map-line"></i>
                                    </div>
                                </div>
                                <h3 class="c-promotion__category-name">ورزش و سفر</h3>
                            </a>
                            <a href="" class="c-promotion__category-item">
                                <div class="smooth-corners">
                                    <div class="
                          c-promotion__category
                          c-promotion__category--electronics
                        ">
                                        <i class="ri-hotel-line"></i>
                                    </div>
                                </div>
                                <h3 class="c-promotion__category-name">لوازم اداری</h3>
                            </a>

                            <a href="" class="c-promotion__category-item">
                                <div class="smooth-corners">
                                    <div class="
                          c-promotion__category
                          c-promotion__category--electronics
                        ">
                                        <i class="ri-pulse-fill"></i>
                                    </div>
                                </div>
                                <h3 class="c-promotion__category-name">بهداشتی</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end services-->

    <!--begin product carousel-->
    <section class="swiper--products special-discount__carousel">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="swiper__box">
                        <div class="swiper__headline d-flex justify-content-end">
                            <div class="d-flex justify-content-end align-items-center">
                                <button class="swiper-button-prev-ui ml-3"
                                        id="js-swiper-products-button-prev-7"></button>
                                <button class="swiper-button-next-ui" id="js-swiper-products-button-next-7"></button>
                            </div>
                        </div>

                        <div class="swiper--products__container">
                            <a href="" class="
                      swiper-specials__title
                      swiper-specials--title__special-discount
                    ">
                                <h4 class="text-center mb-1">تخفیفات ویژه</h4>
                                <div class="btn swiper-specials__btn">مشاهده همه</div>

                                <img class="img-fluid" src="{{asset('')}}application/assets/images/bell.png" alt=""/>

                                <div id="count-down-timer" data-countdown="2021-09-16 00:00:00"
                                     class="count-down-timer d-none"></div>
                            </a>

                            <!-- Swiper -->
                            <div class="swiper-ui__products" id="js-swiper-products-7" style="overflow: hidden">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product-box-ui">
                                            <a class="" href="">
                                                <img class="img-fluid" src="{{asset('')}}application/assets/images/products/p-10.png" alt=""
                                                     loading="lazy"/>

                                                <ul class="product-box__variants">
                                                    <li>
                                                        <span class="variant variant--color"
                                                              style="background-color: #000000"></span>
                                                    </li>
                                                    <li>
                                                        <span class="variant variant--color"
                                                              style="background-color: #1746eb"></span>
                                                    </li>
                                                    <li>
                                                        <span class="variant variant--color"
                                                              style="background-color: #82cfbf"></span>
                                                    </li>
                                                </ul>
                                            </a>
                                            <div class="product-box__body">
                                                <div class="product-box__title">
                                                    <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                        Digital ظرفیت 825 گیگابایت</a>
                                                </div>
                                            </div>
                                            <div class="
                              product-box__price-row
                              d-flex
                              justify-content-end
                            ">
                                                <div class="
                                new-price__value
                                d-flex
                                justify-content-end
                              ">
                                                    23,000,000 تومان
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-box-ui">
                                            <a class="" href="">
                                                <img class="img-fluid" src="{{asset('')}}application/assets/images/products/p-10.png" alt=""
                                                     loading="lazy"/>

                                                <ul class="product-box__variants">
                                                    <li>
                                                        <span class="variant variant--color"
                                                              style="background-color: #000000"></span>
                                                    </li>
                                                    <li>
                                                        <span class="variant variant--color"
                                                              style="background-color: #1746eb"></span>
                                                    </li>
                                                    <li>
                                                        <span class="variant variant--color"
                                                              style="background-color: #82cfbf"></span>
                                                    </li>
                                                </ul>
                                            </a>
                                            <div class="product-box__body">
                                                <div class="product-box__title">
                                                    <a href="">کنسول بازی سونی مدل Playstation 5 Edition</a>
                                                </div>
                                            </div>
                                            <div class="
                              product-box__price-row
                              d-flex
                              justify-content-end
                            ">
                                                <div class="
                                new-price__value
                                d-flex
                                justify-content-end
                              ">
                                                    23,000,000 تومان
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-box-ui">
                                            <a class="" href="">
                                                <img class="img-fluid" src="{{asset('')}}application/assets/images/products/p-10.png" alt=""
                                                     loading="lazy"/>

                                                <ul class="product-box__variants">
                                                    <li>
                                                        <span class="variant variant--color"
                                                              style="background-color: #000000"></span>
                                                    </li>
                                                    <li>
                                                        <span class="variant variant--color"
                                                              style="background-color: #1746eb"></span>
                                                    </li>
                                                    <li>
                                                        <span class="variant variant--color"
                                                              style="background-color: #82cfbf"></span>
                                                    </li>
                                                </ul>
                                            </a>
                                            <div class="product-box__body">
                                                <div class="product-box__title">
                                                    <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                        Digital ظرفیت 825 گیگابایت</a>
                                                </div>
                                            </div>
                                            <div class="
                              product-box__price-row
                              d-flex
                              justify-content-end
                            ">
                                                <div class="
                                new-price__value
                                d-flex
                                justify-content-end
                              ">
                                                    23,000,000 تومان
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-box-ui">
                                            <a class="" href="">
                                                <img class="img-fluid" src="{{asset('')}}application/assets/images/products/p-10.png" alt=""
                                                     loading="lazy"/>

                                                <ul class="product-box__variants">
                                                    <li>
                                                        <span class="variant variant--color"
                                                              style="background-color: #000000"></span>
                                                    </li>
                                                    <li>
                                                        <span class="variant variant--color"
                                                              style="background-color: #1746eb"></span>
                                                    </li>
                                                    <li>
                                                        <span class="variant variant--color"
                                                              style="background-color: #82cfbf"></span>
                                                    </li>
                                                </ul>
                                            </a>
                                            <div class="product-box__body">
                                                <div class="product-box__title">
                                                    <a href="">کنسول بازی سونی مدل Playstation 5 Edition</a>
                                                </div>
                                            </div>
                                            <div class="
                              product-box__price-row
                              d-flex
                              justify-content-end
                            ">
                                                <div class="
                                new-price__value
                                d-flex
                                justify-content-end
                              ">
                                                    23,000,000 تومان
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-box-ui">
                                            <a class="" href="">
                                                <img class="img-fluid" src="{{asset('')}}application/assets/images/products/p-10.png" alt=""
                                                     loading="lazy"/>

                                                <ul class="product-box__variants">
                                                    <li>
                                                        <span class="variant variant--color"
                                                              style="background-color: #000000"></span>
                                                    </li>
                                                    <li>
                                                        <span class="variant variant--color"
                                                              style="background-color: #1746eb"></span>
                                                    </li>
                                                    <li>
                                                        <span class="variant variant--color"
                                                              style="background-color: #82cfbf"></span>
                                                    </li>
                                                </ul>
                                            </a>
                                            <div class="product-box__body">
                                                <div class="product-box__title">
                                                    <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                        Digital ظرفیت 825 گیگابایت</a>
                                                </div>
                                            </div>
                                            <div class="
                              product-box__price-row
                              d-flex
                              justify-content-end
                            ">
                                                <div class="
                                new-price__value
                                d-flex
                                justify-content-end
                              ">
                                                    23,000,000 تومان
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-box-ui">
                                            <a class="" href="">
                                                <img class="img-fluid" src="{{asset('')}}application/assets/images/products/p-10.png" alt=""
                                                     loading="lazy"/>

                                                <ul class="product-box__variants">
                                                    <li>
                                                        <span class="variant variant--color"
                                                              style="background-color: #000000"></span>
                                                    </li>
                                                    <li>
                                                        <span class="variant variant--color"
                                                              style="background-color: #1746eb"></span>
                                                    </li>
                                                    <li>
                                                        <span class="variant variant--color"
                                                              style="background-color: #82cfbf"></span>
                                                    </li>
                                                </ul>
                                            </a>
                                            <div class="product-box__body">
                                                <div class="product-box__title">
                                                    <a href="">کنسول بازی سونی مدل Playstation 5 Edition</a>
                                                </div>
                                            </div>
                                            <div class="
                              product-box__price-row
                              d-flex
                              justify-content-end
                            ">
                                                <div class="
                                new-price__value
                                d-flex
                                justify-content-end
                              ">
                                                    23,000,000 تومان
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end product carousel-->

    <!--begin adplacement-->
    <section class="adplacement">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <a class="adplacement__item" href="">
                        <img class="img-fluid" src="{{asset('')}}application/assets/images/banners/banner-8.jpg" alt="" loading="lazy"/>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a class="adplacement__item" href="">
                        <img class="img-fluid" src="{{asset('')}}application/assets/images/banners/banner-7.jpg" alt="" loading="lazy"/>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <a class="adplacement__item" href="">
                        <img class="img-fluid" src="{{asset('')}}application/assets/images/banners/banner-8.jpg" alt="" loading="lazy"/>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--end adplacement-->

    <!--begin product carousel-->
    <section class="swiper--products best-selling__carousel">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="swiper__box">
                        <div class="swiper__headline d-flex justify-content-end">
                            <div class="d-flex justify-content-end align-items-center">
                                <button class="swiper-button-prev-ui ml-3"
                                        id="js-swiper-products-button-prev-6"></button>
                                <button class="swiper-button-next-ui" id="js-swiper-products-button-next-6"></button>
                            </div>
                        </div>

                        <div class="swiper--products__container">
                            <a href="" class="
                      swiper-specials__title
                      swiper-specials--title__best-selling
                    ">
                                <h4 class="text-center mb-1">پر فروش ترین ها</h4>
                                <div class="btn swiper-specials__btn">مشاهده همه</div>

                                <img class="img-fluid" src="{{asset('application/assets/images/rocket.png')}}" alt=""/>
                            </a>
                            <!-- Swiper -->
                            <div class="swiper-ui__products" id="js-swiper-products-6" style="overflow: hidden">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide swiper-specials__slide d-none">
                                        <a href="" class="
                            swiper-specials__title
                            swiper-specials--title__best-selling
                          ">
                                            <h4 class="text-center mb-1">پر فروش ترین ها</h4>
                                            <div class="btn swiper-specials__btn">مشاهده همه</div>

                                            <img class="img-fluid" src="{{asset('application/assets/images/rocket.png')}}" alt=""/>
                                        </a>
                                    </div>

                                    <div class="swiper-slide">
                                        <a class="" href="">
                                            <div class="product-box-ui">
                                                <a href="" class="product-box__img">
                                                    <img class="img-fluid" src="{{asset('application/assets/images/products/p-6.png')}}" alt=""
                                                         loading="lazy"/>
                                                </a>
                                                <div class="product-box__title">
                                                    <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                        Digital ظرفیت 825 گیگابایت</a>
                                                </div>
                                                <div class="
                                product-box__price-row
                                d-flex
                                justify-content-end
                              ">
                                                    <div class="
                                  new-price__value
                                  d-flex
                                  justify-content-end
                                ">
                                                        23,000,000 تومان
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="" href="">
                                            <div class="product-box-ui">
                                                <a href="" class="product-box__img">
                                                    <img class="img-fluid" src="{{asset('application/assets/images/products/p-7.png')}}" alt=""
                                                         loading="lazy"/>
                                                </a>
                                                <div class="product-box__title">
                                                    <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                        Digital ظرفیت 825 گیگابایت</a>
                                                </div>
                                                <div class="
                                product-box__price-row
                                d-flex
                                justify-content-end
                              ">
                                                    <div class="
                                  new-price__value
                                  d-flex
                                  justify-content-end
                                ">
                                                        23,000,000 تومان
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="" href="">
                                            <div class="product-box-ui">
                                                <a href="" class="product-box__img">
                                                    <img class="img-fluid" src="{{asset('application/assets/images/products/p-8.png')}}" alt=""
                                                         loading="lazy"/>
                                                    <div class="new-price__discount">25%</div>
                                                </a>
                                                <div class="product-box__title">
                                                    <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                        Digital ظرفیت 825 گیگابایت</a>
                                                </div>
                                                <div class="
                                product-box__price-row
                                d-flex
                                justify-content-end
                              ">
                                                    <div class="
                                  new-price__value
                                  d-flex
                                  justify-content-end
                                ">
                                                        23,000,000 تومان
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="" href="">
                                            <div class="product-box-ui">
                                                <a href="" class="product-box__img">
                                                    <img class="img-fluid" src="{{asset('application/assets/images/products/p-9.png')}}" alt=""
                                                         loading="lazy"/>
                                                    <div class="new-price__discount">25%</div>
                                                </a>
                                                <div class="product-box__title">
                                                    <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                        Digital ظرفیت 825 گیگابایت</a>
                                                </div>
                                                <div class="
                                product-box__price-row
                                d-flex
                                justify-content-end
                              ">
                                                    <div class="
                                  new-price__value
                                  d-flex
                                  justify-content-end
                                ">
                                                        23,000,000 تومان
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="" href="">
                                            <div class="product-box-ui">
                                                <a href="" class="product-box__img">
                                                    <img class="img-fluid" src="{{asset('application/assets/images/products/p-10.png')}}" alt=""
                                                         loading="lazy"/>

                                                    <ul class="product-box__variants">
                                                        <li>
                                                            <span class="variant variant--color"
                                                                  style="background-color: #000000"></span>
                                                        </li>
                                                        <li>
                                                            <span class="variant variant--color"
                                                                  style="background-color: #1746eb"></span>
                                                        </li>
                                                        <li>
                                                            <span class="variant variant--color"
                                                                  style="background-color: #82cfbf"></span>
                                                        </li>
                                                    </ul>
                                                </a>
                                                <div class="product-box__title">
                                                    <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                        Digital ظرفیت 825 گیگابایت</a>
                                                </div>
                                                <div class="
                                product-box__price-row
                                d-flex
                                justify-content-end
                              ">
                                                    <div class="
                                  new-price__value
                                  d-flex
                                  justify-content-end
                                ">
                                                        23,000,000 تومان
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="" href="">
                                            <div class="product-box-ui">
                                                <a href="" class="product-box__img">
                                                    <img class="img-fluid" src="{{asset('application/assets/images/products/p-6.png')}}" alt=""
                                                         loading="lazy"/>
                                                </a>
                                                <div class="product-box__title">
                                                    <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                        Digital ظرفیت 825 گیگابایت</a>
                                                </div>
                                                <div class="
                                product-box__price-row
                                d-flex
                                justify-content-end
                              ">
                                                    <div class="
                                  new-price__value
                                  d-flex
                                  justify-content-end
                                ">
                                                        23,000,000 تومان
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="" href="">
                                            <div class="product-box-ui">
                                                <a href="" class="product-box__img">
                                                    <img class="img-fluid" src="{{asset('application/assets/images/products/p-7.png')}}" alt=""
                                                         loading="lazy"/>
                                                </a>
                                                <div class="product-box__title">
                                                    <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                        Digital ظرفیت 825 گیگابایت</a>
                                                </div>
                                                <div class="
                                product-box__price-row
                                d-flex
                                justify-content-end
                              ">
                                                    <div class="
                                  new-price__value
                                  d-flex
                                  justify-content-end
                                ">
                                                        23,000,000 تومان
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="" href="">
                                            <div class="product-box-ui">
                                                <a href="" class="product-box__img">
                                                    <img class="img-fluid" src="{{asset('application/assets/images/products/p-8.png')}}" alt=""
                                                         loading="lazy"/>
                                                    <div class="new-price__discount">25%</div>
                                                </a>
                                                <div class="product-box__title">
                                                    <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                        Digital ظرفیت 825 گیگابایت</a>
                                                </div>
                                                <div class="
                                product-box__price-row
                                d-flex
                                justify-content-end
                              ">
                                                    <div class="
                                  new-price__value
                                  d-flex
                                  justify-content-end
                                ">
                                                        23,000,000 تومان
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="" href="">
                                            <div class="product-box-ui">
                                                <a href="" class="product-box__img">
                                                    <img class="img-fluid" src="{{asset('application/assets/images/products/p-9.png')}}" alt=""
                                                         loading="lazy"/>
                                                    <div class="new-price__discount">25%</div>
                                                </a>
                                                <div class="product-box__title">
                                                    <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                        Digital ظرفیت 825 گیگابایت</a>
                                                </div>
                                                <div class="
                                product-box__price-row
                                d-flex
                                justify-content-end
                              ">
                                                    <div class="
                                  new-price__value
                                  d-flex
                                  justify-content-end
                                ">
                                                        23,000,000 تومان
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="" href="">
                                            <div class="product-box-ui">
                                                <a href="" class="product-box__img">
                                                    <img class="img-fluid" src="{{asset('application/assets/images/products/p-10.png')}}" alt=""
                                                         loading="lazy"/>

                                                    <ul class="product-box__variants">
                                                        <li>
                                                            <span class="variant variant--color"
                                                                  style="background-color: #000000"></span>
                                                        </li>
                                                        <li>
                                                            <span class="variant variant--color"
                                                                  style="background-color: #1746eb"></span>
                                                        </li>
                                                        <li>
                                                            <span class="variant variant--color"
                                                                  style="background-color: #82cfbf"></span>
                                                        </li>
                                                    </ul>
                                                </a>
                                                <div class="product-box__title">
                                                    <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                        Digital ظرفیت 825 گیگابایت</a>
                                                </div>
                                                <div class="
                                product-box__price-row
                                d-flex
                                justify-content-end
                              ">
                                                    <div class="
                                  new-price__value
                                  d-flex
                                  justify-content-end
                                ">
                                                        23,000,000 تومان
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end product carousel-->

    <!--begin adplacement-->
    <section class="adplacement">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a class="adplacement__item" href="">
                        <img class="img-fluid" src="{{asset('application/assets/images/banners/banner-4.jpg')}}" alt="" loading="lazy"/>
                    </a>
                </div>
                <div class="col-md-6">
                    <a class="adplacement__item" href="">
                        <img class="img-fluid" src="{{asset('application/assets/images/banners/banner-5.jpg')}}" alt="" loading="lazy"/>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--end adplacement-->

    <!--begin product carousel-->
    <section class="swiper--products">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="swiper__box">
                        <div class="swiper__headline d-flex justify-content-end">
                            <div class="d-flex justify-content-end align-items-center">
                                <button class="swiper-button-prev-ui ml-3"
                                        id="js-swiper-products-button-prev-5"></button>
                                <button class="swiper-button-next-ui" id="js-swiper-products-button-next-5"></button>
                            </div>
                        </div>
                        <div class="swiper--products__container">
                            <div class="
                      d-none d-lg-flex
                      swiper-specials__title swiper-specials__title-co
                      swiper-specials--title__game-consoles
                    ">
                                <h5 class="text-center mb-5">دسته بندی</h5>
                                <h4 class="mb-5">گوشی های همراه</h4>

                                <a href="" class="btn swiper-specials__btn">مشاهده همه</a>
                            </div>

                            <div class="swiper-ui__products" id="js-swiper-products-5" style="overflow: hidden">
                                <div class="swiper-wrapper">
                                    <div class="
                          swiper-slide
                          d-flex d-lg-none
                          swiper-specials__slide
                        ">
                                        <div class="
                            swiper-specials__title swiper-specials__title-co
                            swiper-specials--title__game-consoles
                          ">
                                            <h5 class="text-center mb-5">دسته بندی</h5>
                                            <h4 class="mb-5">گوشی های همراه</h4>

                                            <a href="" class="btn swiper-specials__btn">مشاهده همه</a>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="product-box-ui h-100">
                                            <div data-countdown="2021-9-18 00:00:00"
                                                 class="js-product__count-timer"></div>
                                            <a href="" class="product-box__img">
                                                <img class="img-fluid" src="{{asset('application/assets/images/products/p-7.png')}}" alt=""
                                                     loading="lazy"/>
                                            </a>
                                            <div class="
                              product-box__body
                              d-flex
                              flex-column flex-grow-1
                            ">
                                                <div class="product-box__title">
                                                    <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                        Digital ظرفیت 825 گیگابایت</a>
                                                </div>
                                            </div>

                                            <div class="
                              product-box__price-row
                              d-flex
                              justify-content-end
                            ">
                                                <div class="
                                new-price__value
                                d-flex
                                justify-content-end
                              ">
                                                    23,000,000 تومان
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-box-ui h-100">
                                            <div data-countdown="2021-9-18 00:00:00"
                                                 class="js-product__count-timer is-hidden"></div>
                                            <a href="" class="product-box__img">
                                                <img class="img-fluid" src="{{asset('application/assets/images/products/p-7.png')}}" alt=""
                                                     loading="lazy"/>
                                            </a>
                                            <div class="
                              product-box__body
                              d-flex
                              flex-column flex-grow-1
                            ">
                                                <div class="product-box__title">
                                                    <a href="">کنسول بازی سونی مدل Playstation 5 Edition</a>
                                                </div>
                                            </div>

                                            <div class="
                              product-box__price-row
                              d-flex
                              justify-content-end
                            ">
                                                <div class="
                                new-price__value
                                d-flex
                                justify-content-end
                              ">
                                                    23,000,000 تومان
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end product carousel-->

    <!--begin product carousel-->
    <section class="swiper--products">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="swiper__box">
                        <div class="swiper__headline d-flex justify-content-end">
                            <div class="d-flex justify-content-end align-items-center">
                                <button class="swiper-button-prev-ui ml-3"
                                        id="js-swiper-products-button-prev-4"></button>
                                <button class="swiper-button-next-ui" id="js-swiper-products-button-next-4"></button>
                            </div>
                        </div>
                        <div class="swiper--products__container">
                            <div class="
                      d-none d-lg-flex
                      swiper-specials__title swiper-specials__title-co
                      swiper-specials--title__loptop
                    ">
                                <h5 class="text-center mb-5">جدیدترین</h5>
                                <h4 class="mb-3">لپ تاپ ها</h4>

                                <img class="img-fluid mb-2" src="{{asset('application/assets/images/xiaomi_mi_notebook.png')}}" alt=""
                                     loading="lazy"/>

                                <a href="" class="btn swiper-specials__btn">مشاهده همه</a>
                            </div>

                            <div class="swiper-ui__products" id="js-swiper-products-4" style="overflow: hidden">
                                <div class="swiper-wrapper">
                                    <div class="
                          swiper-slide
                          d-flex d-lg-none
                          swiper-specials__slide
                        ">
                                        <div class="
                            swiper-specials__title swiper-specials__title-co
                            swiper-specials--title__loptop
                          ">
                                            <h5 class="text-center mb-5">جدیدترین</h5>
                                            <h4 class="mb-3">لپ تاپ ها</h4>

                                            <img class="img-fluid mb-2" src="{{asset('application/assets/images/xiaomi_mi_notebook.png')}}"
                                                 alt="" loading="lazy"/>

                                            <a href="" class="btn swiper-specials__btn">مشاهده همه</a>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="product-box-ui h-100">
                                            <div data-countdown="2021-9-18 00:00:00"
                                                 class="js-product__count-timer"></div>
                                            <a href="" class="product-box__img">
                                                <img class="img-fluid" src="{{asset('application/assets/images/products/p-7.png')}}" alt=""
                                                     loading="lazy"/>
                                            </a>
                                            <div class="
                              product-box__body
                              d-flex
                              flex-column flex-grow-1
                            ">
                                                <div class="product-box__title">
                                                    <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                        Digital ظرفیت 825 گیگابایت</a>
                                                </div>
                                            </div>

                                            <div class="
                              product-box__price-row
                              d-flex
                              justify-content-end
                            ">
                                                <div class="
                                new-price__value
                                d-flex
                                justify-content-end
                              ">
                                                    23,000,000 تومان
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-box-ui h-100">
                                            <div data-countdown="2021-9-18 00:00:00"
                                                 class="js-product__count-timer is-hidden"></div>
                                            <a href="" class="product-box__img">
                                                <img class="img-fluid" src="{{asset('')}}application/assets/images/products/p-7.png" alt=""
                                                     loading="lazy"/>
                                            </a>
                                            <div class="
                              product-box__body
                              d-flex
                              flex-column flex-grow-1
                            ">
                                                <div class="product-box__title">
                                                    <a href="">کنسول بازی سونی مدل Playstation 5 Edition</a>
                                                </div>
                                            </div>

                                            <div class="
                              product-box__price-row
                              d-flex
                              justify-content-end
                            ">
                                                <div class="
                                new-price__value
                                d-flex
                                justify-content-end
                              ">
                                                    23,000,000 تومان
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-box-ui h-100">
                                            <div data-countdown="2021-9-18 00:00:00"
                                                 class="js-product__count-timer is-hidden"></div>
                                            <a href="" class="product-box__img">
                                                <img class="img-fluid" src="{{asset('')}}application/assets/images/products/p-7.png" alt=""
                                                     loading="lazy"/>
                                            </a>
                                            <div class="
                              product-box__body
                              d-flex
                              flex-column flex-grow-1
                            ">
                                                <div class="product-box__title">
                                                    <a href="">کنسول بازی سونی مدل Playstation 5 Edition</a>
                                                </div>
                                            </div>

                                            <div class="
                              product-box__price-row
                              d-flex
                              justify-content-end
                            ">
                                                <div class="
                                new-price__value
                                d-flex
                                justify-content-end
                              ">
                                                    23,000,000 تومان
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-box-ui h-100">
                                            <div data-countdown="2021-9-18 00:00:00"
                                                 class="js-product__count-timer is-hidden"></div>
                                            <a href="" class="product-box__img">
                                                <img class="img-fluid" src="{{asset('')}}application/assets/images/products/p-7.png" alt=""
                                                     loading="lazy"/>
                                            </a>
                                            <div class="
                              product-box__body
                              d-flex
                              flex-column flex-grow-1
                            ">
                                                <div class="product-box__title">
                                                    <a href="">کنسول بازی سونی مدل Playstation 5 Edition</a>
                                                </div>
                                            </div>

                                            <div class="
                              product-box__price-row
                              d-flex
                              justify-content-end
                            ">
                                                <div class="
                                new-price__value
                                d-flex
                                justify-content-end
                              ">
                                                    23,000,000 تومان
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-box-ui h-100">
                                            <div data-countdown="2021-9-18 00:00:00"
                                                 class="js-product__count-timer is-hidden"></div>
                                            <a href="" class="product-box__img">
                                                <img class="img-fluid" src="{{asset('')}}application/assets/images/products/p-7.png" alt=""
                                                     loading="lazy"/>
                                            </a>
                                            <div class="
                              product-box__body
                              d-flex
                              flex-column flex-grow-1
                            ">
                                                <div class="product-box__title">
                                                    <a href="">کنسول بازی سونی مدل Playstation 5 Edition</a>
                                                </div>
                                            </div>

                                            <div class="
                              product-box__price-row
                              d-flex
                              justify-content-end
                            ">
                                                <div class="
                                new-price__value
                                d-flex
                                justify-content-end
                              ">
                                                    23,000,000 تومان
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-box-ui h-100">
                                            <div data-countdown="2021-9-18 00:00:00"
                                                 class="js-product__count-timer is-hidden"></div>
                                            <a href="" class="product-box__img">
                                                <img class="img-fluid" src="{{asset('')}}application/assets/images/products/p-7.png" alt=""
                                                     loading="lazy"/>
                                            </a>
                                            <div class="
                              product-box__body
                              d-flex
                              flex-column flex-grow-1
                            ">
                                                <div class="product-box__title">
                                                    <a href="">کنسول بازی سونی مدل Playstation 5 Edition</a>
                                                </div>
                                            </div>

                                            <div class="
                              product-box__price-row
                              d-flex
                              justify-content-end
                            ">
                                                <div class="
                                new-price__value
                                d-flex
                                justify-content-end
                              ">
                                                    23,000,000 تومان
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end product carousel-->

    <!--begin adplacement-->
    <section class="adplacement">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-4">
                    <a class="adplacement__item" href="">
                        <img class="img-fluid" src="{{asset('')}}application/assets/images/banners/banner-1.jpg" alt="" loading="lazy"/>
                    </a>
                </div>
                <div class="col-6 col-lg-4">
                    <a class="adplacement__item" href="">
                        <img class="img-fluid" src="{{asset('')}}application/assets/images/banners/banner-2.jpg" alt="" loading="lazy"/>
                    </a>
                </div>
                <div class="col-6 col-lg-4">
                    <a class="adplacement__item" href="">
                        <img class="img-fluid" src="{{asset('')}}application/assets/images/banners/banner-3.jpg" alt="" loading="lazy"/>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--end adplacement-->

    <!--begin product carousel-->
    <section class="swiper--products">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="swiper__box">
                        <div class="swiper__headline d-flex justify-content-end">
                            <div class="d-flex justify-content-end align-items-center">
                                <button class="swiper-button-prev-ui ml-3"
                                        id="js-swiper-products-button-prev-3"></button>
                                <button class="swiper-button-next-ui" id="js-swiper-products-button-next-3"></button>
                            </div>
                        </div>
                        <div class="swiper--products__container">
                            <div class="
                      swiper-specials__title
                      d-none d-lg-flex
                      swiper-specials__title-co
                      swiper-specials--title__tablet
                    ">
                                <h5 class="text-center mb-5">جدیدترین</h5>
                                <h4 class="mb-5">تبلت ها</h4>

                                <a href="" class="btn swiper-specials__btn">مشاهده همه</a>
                            </div>

                            <div class="swiper-ui__products" id="js-swiper-products-3" style="overflow: hidden">
                                <div class="swiper-wrapper">
                                    <div class="
                          swiper-slide
                          d-flex d-lg-none
                          swiper-specials__slide
                        ">
                                        <div class="
                            swiper-specials__title swiper-specials__title-co
                            swiper-specials--title__tablet
                          ">
                                            <h5 class="text-center mb-5">جدیدترین</h5>
                                            <h4 class="mb-5">تبلت ها</h4>

                                            <a href="" class="btn swiper-specials__btn">مشاهده همه</a>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <a class="" href="">
                                            <div class="product-box-ui">
                                                <div data-countdown="2021-9-18 00:00:00"
                                                     class="js-product__count-timer u-hidden"></div>
                                                <a href="" class="product-box__img">
                                                    <img class="img-fluid" src="{{asset('')}}application/assets/images/products/p-1.png" alt=""
                                                         loading="lazy"/>
                                                    <div class="new-price__discount">25%</div>
                                                </a>
                                                <div class="product-box__body">
                                                    <div class="product-box__title">
                                                        <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                            Digital ظرفیت 825 گیگابایت</a>
                                                    </div>
                                                </div>
                                                <div class="
                                product-box__price-row
                                d-flex
                                justify-content-end
                              ">
                                                    <div class="
                                  new-price__value
                                  d-flex
                                  justify-content-end
                                ">
                                                        23,000,000 تومان
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="" href="">
                                            <div class="product-box-ui">
                                                <div data-countdown="2021-9-18 00:00:00"
                                                     class="js-product__count-timer u-hidden"></div>
                                                <a href="" class="product-box__img">
                                                    <img class="img-fluid" src="{{asset('')}}application/assets/images/products/p-1.png" alt=""
                                                         loading="lazy"/>
                                                    <div class="new-price__discount">25%</div>
                                                </a>
                                                <div class="product-box__body">
                                                    <div class="product-box__title">
                                                        <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                            Digital ظرفیت 825 گیگابایت</a>
                                                    </div>
                                                </div>
                                                <div class="
                                product-box__price-row
                                d-flex
                                justify-content-end
                              ">
                                                    <div class="
                                  new-price__value
                                  d-flex
                                  justify-content-end
                                ">
                                                        23,000,000 تومان
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="" href="">
                                            <div class="product-box-ui">
                                                <div data-countdown="2021-9-18 00:00:00"
                                                     class="js-product__count-timer u-hidden"></div>
                                                <a href="" class="product-box__img">
                                                    <img class="img-fluid" src="{{asset('')}}application/assets/images/products/p-1.png" alt=""
                                                         loading="lazy"/>
                                                    <div class="new-price__discount">25%</div>
                                                </a>
                                                <div class="product-box__body">
                                                    <div class="product-box__title">
                                                        <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                            Digital ظرفیت 825 گیگابایت</a>
                                                    </div>
                                                </div>
                                                <div class="
                                product-box__price-row
                                d-flex
                                justify-content-end
                              ">
                                                    <div class="
                                  new-price__value
                                  d-flex
                                  justify-content-end
                                ">
                                                        23,000,000 تومان
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="" href="">
                                            <div class="product-box-ui">
                                                <div data-countdown="2021-9-18 00:00:00"
                                                     class="js-product__count-timer u-hidden"></div>
                                                <a href="" class="product-box__img">
                                                    <img class="img-fluid" src="{{asset('')}}application/assets/images/products/p-1.png" alt=""
                                                         loading="lazy"/>
                                                    <div class="new-price__discount">25%</div>
                                                </a>
                                                <div class="product-box__body">
                                                    <div class="product-box__title">
                                                        <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                            Digital ظرفیت 825 گیگابایت</a>
                                                    </div>
                                                </div>
                                                <div class="
                                product-box__price-row
                                d-flex
                                justify-content-end
                              ">
                                                    <div class="
                                  new-price__value
                                  d-flex
                                  justify-content-end
                                ">
                                                        23,000,000 تومان
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="" href="">
                                            <div class="product-box-ui">
                                                <div data-countdown="2021-9-18 00:00:00"
                                                     class="js-product__count-timer u-hidden"></div>
                                                <a href="" class="product-box__img">
                                                    <img class="img-fluid" src="{{asset('')}}application/assets/images/products/p-1.png" alt=""
                                                         loading="lazy"/>
                                                    <div class="new-price__discount">25%</div>
                                                </a>
                                                <div class="product-box__body">
                                                    <div class="product-box__title">
                                                        <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                            Digital ظرفیت 825 گیگابایت</a>
                                                    </div>
                                                </div>
                                                <div class="
                                product-box__price-row
                                d-flex
                                justify-content-end
                              ">
                                                    <div class="
                                  new-price__value
                                  d-flex
                                  justify-content-end
                                ">
                                                        23,000,000 تومان
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="" href="">
                                            <div class="product-box-ui">
                                                <div data-countdown="2021-9-18 00:00:00"
                                                     class="js-product__count-timer u-hidden"></div>
                                                <a href="" class="product-box__img">
                                                    <img class="img-fluid" src="{{asset('')}}application/assets/images/products/p-1.png" alt=""
                                                         loading="lazy"/>
                                                    <div class="new-price__discount">25%</div>
                                                </a>
                                                <div class="product-box__body">
                                                    <div class="product-box__title">
                                                        <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                            Digital ظرفیت 825 گیگابایت</a>
                                                    </div>
                                                </div>
                                                <div class="
                                product-box__price-row
                                d-flex
                                justify-content-end
                              ">
                                                    <div class="
                                  new-price__value
                                  d-flex
                                  justify-content-end
                                ">
                                                        23,000,000 تومان
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end product carousel-->

    <!--begin product carousel-->
    <section class="swiper--products">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="swiper__box">
                        <div class="swiper__headline d-flex justify-content-end">
                            <div class="d-flex justify-content-end align-items-center">
                                <button class="swiper-button-prev-ui ml-3"
                                        id="js-swiper-products-button-prev-2"></button>
                                <button class="swiper-button-next-ui" id="js-swiper-products-button-next-2"></button>
                            </div>
                        </div>
                        <div class="swiper--products__container">
                            <div class="
                      swiper-specials__title
                      d-none d-lg-flex
                      swiper-specials__title-co
                      swiper-specials--title__watch
                    ">
                                <h5 class="text-center mb-5">به روز باش</h5>
                                <h4 class="mb-5">ساعت های هوشمند</h4>

                                <a href="" class="btn swiper-specials__btn">مشاهده همه</a>
                            </div>

                            <div class="swiper-ui__products" id="js-swiper-products-2" style="overflow: hidden">
                                <div class="swiper-wrapper">
                                    <div class="
                          swiper-slide
                          d-flex d-lg-none
                          swiper-specials__slide
                        ">
                                        <div class="
                            swiper-specials__title swiper-specials__title-co
                            swiper-specials--title__watch
                          ">
                                            <h5 class="text-center mb-5">به روز باش</h5>
                                            <h4 class="mb-5">ساعت های هوشمند</h4>

                                            <a href="" class="btn swiper-specials__btn">مشاهده همه</a>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <a class="" href="">
                                            <div class="product-box-ui">
                                                <div data-countdown="2021-9-18 00:00:00"
                                                     class="js-product__count-timer u-hidden"></div>
                                                <a href="" class="product-box__img">
                                                    <img class="img-fluid" src="{{asset('')}}application/assets/images/products/p-1.png" alt=""
                                                         loading="lazy"/>
                                                    <div class="new-price__discount">25%</div>
                                                </a>
                                                <div class="product-box__body">
                                                    <div class="product-box__title">
                                                        <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                            Digital ظرفیت 825 گیگابایت</a>
                                                    </div>
                                                </div>
                                                <div class="
                                product-box__price-row
                                d-flex
                                justify-content-end
                              ">
                                                    <div class="
                                  new-price__value
                                  d-flex
                                  justify-content-end
                                ">
                                                        23,000,000 تومان
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="" href="">
                                            <div class="product-box-ui">
                                                <div data-countdown="2021-9-18 00:00:00"
                                                     class="js-product__count-timer u-hidden"></div>
                                                <a href="" class="product-box__img">
                                                    <img class="img-fluid" src="{{asset('')}}application/assets/images/products/p-1.png" alt=""
                                                         loading="lazy"/>
                                                    <div class="new-price__discount">25%</div>
                                                </a>
                                                <div class="product-box__body">
                                                    <div class="product-box__title">
                                                        <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                            Digital ظرفیت 825 گیگابایت</a>
                                                    </div>
                                                </div>
                                                <div class="
                                product-box__price-row
                                d-flex
                                justify-content-end
                              ">
                                                    <div class="
                                  new-price__value
                                  d-flex
                                  justify-content-end
                                ">
                                                        23,000,000 تومان
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="" href="">
                                            <div class="product-box-ui">
                                                <div data-countdown="2021-9-18 00:00:00"
                                                     class="js-product__count-timer u-hidden"></div>
                                                <a href="" class="product-box__img">
                                                    <img class="img-fluid" src="{{asset('')}}application/assets/images/products/p-1.png" alt=""
                                                         loading="lazy"/>
                                                    <div class="new-price__discount">25%</div>
                                                </a>
                                                <div class="product-box__body">
                                                    <div class="product-box__title">
                                                        <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                            Digital ظرفیت 825 گیگابایت</a>
                                                    </div>
                                                </div>
                                                <div class="
                                product-box__price-row
                                d-flex
                                justify-content-end
                              ">
                                                    <div class="
                                  new-price__value
                                  d-flex
                                  justify-content-end
                                ">
                                                        23,000,000 تومان
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="" href="">
                                            <div class="product-box-ui">
                                                <div data-countdown="2021-9-18 00:00:00"
                                                     class="js-product__count-timer u-hidden"></div>
                                                <a href="" class="product-box__img">
                                                    <img class="img-fluid" src="{{asset('')}}application/assets/images/products/p-1.png" alt=""
                                                         loading="lazy"/>
                                                    <div class="new-price__discount">25%</div>
                                                </a>
                                                <div class="product-box__body">
                                                    <div class="product-box__title">
                                                        <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                            Digital ظرفیت 825 گیگابایت</a>
                                                    </div>
                                                </div>
                                                <div class="
                                product-box__price-row
                                d-flex
                                justify-content-end
                              ">
                                                    <div class="
                                  new-price__value
                                  d-flex
                                  justify-content-end
                                ">
                                                        23,000,000 تومان
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="" href="">
                                            <div class="product-box-ui">
                                                <div data-countdown="2021-9-18 00:00:00"
                                                     class="js-product__count-timer u-hidden"></div>
                                                <a href="" class="product-box__img">
                                                    <img class="img-fluid" src="{{asset('')}}application/assets/images/products/p-1.png" alt=""
                                                         loading="lazy"/>
                                                    <div class="new-price__discount">25%</div>
                                                </a>
                                                <div class="product-box__body">
                                                    <div class="product-box__title">
                                                        <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                            Digital ظرفیت 825 گیگابایت</a>
                                                    </div>
                                                </div>
                                                <div class="
                                product-box__price-row
                                d-flex
                                justify-content-end
                              ">
                                                    <div class="
                                  new-price__value
                                  d-flex
                                  justify-content-end
                                ">
                                                        23,000,000 تومان
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="" href="">
                                            <div class="product-box-ui">
                                                <div data-countdown="2021-9-18 00:00:00"
                                                     class="js-product__count-timer u-hidden"></div>
                                                <a href="" class="product-box__img">
                                                    <img class="img-fluid" src="{{asset('')}}application/assets/images/products/p-1.png" alt=""
                                                         loading="lazy"/>
                                                    <div class="new-price__discount">25%</div>
                                                </a>
                                                <div class="product-box__body">
                                                    <div class="product-box__title">
                                                        <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                            Digital ظرفیت 825 گیگابایت</a>
                                                    </div>
                                                </div>
                                                <div class="
                                product-box__price-row
                                d-flex
                                justify-content-end
                              ">
                                                    <div class="
                                  new-price__value
                                  d-flex
                                  justify-content-end
                                ">
                                                        23,000,000 تومان
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end product carousel-->

    <!--begin product carousel-->
    <section class="swiper--products">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="swiper__box">
                        <div class="swiper__headline d-flex justify-content-end">
                            <div class="d-flex justify-content-end align-items-center">
                                <button class="swiper-button-prev-ui ml-3"
                                        id="js-swiper-products-button-prev-1"></button>
                                <button class="swiper-button-next-ui" id="js-swiper-products-button-next-1"></button>
                            </div>
                        </div>
                        <div class="swiper--products__container">
                            <div class="
                      swiper-specials__title
                      d-none d-lg-flex
                      swiper-specials__title-co
                      swiper-specials--title__game-consoles
                    ">
                                <h5 class="text-center mb-5">بازی کن !</h5>
                                <h4 class="mb-5">کنسول های بازی</h4>

                                <a href="" class="btn swiper-specials__btn">مشاهده همه</a>
                            </div>

                            <div class="swiper-ui__products" id="js-swiper-products-1" style="overflow: hidden">
                                <div class="swiper-wrapper">
                                    <div class="
                          swiper-slide
                          d-flex d-lg-none
                          swiper-specials__slide
                        ">
                                        <div class="
                            swiper-specials__title swiper-specials__title-co
                            swiper-specials--title__game-consoles
                          ">
                                            <h5 class="text-center mb-5">بازی کن !</h5>
                                            <h4 class="mb-5">کنسول های بازی</h4>

                                            <a href="" class="btn swiper-specials__btn">مشاهده همه</a>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <a class="" href="">
                                            <div class="product-box-ui">
                                                <div data-countdown="2021-9-18 00:00:00"
                                                     class="js-product__count-timer"></div>
                                                <a href="" class="product-box__img">
                                                    <img class="img-fluid" src="{{asset('')}}application/assets/images/products/p-1.png" alt=""
                                                         loading="lazy"/>
                                                    <div class="new-price__discount">25%</div>
                                                </a>
                                                <div class="product-box__body">
                                                    <div class="product-box__title">
                                                        <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                            Digital ظرفیت 825 گیگابایت</a>
                                                    </div>
                                                </div>
                                                <div class="
                                product-box__price-row
                                d-flex
                                justify-content-end
                              ">
                                                    <div class="
                                  new-price__value
                                  d-flex
                                  justify-content-end
                                ">
                                                        23,000,000 تومان
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="" href="">
                                            <div class="product-box-ui">
                                                <div data-countdown="2021-9-18 00:00:00"
                                                     class="js-product__count-timer u-hidden"></div>
                                                <a href="" class="product-box__img">
                                                    <img class="img-fluid" src="{{asset('')}}application/assets/images/products/p-1.png" alt=""
                                                         loading="lazy"/>
                                                    <div class="new-price__discount">25%</div>
                                                </a>
                                                <div class="product-box__body">
                                                    <div class="product-box__title">
                                                        <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                            Digital ظرفیت 825 گیگابایت</a>
                                                    </div>
                                                </div>
                                                <div class="
                                product-box__price-row
                                d-flex
                                justify-content-end
                              ">
                                                    <div class="
                                  new-price__value
                                  d-flex
                                  justify-content-end
                                ">
                                                        23,000,000 تومان
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="" href="">
                                            <div class="product-box-ui">
                                                <div data-countdown="2021-9-18 00:00:00"
                                                     class="js-product__count-timer u-hidden"></div>
                                                <a href="" class="product-box__img">
                                                    <img class="img-fluid" src="{{asset('')}}application/assets/images/products/p-1.png" alt=""
                                                         loading="lazy"/>
                                                    <div class="new-price__discount">25%</div>
                                                </a>
                                                <div class="product-box__body">
                                                    <div class="product-box__title">
                                                        <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                            Digital ظرفیت 825 گیگابایت</a>
                                                    </div>
                                                </div>
                                                <div class="
                                product-box__price-row
                                d-flex
                                justify-content-end
                              ">
                                                    <div class="
                                  new-price__value
                                  d-flex
                                  justify-content-end
                                ">
                                                        23,000,000 تومان
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="" href="">
                                            <div class="product-box-ui">
                                                <div data-countdown="2021-9-18 00:00:00"
                                                     class="js-product__count-timer u-hidden"></div>
                                                <a href="" class="product-box__img">
                                                    <img class="img-fluid" src="{{asset('')}}application/assets/images/products/p-1.png" alt=""
                                                         loading="lazy"/>
                                                    <div class="new-price__discount">25%</div>
                                                </a>
                                                <div class="product-box__body">
                                                    <div class="product-box__title">
                                                        <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                            Digital ظرفیت 825 گیگابایت</a>
                                                    </div>
                                                </div>
                                                <div class="
                                product-box__price-row
                                d-flex
                                justify-content-end
                              ">
                                                    <div class="
                                  new-price__value
                                  d-flex
                                  justify-content-end
                                ">
                                                        23,000,000 تومان
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="" href="">
                                            <div class="product-box-ui">
                                                <div data-countdown="2021-9-18 00:00:00"
                                                     class="js-product__count-timer u-hidden"></div>
                                                <a href="" class="product-box__img">
                                                    <img class="img-fluid" src="{{asset('')}}application/assets/images/products/p-1.png" alt=""
                                                         loading="lazy"/>
                                                    <div class="new-price__discount">25%</div>
                                                </a>
                                                <div class="product-box__body">
                                                    <div class="product-box__title">
                                                        <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                            Digital ظرفیت 825 گیگابایت</a>
                                                    </div>
                                                </div>
                                                <div class="
                                product-box__price-row
                                d-flex
                                justify-content-end
                              ">
                                                    <div class="
                                  new-price__value
                                  d-flex
                                  justify-content-end
                                ">
                                                        23,000,000 تومان
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="" href="">
                                            <div class="product-box-ui">
                                                <div data-countdown="2021-9-18 00:00:00"
                                                     class="js-product__count-timer u-hidden"></div>
                                                <a href="" class="product-box__img">
                                                    <img class="img-fluid" src="{{asset('')}}application/assets/images/products/p-1.png" alt=""
                                                         loading="lazy"/>
                                                    <div class="new-price__discount">25%</div>
                                                </a>
                                                <div class="product-box__body">
                                                    <div class="product-box__title">
                                                        <a href="">کنسول بازی سونی مدل Playstation 5 Edition
                                                            Digital ظرفیت 825 گیگابایت</a>
                                                    </div>
                                                </div>
                                                <div class="
                                product-box__price-row
                                d-flex
                                justify-content-end
                              ">
                                                    <div class="
                                  new-price__value
                                  d-flex
                                  justify-content-end
                                ">
                                                        23,000,000 تومان
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end product carousel-->

    <!--begin brands carousel-->
    <section class="swiper__brands">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="swiper__headline"></div>
                    <div class="swiper__box">
                        <!-- Swiper -->
                        <div class="swiper-ui__brands" style="overflow: hidden">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide swiper-brands-image-container">
                                    <a class="js-snt-banner-brand" href="">
                                        <img class="img-fluid" src="{{asset('')}}application/assets/images/brands/lg-logo.png" alt=""/>
                                    </a>
                                </div>
                                <div class="swiper-slide swiper-brands-image-container">
                                    <a class="js-snt-banner-brand" href="">
                                        <img class="img-fluid" src="{{asset('')}}application/assets/images/brands/acer-logo.png" alt=""/>
                                    </a>
                                </div>
                                <div class="swiper-slide swiper-brands-image-container">
                                    <a class="js-snt-banner-brand" href="">
                                        <img class="img-fluid" src="{{asset('')}}application/assets/images/brands/apple-logo.png" alt=""/>
                                    </a>
                                </div>
                                <div class="swiper-slide swiper-brands-image-container">
                                    <a class="js-snt-banner-brand" href="">
                                        <img class="img-fluid" src="{{asset('')}}application/assets/images/brands/asus-logo.png" alt=""/>
                                    </a>
                                </div>
                                <div class="swiper-slide swiper-brands-image-container">
                                    <a class="js-snt-banner-brand" href="">
                                        <img class="img-fluid" src="{{asset('')}}application/assets/images/brands/nokia-logo.png" alt=""/>
                                    </a>
                                </div>
                                <div class="swiper-slide swiper-brands-image-container">
                                    <a class="js-snt-banner-brand" href="">
                                        <img class="img-fluid" src="{{asset('')}}application/assets/images/brands/samsung-logo.png" alt=""/>
                                    </a>
                                </div>
                                <div class="swiper-slide swiper-brands-image-container">
                                    <a class="js-snt-banner-brand" href="">
                                        <img class="img-fluid" src="{{asset('')}}application/assets/images/brands/sony-logo.png" alt=""/>
                                    </a>
                                </div>
                                <div class="swiper-slide swiper-brands-image-container">
                                    <a class="js-snt-banner-brand" href="">
                                        <img class="img-fluid" src="{{asset('')}}application/assets/images/brands/xiaomi-logo.png" alt=""/>
                                    </a>
                                </div>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end brands carousel-->
@endsection
