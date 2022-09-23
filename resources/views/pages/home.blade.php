@extends('layouts.app')

@section('title')
    Makul Indonesia Home
@endsection

@section('content')
<div class="page-content page-home">
    <section class="store-carousel" data-aos="zoom-in">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="storeCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#storeCarousel" data-slide-to="0">
                            </li>
                            <li data-target="#storeCarousel" data-slide-to="1">
                            </li>
                            <li data-target="#storeCarousel" data-slide-to="2">
                            </li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/images/banner.jpg" alt="Carousel Image" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/banner2.jpg" alt="Carousel Image" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/banner3.jpg" alt="Carousel Image" class="d-block w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="store-trend-categories mt-4">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up">
                    <h5>Trend Categories</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
                    <a href="#" class="component-categories d-block">
                        <div class="categories-image">
                            <img src="/images/categories-milk-boba.svg" alt="" class="w-100">
                        </div>
                        <p class="categories-text">
                            Boba Milk
                        </p>
                    </a>
                </div>
                <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
                    <a href="#" class="component-categories d-block">
                        <div class="categories-image">
                            <img src="/images/categories-coffee.svg" alt="" class="w-100">
                        </div>
                        <p class="categories-text">
                            Coffee
                        </p>
                    </a>
                </div>
                <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300">
                    <a href="#" class="component-categories d-block">
                        <div class="categories-image">
                            <img src="/images/categories-toast.svg" alt="" class="w-100">
                        </div>
                        <p class="categories-text">
                            Toast
                        </p>
                    </a>
                </div>
                <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400">
                    <a href="#" class="component-categories d-block">
                        <div class="categories-image">
                            <img src="/images/categories-milk-tea.svg" alt="" class="w-100">
                        </div>
                        <p class="categories-text">
                            Milk Tea
                        </p>
                    </a>
                </div>
                <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="500">
                    <a href="#" class="component-categories d-block">
                        <div class="categories-image">
                            <img src="/images/categories-coffee-bobaa.svg" alt="" class="w-100">
                        </div>
                        <p class="categories-text">
                            Coffee Boba
                        </p>
                    </a>
                </div>
                <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
                    <a href="#" class="component-categories d-block">
                        <div class="categories-image">
                            <img src="/images/categories-snacks.svg" alt="" class="w-100">
                        </div>
                        <p class="categories-text">
                            Snacks
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="store-new-products">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up">
                    <h5>New Products</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <a href="/details.html" class="component-products d-block">
                        <div class="products-thumbnail">
                            <div class="products-image" style="background-image: url('/images/product-milk-tea-boba.jpg');">
                            </div>
                        </div>
                        <div class="products-text">
                            Milk Tea Boba
                        </div>
                        <div class="products-price">
                            Rp. 15.000 ,-
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <a href="/details.html" class="component-products d-block">
                        <div class="products-thumbnail">
                            <div class="products-image" style="background-image: url('/images/product-taro-milk-boba.jpg');">
                            </div>
                        </div>
                        <div class="products-text">
                            Taro Milk Boba
                        </div>
                        <div class="products-price">
                            Rp. 18.000 ,-
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <a href="/details.html" class="component-products d-block">
                        <div class="products-thumbnail">
                            <div class="products-image" style="background-image: url('/images/product-american-toast.jpg');">
                            </div>
                        </div>
                        <div class="products-text">
                            American Toast
                        </div>
                        <div class="products-price">
                            Rp. 25.000 ,-
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <a href="/details.html" class="component-products d-block">
                        <div class="products-thumbnail">
                            <div class="products-image" style="background-image: url('/images/product-spaghetti-carbonara.jpg');">
                            </div>
                        </div>
                        <div class="products-text">
                            Spaghetti Carbonara
                        </div>
                        <div class="products-price">
                            Rp. 18.000 ,-
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                    <a href="/details.html" class="component-products d-block">
                        <div class="products-thumbnail">
                            <div class="products-image" style="background-image: url('/images/product-caramel-boba.jpg');">
                            </div>
                        </div>
                        <div class="products-text">
                            Caramel Tea Boba
                        </div>
                        <div class="products-price">
                            Rp. 25.000 ,-
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <a href="/details.html" class="component-products d-block">
                        <div class="products-thumbnail">
                            <div class="products-image" style="background-image: url('/images/produc-hawaiian-mixing-tea.jpg');">
                            </div>
                        </div>
                        <div class="products-text">
                            Hawaiian Mixing Tea
                        </div>
                        <div class="products-price">
                            Rp. 30.000 ,-
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700">
                    <a href="/details.html" class="component-products d-block">
                        <div class="products-thumbnail">
                            <div class="products-image" style="background-image: url('/images/product-jasmine-tea.jpg');">
                            </div>
                        </div>
                        <div class="products-text">
                            Jasmine Tea
                        </div>
                        <div class="products-price">
                            Rp. 12.000 ,-
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800">
                    <a href="/details.html" class="component-products d-block">
                        <div class="products-thumbnail">
                            <div class="products-image" style="background-image: url('/images/product-espresso.jpg');">
                            </div>
                        </div>
                        <div class="products-text">
                            Espresso Single Shot
                        </div>
                        <div class="products-price">
                            Rp. 15.000 ,-
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection