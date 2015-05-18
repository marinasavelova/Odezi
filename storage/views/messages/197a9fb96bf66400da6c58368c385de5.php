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
          <?php echo LaravelGettext::getSelector()->render(); ?>

            MENU    <?php echo _('Another translated string'); ?>
          </div>
          <ul class="cl-vnavigation">
            <li class=""><a href="<?php echo e(url('/')); ?>"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
            <li><a href="#"><i class="fa fa-shopping-cart"></i><span><?php echo _('Product'); ?></span></a>
              <ul class="sub-menu">
                <li><a href="#">Overview</a></li>
                <li><a href="#">Add new</a></li>
               </ul>
            </li>
            <li><a href="#"><i class="fa fa-picture-o"></i><span>Brand</span></a>
              <ul class="sub-menu">
                <li><a href="#">Overview</a></li>
                <li><a href="#">Add new</a></li>
               </ul>
            </li>
            <li><a href="#"><i class="fa fa-folder"></i><span>Category</span></a>
              <ul class="sub-menu">
                <li><a href="#">Overview</a></li>
                <li><a href="#">Add new</a></li>
               </ul>
            </li>
            <li><a href="#"><i class="fa fa-shopping-cart"></i><span>Store</span></a>
              <ul class="sub-menu">
                <li><a href="<?php echo e(action('StoreController@index')); ?>">Overview</a></li>
                <li><a href="<?php echo e(action('StoreController@create')); ?>">Add new</a></li>
               </ul>
            </li>
            <li><a href="#"><i class="fa fa-money"></i><span>Payment Options</span></a>
              <ul class="sub-menu">
                <li><a href="<?php echo e(action('PaymentOptionController@index')); ?>">Overview</a></li>
                <li><a href="<?php echo e(action('PaymentOptionController@create')); ?>">Add new</a></li>
               </ul>
            </li>
            <li><a href="#"><i class="fa fa-globe"></i><span>Country</span></a>
              <ul class="sub-menu">
                <li><a href="<?php echo e(action('CountryController@index')); ?>">Overview</a></li>
                <li><a href="<?php echo e(action('CountryController@create')); ?>">Add new</a></li>
               </ul>
            </li>
            <li><a href="#"><i class="fa fa-truck"></i><span>Delivery terms</span></a>
              <ul class="sub-menu">
                <li><a href="#">Overview</a></li>
                <li><a href="#">Add new</a></li>
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