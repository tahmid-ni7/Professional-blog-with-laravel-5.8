@extends('layouts.admin.main')
@section('title')
    My Blog | Create new post
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Blogs
                <small>Create new post</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active"><a href="{{url('home')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="{{route('blogs.index')}}">Blogs</a></li>
                <li><a href="#">Add new</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body ">
                          {!! Form::open(['method'=>'POST', 'action'=>'Backend\AdminBlogController@store']) !!}
                            <div class="form-group {{$errors->has('title') ? 'has-error': ''}}">
                                  {!! Form::label('title') !!}
                                  {!! Form::text('title', null, ['class'=>'form-control']) !!}

                                @if($errors->has('title'))
                                    <span class="help-block">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                            <div class="form-group {{$errors->has('slug') ? 'has-error': ''}}">
                                {!! Form::label('slug') !!}
                                {!! Form::text('slug', null, ['class'=>'form-control']) !!}

                                @if($errors->has('slug'))
                                    <span class="help-block">{{ $errors->first('slug') }}</span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('excerpt') ? 'has-error': ''}}">
                                {!! Form::label('excerpt') !!}
                                {!! Form::textarea('excerpt', null, ['class'=>'form-control', 'rows'=>5]) !!}

                                @if($errors->has('excerpt'))
                                    <span class="help-block">{{ $errors->first('excerpt') }}</span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                                {!! Form::label('body') !!}
                                {!! Form::textarea('body', null, ['class'=>'form-control']) !!}

                                @if($errors->has('body'))
                                    <span class="help-block">{{ $errors->first('body') }}</span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('published_at') ? 'has-error' : '' }}">
                                {!! Form::label('published_at', 'Publish Date') !!}
                                {!! Form::text('published_at', null, ['class'=>'form-control', 'placeholder'=>'Y-m-d H:i:s']) !!}

                                @if($errors->has('published_at'))
                                    <span class="help-block">{{ $errors->first('published_at') }}</span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
                                {!! Form::label('categpry_id', 'Category') !!}
                                {!! Form::select('category_id', App\Category::pluck('title', 'id'), null, ['class'=>'form-control', 'placeholder'=>'Choose category']) !!}

                                @if($errors->has('category_id'))
                                    <span class="help-block">{{ $errors->first('category_id') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
                            </div>
                          {!! Form::close() !!}

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
@endsection
