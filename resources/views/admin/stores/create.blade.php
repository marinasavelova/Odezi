@extends('layout')

@section('css')

<link rel="stylesheet" type="text/css" href="{{ asset('/js/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/js/bootstrap.switch/bootstrap-switch.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/js/jquery.select2/select2.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/js/bootstrap.slider/css/slider.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/js/jquery.icheck/skins/flat/green.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/js/bootstrap.daterangepicker/daterangepicker-bs3.css') }}">

@endsection

@section('breadcrumbs')

    <div class="page-head">
        <h2>Add store</h2>
        <ol class="breadcrumb">
          <li><a href="{{url('/')}}">Dashboard</a></li>
          <li><a href="{{action('StoreController@index')}}">Store</a></li>
          <li class="active">Add store</li>
        </ol>
    </div>
    
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="block-flat">
            <div class="header">
              <button type="submit" class="btn btn-success pull-right"><i class="fa fa-cloud-download"></i> Save</button>            
              <h3>Store information</h3>
            </div>
            <div class="content">
               @if ($errors->all())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
              <form class="form-horizontal group-border-dashed" style="border-radius: 0px;" role="form" action="{{ action('StoreController@postStore') /*route('admin.countries.create')*/ }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Shop name</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="name" name="name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">URL</label>
                    <div class="col-sm-6">
                      <input parsley-type="url" type="url" class="form-control" id="url" name="url" required="" placeholder="URL" data-parsley-id="7745"><ul class="parsley-errors-list" id="parsley-id-7745"></ul>
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
               <?php $countries = App\Country::lists('name','id'); ?>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Home country</label>
                    <div class="col-sm-6">
                        {!! Form::select('country_id', $countries, null, array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><div class="row">Payment options</div></label>
                    <div class="col-sm-8">
                      <div class="row">
                        <label class="checkbox-inline"> 
                        <div class="icheckbox_flat-green" aria-checked="true" aria-disabled="false" style="position: relative;"><input class="icheck" type="checkbox" checked="" name="rad1" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> Payment option 1</label> 
                      <label class="checkbox-inline"> 
                        <div class="icheckbox_flat-green checked" aria-checked="true" aria-disabled="false" style="position: relative;"><input class="icheck" type="checkbox" name="rad1" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> Payment option 2</label> 
                      <label class="checkbox-inline"> 
                        <div class="icheckbox_flat-green checked" aria-checked="true" aria-disabled="false" style="position: relative;"><input class="icheck" type="checkbox" name="rad1" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> Payment option 3</label>
                      </div>
                      <div class="row">
                      <label class="checkbox-inline"> 
                        <div class="icheckbox_flat-green checked" aria-checked="true" aria-disabled="false" style="position: relative;"><input class="icheck" type="checkbox" checked="" name="rad1" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> Payment option 4</label> 
                      <label class="checkbox-inline"> 
                        <div class="icheckbox_flat-green checked" aria-checked="true" aria-disabled="false" style="position: relative;"><input class="icheck" type="checkbox" name="rad1" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> Payment option 5</label> 
                      <label class="checkbox-inline"> 
                        <div class="icheckbox_flat-green checked" aria-checked="true" aria-disabled="false" style="position: relative;"><input class="icheck" type="checkbox" name="rad1" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> Payment option 6</label>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Delivery countries </br> <small>(multi select)</small></label>
                    <div class="col-sm-6">
                        {!! Form::select('country_id', $countries, null, array('class' => 'form-control')) !!}
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
@endsection