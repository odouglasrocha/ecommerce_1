
<?php $__env->startSection('content'); ?>
<div class="body-content">
    <div class="container">
        <div class="row">
        <?php echo $__env->make('frontend.common.user_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <br><br>
                <div class="col-md-1"></div>
            <div class="col-md-9">
                <div class="table-responsive">
                    <table  class="table table-hover">
                        <thead style="background:#d8d5d5;">
                            <tr>
                            <td class="col-md-1">
                                    <label for="">Date</label>
                                </td>
                                <td class="col-md-3">
                                    <label for="">Total</label>
                                </td>
                                <td class="col-md-2">
                                    <label for="">Payment</label>
                                </td>
                                <td class="col-md-2">
                                    <label for="">Invoice</label>
                                </td>
                                <td class="col-md-2">
                                    <label for="">Return Reason</label>
                                </td>
                                <td class="col-md-2">
                                    <label for="">Order Status</label>
                                </td>
                            </tr>
                                
                            </thead>
                        <tbody style="background:#d5eff39c;">
                            
                            <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td class="col-md-1">
                                    <label for=""><?php echo e($order->order_date); ?></label>
                                </td>
                                <td class="col-md-3">
                                    <label for="">₹<?php echo e($order->amount); ?></label>
                                </td>
                                <td class="col-md-2">
                                    <label for=""><?php echo e($order->payment_method); ?></label>
                                </td>
                                <td class="col-md-2">
                                    <label for=""><?php echo e($order->invoice_no); ?></label>
                                </td>
                                <td class="col-md-2">
                                    <label for=""><?php echo e($order->return_reason); ?></label>
                                </td>
                                <td class="col-md-2">
                                    <label for="">
                                    <?php if($order->return_order==0): ?>    
                                       <span class="badge badge-pill badge-warning" style="background:#418089;">No Return Request</span>
                                    <?php elseif($order->return_order==1): ?>   
                                       <span class="badge badge-pill badge-warning" style="background:#800000;">Pending</span>
                                       <span class="badge badge-pill badge-warning" style="background:red;">Return Requested</span>
                                    <?php elseif($order->return_order==2): ?>
                                      <span class="badge badge-pill badge-warning" style="background:#008000;">Success</span>
                                    <?php endif; ?>  
                                </label>
                                </td>
                               
                            </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <h2 class="text-danger">No Any Order!  </h2>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>  
            </div>
       
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce\ecommercee\resources\views/frontend/user/order/return_order_view.blade.php ENDPATH**/ ?>