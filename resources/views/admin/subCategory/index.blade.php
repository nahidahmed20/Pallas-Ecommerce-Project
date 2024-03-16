
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Sub Category</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Manage Sub Category</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Sub Category Module</h4>
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
                                                <th>SL NO</th>
                                                <th>Category Name</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            @foreach($sub_categories as $sub_category)
                                            <tbody>
                                            <tr>
                                                <td class="text-center">{{$loop->iteration}}</td>
                                                <td class="text-center">{{$sub_category->category->name}}</td>
                                                <td class="text-center">{{$sub_category->name}}</td>
                                                <td class="text-center">{{$sub_category->description}}</td>
                                                <td class="text-center"><img src="{{asset($sub_category->image)}}" alt="" height="60" width="50"></td>
                                                <td class="text-center">{{$sub_category->status}}</td>
                                                <td class="text-center">
                                                    <a href="{{route('sub-category.edit',['id' => $sub_category->id])}}" class="btn btn-success">
                                                        <i class="uil uil-edit"></i>
                                                    </a>
                                                    <a href="{{route('sub-category.delete',['id' => $sub_category->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete..')">
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

