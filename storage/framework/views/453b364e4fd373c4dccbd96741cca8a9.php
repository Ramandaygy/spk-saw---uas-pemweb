<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e($title); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #343a40; /* Ganti warna latar belakang navbar */
        }

        .navbar-brand {
            
            font-weight: bold ;
            color: #ffffff; /* Warna teks brand */
        }

        .navbar-nav .nav-link {
            color: #ffffff; /* Warna teks link */
        }

        .navbar-nav .nav-link:hover {
            color: #ffc107; /* Warna teks link saat hover */
        }

        .btn-logout {
            background-color: #dc3545;
            color: #ffffff;
        }

        .btn-logout:hover {
            background-color: #c82333;
        }

        .content {
            padding-top: 50px; /* Tambahkan padding agar konten tidak tertutup navbar */
        }

        .container h1 {
            margin-top: 20px;
            color: #343a40; /* Warna teks judul */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">SERENITYCRPT </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('home')); ?>"><strong>HOME</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('alternatif')); ?>"><strong>ALTERNATIF</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('kriteria')); ?>"><strong>KRITERIA</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('nilai')); ?>"><strong>NILAI</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('hitung')); ?>"><strong>PERHITUNGAN</strong></a>
                </li>
            </ul>
            <form action="<?php echo e(route('logout')); ?>" method="POST" class="d-flex" role="search">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button class="btn btn-logout" type="submit">Logout</button>
            </form>
        </div>
    </div>
</nav>

<div class="container content">
    <h1><?php echo e($title); ?></h1>
    <?php echo $__env->yieldContent('content'); ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\spk-saw\resources\views/app.blade.php ENDPATH**/ ?>