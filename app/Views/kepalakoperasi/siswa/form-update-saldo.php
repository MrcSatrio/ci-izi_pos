<form action="<?= base_url('koperasi/siswa/update_saldo/' . $kartu['id_kartu']) ?>" method="post" class="needs-validation">

    <h5 class="card-title"><strong>Informasi Customer</strong></h5>
            <?php if (session()->has('success')) : ?>
            <div class="alert alert-success">
                <?= session('success') ?>
            </div>
            <?php endif; ?>
    <div class="form-group row">
        <label for="saldo_kartu" class="col-sm-2 col-form-label">Saldo Customer</label>
        <div class="col-sm-10">
            <input type="text" class="form-control <?php echo session('field_error.telp_customer') ? 'is-invalid' : ''; ?>" id="saldo_kartu" placeholder="Nomor Telepon Siswa" name="saldo_kartu" value="<?= $kartu['saldo_kartu']; ?>">
            <?php if (session()->has('field_error.saldo_kartu')) : ?>
                <div class="invalid-feedback">
                    <?php echo session('field_error.saldo_kartu'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <button class="btn btn-primary" type="submit" id="save">Simpan Data Customer</button>

</form>