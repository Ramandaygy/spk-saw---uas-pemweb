

<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
        <title>Edit Kriteria</title>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('kriteria.edit', $kriteria->id_kriteria)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <label for="id_kriteria">Id Kriteria:</label>
                <input type="text" id="id_kriteria" name="id_kriteria" value="<?php echo e($kriteria->id_kriteria); ?>"><br><br>

                <label for="nama_kriteria">Nama Kriteria:</label>
                <input type="text" id="nama_kriteria" name="nama_kriteria" value="<?php echo e($kriteria->nama_kriteria); ?>"><br><br>

                <label for="atribut">Atribut:</label>
                <input type="text" id="atribut" name="atribut" value="<?php echo e($kriteria->atribut); ?>"><br><br>

                <label for="bobot">Bobot:</label>
                <input type="text" id="bobot" name="bobot" value="<?php echo e($kriteria->bobot); ?>"><br><br>

                

                <input type="submit" value="Update">
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\spk-saw\resources\views/kriteria/edit.blade.php ENDPATH**/ ?>