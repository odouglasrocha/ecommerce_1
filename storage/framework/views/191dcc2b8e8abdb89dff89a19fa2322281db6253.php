<style>
	
body {
    background-color: #eee
}
.card {
    background-color: #fff;
    padding: 15px;
    border: none
}
.input-box {
    position: relative
}
.input-box i {
    position: absolute;
    right: 13px;
    top: 15px;
    color: #ced4da
}
.form-control {
    height: 50px;
    background-color: #eeeeee69
}
.form-control:focus {
    background-color: #eeeeee69;
    box-shadow: none;
    border-color: #eee
}
.list {
    padding-top: 20px;
    padding-bottom: 10px;
    display: flex;
    align-items: center
}
.border-bottom {
    border-bottom: 2px solid #eee
}
.list i {
    font-size: 19px;
    color: red;
}
.list small {
    color: red;
}
</style>

<?php if($products -> isEmpty()): ?>
<h4 class="text-center text-danger">Product Not Found </h4>

<?php else: ?>


<div class="container mt-5">
    <div class="row d-flex justify-content-center ">
        <div class="col-md-6">
            <div class="card">


            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <a href="<?php echo e(url('product/details/'.$item->id.'/'.$item->product_slug_en )); ?>">
                <div class="list border-bottom">  <img src="<?php echo e(asset($item->product_thumbnil)); ?>" style="width: 30px; height: 30px;"> 

   <div class="d-flex flex-column ml-3" style="margin-left: 10px;"> <span><?php echo e($item->product_name_en); ?> </span> <small> ₹<?php echo e($item->selling_price); ?></small> </div>
                </div>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
</div>

<?php endif; ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/frontend/product/advance_search.blade.php ENDPATH**/ ?>