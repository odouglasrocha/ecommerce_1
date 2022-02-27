
  <!-- Left side column. contains the logo and sidebar -->
<?php
 $prefix=Request::route()->getPrefix();
 $route=Route::current()->getName();

?>
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="<?php echo e(url('admin/dashboard')); ?>">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="<?php echo e(asset('backend/images/logo-dark.png')); ?>" alt="">
						  <h3><b>Ecom</b>Shop</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li class="<?php echo e(($route=='dashboard')?'active':''); ?>">
          <a href="<?php echo e(url('admin/dashboard')); ?>">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  
        <?php
        $brand = (auth()->guard('admin')->user()->brand == 1);
        $category = (auth()->guard('admin')->user()->category == 1);
        $product = (auth()->guard('admin')->user()->product == 1);
        $slider = (auth()->guard('admin')->user()->slider == 1);
        $coupons = (auth()->guard('admin')->user()->coupons == 1);
        $shipping = (auth()->guard('admin')->user()->shipping == 1);
        $blog = (auth()->guard('admin')->user()->blog == 1);
        $setting = (auth()->guard('admin')->user()->setting == 1);
        $returnorders = (auth()->guard('admin')->user()->returnorders == 1);
        $review = (auth()->guard('admin')->user()->review == 1);
        $blog_review = (auth()->guard('admin')->user()->blog_review == 1);
        $orders = (auth()->guard('admin')->user()->orders == 1);
        $stock = (auth()->guard('admin')->user()->stock == 1);
        $reports = (auth()->guard('admin')->user()->reports == 1);
        $allusers = (auth()->guard('admin')->user()->alluser == 1);
        $adminuserrole = (auth()->guard('admin')->user()->adminuserrole == 1);
        ?>

		
        <?php if($brand == true): ?> 
        <li class="treeview <?php echo e(($prefix=='/brand')?'active':''); ?>">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Brands</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo e(($route=='all.brand')?'active':''); ?>"><a href="<?php echo e(route('all.brand')); ?>"><i class="ti-more"></i>All Brands</a></li>
          </ul>
        </li> 
        <?php else: ?>
        <?php endif; ?>
		  
        <?php if($category == true): ?> 
        <li class="treeview <?php echo e(($prefix=='/category')?'active':''); ?>" >
          <a href="#">
            <i data-feather="mail"></i> <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo e(($route=='all.category')?'active':''); ?>"><a href="<?php echo e(route('all.category')); ?>"><i class="ti-more"></i>All Category</a></li>
            <li class="<?php echo e(($route=='all.subcategory')?'active':''); ?>"><a href="<?php echo e(route('all.subcategory')); ?>"><i class="ti-more"></i>All SubCategory</a></li>
            <li class="<?php echo e(($route=='all.subsubcategory')?'active':''); ?>"><a href="<?php echo e(route('all.subsubcategory')); ?>"><i class="ti-more"></i>All Sub->SubCategory</a></li>
          </ul>
        </li>
        <?php else: ?>
        <?php endif; ?>
		
        <?php if($product==true): ?>
        <li class="treeview <?php echo e(($prefix=='/product')?'active':''); ?>">
          <a href="#">
            <i data-feather="file"></i>
            <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo e(($route=='add-product')?'active':''); ?>"><a href="<?php echo e(route('add-product')); ?>"><i class="ti-more"></i>Add Products</a></li>
            <li class="<?php echo e(($route=='manage-product')?'active':''); ?>"><a href="<?php echo e(route('manage-product')); ?>"><i class="ti-more"></i>Manage Products</a></li>
          </ul>
        </li> 
        <?php else: ?>
        <?php endif; ?>

        <?php if($slider==true): ?>
        <li class="treeview <?php echo e(($prefix=='/slider')?'active':''); ?>">
          <a href="#">
            <i data-feather="file"></i>
            <span>Sliders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
            <li class="<?php echo e(($route=='manage-slider')?'active':''); ?>"><a href="<?php echo e(route('manage-slider')); ?>"><i class="ti-more"></i>Manage Sliders</a></li>
          </ul>
        </li> 
        <?php else: ?>
        <?php endif; ?>

        <?php if($coupons==true): ?>
        <li class="treeview <?php echo e(($prefix=='/coupons')?'active':''); ?>">
          <a href="#">
            <i data-feather="file"></i>
            <span>Coupons</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
            <li class="<?php echo e(($route=='manage-coupon')?'active':''); ?>"><a href="<?php echo e(route('manage-coupon')); ?>"><i class="ti-more"></i>Manage Coupon</a></li>
          </ul>
        </li> 		  
        <?php else: ?>
        <?php endif; ?>

        <?php if($shipping==true): ?>
        <li class="treeview <?php echo e(($prefix=='/shipping')?'active':''); ?>">
          <a href="#">
            <i data-feather="file"></i>
            <span>Shipping Area</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
            <li class="<?php echo e(($route=='manage-division')?'active':''); ?>"><a href="<?php echo e(route('manage-division')); ?>"><i class="ti-more"></i>Ship Division</a></li>

            <li class="<?php echo e(($route=='manage-district')?'active':''); ?>"><a href="<?php echo e(route('manage-district')); ?>"><i class="ti-more"></i>Ship District</a></li>

            <li class="<?php echo e(($route=='manage-state')?'active':''); ?>"><a href="<?php echo e(route('manage-state')); ?>"><i class="ti-more"></i>Ship State</a></li>
          </ul>
        </li> 
        <?php else: ?>
        <?php endif; ?>


        <?php if($blog==true): ?>
        <li class="treeview <?php echo e(($prefix=='/blog')?'active':''); ?>">
          <a href="#">
            <i data-feather="file"></i>
            <span>Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
            <li class="<?php echo e(($route=='blog.category')?'active':''); ?>"><a href="<?php echo e(route('blog.category')); ?>"><i class="ti-more"></i>Blog Category</a></li>
            <li class="<?php echo e(($route=='view.blog_post')?'active':''); ?>"><a href="<?php echo e(route('view.blog_post')); ?>"><i class="ti-more"></i>View Blog Post </a></li>
            <li class="<?php echo e(($route=='add.blog_post')?'active':''); ?>"><a href="<?php echo e(route('add.blog_post')); ?>"><i class="ti-more"></i>Add Blog Post </a></li>

          
          </ul>
        </li> 
        <?php else: ?>
        <?php endif; ?>

        <?php if($setting==true): ?>
        <li class="treeview <?php echo e(($prefix=='/setting')?'active':''); ?>">
          <a href="#">
            <i data-feather="file"></i>
            <span>Manage Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo e(($route=='site.setting')?'active':''); ?>"><a href="<?php echo e(route('site.setting')); ?>"><i class="ti-more"></i>Site Setting</a></li>
            <li class="<?php echo e(($route=='seo.setting')?'active':''); ?>"><a href="<?php echo e(route('seo.setting')); ?>"><i class="ti-more"></i>SEO Setting</a></li>
          
          </ul>
        </li> 
        <?php else: ?>
        <?php endif; ?>

        <?php if($returnorders==true): ?>
        <li class="treeview <?php echo e(($prefix=='/return')?'active':''); ?>">
          <a href="#">
            <i data-feather="file"></i>
            <span>Return Order</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo e(($route=='return.request')?'active':''); ?>"><a href="<?php echo e(route('return.request')); ?>"><i class="ti-more"></i>Return Request</a></li>
            <li class="<?php echo e(($route=='all.request')?'active':''); ?>"><a href="<?php echo e(route('all.request')); ?>"><i class="ti-more"></i>All Request</a></li>
          </ul>
        </li> 
        <?php else: ?>
        <?php endif; ?>

        <?php if($review==true): ?>
        <li class="treeview <?php echo e(($prefix=='/review')?'active':''); ?>">
          <a href="#">
            <i data-feather="file"></i>
            <span>Manage User Review</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo e(($route=='pending.review')?'active':''); ?>"><a href="<?php echo e(route('pending.review')); ?>"><i class="ti-more"></i>Pending Review</a></li>
            <li class="<?php echo e(($route=='publish.review')?'active':''); ?>"><a href="<?php echo e(route('publish.review')); ?>"><i class="ti-more"></i>Publish Review</a></li>

          </ul>
        </li> 
        <?php else: ?>
        <?php endif; ?>

        
        <?php if($blog_review==true): ?>
        <li class="treeview <?php echo e(($prefix=='/blog_review')?'active':''); ?>">
          <a href="#">
            <i data-feather="file"></i>
            <span>Manage Blog Review</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo e(($route=='blog_pending.review')?'active':''); ?>"><a href="<?php echo e(route('blog_pending.review')); ?>"><i class="ti-more"></i>Blog Pending Review</a></li>
            <li class="<?php echo e(($route=='blog_publish.review')?'active':''); ?>"><a href="<?php echo e(route('blog_publish.review')); ?>"><i class="ti-more"></i>Blog Publish Review</a></li>
           
          </ul>
        </li> 
        <?php else: ?>
        <?php endif; ?>
		  

        <?php if($orders==true): ?>
        <li class="treeview <?php echo e(($prefix=='/orders')?'active':''); ?>">
          <a href="#">
            <i data-feather="file"></i>
            <span>Orders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
            <li class="<?php echo e(($route=='pending-orders')?'active':''); ?>"><a href="<?php echo e(route('pending-orders')); ?>"><i class="ti-more"></i>Pending Orders</a></li>
            <li class="<?php echo e(($route=='confirmed-orders')?'active':''); ?>"><a href="<?php echo e(route('confirmed-orders')); ?>"><i class="ti-more"></i>Confirmed Orders</a></li>
            <li class="<?php echo e(($route=='processing-orders')?'active':''); ?>"><a href="<?php echo e(route('processing-orders')); ?>"><i class="ti-more"></i>Processing Orders</a></li>
            <li class="<?php echo e(($route=='picked-orders')?'active':''); ?>"><a href="<?php echo e(route('picked-orders')); ?>"><i class="ti-more"></i>Picked Orders</a></li>
            <li class="<?php echo e(($route=='shipped-orders')?'active':''); ?>"><a href="<?php echo e(route('shipped-orders')); ?>"><i class="ti-more"></i>Shipped Orders</a></li>
            <li class="<?php echo e(($route=='delivered-orders')?'active':''); ?>"><a href="<?php echo e(route('delivered-orders')); ?>"><i class="ti-more"></i>Delivered Orders</a></li>
            <li class="<?php echo e(($route=='canceled-orders')?'active':''); ?>"><a href="<?php echo e(route('canceled-orders')); ?>"><i class="ti-more"></i>Canceled Orders</a></li>
          </ul>
        </li> 
        <?php else: ?>
        <?php endif; ?>

        <?php if($reports==true): ?>
        <li class="treeview <?php echo e(($prefix=='/reports')?'active':''); ?>">
          <a href="#">
            <i data-feather="file"></i>
            <span>All Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
            <li class="<?php echo e(($route=='all-reports')?'active':''); ?>"><a href="<?php echo e(route('all-reports')); ?>"><i class="ti-more"></i>All Reports</a></li>
            
          </ul>
        </li> 
        <?php else: ?>
        <?php endif; ?>


        <?php if($stock==true): ?>
        <li class="treeview <?php echo e(($prefix=='/stock')?'active':''); ?>">
          <a href="#">
            <i data-feather="file"></i>
            <span>Manage Stock</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
            <li class="<?php echo e(($route=='product-stock')?'active':''); ?>"><a href="<?php echo e(route('product-stock')); ?>"><i class="ti-more"></i>Product Stock</a></li>
            
          </ul>
        </li> 
        <?php else: ?>
        <?php endif; ?>

        	<?php if($allusers==true): ?>
        <li class="treeview <?php echo e(($prefix=='/allusers')?'active':''); ?>">
          <a href="#">
            <i data-feather="file"></i>
            <span>All Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
            <li class="<?php echo e(($route=='all-users')?'active':''); ?>"><a href="<?php echo e(route('all-users')); ?>"><i class="ti-more"></i>All Users</a></li>
            
          </ul>
        </li> 
        <?php else: ?>
        <?php endif; ?>
        

        <?php if($adminuserrole==true): ?>
        <li class="treeview <?php echo e(($prefix=='/adminuserrole')?'active':''); ?>">
          <a href="#">
            <i data-feather="file"></i>
            <span>Admin User Role</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
            <li class="<?php echo e(($route=='all-admin-user')?'active':''); ?>"><a href="<?php echo e(route('all-admin-user')); ?>"><i class="ti-more"></i>All Admin Users</a></li>
            
          </ul>
        </li> 
        <?php else: ?>
        <?php endif; ?>

        
      </ul>
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/admin/body/sidebar.blade.php ENDPATH**/ ?>