
<?php $__env->startSection('admin'); ?>

	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">
          <div class="col-8">

<div class="box">
   <div class="box-header with-border">
     <h3 class="box-title">Brand Lists <span class="badge badge-pill badge-success "><?php echo e(count($brands)); ?></span></h3>
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
               <th>Brand En</th>
               <th>Brand Hi</th>
               <th>Image</th>
               <th>Action</th>
               </tr>
           </thead>
           <tbody>
           <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr role="row">
                   <td class="sorting_1"><?php echo e($item->brand_name_en); ?> </td>
                   <td><?php echo e($item->brand_name_hi); ?></td>
                   <td><img src="<?php echo e(asset($item->brand_image)); ?>" style="width:70px;height:70px;"></td>
                   <td>
                   <a href="<?php echo e(route('brand.edit',$item->id)); ?>"class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i></a>
                   <a href="<?php echo e(route('brand.delete',$item->id)); ?>"class="btn btn-danger" title="Delete Data" id="delete"><i class="fa fa-trash"></i></a>
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



<div class="col-4">

<div class="box">
   <div class="box-header with-border">
     <h3 class="box-title">Add Brand </h3>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
      <div class="table-responsive">
      <form method="post" action="<?php echo e(route('brand.store')); ?>"  enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
					  	
                         
                                 <div class="form-group">
								   <h5>Brand Name English<span class="text-danger">*</span></h5>
								    <div class="controls">
									  <input type="text" name="brand_name_en" class="form-control" > 
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
									  <input type="text" name="brand_name_hi"  class="form-control" > 
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
							<input type="submit" value="save" class="btn btn-rounded btn-primary mb-5">
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
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/backend/brand/brand_view.blade.php ENDPATH**/ ?>