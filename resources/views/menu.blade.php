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
            MENU
          </div>
          <ul class="cl-vnavigation">
            <li class=""><a href="{{url('/')}}"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
            <li><a href="#"><i class="fa fa-shopping-cart"></i><span>Store</span></a>
              <ul class="sub-menu">
                <li><a href="{{action('StoreController@index')}}">Store overview</a></li>
                <li><a href="{{action('StoreController@create')}}">Add store</a></li>
                <li><a href="{{action('CountryController@index')}}">Country overview</a></li>
                <li><a href="{{action('CountryController@create')}}">Add country</a></li>
                <li><a href="{{action('PaymentOptionController@index')}}">Payment options overview</a></li>
                <li><a href="{{action('PaymentOptionController@create')}}">Add payment options</a></li>
              </ul>
            </li>
            <!--<li><a href="#"><i class="fa fa-folder"></i><span>Category</span></a>
              <ul class="sub-menu">
                <li><a href="#">Category overview</a></li>
                <li><a href="#">Rank catagories</a></li>
                <li><a href="#">Map catagories</a></li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-picture-o"></i><span>Brand</span></a>
              <ul class="sub-menu">
                <li><a href="#">Overview</a></li>
                <li><a href="#">Map brands</a></li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-globe"></i><span>Language</span></a>
              <ul class="sub-menu">
                <li><a href="#l">System Translations</a></li>
                <li><a href="#">Category Translations</a></li>
              </ul>
            </li>-->
          </ul>
        </div>
      </div>
      <div class="text-right collapse-button" style="padding:7px 9px;">
        <input type="text" class="form-control search" placeholder="Search..." />
        <button id="sidebar-collapse" class="btn btn-default" style=""><i style="color:#fff;" class="fa fa-angle-left"></i></button>
      </div>
    </div>
  </div>