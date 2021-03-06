@extends('layout')

@section('breadcrumbs')

    <div class="page-head">
        <h2>Edit country</h2>
        <ol class="breadcrumb">
          <li><a href="{{url('/')}}">Dashboard</a></li>
          <li><a href="{{action('CountryController@index')}}">Country</a></li>
          <li class="active">Edit country</li>
        </ol>
    </div>
    
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="block-flat">
            <div class="header">              
              <h3>Edit country</h3>
            </div>
            <div class="content">
                @if ($errors->all())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
              <form class="form-horizontal" role="form" action="{{ route('admin.countries.update', $country->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                  <input type="name" class="form-control" id="name" name="name" value="{{$country->name}}" placeholder="insert country name">
                </div>
                </div>
                <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary">Save</button>
                  <a class="btn btn-default" href="{{ route('admin.countries.index') }}">Cancel</a>
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
@endsection