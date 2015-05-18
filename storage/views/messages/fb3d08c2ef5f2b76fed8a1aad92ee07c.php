<?php $__env->startSection('breadcrumbs'); ?>

    <div class="page-head">
        <h2>Add country</h2>
        <ol class="breadcrumb">
          <li><a href="<?php echo e(url('/')); ?>">Dashboard</a></li>
          <li><a href="<?php echo e(action('CountryController@index')); ?>">Country</a></li>
          <li class="active">Add country</li>
        </ol>
    </div>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="block-flat">
            <div class="header">              
              <h3>Add country</h3>
            </div>
            <div class="content">
               <?php if($errors->all()): ?>
                    <div class="alert alert-danger">
                        <?php foreach($errors->all() as $error): ?>
                        <p><?php echo e($error); ?></p>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
              <form class="form-horizontal" role="form" action="<?php echo e(action('CountryController@postStore') /*route('admin.countries.create')*/); ?>" method="POST">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                  <input type="name" class="form-control" id="name" name="name" placeholder="insert country name">
                </div>
                </div>
                <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary">Add</button>
                  <a class="btn btn-default" href="<?php echo e(route('admin.countries.index')); ?>">Cancel</a>
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>