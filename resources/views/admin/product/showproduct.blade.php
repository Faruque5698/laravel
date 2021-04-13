@extends('admin.master')

@section('body')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Product Details</h1>
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

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>{{Session::get('message')}}</strong>
            </div>

    @endif
    <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Product Name</th>
                            <td>{{$product->pro_name}}</td>
                        </tr>
                        <tr>
                            <th>Product Category</th>
                            <td>{{$product->categories->cat_name}}</td>
                        </tr>
                        <tr>
                            <th>Product Brand</th>
                            <td>{{$product->brands->brand_name}}</td>
                        </tr>
                        <tr>
                            <th>Product Short Description</th>
                            <td>{{$product->pro_short_desc}}</td>
                        </tr>
                        <tr>
                            <th>Product Long Description</th>
                            <td>{!! $product->pro_long_desc !!}</td>
                        </tr>
                        <tr>
                            <th>Product Price</th>
                            <td>{{$product->pro_price}}</td>
                        </tr>
                        <tr>
                            <th>Product Discount Price</th>
                            <td>{{$product->pro_discount}}</td>
                        </tr>
                        <tr>
                            <th>Product Quantity</th>
                            <td>{{$product->pro_qty}}</td>
                        </tr>
                        <tr>
                            <th>Product Image</th>
                            <td><img src="{{asset($product->pro_image)}}" alt=" " width="400"></td>
                        </tr>
                        <tr>
                            <th>Gallery Image</th>
                            <td>
                            @foreach($product->productGallery as $gallery)
                                    <img src="{{asset($gallery->pro_gallery)}}" alt=" " width="100">
                            @endforeach
                            </td>
                        </tr>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>

@endsection
