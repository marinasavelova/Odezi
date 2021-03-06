@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Country / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$country->id}}</p>
                </div>
                <div class="form-group">
                     <label for="name">NAME</label>
                     <p class="form-control-static">{{$country->name}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ route('admin.countries.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('admin.countries.edit', $country->id) }}">Edit</a>
            <form action="#/$country->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection