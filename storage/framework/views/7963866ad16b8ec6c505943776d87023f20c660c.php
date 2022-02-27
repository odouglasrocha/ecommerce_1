

<?php $__env->startSection('admin'); ?>

<div class="container mt-3">
<div class="row">
<div class="col-12">

<div class="box">
   <div class="box-header with-border">
     <h3 class="box-title">Edit District </h3>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
      <div class="table-responsive">
      <form method="post" action="<?php echo e(route('district.update',$district->id)); ?>" >
        <?php echo csrf_field(); ?>

                            <input type="hidden" name="id" value="<?php echo e($district->id); ?>">
                                 

        <div class="form-group">
            <h5>Select Division <span class="text-danger">*</span></h5>
            <div class="controls">
                <select name="division_id"  class="form-control">
                    <option value="" selected=""disabled="">Select Your Division</option>
                    <?php $__currentLoopData = $division; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($item->id); ?>" <?php echo e($item->id == $district->division_id ? 'selected': ''); ?> ><?php echo e($item->division_name); ?></option>                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php $__errorArgs = ['division_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class=" text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <div class="help-block"></div></div>
	    </div>                            
	 <div class="form-group">
		<h5>District Name  <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text"  name="district_name" value="<?php echo e($district->district_name); ?>" class="form-control" > 
	 <?php $__errorArgs = ['district_name'];
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
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/backend/ship/district/edit_district.blade.php ENDPATH**/ ?>