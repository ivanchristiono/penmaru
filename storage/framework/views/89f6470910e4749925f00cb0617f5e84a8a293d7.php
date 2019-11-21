<?php $__env->startSection('content'); ?>

  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <div class="p-1">
                      <img src="<?php echo e(asset('images/logo/logo.png')); ?>" alt="branding logo">
                    </div>
                  </div>
                  <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span>Login with Stack</span>
                  </h6>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <form class="form-horizontal form-simple" action="<?php echo e(url('/login')); ?>" method="POST" novalidate>
                        <?php echo e(csrf_field()); ?>

                      <div class="form-group position-relative has-icon-left mb-0<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                        <input type="text" class="form-control form-control-lg" id="email" name="email" placeholder="Your Email" value="<?php echo e(old('email')); ?>" required>
                        <?php echo $errors->first('email', '<p class="help-block">:message</p>'); ?>

                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                    </div>
                      <div class="form-group position-relative has-icon-left<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                        <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Enter Password" required>
                        <?php echo $errors->first('password', '<p class="help-block">:message</p>'); ?>

                        <div class="form-control-position">
                          <i class="fa fa-key"></i>
                        </div>
                    </div>
                      <div class="form-group row">
                        <div class="col-md-6 col-12 text-center text-md-left">
                          <fieldset>
                            <input type="checkbox" name="remember" id="remember" class="chk-remember">
                            
                            <label for="remember-me"> Remember Me</label>
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-12 text-center text-md-right"><a href="<?php echo e(url('/password/reset')); ?>" class="card-link">Forgot Password?</a></div>
                      </div>
                      <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="ft-unlock"></i> Login</button>
                    </form>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="">
                    <p class="float-sm-left text-center m-0"><a href="recover-password.html" class="card-link">Recover password</a></p>
                    <p class="float-sm-right text-center m-0">New to Stack? <a href="<?php echo e(url('/register')); ?>" class="card-link">Sign Up</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>