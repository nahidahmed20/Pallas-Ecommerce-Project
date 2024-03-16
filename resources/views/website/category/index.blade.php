@extends('website.master')

@section('body')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{route('home')}}">home</a></li>
                            <li>Camera & Video </li>
                            <li>shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shop  area start-->
    <div class="shop_area shop_reverse mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <!--sidebar widget start-->
                    <aside class="sidebar_widget">
                        <div class="shop_sidebar_banner mb-50">
                            <a href="#"><img src="{{asset('/')}}website/assets/img/bg/banner16.jpg" alt=""></a>
                        </div>
                        <div class="widget_list widget_filter">
                            <h2>Filter by price</h2>
                            <form action="#">
                                <div id="slider-range"></div>
                                <input type="text" name="text" id="amount" />
                                <button type="submit">Filter</button>
                            </form>
                        </div>

                        <div class="widget_list">
                            <h2>Manufacturer</h2>
                            <ul>
                                <li>
                                    <a href="#">Brake Parts <span>(6)</span></a>
                                </li>
                                <li>
                                    <a href="#">Accessories <span>(10)</span></a>
                                </li>
                                <li>
                                    <a href="#">Engine Parts <span>(4)</span></a>
                                </li>
                                <li>
                                    <a href="#">hermes <span>(10)</span></a>
                                </li>
                                <li>
                                    <a href="#">louis vuitton <span>(8)</span></a>
                                </li>

                            </ul>
                        </div>
                        <div class="widget_list">
                            <h2>Select By Color</h2>
                            <ul>
                                <li>
                                    <a href="#">Black  <span>(6)</span></a>
                                </li>
                                <li>
                                    <a href="#"> Blue <span>(8)</span></a>
                                </li>
                                <li>
                                    <a href="#">Brown <span>(10)</span></a>
                                </li>
                                <li>
                                    <a href="#"> Green <span>(6)</span></a>
                                </li>
                                <li>
                                    <a href="#">Pink <span>(4)</span></a>
                                </li>

                            </ul>
                        </div>
                        <div class="widget_list recent_product">
                            <h2>Top Rated Products</h2>
                            <div class="recent_product_container">
                                <div class="recent_product_list">
                                    <div class="recent_product_thumb">
                                        <a href="product-details.html"><img src="{{asset('/')}}website/assets/img/s-product/product.jpg" alt=""></a>
                                    </div>
                                    <div class="recent_product_content">
                                        <h3><a href="product-details.html">Natus erro</a></h3>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent_product_list">
                                    <div class="recent_product_thumb">
                                        <a href="product-details.html"><img src="{{asset('/')}}website/assets/img/s-product/product2.jpg" alt=""></a>
                                    </div>
                                    <div class="recent_product_content">
                                        <h3><a href="product-details.html">Nemo enim</a></h3>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent_product_list">
                                    <div class="recent_product_thumb">
                                        <a href="product-details.html"><img src="{{asset('/')}}website/assets/img/s-product/product3.jpg" alt=""></a>
                                    </div>
                                    <div class="recent_product_content">
                                        <h3><a href="product-details.html">Consequuntur magni</a></h3>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent_product_list">
                                    <div class="recent_product_thumb">
                                        <a href="product-details.html"><img src="{{asset('/')}}website/assets/img/s-product/product4.jpg" alt=""></a>
                                    </div>
                                    <div class="recent_product_content">
                                        <h3><a href="product-details.html">Cras neque</a></h3>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent_product_list">
                                    <div class="recent_product_thumb">
                                        <a href="product-details.html"><img src="{{asset('/')}}website/assets/img/s-product/product5.jpg" alt=""></a>
                                    </div>
                                    <div class="recent_product_content">
                                        <h3><a href="product-details.html">Endurance2</a></h3>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent_product_list">
                                    <div class="recent_product_thumb">
                                        <a href="product-details.html"><img src="{{asset('/')}}website/assets/img/s-product/product6.jpg" alt=""></a>
                                    </div>
                                    <div class="recent_product_content">
                                        <h3><a href="product-details.html">Crown Summit1</a></h3>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent_product_list">
                                    <div class="recent_product_thumb">
                                        <a href="product-details.html"><img src="{{asset('/')}}website/assets/img/s-product/product7.jpg" alt=""></a>
                                    </div>
                                    <div class="recent_product_content">
                                        <h3><a href="product-details.html">Compete Hoodie3</a></h3>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent_product_list">
                                    <div class="recent_product_thumb">
                                        <a href="product-details.html"><img src="{{asset('/')}}website/assets/img/s-product/product3.jpg" alt=""></a>
                                    </div>
                                    <div class="recent_product_content">
                                        <h3><a href="product-details.html">Crown Summit1</a></h3>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent_product_list">
                                    <div class="recent_product_thumb">
                                        <a href="product-details.html"><img src="{{asset('/')}}website/assets/img/s-product/product4.jpg" alt=""></a>
                                    </div>
                                    <div class="recent_product_content">
                                        <h3><a href="product-details.html">Crown Summit1</a></h3>
                                        <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent_product_list">
                                    <div class="recent_product_thumb">
                                        <a href="product-details.html"><img src="{{asset('/')}}website/assets/img/s-product/product5.jpg" alt=""></a>
                                    </div>
                                    <div class="recent_product_content">
                                        <h3><a href="product-details.html">Crown Summit1</a></h3>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent_product_list">
                                    <div class="recent_product_thumb">
                                        <a href="product-details.html"><img src="{{asset('/')}}website/assets/img/s-product/product6.jpg" alt=""></a>
                                    </div>
                                    <div class="recent_product_content">
                                        <h3><a href="product-details.html">Crown Summit1</a></h3>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent_product_list">
                                    <div class="recent_product_thumb">
                                        <a href="product-details.html"><img src="{{asset('/')}}website/assets/img/s-product/product7.jpg" alt=""></a>
                                    </div>
                                    <div class="recent_product_content">
                                        <h3><a href="product-details.html">Crown Summit1</a></h3>
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                                <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="price_box">
                                            <span class="current_price">$65.00</span>
                                            <span class="old_price">$70.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </aside>
                    <!--sidebar widget end-->
                </div>

                <div class="col-lg-9 col-md-12">
                    <!--shop wrapper start-->
                    <!--shop toolbar start-->

                    <div class="shop_title">
                        <h1>Products</h1>
                    </div>
                    <div class="shop_toolbar_wrapper">
                        <div class="shop_toolbar_btn">

                            <button data-role="grid_3" type="button" class="active btn-grid-3" data-bs-toggle="tooltip" title="3"></button>

                            <button data-role="grid_4" type="button"  class=" btn-grid-4" data-bs-toggle="tooltip" title="4"></button>

                            <button data-role="grid_list" type="button"  class="btn-list" data-bs-toggle="tooltip" title="List"></button>
                        </div>
                        <div class=" niceselect_option">

                            <form class="select_option" action="#">
                                <select name="orderby" id="short">

                                    <option selected value="1">Sort by average rating</option>
                                    <option  value="2">Sort by popularity</option>
                                    <option value="3">Sort by newness</option>
                                    <option value="4">Sort by price: low to high</option>
                                    <option value="5">Sort by price: high to low</option>
                                    <option value="6">Product Name: Z</option>
                                </select>
                            </form>


                        </div>
                        <div class="page_amount">
                            <p>Showing 1–9 of 21 results</p>
                        </div>
                    </div>
                    <!--shop toolbar end-->

                    <div class="row ">
                        @foreach($products as $product)
                        <div class="col-lg-4 col-md-6 col-12 ">
                            <div class="single_product">
                                <div class="py-5">
                                    <img src="{{asset($product->image)}}" alt="" height="280" width="350" >
                                    <div class="label_product">
                                        <span class="label_sale">sale</span>
                                    </div>
                                    <div class="quick_button">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="zmdi zmdi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <div class="product_name">
                                        <h3><a href="{{route('product-details',['id' => $product->id])}}">{{$product->name}}</a></h3>
                                    </div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="price_box">
                                        <span class="current_price">{{$product->selling_price}}</span>
                                        <span class="old_price">{{$product->regular_price}}</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <form action="{{route('cart.add',['id' => $product->id])}}" method="POST">
                                                @csrf
                                                <input type="hidden" value="1" name="qty">
                                                <div class="">
                                                    <button type="submit" class="btn btn-primary rounded-0">Add To Cart</button>
                                                </div>
                                            </form>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="shop_toolbar t_bottom">
                        <div class="pagination">
                            <ul>
                                <li class="current">1</li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#">next</a></li>
                                <li><a href="#">>></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->

    <!--brand newsletter area start-->
    <div class="brand_newsletter_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container owl-carousel">
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/')}}website/assets/img/brand/brand.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/')}}website/assets/img/brand/brand1.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/')}}website/assets/img/brand/brand2.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/')}}website/assets/img/brand/brand3.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/')}}website/assets/img/brand/brand4.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/')}}website/assets/img/brand/brand5.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/')}}website/assets/img/brand/brand1.png" alt=""></a>
                        </div>
                    </div>
                    <div class="newsletter_inner">
                        <div class="newsletter_content">
                            <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
                        </div>
                        <div class="newsletter_form">
                            <form action="#">
                                <input placeholder="Email..." type="text">
                                <button type="submit"><i class="zmdi zmdi-mail-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand area end-->


@endsection
