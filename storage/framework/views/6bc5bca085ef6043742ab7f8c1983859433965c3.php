<?php $__env->startSection('isi'); ?>

    
   
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Forms</h3>
                            </div>
                            <div class="module-body">

                                    
                                    <br />

                                    <form class="form-horizontal row-fluid" action="<?php echo e(route('up_slider')); ?>" method="post" enctype="multipart/form-data">
                                    <?php echo e(csrf_field()); ?>


                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Basic Input</label>
                                            <div class="controls">
                                                <input type="text" name="judul" id="basicinput" placeholder="Type something here..." class="span8">
                                                <span class="help-inline">Minimum 5 Characters</span>
                                            </div>
                                        </div>

                            
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Textarea</label>
                                            <div class="controls">
                                                <textarea class="span8" name="keterangan" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">File Gambar</label>
                                            <div class="controls">
                                                <input type="file" name="file" id="basicinput" placeholder="Type something here..." class="span8">
                                                <span class="help-inline">Jpeg | jpg | png</span>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <div class="controls">

                                                <button type="submit" class="btn btn-mini btn-primary">Tambahkan</button>
                                            </div>
                                        </div>
                                    </form> <br><br>


                                    <table class="table table-bordered">
                                  <thead>
                                    <tr>
                                       <th>Judul</th>
                                        <th>Isi</th>
                                        <th>File</th>
                                        <th>Admin</th>
                                        <th>action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                   <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                       <td><?php echo e($slider->judul); ?></td>
                                        <td><?php echo e($slider->deskripsi); ?></td>
                                        <td><?php echo e($slider->gambar); ?></td>
                                        <td><?php echo e($slider->id_admin); ?></td>
                                        <td><a href="#" class="btn btn-green">  <i class="fa fa-edit"> </i>   edit</a>
                                            <a href="/admin/slider/del/<?php echo e($slider->id); ?>" class="btn btn-red">  <i class="fa fa-trash-o"> </i>   hapus</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </tbody>
                                </table>

                            </div>

                        </div>
                       



                                                <button type="submit" class="btn">Submit Form</button>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>


                        
                        
                    </div><!--/.content-->
                </div><!--/.span9-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.bmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abrisam\AppData\Local\gitkraken\app-6.1.4\hasnainkhan\resources\views/admin/slidebar.blade.php ENDPATH**/ ?>