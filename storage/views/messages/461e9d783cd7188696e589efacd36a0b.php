<?php $__env->startSection('css'); ?>

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/js/jquery.datatables/bootstrap-adapter/css/datatables.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/js/jquery.nanoscroller/nanoscroller.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumbs'); ?>

    <div class="page-head">
        <h2>Countries overview</h2>
        <ol class="breadcrumb">
          <li><a href="<?php echo e(url('/')); ?>">Dashboard</a></li>
          <li><a href="<?php echo e(action('CountryController@index')); ?>">Country</a></li>
          <li class="active">Countries overview</li>
        </ol>
    </div>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
   <div class="row">
        <div class="col-md-12">
            <div class="block-flat">
                <div class="header">              
                  <h3>All countries</h3>
                </div>
                <div class="content">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="datatable" >
                        <thead>
                            <tr>
                              <th>Country</th>
                              <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($countries as $country): ?>
                            <tr edit-href="<?php echo e(route('admin.countries.edit', $country->id)); ?>">
                                <td><?php echo e($country->name); ?></td>
                                <td></td>
                                <!--    <a class="btn btn-primary" href="<?php echo e(route('admin.countries.show', $country->id)); ?>">View</a>-->
                                <!--    <a class="btn btn-warning " href="<?php echo e(route('admin.countries.edit', $country->id)); ?>">Edit</a>-->
                                <!--    <form action="<?php echo e(route('admin.countries.destroy', $country->id)); ?>" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> <button class="btn btn-danger" type="submit">Delete</button></form>-->
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                  </div>
                </div>
                <!--<a class="btn btn-success" href="<?php echo e(route('admin.countries.create')); ?>">Create</a>-->
            </div>
        </div>
    </div>
    
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php echo HTML::script('js/jquery.jeditable/jquery.jeditable.mini.js'); ?>

<?php echo HTML::script('js/jquery.datatables/jquery.datatables.min.js'); ?>

<?php echo HTML::script('js/jquery.datatables/bootstrap-adapter/js/datatables.js'); ?>


<?php echo HTML::script('js/table.js'); ?>


<script>
 $(document).ready(function(){
      $('#datatable').on('click', 'td', function(){
        alert("dfffffffff");
      });
 });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>