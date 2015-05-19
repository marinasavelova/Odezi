
@extends('layout')

@section('breadcrumbs')

    <div class="page-head">
        <h2>Add product</h2>
        <ol class="breadcrumb">
          <li><a href="{{url('/')}}">Dashboard</a></li>
          <li><a href="{{action('ProductController@index')}}">Product</a></li>
          <li class="active">Add product</li>
        </ol>
    </div>
    
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="block-flat">
            <div class="header">              
              <h3>Add product</h3>
            </div>
            <div class="content">
               @if ($errors->all())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
              <form class="form-horizontal" role="form" action="{{ action('ProductController@postStore') }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-6">
                      <input type="name" class="form-control" id="name" name="name" placeholder="insert product name">
                    </div>
                </div>
                <?php
                $categories = App\Category::where('parent_id', null)->lists('name','id');
                ?>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Category</label>
                    <div class="col-sm-6">
                        {!! Form::select('category_id', [null=>'choose category'] + $categories, null, array('class' => 'form-control', 'id'=>'category')) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Subcategory</label>
                    <div class="col-sm-6" id="render-subcategory">
                        {!! Form::select('subcategory_id', [null=>'choose subcategory'], null, array('class' => 'form-control')) !!}
                    </div>
                </div>
                <?php
                $stores = App\Store::lists('name','id');
                ?>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Store</label>
                    <div class="col-sm-6">
                        {!! Form::select('shop_id', $stores, null, array('class' => 'form-control')) !!}
                    </div>
                </div>
                <?php
                $brands = App\Brand::lists('name','id');
                ?>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Brand</label>
                    <div class="col-sm-6">
                        {!! Form::select('brand_id', $brands, null, array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Price</label>
                    <div class="col-sm-6">
                      <input type="name" class="form-control" id="price" name="price" placeholder="insert price">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Shipping costs</label>
                    <div class="col-sm-6">
                      <input type="name" class="form-control" id="shipping_costs" name="shipping_costs" placeholder="shipping costs">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Shipping duration description</label>
                    <div class="col-sm-6">
                      <textarea class="form-control" id="shipping_duration_descr" name="shipping_duration_descr" placeholder="insert shipping duration"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Logo</label>
                    <div class="col-sm-6">
                      <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                        <div>
                          <span class="btn btn-primary btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="image"></span>
                          <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-6">
                      <textarea class="form-control" id="description" name="description" placeholder="insert description"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Color</label>
                    <div class="col-sm-6">
                      <input type="name" class="form-control" id="color" name="color" placeholder="insert color">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Url</label>
                    <div class="col-sm-6">
                      <input type="name" class="form-control" id="url" name="url" placeholder="insert url">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Eancode</label>
                    <div class="col-sm-6">
                      <input type="name" class="form-control" id="ean_code" name="ean_code" placeholder="insert eancode">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                      <button type="submit" class="btn btn-primary">Add</button>
                      <a class="btn btn-default" href="{{ route('admin.products.index') }}">Cancel</a>
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
@endsection
@section('scripts')

 {!! HTML::script('js/jasny.bootstrap/extend/js/jasny-bootstrap.min.js') !!}

   <script type="text/javascript">
    $(window).load(function(){ 
        $("#category").on("change",function(){
            var id = $(this).val();
            $.ajax({
                type: "GET",
                async: false,
                url: "{{ action('ProductController@category') }}",
                data: {
                  id : id
                },
                success: function(data){
                    if(data!="") {
                        $("#render-subcategory").html(data);
                    }
                    return false;
                }
            });
        });
    });
  </script>

@endsection
