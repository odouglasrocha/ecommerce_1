
<?php $__env->startSection('content'); ?>
<div class="body-content">
    <div class="container">
        <div class="row">
        <?php echo $__env->make('frontend.common.user_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-md-5 ">
                <div class="card">
                    <div class="card-header"><h4>Shipping Details</h4></div>
                    <hr>
                    <div class="card-body" style="background:#d5eff39c;">
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
            </div>

            <div class="col-md-5 ">
                <div class="card">
                    <div class="card-header"><h4>Order Details <span  class="text-danger">Invoice: <?php echo e($order->invoice_no); ?></span></h4></div>
                    <hr>
                    
                    <div class="card-body" style="background:#d5eff39c;">
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
                                <th>Order Date : </th>
                                <th><?php echo e($order->order_date); ?></th>
                            </tr>  
                        </table>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table  class="table">
                            <thead style="background:#d8d5d5;">
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
                            <tbody style="background:#d5eff39c;">
                                
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

            <?php if($order->status !=='Delivered'): ?>

            <?php else: ?>
                <?php
                    $order=App\Models\Order::where('id',$order->id)->where('return_reason','=',NULL)->first();
                ?>
    
                <?php if($order): ?>
                <form action="<?php echo e(route('return.order',$order->id)); ?>" method="post" >
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="label">Order Return Reason</label>
                        <textarea name="return_reason" id="" class="form-control" cols="30" rows="05" >Return Reason</textarea>
                    </div>
                    <button type="submit" class="btn btn-danger">Order Return</button>
                </form>
                <?php else: ?>
                    <span class="badge badge-pill badge-warning" style="background:red;">Return Order Request</span>
                <?php endif; ?>


            <?php endif; ?>
            <br><br>    

        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/frontend/user/order/order_details.blade.php ENDPATH**/ ?>