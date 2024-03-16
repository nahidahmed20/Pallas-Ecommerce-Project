
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">User</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Add User</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">User Module</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h5 class="card-title">Add User Form</h5>
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

                                                <form class="form-hoizontal" action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">User Name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="name" id="userName" class="form-control" placeholder="Enter User Name" required>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">User Email</label>
                                                        <div class="col-md-9">
                                                            <input type="email" name="email" id="userEmail" class="form-control" placeholder="Enter User Email" required>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">User Mobile</label>
                                                        <div class="col-md-9">
                                                            <input type="number" name="mobile" id="userMobile" class="form-control" placeholder="Enter User Mobile" required>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">User Password</label>
                                                        <div class="col-md-9">
                                                            <input type="password" name="password" id="userMobile" class="form-control" placeholder="Enter User Password" required>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">User Image</label>
                                                        <div class="col-md-9">
                                                            <input type="file" name="profile_photo_path" id="categoryName" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Create New User</button>
                                                </form>

                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row-->
                                    </div> <!-- end preview-->
                                </div> <!-- end tab-content-->
                            </div> <!-- end card-body -->
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



