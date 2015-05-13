@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Stores / Edit </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('admin.stores.update', $store->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$store->id}}</p>
                </div>
                <div class="form-group">
                     <label for="name">NAME</label>
                     <input type="text" name="name" class="form-control" value="{{$store->name}}"/>
                </div>



            <a class="btn btn-default" href="{{ route('admin.stores.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Save</a>
            </form>
        </div>
    </div>


@endsection