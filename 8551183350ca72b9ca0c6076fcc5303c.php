<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Koleksi Buku</title>
</head>
<body>

    <h2>Daftar Buku Perpustakaan</h2>

    <ul>
        <?php $__currentLoopData = $data_buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($buku); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

</body>
</html><?php /**PATH C:\xampp\htdocs\5a-5d_Quiz_Anggih\resources\views/perpus_index.blade.php ENDPATH**/ ?>