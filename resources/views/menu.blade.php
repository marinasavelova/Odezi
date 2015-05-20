<div class="cl-sidebar">
    <div class="cl-toggle"><i class="fa fa-bars"></i></div>
    <div class="cl-navblock">
      <div class="menu-space">
        <div class="content">
          <div class="sidebar-logo">
            <div class="logo">
            </div>
          </div>
          <div class="side-user">
          <!--<?php print_r(Route::currentRouteName()); ?>-->
          <!--<?php print_r(Request::url()); ?>-->
          <!--{!! LaravelGettext::getSelector()->render() !!}-->
          <!--<?php echo _('Another translated string'); ?>-->
            MENU    
          </div>
          <ul class="cl-vnavigation">
            <li class=""><a href="{{url('/')}}"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
            <li><a href="#"><i class="fa fa-shopping-cart"></i><span>Product</span></a>
              <ul class="sub-menu" href="admin.products.edit">
                <li><a href="{{action('ProductController@index')}}">Overview</a></li>
                <li><a href="{{action('ProductController@create')}}">Add new</a></li>
               </ul>
            </li>
            <li><a href="#"><i class="fa fa-picture-o"></i><span>Brand</span></a>
              <ul class="sub-menu" href="admin.brands.edit">
                <li><a href="{{action('BrandController@index')}}">Overview</a></li>
                <li><a href="{{action('BrandController@create')}}">Add new</a></li>
               </ul>
            </li>
            <li><a href="#"><i class="fa fa-folder"></i><span>Category</span></a>
              <ul class="sub-menu" href="admin.categories.edit">
                <li><a href="{{action('CategoryController@index')}}">Overview</a></li>
                <li><a href="{{action('CategoryController@create')}}">Add new</a></li>
               </ul>
            </li>
            <li><a href="#"><i class="fa fa-shopping-cart"></i><span>Store</span></a>
              <ul class="sub-menu" href="admin.stores.edit">
                <li><a href="{{action('StoreController@index')}}">Overview</a></li>
                <li><a href="{{action('StoreController@create')}}">Add new</a></li>
               </ul>
            </li>
            <li><a href="#"><i class="fa fa-money"></i><span>Payment Options</span></a>
              <ul class="sub-menu" href="admin.paymentoptions.edit">
                <li><a href="{{action('PaymentOptionController@index')}}">Overview</a></li>
                <li><a href="{{action('PaymentOptionController@create')}}">Add new</a></li>
               </ul>
            </li>
            <li><a href="#"><i class="fa fa-globe"></i><span>Country</span></a>
              <ul class="sub-menu" href="admin.countries.edit">
                <li><a href="{{action('CountryController@index')}}">Overview</a></li>
                <li><a href="{{action('CountryController@create')}}">Add new</a></li>
               </ul>
            </li>
            <li><a href="#"><i class="fa fa-truck"></i><span>Delivery terms</span></a>
              <ul class="sub-menu" href="admin.deliveries.edit">
                <li><a href="{{action('DeliveryController@index')}}">Overview</a></li>
                <li><a href="{{action('DeliveryController@create')}}">Add new</a></li>
               </ul>
            </li> 
          </ul>
        </div>
      </div>
      <div class="text-right collapse-button" style="padding:7px 9px;">
        <input type="text" class="form-control search" placeholder="Search..." />
        <button id="sidebar-collapse" class="btn btn-default" style=""><i style="color:#fff;" class="fa fa-angle-left"></i></button>
      </div>
    </div>
  </div>
