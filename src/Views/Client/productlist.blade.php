@extends('layouts.master')

@section('title')
Danh sách sản phẩm
@endsection

@section('content')
<!-- ================ category section start ================= -->
<section class="section-margin--small mb-5">
  <div class="container">
    <div class="row">
      <div class="col-xl-3 col-lg-4 col-md-5">
        <div class="sidebar-categories">
          <div class="head">Browse Categories</div>
          <ul class="main-categories">
            <li class="common-filter">
              <form action="{{ url('products/searchByCategory') }}" method="GET">
                <ul>
                  <!-- Hiển thị danh sách các danh mục -->
                  @foreach($categories as $category)
                  <li class="main-nav-list">
                    <a class="nav-link text-decoration-none" href="{{ url('products/category/' . $category['id']) }}">{{ $category['name'] }}</a>
                  </li>
                  @endforeach
                </ul>
              </form>
            </li>

          </ul>
        </div>
      </div>
      <div class="col-xl-9 col-lg-8 col-md-7">
        <!-- Start Filter Bar -->
        <div class="filter-bar d-flex flex-wrap align-items-center">

          <div>
            <div class="input-group filter-bar-search">
              <input type="text" placeholder="Search">
              <div class="input-group-append">
                <button type="button"><i class="ti-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- End Filter Bar -->
        <!-- Start Best Seller -->
        <section class="lattest-product-area pb-40 category-list">
          <div class="row">
            @foreach($products as $product)
            <div class="col-md-6 col-lg-4">
              <div class="card text-center card-product">
                <div class="card-product__img">
                  <a href="{{ url('product/'.$product['id']) }}">
                    <img class="card-img" src="{{ asset($product['img_thumbnail']) }}" alt="{{ $product['name'] }}">
                  </a>

                  <!-- Overlay buttons -->
                  <ul class="card-product__imgOverlay">
                    <li><button><i class="ti-shopping-cart"></i></button></li>

                  </ul>
                </div>
                <div class="card-body">
                  <p>{{ $product['c_name'] }}</p>
                  <h4 class="card-product__title"><a href="#">{{ $product['name'] }}</a></h4>
                  <p class="card-product__price">${{ $product['price'] }}</p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </section>
        <!-- End Best Seller -->

      </div>
    </div>
  </div>
</section>
<!-- ================ category section end ================= -->
@endsection