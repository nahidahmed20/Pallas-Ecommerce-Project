@extends('website.master')

@section('body')




    <!--slider area start-->
    <section class="slider_section mb-50 mt-30">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 col-md-12">
                    <div class="slider_area slider_seven owl-carousel">
                        <div class="single_slider" data-bgimg="{{asset('/')}}website/assets/img/slider/tv.jpg">
                            <div class="slider_content slider_content_seven style_1">
                                <h1>  <span>products </span > Sony Television </h1>
                                <h2><span>From </span>Tk. 35699  <span>00 </span></h2>
                                <a href="{{route('product-details',['id' => 49])}}">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="sidebar_banner_six">
                        <div class="single_banner mb-30">
                            <div class="banner_thumb">
                                <a href="{{route('product-details',['id' => 10])}}"><img src="{{asset('/')}}website/assets/img/bg/banner19.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="{{route('product-details',['id' => 12])}}"><img src="{{asset('/')}}website/assets/img/bg/banner11.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--slider area end-->

    <!--category product area start-->
    <section class="category_product_area category_product_six  mb-50">
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="category_product_carousel category_column4 owl-carousel">
                        <div class="single_category_product">
                            <div class="category_product_thumb">
                                <a href="{{route('product-category',['id'=> 10])}}"><img src="{{asset('/')}}website/assets/img/category/sports.jpg" alt=""></a>
                            </div>
                            <div class="category_product_name">
                                <h2><a href="{{route('product-category',['id'=> 10])}}">sports</a></h2>
                            </div>
                        </div>
                        <div class="single_category_product">
                            <div class="category_product_thumb">
                                <a href="{{route('product-category',['id'=> 5])}}"><img src="{{asset('/')}}website/assets/img/category/camera.jpg" alt=""></a>
                            </div>
                            <div class="category_product_name">
                                <h2><a href="{{route('product-category',['id'=> 5])}}">Camera</a></h2>
                            </div>
                        </div>
                        <div class="single_category_product">
                            <div class="category_product_thumb">
                                <a href="{{route('product-category',['id'=> 12])}}"><img src="{{asset('/')}}website/assets/img/category/electronics.jpg" alt=""></a>
                            </div>
                            <div class="category_product_name">
                                <h2><a href="{{route('product-category',['id'=> 12])}}">Electronics</a></h2>
                            </div>
                        </div>
                        <div class="single_category_product">
                            <div class="category_product_thumb">
                                <a href="{{route('product-category',['id'=> 8])}}"><img src="{{asset('/')}}website/assets/img/category/funiture.jpg" alt=""></a>
                            </div>
                            <div class="category_product_name">
                                <h2><a href="{{route('product-category',['id'=> 8])}}">Home Funiture</a></h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--category product area end-->

    <!--new product area start-->
    <section class="new_product_area mb-50">
        <div class="container">
            <div class="new_product_three_container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="section_title section_title_two">
                            <h2>New Products</h2>
                        </div>
                        <div class="product_carousel product_column4 owl-carousel">
                            @foreach($products as $product)
                            <div class="single_product ">
                                <div class="product_thumb  mx-auto">
                                    <a href="{{route('product-details',['id' => $product->id])}}"><img src="{{asset($product->image)}}" alt="" height="400px" style="padding: 10px;"></a>
                                    <div class="label_product">
                                        <span class="label_sale">sale</span>
                                    </div>

                                </div>
                                <div class="product_content mx-auto">
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
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--new product area end-->

    <!--banner area start-->
    <div class="banner_area banner_column2 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="{{route('product-details',['id' => 13])}}"><img src="{{asset('/')}}website/assets/img/bg/banner20.jpg" alt=""></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="{{route('product-details',['id' => 26])}}"><img src="{{asset('/')}}website/assets/img/bg/banner21.jpg" alt=""></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--home section five start-->
    <section class="home_section_five">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 col-md-12">
                    <div class="home_section_sidebar_six">
                        <!--new product area start-->
                        <div class="new_product_area product_color_six mb-50">
                            <div class="section_title section_title_two">
                                <h2>Women Fashions</h2>
                            </div>
                            <div class="product_carousel product_column3 owl-carousel">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a ><img src="{{asset('/')}}website/assets/img/product/bag.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{route('product-details',['id'=>19])}}">Women Bag</a></h3>
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
                                            <span class="current_price">1690</span>
                                            <span class="old_price">2550</span>
                                        </div>
                                        <div class="action_links">
                                            <form action="{{route('cart.add',['id' => 19])}}" method="POST">
                                                @csrf
                                                <input type="hidden" value="1" name="qty">
                                                <div class="">
                                                    <button type="submit" class="btn btn-primary rounded-0">Add To Cart</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="{{asset('/')}}website/assets/img/product/necklaces.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{route('product-details',['id'=>20])}}">Pearl Setting Necklaces</a></h3>
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
                                            <span class="current_price">139</span>
                                            <span class="old_price">350</span>
                                        </div>
                                        <div class="action_links">
                                            <form action="{{route('cart.add',['id' => 20])}}" method="POST">
                                                @csrf
                                                <input type="hidden" value="1" name="qty">
                                                <div class="">
                                                    <button type="submit" class="btn btn-primary rounded-0">Add To Cart</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="{{asset('/')}}website/assets/img/product/hairdraiyer.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>

                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{route('product-details',['id'=>15])}}">Panasonic Hair Dryer</a></h3>
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
                                            <span class="current_price">2365</span>
                                            <span class="old_price">3000</span>
                                        </div>
                                        <div class="action_links">
                                            <form action="{{route('cart.add',['id' => 15])}}" method="POST">
                                                @csrf
                                                <input type="hidden" value="1" name="qty">
                                                <div class="">
                                                    <button type="submit" class="btn btn-primary rounded-0">Add To Cart</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="{{asset('/')}}website/assets/img/product/whiterice.png" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{route('product-details',['id'=>18])}}">White Rice Face </a></h3>
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
                                            <span class="current_price">199</span>
                                            <span class="old_price">450</span>
                                        </div>
                                        <div class="action_links">
                                            <form action="{{route('cart.add',['id' => 18])}}" method="POST">
                                                @csrf
                                                <input type="hidden" value="1" name="qty">
                                                <div class="">
                                                    <button type="submit" class="btn btn-primary rounded-0">Add To Cart</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="{{asset('/')}}website/assets/img/product/makeup.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>

                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{route('product-details',['id'=>17])}}">Makeup Kit</a></h3>
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
                                            <span class="current_price">296</span>
                                            <span class="old_price">299</span>
                                        </div>
                                        <div class="action_links">
                                            <form action="{{route('cart.add',['id' => 17])}}" method="POST">
                                                @csrf
                                                <input type="hidden" value="1" name="qty">
                                                <div class="">
                                                    <button type="submit" class="btn btn-primary rounded-0">Add To Cart</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--new product area end-->

                        <!--new product area start-->
                        <div class="new_product_area product_color_six mb-50">
                            <div class="section_title section_title_two">
                                <h2>Camera Laptop & Furniture</h2>
                            </div>
                            <div class="product_carousel product_column3 owl-carousel">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="{{asset('/')}}website/assets/img/product/dslr.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{route('product-details',['id' => 7])}}">LUMIX G100</a></h3>
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
                                            <span class="current_price">65000 </span>
                                            <span class="old_price">71000</span>
                                        </div>
                                        <div class="action_links">
                                            <form action="{{route('cart.add',['id' => 7])}}" method="POST">
                                                @csrf
                                                <input type="hidden" value="1" name="qty">
                                                <div class="">
                                                    <button type="submit" class="btn btn-primary rounded-0">Add To Cart</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{route('product-details',['id' => 10])}}"><img src="{{asset('/')}}website/assets/img/product/apple.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{route('product-details',['id' => 10])}}">Macbook Pro</a></h3>
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
                                            <span class="current_price">56314</span>
                                            <span class="old_price">58000</span>
                                        </div>
                                        <div class="action_links">
                                            <form action="{{route('cart.add',['id' => 10])}}" method="POST">
                                                @csrf
                                                <input type="hidden" value="1" name="qty">
                                                <div class="">
                                                    <button type="submit" class="btn btn-primary rounded-0">Add To Cart</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{route('product-details',['id' => 22])}}"><img src="{{asset('/')}}website/assets/img/product/bed.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>

                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{route('product-details',['id' => 22])}}">Andormahal Bed</a></h3>
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
                                            <span class="current_price">8999</span>
                                            <span class="old_price">16999</span>
                                        </div>
                                        <div class="action_links">
                                            <form action="{{route('cart.add',['id' => 22])}}" method="POST">
                                                @csrf
                                                <input type="hidden" value="1" name="qty">
                                                <div class="">
                                                    <button type="submit" class="btn btn-primary rounded-0">Add To Cart</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--new product area end-->

                        <!--new product area start-->
                        <div class="new_product_area product_color_six mb-50">
                            <div class="section_title section_title_two">
                                <h2>Memory & Hard Disk</h2>
                            </div>
                            <div class="product_carousel product_column3 owl-carousel">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{route('product-details',['id' => 32])}}"><img src="{{asset('/')}}website/assets/img/product/usb.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>

                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{route('product-details',['id' => 32])}}">Flash Drive</a></h3>
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
                                            <span class="current_price">348</span>
                                            <span class="old_price">522</span>
                                        </div>
                                        <div class="action_links">
                                            <form action="{{route('cart.add',['id' => 32])}}" method="POST">
                                                @csrf
                                                <input type="hidden" value="1" name="qty">
                                                <div class="">
                                                    <button type="submit" class="btn btn-primary rounded-0">Add To Cart</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{route('product-details',['id' => 31])}}"><img src="{{asset('/')}}website/assets/img/product/shortmemory.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{route('product-details',['id' => 31])}}">HP SSD Memory Card</a></h3>
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
                                            <span class="current_price">1106 </span>
                                            <span class="old_price">2212</span>
                                        </div>
                                        <div class="action_links">
                                            <form action="{{route('cart.add',['id' => 31])}}" method="POST">
                                                @csrf
                                                <input type="hidden" value="1" name="qty">
                                                <div class="">
                                                    <button type="submit" class="btn btn-primary rounded-0">Add To Cart</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{route('product-details',['id' => 27])}}"><img src="{{asset('/')}}website/assets/img/product/usbmini.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>

                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{route('product-details',['id' => 27])}}">USB FLASH DRIVE</a></h3>
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
                                            <span class="current_price">100</span>
                                            <span class="old_price">1200</span>
                                        </div>
                                        <div class="action_links">
                                            <form action="{{route('cart.add',['id' => 27])}}" method="POST">
                                                @csrf
                                                <input type="hidden" value="1" name="qty">
                                                <div class="">
                                                    <button type="submit" class="btn btn-primary rounded-0">Add To Cart</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{route('product-details',['id' => 30])}}"><img src="{{asset('/')}}website/assets/img/product/memory.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{route('product-details',['id' => 30])}}">Microsd Card </a></h3>
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
                                            <span class="current_price">155</span>
                                            <span class="old_price">300</span>
                                        </div>
                                        <div class="action_links">
                                            <form action="{{route('cart.add',['id' => 30])}}" method="POST">
                                                @csrf
                                                <input type="hidden" value="1" name="qty">
                                                <div class="">
                                                    <button type="submit" class="btn btn-primary rounded-0">Add To Cart</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--new product area end-->


                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="home_section_left_sidebar">
                        <!--small product area start-->
                        <div class="small_product_area mb-50">
                            <div class="section_title section_title_two">
                                <h2>BEST SELLERS</h2>
                            </div>
                            <div class="small_product_wrapper small_product_six">
                                <div class="small_product_items">
                                    <div class="product_thumb">
                                        <a href="{{route('product-details',['id' => 48])}}l"><img src="{{asset('/')}}website/assets/img/s-product/samsung refrigator.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{route('product-details',['id' => 48])}}">Samsung Refrigerator</a></h3>
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
                                            <span class="current_price">38600 </span>
                                            <span class="old_price">45900</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="small_product_items">
                                    <div class="product_thumb">
                                        <a href="{{route('product-details',['id' => 49])}}"><img src="{{asset('/')}}website/assets/img/s-product/sonytv.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{route('product-details',['id' => 49])}}">Sony Android Television</a></h3>
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
                                            <span class="current_price">35699 </span>
                                            <span class="old_price">43000</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="small_product_items">
                                    <div class="product_thumb">
                                        <a href="{{route('product-details',['id' => 45])}}"><img src="{{asset('/')}}website/assets/img/s-product/train baby kids.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{route('product-details',['id' => 45])}}">Train Baby Kids</a></h3>
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
                                            <span class="current_price">135</span>
                                            <span class="old_price">320</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="small_product_items">
                                    <div class="product_thumb">
                                        <a href="{{route('product-details',['id' => 44])}}"><img src="{{asset('/')}}website/assets/img/s-product/toy car.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{route('product-details',['id' => 44])}}">Drift Remote Control Car</a></h3>
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
                                            <span class="current_price">1005</span>
                                            <span class="old_price">1117</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="small_product_items">
                                    <div class="product_thumb">
                                        <a href="{{route('product-details',['id' => 24])}}"><img src="{{asset('/')}}website/assets/img/s-product/dressing table.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{route('product-details',['id' => 24])}}">Dressing Table</a></h3>
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
                                            <span class="current_price">6690 </span>
                                            <span class="old_price">15500</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="small_product_items">
                                    <div class="product_thumb">
                                        <a href="{{route('product-details',['id' => 21])}}"><img src="{{asset('/')}}website/assets/img/s-product/almirah.jpg" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{route('product-details',['id' => 21])}}">Almirah</a></h3>
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
                                            <span class="current_price">4600</span>
                                            <span class="old_price">11600</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--small product area end-->

                        <!--banner area start-->
                        <div class="single_banner mb-50">
                            <div class="banner_thumb">
                                <a href="shop.html"><img src="{{asset('/')}}website/assets/img/bg/banner22.jpg" alt=""></a>
                            </div>
                        </div>
                        <!--banner area end-->

                        <!--shipping area start-->
                        <div class="shipping_area_five shipping_six mb-50">
                            <div class="single_shipping_box">
                                <div class="shipping_box_icone">
                                    <i class="zmdi zmdi-local-shipping zmdi-hc-fw"></i>
                                </div>
                                <div class="shipping_box_content">
                                    <h3>Free Shipping</h3>
                                    <p>On Orders Over $99</p>
                                </div>
                            </div>
                            <div class="single_shipping_box">
                                <div class="shipping_box_icone">
                                    <i class="zmdi zmdi-replay-5"></i>
                                </div>
                                <div class="shipping_box_content">
                                    <h3>30 – Day Returns</h3>
                                    <p>Moneyback Guarantee</p>
                                </div>
                            </div>

                            <div class="single_shipping_box">
                                <div class="shipping_box_icone">
                                    <i class="zmdi zmdi-phone-in-talk"></i>
                                </div>
                                <div class="shipping_box_content">
                                    <h3>24/7 Support Online</h3>
                                    <p>Consultations</p>
                                </div>
                            </div>
                            <div class="single_shipping_box">
                                <div class="shipping_box_icone">
                                    <i class="zmdi zmdi-run"></i>
                                </div>
                                <div class="shipping_box_content">
                                    <h3>99% Customer</h3>
                                    <p>Feedbacks</p>
                                </div>
                            </div>

                        </div>
                        <!--shipping area end-->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--home section five end-->

    <!--brand newsletter area start-->
    <div class="newsletter_six_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
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
