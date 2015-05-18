@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Payment options / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$paymentoption->id}}</p>
                </div>
                <div class="form-group">
                     <label for="name">NAME</label>
                     <p class="form-control-static">{{$paymentoption->name}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ route('admin.paymentoptions.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('admin.paymentoptions.edit', $paymentoption->id) }}">Edit</a>
            <form action="#/$paymentoption->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection