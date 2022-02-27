
<?php $__env->startSection('admin'); ?>
  <!-- Content Wrapper. Contains page content -->
  
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 
		<!-- Main content -->
		<section class="content">
		  <div class="row">
			   
		 
			<div class="col-8">
			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Division List</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Division Name </th>
								<th>Action</th>
								 
							</tr>
						</thead>
						<tbody>
	 <?php $__currentLoopData = $divisions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	 <tr>
		<td> <?php echo e($item->division_name); ?>  </td>
    	<td width="35%">
            <a href="<?php echo e(route('division.edit',$item->id)); ?>" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>
            <a href="<?php echo e(route('division.delete',$item->id)); ?>" class="btn btn-danger" title="Delete Data" id="delete">
                <i class="fa fa-trash"></i></a>
		</td>
							 
	 </tr>
	  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
						 
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			          
			</div>
			<!-- /.col -->
<!--   ------------ Add Division Page -------- -->
          <div class="col-4">
			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Add Division </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">

 <form method="post" action="<?php echo e(route('division.store')); ?>" >
	 	<?php echo csrf_field(); ?>


	 <div class="form-group">
		<h5>Division Name  <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text"  name="division_name" class="form-control" > 
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
					 
			 <div class="text-xs-right">
	<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add New">					 
						</div>
					</form>
					  
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box --> 
			</div>
 
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/backend/ship/division/view_divisions.blade.php ENDPATH**/ ?>