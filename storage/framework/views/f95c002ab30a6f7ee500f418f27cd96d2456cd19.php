
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
			  <h4 class="box-title">Seo Update</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
                <form method="post" action="<?php echo e(route('update.seo_setting')); ?>" >
	 	            <?php echo csrf_field(); ?>

	 	            <input type="hidden" name="id" value="<?php echo e($seo->id); ?>">
					  <div class="row">
						<div class="col-12">
                            <div class="row">
				                <div class="col-md-6"> 
                                    <div class="form-group">
                                        <h5>Meta Title <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                      <input type="text" name="meta_title" class="form-control" value="<?php echo e($seo->meta_title); ?>" > </div>
                                	</div>

                                    <div class="form-group">
                                        <h5>Meta Author <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                    <input type="text" name="meta_author" class="form-control"  value="<?php echo e($seo->meta_author); ?>"  > </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Meta Keyword <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                    <input type="text" name="meta_keyword" class="form-control" value="<?php echo e($seo->meta_keyword); ?>"   > </div>
                                    </div>

                                <div class="form-group">
                                            <h5>Meta Description <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                    <textarea name="meta_description" id="textarea" class="form-control" required placeholder="Textarea text">
                                        <?php echo e($seo->meta_description); ?>

                                    </textarea>     
                                            </div>
                                        </div>


                                    <div class="form-group">
                                            <h5>Google Analytics <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                    <textarea name="google_analytics" id="textarea" class="form-control" required placeholder="Textarea text">
                                        <?php echo e($seo->google_analytics); ?>

                                    </textarea>     
                                            </div>
                                        </div>

				                </div> <!-- end cold md 6 --> 

			                </div>	<!-- end row 	 -->	
                            <div class="text-xs-right">
                               <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">					 
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
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/backend/setting/seo_update.blade.php ENDPATH**/ ?>