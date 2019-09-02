<?php $__env->startSection('isi'); ?>

    
   
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Forms</h3>
                            </div>
                            <div class="module-body">

                                    
                                    <br />

                                    <form class="form-horizontal row-fluid" action="<?php echo e(route('up_keunggulan')); ?>" method="post" >
                                    <?php echo e(csrf_field()); ?>


                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Judul Utama</label>
                                            <div class="controls">
                                                <input type="text" name="judul" id="basicinput" value="<?php echo e($master->judul); ?>" class="span8">
                                                <span class="help-inline">Minimum 5 Characters</span>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Deskripsi</label>
                                            <div class="controls">
                                                <input type="text" name="deskripsi" id="basicinput" value="<?php echo e($master->deskripsi); ?>" class="span8">
                                                <span class="help-inline">Minimum 5 Characters</span>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Bidang</label>
                                            <div class="controls">
                                                <input type="text" name="judul_label" id="basicinput" placeholder="Type something here..." class="span8">
                                                <span class="help-inline">Minimum 5 Characters</span>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Prestasi</label>
                                            <div class="controls">
                                                <input type="text" name="isi_label" id="basicinput" placeholder="Type something here..." class="span8">
                                                <span class="help-inline">Minimum 5 Characters</span>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Icon</label>
                                            <div class="controls">
                                                <input type="text" name="icon" id="basicinput" placeholder="Type something here..." class="span8">
                                                <span class="help-inline">Minimum 5 Characters</span>
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
                                        <th>icon</th>
                                        <th>Admin</th>
                                        <th>action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                   <?php $__currentLoopData = $ungguls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ungguls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($ungguls->id == 1) continue; ?>
                                    <tr>
                                       <td><?php echo e($ungguls->subjudul); ?></td>
                                        <td><?php echo e($ungguls->isi); ?></td>
                                        <td><?php echo e($ungguls->icon); ?></td>
                                        <td><?php echo e($ungguls->id_admin); ?></td>
                                        <td><a href="#" class="btn btn-green">  <i class="fa fa-edit"> </i>   edit</a>
                                            <a href="/admin/ungguls/del/<?php echo e($ungguls->id); ?>" class="btn btn-red">  <i class="fa fa-trash-o"> </i>   hapus</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </tbody>
                                </table>


                                  

                            </div>

                        </div>
                       



                        
                        
                    </div><!--/.content-->
                </div><!--/.span9-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.bmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abrisam\AppData\Local\gitkraken\app-6.1.4\hasnainkhan\resources\views/admin/keunggulan.blade.php ENDPATH**/ ?>