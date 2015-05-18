<?php $__env->startSection('auth'); ?>
	
<div  class="login-container">

	<div class="middle-login">
		<div class="block-flat">
			<div class="header">							
				<h3 class="text-center"><img class="logo-img" src="<?php echo e(asset('images/logo.png')); ?>" alt="logo"/></h3>
			</div>
			<div>
			<?php if(count($errors) > 0): ?>
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								<?php foreach($errors->all() as $error): ?>
									<li><?php echo e($error); ?></li>
								<?php endforeach; ?>
							</ul>
						</div>
					<?php endif; ?>
				<form style="margin-bottom: 0px !important;" class="form-horizontal" method="POST" action="<?php echo e(url('/auth/login')); ?>">
					<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
					<div class="content">
						<h4 class="title">Login Access</h4>
						<div class="form-group">
							<div class="col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="email" name="email" placeholder="Email" id="email" value="<?php echo e(old('email')); ?>" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
									<input type="password" name="password" placeholder="Password" id="password" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="foot">
						<!--<button class="btn btn-default" data-dismiss="modal" type="button">Register</button>-->
						<a class="btn btn-primary" data-dismiss="modal" href="<?php echo e(url('/auth/register')); ?>">Register</a>
						<button class="btn btn-primary" data-dismiss="modal" type="submit">Log me in</button>
					</div>
				</form>
			</div>
		</div>
		<div class="text-center out-links"><a href="#">&copy; 2014 Your Company</a></div>
	</div> 
	
</div>
	
	
	
	
	
	<!--
	
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					<?php if(count($errors) > 0): ?>
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								<?php foreach($errors->all() as $error): ?>
									<li><?php echo e($error); ?></li>
								<?php endforeach; ?>
							</ul>
						</div>
					<?php endif; ?>

					<form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/auth/login')); ?>">
						<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Login</button>

								<a class="btn btn-link" href="<?php echo e(url('/password/email')); ?>">Forgot Your Password?</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>