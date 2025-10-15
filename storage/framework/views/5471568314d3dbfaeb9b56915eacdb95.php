<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Mahasiswa</title>
  <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>
<body class="bg-gray-100 text-gray-800">
  <div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-5 text-center">Edit Mahasiswa</h1>

    <?php if($errors->any()): ?>
      <div class="bg-red-100 text-red-800 p-3 rounded mb-4">
        <ul class="list-disc pl-5">
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
    <?php endif; ?>

    <form action="<?php echo e(route('mahasiswa.update', $mahasiswa->id)); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <?php echo method_field('PUT'); ?>

      <div class="mb-4">
        <label class="block font-semibold mb-2">NIM</label>
        <input type="text" name="nim" class="border rounded w-full p-2" value="<?php echo e(old('nim', $mahasiswa->nim)); ?>">
      </div>

      <div class="mb-4">
        <label class="block font-semibold mb-2">Nama</label>
        <input type="text" name="nama" class="border rounded w-full p-2" value="<?php echo e(old('nama', $mahasiswa->nama)); ?>">
      </div>

      <div class="mb-4">
        <label class="block font-semibold mb-2">Prodi</label>
        <input type="text" name="prodi" class="border rounded w-full p-2" value="<?php echo e(old('prodi', $mahasiswa->prodi)); ?>">
      </div>

      <div class="flex justify-between items-center">
        <a href="<?php echo e(route('mahasiswa.index')); ?>" class="text-gray-600 hover:text-gray-800">← Kembali</a>
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Perbarui</button>
      </div>
    </form>
  </div>
</body>
</html>
<?php /**PATH C:\Users\LENOVO\kampus-laravel\resources\views/mahasiswa/edit.blade.php ENDPATH**/ ?>