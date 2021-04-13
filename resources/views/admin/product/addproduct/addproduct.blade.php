@extends('admin.master')

@section('body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Product Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        @if(Session::get('message'))
            <div class="offset-2 col-md-8">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>{{Session::get('message')}}</strong>
                </div>
            </div>
    @endif

    <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="offset-2 col-md-8">


                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Product</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{url('product')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label >Category Name</label>
                                <select class="form-control" name="cat_id">
                                    <option>--Select Category--</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->cat_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Brand Name</label>
                                <select class="form-control" name="brand_id">
                                    <option>--Select Brand--</option>
                                    @foreach($brands as $brand)
                                    <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" class="form-control" name="pro_name" placeholder="Product Name">
                            </div>
                            <div class="form-group">
                                <label>Product Short Description</label>
                                <input type="text" class="form-control" name="pro_short_desc" placeholder="Product Short description">
                            </div>
                            <div class="form-group">
                                <label>Product Long Description</label>
                                <textarea id="summary-ckeditor" type="text" class="form-control" name="pro_long_desc" placeholder="Product long description"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Product Price</label>
                                <input type="text" class="form-control" name="pro_price" placeholder="Product Price">
                            </div>
                            <div class="form-group">
                                <label>Product Discount Price</label>
                                <input type="text" class="form-control" name="pro_discount" placeholder="Product Price">
                            </div>
                            <div class="form-group">
                                <label>Product Quantity</label>
                                <input type="text" class="form-control" name="pro_qty" placeholder="Product Price">
                            </div>
                            <div class="form-group">
                                <label>Product Image</label>
                                <input type="file" class="form-control" name="pro_image">
                            </div>
                            <div class="form-group">
                                <label>Product Gallery Image</label>
                                <input type="file" class="form-control" name="pro_gallery[]" multiple>
                            </div>
                            <div class="form-group">
                                <label>Publication Status</label>
                                <select class="form-control" name="status">
                                    <option>--Select Status--</option>
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>

                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>
            </div>

            <!-- /.card -->

        </section>
        <!-- /.content -->
@endsection

