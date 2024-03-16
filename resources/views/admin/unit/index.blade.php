
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Unit</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Manage Unit</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Unit Module</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <p class="text-success">{{session('message')}}</p>
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="basic-datatable-preview">
                                        <table id="basic-datatable" class="table table-striped table-bordered  w-100">
                                            <thead>
                                            <tr>
                                                <th class="text-center">SL NO</th>
                                                <th class="text-center"> Name</th>
                                                <th class="text-center"> Code</th>
                                                <th class="text-center">Description</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                            </thead>
                                            @foreach($units as $unit)
                                                <tbody>
                                                <tr>
                                                    <td class="text-center">{{$loop->iteration}}</td>
                                                    <td class="text-center">{{$unit->name}}</td>
                                                    <td class="text-center">{{$unit->code}}</td>
                                                    <td class="text-center">{{$unit->description}}</td>
                                                    <td class="text-center">{{$unit->status}}</td>
                                                    <td class="text-center">
                                                        <a href="{{route('unit.edit',$unit->id)}}" class="btn btn-success float-md-start">
                                                            <i class="uil uil-edit"></i>
                                                        </a>

                                                        <form action="{{route('unit.destroy',$unit->id)}}" method="post" class="float-md-end">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button
                                                                type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete..')">
                                                                <i class="uil uil-trash"></i>
                                                            </button>
                                                        </form>

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


