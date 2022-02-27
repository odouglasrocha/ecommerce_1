
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo e(asset('backend/images/favicon.ico')); ?>">

    <title> Admin - Dashboard</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="<?php echo e(asset('backend/css/vendors_css.css')); ?>">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="<?php echo e(asset('backend/css/style.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('backend/css/skin_color.css')); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     
  </head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">

 
   <?php echo $__env->make('admin.body.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <?php echo $__env->make('admin.body.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php echo $__env->yieldContent('admin'); ?>
  </div>
  
  <!-- /.content-wrapper -->
 

  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
	
	<?php echo $__env->make('admin.body.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<!-- ./wrapper -->
  	
	 
	<!-- Vendor JS -->
	<script src="<?php echo e(asset('backend/js/vendors.min.js')); ?>"></script>
  <script src="<?php echo e(asset('../assets/icons/feather-icons/feather.min.js')); ?>"></script>	
	<script src="<?php echo e(asset('../assets/vendor_components/easypiechart/dist/jquery.easypiechart.js')); ?>"></script>
	<script src="<?php echo e(asset('../assets/vendor_components/apexcharts-bundle/irregular-data-series.js')); ?>"></script>
	<script src="<?php echo e(asset('../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')); ?>"></script>
	
	<!--  Admin App -->
	<script src="<?php echo e(asset('backend/js/template.js')); ?>"></script>
	<script src="<?php echo e(asset('backend/js/pages/dashboard.js')); ?>"></script>
  <!-- Tags Input -->
  <script src="<?php echo e(asset('../assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js')); ?>"></script>
	<script src="<?php echo e(asset('../assets/vendor_components/datatable/datatables.min.js')); ?>"></script>
	<script src="<?php echo e(asset('backend/js/pages/data-table.js')); ?>"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="<?php echo e(asset('backend/js/sweatalert.js')); ?>"></script>
  <!--Ck Editor -->
  <script src="<?php echo e(asset('backend/js/pages/editor.js')); ?>"></script>
  <script src="<?php echo e(asset('../assets/vendor_components/ckeditor/ckeditor.js')); ?>"></script>
	<script src="<?php echo e(asset('../assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js')); ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
 <?php if(Session::has('message')): ?>
 var type = "<?php echo e(Session::get('alert-type','info')); ?>"
 switch(type){
    case 'info':
    toastr.info(" <?php echo e(Session::get('message')); ?> ");
    break;

    case 'success':
    toastr.success(" <?php echo e(Session::get('message')); ?> ");
    break;

    case 'warning':
    toastr.warning(" <?php echo e(Session::get('message')); ?> ");
    break;

    case 'error':
    toastr.error(" <?php echo e(Session::get('message')); ?> ");
    break; 
 }
 <?php endif; ?> 
</script>	
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/admin/admin_master.blade.php ENDPATH**/ ?>