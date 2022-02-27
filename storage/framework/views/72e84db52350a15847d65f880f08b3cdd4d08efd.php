
<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title'); ?>
Blog Category Page
<?php $__env->stopSection(); ?>

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class="active">Blog</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div>

<div class="body-content">
	<div class="container">
		<div class="row">
			<div class="blog-page">
				<div class="col-md-9">
                    <?php $__currentLoopData = $blogpost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="blog-post  wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
	<a href="#"><img class="img-responsive" src="<?php echo e(asset($blog->post_image)); ?>" alt=""></a>
	<h1>
        <a href="<?php echo e(route('blog.details',$blog->id)); ?>">
          <?php if(session()->get('language')=='hindi'): ?> <?php echo e($blog->post_title_hi); ?> 
            <?php else: ?>
            <?php echo e($blog->post_title_en); ?> 

          <?php endif; ?> 
        </a>
    </h1>
	<span class="date-time"><?php echo e(Carbon\Carbon::parse($blog->created_at)->diffForHumans()); ?></span>
    <p><?php if(session()->get('language') == 'hindi'): ?> <?php echo Str::limit($blog->post_details_hi, 200 ); ?> <?php else: ?> <?php echo Str::limit($blog->post_details_en, 200 ); ?> <?php endif; ?></p>
	<a href="<?php echo e(route('blog.details',$blog->id)); ?>" class="btn btn-upper btn-primary read-more">read more</a>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



<div class="clearfix blog-pagination filters-container  wow fadeInUp" style="padding: 0px; background: none; box-shadow: none; margin-top: 15px; border: none; visibility: hidden; animation-name: none;">
						
	<div class="text-right">
         <div class="pagination-container">
	<ul class="list-inline list-unstyled">
		<li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
		<li><a href="#">1</a></li>	
		<li class="active"><a href="#">2</a></li>	
		<li><a href="#">3</a></li>	
		<li><a href="#">4</a></li>	
		<li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
	</ul><!-- /.list-inline -->
</div><!-- /.pagination-container -->    </div><!-- /.text-right -->

</div><!-- /.filters-container -->				</div>
				<div class="col-md-3 sidebar">
                
                
                
					<div class="sidebar-module-container">
						<div class="search-area outer-bottom-small">
    <form>
        <div class="control-group">
            <input placeholder="Type to search" class="search-field">
            <a href="#" class="search-button"></a>   
        </div>
    </form>
</div>		

<div class="home-banner outer-top-n outer-bottom-xs">
<img src="<?php echo e(asset('frontend/assets/images/banners/LHS-banner.jpg')); ?>" alt="Image">
</div>
				<!-- ==============================================CATEGORY============================================== -->
<div class="sidebar-widget outer-bottom-xs wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
	<h3 class="section-title">Blog Category</h3>
	<div class="sidebar-widget-body m-t-10">
		<div class="accordion">
	    	<div class="accordion-group">
	            <div class="accordion-heading">
                <?php $__currentLoopData = $blogcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <ul class="list-group">
                       <a href="<?php echo e(url('blog/category/post',$blog->id)); ?>"> <li class="list-group-item"><?php if(session()->get('language') == 'hindi'): ?> <?php echo e($blog->blog_category_name_hi); ?> <?php else: ?> <?php echo e($blog->blog_category_name_en); ?> <?php endif; ?></li></a>
                    </ul>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	            </div><!-- /.accordion-heading -->
	    </div><!-- /.accordion -->
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
	<!-- ============================================== CATEGORY : END ============================================== -->						

						<!-- ============================================== PRODUCT TAGS ============================================== -->
<div class="sidebar-widget product-tag wow fadeInUp" style="visibility: hidden; animation-name: none;">
	<h3 class="section-title">Product tags</h3>
	<div class="sidebar-widget-body outer-top-xs">
		<div class="tag-list">					
			<a class="item" title="Phone" href="category.html">Phone</a>
			<a class="item active" title="Vest" href="category.html">Vest</a>
			<a class="item" title="Smartphone" href="category.html">Smartphone</a>
			<a class="item" title="Furniture" href="category.html">Furniture</a>
			<a class="item" title="T-shirt" href="category.html">T-shirt</a>
			<a class="item" title="Sweatpants" href="category.html">Sweatpants</a>
			<a class="item" title="Sneaker" href="category.html">Sneaker</a>
			<a class="item" title="Toys" href="category.html">Toys</a>
			<a class="item" title="Rose" href="category.html">Rose</a>
		</div><!-- /.tag-list -->
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== PRODUCT TAGS : END ============================================== -->					</div>
				</div>
			</div>
		</div>
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->

<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div>
</div>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/frontend/blog/blog_cat_list.blade.php ENDPATH**/ ?>