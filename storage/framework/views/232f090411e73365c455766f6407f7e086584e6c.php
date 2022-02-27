
<?php $__env->startSection('admin'); ?>
<?php 
    $date=date('d-m-y');
    $today=App\Models\Order::where('order_date',$date)->sum('amount');

    $month=date('F');
    $month=App\Models\Order::where('order_month',$month)->sum('amount');
    
    $year=date('Y');
    $year=App\Models\Order::where('order_year',$year)->sum('amount');

    $pending_order=App\Models\Order::where('status','Pending')->get();
?>

<div class="container-full">

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xl-3 col-6">
            <div class="box overflow-hidden pull-up">
                <div class="box-body">							
                    <div class="icon bg-primary-light rounded w-60 h-60">
                        <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                    </div>
                    <div>
                        <p class="text-mute mt-20 mb-0 font-size-16">Today's Sale</p>
                        <h3 class="text-white mb-0 font-weight-500">₹ <?php echo e($today); ?> <small class="text-success"><i class="fa fa-caret-up"></i> INR</small></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-6">
            <div class="box overflow-hidden pull-up">
                <div class="box-body">							
                    <div class="icon bg-warning-light rounded w-60 h-60">
                        <i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
                    </div>
                    <div>
                        <p class="text-mute mt-20 mb-0 font-size-16">Monthly Sale</p>
                        <h3 class="text-white mb-0 font-weight-500">₹ <?php echo e($month); ?> <small class="text-success"><i class="fa fa-caret-up"></i> INR</small></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-6">
            <div class="box overflow-hidden pull-up">
                <div class="box-body">							
                    <div class="icon bg-info-light rounded w-60 h-60">
                        <i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
                    </div>
                    <div>
                        <p class="text-mute mt-20 mb-0 font-size-16">Yearly Sale</p>
                        <h3 class="text-white mb-0 font-weight-500">₹ <?php echo e($year); ?> <small class="text-danger"><i class="fa fa-caret-down"></i> INR</small></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-6">
            <div class="box overflow-hidden pull-up">
                <div class="box-body">							
                    <div class="icon bg-danger-light rounded w-60 h-60">
                        <i class="text-danger mr-0 font-size-24 mdi mdi-phone-incoming"></i>
                    </div>
                    <div>
                        <p class="text-mute mt-20 mb-0 font-size-16">Pending Orders</p>
                        <h3 class="text-white mb-0 font-weight-500"><?php echo e(count($pending_order)); ?> <small class="text-danger"><i class="fa fa-caret-up"></i> Orders</small></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title align-items-start flex-column">
                        Recent All Orders

                        <?php 
                            $orders=App\Models\Order::where('status','Pending')->orderBy('id','DESC')->get();
                        ?>
                        
                    </h4>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table no-border">
                            <thead>
                                <tr class="text-uppercase bg-lightest">
                                    <th style="min-width: 250px"><span class="text-white">Date</span></th>
                                    <th style="min-width: 100px"><span class="text-fade">Invoice</span></th>
                                    <th style="min-width: 100px"><span class="text-fade">Amount</span></th>
                                    <th style="min-width: 150px"><span class="text-fade">Payment</span></th>
                                    <th style="min-width: 130px"><span class="text-fade">Status</span></th>
                                    <th style="min-width: 120px"><span class="text-fade">Process</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>										
                                    <td class="pl-0 py-8">
                                    <span class="text-white font-weight-600 d-block font-size-16">
                                            <?php echo e($item->order_date); ?>

                                        </span>  
                                    </td>
                                    <td>
                                        <span class="text-white font-weight-600 d-block font-size-16">
                                        <?php echo e($item->invoice_no); ?>

                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-white font-weight-600 d-block font-size-16">
                                        ₹<?php echo e($item->amount); ?>

                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-white font-weight-600 d-block font-size-16">
                                        <?php echo e($item->payment_method); ?>

                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge badge-primary-light badge-lg"> <?php echo e($item->status); ?></span>
                                    </td>
                                    <td class="text-right">
                                        <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
                                        <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</section>
<!-- /.content -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/admin/index.blade.php ENDPATH**/ ?>