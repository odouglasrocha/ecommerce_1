
<?php $__env->startSection('content'); ?>

<?php $__env->startSection('title'); ?>
Error
<?php $__env->stopSection(); ?>

<div class="body-content outer-top-bd">
	<div class="container">
		<div class="x-page inner-bottom-sm">
			<div class="row">
				<div class="col-md-12 x-text text-center">
					<h1>404</h1>
					<p>We are sorry, the page you've requested is not available. </p>
					<form role="form" class="outer-top-vs outer-bottom-xs">
                        <!-- <input placeholder="Search" autocomplete="off">
                        <button class="  btn-default le-button">Go</button> -->
                    </form>
					<a href="<?php echo e(url('/')); ?>"><i class="fa fa-home"></i> Go To Homepage</a>
				</div>
			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
	</div><!-- /.container -->
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce\ecommercee\resources\views/errors/404.blade.php ENDPATH**/ ?>