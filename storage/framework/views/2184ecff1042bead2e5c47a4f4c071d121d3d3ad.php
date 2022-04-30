


<?php $__env->startSection('content'); ?>


<div class="content-area">

  <div class="addbutton">
    <a href="<?php echo e(route('message')); ?>" class="waves-effect waves-light btn-floating btn primary-bg z-depth-3 modal-trigger ">
      <i class="mdi mdi-note-plus-outline"></i>
    </a>
  </div>

    <div class="pagehead-bg   primary-bg" >
      </div> 
  
    <div class="container has-pagehead is-pagetitle">
      <div class="section">
        <h5 class="pagetitle">Got an observation, suggestion or remark?</h5>


        <div id="modal1431746765" class="modal  bottom-sheet default-open">
            <div class="modal-content ">
                  <h4 class="bot-20 sec-tit">Send Message</h4>
                  
                  <?php if( $messageCount > 0): ?>
                  <h4>Total Message sent: <?php echo e($messageCount); ?> <a   href="<?php echo e(route('dashboard.view-message')); ?>"><button style="margin-bottom: 15px;" class="waves-effect waves-light btn bg-primary">View Messages</button></a>
                  </h4>
                  <div class="row">
                    <div class="">
                    
                    </div>
                  </div>
                    
                  <?php endif; ?>
           <form action="<?php echo e(route('dashboard.sendMessage')); ?>" method="POST">
             <?php echo csrf_field(); ?>
          <div class="row">
            <div class="input-field col s12 textarea">
              <i class="mdi mdi-file-outline prefix"></i>
              <textarea id="textarea-prefix"  name="body" class="materialize-textarea"></textarea>
              <label for="textarea-prefix">Out of the abundance of the heart the mouth speaketh....</label>
            </div>
          </div>
          
          
          <div class="row">
            <div class="">
              <input name="image" type="file" class="waves-effect waves-light btn btn-secondary">Upload media (if applicable)
            </div>
          </div>
          
          
          <div class="row">
            <div class="">
              <button type="submit" class="waves-effect waves-light btn bg-primary">Submit Comment</button>
            
            </div>
          </div>
           </form>
        
        </div>
            
            </div>
           
    </div>
    
  
  
 
        
      </div>
  
  
  
  
  
  <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
  
  
  </div>


  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Desktop\New folder\htdocs\cwf3\cwf3\resources\views/home/send-message.blade.php ENDPATH**/ ?>