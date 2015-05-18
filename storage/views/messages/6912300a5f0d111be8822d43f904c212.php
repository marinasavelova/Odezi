<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/js/jasny.bootstrap/extend/css/jasny-bootstrap.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/js/bootstrap.switch/bootstrap-switch.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/js/jquery.select2/select2.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/js/jquery.icheck/skins/flat/green.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/js/bootstrap.daterangepicker/daterangepicker-bs3.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumbs'); ?>

    <div class="page-head">
        <h2>Edit store</h2>
        <ol class="breadcrumb">
          <li><a href="<?php echo e(url('/')); ?>">Dashboard</a></li>
          <li><a href="<?php echo e(action('StoreController@index')); ?>">Store</a></li>
          <li class="active">Edit store</li>
        </ol>
    </div>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="block-flat">
            <div class="header">
              <button type="submit" id="save-form" class="btn btn-success pull-right"><i class="fa fa-cloud-download"></i> Save</button>            
              <h3>Store information</h3>
            </div>
            <div class="content">
               <?php if($errors->all()): ?>
                    <div class="alert alert-danger">
                        <?php foreach($errors->all() as $error): ?>
                        <p><?php echo e($error); ?></p>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
              <form id="store-form" class="form-horizontal group-border-dashed" style="border-radius: 0px;" role="form" action="<?php echo e(route('admin.stores.update', $store->id)); ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Shop name</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="name" value="<?php echo e($store->name); ?>" name="name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">URL</label>
                    <div class="col-sm-6">
                      <input parsley-type="url" type="url" class="form-control" id="url" value="<?php echo e($store->url); ?>" name="url" required="" placeholder="URL" data-parsley-id="7745"><ul class="parsley-errors-list" id="parsley-id-7745"></ul>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Logo</label>
                    <div class="col-sm-6">
                      <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                            <img class="" src="<?php echo e(asset("$store->img")); ?>" alt=""/>
                        </div>
                        <div>
                          <span class="btn btn-primary btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="img"></span>
                          <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
               <?php $countries = App\Country::lists('name','id'); ?>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Home country</label>
                    <div class="col-sm-6">
                        <?php echo Form::select('country_id', $countries, $store->country_id, array('class' => 'form-control')); ?>

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><div class="row">Payment options</div></label>
                    <div class="col-sm-8">
                        <?php $i=0; ?>
                        <div class="row">
                            <?php foreach(App\PaymentOption::all() as $option): ?>
                            <label class="checkbox-inline">
                                <input class="icheck" type="checkbox" <?= in_array($option->id, $store->paymentoptionstore()->getRelatedIds()) ? "checked" : "";?> name="paymentoption[]" value="<?php echo e($option->id); ?>">
                                <?php echo e($option->name); ?>

                            </label>
                            <?php $i++; if($i%3==0) { ?> </div><div class="row"> <?php } ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Delivery countries </br> <small>(multi select)</small></label>
                    <div class="col-sm-6">
                        <?php echo Form::select('delivery_id[]', $countries, $store->deliverystore()->getRelatedIds(), array('class' => 'form-control', "multiple")); ?>

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

 <?php echo HTML::script('js/bootstrap.daterangepicker/moment.min.js'); ?>

 <?php echo HTML::script('js/bootstrap.touchspin/bootstrap-touchspin/bootstrap.touchspin.js'); ?>

 <?php echo HTML::script('js/jquery.select2/select2.min.js'); ?>

 <?php echo HTML::script('js/jquery.icheck/icheck.min.js'); ?>


  <script type="text/javascript">
    $(window).load(function(){
        $('.icheck').iCheck({
          checkboxClass: 'icheckbox_flat-green',
        });
        
        $("#save-form").on("click", function(){
            $("#store-form").submit();
        });
    });
  </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>