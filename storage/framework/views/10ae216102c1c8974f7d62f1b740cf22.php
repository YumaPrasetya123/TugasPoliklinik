<?php $__env->startSection('content'); ?>
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Tambah Poliklinik</h1>

        <!-- Form Tambah Poliklinik -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form Tambah Poliklinik</h6>
            </div>

            <div class="card-body">
                <form action="<?php echo e(route('poli.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="nama_poli">Nama Poliklinik</label>
                        <input type="text" class="form-control" id="nama_poli" name="nama_poli" required>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Poliklinik</button>
                    <a href="<?php echo e(route('poliklinik')); ?>" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\poliklinik-udinus-main\resources\views/admin/pages/poliklinik/create.blade.php ENDPATH**/ ?>