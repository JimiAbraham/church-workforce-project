


<?php $__env->startSection('content'); ?>


<div class="content-area">

  <div class="pagehead-bg   primary-bg" >
    </div> 

  <div class="container has-pagehead is-pagetitle">
    <div class="section">
      <h5 class="pagetitle">Edit Profile</h5>
          </div>
  </div>
  




  

      <div class="container over">
        <div class="section ">
<div class="spacer"></div>
<?php if(isset ($errors) && count($errors) > 0): ?>
    <div class="alert alert-warning" role="alert">
        <ul class="list-unstyled mb-0">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
    
<?php if(session('message')): ?>
<div class="alert alert-success" role="alert">
  <h4>  <?php echo e(session('message')); ?> </h4>
</div>
<?php endif; ?>

<form action="<?php echo e(route('dashboard.update')); ?>" method="POST">
  <?php echo csrf_field(); ?>
          <div class="editprof-img">
            <div class="img-wrap circle">
            <img src="<?php echo e(asset('assets/images/edit-profile.jpg')); ?>" alt="">
            <i class="mdi mdi-pencil prefix"></i>
            </div>
          </div>
<div class="spacer"></div>
        <div class="row">
        <div class="input-field col s12">
          <i class="mdi mdi-account-outline prefix"></i>
          <input id="first_name" type="text" name="name" value="<?php echo e(auth()->user()->name); ?>"  class="validate">
          <label for="first_name">Name</label>
        </div>
        </div>

        <div class="row">
        <div class="input-field col s12">
          <i class="mdi mdi-email-outline prefix"></i>
          <input id="email" type="email" name="email" value="<?php echo e(auth()->user()->email); ?>" class="validate">
          <label for="email">Email</label>
        </div>
        </div>

        <div class="row">
        <div class="input-field col s12">
          <i class="mdi mdi-cellphone prefix"></i>
          <input id="mobno" type="text" name="phone" value="<?php echo e(auth()->user()->phone); ?>" class="validate">
          <label for="mobno">Mobile No.</label>
        </div>
        </div>


        <div class="row">
          <div class="input-field col s12">
            <i class="mdi mdi-cellphone prefix"></i>
            <input id="mobno" type="text" name="address" value="<?php echo e(auth()->user()->address); ?>" class="validate">
            <label for="mobno">Address</label>
          </div>
          </div>

        

        <div class="row">
        <div class="input-field col s12">
          <i class="mdi mdi-calendar prefix"></i>
          <input type="date"  name="DOB" value="<?php echo e(auth()->user()->DOB); ?>"  class="">
          <label for="datepicker-input2">Birth Date</label>
        </div>
        </div>


        <div class="row">
        <div class="input-field col s12">
          <i class="mdi mdi-briefcase-outline prefix"></i>
          <input  id="prof" type="text" name="job" value="<?php echo e(auth()->user()->job); ?>" class="validate">
          <label for="prof">Profession</label>
        </div>
        </div>


        <div class="row">
          <div class="input-field col s12">
            <i class="mdi mdi-briefcase-outline prefix"></i>
            <select name="marital">
            
              <option value="<?php echo e(auth()->user()->marital); ?>"><?php echo e(auth()->user()->marital); ?></option>
              <option value="Relationship">In Relationship</option>
              <option value="Married">Married</option>
              <option value="Single">Single</option>

            </select>
          </div>
          </div>


        <div class="row">
          <div class="input-field col s12">
            <i class="mdi mdi-briefcase-outline prefix"></i>
            <select name="gender">
            
              <option value="<?php echo e(auth()->user()->gender); ?>"><?php echo e(auth()->user()->gender); ?></option>
              <option value="Female">Female</option>
              <option value="Male">Male</option>

            </select>
          </div>
          </div>


  
          


        <div class="row">
            <div class="">
               <button type="submit" class="waves-effect waves-light btn-large bg-primary ">Save Profile</button>
            </div>
        </div>

      </form>

          </div>
        </div>







<footer class="page-footer center social-colored ">
  <div class="container footer-content">
    <div class="row">
      <div class="">
        <h5 class="logo">Odis</h5>
              </div>
      <div class="link-wrap">

                <ul class="link-ul">
          <li><a class="" href="#!"><i class="mdi mdi-phone"></i> +1 234 567 890</a></li>
          <li><a class="" href="#!"><i class="mdi mdi-email"></i> email@example.com</a></li>
          <li><a class="" href="#!"><i class="mdi mdi-map-marker"></i> FF 1, Sector-8, Tech Street, NY, USA</a></li>
        </ul>
                <ul class="social-wrap">
          <li class="social">
            <a class="" href="#!"><i class="mdi mdi-facebook"></i></a>
            <a class="" href="#!"><i class="mdi mdi-twitter"></i></a>
            <a class="" href="#!"><i class="mdi mdi-dribbble"></i></a>
            <a class="" href="#!"><i class="mdi mdi-google-plus"></i></a>
            <a class="" href="#!"><i class="mdi mdi-linkedin"></i></a>

          </li>
        </ul>
      </div>
    </div>

    
  </div>


  <div class="footer-copyright">
      <div class="container">
        &copy; Copyright <a class="" href="https://themeforest.net/user/themepassion/portfolio">Themepassion</a>. All rights reserved.
      </div>
    </div></footer>



<div class="backtotop">
  <a class="btn-floating btn primary-bg">
    <i class="mdi mdi-chevron-up"></i>
  </a>
</div>



</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Desktop\New folder\htdocs\cwf3\cwf3\resources\views/home/update.blade.php ENDPATH**/ ?>