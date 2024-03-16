
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Courier</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Manage Courier</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Courier Module</h4>
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
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Mobile</th>
                                                <th class="text-center">Address</th>
                                                <th class="text-center">Cost</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                            </thead>


                                            <tbody>
                                            @foreach($couriers as $courier)
                                                <tr>
                                                    <td class="text-center">{{$loop->iteration}}</td>
                                                    <td class="text-center">{{$courier->name}}</td>
                                                    <td class="text-center">{{$courier->email}}</td>
                                                    <td class="text-center">{{$courier->mobile}}</td>
                                                    <td class="text-center">{{$courier->address}}</td>
                                                    <td class="text-center">{{$courier->cost}}</td>
                                                    <td class="text-center">
                                                        <a href="{{route('courier.edit',$courier->id)}}" class="btn btn-success">
                                                            <i class="uil uil-edit"></i>
                                                        </a>
                                                        <form action="{{route('courier.destroy',$courier->id)}}" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete..')"><i class="uil uil-trash"></i></button>
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

