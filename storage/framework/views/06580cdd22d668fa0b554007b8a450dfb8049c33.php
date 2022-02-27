
<?php $__env->startSection('content'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php $__env->startSection('title'); ?>
Checkout
<?php $__env->stopSection(); ?>
<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Checkout</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content">
	<div class="container">
		<div class="checkout-box ">
			<div class="row">
				<div class="col-md-8">
					<div class="panel-group checkout-steps" id="accordion">
						<!-- checkout-step-01  -->
<div class="panel panel-default checkout-step-01">

	<!-- panel-heading -->

    <!-- panel-heading -->

	<div id="collapseOne" class="panel-collapse collapse-in" >

		<!-- panel-body  -->
	    <div class="panel-body">
			<div class="row">		

		<!-- already-registered-login -->
        <div class="col-md-6 col-sm-6 already-registered-login">
            <h4 class="checkout-subtitle"><b>Shipping Address</b></h4>
            <form class="register-form" method="post" action="<?php echo e(route('checkout.store')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label class="info-title" for="exampleInputEmail1"><b>Shipping Name</b> <span>*</span></label>
                    <input type="text" name="shipping_name" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="Full Name" value="<?php echo e(Auth::user()->name); ?>">
                </div>

                <div class="form-group">
                    <label class="info-title" for="exampleInputEmail1"><b>Email</b> <span>*</span></label>
                    <input type="email" name="shipping_email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="Email" value="<?php echo e(Auth::user()->email); ?>" required="">
                </div>

                <div class="form-group">
                    <label class="info-title" for="exampleInputEmail1"><b>Phone</b> <span>*</span></label>
                    <input type="number" name="shipping_phone" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="Phone" value="<?php echo e(Auth::user()->phone); ?>" required="">
                </div>

                <div class="form-group">
                    <label class="info-title" for="exampleInputEmail1"><b>Post Code</b> <span>*</span></label>
                    <input type="text" name="post_code" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="Post Code" required="">
                </div>
               
    
        </div>	
				<!-- already-registered-login -->
				<div class="col-md-6 col-sm-6 already-registered-login">

                    <div class="form-group">
                        <h5><b>Division Select </b> <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="division_id" class="form-control" required="" >
                                <option value="" selected="" disabled="">Select Division</option>
                                <?php $__currentLoopData = $divisions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->division_name); ?></option>	
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['division_id'];
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
                        <h5><b>District Select</b>  <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="district_id" class="form-control" required="" >
                                <option value="" selected="" disabled="">Select District</option>

                            </select>
                            <?php $__errorArgs = ['district_id'];
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
                        <h5><b>State Select</b> <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="state_id" class="form-control" required="" >
                                <option value="" selected="" disabled="">Select State</option>

                            </select>
                            <?php $__errorArgs = ['state_id'];
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
                        <label class="info-title" for="exampleInputEmail1"><b>Notes</b> <span class="text-danger">*</span></label>
                        <textarea class="form-control" cols="30" rows="5" placeholder="Notes" name="notes"></textarea>
                    </div>  

			

				
				</div>	
				<!-- already-registered-login -->		
			</div>			
		</div>
		<!-- panel-body  -->
	</div><!-- row -->
</div>
<!-- End checkout-step-01  -->
					  	
					</div><!-- /.checkout-steps -->
				</div>
				<div class="col-md-4">
					<!-- checkout-progress-sidebar -->
<div class="checkout-progress-sidebar ">
	<div class="panel-group">
		<div class="panel panel-default">
			<div class="panel-heading">
		    	<h4 class="unicase-checkout-title">Your Checkout Progress</h4>
		    </div>
		    <div class="">
				<ul class="nav nav-checkout-progress list-unstyled">
				<?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
                <li><strong>Image: </strong>
                <img src="<?php echo e(asset($item->options->image)); ?>" style="width:50px; height:50px"></li>
                <li>
                    <strong>Quantity: </strong>
                    ( <?php echo e($item->qty); ?> )

                    <strong>Color: </strong>
                    <?php echo e($item->options->color); ?>


                    <strong>Size: </strong>
                    <?php echo e($item->options->size); ?>

                </li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <hr>
                <li>
                    <?php if(Session::has('coupon')): ?>
                   
                      <strong>SubTotal:</strong> $<?php echo e($cartTotal); ?><hr>
                      <strong>Coupon Name: </strong><?php echo e(session()->get('coupon')['coupon_name']); ?>

                      ( <?php echo e(session()->get('coupon')['coupon_discount']); ?> % )
                      <hr> 
                      <strong>Coupon Discount: </strong>$ <?php echo e(session()->get('coupon')['discount_amount']); ?>

                      <hr>
                      <strong>Grand Total: </strong>$ <?php echo e(session()->get('coupon')['total_amount']); ?>

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


<div class="col-md-4">
<!-- checkout-progress-sidebar -->
<div class="checkout-progress-sidebar ">
	<div class="panel-group">
		<div class="panel panel-default">
			<div class="panel-heading">
		    	<h4 class="unicase-checkout-title">Select Payment Method</h4>
		    </div>


		    <div class="row">
		    	<div class="col-md-4">
		             <label for="">Stripe</label> 		
                     <input type="radio" name="payment_method" value="stripe">
                     <img src="<?php echo e(asset('frontend/assets/images/payments/4.png')); ?>">		    		
		    	</div> 

		    	<div class="col-md-4">
		    		 <label for="">Card</label> 		
                     <input type="radio" name="payment_method" value="card">	
                     <img src="<?php echo e(asset('frontend/assets/images/payments/3.png')); ?>">    
		    	</div> 

		    	<div class="col-md-4">
		    		<label for="">Cash</label> 		
                    <input type="radio" name="payment_method" value="cash">	
                    <img src="<?php echo e(asset('frontend/assets/images/payments/6.png')); ?>">  		
		    	</div> 
            
            </div> <!-- // end row  -->
            <hr>
            <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Payment Step</button>


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







<script type="text/javascript">
      $(document).ready(function() {
        $('select[name="division_id"]').on('change', function(){
            var division_id = $(this).val();
            if(division_id) {
                $.ajax({
                    url: "<?php echo e(url('/district-get/ajax')); ?>/"+division_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                        $('select[name="state_id"]').empty();
                       var d =$('select[name="district_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="district_id"]').append('<option value="'+ value.id +'">' + value.district_name + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });


        $('select[name="district_id"]').on('change', function(){
            var district_id = $(this).val();
            if(district_id) {
                $.ajax({
                    url: "<?php echo e(url('/state-get/ajax')); ?>/"+district_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                       var d =$('select[name="state_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="state_id"]').append('<option value="'+ value.id +'">' + value.state_name + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });
    });
    </script>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/frontend/checkout/checkout_view.blade.php ENDPATH**/ ?>