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
        <h2 class="text-2xl font-bold text-gray-800 leading-tight">
            <?php echo e(__('Daftar Fakultas')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-10">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-xl p-6">
                
                
                <?php if(session('success')): ?>
                    <div class="bg-green-100 text-green-800 p-3 rounded mb-4 border border-green-300">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>

                
                <div class="flex justify-end mb-6">
                    <a href="<?php echo e(route('fakultas.create')); ?>" 
                       class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700 transition">
                        + Tambah Fakultas
                    </a>
                </div>

                
                <div class="overflow-x-auto">
                    <table class="w-full border border-gray-200 rounded-lg overflow-hidden text-center">
                        <thead>
                            <tr class="bg-blue-600 text-white">
                                <th class="p-3 border text-center">ID</th>
                                <th class="p-3 border text-center">Nama Fakultas</th>
                                <th class="p-3 border text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <?php $__empty_1 = true; $__currentLoopData = $fakultas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr class="hover:bg-gray-100 transition">
                                    <td class="p-3"><?php echo e($f->id); ?></td>
                                    <td class="p-3"><?php echo e($f->nama_fakultas); ?></td>
                                    <td class="p-3 min-w-[180px]">
                                        <div class="flex justify-center gap-2">
                                            <a href="<?php echo e(route('fakultas.edit', $f->id)); ?>" 
                                               class="bg-yellow-400 hover:bg-yellow-500 text-black px-3 py-1 rounded-lg shadow-md transition">
                                                ✏️ Edit
                                            </a>

                                            <form action="<?php echo e(route('fakultas.destroy', $f->id)); ?>" 
                                                  method="POST" 
                                                  onsubmit="return confirm('Yakin ingin hapus fakultas ini?')">
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
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="3" class="p-4 text-gray-500">Belum ada data fakultas.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
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
<?php /**PATH C:\Users\LENOVO\kampus-laravel\resources\views/fakultas/index.blade.php ENDPATH**/ ?>