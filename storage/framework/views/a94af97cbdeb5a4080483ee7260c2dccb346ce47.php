
<?php $__env->startSection('content'); ?>

<?php $__env->startSection('title'); ?>
<?php echo e($blogpost->post_title_en); ?>

<?php $__env->stopSection(); ?>



 <div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class='active'><?php echo e($blogpost->post_title_en); ?></li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="row">
			<div class="blog-page">
				<div class="col-md-9">
					<div class="blog-post wow fadeInUp">
	<img class="img-responsive" src="<?php echo e(asset($blogpost->post_image)); ?>" alt="">


	<h1><?php if(session()->get('language') == 'hindi'): ?> <?php echo e($blogpost->post_title_hi); ?> <?php else: ?> <?php echo e($blogpost->post_title_en); ?> <?php endif; ?></h1>




	<span class="date-time"><?php echo e(Carbon\Carbon::parse($blogpost->created_at)->diffForHumans()); ?></span>
	
	<div class="social-media">
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
            
	</div>

	<p> <?php if(session()->get('language') == 'hindi'): ?> <?php echo $blogpost->post_details_hi; ?> <?php else: ?> <?php echo $blogpost->post_details_en; ?> <?php endif; ?>
	</p>



	<div class="social-media">
		<span>Share Post:</span>
	
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
            
	</div>
</div>

			<div class="blog-write-comment outer-bottom-xs outer-top-xs">
				<div class="row">
				<div class="blog-review wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
	<div class="row">
		<div class="col-md-12">
			<h3 class="title-review-comments">Comments</h3>
		</div>
		<?php
			$reviews = App\Models\Blog\BlogReview::where('blog_id',$blogpost->id)->latest()->limit(5)->get();
		?>		
		<div class="col-md-10 col-sm-10 blog-comments outer-bottom-xs">
		<?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		   <?php if($item->status == 0): ?>

			<?php else: ?>
			<div class="blog-comments-responce outer-top-xs ">
				<div class="row">
					<div class="col-md-2 col-sm-2">
						<img src="<?php echo e(asset('upload/no_image.jpg')); ?>" alt="Responsive image" class="img-rounded img-responsive">
					</div>
					<div class="col-md-10 col-sm-10 outer-bottom-xs">
						<div class="blog-sub-comments inner-bottom-xs">
							<h4><b><?php echo e($item->name); ?></b></h4>
							<h6><?php echo e($item->summary); ?></h6>
							<span class="review-action pull-right">
							  <?php echo e(Carbon\Carbon::parse($item->created_at)->diffForHumans()); ?>

									
							</span>
							<p><?php echo e($item->comments); ?></p>
						</div>
					</div>
				</div>
			</div>
		   <?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
</div>
				</div>
	<div class="row">
		<div class="col-md-12">
			<h4>Leave A Comment</h4>
		</div>
		<?php
			$reviews = App\Models\Blog\BlogReview::where('blog_id',$blogpost->id)->latest()->limit(5)->get();
		?>	
	
		<form class="register-form" method="post" action="<?php echo e(route('blog_review.store')); ?>" role="form">
			<?php echo csrf_field(); ?>
		<div class="col-md-4">

			<input type="hidden" name="blogpost_id" value="<?php echo e($blogpost->id); ?>">
				<div class="form-group">
			    <label class="info-title" for="exampleInputName">Your Name <span>*</span></label>
			    <input type="text" name="name" class="form-control unicase-form-control text-input" id="exampleInputName" required="" placeholder="">
			  </div>
		
		</div>
		<div class="col-md-4">
		
				<div class="form-group">
			    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
			    <input type="email" name="email" class="form-control unicase-form-control text-input" required="" id="exampleInputEmail1" placeholder="">
			  </div>

		</div>
		<div class="col-md-4">

				<div class="form-group">
			    <label class="info-title" for="exampleInputTitle">Title <span>*</span></label>
			    <input type="text" name="summary" class="form-control unicase-form-control text-input" required="" id="exampleInputTitle" placeholder="">
			  </div>

		</div>
		<div class="col-md-12">

				<div class="form-group">
			    <label class="info-title" for="exampleInputComments">Your Comments <span>*</span></label>
			    <textarea class="form-control unicase-form-control" name="comments" id="exampleInputComments" ></textarea>
			  </div>

		</div>
		<div class="col-md-12 outer-bottom-small m-t-20">
			<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Submit Comment</button>
		</div>
		</form>
	</div>
</div>
				</div>
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


		<!-- ======== ====CATEGORY======= === -->
<div class="sidebar-widget outer-bottom-xs wow fadeInUp">
	<h3 class="section-title">Blog Category</h3>
	<div class="sidebar-widget-body m-t-10">
		<div class="accordion">

					<?php $__currentLoopData = $blogcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <ul class="list-group">
                       <a href="<?php echo e(url('blog/category/post',$blog->id)); ?>"> <li class="list-group-item"><?php if(session()->get('language') == 'hindi'): ?> <?php echo e($blog->blog_category_name_hi); ?> <?php else: ?> <?php echo e($blog->blog_category_name_en); ?> <?php endif; ?></li></a>
                    </ul>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



	    </div><!-- /.accordion -->
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
	<!-- ===== ======== CATEGORY : END ==== = -->	




	 <!-- ========= === PRODUCT TAGS =========== === -->
	 <?php echo $__env->make('frontend.common.product_tags', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- /.sidebar-widget -->
<!-- ============================================== PRODUCT TAGS : END ============================================== -->					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-611e0fc5afebb2fc"></script>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('frontend.main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/frontend/blog/blog_details.blade.php ENDPATH**/ ?>