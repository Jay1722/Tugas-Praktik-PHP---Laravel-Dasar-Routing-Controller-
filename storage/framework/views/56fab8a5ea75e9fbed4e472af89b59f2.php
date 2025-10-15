<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Mahasiswa</title>
  <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>
<body class="bg-gray-100 text-gray-800">
  <div class="max-w-4xl mx-auto mt-10">
    <h1 class="text-3xl font-bold mb-5 text-center">Daftar Mahasiswa</h1>

    <?php if(session('success')): ?>
      <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
        <?php echo e(session('success')); ?>

      </div>
    <?php endif; ?>

    <div class="flex justify-end mb-4">
      <a href="<?php echo e(route('mahasiswa.create')); ?>" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Tambah Mahasiswa</a>
    </div>

    <table class="w-full border-collapse bg-white rounded shadow">
      <thead>
        <tr class="bg-blue-600 text-white">
          <th class="p-3 border">ID</th>
          <th class="p-3 border">NIM</th>
          <th class="p-3 border">Nama</th>
          <th class="p-3 border">Prodi</th>
          <th class="p-3 border">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="hover:bg-gray-50">
          <td class="border p-3 text-center"><?php echo e($m->id); ?></td>
          <td class="border p-3"><?php echo e($m->nim); ?></td>
          <td class="border p-3"><?php echo e($m->nama); ?></td>
          <td class="border p-3"><?php echo e($m->prodi); ?></td>
          <td class="border p-3 text-center">
            <a href="<?php echo e(route('mahasiswa.edit', $m->id)); ?>" class="bg-yellow-400 px-3 py-1 rounded text-white hover:bg-yellow-500">Edit</a>
            <form action="<?php echo e(route('mahasiswa.destroy', $m->id)); ?>" method="POST" class="inline-block">
              <?php echo csrf_field(); ?>
              <?php echo method_field('DELETE'); ?>
              <button type="submit" class="bg-red-600 px-3 py-1 rounded text-white hover:bg-red-700" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
            </form>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
</body>
</html>
<?php /**PATH C:\Users\LENOVO\kampus-laravel\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>