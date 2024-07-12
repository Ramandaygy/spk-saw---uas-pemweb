

<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
    
        <div class="table-responsive m-0">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>atribut</th>
                        <th>bobot</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $kriterias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kriteria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($kriteria->id_kriteria); ?></td>
                            <td><?php echo e($kriteria->nama_kriteria); ?></td>
                            <td><?php echo e($kriteria->atribut); ?></td>
                            <td><?php echo e($kriteria->bobot); ?></td>

                            <td>
                                <a href="<?php echo e(route('kriteria.edit', $kriteria->id_kriteria)); ?>" class="btn btn-primary">Edit</a>
                                <form action="<?php echo e(route('kriteria.destroy', $kriteria->id_kriteria)); ?>" method="POST" style="display:inline;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                            
                        </tr>
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <a href="<?php echo e(route('kriteria.create')); ?>" class="btn btn-success mt-3">Create New Kriteria</a>
        </div>
    </div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\spk-saw\resources\views/kriteria/index.blade.php ENDPATH**/ ?>