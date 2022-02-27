
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
				  <h3 class="box-title">Coupon List <span class="badge badge-pill badge-success "><?php echo e(count($coupons)); ?></span></h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Coupon Name </th>
								<th>Coupon Discount</th>
								<th>Validity </th>
								<th>Status </th>
								<th>Action</th>
								 
							</tr>
						</thead>
						<tbody>
	 <?php $__currentLoopData = $coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	 <tr>
		<td> <?php echo e($item->coupon_name); ?>  </td>
		<td> <?php echo e($item->coupon_discount); ?>% </td>
		<td width="25%">
            <?php echo e(Carbon\Carbon::parse($item->coupon_validity)->format('D, d F Y')); ?>

	    </td>

		<td>
		 	<?php if($item->coupon_validity >= Carbon\Carbon::now()->format('Y-m-d')): ?>
		 	<span class="badge badge-pill badge-success"> Valid </span>
		 	<?php else: ?>
           <span class="badge badge-pill badge-danger"> Invalid </span>
		 	<?php endif; ?>

		 </td>
		<td width="35%">
 <a href="<?php echo e(route('coupon.edit',$item->id)); ?>" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>
 <a href="<?php echo e(route('coupon.delete',$item->id)); ?>" class="btn btn-danger" title="Delete Data" id="delete">
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
<!--   ------------ Add Coupon Page -------- -->
          <div class="col-4">
			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Add Coupon </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">

 <form method="post" action="<?php echo e(route('coupon.store')); ?>" >
	 	<?php echo csrf_field(); ?>


	 <div class="form-group">
		<h5>Coupon Name  <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text"  name="coupon_name" class="form-control" > 
	 <?php $__errorArgs = ['coupon_name'];
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
	<div class="form-group">
		<h5>Coupon Discount(%) <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="coupon_discount" class="form-control" >
     <?php $__errorArgs = ['coupon_discount'];
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
	<div class="form-group">
		<h5>Coupon Validity Date  <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="date" name="coupon_validity" class="form-control" min="<?php echo e(Carbon\Carbon::now()->format('Y-m-d')); ?>">
     <?php $__errorArgs = ['coupon_validity'];
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
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/backend/coupon/view_coupon.blade.php ENDPATH**/ ?>