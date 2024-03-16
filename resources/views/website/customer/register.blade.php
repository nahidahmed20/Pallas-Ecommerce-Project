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
                                <h3 class="card-title text-center">Register Form</h3>
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
                                                <form action="{{route('customer-register')}}" method="POST">
                                                 @csrf
                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">First Name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="first_name" id="firstName" class="form-control rounded-0" placeholder="First Name" required>
                                                            <span class="text-danger" id="firstNameError"></span>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">Last Name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="last_name" id="lastName" class="form-control rounded-0" placeholder="Last Name" required>
                                                            <span class="text-danger" id="lastNameError"></span>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">Email Name</label>
                                                        <div class="col-md-9">
                                                            <input type="email" name="email" id="email" class="form-control rounded-0" placeholder="Email Address" required>
                                                            <span class="text-danger" id="emailError"></span>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">Mobile</label>
                                                        <div class="col-md-9">
                                                            <input type="number" name="mobile" id="mobile" class="form-control rounded-0" placeholder="Mobile Number" required>
                                                            <span class="text-danger" id="mobileError"></span>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">Password</label>
                                                        <div class="col-md-9">
                                                            <input type="password" name="password" id="password" class="form-control rounded-0" placeholder="Password" required>
                                                            <label><input type="checkbox" id="showHidePassword"> Show</label>
                                                            <span class="text-danger" id="passwordError"></span>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">Confirm Password</label>
                                                        <div class="col-md-9">
                                                            <input type="password" name="confirm_password" id="confirmPassword" class="form-control rounded-0" placeholder="Confirm Password" required>
                                                            <span class="text-danger" id="confirmPasswordError"></span>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label"></label>
                                                        <div class="col-md-9">
                                                            <input type="submit"  class="btn btn-primary rounded-0" value="Register" >
                                                        </div>
                                                    </div>

                                                </form>
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

