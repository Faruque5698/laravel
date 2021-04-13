@extends('admin.master')

@section('body')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Brand page</h1>
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
                <div class="card-header">
                    <h3 class="card-title">Categories</h3>
                    <a href="{{url('brand/create')}}" class="btn btn-primary float-right" ><i class="fas fa-plus-square"></i></a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Sl.</th>
                            <th>Brand Name</th>
                            <th>Brand Description</th>
                            <th>Brand Image</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i=1)
                        @foreach($brands as $brand)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$brand->brand_name}}</td>
                                <td>{{$brand->brand_desc}}</td>
                                <td><img src="{{asset($brand->brand_image)}}" alt="" width="100"></td>
                                <td>{{$brand->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                        <a href="{{url('brand',['id'=>$brand->id])}}" class="btn btn-sm btn-warning">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    <a href="{{url('brand/'.$brand->id.'/edit')}}" class="btn btn-sm btn-success">
                                        <i class="fas fa-edit"></i>
                                    </a>
{{--                                    <a href="{{url('brand/'.$brand->id)}}" class="btn btn-sm btn-danger"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('delete-form').submit();" >--}}
{{--                                        <i class="fas fa-trash"></i>--}}
{{--                                    </a>--}}
{{--                                        <form id="delete-form" action="{{url('brand/'.$brand->id)}}" method="POST" style="display: none;">--}}
{{--                                            @csrf--}}
{{--                                            @METHOD('delete')--}}
{{--                                        </form>--}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Sl.</th>
                            <th>Brand Name</th>
                            <th>Brand Description</th>
                            <th>Brand Image</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>

@endsection
