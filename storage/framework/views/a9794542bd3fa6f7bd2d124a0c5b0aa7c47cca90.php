
<?php $__env->startSection('admin'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 >Add Blog Post</h3>
				</div>
			</div>
		</div>	  

		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="post" action="<?php echo e(route('blog-store')); ?>" enctype="multipart/form-data">
                      <?php echo csrf_field(); ?>
					  <div class="row">
						<div class="col-12">

                                 <div class="row">
                                        <div class="col-md-6">
                                         <div class="form-group">
								            <h5>Post Title English <span class="text-danger">*</span></h5>
								            <div class="controls">
									          <input type="text" name="post_title_en" class="form-control"  required=""> </div>
                                              <?php $__errorArgs = ['post_title_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class=" text-danger"><?php echo e($message); ?></span>
                                              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
							             </div>
                                        </div>
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">
                                                <h5>Post Title Hindi <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                <input type="text" name="post_title_hi" class="form-control"  required=""> </div>
                                                <?php $__errorArgs = ['post_title_hi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class=" text-danger"><?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                         </div>

                                 </div>

                                <!-- 2nd Row -->
                          <div class="row">
                                 
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            <h5>Blog Category Select <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="category_id"  class="form-control" required="">
                                                    <option value="" selected=""disabled="">Select Blog Category</option>
                                                    <?php $__currentLoopData = $blogcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->blog_category_name_en); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class=" text-danger"><?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            <div class="help-block"></div></div>
                                            </div>  
                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                              <h5>Post Image <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                          <input type="file" name="post_image" class="form-control" onChange="mainThumbUrl(this)"  required=""/>
                                                          
                               
                                                            <?php $__errorArgs = ['post_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                              <span class=" text-danger"><?php echo e($message); ?></span>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        <img src="" id="mainThumb"/>
                                                </div>
                                        </div>
                                  </div>
                                   

                                <!-- 3rd Row -->
                                  <div class="row">
                                    <div class="col-md-6">
                                                  <div class="form-group">
                                                    <h5>Post Details English <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                    <textarea id="editor1" name="post_details_en" rows="10" cols="80"  required="">
                                                        Post Details English
                                                    </textarea> </div>
                                                    <?php $__errorArgs = ['post_details_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class=" text-danger"><?php echo e($message); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                  </div>
                                    </div>
                                    <div class="col-md-6">
                                                  <div class="form-group">
                                                    <h5>Post Details Hindi <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                    <textarea id="editor2" name="post_details_hi" rows="10" cols="80"  required="">
                                                        Post Details Hindi
                                                    </textarea> </div>
                                                    <?php $__errorArgs = ['post_details_hi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class=" text-danger"><?php echo e($message); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                  </div>
                                    </div>
                                  </div>

                                  <hr>


						</div>
					  </div>
	

						<div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add Product">
              			</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>

    <script type="text/javascript">
      function mainThumbUrl(input){
        if(input.files && input.files[0]){
          var reader = new FileReader();
          reader.onload =function(e){
            $('#mainThumb').attr('src',e.target.result).width(80).height(80);
          };
          reader.readAsDataURL(input.files[0]);
        }
      }
    </script>
   

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/backend/blog/post/post_add.blade.php ENDPATH**/ ?>