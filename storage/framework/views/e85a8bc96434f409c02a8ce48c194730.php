

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        Create New Nilai
    </div>
    <div class="card-body">
        <form action="<?php echo e(route('nilai.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="alternatif_id">Nama Alternatif:</label>
                <select name="alternatif_id" id="alternatif_id" class="form-control">
                    <?php $__currentLoopData = $alternatifs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alternatif): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($alternatif->id); ?>"><?php echo e($alternatif->nama_alternatif); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <?php $__currentLoopData = $kriterias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kriteria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="form-group">
                <label for="nilai_<?php echo e($kriteria->id); ?>"><?php echo e($kriteria->nama_kriteria); ?>:</label>
                <input type="text" name="nilai[<?php echo e($kriteria->id); ?>]" id="nilai_<?php echo e($kriteria->id); ?>" class="form-control">
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <button type="submit" class="btn btn-primary">Create Nilai</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\spk-saw\resources\views/nilai/create.blade.php ENDPATH**/ ?>