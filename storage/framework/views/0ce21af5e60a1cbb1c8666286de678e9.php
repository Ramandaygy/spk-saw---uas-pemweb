

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header"><?php echo e($title); ?></div>
    <div class="card-body">
        <form action="<?php echo e(route('alternatif.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="id_alternatif">ID Alternatif:</label>
                <input type="text" name="id_alternatif" id="id_alternatif" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama_alternatif">Nama Alternatif:</label>
                <input type="text" name="nama_alternatif" id="nama_alternatif" class="form-control">
            </div>
            <button type="submit" class="btn btn-success mt-3">Create</button>
            <a href="<?php echo e(route('alternatif.index')); ?>" class="bg-green-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Kembali
                </a>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\spk-saw\resources\views/alternatif/create.blade.php ENDPATH**/ ?>