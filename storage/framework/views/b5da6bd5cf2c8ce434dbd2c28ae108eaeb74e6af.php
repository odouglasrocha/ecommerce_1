
<?php $__env->startSection('admin'); ?>

	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">
 

<!-- Add SubCategory  -->

<div class="col-12">

<div class="box">
   <div class="box-header with-border">
     <h3 class="box-title">Edit SubCategory </h3>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
      <div class="table-responsive">
      <form method="post" action="<?php echo e(route('subcategory.update')); ?>" >
                    <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e($subcategory->id); ?>" >
                        <div class="form-group">
								<h5>Category <span class="text-danger">*</span></h5>
								<div class="controls">
									<select name="category_id"  class="form-control">
										<option value="" selected="" disabled="" >Select Category</option>
										<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>" <?php echo e($category->id == $subcategory->category_id ? 'selected': ' '); ?> > <?php echo e($category->category_name_en); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
                                    <?php $__errorArgs = ['category_id'];
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
								   <h5>SubCategory Name English<span class="text-danger">*</span></h5>
								    <div class="controls">
									  <input type="text" name="subcategory_name_en" value="<?php echo e($subcategory->subcategory_name_en); ?>" class="form-control" > 
                                    <?php $__errorArgs = ['subcategory_name_en'];
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
								   <h5>SubCategory Name Hindi<span class="text-danger">*</span></h5>
								    <div class="controls">
									  <input type="text" name="subcategory_name_hi" value="<?php echo e($subcategory->subcategory_name_hi); ?>"  class="form-control" > 
                                      <?php $__errorArgs = ['subcategory_name_hi'];
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
							<button type="submit" class="btn btn-rounded btn-primary mb-5">Save</button>
						</div>
					</form>
      </div> 
   </div>
   <!-- /.box-body -->
 </div>
 <!-- /.box -->          
</div>
</div>




		
		</section>
		<!-- /.content -->
	  
	  </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/backend/category/subcategory_edit.blade.php ENDPATH**/ ?>