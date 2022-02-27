
<?php $__env->startSection('admin'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 >Add Product</h3>
				</div>
			</div>
		</div>	  

		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="post" action="<?php echo e(route('product-store')); ?>" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
					  <div class="row">
						<div class="col-12">
                                <div class="row">
                                <div class="col-md-4">

                                        <div class="form-group">
                                        <h5>Brand Select <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="brand_id"  class="form-control"  required="">
                                                <option value="" selected=""disabled="">Select Brand</option>
                                                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                  <option value="<?php echo e($brand->id); ?>"><?php echo e($brand->brand_name_en); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['brand_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class=" text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <div class="help-block"></div></div>
                                        </div>  

                                        </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                        <h5>Category Select <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="category_id"  class="form-control"  required="">
                                                <option value="" selected=""disabled="">Select Category</option>
                                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($category->id); ?>"><?php echo e($category->category_name_en); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                             <span class=" text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <div class="help-block"></div></div>
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                            
                                        <div class="form-group">
                                        <h5>SubCategory Select <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="subcategory_id"  class="form-control"  required="">
                                                <option value="" selected=""disabled="">Select SubCategory</option>
                                              
                                            </select>
                                            <?php $__errorArgs = ['subcategory_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class=" text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <div class="help-block"></div></div>
                                        </div> 
                                        </div>

                                 </div>
                                 <!-- 2nd Row -->
                                 <div class="row">
                                <div class="col-md-4">

                                        <div class="form-group">
                                        <h5>SubSubCategory Select <span class="text-danger" required="">*</span></h5>
                                        <div class="controls">
                                            <select name="subsubcategory_id"  class="form-control">
                                                <option value="" selected=""disabled="">Select SubSub Category</option>
                                                
                                            </select>
                                            <?php $__errorArgs = ['subsubcategory_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class=" text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <div class="help-block"></div></div>
                                        </div>  

                                        </div>
                                        <div class="col-md-4">
                                         <div class="form-group">
								            <h5>Product Name En <span class="text-danger">*</span></h5>
								            <div class="controls">
									          <input type="text" name="product_name_en" class="form-control"  required=""> </div>
                                              <?php $__errorArgs = ['product_name_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class=" text-danger"><?php echo e($message); ?></span>
                                              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
							             </div>
                                        </div>
                                        <div class="col-md-4">
                                            
                                            <div class="form-group">
                                                <h5>Product Name Hi <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                <input type="text" name="product_name_hi" class="form-control"  required=""> </div>
                                                <?php $__errorArgs = ['product_name_hi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class=" text-danger"><?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                         </div>

                                 </div>

                             <!-- 3rd Row -->
                                   <div class="row">
                                        <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>Product Code<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                    <input type="text" name="product_code" class="form-control"  required=""> </div>
                                                    <?php $__errorArgs = ['product_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class=" text-danger"><?php echo e($message); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                         <div class="form-group">
								            <h5>Product Qty <span class="text-danger">*</span></h5>
								            <div class="controls">
									          <input type="text" name="product_qty" class="form-control"  required=""> </div>
                                              <?php $__errorArgs = ['product_qty'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class=" text-danger"><?php echo e($message); ?></span>
                                              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
							             </div>
                                        </div>
                                        <div class="col-md-4">
                                            
                                            <div class="form-group">
								             <h5>Product Tags En <span class="text-danger">*</span></h5>
								             <div class="controls">
                                             <input type="text" name="product_tags_en"  data-role="tagsinput"  required="" /></div>
                                              <?php $__errorArgs = ['product_tags_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class=" text-danger"><?php echo e($message); ?></span>
                                              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
							                 </div>
                                        </div>
                                    </div>

                                <!-- 4th Row -->
                                <div class="row">
                                <div class="col-md-4">
                                            
                                            <div class="form-group">
								             <h5>Product Tags Hi <span class="text-danger">*</span></h5>
								             <div class="controls">
                                             <input type="text" name="product_tags_hi"  data-role="tagsinput"  required="" /></div>
                                              <?php $__errorArgs = ['product_tags_hi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class=" text-danger"><?php echo e($message); ?></span>
                                              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
							                 </div>
                                        </div>
                                        <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>Product Size En<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                    <input type="text" name="product_size_en" class="form-control"  data-role="tagsinput"  required=""> </div>
                                                    <?php $__errorArgs = ['product_size_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class=" text-danger"><?php echo e($message); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                              <div class="form-group">
                                                    <h5>Product Size Hi<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                    <input type="text" name="product_size_hi" class="form-control"  data-role="tagsinput"  required=""> </div>
                                                    <?php $__errorArgs = ['product_size_hi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class=" text-danger"><?php echo e($message); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                        </div>

                                    </div>

                                     <!-- 5th Row -->
                                <div class="row">
                                <div class="col-md-4">
                                            
                                            <div class="form-group">
								             <h5>Product Color En <span class="text-danger">*</span></h5>
								             <div class="controls">
                                             <input type="text" name="product_color_en"  data-role="tagsinput"  required="" /></div>
                                              <?php $__errorArgs = ['product_color_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class=" text-danger"><?php echo e($message); ?></span>
                                              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
							                 </div>
                                        </div>
                                        <div class="col-md-4">

                                                <div class="form-group">
                                                    <h5>Product Color Hi<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                    <input type="text" name="product_color_hi" class="form-control"  data-role="tagsinput"  required=""> </div>
                                                    <?php $__errorArgs = ['product_color_hi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class=" text-danger"><?php echo e($message); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                              <div class="form-group">
                                                    <h5>Product Selling Price <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                    <input type="text" name="selling_price" class="form-control"  required="" > </div>
                                                    <?php $__errorArgs = ['selling_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class=" text-danger"><?php echo e($message); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                        </div>

                                    </div>
                                <!-- 6th Row -->
                          <div class="row">
                                <div class="col-md-4">
                                            
                                            <div class="form-group">
                                              <h5>Product Discount Price <span class="text-danger">*</span></h5>
                                              <div class="controls">
                                                              <input type="text" name="discount_price" class="form-control"  required="" /></div>
                                                              <?php $__errorArgs = ['discount_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                <span class=" text-danger"><?php echo e($message); ?></span>
                                                              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                        </div>
                                        <div class="col-md-4">

                                                      <div class="form-group">
                                          <h5>Main Thumbanil <span class="text-danger">*</span></h5>
                                          <div class="controls">
                                                          <input type="file" name="product_thumbnil" class="form-control" onChange="mainThumbUrl(this)"  required="" />
                                                          
                               
                                                            <?php $__errorArgs = ['product_thumbnil'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                              <span class=" text-danger"><?php echo e($message); ?></span>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        <img src="" id="mainThumb"/>
                                                            </div>
                                            </div>
                                  </div>
                                        <div class="col-md-4">
                                              <div class="form-group">
                                                    <h5>Multiple Images<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                    <input type="file" name="multi_img[]" class="form-control" multiple="" id="multiImg"  required="" > 
                                                    <?php $__errorArgs = ['multi_img'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class=" text-danger"><?php echo e($message); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    <div class="row" id="preview_img"> </div>
                                                    </div>
                                                </div>
                                        </div>

                                    </div>
                                <!-- 7th Row -->
                                  <div class="row">
                                    <div class="col-md-6">
                                                  <div class="form-group">
                                                    <h5>Short Description English <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                    <textarea name="short_descp_en" class="form-control"  required="" ></textarea> </div>
                                                    <?php $__errorArgs = ['short_descp_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class=" text-danger"><?php echo e($message); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                  </div>
                                    </div>
                                    <div class="col-md-6">
                                                  <div class="form-group">
                                                    <h5>Short Description Hindi <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                    <textarea name="short_descp_hi" class="form-control"  required="" ></textarea> </div>
                                                    <?php $__errorArgs = ['short_descp_hi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class=" text-danger"><?php echo e($message); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                  </div>
                                    </div>
                                  </div>

                                <!-- 8th Row -->
                                  <div class="row">
                                    <div class="col-md-6">
                                                  <div class="form-group">
                                                    <h5>Long Description English <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                    <textarea id="editor1" name="long_descp_en" rows="10" cols="80"  required="">
                                                                Long Description English
                                                    </textarea> </div>
                                                    <?php $__errorArgs = ['long_descp_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class=" text-danger"><?php echo e($message); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                  </div>
                                    </div>
                                    <div class="col-md-6">
                                                  <div class="form-group">
                                                    <h5>Long Description Hindi <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                    <textarea id="editor2" name="long_descp_hi" rows="10" cols="80"  required="">
                                                        Long Description Hindi
                                                    </textarea> </div>
                                                    <?php $__errorArgs = ['short_descp_hi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class=" text-danger"><?php echo e($message); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                  </div>
                                    </div>
                                  </div>

                                  <hr>


						</div>
					  </div>
						<div class="row">
            <div class="col-md-6">
								<div class="form-group">
									<h5>Checkbox Group <span class="text-danger">*</span></h5>
									<div class="controls">
										<fieldset>
											<input type="checkbox" id="checkbox_2" name="hot_deals"  value="1">
											<label for="checkbox_2">Hot Deals</label>
										</fieldset>
										<fieldset>
											<input type="checkbox" id="checkbox_3" name="featured" value="1">
											<label for="checkbox_3">Featured</label>
										</fieldset>
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<h5>Checkbox Group <span class="text-danger">*</span></h5>
									<div class="controls">
										<fieldset>
											<input type="checkbox" id="checkbox_4" name="special_offer" value="1">
											<label for="checkbox_4">Special Offer</label>
										</fieldset>
										<fieldset>
											<input type="checkbox" id="checkbox_5" name="special_deals" value="1">
											<label for="checkbox_5">Special Deals</label>
										</fieldset>
									</div>
								</div>
							</div>
						</div>

						<div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add Product">
              						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>


    <script type="text/javascript">
      $(document).ready(function() {
        $('select[name="category_id"]').on('change', function(){
            var category_id = $(this).val();
            if(category_id) {
                $.ajax({
                    url: "<?php echo e(url('/category/subcategory/ajax')); ?>/"+category_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                      $('select[name="subsubcategory_id"]').html('');
                       var d =$('select[name="subcategory_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name_en + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });


        $('select[name="subcategory_id"]').on('change', function(){
            var subcategory_id = $(this).val();
            if(subcategory_id) {
                $.ajax({
                    url: "<?php echo e(url('/category/sub-subcategory/ajax')); ?>/"+subcategory_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                       var d =$('select[name="subsubcategory_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="subsubcategory_id"]').append('<option value="'+ value.id +'">' + value.subsubcategory_name_en + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });
    });
    </script>
    <script type="text/javascript">
      function mainThumbUrl(input){
        if(input.files && input.files[0]){
          var reader = new FileReader();
          reader.onload =function(e){
            $('#mainThumb').attr('src',e.target.result).width(80).height(80);
          };
          reader.readAsDataURL(input.files[0]);
        }
      }
    </script>
    <script type="text/javascript">
          $(document).ready(function(){
   $('#multiImg').on('change', function(){ //on file input change
      if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
      {
          var data = $(this)[0].files; //this file data
           
          $.each(data, function(index, file){ //loop though each file
              if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                  var fRead = new FileReader(); //new filereader
                  fRead.onload = (function(file){ //trigger function on successful read
                  return function(e) {
                      var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(80)
                  .height(80); //create image element 
                      $('#preview_img').append(img); //append image to output element
                  };
                  })(file);
                  fRead.readAsDataURL(file); //URL representing the file's data.
              }
          });
           
      }
      else
      {
          alert("Your browser doesn't support File API!"); //if File API is absent
      }
   });
  });
   

    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/backend/product/product_add.blade.php ENDPATH**/ ?>