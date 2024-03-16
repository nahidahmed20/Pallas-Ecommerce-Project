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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Brand</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Manage Brand</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Brand Module</h4>
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
                                                <th class="text-center">Description</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                            </thead>

                                            @foreach($brands as $brand)
                                                <tbody>
                                                <tr>
                                                    <td class="text-center">{{$loop->iteration}}</td>
                                                    <td class="text-center">{{$brand->name}}</td>
                                                    <td class="text-center">{{$brand->description}}</td>
                                                    <td class="text-center">{{$brand->status}}</td>
                                                    <td class="text-center">
                                                        <a href="{{route('brand.edit',['id' => $brand->id])}}" class="btn btn-success">
                                                            <i class="uil uil-edit"></i>
                                                        </a>
                                                        <a href="{{route('brand.delete',['id' => $brand->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete..')">
                                                            <i class="uil uil-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            @endforeach
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
