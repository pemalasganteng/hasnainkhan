<?php $__env->startSection('isi'); ?>


                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Forms</h3>
                            </div>
                            <div class="module-body">

                                    
                                    <br />

                                    <form class="form-horizontal row-fluid" action="<?php echo e(route('up_gallery')); ?>" method="post" enctype="multipart/form-data" >
                                    <?php echo e(csrf_field()); ?>


                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Judul </label>
                                            <div class="controls">
                                               <input type="text" name="judul">
                                                <span class="help-inline">Minimum 5 Characters</span>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Deskripsi</label>
                                            <div class="controls">
                                                <input type="text" name="deskripsi">
                                                <span class="help-inline">Minimum 5 Characters</span>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Cover Gallery</label>
                                            <div class="controls">
                                                <input type="file" name="cover">
                                                <span class="help-inline">Jpeg | jpg | png</span>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">File Gambar</label>
                                            <div class="controls">
                                                <input type="file" name="image[]" class="form-control-file" multiple="true">
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
                                        <th>Deskripsi</th>
                                        <th>cover</th>
                                        <th>action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                              
                                   <?php for($i=0; $i<count($album); $i++): ?>
                                    <tr>
                                       <td><?php echo e($album[$i]->judul); ?></td>
                                        <td><?php echo e($album[$i]->deskripsi); ?></td>
                                        <td><?php echo e($album[$i]->cover); ?></td>
                                        <td><a href="/admin/gallery/<?php echo e($album[$i]->id); ?>" class="btn btn-green">  <i class="fa fa-edit"> </i>   edit</a>
                                            <a href="/admin/slider/del/" class="btn btn-red">  <i class="fa fa-trash-o"> </i>   hapus</a>
                                        </td>
                                    </tr>
                                    <?php endfor; ?>
                                  </tbody>
                                </table>
                            

                                  

                            </div>

                        </div>
                       



                        
                        
                    </div><!--/.content-->
                </div><!--/.span9-->

        <?php $__env->startSection('js'); ?>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

        <script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>
        <?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.bmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abrisam\AppData\Local\gitkraken\app-6.1.4\hasnainkhan\resources\views/admin/gallery.blade.php ENDPATH**/ ?>