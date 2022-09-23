@extends('layouts.app')

@section('title')
Makul Indonesia Detail
@endsection

@section('content')
<div class="page-content page-details">
    <section class="store-breadcrumbs" data-aos="fade-dwon" data-aos-delay="100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">
                                Product Details
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="store-gallery" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-8" data-aos="zoom-in">
                    <transition name="slide-fade" mode="out-in">
                        <img :src="photos[activePhoto].url" :key="photos[activePhoto].id" class="w-100 main-image" alt="">
                    </transition>
                </div>
                <div class="col-lg-2">
                    <div class="row">
                        <div class="col-3 col-lg-12 mt-2 mt-lg-0" v-for="(photo, index) in photos" :key="photo.id" data-aos="zoom-in" data-aos-delay="150">
                            <a href="#" @click="changeActive(index)">
                                <img :src="photo.url" class="w-100 thumbnail-image" :class="{active:index == activePhoto}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="store-detail-container" data-aos="fade-up">
        <section class="store-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h1>Boba Milk Tea</h1>
                        <div class="owner">By Rendi Widagdo</div>
                        <div class="price">Rp. 15.000 ,-</div>
                    </div>
                    <div class="col-lg-2" data-aos="zoom-in">
                        <a href="/cart.html" class="btn btn-success px-4 text-white btn-block mb-3">Add to Cart</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="store-description">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <p>
                            Boba adalah Boba berbahan dasar tepung tapioka yaitu tepung dari singkong. Tapioka itu sendiri tidak memiliki banyak rasa, sehingga rasa manis dari boba sebagian besar berasal dari gula atau madu yang direndam sebelum disajikan.
                        </p>
                        <p>
                            Bubble tea yang klasik biasanya menggunakan teh hitam. Namun, seiring dengan perkembangan zaman dan inovasi, kedai boba biasanya menawarkan berbagai jenis teh untuk dipilih seperti melati, hijau, oolong, matcha, earl grey, teh buah, dan sebagainya.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="store-review">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 mt-3 mb-3">
                        <h5>Customer Review (3)</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <ul class="list-unstyled">
                            <li class="media">
                                <img src="/images/cust_pc.png" alt="" class="mr-3 rounded-circle">
                                <div class="media-body">
                                    <h5 class="mt-2 mb-1">
                                        Miftahul Jannah
                                    </h5>
                                    I thought it was not good for living room. I really happy
                                    to decided buy this product last week now feels like homey.
                                </div>
                            </li>
                            <li class="media">
                                <img src="/images/cust_pc2.png" alt="" class="mr-3 rounded-circle">
                                <div class="media-body">
                                    <h5 class="mt-2 mb-1">
                                        John Kennedy
                                    </h5>
                                    I thought it was not good for living room. I really happy
                                    to decided buy this product last week now feels like homey.
                                </div>
                            </li>
                            <li class="media">
                                <img src="/images/default_pc.png" alt="" class="mr-3 rounded-circle">
                                <div class="media-body">
                                    <h5 class="mt-2 mb-1">
                                        Joys Joys
                                    </h5>
                                    I thought it was not good for living room. I really happy
                                    to decided buy this product last week now feels like homey.
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@push('addon-script')
<script src="/vendor/vue/vue.js"></script>
<script>
    var gallery = new Vue({
        el: "#gallery",
        mounted() {
            AOS.init();
        },
        data: {
            activePhoto: 0,
            photos: [{
                    id: 1,
                    url: "/images/pic_detail1.jpg"
                },
                {
                    id: 2,
                    url: "/images/pic_detail2.jpg"
                },
                {
                    id: 3,
                    url: "/images/pic_detail3.jpg"
                },
                {
                    id: 4,
                    url: "/images/pic_detail4.jpg"
                },
            ],
        },
        methods: {
            changeActive(id) {
                this.activePhoto = id;
            },
        },
    })
</script>
@endpush
@endsection