
<?php $__env->startSection('content'); ?>

<?php $__env->startSection('title'); ?>
Stripe Payment
<?php $__env->stopSection(); ?>
<style>
    /**
 * The CSS shown here will not be introduced in the Quickstart guide, but shows
 * how you can use CSS to style your Element's container.
 */
.StripeElement {
  box-sizing: border-box;
  height: 40px;
  padding: 10px 12px;
  border: 1px solid transparent;
  border-radius: 4px;
  background-color: white;
  box-shadow: 0 1px 3px 0 #e6ebf1;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
}
.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}
.StripeElement--invalid {
  border-color: #fa755a;
}
.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;}
</style>
<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Stripe</li>
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
                        $<?php echo e($cartTotal); ?><hr>
                        <strong>GrandTotal:</strong>
                        $<?php echo e($cartTotal); ?><hr>
                    
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

				<form action="<?php echo e(route('stripe.order')); ?> " method="post" id="payment-form">
								<?php echo csrf_field(); ?>
							<div class="form-row">
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
								
								<div id="card-element">
								<!-- A Stripe Element will be inserted here. -->
								</div>
								<!-- Used to display form errors. -->
								<div id="card-errors" role="alert"></div>
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



<script type="text/javascript">
    // Create a Stripe client.
var stripe = Stripe('pk_test_51JMnYfSJZGOakkUNWqXdCmyFtK4Q1q1KMuK3gwQW1Lwh0RsfhlyBqtzoeO8mB0H8Z7gYlpk23qMGN2LppdDh5fI600968fS5Yt');
// Create an instance of Elements.
var elements = stripe.elements();
// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};
// Create an instance of the card Element.
var card = elements.create('card', {style: style});
// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');
// Handle real-time validation errors from the card Element.
card.on('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});
// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();
  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});
// Submit the form with the token ID.
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);
  // Submit the form
  form.submit();
}
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/frontend/payment/stripe.blade.php ENDPATH**/ ?>