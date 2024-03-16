@extends('website.master')

@section('body')

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area mb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{route('home')}}">home</a></li>
                            <li>Customer Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shopping cart area start -->
    <div class="shopping_cart_area mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 ">
                    @include('website.customer.sidebar-menu')
                </div>
                <div class="col-lg-9">
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="mx-auto">SL NO</th>
                            <th class="mx-auto">Oder ID</th>
                            <th class="mx-auto">Oder Total</th>
                            <th class="mx-auto">Order Date</th>
                            <th class="mx-auto">Order Status</th>
                            <th class="mx-auto">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td class="mx-auto">{{$loop->iteration}}</td>
                            <td class="mx-auto">{{$order->id}}</td>
                            <td class="mx-auto">{{$order->total}}</td>
                            <td class="mx-auto">{{$order->date}}</td>
                            <td class="mx-auto">{{$order->status}}</td>
                            <td class="mx-auto">
                                <a href="">Details</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--shopping cart area end -->



@endsection
