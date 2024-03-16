
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Order</a></li>
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
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Order Edit Form</h3>
                            </div>
                            <div class="card-body">
                                @if (session('message'))
                                    <div class="alert alert-success text-success" id="aleart">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                <div class="table-responsive">
                                    <form action="{{route('admin-order.update',['id' => $order->id])}}" method="POST">
                                        @csrf
                                        <div class="row mb-4">
                                            <label class="col-md-3">Customer Info</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" value="{{isset($order->customer->first_name) ? $order->customer->first_name.' '.$order->customer->last_name : ''}}" readonly>
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <label class="col-md-3">Order Total</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="order_total" value="{{$order->order_total}}" readonly>
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <label class="col-md-3">Delivery Address</label>
                                            <div class="col-md-9">
                                                <textarea name="delivery_address" type="text" class="form-control" >{{$order->delivery_address}}</textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <label class="col-md-3">Select Courier</label>
                                            <div class="col-md-9">
                                                <select name="courier_id" class="form-control">
                                                    <option value="1">--Select Courier--</option>
                                                    <option value="2">SA Paribahan</option>
                                                    <option value="3">Sundarban Courier Service</option>
                                                    <option value="4">RedX</option>
                                                    <option value="5">Karatoa Courier Service</option>
                                                    <option value="6">Janani Express Parcel Service</option>
                                                    <option value="7">Sheba Delivery.</option>
                                                    <option value="8">Delivery Tiger.</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <label class="col-md-3">Order Status</label>
                                            <div class="col-md-9">
                                                <select name="order_status" class="form-control">
                                                    <option value="">--Select Order Status--</option>
                                                    <option value="Pending" @selected($order->order_status == 'Pending')>Pending</option>
                                                    <option value="Processing" @selected($order->order_status == 'Processing')>Processing</option>
                                                    <option value="Complete" @selected($order->order_status == 'Complete')>Complete</option>
                                                    <option value="Cancel" @selected($order->order_status == 'Cancel')>Cancel</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <label class="col-md-3"></label>
                                            <div class="col-md-9">
                                                <input type="submit" class="btn btn-success" value="Update Order Status">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- end card body-->
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



