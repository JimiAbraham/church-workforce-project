
<?php echo $__env->make('layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo toastr_css(); ?>


<!-- END HEAD -->

<!-- BEGIN BODY -->


<body class=" menu-full  isfullscreen  html"  data-header="light" data-footer="dark"  data-header_align="center"  data-menu_type="left" data-menu="light" data-menu_icons="on" data-footer_type="left" data-site_mode="light" data-footer_menu="show" data-footer_menu_style="light"  >
    <div class="preloader-background">
      <div class="preloader-wrapper">
        <div class="loader">
        </div>
      </div>
    </div>
  


  <?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  
<!--.content-area-->

<?php echo $__env->yieldContent('content'); ?>

</body>

<?php echo $__env->make('layout.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo toastr_js(); ?>
<?php echo app('toastr')->render(); ?>
</html><?php /**PATH C:\Users\USER\Desktop\New folder\htdocs\cwf3\cwf3\resources\views/layout/app.blade.php ENDPATH**/ ?>