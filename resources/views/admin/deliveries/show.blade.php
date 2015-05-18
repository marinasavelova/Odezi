@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Delivery terms / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$delivery->id}}</p>
                </div>
                <div class="form-group">
                     <label for="name">NAME</label>
                     <p class="form-control-static">{{$delivery->name}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ route('admin.deliveries.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('admin.deliveries.edit', $delivery->id) }}">Edit</a>
            <form action="#/$delivery->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection