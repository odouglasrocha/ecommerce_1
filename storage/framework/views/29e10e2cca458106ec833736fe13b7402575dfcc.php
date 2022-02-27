
<?php $__env->startSection('admin'); ?>

	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">
          <div class="col-8">

<div class="box">
   <div class="box-header with-border">
     <h3 class="box-title">Slider Lists</h3>
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
               <th>Slider Image </th>
               <th>Title</th>
               <th>Description</th>
               <th>Status</th>
               <th>Action</th>
               </tr>
           </thead>
           <tbody>
           <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr role="row">
                   <td><img src="<?php echo e(asset($item->slider_img)); ?>" style="width:70px;height:70px;"></td>
                   <td>
                   <?php if($item->title==NULL): ?>
                      <span class="badge badge-pill badge-danger">No Title</span>
                      <?php else: ?>
                      <?php echo e($item->title); ?>

                      <?php endif; ?>
                   </td>
                   <td><?php echo e($item->description); ?></td>
                   <td>
                      <?php if($item->status==1): ?>
                      <span class="badge badge-pill badge-success">Active</span>
                      <?php else: ?>
                      <span class="badge badge-pill badge-danger">InActive</span>
                      <?php endif; ?>
                    </td>
                    <td width="30%">
                
                <a href="<?php echo e(route('slider.edit',$item->id)); ?>"class="btn btn-info btn-sm" title="Edit Data"><i class="fa fa-pencil"></i></a>
                <a href="<?php echo e(route('slider.delete',$item->id)); ?>"class="btn btn-danger btn-sm" title="Delete Data" id="delete"><i class="fa fa-trash"></i></a>
                <?php if($item->status==1): ?>
                <a href="<?php echo e(route('slider.inactive',$item->id)); ?>"class="btn btn-danger btn-sm" title="Inactive Now"><i class="fa fa-arrow-down"></i></a>
                <?php else: ?>
                <a href="<?php echo e(route('slider.active',$item->id)); ?>"class="btn btn-success btn-sm" title="Active Now"><i class="fa fa-arrow-up"></i></a>
                <?php endif; ?>
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
     <h3 class="box-title">Add Slider </h3>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
      <div class="table-responsive">
      <form method="post" action="<?php echo e(route('slider.store')); ?>"  enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
					  	
                         
                                 <div class="form-group">
								   <h5>Slider Title<span class="text-danger">*</span></h5>
								    <div class="controls">
									  <input type="text" name="title" class="form-control" > 
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
								   <h5>Slider Description <span class="text-danger">*</span></h5>
								    <div class="controls">
									  <input type="text" name="description"  class="form-control" > 
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
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/backend/slider/slider_view.blade.php ENDPATH**/ ?>