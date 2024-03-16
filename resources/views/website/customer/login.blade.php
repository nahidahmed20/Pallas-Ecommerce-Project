@extends('website.master')

@section('body')

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                <!-- start page title -->
                <!-- end page title -->
                <!-- customer Register start -->
                <div class="row py-5">
                    <div class="col-7 mx-auto ">
                        <div class="card bg-warning rounded-0">
                            <div class="card-header border-bottom">
                                <h3 class="card-title text-center">Login Form</h3>
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
                                                    <form action="{{route('customer-login')}}" method="POST">
                                                    @csrf
                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">User Name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="user_name"  class="form-control rounded-0" placeholder="Enter Your Email or Phone Number" required>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">Passwords</label>
                                                        <div class="col-md-9">
                                                            <input type="password" name="password" id="password" class="form-control rounded-0" placeholder="Enter Password" required>
                                                            <label><input type="checkbox" id="showHidePassword"> Show</label>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label"></label>
                                                        <div class="col-md-9">
                                                            <input type="submit"  class="btn btn-primary rounded-0" value="Login" >
                                                        </div>
                                                    </div>

                                                </form>

                                                    <div class="login_submit">
                                                        <a class="text-primary" href="{{route('customer-register')}}">Register here</a>
                                                    </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
