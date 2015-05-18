<?php $__env->startSection('css'); ?>

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/js/jquery.datatables/bootstrap-adapter/css/datatables.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/js/jquery.nanoscroller/nanoscroller.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumbs'); ?>

    <div class="page-head">
        <h2>Store overview</h2>
        <ol class="breadcrumb">
          <li><a href="<?php echo e(url('/')); ?>">Dashboard</a></li>
          <li><a href="<?php echo e(action('StoreController@index')); ?>">Store</a></li>
          <li class="active">Store overview</li>
        </ol>
    </div>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
   <div class="row">
        <div class="col-md-12">
            <div class="block-flat">
                <div class="header">              
                  <h3>All stores</h3>
                </div>
                <div class="content">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="datatable" >
                        <thead>
                            <tr>
                              <th>Name</th>
                              <th>Home country</th>
                              <th>Payment</th>
                              <th>Delivery</th>
                              <th style="min-width:90px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($stores as $store): ?>
                            <tr edit-href="<?php echo e(route('admin.stores.edit', $store->id)); ?>" destroy-href="<?php echo e(route('admin.stores.destroy', $store->id)); ?>">
                                <td><?php echo e($store->name); ?></td>
                                <td><?php echo e($store->country->name); ?></td>
                                <td><?php echo e($store->getListPaymentOption()); ?></td>
                                <td><?php echo e($store->getListDelivery()); ?></td>
                                <td></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php echo HTML::script('js/jquery.jeditable/jquery.jeditable.mini.js'); ?>

<?php echo HTML::script('js/jquery.datatables/jquery.datatables.min.js'); ?>

<?php echo HTML::script('js/jquery.datatables/bootstrap-adapter/js/datatables.js'); ?>


<?php echo HTML::script('js/table.js'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>