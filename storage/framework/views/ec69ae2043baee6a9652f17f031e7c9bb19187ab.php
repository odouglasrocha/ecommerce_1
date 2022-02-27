

<?php $__env->startSection('admin'); ?>

<div class="container mt-3">
<div class="row">
<div class="col-12">

<div class="box">
   <div class="box-header with-border">
     <h3 class="box-title">Edit Slider </h3>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
      <div class="table-responsive">
      <form method="post" action="<?php echo e(route('slider.update',$slider->id)); ?>"  enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

                         <input type="hidden" name="id" value="<?php echo e($slider->id); ?>">
                         <input type="hidden" name="old_image" value="<?php echo e($slider->slider_img); ?>">
                         
                                 <div class="form-group">
								   <h5>Slider Title<span class="text-danger">*</span></h5>
								    <div class="controls">
									  <input type="text" name="title" value="<?php echo e($slider->title); ?>" class="form-control" > 
                                    <?php $__errorArgs = ['title'];
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
								   <h5>Description<span class="text-danger">*</span></h5>
								    <div class="controls">
									  <input type="text" name="description" value="<?php echo e($slider->description); ?>"  class="form-control" > 
                                      <?php $__errorArgs = ['description'];
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
								   <h5>Slider Image<span class="text-danger">*</span></h5>
								    <div class="controls">
									  <input type="file" name="slider_img"  class="form-control" > 
                                      <?php $__errorArgs = ['slider_img'];
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
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/backend/slider/slider_edit.blade.php ENDPATH**/ ?>