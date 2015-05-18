<?php $__env->startSection('auth'); ?>
	
<div class="sign-up-container">

	<div class="middle-sign-up">
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
				<form style="margin-bottom: 0px !important;" class="form-horizontal" method="POST" action="<?php echo e(url('/auth/register')); ?>" parsley-validate novalidate>
					<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
					<div class="content">
						<h5 class="title text-center"><strong>Sign Up</strong></h5>
              <hr/>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <button class="btn btn-block btn-trans btn-facebook bg btn-rad" type="button"><i class="fa fa-facebook"></i> Sign in with Facebook</button>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <button class="btn btn-block btn-trans btn-twitter bg btn-rad" type="button"><i class="fa fa-twitter"></i> Sign in with Twitter</button>
                </div>
              </div>
              <p class="text-center">Or</p>
              
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input type="text" name="name" parsley-trigger="change" parsley-error-container="#name-error" required placeholder="Username" value="<?php echo e(old('name')); ?>" class="form-control">
									</div>
                  <div id="nick-error"></div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
										<input type="email" name="email" parsley-trigger="change" parsley-error-container="#email-error" required placeholder="E-mail" value="<?php echo e(old('email')); ?>" class="form-control">
									</div>
                  <div id="email-error"></div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-6 col-xs-6">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input id="pass1" type="password" parsley-error-container="#password-error" name="password" placeholder="Password" required class="form-control">
									</div>
                  <div id="password-error"></div>
								</div>
								<div class="col-sm-6 col-xs-6">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input parsley-equalto="#pass1" type="password" parsley-error-container="#confirmation-error" name="password_confirmation"  required placeholder="Password" class="form-control">
									</div>
                  <div id="confirmation-error"></div>
								</div>
							</div>
             <p class="spacer">By creating an account, you agree with the <a href="#">Terms</a> and <a href="#">Conditions</a>.</p>
            <button class="btn btn-block btn-success btn-rad btn-lg" type="submit">Sign Up</button>
							
					</div>
			  </form>
			</div>
		</div>
		<div class="text-center out-links"><a href="#">&copy; 2014 Your Company</a></div>
	</div> 
	
</div>

<?php $__env->stopSection(); ?>

<!--
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
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

					<form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/auth/register')); ?>">
						<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

						<div class="form-group">
							<label class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>">
							</div>
						</div>

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
							<label class="col-md-4 control-label">Confirm Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Register
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
	-->

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>