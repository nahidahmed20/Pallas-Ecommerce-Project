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
                            <li>Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shopping cart area start -->
    <div class="shopping_cart_area mt-60">
        <div class="container">
            <p class="alert alert-info">{{ session('message') }}</p>
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <form action="{{route('cart.update')}}" method="post">
                                @csrf
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                    <tr>
                                        <th class="product_thumb">Image</th>
                                        <th class="product_name">Product Name</th>
                                        <th class="product_quantity">Quantity</th>
                                        <th class="product_price">Unit Price</th>
                                        <th class="product-total">Total</th>
                                        <th class="product_remove">Remove</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($sum=0)
                                    @foreach($cart_products as $cart_product)
                                        <tr>
                                            <td class="product_thumb"><a href="#"><img src="{{asset($cart_product->options->image)}}" alt=""></a></td>
                                            <td class="product_name"><a href="#">{{$cart_product->name}}</a></td>
                                            <td class="product_quantity">

                                                    <label>Quantity</label>
                                                    <input min="1" name="qty" max="100" value="{{$cart_product->qty}}" type="number">
                                                    <input name="rowId" value="{{$cart_product->rowId}}" type="hidden">


                                            </td>
                                            <td class="product-price">{{$cart_product->price}}</td>
                                            <td class="product_total">{{$cart_product->subtotal}}</td>
                                            <td class="product_remove"><a href="{{route('cart.remove',['rowId' => $cart_product->rowId])}}" onclick="return confirm('Are you sure to delete this item...')"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                        @php($sum = $sum + $cart_product->subtotal)
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart_submit">
                                <button type="submit">update cart</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--coupon code area start-->
                <div class="coupon_area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code left">
                                <h3>Coupon</h3>
                                <div class="coupon_inner">
                                    <p>Enter your coupon code if you have one.</p>
                                    <input placeholder="Coupon code" type="text">
                                    <button type="submit">Apply coupon</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code right">
                                <h3>Cart Totals</h3>
                                <div class="coupon_inner">
                                    <div class="cart_subtotal">
                                        <p>Subtotal</p>
                                        <p class="cart_amount">{{$sum}}</p>
                                    </div>
                                    <div class="cart_subtotal">
                                        <p>Tax Amount</p>
                                        <p class="cart_amount">{{$tax = $sum*0.15}}</p>
                                    </div>
                                    <div class="cart_subtotal ">
                                        <p>Shipping</p>
                                        <p class="cart_amount">{{$shipping = 100}}</p>
                                    </div>
                                    <a href="#">Calculate shipping</a>

                                    <div class="cart_subtotal">
                                        <p>Total Payable</p>
                                        <p class="cart_amount">{{$sum+$tax+$shipping}}</p>
                                    </div>
                                    <div class="checkout_btn">
                                        <a href="{{route('checkout')}}">Proceed to Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->
        </div>
    </div>
    <!--shopping cart area end -->

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
