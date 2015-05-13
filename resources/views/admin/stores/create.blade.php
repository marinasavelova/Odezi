@extends('layout')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/js/jasny.bootstrap/extend/css/jasny-bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/js/bootstrap.switch/bootstrap-switch.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/js/jquery.select2/select2.css') }}">
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
                        <?php $i=0; ?>
                        <div class="row">
                            @foreach(App\PaymentOption::all() as $option)
                            <label class="checkbox-inline">
                                <input class="icheck" type="checkbox" checked="" name="rad1">
                                {{ $option->name }}
                            </label>
                            <?php $i++; if($i%3==0) { ?> </div><div class="row"> <?php } ?>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Delivery countries </br> <small>(multi select)</small></label>
                    <div class="col-sm-6">
                        {!! Form::select('country_id', $countries, null, array('class' => 'form-control', "multiple")) !!}
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
 {!! HTML::script('js/bootstrap.daterangepicker/moment.min.js') !!}
 {!! HTML::script('js/bootstrap.touchspin/bootstrap-touchspin/bootstrap.touchspin.js') !!}
 {!! HTML::script('js/jquery.select2/select2.min.js') !!}
 {!! HTML::script('js/jquery.icheck/icheck.min.js') !!}

  <script type="text/javascript">
    $(window).load(function(){
        $('.icheck').iCheck({
          checkboxClass: 'icheckbox_flat-green',
        });
    });
  </script>

@endsection