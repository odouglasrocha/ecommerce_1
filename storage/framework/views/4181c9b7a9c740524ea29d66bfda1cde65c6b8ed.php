
<?php $__env->startSection('admin'); ?>
  <!-- Content Wrapper. Contains page content -->
  
	  <div class="container-full">
		<!-- Content Header (Page header) -->
        <div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Order Details</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Order Details</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- Main content -->
		<section class="content">
		  <div class="row">
            <div class="col-md-6 col-12">
				<div class="box box-bordered border-primary">
				  <div class="box-header with-border">
					<h4 class="box-title"><strong>Shipping Details</strong></h4>
				  </div>
                  <table class="table">
                            <tr>
                                <th>Shipping Name : </th>
                                <th><?php echo e($order->name); ?> </th>
                            </tr>
                            <tr>
                                <th>Shipping Phone : </th>
                                <th><?php echo e($order->phone); ?> </th>
                            </tr>
                            <tr>
                                <th>Shipping Email : </th>
                                <th><?php echo e($order->email); ?> </th>
                            </tr>
                            <tr>
                                <th>Division : </th>
                                <th><?php echo e($order->division->division_name); ?> </th>
                            </tr>
                            <tr>
                                <th>District : </th>
                                <th><?php echo e($order->district->district_name); ?></th>
                            </tr>
                            <tr>
                                <th>State : </th>
                                <th><?php echo e($order->state->state_name); ?></th>
                            </tr>
                            <tr>
                                <th>Post Code : </th>
                                <th><?php echo e($order->post_code); ?></th>
                            </tr>                           
                             <tr>
                                <th>Order Date : </th>
                                <th><?php echo e($order->order_date); ?></th>
                            </tr>  
                        </table>
				</div>
			</div>  

            <div class="col-md-6 col-12">
				<div class="box box-bordered border-primary">
				  <div class="box-header with-border">
					<h4 class="box-title"><strong>Order Details</strong> <span  class="text-danger">Invoice: <?php echo e($order->invoice_no); ?></span></h4>
				  </div>
                  <table class="table">
                            <tr>
                                <th>Name : </th>
                                <th><?php echo e($order->user->name); ?> </th>
                            </tr>
                            <tr>
                                <th>Phone : </th>
                                <th><?php echo e($order->user->phone); ?> </th>
                            </tr>
                            <tr>
                                <th>Email : </th>
                                <th><?php echo e($order->user->email); ?> </th>
                            </tr>
                            <tr>
                                <th>Payment Type : </th>
                                <th><?php echo e($order->payment_method); ?> </th>
                            </tr>
                            <tr>
                                <th>Tranx Id : </th>
                                <th><?php echo e($order->transaction_id); ?></th>
                            </tr>
                            <tr>
                                <th>Invoice : </th>
                                <th class="text-danger"><?php echo e($order->invoice_no); ?></th>
                            </tr>
                            <tr>
                                <th>Order Total : </th>
                                <th>₹<?php echo e($order->amount); ?></th>
                            </tr>                           
                             <tr>
                                <th>Order  : </th>
                                <th><span class="badge badge-pill badge-warning" style="background:#12cca7;"><?php echo e($order->status); ?></span></th>
                            </tr>  
                            <tr>
                                <th></th>
                                <th>
                                    <?php if($order->status== 'Pending'): ?>
                                    <a href="<?php echo e(route('pending-confirm',$order->id)); ?>" id="confirm" class="btn btn-block btn-success">Confirm Order</a>
                                    <?php elseif($order->status == 'Confirm'): ?>
                                    <a href="<?php echo e(route('confirm-processing',$order->id)); ?>" id="processing" class="btn btn-block btn-success">Processing Order</a>
                                    <?php elseif($order->status == 'Processing'): ?>
                                    <a href="<?php echo e(route('processing-picked',$order->id)); ?>" id="picked" class="btn btn-block btn-success">Picked Order</a>
                                    <?php elseif($order->status == 'Picked'): ?>
                                    <a href="<?php echo e(route('picked-shipped',$order->id)); ?>" id="shipped" class="btn btn-block btn-success">Shipped Order</a>
                                    <?php elseif($order->status == 'Shipped'): ?>
                                    <a href="<?php echo e(route('shipped-delivered',$order->id)); ?>" id="delivered" class="btn btn-block btn-success">Delivered Order</a>
                            
                                    <?php endif; ?>
                                </th>
                            </tr>  
           
                            <tr>
                                <th>Order Date : </th>
                                <th><?php echo e($order->order_date); ?></th>
                            </tr>  
                        </table>
				</div>
			</div>  


            <div class="col-md-12 col-12">
				<div class="box box-bordered border-primary">
				  <div class="box-header with-border">
				  </div>
                  <table  class="table">
                            <thead>
                                <tr>
                                <td class="col-md-1">
                                        <label for="">Image</label>
                                    </td>
                                    <td class="col-md-3">
                                        <label for="">Product Name</label>
                                    </td>
                                    <td class="col-md-2">
                                        <label for="">Product Code</label>
                                    </td>
                                    <td class="col-md-2">
                                        <label for="">Color</label>
                                    </td>
                                    <td class="col-md-2">
                                        <label for="">Size</label>
                                    </td>
                                    <td class="col-md-2">
                                        <label for="">Quantity</label>
                                    </td>
                                    <td class="col-md-2">
                                        <label for="">Price</label>
                                    </td>
                                </tr>
                                    
                                </thead>
                            <tbody >
                                
                                <?php $__currentLoopData = $orderItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="col-md-1">
                                        <label for=""><img src="<?php echo e(asset($item->product->product_thumbnil)); ?>" style="width:50px;height:50px;"></label>
                                    </td>
                                    <td class="col-md-3">
                                        <label for=""><?php echo e($item->product->product_name_en); ?></label>
                                    </td>
                                    <td class="col-md-2">
                                        <label for=""><?php echo e($item->product->product_code); ?></label>
                                    </td>
                                    <td class="col-md-2">
                                        <label for=""><?php echo e($item->color); ?></label>
                                    </td>
                                    <td class="col-md-2">
                                        <label for=""><?php echo e($item->size); ?></label>
                                    </td>
                                    <td class="col-md-2">
                                        <label for=""><?php echo e($item->qty); ?></label>
                                    </td>
                                    <td class="col-md-2">
                                        <label for="">₹<?php echo e($item->price); ?> ₹(<?php echo e($item->price * $item->qty); ?>)</label>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
				</div>
			</div>  
 


            </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/backend/orders/pending_orders_details.blade.php ENDPATH**/ ?>