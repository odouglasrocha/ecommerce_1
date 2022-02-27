<?php
$tag_en= App\Models\Product::groupBy('product_tags_en')->select('product_tags_en')->get();

$tag_hi= App\Models\Product::groupBy('product_tags_hi')->select('product_tags_hi')->get();

?>


<div class="sidebar-widget product-tag wow fadeInUp">
          <h3 class="section-title">Product tags</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="tag-list"> 
                

                <?php if(session()->get('language') == 'hindi'): ?> 
                    <?php $__currentLoopData = $tag_hi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="item active" title="Phone" href="<?php echo e(url('product/tag/'.$tag->product_tags_hi)); ?>">
                            <?php echo e(str_replace (',',' ',$tag->product_tags_hi)); ?> 
                            </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?> 
                    <?php $__currentLoopData = $tag_en; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="item active" title="Phone" href="<?php echo e(url('product/tag/'.$tag->product_tags_en)); ?>">
                            <?php echo e(str_replace (',',' ',$tag->product_tags_en)); ?> 
                            </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                
             
            </div>
            <!-- /.tag-list --> 
          </div>
          <!-- /.sidebar-widget-body --> 
        </div><?php /**PATH C:\xampp\htdocs\ecommerce\ecommercee\resources\views/frontend/common/product_tags.blade.php ENDPATH**/ ?>