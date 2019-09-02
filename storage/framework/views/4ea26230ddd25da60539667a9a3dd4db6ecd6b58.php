<?php $__env->startSection('isi'); ?>

<div class="span9">
					<div class="content">

<?php if(session('sukses')): ?>
    <div class="alert alert-success">
        <?php echo e(session('sukses')); ?>

    </div>
<?php endif; ?>
<?php if(session('gagal')): ?>
	<div class="alert alert-danger">
        <?php echo e(session('gagal')); ?>

    </div>
<?php endif; ?>
						<div class="module">
							<div class="module-head">
								<h3>Forms</h3>
							</div>
							<div class="module-body">
							<form action="<?php echo e(route('berita_update')); ?>" method="POST" enctype="multipart/form-data">
								<?php echo e(csrf_field()); ?>

								<div class="control-group">
											<label class="control-label" for="basicinput">Judul</label>
											<div class="controls">
												<input type="text" id="basicinput" name="judul" value="<?php echo e($edit->judul); ?>" class="span8">												
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Cover</label>
											<div class="controls">
												<img width="50px" src="/wysiwyg/<?php echo e($edit->cover); ?>">	
												<input class="btn btn-default" type="file" id="basicinput" name="cover" value="<?php echo e($edit->cover); ?>" class="span8">											
											</div>
										</div>
										<div class="control-group">
										<div class="controls">
											<textarea class="form-control" name="isi" id="article-ckeditor"><?php echo e($edit->isi); ?></textarea>
										</div>
										</div>	
										<script src="<?php echo e(asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')); ?>"></script>
										    <script>CKEDITOR.replace( 'article-ckeditor', {
										    	filebrowserUploadUrl: '<?php echo e(route('berita_upimage',['_token' => csrf_token() ])); ?>'}
										    );</script>

										 <div class="control-group">
											<label class="control-label" for="basicinput">Kategori</label>
											<div class="controls">
												<select name="id_kategori" tabindex="1" data-placeholder="Select here.." class="span3">
													<option value="<?php echo e($b[0]->id_kategori); ?>">-- <?php echo e($b[0]->nama_kategori); ?> --</option>
													<?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<option value="<?php echo e($kat->id_kategori); ?>"><?php echo e($kat->nama_kategori); ?></option>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												</select>
										<input type="hidden" value="<?php echo e($edit->id_berita); ?>" name="id_berita">
											</div>
										</div>
								<button class="btn" type="submit">Submit</button>		
							</form>

							

							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.bmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ppp\resources\views/admin/beritaedit.blade.php ENDPATH**/ ?>