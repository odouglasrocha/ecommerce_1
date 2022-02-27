
<?php $__env->startSection('admin'); ?>

	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">
          <div class="col-12">

<div class="box">
   <div class="box-header with-border">
     <h3 class="box-title">Blog Post Lists <span class="badge badge-pill badge-success "><?php echo e(count($blogpost)); ?></span></h3>
     <a href="<?php echo e(route('add.blog_post')); ?>" class="btn btn-success" style="float:right;">Add Post</a>
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
               <th>Post Category </th>
               <th>Post Image</th>
               <th>Post Title En</th>
               <th>Post Title Hi</th>
               <th>Action</th>
               </tr>
           </thead>
           <tbody>
           <?php $__currentLoopData = $blogpost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr role="row">
                   <td><?php echo e($item->category->blog_category_name_en); ?></td>
                   <td><img src="<?php echo e(asset($item->post_image)); ?>" style="width:60px; height:60px;"></td>
                   <td><?php echo e($item->post_title_en); ?></td>
                   <td><?php echo e($item->post_title_hi); ?></td>
                   <td>
                   <a href="<?php echo e(route('blog_post.edit',$item->id)); ?>"class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i></a>
                   <a href="<?php echo e(route('blog_post.delete',$item->id)); ?>"class="btn btn-danger" title="Delete Data" id="delete"><i class="fa fa-trash"></i></a>
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
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/backend/blog/post/post_view.blade.php ENDPATH**/ ?>