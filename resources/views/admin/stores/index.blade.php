@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Stores</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                {!! $grid !!}

                
                @foreach($stores as $store)
                <tr>
                    <td>{{$store->id}}</td>
                    <td>{{$store->name}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('admin.stores.show', $store->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('admin.stores.edit', $store->id) }}">Edit</a>
                        <form action="{{ route('admin.stores.destroy', $store->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                    </td>
                </tr>

                @endforeach

                </tbody>
            </table>

            <a class="btn btn-success" href="{{ route('admin.stores.create') }}">Create</a>
        </div>
    </div>


@endsection