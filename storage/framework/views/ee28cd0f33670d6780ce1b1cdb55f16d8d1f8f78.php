
<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title'); ?>
Tag Wise Product
<?php $__env->stopSection(); ?>

<?php
 
$categories = App\Models\Category::orderBy('category_name_en','ASC')->get();
?>
<div class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">
        <li><a href="#">Home</a></li>
        <li class="active">Handbags</li>
      </ul>
    </div>
    <!-- /.breadcrumb-inner --> 
  </div>
  <!-- /.container --> 
</div>


<div class="body-content outer-top-xs">
  <div class="container">
    <div class="row">
      <div class="col-md-3 sidebar"> 
        <!-- ================================== TOP NAVIGATION ================================== -->
        <?php echo $__env->make('frontend.common.vertical_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- ================================== TOP NAVIGATION : END ================================== -->
        <div class="sidebar-module-container">
          <div class="sidebar-filter"> 
            <!-- ============================================== SIDEBAR CATEGORY ============================================== -->
            <div class="sidebar-widget wow fadeInUp" style="visibility: hidden; animation-name: none;">
              <h3 class="section-title">shop by</h3>
              <div class="widget-header">
                <h4 class="widget-title">Category</h4>
              </div>
              <div class="sidebar-widget-body">
                <div class="accordion">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#collapse<?php echo e($category->id); ?>" data-toggle="collapse" class="accordion-toggle collapsed">
                       <?php if(session()->get('language')=='hindi'): ?> <?php echo e($category->category_name_hi); ?> 
                        <?php else: ?>
                        <?php echo e($category->category_name_en); ?> 

                        <?php endif; ?>
               </a> </div>
                    <!-- /.accordion-heading -->
                    <div class="accordion-body collapse" id="collapse<?php echo e($category->id); ?>" style="height: 0px;">
                      <div class="accordion-inner">
                      <?php
                            $subcategories = App\Models\SubCategory::where('category_id',$category->id)->orderBy('subcategory_name_en','ASC')->get();
                      ?>
                      <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                      <ul>
                       <li><a href="">
                            <?php if(session()->get('language')=='hindi'): ?> <?php echo e($subcategory->subcategory_name_hi); ?> 
                              <?php else: ?>
                              <?php echo e($subcategory->subcategory_name_en); ?> 
                            <?php endif; ?> 
                       </a></li>
                      </ul>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                    </div>
                      <!-- /.accordion-inner --> 
                    </div>
                    <!-- /.accordion-body --> 
                  </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <!-- /.accordion-group -->              
                </div>
                <!-- /.accordion --> 
              </div>
              <!-- /.sidebar-widget-body --> 
            </div>
            <!-- /.sidebar-widget --> 
            <!-- ============================================== SIDEBAR CATEGORY : END ============================================== --> 
            
                <!-- ============================================== PRICE SILDER============================================== -->
                <div class="sidebar-widget wow fadeInUp">
              <div class="widget-header">
                <h4 class="widget-title">Price Slider</h4>
              </div>
              <div class="sidebar-widget-body m-t-10">
                <div class="price-range-holder"> <span class="min-max"> <span class="pull-left">$200.00</span> <span class="pull-right">$800.00</span> </span>
                  <input type="text" id="amount" style="border:0; color:#666666; font-weight:bold;text-align:center;">
                  <input type="text" class="price-slider" value="" >
                </div>
                <!-- /.price-range-holder --> 
                <a href="#" class="lnk btn btn-primary">Show Now</a> </div>
              <!-- /.sidebar-widget-body --> 
            </div>
            <!-- /.sidebar-widget --> 
            <!-- ============================================== PRICE SILDER : END ============================================== --> 
            <!-- ============================================== MANUFACTURES============================================== -->
            <div class="sidebar-widget wow fadeInUp" style="visibility: hidden; animation-name: none;">
              <div class="widget-header">
                <h4 class="widget-title">Manufactures</h4>
              </div>
              <div class="sidebar-widget-body">
                <ul class="list">
                  <li><a href="#">Forever 18</a></li>
                  <li><a href="#">Nike</a></li>
                  <li><a href="#">Dolce &amp; Gabbana</a></li>
                  <li><a href="#">Alluare</a></li>
                  <li><a href="#">Chanel</a></li>
                  <li><a href="#">Other Brand</a></li>
                </ul>
                <!--<a href="#" class="lnk btn btn-primary">Show Now</a>--> 
              </div>
              <!-- /.sidebar-widget-body --> 
            </div>
            <!-- /.sidebar-widget --> 
            <!-- ============================================== MANUFACTURES: END ============================================== --> 
            <!-- ============================================== COLOR============================================== -->
            <div class="sidebar-widget wow fadeInUp" style="visibility: hidden; animation-name: none;">
              <div class="widget-header">
                <h4 class="widget-title">Colors</h4>
              </div>
              <div class="sidebar-widget-body">
                <ul class="list">
                  <li><a href="#">Red</a></li>
                  <li><a href="#">Blue</a></li>
                  <li><a href="#">Yellow</a></li>
                  <li><a href="#">Pink</a></li>
                  <li><a href="#">Brown</a></li>
                  <li><a href="#">Teal</a></li>
                </ul>
              </div>
              <!-- /.sidebar-widget-body --> 
            </div>
            <!-- /.sidebar-widget --> 
            <!-- ============================================== COLOR: END ============================================== --> 
            <!-- ============================================== COMPARE============================================== -->
            <div class="sidebar-widget wow fadeInUp outer-top-vs" style="visibility: hidden; animation-name: none;">
              <h3 class="section-title">Compare products</h3>
              <div class="sidebar-widget-body">
                <div class="compare-report">
                  <p>You have no <span>item(s)</span> to compare</p>
                </div>
                <!-- /.compare-report --> 
              </div>
              <!-- /.sidebar-widget-body --> 
            </div>
            <!-- /.sidebar-widget --> 
            <!-- ============================================== COMPARE: END ============================================== --> 
            <!-- ============================================== PRODUCT TAGS ============================================== -->
            <?php echo $__env->make('frontend.common.product_tags', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- /.sidebar-widget --> 
          <!----------- Testimonials------------->
            <?php echo $__env->make('frontend.common.testimonials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
            <!-- ============================================== Testimonials: END ============================================== -->
            
            <div class="home-banner"> <img src="<?php echo e(asset('frontend/assets/images/banners/LHS-banner.jpg')); ?>" alt="Image"> </div>
          </div>
          <!-- /.sidebar-filter --> 
        </div>
        <!-- /.sidebar-module-container --> 
      </div>
      <!-- /.sidebar -->
      <div class="col-md-9"> 
        <!-- ========================================== SECTION – HERO ========================================= -->
        
        <div id="category" class="category-carousel hidden-xs">
          <div class="item">
            <div class="image"> <img src="<?php echo e(asset('frontend/assets/images/banners/cat-banner-1.jpg')); ?>" alt="" class="img-responsive"> </div>
            <div class="container-fluid">
              <div class="caption vertical-top text-left">
                <div class="big-text"> Big Sale </div>
                <div class="excerpt hidden-sm hidden-md"> Save up to 49% off </div>
                <div class="excerpt-normal hidden-sm hidden-md"> Lorem ipsum dolor sit amet, consectetur adipiscing elit </div>
              </div>
              <!-- /.caption --> 
            </div>
            <!-- /.container-fluid --> 
          </div>
        </div>
        
     
        <div class="clearfix filters-container m-t-10">
          <div class="row">
            <div class="col col-sm-6 col-md-2">
              <div class="filter-tabs">
                <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                  <li class="active"> <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grid</a> </li>
                  <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-th-list"></i>List</a></li>
                </ul>
              </div>
              <!-- /.filter-tabs --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-12 col-md-6">
              <div class="col col-sm-3 col-md-6 no-padding">
                <div class="lbl-cnt"> <span class="lbl">Sort by</span>
                  <div class="fld inline">
                    <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                      <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> Position <span class="caret"></span> </button>
                      <ul role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="#">position</a></li>
                        <li role="presentation"><a href="#">Price:Lowest first</a></li>
                        <li role="presentation"><a href="#">Price:HIghest first</a></li>
                        <li role="presentation"><a href="#">Product Name:A to Z</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.fld --> 
                </div>
                <!-- /.lbl-cnt --> 
              </div>
              <!-- /.col -->
              <div class="col col-sm-3 col-md-6 no-padding">
                <div class="lbl-cnt"> <span class="lbl">Show</span>
                  <div class="fld inline">
                    <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                      <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> 1 <span class="caret"></span> </button>
                      <ul role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="#">1</a></li>
                        <li role="presentation"><a href="#">2</a></li>
                        <li role="presentation"><a href="#">3</a></li>
                        <li role="presentation"><a href="#">4</a></li>
                        <li role="presentation"><a href="#">5</a></li>
                        <li role="presentation"><a href="#">6</a></li>
                        <li role="presentation"><a href="#">7</a></li>
                        <li role="presentation"><a href="#">8</a></li>
                        <li role="presentation"><a href="#">9</a></li>
                        <li role="presentation"><a href="#">10</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.fld --> 
                </div>
                <!-- /.lbl-cnt --> 
              </div>
              <!-- /.col --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-6 col-md-4 text-right">
              
              <!-- /.pagination-container --> </div>
            <!-- /.col --> 
          </div>
          <!-- /.row --> 
        </div>

        <!-- Start Grid View -->
        <div class="search-result-container ">
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active " id="grid-container">
              <div class="category-product">
                <div class="row">

                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="col-sm-6 col-md-4 wow fadeInUp">
    <div class="products">
      <div class="product">
        <div class="product-image">
          <div class="image"> <a href="<?php echo e(url('product/details/'.$product->id.'/'.$product->product_slug_en )); ?>"><img  src="<?php echo e(asset($product->product_thumbnil)); ?>" alt=""></a> </div>
          <!-- /.image -->

           <?php
        $amount = $product->selling_price - $product->discount_price;
        $discount = ($amount/$product->selling_price) * 100;
        ?>     

          <div>
            <?php if($product->discount_price == NULL): ?>
            <div class="tag new"><span>new</span></div>
            <?php else: ?>
            <div class="tag hot"><span><?php echo e(round($discount)); ?>%</span></div>
            <?php endif; ?>
          </div>


        </div>
        <!-- /.product-image -->

        <div class="product-info text-left">
          <h3 class="name"><a href="<?php echo e(url('product/details/'.$product->id.'/'.$product->product_slug_en )); ?>">
          	<?php if(session()->get('language') == 'hindi'): ?> <?php echo e($product->product_name_hi); ?> <?php else: ?> <?php echo e($product->product_name_en); ?> <?php endif; ?></a></h3>
          <div class="rating rateit-small"></div>
          <div class="description"></div>


                <?php if($product->discount_price == NULL): ?>
                <div class="product-price"> <span class="price"> $<?php echo e($product->selling_price); ?> </span>   </div>

                <?php else: ?>

                <div class="product-price"> <span class="price"> $<?php echo e($product->discount_price); ?> </span> <span class="price-before-discount">$ <?php echo e($product->selling_price); ?></span> </div>
                <?php endif; ?>




          <!-- /.product-price --> 

        </div>
        <!-- /.product-info -->
        <div class="cart clearfix animate-effect">
          <div class="action">
            <ul class="list-unstyled">
              <li class="add-cart-button btn-group">
                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
              </li>
              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
            </ul>
          </div>
          <!-- /.action --> 
        </div>
        <!-- /.cart --> 
      </div>
      <!-- /.product --> 

    </div>
    <!-- /.products --> 
  </div>
  <!-- /.item -->
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <!-- /.row --> 
              </div>
              <!-- /.category-product --> 
              
            </div>
            <!-- /.tab-pane -->
            <!-- End Product Grid View  -->


            <!-- Product List View Start -->
            <div class="tab-pane " id="list-container">
              <div class="category-product">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="category-product-inner wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                  <div class="products">
                    <div class="product-list product">
                      <div class="row product-list-row">
                        <div class="col col-sm-4 col-lg-4">
                          <div class="product-image">
                            <div class="image"> <img src="<?php echo e(asset($product->product_thumbnil)); ?>" alt=""> </div>
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-sm-8 col-lg-8">
                          <div class="product-info">
                            <h3 class="name"><a href="<?php echo e(url('product/details/'.$product->id.'/'.$product->product_slug_en)); ?>">
                             <?php if(session()->get('language')=='hindi'): ?> <?php echo e($product->product_name_hi); ?> 
                            <?php else: ?>
                           <?php echo e($product->product_name_en); ?>

                          <?php endif; ?></a></h3>
                            <div class="rating rateit-small rateit"><button id="rateit-reset-14" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-14" style="display: none;"></button><div id="rateit-range-14" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-14" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;"><div class="rateit-selected" style="height: 14px; width: 56px;"></div><div class="rateit-hover" style="height:14px"></div></div></div>
                            <?php if($product->discount_price == NULL): ?>
                            <div class="product-price"> <span class="price"> $<?php echo e($product->selling_price); ?> </span>  </div>
                            <?php else: ?>
                              <div class="product-price"> <span class="price"> $<?php echo e($product->discount_price); ?> </span> <span class="price-before-discount">$ <?php echo e($product->selling_price); ?></span> </div>
                             <?php endif; ?>

                            <!-- /.product-price -->
                            <div class="description m-t-10">
            	            <?php if(session()->get('language') == 'hindi'): ?> <?php echo e($product->short_descp_hin); ?> <?php else: ?> <?php echo e($product->short_descp_en); ?> <?php endif; ?></div>
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                  </li>
                                  <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                  <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                                </ul>
                              </div>
                              <!-- /.action --> 
                            </div>
                            <!-- /.cart --> 
                            
                          </div>
                          <!-- /.product-info --> 
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-list-row -->
                      <?php
                        $amount = $product->selling_price - $product->discount_price;
                        $discount = ($amount/$product->selling_price) * 100;
                      ?>  
                      <div>
            <?php if($product->discount_price == NULL): ?>
            <div class="tag new"><span>new</span></div>
            <?php else: ?>
            <div class="tag hot"><span><?php echo e(round($discount)); ?>%</span></div>
            <?php endif; ?>
          </div>
                    </div>
                    <!-- /.product-list --> 
                  </div>
                  <!-- /.products --> 
                </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- /.category-product-inner -->
               
                <!--------- Product List View End ------->
               
              </div>
              <!-- /.category-product --> 
            </div>
            <!-- /.tab-pane #list-container --> 
          </div>
          <!-- /.tab-content -->
          <div class="clearfix filters-container">
            <div class="text-right">
              <div class="pagination-container">
                <ul class="list-inline list-unstyled">
                  <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                <!-- /.list-inline --> 
              </div>
              <!-- /.pagination-container --> </div>
            <!-- /.text-right --> 
            
          </div>
          <!-- /.filters-container --> 
          
        </div>
        <!-- /.search-result-container --> 
        
      </div>
      <!-- /.col --> 
    </div>
    <!-- /.row -->

    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
   <?php echo $__env->make('frontend.body.brands', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- /.logo-slider --> 
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> </div>
  <!-- /.container --> 
  
</div>






<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/frontend/tags/tags_view.blade.php ENDPATH**/ ?>