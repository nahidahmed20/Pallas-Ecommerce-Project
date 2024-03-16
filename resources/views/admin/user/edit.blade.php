
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Edit User</a></li>
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
                                <h5 class="card-title">Edit User Form</h5>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="input-types-preview">
                                        <div class="row">
                                            <div class="col-lg-12">

                                                <form class="form-hoizontal" action="{{route('user.update',$user->id)}}" method="post" enctype="multipart/form-data">
                                                    @method('PUT')
                                                    @csrf
                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">User Name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" value="{{$user->name}}" name="name" id="userName" class="form-control" placeholder="Enter User Name">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">User Email</label>
                                                        <div class="col-md-9">
                                                            <input type="email" value="{{$user->email}}"  name="email" id="userEmail" class="form-control" placeholder="Enter User Email">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">User Mobile</label>
                                                        <div class="col-md-9">
                                                            <input type="number" value="{{$user->mobile}}"  name="mobile" id="userMobile" class="form-control" placeholder="Enter User Mobile">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">User Password</label>
                                                        <div class="col-md-9">
                                                            <input type="password" name="password" id="userMobile" class="form-control" placeholder="Enter User Password">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">User Image</label>
                                                        <div class="col-md-9">
                                                            <input type="file" name="profile_photo_path" id="categoryName" class="form-control" >
                                                            <img src="{{asset($user->profile_photo_path)}}" alt="" height="80" width="60">
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Update User Info</button>
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




