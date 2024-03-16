
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Manage Order</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Admin Order Module</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">
                                    @if (session('message'))
                                        <div class="alert alert-success text-success" id="aleart">
                                            {{ session('message') }}
                                        </div>
                                    @endif
                                    <div class="tab-pane show active" id="basic-datatable-preview">
                                        <table id="basic-datatable" class="table table-striped table-bordered dt-responsive nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th class="text-center">SL NO</th>
                                                <th class="text-center">Order ID</th>
                                                <th class="text-center">Order Total</th>
                                                <th class="text-center">Customer Info</th>
                                                <th class="text-center">Customer Mobile</th>
                                                <th class="text-center">Order Date</th>
                                                <th class="text-center">Order Status</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                            </thead>


                                            <tbody>
                                            @foreach($orders as $order)
                                                <tr>
                                                    <td class="text-center">{{$loop->iteration}}</td>
                                                    <td class="text-center">{{$order->id}}</td>
                                                    <td class="text-center">{{$order->order_total}}</td>
                                                    <td class="text-center">{{isset($order->customer->first_name) ? $order->customer->first_name : ''}}</td>
                                                    <td class="text-center">{{$order->customer->mobile}}</td>
                                                    <td class="text-center">{{$order->order_date}}</td>
                                                    <td class="text-center">{{$order->order_status}}</td>
                                                    <td class="text-center">
                                                        <a href="{{route('admin-order.detail',['id' => $order->id])}}" class="btn btn-info" title="View Order Detail">
                                                            <i class="mdi mdi-application-edit-outline"></i>
                                                        </a>
                                                        <a href="{{route('admin-order.edit',['id' => $order->id])}}" class="btn btn-success {{$order->order_status == 'Complete' ? 'disabled' : ''}}"  title="Edit Order">
                                                            <i class="uil uil-edit"></i>
                                                        </a>
                                                        <a href="{{route('admin-order.show-invoice',['id' => $order->id])}}" class="btn btn-primary" title="Show Order Invoice">
                                                            <i class="uil uil-bookmark"></i>
                                                        </a>
                                                        <a href="{{route('admin-order.download-invoice',['id' => $order->id])}}" class="btn btn-warning" title="Show Download Invoice" target="_blank">
                                                            <i class="uil uil-download-alt"></i>
                                                        </a>
                                                        <a href="{{route('admin-order.delete',['id' =>$order->id])}}" class="btn btn-danger {{$order->order_status == 'Cancel' ? '' : 'disabled'}}" onclick="return confirm('Are you sure to delete..')">
                                                            <i class="uil uil-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div> <!-- end preview-->
                                </div> <!-- end tab-content-->
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


