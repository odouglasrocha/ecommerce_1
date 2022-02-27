
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
				  <h3 class="box-title">Shipped Orders List</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Date </th>
								<th>Invoice</th>
								<th>Amount </th>
								<th>Payment </th>
                                <th>Status </th>
								<th>Action</th>
								 
							</tr>
						</thead>
						<tbody>
	 <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	 <tr>
		<td> <?php echo e($item->order_date); ?>  </td>
		<td> <?php echo e($item->invoice_no); ?> </td>
        <td> ₹<?php echo e($item->amount); ?> </td>
        <td> <?php echo e($item->payment_method); ?> </td>
        <td> <span class="badge badge-pill badge-primary"><?php echo e($item->status); ?> </span></td>
		<td width="30%">
            <a href="<?php echo e(route('pending.orders.details',$item->id)); ?>" class="btn btn-info" title="Edit Data"><i class="fa fa-eye"></i> </a>
			<a href="<?php echo e(route('invoice.download',$item->id)); ?>" class="btn btn-danger" title="Invoice Download" target="blank">
 	<i class="fa fa-download"></i></a>
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
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/backend/orders/shipped_orders.blade.php ENDPATH**/ ?>