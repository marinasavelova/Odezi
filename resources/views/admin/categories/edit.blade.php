@extends('layout')

@section('breadcrumbs')

    <div class="page-head">
        <h2>Edit category</h2>
        <ol class="breadcrumb">
          <li><a href="{{url('/')}}">Dashboard</a></li>
          <li><a href="{{action('CategoryController@index')}}">Category</a></li>
          <li class="active">Edit category</li>
        </ol>
    </div>
    
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="block-flat">
            <div class="header">              
              <h3>Edit category</h3>
            </div>
            <div class="content">
                @if ($errors->all())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
              <form class="form-horizontal" role="form" action="{{ route('admin.categories.update', $category->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                      <input type="name" class="form-control" id="name" name="name" value="{{$category->name}}" placeholder="insert category name">
                    </div>
                </div>
                <?php
                $categories = App\Category::where('parent_id', null)->lists('name','id');
                ?>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Category</label>
                    <div class="col-sm-10">
                        {!! Form::select('parent_id', [null=>'Parent'] + $categories, $category->parent_id, array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary">Save</button>
                  <a class="btn btn-default" href="{{ route('admin.categories.index') }}">Cancel</a>
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
@endsection