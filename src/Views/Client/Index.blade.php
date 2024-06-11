@extends('layouts.master')

@section('title')
Homepage
@endsection

@section('content')

<!--================ Hero Carousel start =================-->
<section class="section-margin mt-0">
    <div class="owl-carousel owl-theme hero-carousel">
        <div class="hero-carousel__slide">
            <img src="{{asset('assets/client/img/home/slider_1.jpg')}}" alt="" class="img-fluid">
            <!-- <a href="#" class="hero-carousel__slideOverlay">
                <h3>Wireless Headphone</h3>
                <p>Accessories Item</p>
            </a> -->
        </div>
        <div class="hero-carousel__slide">
            <img src="{{asset('assets/client/img/home/slider_3.jpg')}}" alt="" class="img-fluid">
            <!-- <a href="#" class="hero-carousel__slideOverlay">
                <h3>Wireless Headphone</h3>
                <p>Accessories Item</p>
            </a> -->
        </div>
        <div class="hero-carousel__slide">
            <img src="{{asset('assets/client/img/home/slider_1.jpg')}}" alt="" class="img-fluid">
            <!-- <a href="#" class="hero-carousel__slideOverlay">
                <h3>Wireless Headphone</h3>
                <p>Accessories Item</p>
            </a> -->
        </div>
    </div>
</section>
<!--================ Hero Carousel end =================-->

<!-- ================ trending product section start ================= -->
<section class="section-margin calc-60px">
    <div class="container">
        <div class="section-intro pb-60px">
            <p>Popular Item in the market</p>
            <h2>News <span class="section-intro__style">Product</span></h2>
        </div>

        <div class="row">

            @foreach($products as $product)
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="card text-center card-product">
                    <div class="card-product__img">
                        <a href="{{ url('product/'.$product['id']) }}"><img class="card-img" src="{{ asset($product['img_thumbnail']) }}" alt="{{ $product['name'] }}"></a>

                        <ul class="card-product__imgOverlay">
                            <li><button><i class="ti-shopping-cart"></i></button></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h4 class="card-product__title"><a href="#">{{ $product['name'] }}</a></h4>
                        <p class="card-product__content text-success h5">{{ $product['price'] }}đ</p>
                        <!-- <p class="card-product__content">{{ $product['content'] }}</p> -->
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>

<!-- ================ trending product section end ================= -->


<!-- ================ offer section start ================= -->
<section class="offer" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 20px 30px" data-top-bottom="background-position: 0 20px">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="offer__content text-center">
                    <h3>Up To 50% Off</h3>
                    <h4>Winter Sale</h4>
                    <p>Him she'd let them sixth saw light</p>
                    <a class="button button--active mt-3 mt-xl-4" href="#">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ offer section end ================= -->

<!-- ================ Best Selling item  carousel ================= -->
<section class="section-margin calc-60px">
    <div class="container">
        <div class="section-intro pb-60px">
            <p>Popular Item in the market</p>
            <h2>Best <span class="section-intro__style">Sellers</span></h2>
        </div>
        <div class="owl-carousel owl-theme" id="bestSellerCarousel">


            @foreach($products as $product)
            <div class="card text-center card-product">
                <div class="card-product__img">
                    <img class="card-img" src="{{ asset($product['img_thumbnail']) }}" alt="{{ $product['name'] }}">
                    <ul class="card-product__imgOverlay">
                        <li><button><i class="ti-shopping-cart"></i></button></li>
                    </ul>
                </div>
                <div class="card-body">
                    <h4 class="card-product__title"><a href="#">{{ $product['name'] }}</a></h4>
                    <p class="card-product__content text-success h5">{{ $product['price'] }}đ</p>
                    <!-- <p class="card-product__content">{{ $product['content'] }}</p> -->
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
<!-- ================ Best Selling item  carousel end ================= -->

<!-- ================ Blog section start ================= -->
<section class="blog">
    <div class="container">
        <div class="section-intro pb-60px">
            <p>Popular Item in the market</p>
            <h2>Latest <span class="section-intro__style">News</span></h2>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="card card-blog">
                    <div class="card-blog__img">
                        <img class="card-img rounded-0" src="{{asset('assets/client/img/home/slider_2.jpg')}}" alt="">
                    </div>
                    <div class="card-body">
                        <ul class="card-blog__info">
                            <li><a href="#">By Admin</a></li>
                            <li><a href="#"><i class="ti-comments-smiley"></i> 2 Comments</a></li>
                        </ul>
                        <h4 class="card-blog__title"><a href="single-blog.html">The Richland Center Shooping News and weekly shooper</a></h4>
                        <p>Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.</p>
                        <a class="card-blog__link" href="#">Read More <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="card card-blog">
                    <div class="card-blog__img">
                        <img class="card-img rounded-0" src="{{asset('assets/client/img/home/slider_1.jpg')}}" alt="">
                    </div>
                    <div class="card-body">
                        <ul class="card-blog__info">
                            <li><a href="#">By Admin</a></li>
                            <li><a href="#"><i class="ti-comments-smiley"></i> 2 Comments</a></li>
                        </ul>
                        <h4 class="card-blog__title"><a href="single-blog.html">The Shopping News also offers top-quality printing services</a></h4>
                        <p>Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.</p>
                        <a class="card-blog__link" href="#">Read More <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="card card-blog">
                    <div class="card-blog__img">
                        <img class="card-img rounded-0" src="{{asset('assets/client/img/home/slider_3.jpg')}}" alt="">
                    </div>
                    <div class="card-body">
                        <ul class="card-blog__info">
                            <li><a href="#">By Admin</a></li>
                            <li><a href="#"><i class="ti-comments-smiley"></i> 2 Comments</a></li>
                        </ul>
                        <h4 class="card-blog__title"><a href="single-blog.html">Professional design staff and efficient equipment you’ll find we offer</a></h4>
                        <p>Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.</p>
                        <a class="card-blog__link" href="#">Read More <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ Blog section end ================= -->


@endsection
