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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Product</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Product</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Product Module</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-12 mx-auto">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h5 class="card-title">Add Product Form</h5>
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
                                                <form class="form-hoizontal" action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
                                                    @method('PUT')
                                                    @csrf
                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">Category Name</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control" name="category_id" id="" onchange="getSubCategoryByCategory(this.value)">
                                                                <option value="">--Select Category--</option>
                                                                @foreach($categories as $category)
                                                                    <option value="{{$category->id}}" @selected($category->id == $product->category_id)>{{$category->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">Sub Category Name</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control" name="sub_category_id" id="subCategoryId">
                                                                <option value="">--Select Sub Category--</option>
                                                                @foreach($sub_categories as $sub_category)
                                                                    <option value="{{$sub_category->id}}" @selected($sub_category->id == $product->sub_category_id)>{{$sub_category->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">Brand Name</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control" name="brand_id" id="">
                                                                <option value="">--Select Brand--</option>
                                                                @foreach($brands as $brand)
                                                                    <option value="{{$brand->id}}" @selected($brand->id == $product->brand_id)>{{$brand->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">Unit Name</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control" name="unit_id" id="">
                                                                <option value="">--Select Unit--</option>
                                                                @foreach($units as $unit)
                                                                    <option value="{{$unit->id}}" @selected($unit->id == $product->unit_id)>{{$unit->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">Product Name</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" value="{{$product->name}}" name="name" placeholder="Product Name">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">Product Code</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" value="{{$product->code}}" name="code" placeholder="Product Code">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label for="firstName1" class="col-md-3 form-label">Short Description</label>
                                                        <div class="col-md-9">
                                                            <textarea class="form-control" id="firstName1" placeholder="Product Short Description" type="text" name="short_description">{{$product->short_description}}</textarea>
                                                        </div>
                                                    </div>


                                                    <div class="row mb-4">
                                                        <label for="firstName1" class="col-md-3 form-label">Long Description</label>
                                                        <div class="col-md-9">
                                                            <textarea class="form-control" id="summernote" placeholder="Product Long Description" type="text" name="long_description">{{$product->long_description}}</textarea>
                                                        </div>
                                                    </div>


                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">Product Price</label>
                                                        <div class="col-md-9">
                                                            <div class="input-group">
                                                                <input type="number" name="regular_price" value="{{$product->regular_price}}" placeholder="Regular Price" class="form-control">
                                                                <input type="number" name="selling_price" value="{{$product->selling_price}}" placeholder="Selling Price" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">Stock Amount</label>
                                                        <div class="col-md-9">
                                                            <input type="number" class="form-control" value="{{$product->stock_amount}}" name="stock_amount" placeholder="Stock Amount">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">Product Image</label>
                                                        <div class="col-md-9">
                                                            <input type="file" name="image" id="categoryName" class="form-control" >
                                                            <img src="{{asset($product->image)}}" alt="" height="60" width="50">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">Product Other Image</label>
                                                        <div class="col-md-9">
                                                            <input type="file" name="other_image[]" id="categoryName" class="form-control" multiple>
                                                            @foreach($product->otherImages as $otherImage)
                                                                <img src="{{asset($otherImage->image)}}" alt="" height="60" width="50">
                                                            @endforeach
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <label  class="col-md-3 form-label">Product Status</label>
                                                        <div class="col-md-9">
                                                            <label><input type="radio" name="status" value="1" {{$product->status == 1 ? 'checked' : ''}} checked> Published</label>
                                                            <label><input type="radio" name="status" value="0" {{$product->status == 0 ? 'checked' : ''}}> Unpublished</label>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Update Product</button>
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

