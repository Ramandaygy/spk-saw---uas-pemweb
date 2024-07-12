

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header"><?php echo e($title); ?></div>
    <div class="card-body">
        <form action="<?php echo e(route('alternatif.update', $alternatif->id_alternatif)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?> <!-- Method untuk update -->

            <div class="form-group">
                <label for="id_alternatif">ID Alternatif:</label>
                <input type="text" name="id_alternatif" id="id_alternatif" class="form-control" value="<?php echo e($alternatif->id_alternatif); ?>" readonly>
            </div>
            <div class="form-group">
                <label for="nama_alternatif">Nama Alternatif:</label>
                <input type="text" name="nama_alternatif" id="nama_alternatif" class="form-control" value="<?php echo e($alternatif->nama_alternatif); ?>">
            </div>
            <button type="submit" class="btn btn-success mt-3">Update</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\spk-saw\resources\views/alternatif/edit.blade.php ENDPATH**/ ?>