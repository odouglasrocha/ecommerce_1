<?php
$categories = App\Models\Category::orderBy('category_name_en','ASC')->get();
?> 

<div class="side-menu animate-dropdown outer-bottom-xs">
          <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
          <nav class="yamm megamenu-horizontal">
            <ul class="nav">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li class="dropdown menu-item"> 
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon <?php echo e($category->category_icon); ?>" aria-hidden="true"></i>
              <?php if(session()->get('language')=='hindi'): ?> <?php echo e($category->category_name_hi); ?> 
                <?php else: ?>
                <?php echo e($category->category_name_en); ?> 

                <?php endif; ?>
              
              </a>
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                    <?php
                            $subcategories = App\Models\SubCategory::where('category_id',$category->id)->orderBy('subcategory_name_en','ASC')->get();
                        ?>
                        <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="col-sm-12 col-md-3">
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
                          <ul class="links list-unstyled">
                          <li><a href="<?php echo e(url('subsubcategory/product/'.$subsubcategory->id.'/'.$subsubcategory->subsubcategory_slug_en)); ?>">
                            <?php if(session()->get('language') == 'hindi'): ?> <?php echo e($subsubcategory->subsubcategory_name_hin); ?> <?php else: ?> <?php echo e($subsubcategory->subsubcategory_name_en); ?> <?php endif; ?></a></li>

                        </ul>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <!-- /.col -->
 
                    </div>
                    <!-- /.row --> 
                  </li>
                  <!-- /.yamm-content -->
                </ul>
                <!-- /.dropdown-menu --> </li>
              
              
              <!-- /.menu-item -->
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     

  
              
              </ul>
            <!-- /.nav --> 
          </nav>
          <!-- /.megamenu-horizontal --> 
        </div>
        <!-- /.side-menu --> 
<?php /**PATH C:\xampp\htdocs\laravel\ecommercee\resources\views/frontend/common/vertical_menu.blade.php ENDPATH**/ ?>