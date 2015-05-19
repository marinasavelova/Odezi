
@extends('layout')

@section('css')

<link rel="stylesheet" type="text/css" href="{{ asset('/js/jquery.datatables/bootstrap-adapter/css/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/js/jquery.nanoscroller/nanoscroller.css') }}">

@endsection

@section('breadcrumbs')

    <div class="page-head">
        <h2>Product overview</h2>
        <ol class="breadcrumb">
          <li><a href="{{url('/')}}">Dashboard</a></li>
          <li><a href="{{action('ProductController@index')}}">Product</a></li>
          <li class="active">Product overview</li>
        </ol>
    </div>
    
@endsection

@section('content')
    
   <div class="row">
        <div class="col-md-12">
            <div class="block-flat">
                <div class="header">              
                  <h3>All products</h3>
                </div>
                <div class="content">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="datatable" >
                        <thead>
                            <tr>
                              <th>Name</th>
                              <th>Category</th>
                              <th>Subcategory</th>
                              <th>Price</th>
                              <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr edit-href="{{ route('admin.products.edit', $product->id) }}">
                                <td>{{$product->name}}</td>
                                <td>{{$product->category->name or "-"}}</td>
                                <td>{{$product->subcategory->name or "-"}}</td>
                                <td>{{$product->price}}</td>
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
