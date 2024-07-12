

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="table-responsive m-0">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Alternatif</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $alternatifs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alternatif): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($alternatif->id_alternatif); ?></td>
                    <td><?php echo e($alternatif->nama_alternatif); ?></td>
                    <td>
                        <a href="<?php echo e(route('alternatif.edit', $alternatif->id_alternatif)); ?>" class="btn btn-primary">Edit</a>
                        <form action="<?php echo e(route('alternatif.destroy', $alternatif->id_alternatif)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <a href="<?php echo e(route('alternatif.create')); ?>" class="btn btn-success mt-3">Create New Alternatif</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\spk-saw\resources\views/alternatif/index.blade.php ENDPATH**/ ?>