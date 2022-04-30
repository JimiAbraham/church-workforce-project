


<?php $__env->startSection('content'); ?>


<div class="content-area">

    <div class="pagehead-bg   primary-bg" >
      </div> 
  
    <div class="container has-pagehead is-pagetitle">
      <div class="section">
        <h5 class="pagetitle">COZA ILORIN WORFORCE</h5>
            </div>
    </div>
    
  
    <?php if(session('message')): ?>
    <div class="alert alert-success" role="alert">
      <h4>  <?php echo e(session('message')); ?> </h4>
    </div>
<?php endif; ?>
  

  <?php if( empty(auth()->user()->department)  ): ?>

          <form action="<?php echo e(route('dashboard.updateD')); ?>" method="POST">
            <?php echo csrf_field(); ?>
          
          <div id="modal1390979290" class="modal  default-open">
            <div class="modal-content ">
                  <h4 class="bot-20 sec-tit"><?php echo e(auth()->user()->name); ?> Enter Your Department for verification</h4>
                  
              <div class="row">
                <div class="input-field col s12">
                    <i class="mdi mdi-face prefix"></i>
                    <select name="department">
                        <option >Select Department</option>
                        <option value="Media">Media</option>
                        <option value="Sparkles">Sparkles</option>
                        <option value="Ushering">Ushering</option>
                        <option value="Protocol">Protocol</option>
                        <option value="QC">QC</option>
                        <option value="PRU">PRU</option>
                        <option value="Avalanche">Avalanche</option>


                    </select>
                </div>
          </div>
          
        
          
          <div class="row bot-0">
            
          <button type="submit" class="waves-effect waves-light btn bg-primary">Submit&nbsp; &nbsp;</button>
          
          </div>  </div>
            
            
          </div>

          </form>
          
    
  <?php elseif( auth()->user()->status == 1 ): ?>
  
  <div class="col s12 pad-5"><h5 class="bot-20 sec-tit  ">Celebrate you <?php echo e(auth()->user()->name); ?></h5>
                  <div class="card gray darken-1">
                    <div class="row ">
                      <div class="col s12 pad-1"><h5 class="bot-20 sec-tit  ">Information</h5>              
                            <div class="card-panel red lighten-2">
                          <span class="white-text">Your HOD is yet to verify that you are in <?php echo e(auth()->user()->department); ?> department.</span>
                        </div>
                    </div>
                    </div>
    
  </div>

</div>


  <?php else: ?>
       
          
            
        
        <div class="container over">
          <div class="section">
        
            <div class="row settings-row " >
            <div class="col s10 offset-s1 ">
            <div class="setting-box  center ">                 
                          <div class="row ">
                              <div class="col s12 pad-0">
                  <ul class="collapsible ">
              
                  <li>
                  <div class="collapsible-header "><i style="text-align: center" class="mdi mdi-account"></i > Account Settings </div>
                  <div class="collapsible-body "><span>
                      <div class="card-panel bg-primary invoice-to">
                          <h5 class="white-text top-0">See your profile</h5>
                        </div>
                    
                        <div class="row ">
                                    <div class="col s12 pad-0"><h5 class="bot-20 sec-tit  "><?php echo e(auth()->user()->department); ?> Department</h5>

                                      <table class="collection invoice-item transparent">
                                        <tr>
                                          <th>Phone Number</th>
                                          <th><button class="waves-effect waves-light btn-large bg-primary"><?php echo e(auth()->user()->phone); ?></button></th>
                                        </tr>
                                        <tr>
                                          <th>Gender</th>
                                          <th><button class="waves-effect waves-light btn-large bg-primary"><?php echo e(auth()->user()->gender); ?></button></th>
                                        </tr>
                                        <tr>
                                          <th>Marital Status</th>
                                          <th><button class="waves-effect waves-light btn-large bg-primary"><?php echo e(auth()->user()->marital); ?></button></th>
                                        </tr>
                                        <tr>
                                          <th>DOB</th>
                                          <th><button class="waves-effect waves-light btn-large bg-primary"><?php echo e(auth()->user()->DOB); ?></button></th>
                                        </tr>
                                        <tr>
                                          <th>Gender</th>
                                          <th><button class="waves-effect waves-light btn-large bg-primary"><?php echo e(auth()->user()->gender); ?></button></th>
                                        </tr>

                                      </table>
                        
                   <hr>
                    
                        <div class="center">
                          <a href="<?php echo e(route('dashboard.edit')); ?>" class="waves-effect waves-light btn-large bg-primary btn modal-trigger">Update Profile</a> &nbsp;
                          
                        </div>




              
                        </div>  
                  
                  </span>
                  </div>
                </li>
                
              </ul>
              
              
                  </div>
                  </div>

              
            </div>
          </div>
            
<?php if( auth()->user()->status == 3 ): ?>

<div class="col s6 ">
  <div class="setting-box  center ">
              <a href="<?php echo e(route('HodApproval')); ?>">
                <i class="mdi mdi-security "></i>
              <h6>Approve Member</h6>
            </a>
  </div>
</div>
  <div class="col s6 ">
  <div class="setting-box  center ">
              <a href="<?php echo e(route('message')); ?>">
                <i class="mdi mdi-note-plus-outline "></i>
              <h6>Say Something</h6>
            </a>
  </div>
</div>
  <div class="col s6 ">
  <div class="setting-box  center ">
              <a href="<?php echo e(route('dashboard.poll')); ?>">
                <i class="mdi mdi-poll"></i>
              <h6>Poll</h6>
            </a>
  </div>
</div>


<div class="col s6 ">
  <div class="setting-box  center ">
              <a href="<?php echo e(route('HodMembers')); ?>">
                <i class="mdi mdi-human-male-female
                "></i>
              <h6>Departmental Members</h6>
            </a>
  </div>
</div>


  
<?php else: ?>


<div class="col s6 ">
<div class="setting-box  center ">
    <a href="<?php echo e(route('dashboard.poll')); ?>">
      <i class="mdi mdi-poll"></i>
    <h6>Poll</h6>
  </a>
</div>
</div>
<div class="col s6 ">
<div class="setting-box  center ">
    <a href="<?php echo e(route('status')); ?>">
      <i class="mdi mdi-approval"></i>
    <h6>Status</h6>
  </a>
</div>
</div>
<div class="col s6 ">
<div class="setting-box  center ">
    <a href="<?php echo e(route('message')); ?>">
      <i class="mdi mdi-note-plus-outline "></i>
    <h6>Say Something</h6>
  </a>
</div>
</div>



<div class="col s6 ">
  <div class="setting-box  center ">
      
        <a href="">

        <i class="mdi mdi-flag "></i>
      <h6>Voting</h6>
    </a>
  </div>
  </div>

  
<?php endif; ?>

            
           
         

          </div>
        
        
        
          </div>
        </div>
        
  
  <?php endif; ?>
  
  
  
  <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
  
  
  
  <div class="backtotop">
    <a class="btn-floating btn primary-bg">
      <i class="mdi mdi-chevron-up"></i>
    </a>"" 
  </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Desktop\New folder\htdocs\cwf3\cwf3\resources\views/home/dashboard.blade.php ENDPATH**/ ?>