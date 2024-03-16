@extends('website.master')

@section('body')


    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>Checkout Order</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->



    <!--Checkout page section-->
    <div class="Checkout_section mt-60">
        <div class="container">
            <div class="checkout_form">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <form action="{{route('confirm.order')}}" method="POST" >
                            @csrf
                            <h3 class="me-9">Order Checkout Information</h3>
                                <div class="row ms-8">
                                    <div class="col-lg-6 mb-20 ">
                                        <label style="font-size: 18px" class="mb-10">First Name <span class="text-danger">*</span></label>
                                        @if(isset($customer->first_name))
                                        <input type="text" class="form-control" value="{{$customer->first_name}}" placeholder="First Name" name="first_name" readonly required>
                                        @else
                                            <input type="text" class="form-control" placeholder="First Name" name="first_name" required>
                                        @endif
                                    </div>
                                    <div class="col-lg-6 mb-20">
                                        <label style="font-size: 18px" class="mb-10">Last Name  <span class="text-danger">*</span></label>
                                        @if(isset($customer->last_name))
                                        <input type="text" class="form-control" value="{{$customer->last_name}}" placeholder="Last Name" name="last_name" readonly required>
                                        @else
                                        <input type="text" class="form-control" placeholder="Last Name" name="last_name" required>
                                        @endif
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label style="font-size: 18px" class="mb-10">Email Address <span class="text-danger">*</span></label>
                                        @if(isset($customer->email))
                                        <input type="email" class="form-control" value="{{$customer->email}}" placeholder="Email Address" name="email" readonly required>
                                        @else
                                        <input type="email" class="form-control" placeholder="Email Address" name="email" required>
                                        @endif
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label style="font-size: 18px" class="mb-10">Mobile <span class="text-danger">*</span></label>
                                        @if(isset($customer->mobile))
                                        <input type="number" class="form-control" value="{{$customer->mobile}}" placeholder="Mobile" name="mobile" readonly required>
                                        @else
                                        <input type="number" class="form-control" placeholder="Mobile" name="mobile" required>
                                        @endif
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label style="font-size: 18px" class="mb-10">Delivery Address  <span class="text-danger">*</span></label>
                                        <div class="form-input form" >
                                            <textarea placeholder="Delivery Address" type="text" name="delivery_address" class="form-control" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-12 mb-20">
                                        <label style="font-size: 18px" class="mb-4">Payment Method<span class="text-danger">*</span></label>
                                        <div class="panel-default" >
                                            <label style="font-size: 18px" class="me-5"><input  type="radio" value="Cash" name="payment_method" checked> Cash On Delivery</label>
                                            <label style="font-size: 18px" ><input  type="radio" value="Online" name="payment_method"> Online</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="order_button">
                                    <button  type="submit">Confirm Order</button>
                                </div>
                        </form>
                    </div>

                    <div class="col-lg-6 col-md-6">
                            <h3>Your order</h3>
                            <div class="order_table table-responsive">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($sum = 0)
                                    @foreach(Cart::content() as $cartItem)
                                    <tr>
                                        <td> {{$cartItem->name}}</td>
                                        <td>Tk. {{$cartItem->subtotal}}</td>
                                    </tr>
                                        @php($sum = $sum + $cartItem->subtotal)
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Cart Subtotal</th>
                                        <td>{{$sum}}</td>
                                    </tr>
                                    <tr>
                                        <th>Tax Total</th>
                                        <td><strong>{{$tax = $sum*0.15}}</strong></td>
                                    </tr>
                                    <tr>
                                        <th>Shipping </th>
                                        <td><strong>{{$shipping = 100}}</strong></td>
                                    </tr>
                                    <tr class="order_total">
                                        <th>Total Payable</th>
                                        <td><strong>{{$order_total = $sum+$tax+$shipping}}</strong></td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        <?php
                            Session::put('order_total',$order_total);
                            Session::put('tax_total',$tax);
                            Session::put('shipping_total',$shipping);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Checkout page section end-->


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
