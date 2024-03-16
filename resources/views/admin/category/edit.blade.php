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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Category</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Category</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Category Module</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-10 mx-auto">
                        <div class="card">
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

                                                <form class="form-hoizontal" action="{{route('category.update',['id' => $category->id])}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">Category Name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="name" value="{{$category->name}}" id="categoryName" class="form-control" placeholder="Enter Category Name">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">Category Description</label>
                                                        <div class="col-md-9">
                                                            <textarea class="form-control" id="example-textarea" name="description" placeholder="Category Description">{{$category->description}}</textarea>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">Category Image</label>
                                                        <div class="col-md-9">
                                                            <input type="file" name="image" id="categoryName" class="form-control" >
                                                            <img src="{{asset($category->image)}}" alt="" height="60" width="50">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">Category Status</label>
                                                        <div class="col-md-9">
                                                            <label><input type="radio" name="status" value="1" {{$category->status == 1 ? 'checked' : ''}} checked> Published</label>
                                                            <label><input type="radio" name="status" value="0" {{$category->status == 0 ? 'checked' : ''}}> Unpublished</label>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Create Update Category</button>
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

