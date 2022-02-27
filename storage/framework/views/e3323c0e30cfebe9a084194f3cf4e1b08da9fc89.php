
<?php $__env->startSection('admin'); ?>

	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">
          <div class="col-12">

<div class="box">
   <div class="box-header with-border">
     <h3 class="box-title">Product Stock Lists <span class="badge badge-pill badge-success "><?php echo e(count($products)); ?></span></h3>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
       <div class="table-responsive">
         <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
         <div class="row">
         <div class="col-sm-12 col-md-6">
         <div class="dataTables_length" id="example1_length">
         
         </div></div>
         <div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"></div></div></div>
         <div class="row">
         <div class="col-sm-12">
         <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
           <thead>
               <tr>
               <th>Image</th>
               <th >Product En</th>
               <th>Product Price</th>
               <th>Quantity</th>
               <th>Discount</th>
               <th>Status</th>
               </tr>
           </thead>
           <tbody>
           <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr role="row">
                   <td><img src="<?php echo e(asset($item->product_thumbnil)); ?>" style="width:60px; height:50px;"></td>
                   <td><?php echo e($item->product_name_en); ?></td>
                   <td>₹<?php echo e($item->selling_price); ?></td>
                   <td><?php echo e($item->product_qty); ?> Pcs</td> 
                   <td>
                   <?php if($item->discount_price==NULL): ?>
                   <span class="badge badge-pill badge-danger">No Discount</span>  

                   <?php else: ?>
                   <?php
                      $amount=$item->selling_price - $item->discount_price;
                      $discount=($amount/$item->selling_price)*100;
                   ?>
                   <span class="badge badge-pill badge-danger"><?php echo e(round($discount)); ?></span>  

                   <?php endif; ?>
                   
                   </td>
                    <td>
                      <?php if($item->status==1): ?>
                      <span class="badge badge-pill badge-success">Active</span>
                      <?php else: ?>
                      <span class="badge badge-pill badge-danger">InActive</span>
                      <?php endif; ?>
                    </td>
               </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tbody>
      
         </table></div></div><div class="row"><div class="col-sm-12 col-md-5"></div><div class="col-sm-12 col-md-7">
         <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
         </div></div></div></div>
       </div>
   </div>
   <!-- /.box-body -->
 </div>
 <!-- /.box -->          
</div>


</div>




		
		</section>
		<!-- /.content -->
	  
	  </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/backend/product/product_stock.blade.php ENDPATH**/ ?>