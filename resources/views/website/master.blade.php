<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pallas - eCommerce Bootstrap 4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}website/assets/img/favicon.ico">

    <!-- CSS
    ========================= -->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/assets/css/xzoom.css" media="all" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/style.css">

</head>
<body>
<!--header area start-->
<header class="header_area">


    <!--header top start-->
    <div class="header_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="welcome_text">
                        <p>Welcome to <span>Nahid Store</span> </p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="top_right text-right">
                        <ul>

                            @if(Session::get('customer_id'))
                                <li class="top_links"><a href="#"><i class="zmdi zmdi-account"></i> {{Session::get('customer_name')}} <i class="zmdi zmdi-caret-down"></i></a>
                                    <ul class="dropdown_links">
                                        <li><a href="{{route('customer-logout')}}">Logout </a></li>
                                        <li><a href="{{route('customer-dashboard')}}">Dashboard </a></li>
                                    </ul>
                                </li>
                            @else

                                    <li><a href="{{route('customer-login')}}">Sing In</a></li>
                                    <li><a href="{{route('customer-register')}}">Register</a></li>

                            @endif

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--header top start-->

    <!--header center area start-->
    <div class="header_middle header_middle_six">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="{{route('home')}}"><img src="{{asset('/')}}website/assets/img/logo/logo-3.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="header_middle_inner">
                        <div class="search-container">
                            <form action="#">
                                <div class="hover_category">
                                    <select class="select_option" name="select" id="categori">
                                        <option selected value="1">All Categories</option>
                                            <option value="2">Accessories</option>
                                    </select>
                                </div>
                                <div class="search_box">
                                    <input placeholder="Search product..." type="text">
                                    <button type="submit"><i class="zmdi zmdi-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="mini_cart_wrapper">
                            <a href="javascript:void(0)"><i class="zmdi zmdi-shopping-basket"></i> <span>{{count(Cart::content())}} items</span> </a>
                            <!--mini cart-->
                            <div class="mini_cart mini_cart_six">
                                @foreach(Cart::content() as $item)
                                <div class="cart_item">
                                    <div class="cart_img">
                                        <a href="#"><img src="{{asset($item->options->image)}}" alt=""></a>
                                    </div>
                                    <div class="cart_info">
                                        <a href="#">{{$item->name}}</a>
                                        <span class="quantity">Qty: {{$item->qty}}</span>
                                        <span class="price_cart">{{$item->price}}</span>

                                    </div>
                                    <div class="cart_remove">
                                        <a href="#"><i class="ion-android-close"></i></a>
                                    </div>
                                </div>

                                <div class="mini_cart_table">
                                    <div class="cart_total">
                                        <span>Subtotal:</span>
                                        <span class="price">{{$item->subtotal}}</span>
                                    </div>
                                </div>
                                @endforeach

                                <div class="mini_cart_footer">
                                    <div class="cart_button">
                                        <a href="{{route('cart.show')}}">View cart</a>
                                        <a href="{{route('checkout')}}">Checkout</a>
                                    </div>
                                </div>

                            </div>
                            <!--mini cart end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header center area end-->

    <!--header middel start-->
    <div class="header_bottom">
        <div class="container">
            <div class="row align-items-center">

{{--                <div class="col-lg-3">--}}
{{--                    <div class="categories_menu categorie_six">--}}
{{--                        <div class="categories_title">--}}
{{--                            <h2 class="categori_toggle">Categories</h2>--}}
{{--                        </div>--}}
{{--                        <div class="categories_menu_toggle">--}}
{{--                            <ul>--}}
{{--                                @foreach($categories as $category)--}}
{{--                                <li class="menu_item_children categorie_list"><a href="{{route('product-category',['id'=>$category->id])}}"><span><i class="zmdi zmdi-desktop-mac"></i></span> {{$category->name}} <i class="fa fa-angle-right"></i></a>--}}
{{--                                    <ul class="categories_mega_menu">--}}
{{--                                        @foreach($category->subCategories as $subCategory)--}}
{{--                                        <li class="menu_item_children "><a href="">{{$subCategory->name}}</a>--}}
{{--                                        </li>--}}
{{--                                        @endforeach--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="col-lg-3">
                    <div class="categories_menu categori_three">
                        <div class="categories_title">
                            <h2 class="categori_toggle">Categories</h2>
                        </div>
                        <div class="categories_menu_toggle">
                            <ul>
                                @foreach($categories as $category)
                                <li class=""><a href="{{route('product-category',['id'=>$category->id])}}">{{$category->name}}</a>
                                    <ul class="categories_mega_menu">
                                        @foreach($category->subCategories as $subCategory)
                                        <li class="menu_item_children categorie_list"><a href="{{route('product-sub-category',['id' => $subCategory->id])}}">{{$subCategory->name}}</a>
                                        </li>
                                        @endforeach

                                    </ul>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="main_menu header_position menu_six">
                        <nav>
                            <ul>

                                <li class="active"><a  href="{{route('home')}}"><i class="zmdi zmdi-home"></i> home <i class="zmdi zmdi-caret-down"></i></a>

                                </li>
                                <li class="mega_items"><a href=""><i class="zmdi zmdi-shopping-basket"></i> shop <i class="zmdi zmdi-caret-down"></i></a>
                                    <div class="mega_menu">
                                        <ul class="mega_menu_inner">
                                            <li><a href="#">Shop Layouts</a>
                                                <ul>
                                                    <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                    <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                                    <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                                    <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                                    <li><a href="shop-list.html">List View</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">other Pages</a>
                                                <ul>
                                                    <li><a href="cart.html">cart</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="my-account.html">my account</a></li>
                                                    <li><a href="404.html">Error 404</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Product Types</a>
                                                <ul>
                                                    <li><a href="product-details.html">product details</a></li>
                                                    <li><a href="product-sidebar.html">product sidebar</a></li>
                                                    <li><a href="product-grouped.html">product grouped</a></li>
                                                    <li><a href="variable-product.html">product variable</a></li>

                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="blog.html"><i class="zmdi zmdi-collection-music"></i> blog <i class="zmdi zmdi-caret-down"></i></a>
                                    <ul class="sub_menu pages">
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                        <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="zmdi zmdi-star"></i> pages <i class="zmdi zmdi-caret-down"></i></a>
                                    <ul class="sub_menu pages">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="services.html">services</a></li>
                                        <li><a href="portfolio.html">portfolio</a></li>
                                        <li><a href="faq.html">Frequently Questions</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="404.html">Error 404</a></li>
                                    </ul>
                                </li>

                                <li><a href="about.html"><i class="zmdi zmdi-comments"></i> about Us</a></li>
                                <li><a href="contact.html"><i class="zmdi zmdi-account-box-mail"></i>  Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header middel end-->

</header>
<!--header area end-->

@yield('body')

<!--footer area start-->
<footer class="footer_widgets footer_six">
    <div class="footer_six_inner">
        <div class="container">
            <div class="footer_top">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="widgets_container contact_us">
                            <a href="index.html"><img src="{{asset('/')}}website/assets/img/logo/logo-3.png" alt=""></a>
                            <div class="footer_contact">
                                <ul>
                                    <li><i class="zmdi zmdi-home"></i><span>Addresss:</span> 2 Fauconberg Rd,Chiswick, London</li>
                                    <li><i class="zmdi zmdi-phone-setting"></i><span>Phone:</span><a href="tel:(+1) 866-540-3229">(+1) 866-540-3229</a> </li>
                                    <li><i class="zmdi zmdi-email"></i><span>Email:</span>  info@plazathemes.com</li>
                                </ul>
                            </div>
                            <div class="social_icone">
                                <ul>
                                    <li class="share"><a href="#" title="rss"><i class="fa fa-share-alt"></i></a>
                                        <div class="social_title">
                                            <p>Subscribe</p>
                                            <h3>Rss Feed</h3>
                                        </div>
                                    </li>
                                    <li class="twitter"><a href="#" title="twitter"><i class="fa fa-twitter"></i></a>
                                        <div class="social_title">
                                            <p>Follow Us</p>
                                            <h3>Twitter</h3>
                                        </div>
                                    </li>
                                    <li class="facebook"><a href="#" title="facebook"><i class="fa fa-facebook"></i></a>
                                        <div class="social_title">
                                            <p>Find Us</p>
                                            <h3>Facebook</h3>
                                        </div>
                                    </li>
                                    <li class="google_plus"><a href="#" title="google"><i class="fa fa-google-plus"></i></a>
                                        <div class="social_title">
                                            <p>Find Us</p>
                                            <h3>Google+</h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-7">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="widgets_container widget_menu">
                                    <h3>CUSTOMER SERVICE</h3>
                                    <div class="footer_menu">
                                        <ul>
                                            <li><a href="#">Shipping & Returns</a></li>
                                            <li><a href="#"> Secure Shopping</a></li>
                                            <li><a href="#">International Shipping</a></li>
                                            <li><a href="#"> Affiliates</a></li>
                                            <li><a href="contact.html"> Contact</a></li>
                                            <li><a href="#"> Travel</a></li>
                                            <li><a href="#">ecommerce</a></li>
                                            <li><a href="#"> Creative</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="widgets_container widget_menu">
                                    <h3>Information</h3>
                                    <div class="footer_menu">
                                        <ul>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="#">Delivery infomation</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#"> Travel</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="#">Portfolio</a></li>
                                            <li><a href="#">Conditions</a></li>
                                            <li><a href="#"> Frequently Questions</a></li>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="widgets_container">
                            <h3>instagram</h3>
                            <div class="instagram_gallery">
                                <div class="single_instagram">
                                    <a href="#"><img src="{{asset('/')}}website/assets/img/about/instagram1.jpg" alt=""></a>
                                </div>
                                <div class="single_instagram">
                                    <a href="#"><img src="{{asset('/')}}website/assets/img/about/instagram2.jpg" alt=""></a>
                                </div>
                                <div class="single_instagram">
                                    <a href="#"><img src="{{asset('/')}}website/assets/img/about/instagram3.jpg" alt=""></a>
                                </div>
                                <div class="single_instagram">
                                    <a href="#"><img src="{{asset('/')}}website/assets/img/about/instagram4.jpg" alt=""></a>
                                </div>
                                <div class="single_instagram">
                                    <a href="#"><img src="{{asset('/')}}website/assets/img/about/instagram5.jpg" alt=""></a>
                                </div>
                                <div class="single_instagram">
                                    <a href="#"><img src="{{asset('/')}}website/assets/img/about/instagram6.jpg" alt=""></a>
                                </div>
                                <div class="single_instagram">
                                    <a href="#"><img src="{{asset('/')}}website/assets/img/about/instagram7.jpg" alt=""></a>
                                </div>
                                <div class="single_instagram">
                                    <a href="#"><img src="{{asset('/')}}website/assets/img/about/instagram8.jpg" alt=""></a>
                                </div>
                                <div class="single_instagram">
                                    <a href="#"><img src="{{asset('/')}}website/assets/img/about/instagram9.jpg" alt=""></a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="footer_tag">
                <div class="row">
                    <div class="col-12">
                        <div class="footer_tag_container">
                            <div class="footer_tag_menu">
                                <h3>Furniture :</h3>
                                <ul>
                                    <li><a href="#">bedroom</a></li>
                                    <li><a href="#">Livingroom</a></li>
                                    <li><a href="#">badroom</a></li>
                                    <li><a href="#">Sofa</a></li>
                                    <li><a href="#">Chair</a></li>
                                    <li><a href="#">Bed</a></li>
                                    <li><a href="#">Desk</a></li>
                                </ul>
                            </div>
                            <div class="footer_tag_menu">
                                <h3>Electronic :</h3>
                                <ul>
                                    <li><a href="#">Laptop</a></li>
                                    <li><a href="#">TV</a></li>
                                    <li><a href="#">Computer</a></li>
                                    <li><a href="#">Mobile</a></li>
                                    <li><a href="#">Tablet</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="footer_bottom footer_bottom_six">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="copyright_area">
                        <p>Copyright &copy; 2023 <a href="#"> pallas </a>  All Right Reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="footer_payment text-right">
                        <p><img src="{{asset('/')}}website/assets/img/icon/payment.png" alt=""></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer area end-->


<!-- modal area start-->
<div class="modal fade" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal_body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="modal_tab">
                                <div class="tab-content product-details-large">
                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="{{asset('/')}}website/assets/img/product/product37.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="{{asset('/')}}website/assets/img/product/product24.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="{{asset('/')}}website/assets/img/product/product25.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab4" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="{{asset('/')}}website/assets/img/product/product22.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal_tab_button">
                                    <ul class="nav product_navactive owl-carousel" role="tablist">
                                        <li >
                                            <a class="nav-link active" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="{{asset('/')}}website/assets/img/product/productbig1.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="{{asset('/')}}website/assets/img/product/productbig2.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link button_three" data-bs-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="{{asset('/')}}website/assets/img/product/productbig4.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="{{asset('/')}}website/assets/img/product/productbig5.jpg" alt=""></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <div class="modal_right">
                                <div class="modal_title mb-10">
                                    <h2>Handbag feugiat</h2>
                                </div>
                                <div class="modal_price mb-10">
                                    <span class="new_price">$64.99</span>
                                    <span class="old_price" >$78.99</span>
                                </div>
                                <div class="modal_description mb-15">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>
                                </div>
                                <div class="variants_selects">
                                    <div class="variants_size">
                                        <h2>size</h2>
                                        <select class="select_option">
                                            <option selected value="1">s</option>
                                            <option value="1">m</option>
                                            <option value="1">l</option>
                                            <option value="1">xl</option>
                                            <option value="1">xxl</option>
                                        </select>
                                    </div>
                                    <div class="variants_color">
                                        <h2>color</h2>
                                        <select class="select_option">
                                            <option selected value="1">purple</option>
                                            <option value="1">violet</option>
                                            <option value="1">black</option>
                                            <option value="1">pink</option>
                                            <option value="1">orange</option>
                                        </select>
                                    </div>
                                    <div class="modal_add_to_cart">
                                        <form action="#">
                                            <input min="0" max="100" step="2" value="1" type="number">
                                            <button type="submit">add to cart</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal_social">
                                    <h2>Share this product</h2>
                                    <ul>
                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal area end-->




<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="{{asset('/')}}website/assets/js/jquery-3.7.1.js"></script>
<script src="{{asset('/')}}website/assets/js/plugins.js"></script>
<script src="{{asset('/')}}website/assets/js/script.js"></script>
<script  src="{{asset('/')}}website/assets/js/xzoom.min.js"></script>
<script src="{{asset('/')}}website/assets/js/setup.js"></script>
<!-- Main JS -->
<script src="{{asset('/')}}website/assets/js/main.js"></script>
<script>
    $('document').ready(function () {
        setTimeout(function () {
            $("div.alert").remove();
        },4000);
    });
</script>



</body>

</html>

