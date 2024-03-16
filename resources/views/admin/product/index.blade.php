
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Product</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Manage Product</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Product Module</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="basic-datatable-preview">
                                        <table id="basic-datatable" class="table table-striped table-bordered dt-responsive nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th class="text-center">SL NO</th>
                                                <th class="text-center">Name</th>
                                                <th class="text-center">Code</th>
                                                <th class="text-center">Image</th>
                                                <th class="text-center">Stock</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                            </thead>


                                            <tbody>
                                            @foreach($products as $product)
                                                <tr>
                                                    <td class="text-center">{{$loop->iteration}}</td>
                                                    <td class="text-center">{{$product->name}}</td>
                                                    <td class="text-center">{{$product->code}}</td>
                                                    <td class="text-center"><img src="{{asset($product->image)}}" height="50" width="60" alt=""></td>
                                                    <td class="text-center">{{$product->stock_amount}}</td>
                                                    <td class="text-center">{{$product->status == 1 ? "Published" : 'Unpublished'}}</td>
                                                    <td class="text-center mx-auto">
                                                        <a href="{{route('product.show',$product->id)}}" class="btn btn-success ">
                                                            <i class="mdi mdi-application-edit-outline"></i>
                                                        </a>
                                                        <a href="{{route('product.edit',$product->id)}}" class="btn btn-success">
                                                            <i class="uil uil-edit"></i>
                                                        </a>

                                                        <form action="{{route('product.destroy',$product->id)}}" method="post" >
                                                            @method('DELETE')
                                                            @csrf
                                                            <button
                                                                type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete..')">
                                                                <i class="uil uil-trash"></i>
                                                            </button>
                                                        </form>
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


