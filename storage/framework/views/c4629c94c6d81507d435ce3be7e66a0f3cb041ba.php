

<?php $__env->startSection('admin'); ?>

<div class="container mt-3">
<div class="row">
<div class="col-12">

<div class="box">
   <div class="box-header with-border">
     <h3 class="box-title">Edit Brand </h3>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
      <div class="table-responsive">
      <form method="post" action="<?php echo e(route('brand.update',$brand->id)); ?>"  enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

                         <input type="hidden" name="id" value="<?php echo e($brand->id); ?>">
                         <input type="hidden" name="old_image" value="<?php echo e($brand->brand_image); ?>">
                         
                                 <div class="form-group">
								   <h5>Brand Name English<span class="text-danger">*</span></h5>
								    <div class="controls">
									  <input type="text" name="brand_name_en" value="<?php echo e($brand->brand_name_en); ?>" class="form-control" > 
                                    <?php $__errorArgs = ['brand_name_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class=" text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
							     </div>
                                 <div class="form-group">
								   <h5>Brand Name Hindi<span class="text-danger">*</span></h5>
								    <div class="controls">
									  <input type="text" name="brand_name_hi" value="<?php echo e($brand->brand_name_hi); ?>"  class="form-control" > 
                                      <?php $__errorArgs = ['brand_name_hi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class=" text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
							     </div>
                                 <div class="form-group">
								   <h5>Brand Image<span class="text-danger">*</span></h5>
								    <div class="controls">
									  <input type="file" name="brand_image"  class="form-control" > 
                                      <?php $__errorArgs = ['brand_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class=" text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
							     </div>
                          
                 
						
					
		<div class="text-xs-right">
    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="update">
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
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/backend/brand/brand_edit.blade.php ENDPATH**/ ?>