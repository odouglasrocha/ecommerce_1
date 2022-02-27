
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
				  <h3 class="box-title">All Admin Users</h3>
                  <a href="<?php echo e(route('add-admin')); ?>" class="btn btn-success" style="float:right;">Add Admin User</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Image </th>
								<th>Name</th>
								<th>Email </th>
								<th>Phone </th>
                                <th>Access </th>
								<th>Action</th>
								 
							</tr>
						</thead>
						<tbody>
	 <?php $__currentLoopData = $adminuser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	 <tr>
		<td> <img src="<?php echo e(asset($item->profile_photo_path)); ?>" alt="" style="width:47px;">  </td>
		<td> <?php echo e($item->name); ?> </td>
        <td> <?php echo e($item->email); ?> </td>
        <td> <?php echo e($item->phone); ?> </td>
        <td width="30%">
			
			<?php if($item->brand == 1): ?>
			<span class="badge btn-primary">Brand</span>
			<?php else: ?>
			<?php endif; ?>

			<?php if($item->category == 1): ?>
			<span class="badge btn-secondary">Category</span>
			<?php else: ?>
			<?php endif; ?>


			<?php if($item->product == 1): ?>
			<span class="badge btn-success">Product</span>
			<?php else: ?>
			<?php endif; ?>


			<?php if($item->slider == 1): ?>
			<span class="badge btn-danger">Slider</span>
			<?php else: ?>
			<?php endif; ?>


			<?php if($item->coupons == 1): ?>
			<span class="badge btn-warning">Coupons</span>
			<?php else: ?>
			<?php endif; ?>


			<?php if($item->shipping == 1): ?>
			<span class="badge btn-info">Shipping</span>
			<?php else: ?>
			<?php endif; ?>


			<?php if($item->blog == 1): ?>
			<span class="badge btn-light">Blog</span>
			<?php else: ?>
			<?php endif; ?>


			<?php if($item->setting == 1): ?>
			<span class="badge btn-dark">Setting</span>
			<?php else: ?>
			<?php endif; ?>


			<?php if($item->returnorder == 1): ?>
			<span class="badge btn-primary">Return Order</span>
			<?php else: ?>
			<?php endif; ?>


			<?php if($item->review == 1): ?>
			<span class="badge btn-secondary">Review</span>
			<?php else: ?>
			<?php endif; ?>

			<?php if($item->blog_review == 1): ?>
			<span class="badge btn-light">Blog Review</span>
			<?php else: ?>
			<?php endif; ?>


			<?php if($item->orders == 1): ?>
			<span class="badge btn-success">Orders</span>
			<?php else: ?>
			<?php endif; ?>

			<?php if($item->stock == 1): ?>
			<span class="badge btn-danger">Stock</span>
			<?php else: ?>
			<?php endif; ?>

			<?php if($item->reports == 1): ?>
			<span class="badge btn-warning">Reports</span>
			<?php else: ?>
			<?php endif; ?>

			<?php if($item->allusers == 1): ?>
			<span class="badge btn-info">Alluser</span>
			<?php else: ?>
			<?php endif; ?>

			<?php if($item->adminuserrole == 1): ?>
			<span class="badge btn-dark">Adminuserrole</span>
			<?php else: ?>
			<?php endif; ?>


	
		</td>
		<td width="20%">
            <a href="<?php echo e(route('edit.admin.user',$item->id)); ?>" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>
            <a href="<?php echo e(route('delete.admin.user',$item->id)); ?>" class="btn btn-danger" title="Delete" id="delete"><i class="fa fa-trash"></i></a>
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
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/backend/role/admin_role_all.blade.php ENDPATH**/ ?>