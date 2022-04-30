


<?php $__env->startSection('content'); ?>


<div class="content-area">




  
  <div class="login-bg access-login"></div>
  
  
  <div class="container login-area">
    <div class="section">
  
  
      <h3 class="bot-20 center white-text">Login</h3>
      <?php if(session('success')): ?>
      <div class="alert alert-success" role="alert">
          <h4 style="color:red"><?php echo e(session('success')); ?></h4>
      </div>
  <?php endif; ?>
  
  <form action="<?php echo e(route('login')); ?>" method="POST">
    <?php echo csrf_field(); ?>
      <div class="row">
  
        <div class="input-field col s10 offset-s1">
          <input id="email311" type="email" value="<?php echo e(old('email')); ?>"  name="email" class="validate">
          <label for="email311">Email</label>
        </div>
  
      </div>
  
      <div class="row">
  
        <div class="input-field col s10 offset-s1">
          <input id="pass311" type="password" name="password" class="validate">
          <label for="pass311">Password</label>
        </div>
  
      </div>
  
          
  <div class="row center">
    <button type="submit" class="waves-effect waves-light btn-large bg-primary">Login</button>
    <div class="spacer"></div>
    <div class="links">
  
      <a href="" >Forgot Password</a><span class="sep">|</span><a href="<?php echo e(route('register')); ?>" >Register</a>  </div>
  
      <div class="spacer"></div>

      <a href="<?php echo e(route('google.login')); ?>" class="btn btn-google btn-user btn-block">
        <i class="fab fa-google fa-fw"></i> Login with Google
    </a>
    
  
  </div>
    </div>
  </div>  
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Desktop\New folder\htdocs\cwf3\cwf3\resources\views/auth/login.blade.php ENDPATH**/ ?>