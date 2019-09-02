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
   
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Forms Galeri</h3>
                            </div>
                            <div class="module-body">

                                    
                                    <br />



                                    <form class="form-horizontal row-fluid" action="<?php echo e(route('galeri_store')); ?>" method="post" enctype="multipart/form-data">
                                    <?php echo e(csrf_field()); ?>


                                    
                                        <div class="control-group increment">
                                            <label class="control-label" for="basicinput">File Gambar</label>
                                            <div class="controls">
                                                <input type="file" name="file[]" id="basicinput" placeholder="Upload Image..." class="span8" multiple="">
                                                <span class="help-inline">Input 1 atau lebih</span>
                                            </div>
                                        </div>
                                       

                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" class="btn">Submit Form</button>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>

                        
                        
                    </div><!--/.content-->
                </div><!--/.span9-->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.bmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ppp\resources\views//admin/galeriadd.blade.php ENDPATH**/ ?>