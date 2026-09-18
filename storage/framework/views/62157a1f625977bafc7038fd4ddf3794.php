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
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Data Mahasiswa')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <?php if(session('success')): ?>
                    <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>

                <div class="flex justify-end mb-4">
                    <a href="<?php echo e(route('mahasiswa.create')); ?>"
                       class="px-4 py-2 bg-gray-800 text-white rounded-md hover:bg-gray-700">
                        + Tambah Mahasiswa
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 text-sm">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-left">NIM</th>
                                <th class="px-4 py-2 text-left">Nama</th>
                                <th class="px-4 py-2 text-left">Tempat, Tgl Lahir</th>
                                <th class="px-4 py-2 text-left">Jenis Kelamin</th>
                                <th class="px-4 py-2 text-left">Program Studi</th>
                                <th class="px-4 py-2 text-left">No. HP</th>
                                <th class="px-4 py-2 text-left">Email</th>
                                <th class="px-4 py-2 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <?php $__empty_1 = true; $__currentLoopData = $mahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="px-4 py-2"><?php echo e($mhs->nim); ?></td>
                                    <td class="px-4 py-2"><?php echo e($mhs->nama_mahasiswa); ?></td>
                                    <td class="px-4 py-2">
                                        <?php echo e($mhs->tempat_lahir); ?>, <?php echo e($mhs->tanggal_lahir->format('d-m-Y')); ?>

                                    </td>
                                    <td class="px-4 py-2"><?php echo e($mhs->jenis_kelamin === 'L' ? 'Laki-laki' : 'Perempuan'); ?></td>
                                    <td class="px-4 py-2"><?php echo e($mhs->program_studi); ?></td>
                                    <td class="px-4 py-2"><?php echo e($mhs->no_hp); ?></td>
                                    <td class="px-4 py-2"><?php echo e($mhs->email); ?></td>
                                    <td class="px-4 py-2 text-center whitespace-nowrap">
                                        <a href="<?php echo e(route('mahasiswa.edit', $mhs->id)); ?>"
                                           class="text-blue-600 hover:underline">Detail/Edit</a>
                                        <form action="<?php echo e(route('mahasiswa.destroy', $mhs->id)); ?>"
                                              method="POST" class="inline"
                                              onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="text-red-600 hover:underline ml-2">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="8" class="px-4 py-4 text-center text-gray-500">
                                        Belum ada data mahasiswa.
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                    <?php echo e($mahasiswas->links()); ?>

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
<?php endif; ?><?php /**PATH C:\Users\USER\LARAVEL BREEZE\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>