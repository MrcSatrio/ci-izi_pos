<?= $this->extend('template/index');
$this->section('container'); ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Data Customer</h1>
    <a href="<?= base_url('koperasi/siswa/read') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Customer List</a>
</div>

<!-- Basic Card Example -->
<div class="card shadow mb-4">
    <div class="card-body">

        <?php if (session()->has('field_errors')) : ?>
            <div class="alert alert-danger" id="alertErrors">
                <?= session('field_errors') ?>
            </div>
        <?php endif; ?>

        <?php if (session()->has('field_errors')) : ?>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    Swal.fire({
                        title: 'Validation Error',
                        icon: 'error',
                        text: 'Mohon isi data sesuai kriteria',
                    });
                });
            </script>
        <?php endif; ?>

        <?php if (session()->has('success')) : ?>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    Swal.fire({
                        title: 'Success!',
                        icon: 'success',
                        text: '<?= session('success') ?>',
                    });
                });
            </script>
        <?php endif; ?>

        <?= include('form-update-profile.php') ?>

    </div>
</div>

<?= $this->endSection(); ?>