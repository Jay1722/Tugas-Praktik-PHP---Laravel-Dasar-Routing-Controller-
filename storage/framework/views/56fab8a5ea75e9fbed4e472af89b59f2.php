<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-black">
            <?php echo e(__('Daftar Mahasiswa')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-100 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-700">

                    
                    <?php if(session('success')): ?>
                        <div class="bg-green-100 border border-green-400 text-green-800 px-4 py-2 rounded mb-4">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>

                    
                    <div class="flex justify-end mb-4">
                        <a href="<?php echo e(route('mahasiswa.create')); ?>" 
                           class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow transition">
                            + Tambah Mahasiswa
                        </a>
                    </div>

                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-gray-300 rounded-lg">
                            <thead class="bg-white text-black">
                                <tr>
                                    <th class="px-4 py-2 text-left border">ID</th>
                                    <th class="px-4 py-2 text-left border">NIM</th>
                                    <th class="px-4 py-2 text-left border">Nama</th>
                                    <th class="px-4 py-2 text-left border">Prodi</th>
                                    <th class="px-4 py-2 text-center border">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="hover:bg-gray-200 dark:hover:bg-gray-200 transition">
                                        <td class="px-4 py-2 border"><?php echo e($m->id); ?></td>
                                        <td class="px-4 py-2 border"><?php echo e($m->nim); ?></td>
                                        <td class="px-4 py-2 border"><?php echo e($m->nama); ?></td>
                                        <td class="px-4 py-2 border text-blue-600">
                                            <a href="<?php echo e(route('prodi.index')); ?>" 
                                               class="hover:underline hover:text-blue-800 dark:hover:text-blue-400">
                                                <?php echo e($m->prodi); ?>

                                            </a>
                                        </td>
                                        <td class="px-4 py-2 border text-center">
                                            <div class="flex justify-center gap-2">
                                                <a href="<?php echo e(route('mahasiswa.edit', $m->id)); ?>" 
                                                   class="bg-yellow-400 hover:bg-yellow-500 text-black px-3 py-1 rounded-lg shadow-md transition">
                                                    ✏️ Edit
                                                </a>
                                                <form action="<?php echo e(route('mahasiswa.destroy', $m->id)); ?>" 
                                                      method="POST" 
                                                      onsubmit="return confirm('Yakin ingin hapus?')">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" 
                                                            class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-lg shadow-md transition">
                                                        🗑️ Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\Users\LENOVO\kampus-laravel\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>