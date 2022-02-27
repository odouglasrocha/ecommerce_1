
<?php $__env->startSection('content'); ?>
<div class="body-content">
    <div class="container">
        <div class="row">
        <?php echo $__env->make('frontend.common.user_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-md-2">
            
            </div>
            <div class="col-md-6">
                <div class="card">
                <h3 class="text-center"><span class="text-danger">Hiii... </span><strong><?php echo e(Auth::user()->name); ?></strong>Update Your Profile</h3>
                    <div class="card-body">
                        <form method="post" accept="" action="<?php echo e(route('user.profile.store')); ?>" enctype="multipart/form-data" >
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Name <span>*</span></label>
                            <input type="text" id="name" name="name" value="<?php echo e($user->name); ?>" class="form-control" >
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
		                </div>

                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Email <span>*</span></label>
                            <input type="email" id="email" name="email" value="<?php echo e($user->email); ?>" class="form-control" >
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
		                </div>

                        
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Phone <span>*</span></label>
                            <input type="text" id="phone" name="phone" value="<?php echo e($user->phone); ?>" class="form-control" >
                            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
		                </div>

                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">User Image <span>*</span></label>
                            <input type="file" id="profile_photo_path" name="profile_photo_path"  class="form-control" >
                      
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
<?php echo $__env->make('frontend.main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/frontend/profile/user_profile.blade.php ENDPATH**/ ?>