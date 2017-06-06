<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>D&G Furniture</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- CSS -->
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ url('assets/frontend') }}/css/bootstrap.min.css">
    <!-- Icon Font CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ url('assets/frontend') }}/css/material-design-iconic-font.min.css">
    <!-- Plugins Import CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ url('assets/frontend') }}/css/import.css">
    <!-- Style CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ url('assets/frontend') }}/css/style.css">
    <!-- Responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ url('assets/frontend') }}/css/responsive.css">

    <!-- Style customizer (Remove these two lines please) -->
    <link rel="stylesheet" href="{{ url('assets/frontend') }}/css/style-customizer.css">
    <link href="{{ url('assets/frontend') }}/css/color/color-1.css" data-style="styles" rel="stylesheet">
    @stack('plugin_css')

    <!-- Modernizer JS
    ============================================ -->
    <script src="{{ url('assets/frontend') }}/js/vendor/modernizr-2.8.3.min.js"></script>

</head>
<body>
<!-- Pre Loader
============================================ -->
<div class="preloader">
    <div class="loading-center">
        <div class="loading-center-absolute">
            <div class="object object_one"></div>
            <div class="object object_two"></div>
            <div class="object object_three"></div>
        </div>
    </div>
</div>
<!-- Body main wrapper start -->
<div class="wrapper bg-white fix">

    <!-- Header 1
    ============================================ -->
    <div class="header-area sticky header-area-1  clearfix">
        <!-- Header Left 1 -->
        <div class="header-left header-left-1 float-left">
            <a href="index.html" class="logo"><img src="{{ url('assets/frontend') }}/img/logo.png" alt="logo" /></a>
        </div>
        <!-- Menu Wrapper 1 -->
        <div class="menu-wrapper menu-wrapper-1 hidden-sm hidden-xs text-center">
            <div class="menu menu-1">
                <nav>
                    <ul>
                        <li class="@if (str_is('home', Route::currentRouteName())) active @endif"><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="#">element</a>
                            <ul class="sub-menu">
                                <li><a href="#">Header</a>
                                    <ul class="sub-menu">
                                        <li><a href="header-1.html">Header 1</a></li>
                                        <li><a href="header-2.html">Header 2</a></li>
                                        <li><a href="header-3.html">Header 3</a></li>
                                        <li><a href="header-4.html">Header 4</a></li>
                                        <li><a href="header-5.html">Header 5</a></li>
                                        <li><a href="header-6.html">Header 6</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Footer</a>
                                    <ul class="sub-menu">
                                        <li><a href="footer-1.html">Footer 1</a></li>
                                        <li><a href="footer-2.html">Footer 2</a></li>
                                        <li><a href="footer-3.html">Footer 3</a></li>
                                        <li><a href="footer-4.html">Footer 4</a></li>
                                        <li><a href="footer-5.html">Footer 5</a></li>
                                        <li><a href="footer-6.html">Footer 6</a></li>
                                    </ul>
                                </li>
                                <li><a href="alerts.html">Alerts</a></li>
                                <li><a href="banner.html">Banner</a></li>
                                <li><a href="button.html">Button</a></li>
                                <li><a href="collapse.html">Collapse</a></li>
                                <li><a href="progress.html">Progress bar</a></li>
                                <li><a href="service.html">Service</a></li>
                                <li><a href="tab.html">Tab</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="image-gallery.html">Image gallery</a></li>
                            </ul>
                        </li>
                        <li><a href="shop.html">Shop</a>
                            <div class="mega-menu">
                                <ul>
                                    <li><a href="#">table's</a></li>
                                    <li><a href="#">Blazers</a></li>
                                    <li><a href="#">Jackets</a></li>
                                    <li><a href="#">Collections</a></li>
                                    <li><a href="#">T-Shirts</a></li>
                                    <li><a href="#">jens pant’s</a></li>
                                    <li><a href="#">sports shoes</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">chair's</a></li>
                                    <li><a href="#">Blazers</a></li>
                                    <li><a href="#">Jackets</a></li>
                                    <li><a href="#">Collections</a></li>
                                    <li><a href="#">T-Shirts</a></li>
                                    <li><a href="#">jens pant’s</a></li>
                                    <li><a href="#">sports shoes</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">accessaories</a></li>
                                    <li><a href="#">Blazers</a></li>
                                    <li><a href="#">Jackets</a></li>
                                    <li><a href="#">Collections</a></li>
                                    <li><a href="#">T-Shirts</a></li>
                                    <li><a href="#">jens pant’s</a></li>
                                    <li><a href="#">sports shoes</a></li>
                                </ul>
                                <div class="menu-banner">
                                    <a href="#"><img src="{{ url('assets/frontend') }}/img/menu-banner.jpg" alt="" /></a>
                                </div>
                            </div>
                        </li>
                        <li><a href="#">pages</a>
                            <ul class="sub-menu">
                                <li><a href="#">Shop pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop.html">Shop grid</a></li>
                                        <li><a href="shop-list.html">Shop list</a></li>
                                        <li><a href="shop-left-sidebar.html">Shop grid left sidebar</a></li>
                                        <li><a href="shop-right-sidebar.html">Shop grid right sidebar</a></li>
                                        <li><a href="shop-list-left-sidebar.html">Shop list Left sidebar</a></li>
                                        <li><a href="shop-list-right-sidebar.html">Shop list right sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Product details</a>
                                    <ul class="sub-menu">
                                        <li><a href="product-details-1.html">Product details V1</a></li>
                                        <li><a href="product-details-2.html">Product details V2</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Blog default</a></li>
                                        <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                        <li><a href="blog-details.html">Blog details</a></li>
                                    </ul>
                                </li>
                                <li><a href="checkout.html">Check out</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="404.html">404</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog default</a></li>
                                <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                <li><a href="blog-details.html">Blog details</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Header Right 1 -->
        <div class="header-right header-right-1 float-right">
            <!-- Account Menu -->
            <div class="account-menu account-menu-1 float-right">
                <button data-toggle="dropdown" class="acc-menu-toggle"><i class="zmdi zmdi-settings"></i></button>
                <ul class="acc-menu-dropdown dropdown-menu right">
                    <li><a href="#">account</a></li>
                    <li><a href="#">check out</a></li>
                    <li><a href="#">shop</a></li>
                    <li><a href="#">wishlist</a></li>
                    <li><a href="#">log in</a></li>
                    <li><a href="#">cart</a></li>
                </ul>
            </div>
            <!-- Mini Cart -->
            <div class="mini-cart-wrapper mini-cart-wrapper-1 float-right">
                <a href="#" data-toggle="dropdown" class="mini-cart-btn"><span><i class="zmdi zmdi-shopping-cart"></i><span class="cart-number">{{ \Cart::instance('cart')->count() }}</span></span></a>
                <div class="mini-cart dropdown-menu right">
                    @if(\Cart::instance('cart')->count()>0)
                        @foreach(Cart::instance('cart')->content() as $row)
                            <div class="mini-cart-product fix">
                                <a href="#" class="image"><img src="{{ $row->model->getImage() }}" alt="" /></a>
                                <div class="content fix">
                                    <a href="{{ route('frontend.product_detail',$row->model->id) }}" class="title"> {{ $row->name }} </a>
                                    <p>Qty: {{ $row->qty }}</p>
                                    <p>Rp {{ number_format($row->price*$row->qty,0,',','.') }}</p>
                                    <button class="remove" onclick="document.getElementById('rowId').value = '{{ $row->rowId }}';document.getElementById('cart-delete-form').submit();"><i class="zmdi zmdi-close"></i></button>
                                </div>
                            </div>
                        @endforeach
                        <form id="cart-delete-form" action="{{ route('frontend.cart.delete') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                            <input type="hidden" name="rowId" id="rowId" value="">
                        </form>
                        <div class="mini-cart-checkout text-center">
                            <a href="{{ route('frontend.cart.manage') }}">checkout</a>
                        </div>
                    @else
                        <h3 style="color: white;">Cart is empty</h3>
                    @endif
                </div>
            </div>
            <!-- Header Search -->
            <div class="header-search header-search-1 hidden-xs float-right">
                <button data-toggle="dropdown" class="search-toggle" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
                <div class="search-dropdown dropdown-menu right">
                    <form action="#">
                        <input type="text" placeholder="Search Product...">
                    </form>
                </div>
            </div>
        </div>
        <!-- Mobile Menu Wrapper 1 -->
        <div class="mobile-menu-wrapper mobile-menu-wrapper-1 hidden-md hidden-lg">
            <div class="mobile-menu mobile-menu-1">
                <nav>
                    <ul>
                        <li class="active"><a href="index.html">home</a>
                            <ul>
                                <li><a href="index.html">Home version one</a></li>
                                <li><a href="index-2.html">Home version two</a></li>
                                <li><a href="index-box.html">Home one box</a></li>
                                <li><a href="index-2-box.html">Home two box</a></li>
                                <li><a href="index-text-1.html">Home text effect 1</a></li>
                                <li><a href="index-text-2.html">Home text effect 2</a></li>
                                <li><a href="index-text-3.html">Home text effect 3</a></li>
                            </ul>
                        </li>
                        <li><a href="#">element</a>
                            <ul>
                                <li><a href="#">Header</a>
                                    <ul>
                                        <li><a href="header-1.html">Header 1</a></li>
                                        <li><a href="header-2.html">Header 2</a></li>
                                        <li><a href="header-3.html">Header 3</a></li>
                                        <li><a href="header-4.html">Header 4</a></li>
                                        <li><a href="header-5.html">Header 5</a></li>
                                        <li><a href="header-6.html">Header 6</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Footer</a>
                                    <ul>
                                        <li><a href="footer-1.html">Footer 1</a></li>
                                        <li><a href="footer-2.html">Footer 2</a></li>
                                        <li><a href="footer-3.html">Footer 3</a></li>
                                        <li><a href="footer-4.html">Footer 4</a></li>
                                        <li><a href="footer-5.html">Footer 5</a></li>
                                        <li><a href="footer-6.html">Footer 6</a></li>
                                    </ul>
                                </li>
                                <li><a href="alerts.html">Alerts</a></li>
                                <li><a href="banner.html">Banner</a></li>
                                <li><a href="button.html">Button</a></li>
                                <li><a href="collapse.html">Collapse</a></li>
                                <li><a href="progress.html">Progress bar</a></li>
                                <li><a href="service.html">Service</a></li>
                                <li><a href="tab.html">Tab</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="image-gallery.html">Image gallery</a></li>
                            </ul>
                        </li>
                        <li><a href="shop.html">Shop</a>
                            <ul>
                                <li><a href="#">table's</a>
                                    <ul>
                                        <li><a href="#">Blazers</a></li>
                                        <li><a href="#">Jackets</a></li>
                                        <li><a href="#">Collections</a></li>
                                        <li><a href="#">T-Shirts</a></li>
                                        <li><a href="#">jens pant’s</a></li>
                                        <li><a href="#">sports shoes</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">chair's</a>
                                    <ul>
                                        <li><a href="#">Blazers</a></li>
                                        <li><a href="#">Jackets</a></li>
                                        <li><a href="#">Collections</a></li>
                                        <li><a href="#">T-Shirts</a></li>
                                        <li><a href="#">jens pant’s</a></li>
                                        <li><a href="#">sports shoes</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">accessaories</a>
                                    <ul>
                                        <li><a href="#">Blazers</a></li>
                                        <li><a href="#">Jackets</a></li>
                                        <li><a href="#">Collections</a></li>
                                        <li><a href="#">T-Shirts</a></li>
                                        <li><a href="#">jens pant’s</a></li>
                                        <li><a href="#">sports shoes</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">pages</a>
                            <ul>
                                <li><a href="#">Shop pages</a>
                                    <ul>
                                        <li><a href="shop.html">Shop grid</a></li>
                                        <li><a href="shop-list.html">Shop list</a></li>
                                        <li><a href="shop-left-sidebar.html">Shop grid left sidebar</a></li>
                                        <li><a href="shop-right-sidebar.html">Shop grid right sidebar</a></li>
                                        <li><a href="shop-list-left-sidebar.html">Shop list Left sidebar</a></li>
                                        <li><a href="shop-list-right-sidebar.html">Shop list right sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Product details</a>
                                    <ul>
                                        <li><a href="product-details-1.html">Product details V1</a></li>
                                        <li><a href="product-details-2.html">Product details V2</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog default</a></li>
                                        <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                        <li><a href="blog-details.html">Blog details</a></li>
                                    </ul>
                                </li>
                                <li><a href="checkout.html">Check out</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="404.html">404</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">blog</a>
                            <ul>
                                <li><a href="blog.html">Blog default</a></li>
                                <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                <li><a href="blog-details.html">Blog details</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    @yield('content')

    <!-- Newsletter Area
    ============================================ -->
    <div class="newsletter-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="newsletter-wrapper">
                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-xs-12">
                            <h3>Promotion Sign-Up</h3>
                            <div class="newsletter-form float-right">
                                <form id="mc-form" class="mc-form" action="{{ route('frontend.subscribe') }}" method="post">
                                    {{ csrf_field() }}
                                    <input id="phone" name="phone" type="text" autocomplete="off" placeholder="Enter Phone Number..." />
                                    <input id="mc-submit" type="submit" value="subscribe" />
                                </form>
                                <!-- mailchimp-alerts Start -->
                                <div class="mailchimp-alerts text-centre">
                                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                    <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                    <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                </div><!-- mailchimp-alerts end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer 5 Top Area
    ============================================ -->
    <div class="footer-top-area pb-70 pt-130">
        <div class="container">
            <div class="row">
                <div class="footer-about col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <img src="{{ url('assets/frontend') }}/img/logo-2.png" alt="" />
                    <p>Lorem ipsum dolor sit amet, consecteir our adipisicing elit, sed do eiusmod tempor the incididunt ut labore et dolore magnaa liqua. Ut enim minimn.</p>
                    <div class="footer-social fix">
                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                        <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                        <a href="#"><i class="zmdi zmdi-rss"></i></a>
                        <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                        <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                    </div>
                </div>
                <div class="footer-information col-lg-3 col-md-2 col-sm-6 col-xs-12">
                    <h4>Information</h4>
                    <ul>
                        <li><a href="#">Hot Sale</a></li>
                        <li><a href="#">best Seller</a></li>
                        <li><a href="#">Suppliers</a></li>
                        <li><a href="#">Our Store</a></li>
                        <li><a href="#">Deal of The Days</a></li>
                    </ul>
                </div>
                <div class="footer-account col-lg-3 col-md-2 col-sm-6 col-xs-12">
                    <h4>my accounts</h4>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">My Wishlist</a></li>
                        <li><a href="#">My Cart</a></li>
                        <li><a href="#">Sign In</a></li>
                        <li><a href="#">Check out</a></li>
                    </ul>
                </div>
                <div class="footer-contact-2 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <h4>Contact us</h4>
                    <div class="sin-footer-contact fix">
                        <i class="zmdi zmdi-pin"></i>
                        <span>House No 08, Road No 08, Din Bari, Dhaka, Bangladesh</span>
                    </div>
                    <div class="sin-footer-contact fix">
                        <i class="zmdi zmdi-email"></i>
                        <span>Username@gmail.com <br />Damo@gmail.com</span>
                    </div>
                    <div class="sin-footer-contact fix">
                        <i class="zmdi zmdi-phone"></i>
                        <span>+660 256 24857 <br />+660 256 24857</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer 5 Bottom Area
    ============================================ -->
    <div class="footer-bottom-area pb-20 pt-20">
        <div class="container">
            <div class="row">
                <div class="copyright text-left col-sm-6 col-xs-12">
                    <p>Copyright &copy; {{ date('Y') }} <a href="#" target="_blank">STIKOM Bali</a>. All Right Reserved.</p>
                </div>
                <div class="payment-method text-right col-sm-6 col-xs-12">
                    <img src="{{ url('assets/frontend') }}/img/payment/1.png" alt="payment" />
                    <img src="{{ url('assets/frontend') }}/img/payment/2.png" alt="payment" />
                    <img src="{{ url('assets/frontend') }}/img/payment/3.png" alt="payment" />
                    <img src="{{ url('assets/frontend') }}/img/payment/4.png" alt="payment" />
                    <img src="{{ url('assets/frontend') }}/img/payment/5.png" alt="payment" />
                </div>
            </div>
        </div>
    </div>


</div>
<!-- Body main wrapper end -->


<!-- JS -->

<!-- jQuery JS
============================================ -->
<script src="{{ url('assets/frontend') }}/js/vendor/jquery-1.12.0.min.js"></script>
<!-- Bootstrap JS
============================================ -->
<script src="{{ url('assets/frontend') }}/js/bootstrap.min.js"></script>
<!-- Plugins JS
============================================ -->
<script src="{{ url('assets/frontend') }}/js/plugins.js"></script>

<!-- Main JS
============================================ -->
<script src="{{ url('assets/frontend') }}/js/main.js"></script>
@stack('plugin_scripts')

<script>
    $('#mc-form').submit(function() {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '<?= route('frontend.subscribe') ?>',
            type: 'POST',
            data: {phone:$("#phone").val()},
            success: function (data) {
                if(data == "1"){
                    $('.mailchimp-success').html('' + "Thank you for your subscribe!").fadeIn(900);
                    $('.mailchimp-error').fadeOut(400);
                }else{
                    $('.mailchimp-error').html('' + "Your are already subscriber!").fadeIn(900);
                    $('.mailchimp-success').fadeOut(400);
                }
            }
        });
        return false;

        //alert("Thank you for your comment!");
    });
</script>
@stack('scripts')
</body>
</html>
