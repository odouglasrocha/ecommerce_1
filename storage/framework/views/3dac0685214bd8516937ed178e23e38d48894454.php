
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
			  <h4 class="box-title">Admin Change Password</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="post" action="<?php echo e(route('update.change.password')); ?>"  novalidate="">
                    <?php echo csrf_field(); ?>
					  <div class="row">
						<div class="col-12">	
                            <div class="row">
                                <div class="col-md-6">
                                 <div class="form-group">
								   <h5>Current Password<span class="text-danger">*</span></h5>
								    <div class="controls">
									  <input type="password" name="oldpassword" id="current_password" class="form-control" required=""> <div class="help-block"></div></div>
							     </div>
                                 <div class="form-group">
								   <h5>New Password<span class="text-danger">*</span></h5>
								    <div class="controls">
									  <input type="password" name="password" id="password" class="form-control" required=""> <div class="help-block"></div></div>
							     </div>
                                 <div class="form-group">
								   <h5>Confirm Password<span class="text-danger">*</span></h5>
								    <div class="controls">
									  <input type="password" name="password_confirmation" id="password" class="form-control" required=""> <div class="help-block"></div></div>
							     </div>
                                </div>
                         
                            </div>
                 
						
						</div>
					  </div>
						<div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update"></input>
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
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/admin/admin_change_password.blade.php ENDPATH**/ ?>