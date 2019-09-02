  <?php $__env->startSection('isi'); ?>
   <?php if(count($errors) > 0): ?>
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($error); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
      <?php endif; ?>
   <section class="module bg-dark-60 gallery-page-header parallax-bg home-fade-section" data-background="<?php echo e(asset('master/assets/images/gallery_bg.jpg')); ?>">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Gallery</h2>
                <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row multi-columns-row">
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="gallery-item">
                  <div class="gallery-image"><a class="gallery" href="<?php echo e(asset('master/assets/images/gallery/big/big_1.jpg')); ?>" title="Title 1"><img src="<?php echo e(asset('master/assets/images/gallery/thumbnail/full_3/1.jpg')); ?>" alt="Gallery Image 1"/>
                      <div class="gallery-caption">
                        <div class="gallery-icon"><span class="icon-magnifying-glass"></span></div>
                      </div></a></div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="gallery-item">
                  <div class="gallery-image"><a class="gallery" href="<?php echo e(asset('master/assets/images/gallery/big/big_3.jpg')); ?>" title="Title 2"><img src="<?php echo e(asset('master/assets/images/gallery/thumbnail/full_3/3.jpg')); ?>" alt="Gallery Image 2"/>
                      <div class="gallery-caption">
                        <div class="gallery-icon"><span class="icon-magnifying-glass"></span></div>
                      </div></a></div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="gallery-item">
                  <div class="gallery-image"><a class="gallery" href="<?php echo e(asset('master/assets/images/gallery/big/big_12.jpg')); ?>" title="Title 3"><img src="<?php echo e(asset('master/assets/images/gallery/thumbnail/full_3/12.jpg')); ?>" alt="Gallery Image 3"/>
                      <div class="gallery-caption">
                        <div class="gallery-icon"><span class="icon-magnifying-glass"></span></div>
                      </div></a></div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="gallery-item">
                  <div class="gallery-image"><a class="gallery" href="<?php echo e(asset('master/assets/images/gallery/big/big_13.jpg')); ?>" title="Title 4"><img src="<?php echo e(asset('master/assets/images/gallery/thumbnail/full_3/13.jpg')); ?>" alt="Gallery Image 4"/>
                      <div class="gallery-caption">
                        <div class="gallery-icon"><span class="icon-magnifying-glass"></span></div>
                      </div></a></div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="gallery-item">
                  <div class="gallery-image"><a class="gallery" href="<?php echo e(asset('master/assets/images/gallery/big/big_19.jpg')); ?>" title="Title 5"><img src="<?php echo e(asset('master/assets/images/gallery/thumbnail/full_3/19.jpg')); ?>" alt="Gallery Image 5"/>
                      <div class="gallery-caption">
                        <div class="gallery-icon"><span class="icon-magnifying-glass"></span></div>
                      </div></a></div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="gallery-item">
                  <div class="gallery-image"><a class="gallery" href="<?php echo e(asset('master/assets/images/gallery/big/big_37.jpg')); ?>" title="Title 6"><img src="<?php echo e(asset('master/assets/images/gallery/thumbnail/full_3/37.jpg')); ?>" alt="Gallery Image 6"/>
                      <div class="gallery-caption">
                        <div class="gallery-icon"><span class="icon-magnifying-glass"></span></div>
                      </div></a></div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="gallery-item">
                  <div class="gallery-image"><a class="gallery" href="<?php echo e(asset('master/assets/images/gallery/big/big_46.jpg')); ?>" title="Title 7"><img src="<?php echo e(asset('master/assets/images/gallery/thumbnail/full_3/46.jpg')); ?>" alt="Gallery Image 7"/>
                      <div class="gallery-caption">
                        <div class="gallery-icon"><span class="icon-magnifying-glass"></span></div>
                      </div></a></div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="gallery-item">
                  <div class="gallery-image"><a class="gallery" href="<?php echo e(asset('master/assets/images/gallery/big/big_48.jpg')); ?>" title="Title 8"><img src="<?php echo e(asset('master/assets/images/gallery/thumbnail/full_3/48.jpg')); ?>" alt="Gallery Image 8"/>
                      <div class="gallery-caption">
                        <div class="gallery-icon"><span class="icon-magnifying-glass"></span></div>
                      </div></a></div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="gallery-item">
                  <div class="gallery-image"><a class="gallery" href="<?php echo e(asset('master/assets/images/gallery/big/big_33.jpg')); ?>" title="Title 9"><img src="<?php echo e(asset('master/assets/images/gallery/thumbnail/full_3/33.jpg')); ?>" alt="Gallery Image 9"/>
                      <div class="gallery-caption">
                        <div class="gallery-icon"><span class="icon-magnifying-glass"></span></div>
                      </div></a></div>
                </div>
              </div>
            </div>
          </div>
        </section>

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ppp\resources\views/master/galeri.blade.php ENDPATH**/ ?>