
<?php $__env->startSection('admin'); ?>
  <!-- Content Wrapper. Contains page content -->
  
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 
		<!-- Main content -->
		<section class="content">
		  <div class="row">
			   
		 
			<div class="col-12">
			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Pending Reviews</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Summary </th>
								<th>Comment</th>
								<th>User </th>
								<th>Product </th>
                                <th>Status </th>
								<th>Action</th>
								 
							</tr>
						</thead>
						<tbody>
	 <?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	 <tr>
		<td> <?php echo e($item->summary); ?>  </td>
		<td> <?php echo e($item->comment); ?> </td>
        <td> <?php echo e($item->user->name); ?> </td>
        <td> <?php echo e($item->product->product_name_en); ?> </td>
        <td> 
            <?php if($item->status==0): ?>
             <span class="badge badge-pill badge-primary">Pending </span>
             <?php elseif($item->status==1): ?>
             <span class="badge badge-pill badge-success">Success </span>
            <?php endif; ?>    
        </td>
		<td width="20%">
            <a href="<?php echo e(route('review.approve',$item->id)); ?>" class="btn btn-danger">Approve</a>
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

        
 
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/backend/review/pending_review.blade.php ENDPATH**/ ?>