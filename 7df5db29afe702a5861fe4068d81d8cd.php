<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Info Dosen</title>
    <style>
        body {
            font-family: sans-serif;
            line-height: 1.6;
            padding: 20px;
        }

        .card {
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 8px;
            width: 300px;
            margin-bottom: 20px;
        }

        h2 {
            color: #2c3e50;
        }
    </style>
</head>
<body>

    <div class="card">
        <h2>Profil Dosen</h2>
        <p><strong>Nama:</strong> <?php echo e($nama); ?></p>
        <p><strong>Matakuliah:</strong> <?php echo e($mata_kuliah); ?></p>
        <p><strong>Tahun Akademik:</strong> <?php echo e($tahun); ?></p>
    </div>

    <h3>Daftar Mahasiswa:</h3>
    <ul>
        <?php $__currentLoopData = $list_mhs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($mhs); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

</body>
</html><?php /**PATH C:\xampp\htdocs\5a-5d_Quiz_Anggih\resources\views/info_dosen.blade.php ENDPATH**/ ?>