
<?php $__env->startSection('admin'); ?>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>


<div class="container-full">

<!-- Main content -->
<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Site Setting Page</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="post" action="<?php echo e(route('update.setting')); ?>"  enctype="multipart/form-data">
                     <?php echo csrf_field(); ?>
                     <input type="hidden" name="id" value="<?php echo e($setting->id); ?>">
					  <div class="row">
						<div class="col-12">	
                            <div class="row">
                                <div class="col-md-6">
                                 <div class="form-group">
								   <h5>Site Logo<span class="text-danger">*</span></h5>
								    <div class="controls">
									  <input type="file" name="logo"  class="form-control"> <div class="help-block"></div></div>
							     </div>
                                 <div class="form-group">
								   <h5>Phone_One<span class="text-danger">*</span></h5>
								    <div class="controls">
									  <input type="text" name="phone_one" value="<?php echo e($setting->phone_one); ?>" class="form-control" > <div class="help-block"></div></div>
							     </div>
                                 <div class="form-group">
								   <h5>Phone_Two<span class="text-danger">*</span></h5>
								    <div class="controls">
									  <input type="text" name="phone_two" value="<?php echo e($setting->phone_two); ?>"  class="form-control" > <div class="help-block"></div></div>
							     </div>
                                 <div class="form-group">
								   <h5>Email<span class="text-danger">*</span></h5>
								    <div class="controls">
									  <input type="email" name="email" value="<?php echo e($setting->email); ?>" class="form-control" > <div class="help-block"></div></div>
							     </div>
                                 <div class="form-group">
								   <h5>Company_Name<span class="text-danger">*</span></h5>
								    <div class="controls">
									  <input type="text" name="company_name" value="<?php echo e($setting->company_name); ?>" class="form-control" > <div class="help-block"></div></div>
							     </div>
                                 <div class="form-group">
								   <h5>Company_Address<span class="text-danger">*</span></h5>
								    <div class="controls">
									  <input type="text" name="company_address" value="<?php echo e($setting->company_address); ?>"  class="form-control" > <div class="help-block"></div></div>
							     </div>
                                 <div class="form-group">
								   <h5>Facebook<span class="text-danger">*</span></h5>
								    <div class="controls">
									  <input type="text" name="facebook" value="<?php echo e($setting->facebook); ?>"  class="form-control" > <div class="help-block"></div></div>
							     </div>
                                 <div class="form-group">
								   <h5>Twitter<span class="text-danger">*</span></h5>
								    <div class="controls">
									  <input type="text" name="twitter" value="<?php echo e($setting->twitter); ?>"  class="form-control" > <div class="help-block"></div></div>
							     </div>
                                 <div class="form-group">
								   <h5>Linkedin<span class="text-danger">*</span></h5>
								    <div class="controls">
									  <input type="text" name="linkedin" value="<?php echo e($setting->linkedin); ?>"  class="form-control" > <div class="help-block"></div></div>
							     </div>
                                 <div class="form-group">
								   <h5>Youtube<span class="text-danger">*</span></h5>
								    <div class="controls">
									  <input type="text" name="youtube" value="<?php echo e($setting->youtube); ?>" class="form-control" > <div class="help-block"></div></div>
							     </div>

                                </div>
                         
                            </div>
                 
						
						</div>
					  </div>
						<div class="text-xs-right">
							<input type="submit" value="update" class="btn btn-rounded btn-primary mb-5"></input>
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
  $(document).ready(function(){
      $('#image').change(function(e){
          var reader=new FileReader();
          reader.onload=function(e){
              $('#showImage').attr('src',e.target.result);
          }
          reader.readAsDataURL(e.target.files['0']);
      });
  });
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/backend/setting/setting_update.blade.php ENDPATH**/ ?>