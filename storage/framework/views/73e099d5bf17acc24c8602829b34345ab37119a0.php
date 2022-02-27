
<?php $__env->startSection('content'); ?>
<!-- <p><?php
$user=DB::table('users')->where('id',Auth::user()->id)->first();  //accesing the data through query builder
?></p> -->
<div class="body-content">
    <div class="container">
        <div class="row">
        <?php echo $__env->make('frontend.common.user_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-md-2">
            
            </div>
            <div class="col-md-6">
                <div class="card">
                <h3 class="text-center"><span class="text-danger">Change Password </span></h3>
                    <div class="card-body">
                        <form method="post" accept="" action="<?php echo e(route('user.password.update')); ?>" >
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Current Password <span>*</span></label>
                            <input type="password" id="current_password" name="oldpassword"  class="form-control" >
                
		                </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">New Password <span>*</span></label>
                            <input type="password" id="password" name="password"  class="form-control" >
                
		                </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Confirm Password <span>*</span></label>
                            <input type="password" id="password_confirmation" name="password_confirmation"  class="form-control" >
                
		                </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-danger">Update</button>
                        </div>
  

                        </form>
                    </div>
                </div>
            </div>
       
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/frontend/profile/change_password.blade.php ENDPATH**/ ?>