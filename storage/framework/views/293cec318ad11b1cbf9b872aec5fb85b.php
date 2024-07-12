
<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('content'); ?>
<div class="w-50 center border rounded px-3 py-3 mx-auto">
    <title>login</title>
    <form action="/pengguna/login" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control">

        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control">

        </div>
        <div class="mb-3 d-grid">
            <button name="submit" type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\spk-saw\resources\views/sesi/index.blade.php ENDPATH**/ ?>