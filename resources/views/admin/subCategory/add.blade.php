@extends('admin.master')

@section('body')



    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Add Sub Category</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Sub Category Module</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-10 mx-auto">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h5 class="card-title">Add Sub Category Form</h5>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="input-types-preview">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                @if (session('message'))
                                                    <div class="alert alert-success text-success" id="aleart">
                                                        {{ session('message') }}
                                                    </div>
                                                @endif
                                                <form class="form-hoizontal" action="{{route('sub-category.store')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">Category Name</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control" name="category_id" id="">
                                                                <option value="">--Select Category--</option>
                                                                @foreach($categories as $category)
                                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">Sub Category Name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="name"  id="categoryName1" class="form-control" placeholder="Enter Sub Category Name" required>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">Sub Category Description</label>
                                                        <div class="col-md-9">
                                                            <textarea class="form-control" id="example-textarea" name="description" placeholder="Sub Category Description" required></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">Sub Category Image</label>
                                                        <div class="col-md-9">
                                                            <input type="file" name="image" id="categoryName" class="form-control" required>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">Sub Category Status</label>
                                                        <div class="col-md-9">
                                                            <label><input type="radio" name="status" value="1" checked> Published</label>
                                                            <label><input type="radio" name="status" value="0"> Unpublished</label>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Create New SubCategory</button>
                                                </form>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row-->
                                    </div> <!-- end preview-->
                                </div> <!-- end tab-content-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div> <!-- container -->
        </div> <!-- content -->
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->





@endsection
