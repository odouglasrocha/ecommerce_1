<?php $__env->startSection('content'); ?>
<div class="body-content">
    <div class="container">
        <div class="row">
            <?php echo $__env->make('frontend.common.user_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-md-2">
            
            </div>
            <div class="col-md-6">
                <div class="card">
                <h3 class="text-center"><span class="text-danger">Hiii... </span><strong><?php echo e(Auth::user()->name); ?></strong> Welcome To Ecom Shop</h3>
                </div>
            </div>
       
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce\ecommercee\resources\views/dashboard.blade.php ENDPATH**/ ?>