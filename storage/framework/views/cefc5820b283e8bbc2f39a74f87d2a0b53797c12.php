

<?php $__env->startSection('admin'); ?>

<div class="container mt-3">
<div class="row">
<div class="col-12">

<div class="box">
   <div class="box-header with-border">
     <h3 class="box-title">Edit Division </h3>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
      <div class="table-responsive">
      <form method="post" action="<?php echo e(route('division.update',$divisions->id)); ?>" >
        <?php echo csrf_field(); ?>

                            <input type="hidden" name="id" value="<?php echo e($divisions->id); ?>">
                                 

	 <div class="form-group">
		<h5>Division Name  <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text"  name="division_name" value="<?php echo e($divisions->division_name); ?>" class="form-control" > 
	 <?php $__errorArgs = ['division_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
	 <span class="text-danger"><?php echo e($message); ?></span>
	 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
	</div>
	</div>
	</div> 
						
					
		<div class="text-xs-right">
			<input type="submit"  value="Update" class="btn btn-rounded btn-primary mb-5">
		</div>
	  </form>
      </div> 
   </div>
   <!-- /.box-body -->
 </div>
 <!-- /.box -->          
</div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/backend/ship/division/edit_division.blade.php ENDPATH**/ ?>