
@extends('layout')

@section('css')

<link rel="stylesheet" type="text/css" href="{{ asset('/js/jquery.datatables/bootstrap-adapter/css/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/js/jquery.nanoscroller/nanoscroller.css') }}">

@endsection

@section('breadcrumbs')

    <div class="page-head">
        <h2>Category overview</h2>
        <ol class="breadcrumb">
          <li><a href="{{url('/')}}">Dashboard</a></li>
          <li><a href="{{action('CategoryController@index')}}">Category</a></li>
          <li class="active">Category overview</li>
        </ol>
    </div>
    
@endsection

@section('content')
    
   <div class="row">
        <div class="col-md-12">
            <div class="block-flat">
                <div class="header">              
                  <h3>All categories</h3>
                </div>
                <div class="content">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="datatable" >
                        <thead>
                            <tr>
                              <th>Name</th>
                              <th>Category</th>
                              <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr edit-href="{{ route('admin.categories.edit', $category->id) }}">
                                <td>{{$category->name}}</td>
                                <td>{{$category->parentcategory->name or "-"}}</td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
    
    @endsection

@section('scripts')

{!! HTML::script('js/jquery.jeditable/jquery.jeditable.mini.js') !!}
{!! HTML::script('js/jquery.datatables/jquery.datatables.min.js') !!}
{!! HTML::script('js/jquery.datatables/bootstrap-adapter/js/datatables.js') !!}

{!! HTML::script('js/table.js') !!}

@endsection
