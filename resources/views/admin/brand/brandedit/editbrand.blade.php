@extends('admin.master')

@section('body')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Brand Page</h1>
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
                        <h3 class="card-title">Edit Brand</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {{ Form::open(['url' => 'brand/'.$brand->id,'enctype'=>'multipart/form-data']) }}
                    {{Form::token()}}
                    @METHOD('put')
                    <div class="card-body">
                        <div class="form-group row">
                            {{Form::label('Brand Name','',['class'=>'col-form-label col-md-3'])}}
                            <div class="col-md-9">
                                {{Form::text('brand_name',$brand->brand_name,['class'=>'form-control','placeholder'=>'Enter Brand Name'])}}
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('Brand Description','',['class'=>'col-form-label col-md-3'])}}
                            <div class="col-md-9">
                                {{Form::text('brand_desc',$brand->brand_desc,['class'=>'form-control','placeholder'=>'Enter Brand Description'])}}
                                {{Form::hidden('id',$brand->id,['class'=>'form-control'])}}
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('Brand Image','',['class'=>'col-form-label col-md-3'])}}
                            <div class="col-md-9">
                                {{Form::file('brand_image',['class'=>'form-control-file'])}}
                                <img src="{{asset($brand->brand_image)}}" width="200">
                            </div>

                        </div>
                        <div class="form-group row">
                            {{Form::label('Publication Status','',['class'=>'col-form-label col-md-3'])}}
                            <div class="col-md-9">
                                {{Form::select('status',[''=>'--Select Status--','1'=>'Published','0'=>'Unpublished'],$brand->status==1?'1':'0',['class'=>'form-control'])}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-3 col-md-9">
                                {{Form::submit('Update Brand',['class'=>'btn btn-primary'])}}
                            </div>
                        </div>
                    </div>
                    {{ Form::close() }}

                </div>
            </div>

            <!-- /.card -->

        </section>
        <!-- /.content -->
@endsection

