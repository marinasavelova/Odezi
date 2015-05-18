
@extends('layout')

@section('css')

<link rel="stylesheet" type="text/css" href="{{ asset('/js/jquery.datatables/bootstrap-adapter/css/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/js/jquery.nanoscroller/nanoscroller.css') }}">

@endsection

@section('breadcrumbs')

    <div class="page-head">
        <h2>Brands overview</h2>
        <ol class="breadcrumb">
          <li><a href="{{url('/')}}">Dashboard</a></li>
          <li><a href="{{action('BrandController@index')}}">Brands</a></li>
          <li class="active">Brands overview</li>
        </ol>
    </div>
    
@endsection

@section('content')
    
   <div class="row">
        <div class="col-md-12">
            <div class="block-flat">
                <div class="header">              
                  <h3>All brands</h3>
                </div>
                <div class="content">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="datatable" >
                        <thead>
                            <tr>
                              <th>Brand</th>
                              <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($brands as $brand)
                            <tr edit-href="{{ route('admin.brands.edit', $brand->id) }}">
                                <td>{{$brand->name}}</td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>
                <!--<a class="btn btn-success" href="{{ route('admin.countries.create') }}">Create</a>-->
            </div>
        </div>
    </div>
    
    @endsection

@section('scripts')

{!! HTML::script('js/jquery.jeditable/jquery.jeditable.mini.js') !!}
{!! HTML::script('js/jquery.datatables/jquery.datatables.min.js') !!}
{!! HTML::script('js/jquery.datatables/bootstrap-adapter/js/datatables.js') !!}

{!! HTML::script('js/table.js') !!}

<script>
 $(document).ready(function(){
      $('#datatable').on('click', 'td', function(){
        alert("dfffffffff");
      });
 });
</script>
@endsection
