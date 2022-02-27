
<?php $__env->startSection('content'); ?>

<?php $__env->startSection('title'); ?>
Cash On Delivery
<?php $__env->stopSection(); ?>

<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Cash On Delivery</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content">
	<div class="container">
		<div class="checkout-box ">
			<div class="row">

				<div class="col-md-6">
					<!-- checkout-progress-sidebar -->
<div class="checkout-progress-sidebar ">
	<div class="panel-group">
		<div class="panel panel-default">
			<div class="panel-heading">
		    	<h4 class="unicase-checkout-title">Your Shopping Amount</h4>
		    </div>
		    <div class="">
				<ul class="nav nav-checkout-progress list-unstyled">
				
             
                <li>
                    <?php if(Session::has('coupon')): ?>
                   
                      <strong>SubTotal:</strong> ₹<?php echo e($cartTotal); ?><hr>
                      <strong>Coupon Name: </strong><?php echo e(session()->get('coupon')['coupon_name']); ?>

                      (<?php echo e(session()->get('coupon')['coupon_discount']); ?>%)
                      <hr> 
                      <strong>Coupon Discount: </strong>₹<?php echo e(session()->get('coupon')['discount_amount']); ?>

                      <hr>
                      <strong>Grand Total: </strong>₹<?php echo e(session()->get('coupon')['total_amount']); ?>

                      <hr>
                    <?php else: ?>
                   
                        <strong>SubTotal:</strong>
                        ₹<?php echo e($cartTotal); ?><hr>
                        <strong>GrandTotal:</strong>
                        ₹<?php echo e($cartTotal); ?><hr>
                    
                    <?php endif; ?>

                     
                </li>
                </ul>		
			</div>
		</div>
	</div>
</div> 
<!-- checkout-progress-sidebar -->			
</div>


<div class="col-md-6">
<!-- checkout-progress-sidebar -->
<div class="checkout-progress-sidebar ">
	<div class="panel-group">
		<div class="panel panel-default">
			<div class="panel-heading">
		    	<h4 class="unicase-checkout-title">Select Payment Method</h4>
		    </div>

				<form action="<?php echo e(route('cash.order')); ?> " method="post" id="payment-form">
								<?php echo csrf_field(); ?>
							<div class="form-row">
                            <img src="<?php echo e(asset('frontend/assets/images/payments/cash.png')); ?>">
								<label for="card-element">
									<input type="hidden" name="name" value="<?php echo e($data['shipping_name']); ?>">
									<input type="hidden" name="shipping_email" value="<?php echo e($data['shipping_email']); ?>">
									<input type="hidden" name="shipping_phone" value="<?php echo e($data['shipping_phone']); ?>">
									<input type="hidden" name="post_code" value="<?php echo e($data['post_code']); ?>">
									<input type="hidden" name="division_id" value="<?php echo e($data['division_id']); ?>">
									<input type="hidden" name="district_id" value="<?php echo e($data['district_id']); ?>">
									<input type="hidden" name="state_id" value="<?php echo e($data['state_id']); ?>">
									<input type="hidden" name="notes" value="<?php echo e($data['notes']); ?>">
								</label>

							</div>
							<br>
							<button class="btn btn-primary">Submit Payment</button>
				</form>


		</div>
	</div>
</div> 
<!-- checkout-progress-sidebar -->
 </div>
</form>
			</div><!-- /.row -->
		</div><!-- /.checkout-box -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<?php echo $__env->make('frontend.body.brands', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/frontend/payment/cash.blade.php ENDPATH**/ ?>