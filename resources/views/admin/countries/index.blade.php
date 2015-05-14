
@extends('layout')

@section('css')

<link rel="stylesheet" type="text/css" href="{{ asset('/js/jquery.datatables/bootstrap-adapter/css/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/js/jquery.nanoscroller/nanoscroller.css') }}">

@endsection

@section('breadcrumbs')

    <div class="page-head">
        <h2>Countries overview</h2>
        <ol class="breadcrumb">
          <li><a href="{{url('/')}}">Dashboard</a></li>
          <li><a href="{{action('CountryController@index')}}">Country</a></li>
          <li class="active">Countries overview</li>
        </ol>
    </div>
    
@endsection

@section('content')
    
   <div class="row">
        <div class="col-md-12">
            <div class="block-flat">
                <div class="header">              
                  <h3>All countries</h3>
                </div>
                <div class="content">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="datatable" >
                        <thead>
                            <tr>
                              <th>Country</th>
                              <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($countries as $country)
                            <tr edit-href="{{ route('admin.countries.edit', $country->id) }}">
                                <td>{{$country->name}}</td>
                                <td></td>
                                <!--    <a class="btn btn-primary" href="{{ route('admin.countries.show', $country->id) }}">View</a>-->
                                <!--    <a class="btn btn-warning " href="{{ route('admin.countries.edit', $country->id) }}">Edit</a>-->
                                <!--    <form action="{{ route('admin.countries.destroy', $country->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>-->
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
