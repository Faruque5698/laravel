@extends('admin.master')

@section('body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Category Page</h1>
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
                    <h3 class="card-title">Add Category</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('save-category')}}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label >Category Name</label>
                            <input type="text" class="form-control @error('cat_name') is-invalid @enderror" name="cat_name" placeholder="Category Name">
                            @error('cat_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Category Description</label>
                            <input type="text" class="form-control" name="cat_desc" placeholder="Category Description">
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

