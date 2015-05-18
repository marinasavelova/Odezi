<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/js/jasny.bootstrap/extend/css/jasny-bootstrap.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumbs'); ?>

    <div class="page-head">
        <h2>Add payment option</h2>
        <ol class="breadcrumb">
          <li><a href="<?php echo e(url('/')); ?>">Dashboard</a></li>
          <li><a href="<?php echo e(action('PaymentOptionController@index')); ?>">Payment options</a></li>
          <li class="active">Add payment option</li>
        </ol>
    </div>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="block-flat">
            <div class="header">              
              <h3>Add payment option</h3>
            </div>
            <div class="content">
               <?php if($errors->all()): ?>
                    <div class="alert alert-danger">
                        <?php foreach($errors->all() as $error): ?>
                        <p><?php echo e($error); ?></p>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
              <form class="form-horizontal group-border-dashed" role="form" action="<?php echo e(action('PaymentOptionController@postStore') /*route('admin.countries.create')*/); ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-6">
                      <input type="name" class="form-control" id="name" name="name" placeholder="insert payment option name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Logo</label>
                    <div class="col-sm-6">
                      <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                        <div>
                          <span class="btn btn-primary btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="img"></span>
                          <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                      <button type="submit" class="btn btn-primary">Add</button>
                      <a class="btn btn-default" href="<?php echo e(route('admin.paymentoptions.index')); ?>">Cancel</a>
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

 <?php echo HTML::script('js/jasny.bootstrap/extend/js/jasny-bootstrap.min.js'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>