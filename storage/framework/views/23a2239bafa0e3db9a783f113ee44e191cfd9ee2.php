


<?php $__env->startSection('content'); ?>


<div class="content-area">

    <div class="pagehead-bg   primary-bg" >
    </div> 

  <div class="container has-pagehead is-pagetitle">
    <div class="section">
      <h5 class="pagetitle">Your status </h5>
          </div>
  </div>

  <div class="container over">
    <div class="section">

        

    

      <?php if( auth()->user()->wf_status == 'Active' ): ?>
        
                <div class="row ">
                  <div class="col s12 pad-0"><h5 class="bot-20 sec-tit  ">Celebrate you greatly, dear <?php echo e(auth()->user()->name); ?></h5>              <div class="card-panel green lighten-2">
                    <div class="card-content white-text">
                      <span class="card-title">Information</span>
                      <p>Your HOD stated that you are currently <?php echo e(auth()->user()->wf_status); ?> </p>
                    </div>
                    
                  </div>
                </div>
              </div>
      <?php elseif( auth()->user()->wf_status == 'Away' ): ?>
      
        <div class="row ">
          <div class="col s12 pad-0"><h5 class="bot-20 sec-tit  ">Celebrate you greatly, dear <?php echo e(auth()->user()->name); ?></h5>              <div class="card deep-orange lighten-2">
            <div class="card-content white-text">
              <span class="card-title">Information</span>
              <p>Your HOD stated that you are currently <?php echo e(auth()->user()->wf_status); ?> </p>
            </div>
            
          </div>
        </div>
      </div>
<?php elseif( auth()->user()->wf_status == 'Suspended' ): ?>
<div class="row ">
  <div class="col s12 pad-0"><h5 class="bot-20 sec-tit  ">Celebrate you greatly, dear <?php echo e(auth()->user()->name); ?></h5>              <div class="card-panel red lighten-2">
    <div class="card-content white-text">
      <span class="card-title"><span class="mdi mdi-information-outline"></span> 
      Information</span>
      <p>Your HOD stated that you are currently <?php echo e(auth()->user()->wf_status); ?> </p>
    </div>
    
  </div>
</div>
</div>
<?php elseif( auth()->user()->wf_status == 'Travelled'): ?>

<div class="row ">
  <div class="col s12 pad-0"><h5 class="bot-20 sec-tit  ">Celebrate you greatly, dear <?php echo e(auth()->user()->name); ?></h5>              <div class="card-panel blue lighten-2">
    <div class="card-content white-text">
      <span class="card-title">Information</span>
      <p>Your HOD stated that you are currently <?php echo e(auth()->user()->wf_status); ?> </p>
    </div>
    
  </div>
</div>
</div>

      <?php endif; ?>
                                   

    </div>
</div>





    
  
  
  
  

  
  
  
  
 <?php echo $__env->make("layout.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>; 
  
  
  <div class="backtotop">
    <a class="btn-floating btn primary-bg">
      <i class="mdi mdi-chevron-up"></i>
    </a>
  </div>
  
  
  
  </div>


  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Desktop\New folder\htdocs\cwf3\cwf3\resources\views/home/status.blade.php ENDPATH**/ ?>