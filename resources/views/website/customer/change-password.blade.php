@extends('website.master')

@section('body')

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area mb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{route('home')}}">home</a></li>
                            <li>Customer Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shopping cart area start -->
    <div class="shopping_cart_area mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    @include('website.customer.sidebar-menu')
                </div>
                <div class="col-lg-6 mx-auto">
                    @if (session('message'))
                        <div class="alert alert-success text-danger" id="aleart">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="card card-body bg-warning">
                        <form action="{{route('customer.update-password')}}" method="POST">
                            @csrf
                            <div class="row mb-4 ">
                                <label class="col-md-3">Current Password</label>
                                <div class="col-md-9">
                                    <input type="password" name="current_password" class="form-control" placeholder="Current Password">
                                </div>
                            </div>

                            <div class="row mb-4 ">
                                <label class="col-md-3">New Password</label>
                                <div class="col-md-9">
                                    <input type="password" name="new_password" class="form-control" placeholder="New Password">
                                </div>
                            </div>

                            <div class="row mb-4 ">
                                <label class="col-md-3">Confirm Password</label>
                                <div class="col-md-9">
                                    <input type="password" name="confirm_password" class="form-control" placeholder="Confirm New Password">
                                </div>
                            </div>

                            <div class="row mb-4 ">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" value="Update Password" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--shopping cart area end -->



@endsection

