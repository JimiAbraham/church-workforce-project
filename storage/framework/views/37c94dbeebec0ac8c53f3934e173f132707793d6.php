


<?php $__env->startSection('content'); ?>


<div class="content-area">

    <div class="pagehead-bg   primary-bg" >
      </div> 
  
    <div class="container has-pagehead is-pagetitle">
      <div class="section">
        <h5 class="pagetitle">A Church Survey</h5>
            </div>
    </div>
    
  
  
  
  
    
  <div class="container over">
    <div class="section">
      
  
  
  
  <ul class="collection friends contacts transparent  " >
  

    <?php $__currentLoopData = $Activepoll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Ap): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
    <li class="collection-item avatar  ">
       
              <a href="#!"> 
                <span class="mdi mdi-pin"></span>  

              <h5 style="text-align: center"><?php echo e($Ap->name); ?></h5>
            

              <?php if( $VoteCheck ): ?>
              <h2>You have casted your vote already</h2>

              <?php else: ?>
              <p style="text-align: center;"> 
                <a href="<?php echo e(route('dashboard.voting', [$Ap->id, $polling = 1] )); ?>" class="waves-effect waves-light btn-small btn-rounded green lighten-1"><span class="mdi mdi-thumb-up-outline"></span> 
                  Upvote</a>

                <a href="<?php echo e(route('dashboard.voting', [$Ap->id, $polling = 2] )); ?>" class="waves-effect waves-light btn-small btn-rounded red lighten-2"><span class="mdi mdi-thumb-down-outline"></span> Downvote</a></p>
                
              <?php endif; ?>
                
              </a>            
            
                </li>    
                      <hr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </ul>
  
    </div>
  
  </div>
  
  
  
  
  
  
  
 <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
  
  
  <div class="backtotop">
    <a class="btn-floating btn primary-bg">
      <i class="mdi mdi-chevron-up"></i>
    </a>
  </div>
  
  
  
  </div>


  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Desktop\New folder\htdocs\cwf3\cwf3\resources\views/home/poll.blade.php ENDPATH**/ ?>