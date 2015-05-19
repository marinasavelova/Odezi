@extends('layout')

@section('breadcrumbs')

    <div class="page-head">
        <h2>Add payment option</h2>
        <ol class="breadcrumb">
          <li><a href="{{url('/')}}">Dashboard</a></li>
          <li><a href="{{action('PaymentOptionController@index')}}">Payment options</a></li>
          <li class="active">Add payment option</li>
        </ol>
    </div>
    
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="block-flat">
            <div class="header">              
              <h3>Add payment option</h3>
            </div>
            <div class="content">
               @if ($errors->all())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
              <form class="form-horizontal group-border-dashed" role="form" action="{{ action('PaymentOptionController@postStore') /*route('admin.countries.create')*/ }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-6">
                      <input type="name" class="form-control" id="name" name="name" placeholder="insert payment option name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Logo</label>
                    <div class="col-sm-6">
                      <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                        <div>
                          <span class="btn btn-primary btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="img"></span>
                          <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                      <button type="submit" class="btn btn-primary">Add</button>
                      <a class="btn btn-default" href="{{ route('admin.paymentoptions.index') }}">Cancel</a>
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
@endsection

@section('scripts')

 {!! HTML::script('js/jasny.bootstrap/extend/js/jasny-bootstrap.min.js') !!}

@endsection