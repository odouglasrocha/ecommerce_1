<div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
          <h3 class="section-title">hot deals</h3>
          <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
            <?php $__currentLoopData = $hot_deals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item">
              <div class="products">
                <div class="hot-deal-wrapper">
                  <div class="image"> <img src="<?php echo e(asset($product->product_thumbnil)); ?>" alt=""> </div>

                     <?php
        $amount = $product->selling_price - $product->discount_price;
        $discount = ($amount/$product->selling_price) * 100;
        ?>  
        <?php if($product->discount_price == NULL): ?>
                <div class="tag new"><span>new</span></div>
              <?php else: ?>
              <div class="sale-offer-tag"><span><?php echo e(round($discount)); ?>%<br>
                    off</span></div>
                  <?php endif; ?>
                  <div class="timing-wrapper">
                    <div class="box-wrapper">
                      <div class="date box"> <span class="key">120</span> <span class="value">DAYS</span> </div>
                    </div>
                    <div class="box-wrapper">
                      <div class="hour box"> <span class="key">20</span> <span class="value">HRS</span> </div>
                    </div>
                    <div class="box-wrapper">
                      <div class="minutes box"> <span class="key">36</span> <span class="value">MINS</span> </div>
                    </div>
                    <div class="box-wrapper hidden-md">
                      <div class="seconds box"> <span class="key">60</span> <span class="value">SEC</span> </div>
                    </div>
                  </div>
                </div>
                <!-- /.hot-deal-wrapper -->
                
                <div class="product-info text-left m-t-20">
                  <h3 class="name"><a href="detail.html"><?php if(session()->get('language') == 'hindi'): ?> <?php echo e($product->product_name_hin); ?> <?php else: ?> <?php echo e($product->product_name_en); ?> <?php endif; ?></a></h3>
                  <div class="rating rateit-small"></div>
                  <?php if($product->discount_price == NULL): ?>
 <div class="product-price"> <span class="price"> $<?php echo e($product->selling_price); ?> </span>  </div>
     <?php else: ?>
 <div class="product-price"> <span class="price"> ₹<?php echo e($product->discount_price); ?> </span> <span class="price-before-discount">₹<?php echo e($product->selling_price); ?></span> </div>
     <?php endif; ?>
                  <!-- /.product-price --> 
                  
                </div>
                <!-- /.product-info -->
                
                <div class="cart clearfix animate-effect">
                  <div class="action">
                    <div class="add-cart-button btn-group">
                    <ul class="list-unstyled">
                       <button data-toggle="modal" data-target="#exampleModal" class="btn btn-primary icon" type="button" title="Add Cart" id="<?php echo e($product->id); ?>" onclick="productView(this.id)"> <i class="fa fa-shopping-cart"></i> </button>
                               
                      <button class="btn btn-primary cart-btn" data-toggle="modal" data-target="#exampleModal" type="button" id="<?php echo e($product->id); ?>" onclick="productView(this.id)">Add to cart</button>
                    </div>
                  </div>
                  <!-- /.action --> 
                </div>
                <!-- /.cart --> 
              </div>
            </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          <!-- /.sidebar-widget --> 
        </div>
      <?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/frontend/common/hot_deals.blade.php ENDPATH**/ ?>