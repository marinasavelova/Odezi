<?php $__env->startSection('content'); ?>
    <div class="page-header">
        <h1>Stores / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static"><?php echo e($store->id); ?></p>
                </div>
                <div class="form-group">
                     <label for="name">NAME</label>
                     <p class="form-control-static"><?php echo e($store->name); ?></p>
                </div>
            </form>



            <a class="btn btn-default" href="<?php echo e(route('admin.stores.index')); ?>">Back</a>
            <a class="btn btn-warning" href="<?php echo e(route('admin.stores.edit', $store->id)); ?>">Edit</a>
            <form action="#/$store->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>