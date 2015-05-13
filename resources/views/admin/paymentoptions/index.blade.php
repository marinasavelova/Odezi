
@extends('layout')

@section('css')

<link rel="stylesheet" type="text/css" href="{{ asset('/js/jquery.datatables/bootstrap-adapter/css/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/js/jquery.nanoscroller/nanoscroller.css') }}">

@endsection

@section('breadcrumbs')

    <div class="page-head">
        <h2>Payment options overview</h2>
        <ol class="breadcrumb">
          <li><a href="{{url('/')}}">Dashboard</a></li>
          <li><a href="{{action('PaymentOptionController@index')}}">Payment options</a></li>
          <li class="active">Payment options overview</li>
        </ol>
    </div>
    
@endsection

@section('content')
    
   <div class="row">
        <div class="col-md-12">
            <div class="block-flat">
                <div class="header">              
                  <h3>All payment options</h3>
                </div>
                <div class="content">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="datatable" >
                        <thead>
                            <tr>
                              <th>Payment option</th>
                              <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($paymentoptions as $paymentoption)
                            <tr href="{{ route('admin.paymentoptions.edit', $paymentoption->id) }}">
                                <td>{{$paymentoption->name}}</td>
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