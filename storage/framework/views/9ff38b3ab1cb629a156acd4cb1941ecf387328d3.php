
<?php $__env->startSection('admin'); ?>

	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">
          <div class="col-8">

<div class="box">
   <div class="box-header with-border">
     <h3 class="box-title">SubCategories Lists <span class="badge badge-pill badge-success "><?php echo e(count($subcategory)); ?></span></h3>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
       <div class="table-responsive">
         <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
         <div class="row">
         <div class="col-sm-12 col-md-6">
         <div class="dataTables_length" id="example1_length">
         
         </div></div>
         <div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"></div></div></div>
         <div class="row">
         <div class="col-sm-12">
         <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
           <thead>
               <tr>
               <th>Category</th>
               <th >SubCategory En</th>
               <th>SubCategory Hi</th>
               <th>Action</th>
               </tr>
           </thead>
           <tbody>
           <?php $__currentLoopData = $subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr role="row">
                   <td><?php echo e($item['category']['category_name_en']); ?></td>
                   <td><?php echo e($item->subcategory_name_en); ?></td>
                   <td><?php echo e($item->subcategory_name_hi); ?></td>
                   <td>
                   <a href="<?php echo e(route('subcategory.edit',$item->id)); ?>"class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i></a>
                   <a href="<?php echo e(route('subcategory.delete',$item->id)); ?>"class="btn btn-danger" title="Delete Data" id="delete"><i class="fa fa-trash"></i></a>
                   </td>
               </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tbody>
      
         </table></div></div><div class="row"><div class="col-sm-12 col-md-5"></div><div class="col-sm-12 col-md-7">
         <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
         </div></div></div></div>
       </div>
   </div>
   <!-- /.box-body -->
 </div>
 <!-- /.box -->          
</div>

<!-- Add Category  -->

<div class="col-4">

<div class="box">
   <div class="box-header with-border">
     <h3 class="box-title">Add SubCategory </h3>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
      <div class="table-responsive">
      <form method="post" action="<?php echo e(route('subcategory.store')); ?>" >
                    <?php echo csrf_field(); ?>
					  	
              <div class="form-group">
								<h5>Category <span class="text-danger">*</span></h5>
								<div class="controls">
									<select name="category_id"  class="form-control">
										<option value="" selected=""disabled="">Select Your Category</option>
										<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->category_name_en); ?></option>
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
									  <input type="text" name="subcategory_name_en" class="form-control" > 
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
									  <input type="text" name="subcategory_name_hi"  class="form-control" > 
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
							<input type="submit" value="Save" class="btn btn-rounded btn-primary mb-5">
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
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/backend/category/subcategory_view.blade.php ENDPATH**/ ?>