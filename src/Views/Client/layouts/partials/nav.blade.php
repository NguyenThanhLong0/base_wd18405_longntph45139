<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<div class="main_menu">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand logo_h" href="{{url('')}}"><img src="{{asset('assets/client/img/logo.png')}}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="category.html">Shop Category</a></li>
                            <li class="nav-item"><a class="nav-link" href="single-product.html">Product Details</a></li>
                            <li class="nav-item"><a class="nav-link" href="checkout.html">Product Checkout</a></li>
                            <li class="nav-item"><a class="nav-link" href="confirmation.html">Confirmation</a></li>
                            <li class="nav-item"><a class="nav-link" href="cart.html">Shopping Cart</a></li>
                        </ul>
                    </li>
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Danh mục</a>
                        <ul class="dropdown-menu">
                            @foreach ($categories as $category)
                            <li class="nav-item"><a class="nav-link" href="{{ $category['id'] }}">{{ $category['name'] }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <!-- <a class="nav-link" href="{{ url('auth/login') }}">Login</a> -->
                                @if (!is_logged())
                                <a class="nav-link" href="{{ url('auth/login') }}">Login</a>
                                @endif

                                @if (is_logged())
                                <a class="nav-link" href="{{ url('auth/logout') }}">Logout</a>
                                @endif
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('auth/register') }}">Register</a></li>

                            <li class="nav-item"><a class="nav-link" href="tracking-order.html">Tracking</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul>

                <ul class="nav-shop">
                    <li class="nav-item"><button><i class="ti-search"></i></button></li>
                    <li class="nav-item"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle">3</span></button> </li>
                    <li></li>

                </ul>
                <ul>
                    <!--================ đăng nhập =================-->
                    <?php if (isset($_SESSION['user'])) : ?>
                        <div class="profile_info_iner">
                            <div class="profile_author_name">
                                <h5><?php echo 'Xin chào:' . $_SESSION['user']['name']; ?></h5>
                            </div>
                            <!-- <div class="profile_info_details">
                                    <a class="btn btn-danger" href="<?php echo url('auth/logout'); ?>">Log Out</a>
                                </div> -->
                        </div>
                    <?php endif; ?>
                    <!--================ đăng nhập =================-->
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>