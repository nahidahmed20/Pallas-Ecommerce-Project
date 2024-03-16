
@extends('admin.master')

@section('body')



    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Admin Order</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Order Detail</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Admin Order Module</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Order Detail Info</h4>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th>Order ID</th>
                                        <td>{{$order->id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Order Date</th>
                                        <td>{{$order->order_date}}</td>
                                    </tr>
                                    <tr>
                                        <th>Order Status</th>
                                        <td>{{$order->order_status}}</td>
                                    </tr>
                                    <tr>
                                        <th>Order Total</th>
                                        <td>{{$order->order_total}}</td>
                                    </tr>
                                    <tr>
                                        <th>Tax Amount</th>
                                        <td>{{$order->tax_total}}</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping Total</th>
                                        <td>{{$order->shipping_total}}</td>
                                    </tr>
                                    <tr>
                                        <th>Customer Name</th>
                                        <td>{{isset($order->customer->first_name) ? $order->customer->first_name.' '.$order->customer->last_name : ''}}</td>
                                    </tr>
                                    <tr>
                                        <th>Customer Mobile</th>
                                        <td>{{$order->customer->mobile}}</td>
                                    </tr>
                                    <tr>
                                        <th>Delivery Address</th>
                                        <td>{{$order->delivery_address}}</td>
                                    </tr>
                                    <tr>
                                        <th>Delivery Status</th>
                                        <td>{{$order->delivery_status}}</td>
                                    </tr>
                                    <tr>
                                        <th>Payment Method</th>
                                        <td>{{$order->payment_method}}</td>
                                    </tr>
                                    <tr>
                                        <th>Payment Amount</th>
                                        <td>{{$order->payment_amount}}</td>
                                    </tr>
                                    <tr>
                                        <th>Payment Date</th>
                                        <td>{{$order->payment_date}}</td>
                                    </tr>
                                    <tr>
                                        <th>Payment Status</th>
                                        <td>{{$order->payment_status}}</td>
                                    </tr>
                                    <tr>
                                        <th>Transaction ID</th>
                                        <td>{{$order->transaction_id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Currency</th>
                                        <td>{{$order->currency}}</td>
                                    </tr>

                                </table>
                            </div>
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <h3 class="card-title">Order Product Information</h3>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="basic-datatable-preview">
                                            <table id="basic-datatable" class="table table-striped table-bordered dt-responsive nowrap w-100">
                                                <thead>
                                                <tr>
                                                    <th class="text-center">SL NO</th>
                                                    <th class="text-center">Product Name</th>
                                                    <th class="text-center">Product Price</th>
                                                    <th class="text-center">Product Quantity</th>
                                                    <th class="text-center">Total Price</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                @foreach($order->orderDetails as $orderDetail)
                                                    <tr>
                                                        <td class="text-center">{{$loop->iteration}}</td>
                                                        <td class="text-center">{{$orderDetail->product_name}}</td>
                                                        <td class="text-center">{{$orderDetail->product_price}}</td>
                                                        <td class="text-center">{{$orderDetail->product_quantity}}</td>
                                                        <td class="text-center">{{$orderDetail->product_quantity*$orderDetail->product_price}}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div> <!-- end preview-->
                                    </div> <!-- end tab-content-->
                                </div> <!-- end card body-->
                            </div>
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div> <!-- end row-->

            </div> <!-- container -->

        </div> <!-- content -->
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


@endsection



