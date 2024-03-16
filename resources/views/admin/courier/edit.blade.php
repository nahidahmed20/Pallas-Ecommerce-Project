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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Courier</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Add Courier</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Courier Module</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-10 mx-auto">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h5 class="card-title">Add Courier Form</h5>
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

                                            <form class="form-hoizontal" action="{{route('courier.update', $courier->id)}}" method="post" enctype="multipart/form-data">
                                                @method('PUT')
                                                @csrf
                                                <div class="row mb-4">
                                                    <label  class="col-md-3 form-label">Courier Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" value="{{$courier->name}}" name="name" id="courierName" class="form-control" placeholder="Enter Courier Name">
                                                    </div>
                                                </div>

                                                <div class="row mb-4">
                                                    <label  class="col-md-3 form-label">Courier Email</label>
                                                    <div class="col-md-9">
                                                        <input type="email" value="{{$courier->email}}"  name="email" id="courierEmail" class="form-control" placeholder="Enter Courier Email">
                                                    </div>
                                                </div>

                                                <div class="row mb-4">
                                                    <label  class="col-md-3 form-label">Courier Mobile</label>
                                                    <div class="col-md-9">
                                                        <input type="number" value="{{$courier->mobile}}"  name="mobile" id="courierMobile" class="form-control" placeholder="Enter Courier Mobile">
                                                    </div>
                                                </div>

                                                <div class="row mb-4">
                                                    <label  class="col-md-3 form-label">Courier Cost</label>
                                                    <div class="col-md-9">
                                                        <input type="number" value="{{$courier->cost}}"  name="cost" id="courierMobile" class="form-control" placeholder="Enter Courier Cost">
                                                    </div>
                                                </div>

                                                <div class="row mb-4">
                                                    <label  class="col-md-3 form-label">Courier Address</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control" value="{{$courier->address}}"  id="courierAddress" name="address" placeholder="Courier Address">
                                                    </div>
                                                </div>

                                                <button class="btn btn-primary" type="submit">Create Update Courier</button>
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

