@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Product / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$product->id}}</p>
                </div>
                <div class="form-group">
                     <label for="name">NAME</label>
                     <p class="form-control-static">{{$product->name}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ route('admin.products.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('admin.products.edit', $product->id) }}">Edit</a>
            <form action="#/$product->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection