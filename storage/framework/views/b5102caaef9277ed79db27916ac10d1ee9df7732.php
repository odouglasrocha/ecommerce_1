<?php
    $id= Auth::user()->id;
    $user=App\Models\User::find($id);
?>
<div class="col-md-2">
    <br><br>
                <img class="card-img-top" style="border-radius:50%" src="<?php echo e((!empty($user->profile_photo_path))?url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg')); ?>" height="100%" width="100%" ><br><br>
                <ul  class="list-group list-group-flush">
                <a href="" class="btn btn-primary btn-sm btn-block">Home
                </a>
                <a href="<?php echo e(route('user.profile')); ?>" class="btn btn-primary btn-sm btn-block">Update Profile
                </a>
                <a href="<?php echo e(route('change.password')); ?>" class="btn btn-primary btn-sm btn-block">Change Password
                </a>
                <a href="<?php echo e(route('my.orders')); ?>" class="btn btn-primary btn-sm btn-block">My Orders
                </a>
                <a href="<?php echo e(route('return.orders.list')); ?>" class="btn btn-primary btn-sm btn-block">Return Orders
                </a>
                <a href="<?php echo e(route('canceled.orders')); ?>" class="btn btn-primary btn-sm btn-block">Canceled Orders
                </a>
                <a href="<?php echo e(route('user.logout')); ?>" class="btn btn-danger btn-sm btn-block">Logout
                </a>
                </ul>
</div><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/frontend/common/user_sidebar.blade.php ENDPATH**/ ?>