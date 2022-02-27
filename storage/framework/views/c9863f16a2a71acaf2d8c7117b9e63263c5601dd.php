<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1"> 
  
  <!-- ============================================== TOP MENU ============================================== -->
  <div class="top-bar animate-dropdown">
    <div class="container">
      <div class="header-top-inner">
        <div class="cnt-account">
          <ul class="list-unstyled">
            <li><a href="#"><i class="icon fa fa-user"></i>
            <?php if(session()->get('language')=='hindi'): ?> मेरी प्रोफाइल

            <?php else: ?>
            My Profile
            <?php endif; ?>
            </a></li>
            <li><a href="<?php echo e(route('wishlist')); ?>"><i class="icon fa fa-heart"></i>Wishlist</a></li>
            <li><a href="<?php echo e(route('cart')); ?>"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
            <li><a href="<?php echo e(route('checkout')); ?>"><i class="icon fa fa-check"></i>Checkout</a></li>
            <li><a href="" type="button" data-toggle="modal" data-target="#order_track"><i class="icon fa fa-check"></i>Order Tracking</a></li>
            
            <li>
            <?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(route('login')); ?>"><i class="icon fa fa-user"></i>User Profile</a></li>
            <?php else: ?>
            <a href="<?php echo e(route('login')); ?>"><i class="icon fa fa-lock"></i>Login/Register</a></li>
            <?php endif; ?>

                      </ul>
        </div>
        <!-- /.cnt-account -->
        
        <div class="cnt-block">
          <ul class="list-unstyled list-inline">
            <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">USD </span><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">USD</a></li>
                <li><a href="#">INR</a></li>
                <li><a href="#">GBP</a></li>
              </ul>
            </li>
            <li class="dropdown dropdown-small"> 
            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">
            <span class="value">
            <?php if(session()->get('language')=='hindi'): ?> भाषा: हिंदी 
             <?php else: ?>
            
            Language 
            <?php endif; ?>
            </span>
            <b class="caret"></b></a>
              <ul class="dropdown-menu">
              <?php if(session()->get('language')=='hindi'): ?>
                <li><a href="<?php echo e(route('english.language')); ?>">English</a></li>
                <?php else: ?>
                <li><a href="<?php echo e(route('hindi.language')); ?>">हिंदी</a></li>
                <?php endif; ?>
              </ul>
            </li>
          </ul>
          <!-- /.list-unstyled --> 
        </div>
        <!-- /.cnt-cart -->
        <div class="clearfix"></div>
      </div>
      <!-- /.header-top-inner --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.header-top --> 
  <!-- ============================================== TOP MENU : END ============================================== -->
  <?php 
    $setting = App\Models\SiteSetting::find(1);
  ?>
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder"> 
          <!-- ============================================================= LOGO ============================================================= -->
          <div class="logo"> <a href="<?php echo e(url('/')); ?>"> <img src="<?php echo e(asset($setting->logo)); ?>" alt="logo"> </a> </div>
          <!-- /.logo --> 
          <!-- ============================================================= LOGO : END ============================================================= --> </div>
        <!-- /.logo-holder -->
        
        <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder"> 
          <!-- /.contact-row --> 
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          <div class="search-area">
            <form method="post" action="<?php echo e(route('product.search')); ?>">
              <?php echo csrf_field(); ?>
              <div class="control-group">
                <ul class="categories-filter animate-dropdown">
                  <li class="dropdown"> <a class="dropdown-toggle"  data-toggle="dropdown" href="category.html">Categories <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu" >
                      <li class="menu-header">Computer</li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Clothing</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Electronics</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Shoes</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Watches</a></li>
                    </ul>
                  </li>
                </ul>
                <input class="search-field" onfocus="search_result_show()" onblur="search_result_hide()" id="search" name="search" placeholder="Search here..." />
                <button  type="submit" class="search-button" href="#" ></button> </div>
            </form>
            <div id="searchProducts"></div>
          </div>
          <!-- /.search-area --> 
          <!-- ============================================================= SEARCH AREA : END ============================================================= --> </div>
        <!-- /.top-search-holder -->
        
        <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row"> 
          
        <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
          
          <div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
            <div class="items-cart-inner">
              <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
              <div class="basket-item-count"><span class="count" id="cartQty"></span></div>
              <div class="total-price-basket"> <span class="lbl">cart -</span> <span class="total-price"> <span class="sign">$</span><span class="value" id="cartSubTotal"></span> </span> </div>
            </div>
            </a>
            <ul class="dropdown-menu">
              <li>
                <!-- Start mini cart ajax -->
                <div id="miniCart">

                </div>
                <!-- End mini cart ajax -->
              
                <div class="clearfix cart-total">
                  <div class="pull-right"> <span class="text">Sub Total :</span><span class='price' id="cartSubTotal"></span> </div>
                  <div class="clearfix"></div>
                  <a href="<?php echo e(route('checkout')); ?>" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a> 
                </div>
                <!-- /.cart-total--> 
                
              </li>
            </ul>
            <!-- /.dropdown-menu--> 
          </div>
          <!-- /.dropdown-cart --> 
          
          <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= --> </div>
        <!-- /.top-cart-row --> 
      </div>
      <!-- /.row --> 
      
    </div>
    <!-- /.container --> 
    
  </div>
  <!-- /.main-header --> 
  
  <!-- ============================================== NAVBAR ============================================== -->
  <div class="header-nav animate-dropdown">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
       <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
       <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
              <ul class="nav navbar-nav">
                <li class="active dropdown yamm-fw"> 
                <a href="<?php echo e(url('/')); ?>" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">
                <?php if(session()->get('language')=='hindi'): ?> घर 
                <?php else: ?>
                 Home 

                <?php endif; ?>
                </a> </li>
                
                <?php
                   $categories = App\Models\Category::orderBy('category_name_en','ASC')->get();
                ?>

                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="dropdown yamm mega-menu">
                 <a href="home.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">
                 <?php if(session()->get('language')=='hindi'): ?> <?php echo e($category->category_name_hi); ?> 
                <?php else: ?>
                <?php echo e($category->category_name_en); ?> 

                <?php endif; ?>
                 </a>
                  <ul class="dropdown-menu container">
                    <li>
                      <div class="yamm-content ">
                        <div class="row">
                        <?php
                            $subcategories = App\Models\SubCategory::where('category_id',$category->id)->orderBy('subcategory_name_en','ASC')->get();
                        ?>

                         <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                          <a href="<?php echo e(url('subcategory/product/'.$subcategory->id.'/'.$subcategory->subcategory_slug_en)); ?>">  
                          <h2 class="title">
                            <?php if(session()->get('language')=='hindi'): ?> <?php echo e($subcategory->subcategory_name_hi); ?> 
                                <?php else: ?>
                              <?php echo e($subcategory->subcategory_name_en); ?> 

                            <?php endif; ?>  
                          
                              </h2>
                              </a>
                             <?php
                                $subsubcategories = App\Models\SubSubCategory::where('subcategory_id',$subcategory->id)->orderBy('subsubcategory_name_en','ASC')->get();
                             ?>
                             <?php $__currentLoopData = $subsubcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subsubcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <ul class="link">
                              <li><a href="<?php echo e(url('subsubcategory/product/'.$subsubcategory->id.'/'.$subsubcategory->subsubcategory_slug_en)); ?>">
                              <?php if(session()->get('language')=='hindi'): ?> <?php echo e($subsubcategory->subsubcategory_name_hi); ?> 
                                <?php else: ?>
                              <?php echo e($subsubcategory->subsubcategory_name_en); ?> 

                            <?php endif; ?>  
                              </a></li>
                              </ul>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           
                          </div>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          
                          <!-- /.col -->
                          
                          <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image"> <img class="img-responsive" src="<?php echo e(asset('frontend/assets/images/banners/top-menu-banner.jpg')); ?>" alt=""> </div>
                          <!-- /.yamm-content --> 
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                <li class="dropdown  navbar-right special-menu"> <a href="#">Todays offer</a> </li>
                <li class="dropdown  navbar-right special-menu"> <a href="<?php echo e(route('home.blog')); ?>">Blog</a> </li>
              </ul>
              <!-- /.navbar-nav -->
              <div class="clearfix"></div>
            </div>
            <!-- /.nav-outer --> 
          </div>
          <!-- /.navbar-collapse --> 
          
        </div>
        <!-- /.nav-bg-class --> 
      </div>
      <!-- /.navbar-default --> 
    </div>
    <!-- /.container-class --> 
    
  </div>
  <!-- /.header-nav --> 
  <!-- ============================================== NAVBAR : END ============================================== --> 

  


<!-- Modal -->
<div class="modal fade" id="order_track" tabindex="-1" aria-labelledby="order_track1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="order_track1">Track Your Order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="" action="<?php echo e(route('order.tracking')); ?>">
            <?php echo csrf_field(); ?>
            <div class="modal-body">
              <label>Invoice Code</label>
              <input type="text" name="code" required="" class="form-control" placeholder="Your Order Invoice Number">           
            </div>

             <button class="btn btn-danger" type="submit" style="margin-left: 17px;"> Track Now </button>

            </div>
          </form>
      </div>
    </div>
  </div>
</div>


</header>
<style>
  
.search-area
{
  position: relative;
}
  #searchProducts 
  {
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    background: #ffffff;
    z-index: 999;
    border-radius: 8px;
    margin-top: 5px;
  }
</style>
<script>
  function search_result_hide(){
    $("#searchProducts").slideUp();
  }
   function search_result_show(){
      $("#searchProducts").slideDown();
  }
</script>
<!-- ============================================== HEADER : END ============================================== --><?php /**PATH C:\xampp\htdocs\ecommerce\ecommercee\resources\views/frontend/body/header.blade.php ENDPATH**/ ?>