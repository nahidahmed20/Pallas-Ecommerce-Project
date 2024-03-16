
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Category</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Manage Category</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Category Module</h4>
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
                                                <th class="text-center">Image</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                            </thead>


                                            <tbody>
                                            @foreach($categories as $category)
                                                <tr>
                                                    <td class="text-center">{{$loop->iteration}}</td>
                                                    <td class="text-center">{{$category->name}}</td>
                                                    <td class="text-center">{{$category->description}}</td>
                                                    <td class="text-center"><img src="{{asset($category->image)}}" height="50" width="60" alt=""></td>
                                                    <td class="text-center">{{$category->status}}</td>
                                                    <td class="text-center">
                                                        <a href="{{route('category.edit',['id' => $category->id])}}" class="btn btn-success">
                                                            <i class="uil uil-edit"></i>
                                                        </a>
                                                        <a href="{{route('category.delete',['id' =>$category->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete..')">
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

