
<?php $__env->startSection('admin'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Content Wrapper. Contains page content -->

	  <div class="container-full">
		<!-- Content Header (Page header) -->


		<!-- Main content -->
		<section class="content">
		  <div class="row">



			<div class="col-8">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Sub->SubCategory List <span class="badge badge-pill badge-success "><?php echo e(count($subsubcategory)); ?></span></h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Category </th>
								<th>SubCategory Name</th>
								<th>Sub-Subcategory English </th>
								<th>Action</th>

							</tr>
						</thead>
						<tbody>
	 <?php $__currentLoopData = $subsubcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	 <tr>
		<td> <?php echo e($item['category']['category_name_en']); ?>  </td>
		<td><?php echo e($item['subcategory']['subcategory_name_en']); ?></td>
		 <td><?php echo e($item->subsubcategory_name_en); ?></td>
		<td width="30%">
 <a href="<?php echo e(route('subsubcategory.edit',$item->id)); ?>" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>

 <a href="<?php echo e(route('subsubcategory.delete',$item->id)); ?>" class="btn btn-danger" title="Delete Data" id="delete">
 	<i class="fa fa-trash"></i></a>
		</td>

	 </tr>
	  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>

					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->


			</div>
			<!-- /.col -->


<!--   ------------ Add Category Page -------- -->


          <div class="col-4">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Add Sub-SubCategory </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">


 <form method="post" action="<?php echo e(route('subsubcategory.store')); ?>" >
	 	<?php echo csrf_field(); ?>


	 <div class="form-group">
	<h5>Category Select <span class="text-danger">*</span></h5>
	<div class="controls">
		<select name="category_id" class="form-control"  >
			<option value="" selected="" disabled="">Select Category</option>
			<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<option value="<?php echo e($category->id); ?>"><?php echo e($category->category_name_en); ?></option>	
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</select>
		<?php $__errorArgs = ['category_id'];
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
	<h5>SubCategory Select <span class="text-danger">*</span></h5>
	<div class="controls">
		<select name="subcategory_id" class="form-control"  >
			<option value="" selected="" disabled="">Select SubCategory</option>

		</select>
		<?php $__errorArgs = ['subcategory_id'];
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
		<h5>Sub-SubCategory English <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="subsubcategory_name_en" class="form-control" >
     <?php $__errorArgs = ['subsubcategory_name_en'];
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
		<h5>Sub-SubCategory Hindi  <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="subsubcategory_name_hi" class="form-control" >
     <?php $__errorArgs = ['subsubcategory_name_hi'];
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


			 <div class="text-xs-right">
	<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Save">					 
						</div>
					</form>





					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box --> 
			</div>




		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->

	  </div>


 <script type="text/javascript">
      $(document).ready(function() {
        $('select[name="category_id"]').on('change', function(){
            var category_id = $(this).val();
            if(category_id) {
                $.ajax({
                    url: "<?php echo e(url('/category/subcategory/ajax')); ?>/"+category_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                       var d =$('select[name="subcategory_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name_en + '</option>');
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
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/backend/category/sub_subcategory_view.blade.php ENDPATH**/ ?>